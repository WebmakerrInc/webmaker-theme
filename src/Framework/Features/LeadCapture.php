<?php

namespace Webmakerr\Framework\Features;

use WP_Error;
use WP_REST_Request;
use WP_REST_Response;
use WP_REST_Server;

class LeadCapture
{
    private string $namespace = 'webmakerr/v1';
    private string $route = '/crm-lead';

    public function register(): void
    {
        add_action('rest_api_init', [$this, 'registerRoutes']);
    }

    public function registerRoutes(): void
    {
        register_rest_route(
            $this->namespace,
            $this->route,
            [
                'methods'             => WP_REST_Server::CREATABLE,
                'callback'            => [$this, 'handleLead'],
                'permission_callback' => '__return_true',
                'args'                => [
                    'name'           => [
                        'required'          => true,
                        'sanitize_callback' => static function ($value) {
                            return sanitize_text_field(wp_unslash((string) $value));
                        },
                    ],
                    'email'          => [
                        'required'          => true,
                        'sanitize_callback' => static function ($value) {
                            return sanitize_email(wp_unslash((string) $value));
                        },
                    ],
                    'company_size'   => [
                        'required'          => true,
                        'sanitize_callback' => static function ($value) {
                            return sanitize_text_field(wp_unslash((string) $value));
                        },
                    ],
                    'primary_goal'   => [
                        'required'          => true,
                        'sanitize_callback' => static function ($value) {
                            return sanitize_text_field(wp_unslash((string) $value));
                        },
                    ],
                    'company_size_label' => [
                        'required'          => false,
                        'sanitize_callback' => static function ($value) {
                            return sanitize_text_field(wp_unslash((string) $value));
                        },
                    ],
                    'primary_goal_label' => [
                        'required'          => false,
                        'sanitize_callback' => static function ($value) {
                            return sanitize_text_field(wp_unslash((string) $value));
                        },
                    ],
                    'source'         => [
                        'required'          => false,
                        'sanitize_callback' => static function ($value) {
                            return sanitize_text_field(wp_unslash((string) $value));
                        },
                    ],
                ],
            ]
        );
    }

    public function handleLead(WP_REST_Request $request): WP_REST_Response
    {
        $name              = (string) $request->get_param('name');
        $email             = (string) $request->get_param('email');
        $companySize       = (string) $request->get_param('company_size');
        $primaryGoal       = (string) $request->get_param('primary_goal');
        $companySizeLabel  = (string) $request->get_param('company_size_label');
        $primaryGoalLabel  = (string) $request->get_param('primary_goal_label');
        $source            = (string) $request->get_param('source');

        $errors = [];

        if ($name === '' || mb_strlen($name) < 2) {
            $errors['name'] = __('Please tell us who we’ll be speaking with.', 'webmakerr');
        }

        if ($email === '' || ! is_email($email)) {
            $errors['email'] = __('Share a valid work email so we can confirm the session.', 'webmakerr');
        }

        if ($companySize === '') {
            $errors['company_size'] = __('Select the size of your team.', 'webmakerr');
        }

        if ($primaryGoal === '') {
            $errors['primary_goal'] = __('Let us know the outcome you care about most.', 'webmakerr');
        }

        if (! empty($errors)) {
            return new WP_REST_Response(
                [
                    'success' => false,
                    'message' => __('Please review the highlighted fields.', 'webmakerr'),
                    'errors'  => $errors,
                ],
                422
            );
        }

        $payload = [
            'name'               => sanitize_text_field($name),
            'email'              => sanitize_email($email),
            'company_size'       => sanitize_text_field($companySize),
            'company_size_label' => $companySizeLabel !== '' ? sanitize_text_field($companySizeLabel) : '',
            'primary_goal'       => sanitize_text_field($primaryGoal),
            'primary_goal_label' => $primaryGoalLabel !== '' ? sanitize_text_field($primaryGoalLabel) : '',
            'source'             => $source !== '' ? sanitize_text_field($source) : 'marketing-business-hero',
            'meta'               => [
                'referer'    => isset($_SERVER['HTTP_REFERER']) ? esc_url_raw(wp_unslash((string) $_SERVER['HTTP_REFERER'])) : '',
                'user_agent' => isset($_SERVER['HTTP_USER_AGENT']) ? sanitize_text_field(wp_unslash((string) $_SERVER['HTTP_USER_AGENT'])) : '',
            ],
        ];

        $payload = apply_filters('webmakerr_crm_lead_payload', $payload, $request);

        $dispatchResult = apply_filters('webmakerr_crm_lead_dispatch', true, $payload, $request);

        if ($dispatchResult instanceof WP_Error) {
            return new WP_REST_Response(
                [
                    'success' => false,
                    'message' => $dispatchResult->get_error_message(),
                ],
                500
            );
        }

        if ($dispatchResult === false) {
            return new WP_REST_Response(
                [
                    'success' => false,
                    'message' => __('We couldn’t reach the CRM endpoint. Please try again shortly.', 'webmakerr'),
                ],
                502
            );
        }

        $endpoint = apply_filters('webmakerr_crm_endpoint', '', $payload, $request);

        if (is_string($endpoint) && $endpoint !== '') {
            $response = wp_remote_post(
                $endpoint,
                [
                    'timeout' => 12,
                    'headers' => [
                        'Accept'       => 'application/json',
                        'Content-Type' => 'application/json',
                    ],
                    'body'    => wp_json_encode($payload),
                ]
            );

            if (is_wp_error($response)) {
                return new WP_REST_Response(
                    [
                        'success' => false,
                        'message' => __('We couldn’t deliver your details to the CRM. Please try again shortly.', 'webmakerr'),
                    ],
                    502
                );
            }

            $statusCode = (int) wp_remote_retrieve_response_code($response);

            if ($statusCode >= 400) {
                return new WP_REST_Response(
                    [
                        'success' => false,
                        'message' => __('The CRM endpoint rejected the submission. Please try again.', 'webmakerr'),
                    ],
                    $statusCode
                );
            }
        }

        do_action('webmakerr_crm_lead_captured', $payload, $request);

        $confirmationUrl = apply_filters(
            'webmakerr_crm_confirmation_url',
            home_url('/book-a-demo/'),
            $payload,
            $request
        );

        return new WP_REST_Response(
            [
                'success'          => true,
                'message'          => __('Thanks! A strategist will reach out with confirmation details shortly.', 'webmakerr'),
                'confirmation_url' => is_string($confirmationUrl) ? esc_url_raw($confirmationUrl) : '',
            ],
            200
        );
    }
}
