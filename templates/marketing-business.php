<?php
/**
 * Template Name: Marketing Business
 */

if (! defined('ABSPATH')) {
    exit;
}

if (! function_exists('marketing_business_render_icon')) {
    function marketing_business_render_icon($name, $class = 'h-5 w-5')
    {
        if (function_exists('webcommerce_render_icon')) {
            return webcommerce_render_icon($name, $class);
        }

        $icons = array(
            'zap' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>',
            'layers' => '<polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline>',
            'check' => '<path d="M20 6 9 17l-5-5"></path>',
            'activity' => '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>',
            'database' => '<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5v6c0 1.7 4 3 9 3s9-1.3 9-3V5"></path><path d="M3 11v6c0 1.7 4 3 9 3s9-1.3 9-3v-6"></path>',
            'shield-check' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"></path><path d="m9 11 2 2 4-4"></path>',
            'repeat' => '<path d="m17 2 4 4-4 4"></path><path d="m7 22-4-4 4-4"></path><path d="M21 6H12a3 3 0 0 0-3 3v1"></path><path d="M3 18h9a3 3 0 0 0 3-3v-1"></path>',
            'server' => '<rect x="2" y="2" width="20" height="8" rx="2"></rect><rect x="2" y="14" width="20" height="8" rx="2"></rect><path d="M6 6h.01"></path><path d="M6 18h.01"></path>',
            'smile' => '<circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line>',
            'cloud' => '<path d="M17.5 19a4.5 4.5 0 0 0-.5-9 7 7 0 0 0-13.5 1 4.5 4.5 0 0 0 .5 9Z"></path>',
            'target' => '<circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle>',
            'search' => '<circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.35-4.35"></path>',
            'user-plus' => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><line x1="19" y1="8" x2="19" y2="14"></line><line x1="22" y1="11" x2="16" y2="11"></line>',
            'sliders' => '<line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line>',
            'rocket' => '<path d="M4.5 16.5a2.12 2.12 0 0 0 3 3L12 15"></path><path d="M12 15l4.5 4.5a2.12 2.12 0 0 0 3-3"></path><path d="M12 15v4"></path><path d="M6 9c3-3 9-3 12 0l2 2-8 8-8-8 2-2Z"></path><circle cx="12" cy="9" r="2"></circle><path d="M12 3v3"></path>',
            'trending-up' => '<path d="M22 7 12.5 16.5 8 12l-6 6"></path><path d="M16 7h6v6"></path>',
        );

        if (! isset($icons[$name])) {
            return '';
        }

        return sprintf(
            '<svg class="%1$s" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">%2$s</svg>',
            esc_attr($class),
            $icons[$name]
        );
    }
}

if (! function_exists('marketing_business_feature_icon')) {
    function marketing_business_feature_icon($name, $class = 'h-4 w-4 md:h-5 md:w-5 inline-block mr-2 shrink-0')
    {
        $icons = array(
            'monitor'   => '<rect x="3" y="4" width="18" height="12" rx="2" fill="none"></rect><path d="M9 20h6" fill="none" stroke-width="1.5" stroke-linecap="round"></path><path d="M12 16v4" fill="none" stroke-width="1.5" stroke-linecap="round"></path>',
            'cloud'     => '<path d="M7 18a5 5 0 1 1 1.1-9.87A6 6 0 1 1 17 18Z" fill="none" stroke-width="1.5"></path>',
            'loop'      => '<path d="M15 3h6v6" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9 21H3v-6" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M21 9A6 6 0 0 0 10.5 4.5L9 3" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 15A6 6 0 0 0 13.5 19.5L15 21" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>',
            'cart'      => '<path d="M4 5h2l1.2 8.4A2 2 0 0 0 9.2 15h7.6a2 2 0 0 0 2-1.6L20 8H7" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><circle cx="9" cy="19" r="1.5" fill="none"></circle><circle cx="17" cy="19" r="1.5" fill="none"></circle>',
            'calendar'  => '<rect x="4" y="5" width="16" height="15" rx="2" fill="none"></rect><path d="M8 3v4" fill="none" stroke-width="1.5" stroke-linecap="round"></path><path d="M16 3v4" fill="none" stroke-width="1.5" stroke-linecap="round"></path><path d="M4 10h16" fill="none" stroke-width="1.5"></path>',
            'search'    => '<circle cx="11" cy="11" r="6" fill="none"></circle><path d="m16 16 4 4" fill="none" stroke-width="1.5" stroke-linecap="round"></path>',
            'chat'      => '<path d="M20 15a3 3 0 0 1-3 3H9l-5 3V6a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3Z" fill="none"></path><path d="M8 8h8" fill="none" stroke-width="1.5" stroke-linecap="round"></path><path d="M8 12h5" fill="none" stroke-width="1.5" stroke-linecap="round"></path>',
            'checklist' => '<path d="M9 6h12" fill="none" stroke-width="1.5" stroke-linecap="round"></path><path d="M9 12h12" fill="none" stroke-width="1.5" stroke-linecap="round"></path><path d="M9 18h12" fill="none" stroke-width="1.5" stroke-linecap="round"></path><path d="m4 6 1.5 1.5L8 5" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="m4 12 1.5 1.5L8 11" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="m4 18 1.5 1.5L8 17" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>',
            'target'    => '<circle cx="12" cy="12" r="8" fill="none"></circle><circle cx="12" cy="12" r="4" fill="none"></circle><circle cx="12" cy="12" r="1.5"></circle>',
            'lock'      => '<rect x="5" y="11" width="14" height="10" rx="2" fill="none"></rect><path d="M9 11V8a3 3 0 0 1 6 0v3" fill="none" stroke-width="1.5" stroke-linecap="round"></path><path d="M12 15v3" fill="none" stroke-width="1.5" stroke-linecap="round"></path>',
            'coins'     => '<ellipse cx="12" cy="6" rx="6" ry="2.5" fill="none"></ellipse><path d="M6 6v6c0 1.4 2.7 2.5 6 2.5s6-1.1 6-2.5V6" fill="none" stroke-width="1.5"></path><path d="M6 12v6c0 1.4 2.7 2.5 6 2.5s6-1.1 6-2.5v-6" fill="none" stroke-width="1.5"></path>'
        );

        if (! isset($icons[$name])) {
            return '';
        }

        return sprintf(
            '<svg class="%1$s" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">%2$s</svg>',
            esc_attr($class),
            $icons[$name]
        );
    }
}
$marketing_business_demo_anchor = '#demo';
$marketing_business_demo_link   = get_permalink(get_page_by_path('book-a-demo'));

if (! $marketing_business_demo_link) {
    $marketing_business_demo_link = get_permalink(get_page_by_path('contact'));
}

if (! $marketing_business_demo_link) {
    $marketing_business_demo_link = home_url('/contact/');
}

$marketing_business_steps_total = 3;
$marketing_business_lead_endpoint      = esc_url_raw(rest_url('webmakerr/v1/crm-lead'));
$marketing_business_lead_nonce         = wp_create_nonce('wp_rest');
$marketing_business_progress_template  = __('Step {current} of {total}', 'webmakerr');
$marketing_business_script_handle      = 'webmakerr-build-assets-app-js';
$marketing_business_customer_stories   = home_url('/customer-stories/');

$marketing_business_inline_script = <<<'JS'
(function () {
    if (window.__webmakerrMarketingDemoSchedulerInitialized) {
        return;
    }
    window.__webmakerrMarketingDemoSchedulerInitialized = true;

    var ready = function (callback) {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', callback, { once: true });
        } else {
            callback();
        }
    };

    ready(function () {
        var initializeSimpleLeadForm = function (simpleForm) {
            if (!simpleForm || simpleForm.__webmakerrInitialized) {
                return;
            }

            simpleForm.__webmakerrInitialized = true;

            var endpoint = simpleForm.dataset.endpoint || '';
            var nonce = simpleForm.dataset.nonce || '';
            var successPanel = simpleForm.dataset.successTarget ? document.querySelector(simpleForm.dataset.successTarget) : null;
            var successMessage = successPanel ? successPanel.querySelector('[data-success-message]') : null;
            var successLink = successPanel ? successPanel.querySelector('[data-success-link]') : null;
            var successHeading = successPanel ? successPanel.querySelector('[data-success-heading]') : null;
            var downloadUrl = simpleForm.dataset.downloadUrl || '';
            var isSubmitting = false;

            var alertBox = simpleForm.querySelector('[data-form-alert]');
            var submitButton = simpleForm.querySelector('[data-submit]');
            var defaultSubmitLabel = submitButton ? (submitButton.getAttribute('data-default-label') || submitButton.textContent) : '';
            var loadingSubmitLabel = submitButton ? (submitButton.getAttribute('data-loading-label') || defaultSubmitLabel) : defaultSubmitLabel;

            var fieldWrappers = {};
            Array.prototype.forEach.call(simpleForm.querySelectorAll('[data-field]'), function (wrapper) {
                var key = wrapper.getAttribute('data-field');

                if (key) {
                    fieldWrappers[key] = wrapper;
                }
            });

            var errorNodes = {};
            Array.prototype.forEach.call(simpleForm.querySelectorAll('[data-error]'), function (node) {
                var key = node.getAttribute('data-error');

                if (key) {
                    errorNodes[key] = node;
                }
            });

            var getRadioGroup = function (input) {
                if (!input || input.type !== 'radio' || !input.name) {
                    return [];
                }

                return Array.prototype.slice.call(
                    simpleForm.querySelectorAll('input[type="radio"][name="' + input.name + '"]')
                );
            };

            var getFieldValueInfo = function (input) {
                var result = { value: '', label: '' };

                if (!input) {
                    return result;
                }

                if (input.type === 'checkbox') {
                    result.value = input.checked ? (input.value || 'on') : '';
                    return result;
                }

                if (input.type === 'radio') {
                    var radios = getRadioGroup(input);

                    for (var i = 0; i < radios.length; i += 1) {
                        if (radios[i].checked) {
                            result.value = radios[i].value || '';
                            result.label = radios[i].dataset.label || '';
                            break;
                        }
                    }

                    return result;
                }

                var value = input.value || '';

                if (input.tagName === 'SELECT') {
                    var selectedLabel = '';

                    if (input.selectedOptions && input.selectedOptions.length) {
                        selectedLabel = input.selectedOptions[0].textContent || '';
                    } else if (typeof input.selectedIndex === 'number' && input.options && input.options.length) {
                        var selectedOption = input.options[input.selectedIndex];
                        if (selectedOption) {
                            selectedLabel = selectedOption.textContent || '';
                        }
                    }

                    result.label = selectedLabel.trim();
                }

                result.value = value.trim ? value.trim() : value;

                return result;
            };

            var fieldInputs = {};
            Object.keys(fieldWrappers).forEach(function (key) {
                var wrapper = fieldWrappers[key];
                var input = wrapper.querySelector('input, select, textarea');

                if (input) {
                    fieldInputs[key] = input;

                    if (input.type === 'radio') {
                        var radios = getRadioGroup(input);

                        radios.forEach(function (radio) {
                            radio.addEventListener('change', function () {
                                clearFieldError(key);
                                clearGeneralAlert();
                            });
                        });
                    } else {
                        var eventName = input.tagName === 'SELECT' ? 'change' : 'input';

                        input.addEventListener(eventName, function () {
                            clearFieldError(key);
                            clearGeneralAlert();
                        });
                    }
                }
            });

            var clearGeneralAlert = function () {
                if (alertBox) {
                    alertBox.classList.add('hidden');
                    alertBox.textContent = '';
                }
            };

            var showGeneralAlert = function (message) {
                if (alertBox) {
                    alertBox.textContent = message;
                    alertBox.classList.remove('hidden');
                }
            };

            var getFieldMessage = function (field) {
                var wrapper = fieldWrappers[field];

                if (wrapper && wrapper.dataset.errorMessage) {
                    return wrapper.dataset.errorMessage;
                }

                return simpleForm.dataset.errorMessage || 'Please review the form.';
            };

            var clearFieldError = function (field) {
                var wrapper = fieldWrappers[field];

                if (wrapper) {
                    wrapper.removeAttribute('data-invalid');
                }

                var node = errorNodes[field];

                if (node) {
                    node.textContent = '';
                    node.classList.add('hidden');
                }

                var input = fieldInputs[field];

                if (input) {
                    if (input.type === 'radio') {
                        getRadioGroup(input).forEach(function (radio) {
                            radio.removeAttribute('aria-invalid');
                        });
                    } else {
                        input.removeAttribute('aria-invalid');
                    }
                }
            };

            var showFieldError = function (field, message) {
                var wrapper = fieldWrappers[field];

                if (wrapper) {
                    wrapper.setAttribute('data-invalid', 'true');
                }

                var node = errorNodes[field];

                if (node) {
                    node.textContent = message;
                    node.classList.remove('hidden');
                }

                var input = fieldInputs[field];

                if (input) {
                    if (input.type === 'radio') {
                        getRadioGroup(input).forEach(function (radio) {
                            radio.setAttribute('aria-invalid', 'true');
                        });
                    } else {
                        input.setAttribute('aria-invalid', 'true');
                    }
                }
            };

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            var validateForm = function () {
                var valid = true;
                var firstInvalid = null;

                Object.keys(fieldInputs).forEach(function (key) {
                    clearFieldError(key);

                    var input = fieldInputs[key];
                    var wrapper = fieldWrappers[key];
                    var required = wrapper && wrapper.hasAttribute('data-required');
                    var fieldInfo = getFieldValueInfo(input);
                    var value = fieldInfo.value;

                    if (required && !value) {
                        valid = false;

                        if (!firstInvalid) {
                            firstInvalid = key;
                        }

                        showFieldError(key, getFieldMessage(key));
                        return;
                    }

                    if (value && wrapper && wrapper.dataset.validate === 'email' && !emailPattern.test(value)) {
                        valid = false;

                        if (!firstInvalid) {
                            firstInvalid = key;
                        }

                        showFieldError(key, getFieldMessage(key));
                    }
                });

                if (!valid && firstInvalid && fieldInputs[firstInvalid] && typeof fieldInputs[firstInvalid].focus === 'function') {
                    fieldInputs[firstInvalid].focus();
                }

                return valid;
            };

            if (simpleForm.tagName === 'FORM') {
                simpleForm.addEventListener('submit', function (event) {
                    event.preventDefault();
                });
            }

            if (!submitButton) {
                return;
            }

            submitButton.addEventListener('click', function (event) {
                event.preventDefault();

                if (isSubmitting) {
                    return;
                }

                clearGeneralAlert();

                if (!validateForm()) {
                    return;
                }

                if (!endpoint) {
                    showGeneralAlert(simpleForm.dataset.errorMessage || 'Unable to submit right now. Please try again soon.');
                    return;
                }

                isSubmitting = true;
                submitButton.disabled = true;
                submitButton.textContent = loadingSubmitLabel;

                var payload = {
                    name: '',
                    email: '',
                    company: '',
                    company_size: '',
                    website: '',
                    primary_goal: ''
                };

                Object.keys(fieldInputs).forEach(function (key) {
                    var input = fieldInputs[key];
                    var fieldInfo = getFieldValueInfo(input);
                    var value = fieldInfo.value;
                    var label = fieldInfo.label;

                    if (key === 'name') {
                        payload.name = value;
                    } else if (key === 'email') {
                        payload.email = value;
                    } else if (key === 'company') {
                        payload.company = value;
                    } else if (key === 'company_size') {
                        payload.company_size = value;

                        if (label) {
                            payload.company_size_label = label;
                        }
                    } else if (key === 'website') {
                        payload.website = value;
                    } else if (key === 'primary_goal') {
                        payload.primary_goal = value;

                        if (label) {
                            payload.primary_goal_label = label;
                        }
                    }

                    if (input && input.name && value) {
                        payload[input.name] = value;
                    }
                });

                if (simpleForm.dataset.source) {
                    payload.source = simpleForm.dataset.source;
                }

                if (simpleForm.dataset.offer) {
                    payload.offer = simpleForm.dataset.offer;
                }

                if (simpleForm.dataset.funnel) {
                    payload.funnel_stage = simpleForm.dataset.funnel;
                }

                if (simpleForm.dataset.intent) {
                    payload.intent = simpleForm.dataset.intent;
                }

                if (simpleForm.dataset.formLocation) {
                    payload.form_location = simpleForm.dataset.formLocation;
                }

                payload.page = window.location.href;

                Array.prototype.forEach.call(simpleForm.querySelectorAll('input[type="hidden"]'), function (hiddenInput) {
                    if (hiddenInput.name && hiddenInput.value) {
                        payload[hiddenInput.name] = hiddenInput.value;
                    }
                });

                fetch(endpoint, {
                    method: 'POST',
                    credentials: 'same-origin',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-WP-Nonce': nonce
                    },
                    body: JSON.stringify(payload)
                })
                    .then(function (response) {
                        return response.json().catch(function () {
                            return {};
                        }).then(function (data) {
                            return {
                                ok: response.ok,
                                status: response.status,
                                data: data
                            };
                        });
                    })
                    .then(function (result) {
                        isSubmitting = false;
                        submitButton.disabled = false;
                        submitButton.textContent = defaultSubmitLabel;

                        if (result.ok && result.data && result.data.success !== false) {
                            clearGeneralAlert();

                            if (simpleForm.tagName === 'FORM') {
                                simpleForm.classList.add('hidden');
                                simpleForm.setAttribute('aria-hidden', 'true');
                                simpleForm.reset();
                            }

                            if (successPanel) {
                                successPanel.classList.remove('hidden');
                                successPanel.setAttribute('aria-hidden', 'false');
                            }

                            if (successMessage) {
                                if (result.data && result.data.message) {
                                    successMessage.textContent = result.data.message;
                                } else if (successMessage.dataset.defaultMessage) {
                                    successMessage.textContent = successMessage.dataset.defaultMessage;
                                }
                            }

                            if (successHeading) {
                                if (result.data && result.data.title) {
                                    successHeading.textContent = result.data.title;
                                } else if (successHeading.dataset.defaultHeading) {
                                    successHeading.textContent = successHeading.dataset.defaultHeading;
                                }
                            }

                            if (successLink) {
                                if (result.data && result.data.confirmation_url) {
                                    successLink.href = result.data.confirmation_url;
                                } else if (downloadUrl) {
                                    successLink.href = downloadUrl;
                                }
                            }

                            simpleForm.dispatchEvent(new CustomEvent('webmakerr:leadSuccess', { bubbles: true, detail: payload }));
                        } else {
                            var message = (result.data && result.data.message) ? result.data.message : (simpleForm.dataset.errorMessage || 'Something went wrong. Please try again.');
                            showGeneralAlert(message);

                            if (result.data && result.data.errors) {
                                Object.keys(result.data.errors).forEach(function (fieldKey) {
                                    var fieldMessage = result.data.errors[fieldKey];
                                    showFieldError(fieldKey, fieldMessage || getFieldMessage(fieldKey));
                                });
                            }
                        }
                    })
                    .catch(function () {
                        isSubmitting = false;
                        submitButton.disabled = false;
                        submitButton.textContent = defaultSubmitLabel;
                        showGeneralAlert(simpleForm.dataset.errorMessage || 'Something went wrong. Please try again.');
                    });
            });
        };

        var simpleForms = document.querySelectorAll('[data-lead-form]');

        if (simpleForms.length) {
            simpleForms.forEach(function (simpleForm) {
                initializeSimpleLeadForm(simpleForm);
            });
        }

        var form = document.getElementById('marketing-demo-scheduler');
        var clearGeneralAlert = function () {};
        var showGeneralAlert = function () {};

        if (form) {
            var steps = Array.prototype.slice.call(form.querySelectorAll('[data-step]'));

            if (!steps.length) {
                return;
            }

            var progressLabel = form.querySelector('[data-progress-label]');
            var alertBox = form.querySelector('[data-form-alert]');
            var successPanel = document.getElementById('marketing-demo-success');
            var successMessage = successPanel ? successPanel.querySelector('[data-success-message]') : null;
            var confirmationLink = successPanel ? successPanel.querySelector('[data-confirmation-link]') : null;
            var nameInput = form.querySelector('[name="full_name"]');
            var emailInput = form.querySelector('[name="company_email"]');
            var companySizeSelect = form.querySelector('[name="company_size"]');
            var primaryGoalInputs = Array.prototype.slice.call(form.querySelectorAll('input[name="primary_goal"]'));

            var summaryNodes = {
                name: form.querySelector('[data-summary="name"]'),
                email: form.querySelector('[data-summary="email"]'),
                company_size: form.querySelector('[data-summary="company_size"]'),
                primary_goal: form.querySelector('[data-summary="primary_goal"]')
            };

            var fieldWrappers = {};
            Array.prototype.forEach.call(form.querySelectorAll('[data-field]'), function (wrapper) {
                var key = wrapper.getAttribute('data-field');
                if (key) {
                    fieldWrappers[key] = wrapper;
                }
            });

            var errorNodes = {};
            Array.prototype.forEach.call(form.querySelectorAll('[data-error]'), function (node) {
                var key = node.getAttribute('data-error');
                if (key) {
                    errorNodes[key] = node;
                }
            });

            var fieldInputs = {
                name: nameInput,
                email: emailInput,
                company_size: companySizeSelect,
                primary_goal: primaryGoalInputs.length ? primaryGoalInputs[0] : null
            };

            var totalSteps = steps.length;
            var currentStep = 0;
            var isSubmitting = false;

            clearGeneralAlert = function () {
                if (alertBox) {
                    alertBox.classList.add('hidden');
                    alertBox.textContent = '';
                }
            };

            showGeneralAlert = function (message) {
                if (!alertBox) {
                    return;
                }

                alertBox.textContent = message;
                alertBox.classList.remove('hidden');
            };

            var getFieldMessage = function (field) {
                var wrapper = fieldWrappers[field];
                if (wrapper && wrapper.dataset.errorMessage) {
                    return wrapper.dataset.errorMessage;
                }

                return form.dataset.errorMessage || 'Please review the form.';
            };

            var clearFieldError = function (field) {
                var wrapper = fieldWrappers[field];
                if (wrapper) {
                    wrapper.removeAttribute('data-invalid');
                }

                var node = errorNodes[field];
                if (node) {
                    node.textContent = '';
                    node.classList.add('hidden');
                }

                if (field === 'primary_goal') {
                    primaryGoalInputs.forEach(function (input) {
                        input.removeAttribute('aria-invalid');
                    });
                } else {
                    var input = fieldInputs[field];
                    if (input) {
                        input.removeAttribute('aria-invalid');
                    }
                }
            };

            var showFieldError = function (field, message) {
                var wrapper = fieldWrappers[field];
                if (wrapper) {
                    wrapper.setAttribute('data-invalid', 'true');
                }

                var node = errorNodes[field];
                if (node) {
                    node.textContent = message;
                    node.classList.remove('hidden');
                }

                if (field === 'primary_goal') {
                    primaryGoalInputs.forEach(function (input) {
                        input.setAttribute('aria-invalid', 'true');
                    });
                } else {
                    var input = fieldInputs[field];
                    if (input) {
                        input.setAttribute('aria-invalid', 'true');
                    }
                }
            };

            var updateProgress = function (index) {
                if (!progressLabel) {
                    return;
                }

                var template = form.dataset.progressTemplate || 'Step {current} of {total}';
                progressLabel.textContent = template.replace('{current}', String(index + 1)).replace('{total}', String(totalSteps));
            };

            var focusStep = function (index) {
                var activeStep = steps[index];
                if (!activeStep) {
                    return;
                }

                var focusTarget = activeStep.querySelector('input:not([type="hidden"]), select, textarea, button');
                if (focusTarget && typeof focusTarget.focus === 'function') {
                    window.requestAnimationFrame(function () {
                        focusTarget.focus();
                    });
                }
            };

            var getSelectedGoal = function () {
                for (var i = 0; i < primaryGoalInputs.length; i += 1) {
                    if (primaryGoalInputs[i].checked) {
                        return primaryGoalInputs[i];
                    }
                }

                return null;
            };

            var populateSummary = function () {
                if (summaryNodes.name && nameInput) {
                    summaryNodes.name.textContent = nameInput.value.trim() || '—';
                }

                if (summaryNodes.email && emailInput) {
                    summaryNodes.email.textContent = emailInput.value.trim() || '—';
                }

                if (summaryNodes.company_size && companySizeSelect) {
                    var selectedOption = companySizeSelect.selectedOptions && companySizeSelect.selectedOptions.length ? companySizeSelect.selectedOptions[0] : null;
                    summaryNodes.company_size.textContent = selectedOption ? selectedOption.textContent.trim() : '—';
                }

                if (summaryNodes.primary_goal) {
                    var goal = getSelectedGoal();
                    summaryNodes.primary_goal.textContent = goal ? (goal.dataset.label || goal.value) : '—';
                }
            };

            var goToStep = function (index) {
                if (index < 0 || index >= totalSteps) {
                    return;
                }

                steps.forEach(function (stepElement, idx) {
                    if (idx === index) {
                        stepElement.classList.remove('hidden');
                        stepElement.setAttribute('aria-hidden', 'false');
                    } else {
                        stepElement.classList.add('hidden');
                        stepElement.setAttribute('aria-hidden', 'true');
                    }
                });

                currentStep = index;
                updateProgress(index);

                if (index === totalSteps - 1) {
                    populateSummary();
                }

                focusStep(index);
            };

            var validateStep = function (index) {
                var valid = true;
                var firstInvalid = null;

                if (index === 0) {
                    if (nameInput) {
                        clearFieldError('name');
                        if (nameInput.value.trim().length < 2) {
                            showFieldError('name', getFieldMessage('name'));
                            if (!firstInvalid) {
                                firstInvalid = 'name';
                            }
                            valid = false;
                        }
                    }

                    if (emailInput) {
                        clearFieldError('email');
                        var emailValue = emailInput.value.trim();
                        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                        if (!emailPattern.test(emailValue)) {
                            showFieldError('email', getFieldMessage('email'));
                            if (!firstInvalid) {
                                firstInvalid = 'email';
                            }
                            valid = false;
                        }
                    }
                } else if (index === 1) {
                    if (companySizeSelect) {
                        clearFieldError('company_size');
                        if (!companySizeSelect.value) {
                            showFieldError('company_size', getFieldMessage('company_size'));
                            if (!firstInvalid) {
                                firstInvalid = 'company_size';
                            }
                            valid = false;
                        }
                    }

                    clearFieldError('primary_goal');
                    var selectedGoal = getSelectedGoal();

                    if (!selectedGoal) {
                        showFieldError('primary_goal', getFieldMessage('primary_goal'));
                        if (!firstInvalid) {
                            firstInvalid = 'primary_goal';
                        }
                        valid = false;
                    }
                }

                if (!valid && firstInvalid) {
                    var element = fieldInputs[firstInvalid];
                    if (firstInvalid === 'primary_goal' && !element && primaryGoalInputs.length) {
                        element = primaryGoalInputs[0];
                    }

                    if (element && typeof element.focus === 'function') {
                        element.focus();
                    }
                }

                return valid;
            };

            form.addEventListener('submit', function (event) {
                event.preventDefault();
            });

            Array.prototype.forEach.call(form.querySelectorAll('[data-step-next]'), function (button) {
                button.addEventListener('click', function (event) {
                    event.preventDefault();
                    clearGeneralAlert();

                    if (!validateStep(currentStep)) {
                        return;
                    }

                    var nextIndex = Math.min(currentStep + 1, totalSteps - 1);
                    goToStep(nextIndex);
                });
            });

            Array.prototype.forEach.call(form.querySelectorAll('[data-step-prev]'), function (button) {
                button.addEventListener('click', function (event) {
                    event.preventDefault();
                    clearGeneralAlert();

                    var previousIndex = Math.max(currentStep - 1, 0);
                    goToStep(previousIndex);
                });
            });

            if (nameInput) {
                nameInput.addEventListener('input', function () {
                    clearFieldError('name');
                });
            }

            if (emailInput) {
                emailInput.addEventListener('input', function () {
                    clearFieldError('email');
                });
            }

            if (companySizeSelect) {
                companySizeSelect.addEventListener('change', function () {
                    clearFieldError('company_size');
                });
            }

            primaryGoalInputs.forEach(function (input) {
                input.addEventListener('change', function () {
                    clearFieldError('primary_goal');
                });
            });

            var submitButton = form.querySelector('[data-submit]');

            if (submitButton) {
                var defaultSubmitLabel = submitButton.getAttribute('data-default-label') || submitButton.textContent;
                var loadingSubmitLabel = submitButton.getAttribute('data-loading-label') || defaultSubmitLabel;

                submitButton.addEventListener('click', function (event) {
                    event.preventDefault();

                    if (isSubmitting) {
                        return;
                    }

                    clearGeneralAlert();

                    if (!validateStep(currentStep)) {
                        return;
                    }

                    var endpoint = form.dataset.endpoint || '';

                    if (!endpoint) {
                        showGeneralAlert(form.dataset.errorMessage || 'Unable to submit right now. Please try again soon.');
                        return;
                    }

                    var nonce = form.dataset.nonce || '';
                    var selectedGoal = getSelectedGoal();

                    if (!selectedGoal) {
                        showFieldError('primary_goal', getFieldMessage('primary_goal'));
                        return;
                    }

                    isSubmitting = true;
                    submitButton.disabled = true;
                    submitButton.textContent = loadingSubmitLabel;

                    var payload = {
                        name: nameInput ? nameInput.value.trim() : '',
                        email: emailInput ? emailInput.value.trim() : '',
                        company_size: companySizeSelect ? companySizeSelect.value : '',
                        company_size_label: companySizeSelect && companySizeSelect.selectedOptions && companySizeSelect.selectedOptions.length ? companySizeSelect.selectedOptions[0].textContent.trim() : '',
                        primary_goal: selectedGoal.value,
                        primary_goal_label: selectedGoal.dataset.label || selectedGoal.value,
                        source: form.dataset.source || 'marketing-business-hero'
                    };

                    fetch(endpoint, {
                        method: 'POST',
                        credentials: 'same-origin',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-WP-Nonce': nonce
                        },
                        body: JSON.stringify(payload)
                    })
                        .then(function (response) {
                            return response.json().catch(function () {
                                return {};
                            }).then(function (data) {
                                return {
                                    ok: response.ok,
                                    status: response.status,
                                    data: data
                                };
                            });
                        })
                        .then(function (result) {
                            isSubmitting = false;
                            submitButton.disabled = false;
                            submitButton.textContent = defaultSubmitLabel;

                            if (result.ok && result.data && result.data.success !== false) {
                                clearGeneralAlert();
                                form.classList.add('hidden');
                                form.setAttribute('aria-hidden', 'true');

                                if (progressLabel && form.dataset.progressComplete) {
                                    progressLabel.textContent = form.dataset.progressComplete;
                                }

                                if (successPanel) {
                                    successPanel.classList.remove('hidden');
                                    successPanel.setAttribute('aria-hidden', 'false');
                                }

                                if (successMessage && result.data.message) {
                                    successMessage.textContent = result.data.message;
                                }

                                if (confirmationLink && result.data.confirmation_url) {
                                    confirmationLink.href = result.data.confirmation_url;
                                }

                                form.dispatchEvent(new CustomEvent('webmakerr:leadSuccess', { bubbles: true, detail: payload }));
                            } else {
                                var errorMessage = (result.data && result.data.message) ? result.data.message : (form.dataset.errorMessage || 'Something went wrong. Please try again.');
                                showGeneralAlert(errorMessage);

                                if (result.data && result.data.errors) {
                                    Object.keys(result.data.errors).forEach(function (fieldKey) {
                                        var fieldMessage = result.data.errors[fieldKey];
                                        showFieldError(fieldKey, fieldMessage || getFieldMessage(fieldKey));
                                    });
                                }
                            }
                        })
                        .catch(function () {
                            isSubmitting = false;
                            submitButton.disabled = false;
                            submitButton.textContent = defaultSubmitLabel;
                            showGeneralAlert(form.dataset.errorMessage || 'Something went wrong. Please try again.');
                        });
                });
            }

            updateProgress(currentStep);
            focusStep(currentStep);
        }

        var testimonialCarousels = document.querySelectorAll('[data-testimonial-carousel]');

        if (testimonialCarousels.length) {
            testimonialCarousels.forEach(function (carousel) {
                if (!carousel || carousel.__webmakerrInitialized) {
                    return;
                }

                carousel.__webmakerrInitialized = true;

                var slides = Array.prototype.slice.call(carousel.querySelectorAll('[data-carousel-slide]'));

                if (!slides.length) {
                    return;
                }

                var dots = Array.prototype.slice.call(carousel.querySelectorAll('[data-carousel-dot]'));
                var prev = carousel.querySelector('[data-carousel-prev]');
                var next = carousel.querySelector('[data-carousel-next]');
                var status = carousel.querySelector('[data-carousel-status]');
                var announcer = carousel.querySelector('[data-carousel-announcer]');
                var totalSlides = slides.length;
                var currentIndex = 0;

                var updateStatus = function () {
                    if (status) {
                        status.textContent = (currentIndex + 1) + ' / ' + totalSlides;
                    }
                };

                var updateAnnouncer = function () {
                    if (announcer) {
                        var message = slides[currentIndex] ? (slides[currentIndex].getAttribute('data-announcement') || '') : '';
                        announcer.textContent = message;
                    }
                };

                var setActiveDot = function () {
                    if (!dots.length) {
                        return;
                    }

                    dots.forEach(function (dot, idx) {
                        if (idx === currentIndex) {
                            dot.classList.add('bg-primary');
                            dot.classList.remove('bg-primary/10');
                            dot.setAttribute('aria-pressed', 'true');
                        } else {
                            dot.classList.remove('bg-primary');
                            dot.classList.add('bg-primary/10');
                            dot.setAttribute('aria-pressed', 'false');
                        }
                    });
                };

                var showSlide = function (index) {
                    if (!slides.length) {
                        return;
                    }

                    if (index < 0) {
                        index = totalSlides - 1;
                    } else if (index >= totalSlides) {
                        index = 0;
                    }

                    currentIndex = index;

                    slides.forEach(function (slide, idx) {
                        if (idx === currentIndex) {
                            slide.classList.remove('hidden');
                            slide.setAttribute('aria-hidden', 'false');
                        } else {
                            slide.classList.add('hidden');
                            slide.setAttribute('aria-hidden', 'true');
                        }
                    });

                    setActiveDot();
                    updateStatus();
                    updateAnnouncer();
                };

                if (prev) {
                    prev.addEventListener('click', function (event) {
                        event.preventDefault();
                        showSlide(currentIndex - 1);
                    });
                }

                if (next) {
                    next.addEventListener('click', function (event) {
                        event.preventDefault();
                        showSlide(currentIndex + 1);
                    });
                }

                if (dots.length) {
                    dots.forEach(function (dot) {
                        dot.addEventListener('click', function (event) {
                            event.preventDefault();
                            var targetIndex = parseInt(dot.getAttribute('data-carousel-dot'), 10);

                            if (!isNaN(targetIndex)) {
                                showSlide(targetIndex);
                            }
                        });
                    });
                }

                carousel.addEventListener('keydown', function (event) {
                    if (event.key === 'ArrowRight') {
                        event.preventDefault();
                        showSlide(currentIndex + 1);
                    } else if (event.key === 'ArrowLeft') {
                        event.preventDefault();
                        showSlide(currentIndex - 1);
                    }
                });

                showSlide(currentIndex);
            });
        }

        var modal = document.getElementById('platform-explainer-modal');

        if (modal) {
            var triggers = document.querySelectorAll('[data-platform-modal-open]');

            if (triggers.length) {
                var modalCard = modal.querySelector('[data-platform-modal-card]');
                var closeButtons = modal.querySelectorAll('[data-platform-modal-close]');
                var previouslyFocused = null;
                var transitionDuration = 200;

                var closeModal = function () {
                    if (modal.classList.contains('hidden')) {
                        return;
                    }

                    modal.classList.add('opacity-0');

                    window.setTimeout(function () {
                        modal.classList.add('hidden');
                        modal.setAttribute('aria-hidden', 'true');
                        modal.classList.remove('opacity-0');
                        document.removeEventListener('keydown', handleKeydown);
                        document.body.classList.remove('overflow-hidden');

                        if (previouslyFocused && typeof previouslyFocused.focus === 'function') {
                            previouslyFocused.focus();
                        }
                    }, transitionDuration);
                };

                var handleKeydown = function (event) {
                    if (event.key === 'Escape') {
                        closeModal();
                    }
                };

                var openModal = function (event) {
                    if (event) {
                        event.preventDefault();
                    }

                    if (!modal.classList.contains('hidden')) {
                        return;
                    }

                    previouslyFocused = document.activeElement;

                    modal.classList.remove('hidden');
                    modal.setAttribute('aria-hidden', 'false');
                    document.body.classList.add('overflow-hidden');

                    window.requestAnimationFrame(function () {
                        modal.classList.remove('opacity-0');
                    });

                    if (modalCard && typeof modalCard.focus === 'function') {
                        window.requestAnimationFrame(function () {
                            modalCard.focus();
                        });
                    }

                    document.addEventListener('keydown', handleKeydown);
                };

                triggers.forEach(function (button) {
                    button.addEventListener('click', openModal);
                });

                closeButtons.forEach(function (button) {
                    button.addEventListener('click', function (event) {
                        event.preventDefault();
                        closeModal();
                    });
                });

                modal.addEventListener('click', function (event) {
                    if (event.target === modal) {
                        closeModal();
                    }
                });
            }
        }

        var diagnosticModal = document.getElementById('stack-risk-modal');

        if (diagnosticModal) {
            var diagnosticTriggers = document.querySelectorAll('[data-diagnostic-modal-open]');

            if (diagnosticTriggers.length) {
                var diagnosticCard = diagnosticModal.querySelector('[data-diagnostic-modal-card]');
                var diagnosticCloseButtons = diagnosticModal.querySelectorAll('[data-diagnostic-modal-close]');
                var previouslyFocusedElement = null;
                var transitionMs = 200;

                var closeDiagnostic = function () {
                    if (diagnosticModal.classList.contains('hidden')) {
                        return;
                    }

                    diagnosticModal.classList.add('opacity-0');

                    window.setTimeout(function () {
                        diagnosticModal.classList.add('hidden');
                        diagnosticModal.setAttribute('aria-hidden', 'true');
                        diagnosticModal.classList.remove('opacity-0');
                        document.body.classList.remove('overflow-hidden');
                        document.removeEventListener('keydown', handleEscape);

                        if (previouslyFocusedElement && typeof previouslyFocusedElement.focus === 'function') {
                            previouslyFocusedElement.focus();
                        }
                    }, transitionMs);
                };

                var handleEscape = function (event) {
                    if (event.key === 'Escape') {
                        closeDiagnostic();
                    }
                };

                var openDiagnostic = function (event) {
                    if (event) {
                        event.preventDefault();
                    }

                    if (!diagnosticModal.classList.contains('hidden')) {
                        return;
                    }

                    previouslyFocusedElement = document.activeElement;

                    diagnosticModal.classList.remove('hidden');
                    diagnosticModal.setAttribute('aria-hidden', 'false');
                    document.body.classList.add('overflow-hidden');

                    window.requestAnimationFrame(function () {
                        diagnosticModal.classList.remove('opacity-0');
                    });

                    if (diagnosticCard && typeof diagnosticCard.focus === 'function') {
                        window.requestAnimationFrame(function () {
                            diagnosticCard.focus();
                        });
                    }

                    document.addEventListener('keydown', handleEscape);
                };

                diagnosticTriggers.forEach(function (button) {
                    button.addEventListener('click', openDiagnostic);
                });

                diagnosticCloseButtons.forEach(function (button) {
                    button.addEventListener('click', function (event) {
                        event.preventDefault();
                        closeDiagnostic();
                    });
                });

                diagnosticModal.addEventListener('click', function (event) {
                    if (event.target === diagnosticModal) {
                        closeDiagnostic();
                    }
                });
            }
        }
    });
})();
JS;

if (wp_script_is($marketing_business_script_handle, 'enqueued') || wp_script_is($marketing_business_script_handle, 'registered')) {
    wp_add_inline_script($marketing_business_script_handle, $marketing_business_inline_script);
} else {
    wp_register_script($marketing_business_script_handle, false, [], null, true);
    wp_add_inline_script($marketing_business_script_handle, $marketing_business_inline_script);
    wp_enqueue_script($marketing_business_script_handle);
}

get_header();
?>

<main id="primary" class="flex flex-col bg-white">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('flex flex-col'); ?>>
      <section class="relative overflow-hidden border-b border-zinc-200 bg-gradient-to-br from-[#F5F9FF] via-[#ECF3FF] to-[#D9E8FF]">
        <div class="relative z-10 mx-auto max-w-screen-xl px-6 py-12 lg:px-8 lg:py-20">
          <div class="grid items-start gap-12 lg:grid-cols-[minmax(0,0.85fr)_minmax(0,1fr)]">
            <div class="flex flex-col gap-6">
              <div class="max-w-xl space-y-6">
                <span class="inline-flex w-fit items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.26em] text-primary">
                  <?php esc_html_e('Managed Business Platform', 'webmakerr'); ?>
                </span>
                <h1 class="text-4xl font-medium tracking-tight [text-wrap:balance] text-zinc-950 sm:text-5xl">
                  <?php esc_html_e('Revenue marketing leaders launch conversion-ready journeys without owning the stack.', 'webmakerr'); ?>
                </h1>
                <p class="text-base leading-7 text-zinc-600 sm:text-lg">
                  <?php esc_html_e('Webmakerr pairs a managed WordPress + CRM platform with a specialist team so every campaign stays fast, secure, and on-brand while we run the operations.', 'webmakerr'); ?>
                </p>
              </div>
              <div class="mt-8 flex flex-col gap-2 sm:flex-row sm:items-center sm:gap-4">
                <button type="button" class="inline-flex w-full justify-start text-sm font-semibold text-zinc-600 underline decoration-dashed underline-offset-4 transition hover:text-zinc-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-900 sm:w-auto" data-platform-modal-open aria-controls="platform-explainer-modal" data-analytics-event="marketing-top-platform-preview" data-analytics-funnel="top">
                  <?php esc_html_e('Preview the Platform Tour →', 'webmakerr'); ?>
                </button>
                <a class="inline-block text-sm text-zinc-500 underline decoration-dashed underline-offset-4 transition hover:text-zinc-700 sm:text-zinc-600" href="#lead-magnet" data-analytics-event="marketing-mid-blueprint-scroll" data-analytics-funnel="mid">
                  <?php esc_html_e('Get the Blueprint', 'webmakerr'); ?>
                </a>
              </div>
              <p class="mt-4 text-xs font-medium text-zinc-500 sm:text-sm">
                <?php esc_html_e('Onboarding cohorts fill quickly—reserve your spot while availability lasts.', 'webmakerr'); ?>
              </p>
            </div>
            <div class="relative w-full max-w-lg rounded-2xl border border-white/60 bg-white/95 p-8 shadow-2xl shadow-primary/10 backdrop-blur lg:ml-auto">
              <ul class="flex flex-col gap-2 text-sm text-zinc-600">
                <li class="flex items-center gap-2 font-medium text-zinc-700">
                  <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                  echo marketing_business_render_icon('check', 'h-4 w-4 text-primary');
                  ?>
                  <span><?php esc_html_e('4.9/5 satisfaction from growth marketing teams', 'webmakerr'); ?></span>
                </li>
                <li class="flex items-center gap-2 font-medium text-zinc-700">
                  <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                  echo marketing_business_render_icon('activity', 'h-4 w-4 text-primary');
                  ?>
                  <span><?php esc_html_e('Onboards 3× faster than typical replatforms', 'webmakerr'); ?></span>
                </li>
                <li class="flex items-center gap-2 font-medium text-zinc-700">
                  <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                  echo marketing_business_render_icon('target', 'h-4 w-4 text-primary');
                  ?>
                  <span><?php esc_html_e('Chosen by 250+ multi-brand operators', 'webmakerr'); ?></span>
                </li>
              </ul>
              <div class="mt-6 rounded-xl border border-zinc-200/80 bg-white p-6 shadow-lg shadow-primary/10">
                <div class="flex items-center justify-between text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-primary">
                  <span><?php esc_html_e('Plan Your Demo', 'webmakerr'); ?></span>
                  <span data-progress-label><?php echo esc_html(sprintf(__('Step %1$s of %2$s', 'webmakerr'), 1, $marketing_business_steps_total)); ?></span>
                </div>
                <form
                  id="marketing-demo-scheduler"
                  class="mt-6 flex flex-col gap-6"
                  novalidate
                  data-endpoint="<?php echo esc_url($marketing_business_lead_endpoint); ?>"
                  data-nonce="<?php echo esc_attr($marketing_business_lead_nonce); ?>"
                  data-source="marketing-business-hero"
                  data-error-message="<?php esc_attr_e('We couldn’t send your request. Please try again.', 'webmakerr'); ?>"
                  data-progress-template="<?php echo esc_attr($marketing_business_progress_template); ?>"
                  data-progress-complete="<?php esc_attr_e('Complete', 'webmakerr'); ?>"
                >
                  <div class="flex flex-col gap-4" data-step="0">
                    <div class="flex flex-col gap-2" data-field="name" data-error-message="<?php esc_attr_e('Please enter your name.', 'webmakerr'); ?>">
                      <label class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500" for="marketing-demo-name">
                        <?php esc_html_e('Full name', 'webmakerr'); ?> <span class="text-red-500">*</span>
                      </label>
                      <input
                        class="w-full rounded border border-zinc-200 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm transition focus:border-dark focus:outline-none focus:ring-2 focus:ring-dark/10"
                        type="text"
                        id="marketing-demo-name"
                        name="full_name"
                        autocomplete="name"
                      />
                      <p class="hidden text-xs font-medium text-red-600" data-error="name"></p>
                    </div>
                    <div class="flex flex-col gap-2" data-field="email" data-error-message="<?php esc_attr_e('Add a valid work email so we can follow up.', 'webmakerr'); ?>">
                      <label class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500" for="marketing-demo-email">
                        <?php esc_html_e('Work email', 'webmakerr'); ?> <span class="text-red-500">*</span>
                      </label>
                      <input
                        class="w-full rounded border border-zinc-200 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm transition focus:border-dark focus:outline-none focus:ring-2 focus:ring-dark/10"
                        type="email"
                        id="marketing-demo-email"
                        name="company_email"
                        autocomplete="email"
                      />
                      <p class="hidden text-xs font-medium text-red-600" data-error="email"></p>
                    </div>
                    <div class="flex justify-end">
                      <button type="button" class="inline-flex justify-center rounded bg-dark px-4 py-2 text-sm font-semibold text-white transition hover:bg-dark/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-dark" data-step-next>
                        <?php esc_html_e('Next', 'webmakerr'); ?>
                      </button>
                    </div>
                  </div>
                  <div class="hidden flex flex-col gap-4" data-step="1" aria-hidden="true">
                    <div class="flex flex-col gap-2" data-field="company_size" data-error-message="<?php esc_attr_e('Choose the size of your team.', 'webmakerr'); ?>">
                      <label class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500" for="marketing-demo-size">
                        <?php esc_html_e('Company size', 'webmakerr'); ?> <span class="text-red-500">*</span>
                      </label>
                      <select
                        class="w-full rounded border border-zinc-200 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm transition focus:border-dark focus:outline-none focus:ring-2 focus:ring-dark/10"
                        id="marketing-demo-size"
                        name="company_size"
                      >
                        <option value=""><?php esc_html_e('Select an option', 'webmakerr'); ?></option>
                        <option value="1-10"><?php esc_html_e('1–10 people', 'webmakerr'); ?></option>
                        <option value="11-50"><?php esc_html_e('11–50 people', 'webmakerr'); ?></option>
                        <option value="51-200"><?php esc_html_e('51–200 people', 'webmakerr'); ?></option>
                        <option value="201-500"><?php esc_html_e('201–500 people', 'webmakerr'); ?></option>
                        <option value="500+"><?php esc_html_e('500+ people', 'webmakerr'); ?></option>
                      </select>
                      <p class="hidden text-xs font-medium text-red-600" data-error="company_size"></p>
                    </div>
                    <div class="flex flex-col gap-3" data-field="primary_goal" data-error-message="<?php esc_attr_e('Pick the goal that fits your next launch.', 'webmakerr'); ?>">
                      <span class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500">
                        <?php esc_html_e('Primary goal', 'webmakerr'); ?> <span class="text-red-500">*</span>
                      </span>
                      <div class="space-y-3" role="group" aria-label="<?php esc_attr_e('Select your primary goal', 'webmakerr'); ?>">
                        <label class="flex items-start gap-3 rounded-[6px] border border-zinc-200 bg-white px-4 py-3 text-left text-sm text-zinc-600 transition hover:border-zinc-300">
                          <input class="mt-1 h-4 w-4 rounded border border-zinc-200 text-primary focus:ring-dark/40" type="radio" name="primary_goal" value="launch" data-label="<?php esc_attr_e('Launch faster', 'webmakerr'); ?>" />
                          <span>
                            <span class="block text-sm font-semibold text-zinc-900"><?php esc_html_e('Launch faster', 'webmakerr'); ?></span>
                            <span class="block text-xs text-zinc-500 sm:text-sm sm:text-zinc-600"><?php esc_html_e('Ship a conversion-ready experience in weeks.', 'webmakerr'); ?></span>
                          </span>
                        </label>
                        <label class="flex items-start gap-3 rounded-[6px] border border-zinc-200 bg-white px-4 py-3 text-left text-sm text-zinc-600 transition hover:border-zinc-300">
                          <input class="mt-1 h-4 w-4 rounded border border-zinc-200 text-primary focus:ring-dark/40" type="radio" name="primary_goal" value="migrate" data-label="<?php esc_attr_e('Migrate without downtime', 'webmakerr'); ?>" />
                          <span>
                            <span class="block text-sm font-semibold text-zinc-900"><?php esc_html_e('Migrate without downtime', 'webmakerr'); ?></span>
                            <span class="block text-xs text-zinc-500 sm:text-sm sm:text-zinc-600"><?php esc_html_e('Replatform safely with CRM and commerce synced.', 'webmakerr'); ?></span>
                          </span>
                        </label>
                        <label class="flex items-start gap-3 rounded-[6px] border border-zinc-200 bg-white px-4 py-3 text-left text-sm text-zinc-600 transition hover:border-zinc-300">
                          <input class="mt-1 h-4 w-4 rounded border border-zinc-200 text-primary focus:ring-dark/40" type="radio" name="primary_goal" value="scale" data-label="<?php esc_attr_e('Scale conversions', 'webmakerr'); ?>" />
                          <span>
                            <span class="block text-sm font-semibold text-zinc-900"><?php esc_html_e('Scale conversions', 'webmakerr'); ?></span>
                            <span class="block text-xs text-zinc-500 sm:text-sm sm:text-zinc-600"><?php esc_html_e('Unify funnels, analytics, and experiments.', 'webmakerr'); ?></span>
                          </span>
                        </label>
                        <label class="flex items-start gap-3 rounded-[6px] border border-zinc-200 bg-white px-4 py-3 text-left text-sm text-zinc-600 transition hover:border-zinc-300">
                          <input class="mt-1 h-4 w-4 rounded border border-zinc-200 text-primary focus:ring-dark/40" type="radio" name="primary_goal" value="integrations" data-label="<?php esc_attr_e('Automate workflows', 'webmakerr'); ?>" />
                          <span>
                            <span class="block text-sm font-semibold text-zinc-900"><?php esc_html_e('Automate workflows', 'webmakerr'); ?></span>
                            <span class="block text-xs text-zinc-500 sm:text-sm sm:text-zinc-600"><?php esc_html_e('Connect CRM, store, and support in one motion.', 'webmakerr'); ?></span>
                          </span>
                        </label>
                      </div>
                      <p class="hidden text-xs font-medium text-red-600" data-error="primary_goal"></p>
                    </div>
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                      <button type="button" class="inline-flex justify-center rounded border border-zinc-200 px-4 py-2 text-sm font-semibold text-zinc-700 transition hover:border-zinc-300 hover:text-zinc-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-900" data-step-prev>
                        <?php esc_html_e('Back', 'webmakerr'); ?>
                      </button>
                      <button type="button" class="inline-flex justify-center rounded bg-dark px-4 py-2 text-sm font-semibold text-white transition hover:bg-dark/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-dark" data-step-next>
                        <?php esc_html_e('Next', 'webmakerr'); ?>
                      </button>
                    </div>
                  </div>
                  <div class="hidden flex flex-col gap-6" data-step="2" aria-hidden="true">
                    <div class="rounded border border-zinc-200 bg-white px-4 py-5">
                      <h3 class="text-base font-semibold text-zinc-900"><?php esc_html_e('Confirm your details', 'webmakerr'); ?></h3>
                      <dl class="mt-4 space-y-3 text-sm text-zinc-600">
                        <div class="flex items-center justify-between gap-3">
                          <dt class="font-medium text-zinc-500"><?php esc_html_e('Name', 'webmakerr'); ?></dt>
                          <dd class="text-zinc-900" data-summary="name">—</dd>
                        </div>
                        <div class="flex items-center justify-between gap-3">
                          <dt class="font-medium text-zinc-500"><?php esc_html_e('Email', 'webmakerr'); ?></dt>
                          <dd class="text-zinc-900" data-summary="email">—</dd>
                        </div>
                        <div class="flex items-center justify-between gap-3">
                          <dt class="font-medium text-zinc-500"><?php esc_html_e('Company size', 'webmakerr'); ?></dt>
                          <dd class="text-zinc-900" data-summary="company_size">—</dd>
                        </div>
                        <div class="flex items-center justify-between gap-3">
                          <dt class="font-medium text-zinc-500"><?php esc_html_e('Primary goal', 'webmakerr'); ?></dt>
                          <dd class="text-zinc-900" data-summary="primary_goal">—</dd>
                        </div>
                      </dl>
                    </div>
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                      <button type="button" class="inline-flex justify-center rounded border border-zinc-200 px-4 py-2 text-sm font-semibold text-zinc-700 transition hover:border-zinc-300 hover:text-zinc-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-900" data-step-prev>
                        <?php esc_html_e('Back', 'webmakerr'); ?>
                      </button>
                      <button
                        type="button"
                        class="inline-flex justify-center rounded bg-dark px-4 py-2 text-sm font-semibold text-white transition hover:bg-dark/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-dark"
                        data-submit
                        data-default-label="<?php esc_attr_e('Confirm My Demo Plan', 'webmakerr'); ?>"
                        data-loading-label="<?php esc_attr_e('Scheduling…', 'webmakerr'); ?>"
                        data-analytics-event="marketing-top-demo-submit"
                        data-analytics-funnel="top"
                      >
                        <?php esc_html_e('Confirm My Demo Plan', 'webmakerr'); ?>
                      </button>
                    </div>
                    <div class="text-center text-xs text-zinc-500 sm:text-sm">
                      <a class="font-semibold text-primary transition hover:text-primary/80" href="<?php echo esc_url($marketing_business_customer_stories); ?>" data-analytics-event="marketing-top-customer-stories" data-analytics-funnel="mid">
                        <?php esc_html_e('See customer stories', 'webmakerr'); ?>
                      </a>
                    </div>
                  </div>
                  <div class="hidden rounded border border-red-200 bg-red-50 px-4 py-3 text-xs font-medium text-red-700" data-form-alert role="alert"></div>
                </form>
                <div id="marketing-demo-success" class="mt-6 hidden rounded border border-green-200 bg-green-50 p-5 text-sm text-green-900" aria-hidden="true">
                  <h3 class="text-lg font-semibold text-green-900"><?php esc_html_e('You’re confirmed!', 'webmakerr'); ?></h3>
                  <p class="mt-2 text-sm text-green-800" data-success-message>
                    <?php esc_html_e('Thanks for sharing your goals. Use the link below to choose your session time.', 'webmakerr'); ?>
                  </p>
                  <a class="mt-4 inline-flex items-center justify-center rounded bg-dark px-4 py-2 text-sm font-semibold text-white transition hover:bg-dark/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-dark !no-underline" href="<?php echo esc_url($marketing_business_demo_link); ?>" data-confirmation-link>
                    <?php esc_html_e('Choose your time →', 'webmakerr'); ?>
                  </a>
                  <div class="mt-5 border-t border-green-200 pt-4">
                    <p class="text-xs font-semibold uppercase tracking-[0.28em] text-green-700">
                      <?php esc_html_e('What happens after you book?', 'webmakerr'); ?>
                    </p>
                    <ol class="mt-3 space-y-3 text-left text-sm text-green-900 sm:text-base">
                      <li class="flex items-start gap-3">
                        <span class="flex h-6 w-6 flex-none items-center justify-center rounded-full bg-green-100 text-xs font-semibold text-green-800">1</span>
                        <div class="space-y-1">
                          <span class="block font-semibold"><?php esc_html_e('Calendar invite + prep checklist', 'webmakerr'); ?></span>
                          <span class="block text-xs text-green-800 sm:text-sm"><?php esc_html_e('Receive a meeting link, agenda, and stakeholder checklist in minutes.', 'webmakerr'); ?></span>
                        </div>
                      </li>
                      <li class="flex items-start gap-3">
                        <span class="flex h-6 w-6 flex-none items-center justify-center rounded-full bg-green-100 text-xs font-semibold text-green-800">2</span>
                        <div class="space-y-1">
                          <span class="block font-semibold"><?php esc_html_e('Data readiness review', 'webmakerr'); ?></span>
                          <span class="block text-xs text-green-800 sm:text-sm"><?php esc_html_e('Our specialists audit your current stack and flag integration or compliance needs.', 'webmakerr'); ?></span>
                        </div>
                      </li>
                      <li class="flex items-start gap-3">
                        <span class="flex h-6 w-6 flex-none items-center justify-center rounded-full bg-green-100 text-xs font-semibold text-green-800">3</span>
                        <div class="space-y-1">
                          <span class="block font-semibold"><?php esc_html_e('Launch plan delivered', 'webmakerr'); ?></span>
                          <span class="block text-xs text-green-800 sm:text-sm"><?php esc_html_e('You’ll leave with a 30-60-90 day rollout timeline tailored to your goals.', 'webmakerr'); ?></span>
                        </div>
                      </li>
                    </ol>
                  </div>
                </div>
                <div class="mt-6 space-y-4">
                  <div class="rounded-xl border border-zinc-200 bg-white/80 px-5 py-4 shadow-sm">
                    <p class="text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-zinc-500">
                      <?php esc_html_e('Trusted by growth teams at', 'webmakerr'); ?>
                    </p>
                    <div class="mt-3 flex flex-wrap items-center gap-x-6 gap-y-3 text-sm font-semibold text-zinc-400 sm:text-base">
                      <span class="text-zinc-500">Playwright Commerce</span>
                      <span class="text-zinc-500">Northbeam Studios</span>
                      <span class="text-zinc-500">Brightline Collective</span>
                      <span class="text-zinc-500">Atlas &amp; Co.</span>
                    </div>
                  </div>
                  <div class="rounded-xl border border-primary/20 bg-primary/5 p-5 text-left">
                    <div class="flex items-start gap-3">
                      <span class="flex h-10 w-10 flex-none items-center justify-center rounded-full bg-white/80 text-primary">
                        <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        echo marketing_business_render_icon('shield-check', 'h-5 w-5');
                        ?>
                      </span>
                      <div class="space-y-2 text-sm text-primary/80 sm:text-base">
                        <p class="font-semibold text-primary"><?php esc_html_e('Security &amp; support you can rely on', 'webmakerr'); ?></p>
                        <ul class="space-y-1 text-sm leading-6 text-primary/90 sm:text-base sm:leading-7">
                          <li class="flex items-start gap-2">
                            <span class="mt-1 inline-flex h-4 w-4 flex-none items-center justify-center rounded-full bg-primary/10 text-primary">
                              <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                              echo marketing_business_render_icon('check', 'h-3 w-3');
                              ?>
                            </span>
                            <span><?php esc_html_e('24/7 managed support desk with sub-30 minute response times.', 'webmakerr'); ?></span>
                          </li>
                          <li class="flex items-start gap-2">
                            <span class="mt-1 inline-flex h-4 w-4 flex-none items-center justify-center rounded-full bg-primary/10 text-primary">
                              <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                              echo marketing_business_render_icon('cloud', 'h-3 w-3');
                              ?>
                            </span>
                            <span><?php esc_html_e('99.95% uptime SLA backed by global monitoring and failover.', 'webmakerr'); ?></span>
                          </li>
                          <li class="flex items-start gap-2">
                            <span class="mt-1 inline-flex h-4 w-4 flex-none items-center justify-center rounded-full bg-primary/10 text-primary">
                              <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                              echo marketing_business_render_icon('lock', 'h-3 w-3');
                              ?>
                            </span>
                            <span><?php esc_html_e('GDPR-ready data handling and quarterly compliance reviews.', 'webmakerr'); ?></span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div
        id="platform-explainer-modal"
        class="fixed inset-0 z-[80] hidden flex items-center justify-center bg-zinc-950/70 px-6 py-8 transition-opacity duration-200 opacity-0"
        role="dialog"
        aria-modal="true"
        aria-labelledby="platform-explainer-title"
      >
        <div class="relative w-full max-w-3xl rounded-2xl border border-white/20 bg-white p-8 shadow-2xl focus:outline-none" data-platform-modal-card tabindex="-1">
          <button type="button" class="absolute right-4 top-4 inline-flex h-9 w-9 items-center justify-center rounded-full border border-zinc-200 text-zinc-500 transition hover:text-zinc-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-900" data-platform-modal-close>
            <span class="sr-only"><?php esc_html_e('Close explainer modal', 'webmakerr'); ?></span>
            &times;
          </button>
          <div class="flex flex-col gap-4 text-left">
            <span class="inline-flex w-fit items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-primary">
              <?php
              // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
              echo marketing_business_render_icon('activity', 'h-4 w-4 text-primary');
              ?>
              <?php esc_html_e('Platform overview', 'webmakerr'); ?>
            </span>
            <h2 id="platform-explainer-title" class="text-2xl font-semibold text-zinc-950 sm:text-3xl">
              <?php esc_html_e('See the managed stack in action', 'webmakerr'); ?>
            </h2>
            <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7">
              <?php esc_html_e('Walk through the orchestration layer that keeps Webmakerr fast, consistent, and conversion-ready. Every workflow shown in the demo is what your team receives on day one.', 'webmakerr'); ?>
            </p>
            <div class="grid gap-4 md:grid-cols-2">
              <div class="rounded-[10px] border border-zinc-200 bg-white p-4 shadow-sm">
                <h3 class="text-sm font-semibold text-zinc-900 sm:text-base"><?php esc_html_e('Connected experiences', 'webmakerr'); ?></h3>
                <p class="mt-2 text-sm text-zinc-600"><?php esc_html_e('Web, CRM, storefront, and analytics run on one data model so every signal is synced automatically.', 'webmakerr'); ?></p>
              </div>
              <div class="rounded-[10px] border border-zinc-200 bg-white p-4 shadow-sm">
                <h3 class="text-sm font-semibold text-zinc-900 sm:text-base"><?php esc_html_e('Hands-on specialists', 'webmakerr'); ?></h3>
                <p class="mt-2 text-sm text-zinc-600"><?php esc_html_e('Your launch crew configures automations, consent, and reporting without extra agencies or plugins.', 'webmakerr'); ?></p>
              </div>
              <div class="rounded-[10px] border border-zinc-200 bg-white p-4 shadow-sm">
                <h3 class="text-sm font-semibold text-zinc-900 sm:text-base"><?php esc_html_e('Governed updates', 'webmakerr'); ?></h3>
                <p class="mt-2 text-sm text-zinc-600"><?php esc_html_e('We manage releases, security patches, and QA so marketing stays focused on pipeline.', 'webmakerr'); ?></p>
              </div>
              <div class="rounded-[10px] border border-zinc-200 bg-white p-4 shadow-sm">
                <h3 class="text-sm font-semibold text-zinc-900 sm:text-base"><?php esc_html_e('Conversion intelligence', 'webmakerr'); ?></h3>
                <p class="mt-2 text-sm text-zinc-600"><?php esc_html_e('Unified analytics and testing surface the next best action for every campaign and team.', 'webmakerr'); ?></p>
              </div>
            </div>
            <div class="overflow-hidden rounded-[12px] border border-zinc-200 bg-slate-900/90 p-6 text-white shadow-inner">
              <p class="text-sm font-medium uppercase tracking-[0.25em] text-white/70"><?php esc_html_e('Demo snapshot', 'webmakerr'); ?></p>
              <p class="mt-3 text-base leading-7 text-white/90"><?php esc_html_e('Follow a three-minute walkthrough of how new campaigns move from concept to live experiences, complete with CRM routing and performance alerts.', 'webmakerr'); ?></p>
            </div>
          </div>
        </div>
      </div>

      <div
        id="stack-risk-modal"
        class="fixed inset-0 z-[90] hidden flex items-center justify-center bg-zinc-950/70 px-6 py-8 transition-opacity duration-200 opacity-0"
        role="dialog"
        aria-modal="true"
        aria-labelledby="stack-risk-modal-title"
        aria-hidden="true"
      >
        <div class="relative w-full max-w-2xl rounded-2xl border border-primary/20 bg-white p-6 shadow-2xl focus:outline-none sm:p-8" data-diagnostic-modal-card tabindex="-1">
          <button type="button" class="absolute right-4 top-4 inline-flex h-9 w-9 items-center justify-center rounded-full border border-zinc-200 text-zinc-500 transition hover:text-zinc-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-900" data-diagnostic-modal-close>
            <span class="sr-only"><?php esc_html_e('Close stack diagnostic modal', 'webmakerr'); ?></span>
            &times;
          </button>
          <div class="flex flex-col gap-5 text-left text-zinc-600">
            <span class="inline-flex w-fit items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-primary">
              <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
              echo marketing_business_render_icon('search', 'h-4 w-4 text-primary');
              ?>
              <span class="text-primary/80"><?php esc_html_e('Stack risk diagnostic', 'webmakerr'); ?></span>
            </span>
            <h2 id="stack-risk-modal-title" class="text-2xl font-semibold text-zinc-950 sm:text-3xl">
              <?php esc_html_e('See your stack risk score in two minutes', 'webmakerr'); ?>
            </h2>
            <p class="text-sm leading-6 sm:text-base sm:leading-7">
              <?php esc_html_e('Answer a few questions about your current tooling and we’ll benchmark your stack reliability, automation coverage, and launch readiness.', 'webmakerr'); ?>
            </p>
            <ul class="grid gap-3 rounded-[10px] border border-primary/20 bg-primary/5 p-4 text-sm text-primary/80 sm:text-base">
              <li class="flex items-start gap-3">
                <span class="mt-1 flex h-6 w-6 flex-none items-center justify-center rounded-full bg-white/80 text-primary">
                  <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                  echo marketing_business_render_icon('activity', 'h-4 w-4');
                  ?>
                </span>
                <span><?php esc_html_e('Identify where manual work creates launch delays and data gaps.', 'webmakerr'); ?></span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-1 flex h-6 w-6 flex-none items-center justify-center rounded-full bg-white/80 text-primary">
                  <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                  echo marketing_business_render_icon('shield-check', 'h-4 w-4');
                  ?>
                </span>
                <span><?php esc_html_e('Get a personalized plan to de-risk your stack with managed automation.', 'webmakerr'); ?></span>
              </li>
            </ul>
            <form
              id="stack-risk-form"
              class="flex flex-col gap-4"
              novalidate
              data-lead-form
              data-endpoint="<?php echo esc_url($marketing_business_lead_endpoint); ?>"
              data-nonce="<?php echo esc_attr($marketing_business_lead_nonce); ?>"
              data-source="marketing-business-diagnostic"
              data-offer="Stack Risk Diagnostic"
              data-funnel="mid"
              data-form-location="marketing-business-diagnostic"
              data-success-target="#stack-risk-success"
              data-download-url="<?php echo esc_url(home_url('/resources/stack-risk-brief/')); ?>"
              data-error-message="<?php esc_attr_e('We couldn’t score your stack. Please try again in a moment.', 'webmakerr'); ?>"
            >
              <input type="hidden" name="intent" value="stack_risk_score" />
              <div class="flex flex-col gap-2" data-field="name" data-required data-error-message="<?php esc_attr_e('Share your name so we can personalize the results.', 'webmakerr'); ?>">
                <label class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500" for="stack-risk-name">
                  <?php esc_html_e('Full name', 'webmakerr'); ?> <span class="text-red-500">*</span>
                </label>
                <input
                  class="w-full rounded border border-zinc-200 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm transition focus:border-dark focus:outline-none focus:ring-2 focus:ring-dark/10"
                  type="text"
                  id="stack-risk-name"
                  name="full_name"
                  autocomplete="name"
                />
                <p class="hidden text-xs font-medium text-red-600" data-error="name"></p>
              </div>
              <div class="flex flex-col gap-2" data-field="email" data-required data-error-message="<?php esc_attr_e('Add a valid work email so we can send the report.', 'webmakerr'); ?>" data-validate="email">
                <label class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500" for="stack-risk-email">
                  <?php esc_html_e('Work email', 'webmakerr'); ?> <span class="text-red-500">*</span>
                </label>
                <input
                  class="w-full rounded border border-zinc-200 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm transition focus:border-dark focus:outline-none focus:ring-2 focus:ring-dark/10"
                  type="email"
                  id="stack-risk-email"
                  name="company_email"
                  autocomplete="email"
                />
                <p class="hidden text-xs font-medium text-red-600" data-error="email"></p>
              </div>
              <div class="flex flex-col gap-2" data-field="company_size" data-required data-error-message="<?php esc_attr_e('Select the team size that matches your operation.', 'webmakerr'); ?>">
                <label class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500" for="stack-risk-size">
                  <?php esc_html_e('Team size managing the stack', 'webmakerr'); ?> <span class="text-red-500">*</span>
                </label>
                <select
                  class="w-full rounded border border-zinc-200 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm transition focus:border-dark focus:outline-none focus:ring-2 focus:ring-dark/10"
                  id="stack-risk-size"
                  name="company_size"
                >
                  <option value=""><?php esc_html_e('Select an option', 'webmakerr'); ?></option>
                  <option value="solo"><?php esc_html_e('Solo or 1–2 people', 'webmakerr'); ?></option>
                  <option value="small"><?php esc_html_e('3–10 people', 'webmakerr'); ?></option>
                  <option value="mid"><?php esc_html_e('11–25 people', 'webmakerr'); ?></option>
                  <option value="large"><?php esc_html_e('26+ people', 'webmakerr'); ?></option>
                </select>
                <p class="hidden text-xs font-medium text-red-600" data-error="company_size"></p>
              </div>
              <div class="flex flex-col gap-2" data-field="primary_goal" data-required data-error-message="<?php esc_attr_e('Pick the goal that aligns with your next launch.', 'webmakerr'); ?>">
                <span class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500">
                  <?php esc_html_e('Primary goal', 'webmakerr'); ?> <span class="text-red-500">*</span>
                </span>
                <div class="grid gap-2 sm:grid-cols-2">
                  <label class="flex cursor-pointer items-start gap-3 rounded border border-zinc-200 bg-white px-3 py-2 text-left text-sm text-zinc-700 transition hover:border-dark focus-within:border-dark">
                    <input class="mt-1 h-4 w-4 rounded border border-zinc-200 text-primary focus:ring-dark/40" type="radio" name="primary_goal" value="launch" data-label="<?php esc_attr_e('Launch faster', 'webmakerr'); ?>" />
                    <span class="leading-5">
                      <span class="block font-semibold text-zinc-900"><?php esc_html_e('Launch faster', 'webmakerr'); ?></span>
                      <span class="block text-xs text-zinc-500"><?php esc_html_e('Ship campaigns without the operational drag.', 'webmakerr'); ?></span>
                    </span>
                  </label>
                  <label class="flex cursor-pointer items-start gap-3 rounded border border-zinc-200 bg-white px-3 py-2 text-left text-sm text-zinc-700 transition hover:border-dark focus-within:border-dark">
                    <input class="mt-1 h-4 w-4 rounded border border-zinc-200 text-primary focus:ring-dark/40" type="radio" name="primary_goal" value="migrate" data-label="<?php esc_attr_e('Migrate without downtime', 'webmakerr'); ?>" />
                    <span class="leading-5">
                      <span class="block font-semibold text-zinc-900"><?php esc_html_e('Migrate without downtime', 'webmakerr'); ?></span>
                      <span class="block text-xs text-zinc-500"><?php esc_html_e('Stabilize infrastructure while you replatform.', 'webmakerr'); ?></span>
                    </span>
                  </label>
                  <label class="flex cursor-pointer items-start gap-3 rounded border border-zinc-200 bg-white px-3 py-2 text-left text-sm text-zinc-700 transition hover:border-dark focus-within:border-dark">
                    <input class="mt-1 h-4 w-4 rounded border border-zinc-200 text-primary focus:ring-dark/40" type="radio" name="primary_goal" value="scale" data-label="<?php esc_attr_e('Scale conversions', 'webmakerr'); ?>" />
                    <span class="leading-5">
                      <span class="block font-semibold text-zinc-900"><?php esc_html_e('Scale conversions', 'webmakerr'); ?></span>
                      <span class="block text-xs text-zinc-500"><?php esc_html_e('Keep every experience fast as traffic surges.', 'webmakerr'); ?></span>
                    </span>
                  </label>
                  <label class="flex cursor-pointer items-start gap-3 rounded border border-zinc-200 bg-white px-3 py-2 text-left text-sm text-zinc-700 transition hover:border-dark focus-within:border-dark">
                    <input class="mt-1 h-4 w-4 rounded border border-zinc-200 text-primary focus:ring-dark/40" type="radio" name="primary_goal" value="integrations" data-label="<?php esc_attr_e('Automate workflows', 'webmakerr'); ?>" />
                    <span class="leading-5">
                      <span class="block font-semibold text-zinc-900"><?php esc_html_e('Automate workflows', 'webmakerr'); ?></span>
                      <span class="block text-xs text-zinc-500"><?php esc_html_e('Connect tools and data without manual effort.', 'webmakerr'); ?></span>
                    </span>
                  </label>
                </div>
                <p class="hidden text-xs font-medium text-red-600" data-error="primary_goal"></p>
              </div>
              <div class="flex flex-col gap-2" data-field="website" data-error-message="<?php esc_attr_e('Share your main site so we can review the experience.', 'webmakerr'); ?>">
                <label class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500" for="stack-risk-url">
                  <?php esc_html_e('Primary website (optional)', 'webmakerr'); ?>
                </label>
                <input
                  class="w-full rounded border border-zinc-200 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm transition focus:border-dark focus:outline-none focus:ring-2 focus:ring-dark/10"
                  type="url"
                  id="stack-risk-url"
                  name="website_url"
                  placeholder="https://"
                />
                <p class="hidden text-xs font-medium text-red-600" data-error="website"></p>
              </div>
              <button
                type="submit"
                class="inline-flex items-center justify-center rounded bg-dark px-4 py-2 text-sm font-semibold text-white transition hover:bg-dark/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-dark"
                data-submit
                data-default-label="<?php esc_attr_e('Calculate My Risk Score', 'webmakerr'); ?>"
                data-loading-label="<?php esc_attr_e('Calculating…', 'webmakerr'); ?>"
                data-analytics-event="marketing-mid-diagnostic-submit"
                data-analytics-funnel="mid"
              >
                <?php esc_html_e('Calculate My Risk Score', 'webmakerr'); ?>
              </button>
              <p class="hidden rounded border border-red-200 bg-red-50 px-4 py-2 text-xs font-medium text-red-600" data-form-alert role="alert"></p>
            </form>
            <div id="stack-risk-success" class="hidden rounded border border-green-200 bg-green-50 p-5 text-sm text-green-900" aria-hidden="true">
              <h3 class="text-lg font-semibold text-green-900" data-success-heading data-default-heading="<?php esc_attr_e('Your diagnostic is on the way!', 'webmakerr'); ?>">
                <?php esc_html_e('Your diagnostic is on the way!', 'webmakerr'); ?>
              </h3>
              <p class="mt-2 text-sm text-green-800" data-success-message data-default-message="<?php esc_attr_e('Check your inbox for a personalized risk score and recommendations. You can also review the quick brief below.', 'webmakerr'); ?>">
                <?php esc_html_e('Check your inbox for a personalized risk score and recommendations. You can also review the quick brief below.', 'webmakerr'); ?>
              </p>
              <a
                class="mt-4 inline-flex items-center justify-center rounded bg-dark px-4 py-2 text-sm font-semibold text-white transition hover:bg-dark/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-dark !no-underline"
                href="<?php echo esc_url(home_url('/resources/stack-risk-brief/')); ?>"
                data-success-link
                data-analytics-event="marketing-mid-diagnostic-download"
                data-analytics-funnel="mid"
                target="_blank"
                rel="noopener"
              >
                <?php esc_html_e('Review the Stack Risk Brief', 'webmakerr'); ?>
              </a>
            </div>
          </div>
        </div>
      </div>

      <?php
      $marketing_business_testimonials = array(
          array(
              'quote'           => __('Webmakerr centralized our launches and removed three agencies from the process.', 'webmakerr'),
              'metric'          => __('67% lift in marketing-qualified pipeline in 90 days', 'webmakerr'),
              'metric_detail'   => __('Playwright Commerce scaled from 8 to 24 coordinated releases per quarter.', 'webmakerr'),
              'name'            => 'Ava Rollins',
              'role'            => __('VP Growth, Playwright Commerce', 'webmakerr'),
          ),
          array(
              'quote'           => __('Our replatform finished weeks faster and support tickets dropped overnight.', 'webmakerr'),
              'metric'          => __('38% faster funnel velocity across paid and partner channels', 'webmakerr'),
              'metric_detail'   => __('Northbeam Studios reclaimed 120 engineering hours per month.', 'webmakerr'),
              'name'            => 'Jordan Vega',
              'role'            => __('Head of Lifecycle, Northbeam Studios', 'webmakerr'),
          ),
          array(
              'quote'           => __('Compliance reviews became a formality because the environment stays audit ready.', 'webmakerr'),
              'metric'          => __('99.96% uptime maintained through peak launches', 'webmakerr'),
              'metric_detail'   => __('Brightline Collective doubled campaign volume without additional admins.', 'webmakerr'),
              'name'            => 'Priya Patel',
              'role'            => __('Director of Marketing Ops, Brightline Collective', 'webmakerr'),
          ),
      );
      ?>

      <section class="border-y border-zinc-200 bg-white py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="flex flex-col gap-8" data-testimonial-carousel>
            <div class="flex flex-col gap-3 text-left sm:flex-row sm:items-end sm:justify-between">
              <div>
                <span class="inline-flex w-fit items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-primary">
                  <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                  echo marketing_business_render_icon('smile', 'h-4 w-4 text-primary');
                  ?>
                  <span class="text-primary/80"><?php esc_html_e('Customer proof', 'webmakerr'); ?></span>
                </span>
                <h2 class="mt-4 text-3xl font-semibold text-zinc-950 sm:text-4xl">
                  <?php esc_html_e('Operators see measurable lift with Webmakerr', 'webmakerr'); ?>
                </h2>
                <p class="mt-3 max-w-2xl text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7">
                  <?php esc_html_e('Hear how marketing, revenue, and lifecycle teams cut manual work while hitting pipeline targets.', 'webmakerr'); ?>
                </p>
              </div>
              <div class="flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.3em] text-primary">
                <span data-carousel-status><?php echo esc_html('1 / ' . count($marketing_business_testimonials)); ?></span>
              </div>
            </div>
            <div class="relative">
              <div class="grid gap-6 sm:grid-cols-[minmax(0,1fr)_auto] sm:items-center">
                <div class="relative overflow-hidden">
                  <?php foreach ($marketing_business_testimonials as $index => $testimonial) :
                      $is_active      = (0 === $index);
                      $slide_classes  = 'flex h-full flex-col justify-between gap-6 rounded-[14px] border border-primary/20 bg-white/95 p-6 text-left shadow-lg shadow-primary/10';
                      if (! $is_active) {
                          $slide_classes .= ' hidden';
                      }
                      $announcement = sprintf(
                          /* translators: 1: testimonial metric, 2: customer name */
                          __('Showing %1$s from %2$s', 'webmakerr'),
                          $testimonial['metric'],
                          $testimonial['name']
                      );
                      ?>
                      <figure
                        class="<?php echo esc_attr($slide_classes); ?>"
                        data-carousel-slide
                        data-announcement="<?php echo esc_attr($announcement); ?>"
                        aria-hidden="<?php echo $is_active ? 'false' : 'true'; ?>"
                      >
                        <div class="flex flex-col gap-4 text-zinc-600 sm:text-lg sm:leading-8">
                          <blockquote class="text-base font-medium leading-7 text-zinc-700 sm:text-xl sm:leading-8">
                            &ldquo;<?php echo esc_html($testimonial['quote']); ?>&rdquo;
                          </blockquote>
                          <p class="text-sm font-semibold text-primary sm:text-base">
                            <?php echo esc_html($testimonial['metric']); ?>
                          </p>
                          <p class="text-xs text-zinc-500 sm:text-sm">
                            <?php echo esc_html($testimonial['metric_detail']); ?>
                          </p>
                        </div>
                        <figcaption class="border-t border-zinc-100 pt-4 text-sm text-zinc-500">
                          <p class="font-semibold text-zinc-900"><?php echo esc_html($testimonial['name']); ?></p>
                          <p><?php echo esc_html($testimonial['role']); ?></p>
                        </figcaption>
                      </figure>
                  <?php endforeach; ?>
                </div>
                <div class="flex flex-col items-center gap-3 sm:items-end">
                  <div class="flex gap-3">
                    <button type="button" class="inline-flex items-center justify-center rounded-full border border-primary/20 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-primary shadow-sm transition hover:border-primary/30 hover:text-primary/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" data-carousel-prev>
                      &larr; <?php esc_html_e('Prev', 'webmakerr'); ?>
                    </button>
                    <button type="button" class="inline-flex items-center justify-center rounded-full border border-primary/20 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-primary shadow-sm transition hover:border-primary/30 hover:text-primary/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" data-carousel-next>
                      <?php esc_html_e('Next', 'webmakerr'); ?> &rarr;
                    </button>
                  </div>
                  <div class="flex items-center gap-2" role="tablist">
                    <?php foreach ($marketing_business_testimonials as $index => $testimonial) :
                        $dot_classes = 'h-2.5 w-2.5 rounded-full border border-primary/30 transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary';
                        if (0 === $index) {
                            $dot_classes .= ' bg-primary';
                        } else {
                            $dot_classes .= ' bg-primary/10';
                        }
                        ?>
                        <button
                          type="button"
                          class="<?php echo esc_attr($dot_classes); ?>"
                          data-carousel-dot="<?php echo esc_attr((string) $index); ?>"
                          aria-label="<?php echo esc_attr(sprintf(__('Show testimonial %d', 'webmakerr'), $index + 1)); ?>"
                          aria-pressed="<?php echo 0 === $index ? 'true' : 'false'; ?>"
                        ></button>
                    <?php endforeach; ?>
                  </div>
                  <div class="sr-only" aria-live="polite" data-carousel-announcer></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="border-y border-zinc-200 bg-slate-50/80 py-10">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="flex flex-col gap-6 rounded-[10px] border border-primary/15 bg-white/90 p-6 shadow-sm backdrop-blur sm:flex-row sm:items-center sm:justify-between">
            <div class="flex flex-col gap-4 sm:max-w-md">
              <span class="inline-flex w-fit items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-primary">
                <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                echo marketing_business_render_icon('coins', 'h-4 w-4 text-primary');
                ?>
                <span class="text-primary/80"><?php esc_html_e('Predictable pricing', 'webmakerr'); ?></span>
              </span>
              <div class="flex items-baseline gap-3 text-zinc-950">
                <span class="text-4xl font-semibold sm:text-5xl">$29</span>
                <span class="text-sm font-semibold uppercase tracking-[0.26em] text-primary/70 sm:text-base"><?php esc_html_e('per month', 'webmakerr'); ?></span>
              </div>
              <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7"><?php esc_html_e('One managed plan covers your site, store, security, and analytics — no surprise add-ons.', 'webmakerr'); ?></p>
            </div>
            <ul class="grid gap-3 text-sm text-zinc-600 sm:max-w-md sm:text-base">
              <li class="flex items-center gap-3 rounded-[6px] border border-zinc-200 bg-white px-4 py-3 shadow-sm">
                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-primary/10 text-primary">
                  <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                  echo marketing_business_render_icon('check', 'h-4 w-4');
                  ?>
                </span>
                <span><?php esc_html_e('Managed hosting and daily monitoring', 'webmakerr'); ?></span>
              </li>
              <li class="flex items-center gap-3 rounded-[6px] border border-zinc-200 bg-white px-4 py-3 shadow-sm">
                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-primary/10 text-primary">
                  <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                  echo marketing_business_render_icon('layers', 'h-4 w-4');
                  ?>
                </span>
                <span><?php esc_html_e('Unlimited platform updates handled for you', 'webmakerr'); ?></span>
              </li>
              <li class="flex items-center gap-3 rounded-[6px] border border-zinc-200 bg-white px-4 py-3 shadow-sm">
                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-primary/10 text-primary">
                  <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                  echo marketing_business_render_icon('target', 'h-4 w-4');
                  ?>
                </span>
                <span><?php esc_html_e('Launch concierge to keep go-lives on track', 'webmakerr'); ?></span>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <div class="bg-white">
        <div class="mx-auto flex max-w-screen-xl items-center gap-3 px-6 py-6 lg:px-8">
          <div class="h-px flex-1 bg-gradient-to-r from-transparent via-primary/30 to-transparent"></div>
          <div class="flex items-center gap-2 rounded-full border border-primary/20 bg-primary/5 px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.3em] text-primary">
            <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            echo marketing_business_render_icon('repeat', 'h-4 w-4 text-primary');
            ?>
            <span class="text-primary/80"><?php esc_html_e('From chaos to clarity', 'webmakerr'); ?></span>
          </div>
          <div class="h-px flex-1 bg-gradient-to-r from-transparent via-primary/30 to-transparent"></div>
        </div>
      </div>

      <section class="border-t border-zinc-200 bg-white py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="grid gap-12 text-zinc-600 lg:grid-cols-[0.9fr_1.1fr]">
            <div class="flex flex-col gap-6">
              <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
                Why Growth Feels Harder Than It Should
              </h2>
              <div class="flex flex-col gap-4 text-base leading-7 sm:text-lg">
                <p>Customers expect seamless journeys, yet the experience fractures when the backend can’t keep up.</p>
                <p>Teams get dragged into maintenance firefights instead of shaping the moments that win and retain visitors.</p>
              </div>
              <div class="flex items-start gap-3 rounded-[6px] border border-primary/20 bg-primary/5 p-4 text-sm text-primary/80 sm:text-base">
                <span class="mt-1 flex h-9 w-9 items-center justify-center rounded-full bg-white/80 text-primary">
                  <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                  echo marketing_business_render_icon('shield-check', 'h-5 w-5 text-primary');
                  ?>
                </span>
                <p class="leading-6 sm:leading-7"><?php esc_html_e('Webmakerr creates a managed rhythm for launches, so strategy leads and upkeep follows.', 'webmakerr'); ?></p>
              </div>
            </div>
            <div class="grid gap-4">
              <?php
              $growth_friction = array(
                  array(
                      'icon' => 'layers',
                      'title' => 'Disconnected systems',
                      'description' => 'Every new plugin creates another silo, so data never moves cleanly between marketing, sales, and delivery.',
                  ),
                  array(
                      'icon' => 'activity',
                      'title' => 'Manual upkeep',
                      'description' => 'Updates, patches, and performance tuning depend on your team’s spare time — and that time keeps shrinking.',
                  ),
                  array(
                      'icon' => 'database',
                      'title' => 'Hidden costs',
                      'description' => 'Licenses, support retainers, and third-party add-ons stack up until the “simple” build becomes the priciest line item.',
                  ),
              );

              foreach ($growth_friction as $item) :
                  ?>
                  <div class="flex items-start gap-4 rounded-[5px] border border-zinc-200 bg-white p-5 shadow-sm">
                    <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary">
                      <?php
                      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                      echo marketing_business_render_icon($item['icon']);
                      ?>
                    </span>
                    <div class="flex flex-col gap-1">
                      <p class="text-sm font-semibold text-zinc-950 sm:text-base"><?php echo esc_html($item['title']); ?></p>
                      <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7"><?php echo esc_html($item['description']); ?></p>
                    </div>
                  </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>

      <div class="bg-gradient-to-r from-white via-slate-50 to-white">
        <div class="mx-auto flex max-w-screen-xl items-center gap-3 px-6 py-6 lg:px-8">
          <div class="h-px flex-1 bg-gradient-to-r from-transparent via-primary/20 to-transparent"></div>
          <div class="flex items-center gap-2 rounded-full border border-primary/20 bg-white px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.3em] text-primary">
            <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            echo marketing_business_render_icon('cloud', 'h-4 w-4 text-primary');
            ?>
            <span class="text-primary/80"><?php esc_html_e('Managed foundation in action', 'webmakerr'); ?></span>
          </div>
          <div class="h-px flex-1 bg-gradient-to-r from-transparent via-primary/20 to-transparent"></div>
        </div>
      </div>

      <section id="managed-foundation" class="border-t border-zinc-200 bg-slate-50 py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-4xl flex-col gap-6 text-center text-zinc-600">
            <h3 class="text-2xl font-semibold text-zinc-950 sm:text-3xl">Visitors convert faster when the foundation is managed.</h3>
            <p class="text-base leading-7 sm:text-lg">Webmakerr removes the friction that keeps teams in reactive mode, keeping every launch, campaign, and customer touchpoint consistent.</p>
          </div>
        </div>
      </section>

      <div class="bg-white">
        <div class="mx-auto flex max-w-screen-xl items-center gap-3 px-6 py-6 lg:px-8">
          <div class="h-px flex-1 bg-gradient-to-r from-transparent via-primary/30 to-transparent"></div>
          <div class="flex items-center gap-2 rounded-full border border-primary/20 bg-primary/5 px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.3em] text-primary">
            <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            echo marketing_business_render_icon('server', 'h-4 w-4 text-primary');
            ?>
            <span class="text-primary/80"><?php esc_html_e('Foundation checkpoints', 'webmakerr'); ?></span>
          </div>
          <div class="h-px flex-1 bg-gradient-to-r from-transparent via-primary/30 to-transparent"></div>
        </div>
      </div>

      <section class="border-t border-zinc-200 bg-white py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-3xl flex-col gap-4 text-center text-zinc-600">
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              What Makes (or Breaks) a Website
            </h2>
            <p class="text-base leading-7 sm:text-lg">Visitors abandon sites that feel slow, shaky, or disconnected long before the first conversion opportunity.</p>
            <p class="text-base leading-7 sm:text-lg">Those issues hide beneath the design — costing you attention, trust, and revenue.</p>
          </div>
          <?php
          $website_failure_signals = array(
              array(
                  'icon'        => 'zap',
                  'title'       => 'Speed',
                  'description' => 'Visitors bounce when pages stall; 53% leave if a site takes more than 3 seconds, so fragile, plugin-heavy setups quietly drain revenue.',
              ),
              array(
                  'icon'        => 'layers',
                  'title'       => 'Stability',
                  'description' => 'Buyers lose confidence when features glitch mid-journey, and every plugin update risks breaking a critical step.',
              ),
              array(
                  'icon'        => 'shield-check',
                  'title'       => 'Security',
                  'description' => 'Visitors stop trusting brands that feel unsafe, and cheap add-ons invite the vulnerabilities hackers love.',
              ),
              array(
                  'icon'        => 'database',
                  'title'       => 'Consistency',
                  'description' => 'When tools don’t share data, your analytics lie. Webmakerr fixes the foundation — not just the surface.',
              ),
          );

          ?>
          <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <?php foreach ($website_failure_signals as $signal) : ?>
              <div class="flex items-start gap-4 rounded-[5px] border border-zinc-200 bg-white p-5 shadow-sm">
                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary">
                  <?php
                  // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                  echo marketing_business_render_icon($signal['icon']);
                  ?>
                </span>
                <div class="flex flex-col gap-1 text-left">
                  <p class="text-sm font-semibold text-zinc-950 sm:text-base"><?php echo esc_html($signal['title']); ?></p>
                  <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7"><?php echo esc_html($signal['description']); ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section id="lead-magnet" class="border-t border-zinc-200 bg-gradient-to-br from-primary/5 via-white to-primary/10 py-16 lg:py-24">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="grid gap-12 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
            <div class="flex flex-col gap-6 text-zinc-600">
              <span class="inline-flex w-fit items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-primary">
                <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                echo marketing_business_render_icon('target', 'h-4 w-4 text-primary');
                ?>
                <span class="text-primary/80"><?php esc_html_e('Managed Growth Blueprint', 'webmakerr'); ?></span>
              </span>
              <h3 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
                <?php esc_html_e('Unlock the playbook teams use to scale with fewer tools.', 'webmakerr'); ?>
              </h3>
              <p class="text-base leading-7 sm:text-lg">
                <?php esc_html_e('Access the Managed Growth Blueprint to see the exact stack, automations, and launch cadence high-performing teams use inside Webmakerr.', 'webmakerr'); ?>
              </p>
              <ul class="grid gap-3 text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7">
                <li class="flex items-start gap-3">
                  <span class="mt-1 flex h-6 w-6 flex-none items-center justify-center rounded-full bg-primary/10 text-primary">
                    <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    echo marketing_business_render_icon('check', 'h-4 w-4');
                    ?>
                  </span>
                  <span><?php esc_html_e('Map the marketing-to-revenue journey across web, CRM, and commerce.', 'webmakerr'); ?></span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-1 flex h-6 w-6 flex-none items-center justify-center rounded-full bg-primary/10 text-primary">
                    <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    echo marketing_business_render_icon('check', 'h-4 w-4');
                    ?>
                  </span>
                  <span><?php esc_html_e('See the automations and reporting cadence proven to keep teams proactive.', 'webmakerr'); ?></span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-1 flex h-6 w-6 flex-none items-center justify-center rounded-full bg-primary/10 text-primary">
                    <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    echo marketing_business_render_icon('check', 'h-4 w-4');
                    ?>
                  </span>
                  <span><?php esc_html_e('Benchmark your stack against managed growth leaders and spot the gaps.', 'webmakerr'); ?></span>
                </li>
              </ul>
              <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                <button
                  type="button"
                  class="inline-flex items-center justify-center rounded border border-primary/40 bg-white px-5 py-2 text-sm font-semibold text-primary shadow-sm transition hover:border-primary/60 hover:bg-primary/5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                  data-diagnostic-modal-open
                  data-analytics-event="marketing-mid-diagnostic-open"
                  data-analytics-funnel="mid"
                  aria-controls="stack-risk-modal"
                >
                  <?php esc_html_e('See your stack risk score', 'webmakerr'); ?>
                </button>
                <p class="text-xs font-medium uppercase tracking-[0.26em] text-zinc-400 sm:text-[0.7rem]">
                  <?php esc_html_e('Instant diagnostic, no meeting required.', 'webmakerr'); ?>
                </p>
              </div>
            </div>
            <div class="rounded-[12px] border border-primary/20 bg-white/90 p-6 shadow-lg shadow-primary/10 backdrop-blur">
              <h4 class="text-xl font-semibold text-zinc-950 sm:text-2xl">
                <?php esc_html_e('Get the Managed Growth Blueprint', 'webmakerr'); ?>
              </h4>
              <p class="mt-2 text-sm text-zinc-600 sm:text-base sm:leading-7">
                <?php esc_html_e('Drop in your details to receive the blueprint via email and unlock the immediate download.', 'webmakerr'); ?>
              </p>
              <form
                id="managed-blueprint-form"
                class="mt-6 flex flex-col gap-4"
                novalidate
                data-lead-form
                data-endpoint="<?php echo esc_url($marketing_business_lead_endpoint); ?>"
                data-nonce="<?php echo esc_attr($marketing_business_lead_nonce); ?>"
                data-source="marketing-business-blueprint"
                data-offer="Managed Growth Blueprint"
                data-funnel="mid"
                data-form-location="marketing-business-blueprint"
                data-success-target="#managed-blueprint-success"
                data-download-url="<?php echo esc_url(home_url('/resources/managed-growth-blueprint/')); ?>"
                data-error-message="<?php esc_attr_e('We couldn’t send the blueprint. Please try again shortly.', 'webmakerr'); ?>"
              >
                <input type="hidden" name="intent" value="managed_growth_blueprint" />
                <div class="flex flex-col gap-2" data-field="name" data-required data-error-message="<?php esc_attr_e('Please share your name so we can personalize the asset.', 'webmakerr'); ?>">
                  <label class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500" for="managed-blueprint-name">
                    <?php esc_html_e('Full name', 'webmakerr'); ?> <span class="text-red-500">*</span>
                  </label>
                  <input
                    class="w-full rounded border border-zinc-200 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm transition focus:border-dark focus:outline-none focus:ring-2 focus:ring-dark/10"
                    type="text"
                    id="managed-blueprint-name"
                    name="full_name"
                    autocomplete="name"
                  />
                  <p class="hidden text-xs font-medium text-red-600" data-error="name"></p>
                </div>
                <div class="flex flex-col gap-2" data-field="email" data-required data-error-message="<?php esc_attr_e('Add a valid work email to receive the download.', 'webmakerr'); ?>" data-validate="email">
                  <label class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500" for="managed-blueprint-email">
                    <?php esc_html_e('Work email', 'webmakerr'); ?> <span class="text-red-500">*</span>
                  </label>
                  <input
                    class="w-full rounded border border-zinc-200 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm transition focus:border-dark focus:outline-none focus:ring-2 focus:ring-dark/10"
                    type="email"
                    id="managed-blueprint-email"
                    name="company_email"
                    autocomplete="email"
                  />
                  <p class="hidden text-xs font-medium text-red-600" data-error="email"></p>
                </div>
                <div class="flex flex-col gap-2" data-field="company" data-error-message="<?php esc_attr_e('Let us know your brand so we can tailor the follow-up.', 'webmakerr'); ?>">
                  <label class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500" for="managed-blueprint-company">
                    <?php esc_html_e('Company (optional)', 'webmakerr'); ?>
                  </label>
                  <input
                    class="w-full rounded border border-zinc-200 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm transition focus:border-dark focus:outline-none focus:ring-2 focus:ring-dark/10"
                    type="text"
                    id="managed-blueprint-company"
                    name="company_name"
                    autocomplete="organization"
                  />
                  <p class="hidden text-xs font-medium text-red-600" data-error="company"></p>
                </div>
                <button
                  type="submit"
                  class="inline-flex items-center justify-center rounded bg-dark px-4 py-2 text-sm font-semibold text-white transition hover:bg-dark/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-dark"
                  data-submit
                  data-default-label="<?php esc_attr_e('Get the Blueprint', 'webmakerr'); ?>"
                  data-loading-label="<?php esc_attr_e('Sending…', 'webmakerr'); ?>"
                  data-analytics-event="marketing-mid-blueprint-submit"
                  data-analytics-funnel="mid"
                >
                  <?php esc_html_e('Get the Blueprint', 'webmakerr'); ?>
                </button>
                <p class="hidden rounded border border-red-200 bg-red-50 px-4 py-2 text-xs font-medium text-red-600" data-form-alert role="alert"></p>
              </form>
              <div id="managed-blueprint-success" class="mt-6 hidden rounded border border-green-200 bg-green-50 p-5 text-sm text-green-900" aria-hidden="true">
                <h4 class="text-lg font-semibold text-green-900" data-success-heading data-default-heading="<?php esc_attr_e('Blueprint delivered!', 'webmakerr'); ?>">
                  <?php esc_html_e('Blueprint delivered!', 'webmakerr'); ?>
                </h4>
                <p class="mt-2 text-sm text-green-800" data-success-message data-default-message="<?php esc_attr_e('Check your inbox for the Managed Growth Blueprint. You can also open it below.', 'webmakerr'); ?>">
                  <?php esc_html_e('Check your inbox for the Managed Growth Blueprint. You can also open it below.', 'webmakerr'); ?>
                </p>
                <a
                  class="mt-4 inline-flex items-center justify-center rounded bg-dark px-4 py-2 text-sm font-semibold text-white transition hover:bg-dark/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-dark !no-underline"
                  href="<?php echo esc_url(home_url('/resources/managed-growth-blueprint/')); ?>"
                  data-success-link
                  data-analytics-event="marketing-mid-blueprint-download"
                  data-analytics-funnel="mid"
                  target="_blank"
                  rel="noopener"
                >
                  <?php esc_html_e('Access the Blueprint', 'webmakerr'); ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="border-t border-zinc-200 bg-gray-50 py-16 md:py-24">
        <div class="wm-container mx-auto px-6 md:px-12 lg:px-24">
          <div class="mx-auto max-w-4xl text-center text-zinc-600">
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              The Real Cost of Managing Multiple Platforms vs Webmakerr
            </h2>
            <p class="mt-6 text-base leading-7 sm:text-lg">
              Replace the patchwork of subscriptions with one managed platform built to scale with your team.
            </p>
          </div>

          <?php
          $comparison_highlights = array(
              array(
                  'icon'        => 'zap',
                  'title'       => __('Save $200+ every month', 'webmakerr'),
                  'description' => __('Drop overlapping licenses and unpredictable plugin renewals.', 'webmakerr'),
              ),
              array(
                  'icon'        => 'layers',
                  'title'       => __('One login for every workflow', 'webmakerr'),
                  'description' => __('Give marketing, sales, and service teams the same playbook.', 'webmakerr'),
              ),
              array(
                  'icon'        => 'smile',
                  'title'       => __('Launch-ready in weeks', 'webmakerr'),
                  'description' => __('Our team manages hosting, security, and onboarding for you.', 'webmakerr'),
              ),
          );
          ?>

          <div x-data="{ open: true }" class="mt-10 border-b border-zinc-200 py-4">
            <button type="button" @click="open = ! open" class="w-full text-left font-semibold text-gray-800">
              <?php esc_html_e('Comparison Highlights', 'webmakerr'); ?>
            </button>
            <div x-show="open" class="mt-2 text-gray-600 text-sm leading-relaxed">
              <div class="mx-auto mt-10 grid max-w-5xl gap-4 text-left sm:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($comparison_highlights as $highlight) : ?>
                  <div class="flex items-start gap-3 rounded-[6px] border border-zinc-200 bg-white/80 p-5 shadow-sm">
                    <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary">
                      <?php
                      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                      echo marketing_business_render_icon($highlight['icon']);
                      ?>
                    </span>
                    <div class="flex flex-col gap-1 text-sm leading-6 text-zinc-600">
                      <p class="text-base font-semibold text-zinc-900 sm:text-lg"><?php echo esc_html($highlight['title']); ?></p>
                      <p><?php echo esc_html($highlight['description']); ?></p>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <?php
          $comparison_platforms = array(
              'typical'  => array(
                  'name'         => 'Typical Stack',
                  'logo'         => '/wp-content/uploads/typical-stack-icon.png',
                  'logo_alt'     => 'Typical Stack',
                  'header_class' => 'bg-zinc-900 text-white',
                  'card_border'  => 'border border-zinc-200',
                  'logo_bg'      => 'bg-white/10',
                  'text_class'   => 'text-zinc-600',
                  'font_weight'  => '',
              ),
              'shopify'  => array(
                  'name'         => 'Shopify',
                  'logo'         => '/wp-content/uploads/shopify-logo.svg',
                  'logo_alt'     => 'Shopify',
                  'header_class' => 'bg-emerald-100 text-emerald-700',
                  'card_border'  => 'border border-emerald-100',
                  'logo_bg'      => 'bg-white',
                  'text_class'   => 'text-zinc-600',
                  'font_weight'  => '',
              ),
              'crm'      => array(
                  'name'         => 'CRM (HubSpot / Salesforce)',
                  'logo'         => '/wp-content/uploads/hubspot-logo.svg',
                  'logo_alt'     => 'HubSpot or Salesforce',
                  'header_class' => 'bg-amber-100 text-amber-700',
                  'card_border'  => 'border border-amber-100',
                  'logo_bg'      => 'bg-white',
                  'text_class'   => 'text-zinc-600',
                  'font_weight'  => '',
              ),
              'webmakerr' => array(
                  'name'         => 'Webmakerr',
                  'logo'         => '/wp-content/uploads/webmakerr-logo.svg',
                  'logo_alt'     => 'Webmakerr',
                  'header_class' => 'bg-[#1877F2] text-white',
                  'card_border'  => 'border-2 border-[#1877F2]',
                  'logo_bg'      => 'bg-white',
                  'text_class'   => 'text-[#1877F2]',
                  'font_weight'  => 'font-semibold',
                  'highlight'    => true,
              ),
          );

          $comparison_features = array(
              array(
                  'label'     => 'Website + Store Setup',
                  'icon'      => 'monitor',
                  'platforms' => array(
                      'typical'   => array('text' => '$149 one-time (basic setup)', 'status' => 'dash'),
                      'shopify'   => array('text' => '$29 / mo minimum + design fees', 'status' => 'dash'),
                      'crm'       => array('text' => 'Requires CMS integration', 'status' => 'dash'),
                      'webmakerr' => array('text' => 'Included with WebBuilder', 'status' => 'check'),
                  ),
              ),
              array(
                  'label'     => 'Cloud Hosting + CDN',
                  'icon'      => 'cloud',
                  'platforms' => array(
                      'typical'   => array('text' => '$15 / mo + $15 CDN add-on', 'status' => 'dash'),
                      'shopify'   => array('text' => 'Hosting included, CDN extra', 'status' => 'dash'),
                      'crm'       => array('text' => 'Not included — separate hosting', 'status' => 'dash'),
                      'webmakerr' => array('text' => 'Included — 170 edge servers, <1.5 s load', 'status' => 'check'),
                  ),
              ),
              array(
                  'label'     => 'CRM &amp; Automation',
                  'icon'      => 'loop',
                  'platforms' => array(
                      'typical'   => array('text' => '$39 / mo (standalone CRM)', 'status' => 'dash'),
                      'shopify'   => array('text' => 'Needs app integration', 'status' => 'dash'),
                      'crm'       => array('text' => '$45–$60 / user / mo', 'status' => 'dash'),
                      'webmakerr' => array('text' => 'Built-in WebCRM + Automation', 'status' => 'check'),
                  ),
              ),
              array(
                  'label'     => 'eCommerce / Checkout',
                  'icon'      => 'cart',
                  'platforms' => array(
                      'typical'   => array('text' => '$29 / mo + plugins', 'status' => 'dash'),
                      'shopify'   => array('text' => '$29–$79 / mo + 2–3 % fees', 'status' => 'dash'),
                      'crm'       => array('text' => 'Requires external system', 'status' => 'dash'),
                      'webmakerr' => array('text' => 'WebCommerce built-in, 0 % fees', 'status' => 'check'),
                  ),
              ),
              array(
                  'label'     => 'Booking / Scheduling',
                  'icon'      => 'calendar',
                  'platforms' => array(
                      'typical'   => array('text' => '$15 / mo (Calendly, etc.)', 'status' => 'dash'),
                      'shopify'   => array('text' => 'Requires app', 'status' => 'dash'),
                      'crm'       => array('text' => 'Add-on module', 'status' => 'dash'),
                      'webmakerr' => array('text' => 'WebBooking included', 'status' => 'check'),
                  ),
              ),
              array(
                  'label'     => 'SEO Tools',
                  'icon'      => 'search',
                  'platforms' => array(
                      'typical'   => array('text' => '$12 / mo (Yoast Pro)', 'status' => 'dash'),
                      'shopify'   => array('text' => 'Basic SEO built-in', 'status' => 'dash'),
                      'crm'       => array('text' => 'Advanced features in higher tiers', 'status' => 'dash'),
                      'webmakerr' => array('text' => 'AI SEO Suite built-in', 'status' => 'check'),
                  ),
              ),
              array(
                  'label'     => 'Customer Support',
                  'icon'      => 'chat',
                  'platforms' => array(
                      'typical'   => array('text' => '$49 / mo (Crisp, Intercom)', 'status' => 'dash'),
                      'shopify'   => array('text' => 'App integrations', 'status' => 'dash'),
                      'crm'       => array('text' => 'Add-on product', 'status' => 'dash'),
                      'webmakerr' => array('text' => 'WebSupport included', 'status' => 'check'),
                  ),
              ),
              array(
                  'label'     => 'Project Management',
                  'icon'      => 'checklist',
                  'platforms' => array(
                      'typical'   => array('text' => '$25 / mo (Asana, ClickUp)', 'status' => 'dash'),
                      'shopify'   => array('text' => 'Not included', 'status' => 'dash'),
                      'crm'       => array('text' => 'Not included', 'status' => 'dash'),
                      'webmakerr' => array('text' => 'WebBoard included', 'status' => 'check'),
                  ),
              ),
              array(
                  'label'     => 'Server-Side Tracking',
                  'icon'      => 'target',
                  'platforms' => array(
                      'typical'   => array('text' => '$19 / mo (Stape)', 'status' => 'dash'),
                      'shopify'   => array('text' => 'Third-party integration', 'status' => 'dash'),
                      'crm'       => array('text' => 'Manual setup required', 'status' => 'dash'),
                      'webmakerr' => array('text' => 'WebPixel server-side tracking included', 'status' => 'check'),
                  ),
              ),
              array(
                  'label'     => 'Backup &amp; Security',
                  'icon'      => 'lock',
                  'platforms' => array(
                      'typical'   => array('text' => '$5 / mo plugin', 'status' => 'dash'),
                      'shopify'   => array('text' => 'Basic included, advanced extra', 'status' => 'dash'),
                      'crm'       => array('text' => 'Higher-tier feature', 'status' => 'dash'),
                      'webmakerr' => array('text' => 'Managed by our team 24/7', 'status' => 'check'),
                  ),
              ),
              array(
                  'label'     => 'Total Monthly Cost',
                  'icon'      => 'coins',
                  'platforms' => array(
                      'typical'   => array('text' => '$253 / mo + $149 setup', 'status' => 'dash'),
                      'shopify'   => array('text' => '$100–$200 / mo (avg)', 'status' => 'dash'),
                      'crm'       => array('text' => '$70–$150 / mo per user', 'status' => 'dash'),
                      'webmakerr' => array('text' => '$29 / mo (all-inclusive)', 'status' => 'check'),
                  ),
                  'emphasis'  => true,
              ),
          );
          ?>

          <div x-data="{ open: true }" class="border-b border-zinc-200 py-4">
            <button type="button" @click="open = ! open" class="w-full text-left font-semibold text-gray-800">
              <?php esc_html_e('Feature-by-Feature Breakdown', 'webmakerr'); ?>
            </button>
            <div x-show="open" class="mt-2 text-gray-600 text-sm leading-relaxed">
              <div class="mt-16 flex flex-col gap-10 lg:flex-row">
                <div class="hidden lg:block lg:w-64 xl:w-72">
                  <div class="sticky top-24 space-y-4">
                    <?php foreach ($comparison_features as $feature) : ?>
                      <div class="rounded-[5px] border border-zinc-200 bg-white px-4 py-3 shadow-sm">
                        <p class="flex items-center text-sm font-semibold text-zinc-700">
                          <?php
                          // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                          echo marketing_business_feature_icon($feature['icon']);
                          ?>
                          <span><?php echo esc_html($feature['label']); ?></span>
                        </p>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
                <div class="flex-1">
                  <div class="-mx-2 overflow-x-auto pb-6 lg:mx-0 lg:overflow-visible">
                    <div class="flex gap-4 px-2 snap-x snap-mandatory lg:grid lg:grid-cols-4 lg:gap-6 lg:px-0">
                      <?php foreach ($comparison_platforms as $key => $platform) : ?>
                        <div class="min-w-[260px] snap-start <?php echo esc_attr($platform['card_border']); ?> rounded-xl bg-white shadow-md transition duration-200 hover:-translate-y-1 hover:shadow-xl lg:min-w-0">
                          <div class="flex flex-col items-center gap-3 <?php echo esc_attr($platform['header_class']); ?> px-6 py-6 text-center">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full <?php echo esc_attr($platform['logo_bg']); ?>">
                              <img src="<?php echo esc_url($platform['logo']); ?>" alt="<?php echo esc_attr($platform['logo_alt']); ?>" class="h-8 w-auto" />
                            </div>
                            <p class="text-base font-semibold">
                              <?php echo esc_html($platform['name']); ?>
                            </p>
                          </div>
                          <div class="flex flex-col divide-y divide-zinc-100">
                            <?php foreach ($comparison_features as $feature) : ?>
                              <?php
                              $value        = $feature['platforms'][$key];
                              $icon_class   = ('check' === $value['status']) ? 'text-[#1877F2]' : 'text-zinc-300';
                              $icon_state   = ('check' === $value['status']) ? 'check' : 'dash';
                              $text_classes = trim($platform['font_weight'] . ' ' . $platform['text_class']);
                              if (! empty($feature['emphasis'])) {
                                  if (! empty($platform['highlight'])) {
                                      $text_classes = 'text-lg font-bold text-[#1877F2]';
                                  } else {
                                      $text_classes = trim($text_classes . ' text-base font-semibold');
                                  }
                              } else {
                                  $text_classes = trim($text_classes . ' text-sm');
                              }
                              ?>
                              <div class="flex flex-col gap-2 px-6 py-4 text-left">
                                <p class="flex items-center text-xs font-semibold uppercase tracking-[0.24em] text-zinc-400 lg:hidden">
                                  <?php
                                  // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                  echo marketing_business_feature_icon($feature['icon']);
                                  ?>
                                  <span><?php echo esc_html($feature['label']); ?></span>
                                </p>
                                <div class="flex items-start">
                                  <?php if ('check' === $icon_state) : ?>
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 24 24"
                                      class="inline-block align-middle mr-2 h-4 w-4 md:h-5 md:w-5 <?php echo esc_attr($icon_class); ?>"
                                      fill="none"
                                      stroke="currentColor"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      aria-hidden="true"
                                    >
                                      <circle cx="12" cy="12" r="10"></circle>
                                      <path d="M9 12l2 2 4-4"></path>
                                    </svg>
                                  <?php else : ?>
                                    <span class="inline-block align-middle mr-2 text-base <?php echo esc_attr($icon_class); ?>" aria-hidden="true">—</span>
                                  <?php endif; ?>
                                  <span class="leading-6 <?php echo esc_attr($text_classes); ?>"><?php echo esc_html($value['text']); ?></span>
                                </div>
                              </div>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-10 rounded-[5px] bg-gradient-to-r from-primary/90 via-dark to-dark p-10 pb-10 text-center text-white md:p-14 md:pb-14">
                <h3 class="text-2xl md:text-3xl font-semibold mb-4 text-white">
                  Save hundreds every month — one platform, no plugins, no limits.
                </h3>
                <a href="#platform-overview" class="btn-main inline-flex items-center justify-center mt-3 px-8 py-3 font-semibold rounded-[5px] shadow transition transform hover:shadow-lg hover:scale-105 !no-underline" data-analytics-event="marketing-mid-savings" data-analytics-funnel="mid"><?php esc_html_e('Calculate Your Savings →', 'webmakerr'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="platform-overview" class="border-t border-zinc-200 bg-slate-50 py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="grid gap-12 lg:grid-cols-[0.9fr_1.1fr]">
            <div class="flex flex-col gap-6 text-center text-zinc-600 lg:text-left">
              <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
                Everything You Need — in One Platform
              </h2>
              <p class="text-base leading-7 sm:text-lg">Cloud hosting, CRM, store, SEO, support, analytics — managed, connected, and always up to date.</p>
              <p class="text-base leading-7 sm:text-lg">Webmakerr plans start at just $29 / month, including automation, backups, and proactive support.</p>
              <div class="mt-2 flex justify-center lg:justify-start">
                <a class="btn-main inline-flex items-center justify-center px-6 py-3 text-base font-medium" href="#ecosystem" data-analytics-event="marketing-mid-platform-tour" data-analytics-funnel="mid">
                  <?php esc_html_e('Explore the Managed Platform Tour →', 'webmakerr'); ?>
                </a>
              </div>
            </div>
            <div class="grid gap-4">
              <?php
              $platform_benefits = array(
                  array(
                      'icon' => 'server',
                      'title' => 'Managed infrastructure',
                      'description' => 'Global hosting, security, and monitoring handled by our team so yours can focus on customers.',
                  ),
                  array(
                      'icon' => 'repeat',
                      'title' => 'Automation everywhere',
                      'description' => 'Lead capture, nurturing, and fulfillment flow across the same platform — no brittle integrations.',
                  ),
                  array(
                      'icon' => 'shield-check',
                      'title' => 'Predictable ownership',
                      'description' => 'Transparent pricing, no surprise renewals, and full control of your data within the WordPress ecosystem.',
                  ),
              );

              foreach ($platform_benefits as $benefit) :
                  ?>
                  <div class="flex items-start gap-4 rounded-[5px] border border-zinc-200 bg-white p-5 shadow-sm">
                    <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary">
                      <?php
                      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                      echo marketing_business_render_icon($benefit['icon']);
                      ?>
                    </span>
                    <div class="flex flex-col gap-1">
                      <p class="text-sm font-semibold text-zinc-950 sm:text-base"><?php echo esc_html($benefit['title']); ?></p>
                      <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7"><?php echo esc_html($benefit['description']); ?></p>
                    </div>
                  </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>

      <section class="border-t border-zinc-200 bg-white py-16 lg:py-24">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-3xl flex-col gap-4 text-center text-zinc-600">
            <span class="inline-flex w-fit items-center gap-2 self-center rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.26em] text-primary">
              <?php esc_html_e('Customer Proof', 'webmakerr'); ?>
            </span>
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              <?php esc_html_e('Customer proof backed by measurable wins', 'webmakerr'); ?>
            </h2>
            <p class="text-base leading-7 sm:text-lg">
              <?php esc_html_e('Teams that trust Webmakerr launch faster, collaborate tighter, and show up with the kind of numbers leadership expects.', 'webmakerr'); ?>
            </p>
          </div>

          <?php
          $customer_proof_logos = array(
              array(
                  'name' => 'HubSpot',
                  'logo' => '/wp-content/uploads/logos/hubspot.svg',
              ),
              array(
                  'name' => 'Zendesk',
                  'logo' => '/wp-content/uploads/logos/zendesk.svg',
              ),
              array(
                  'name' => 'Mailchimp',
                  'logo' => '/wp-content/uploads/logos/mailchimp.svg',
              ),
              array(
                  'name' => 'Canva',
                  'logo' => '/wp-content/uploads/logos/canva.svg',
              ),
              array(
                  'name' => 'Buffer',
                  'logo' => '/wp-content/uploads/logos/buffer.svg',
              ),
          );

          $customer_testimonials = array(
              array(
                  'quote'   => '“Our revenue team finally works from the same playbook. Launch cycles moved from quarterly to monthly without adding headcount.”',
                  'name'    => 'Jordan Patel',
                  'title'   => 'VP Growth, HubSpot Partner Services',
                  'metric'  => '+38% pipeline velocity in two quarters',
              ),
              array(
                  'quote'   => '“Webmakerr absorbed our storefront, CRM, and support queue in one migration. Customer response times dropped overnight.”',
                  'name'    => 'Maya Rodríguez',
                  'title'   => 'Director of CX, Zendesk Labs',
                  'metric'  => '24% faster support-to-sale handoff',
              ),
              array(
                  'quote'   => '“Campaign ops stopped breaking every launch. We now forecast based on reliable data instead of best guesses.”',
                  'name'    => 'Chris Allen',
                  'title'   => 'Head of Lifecycle, Buffer',
                  'metric'  => '42% lift in qualified demo bookings',
              ),
          );

          $customer_case_studies = array(
              array(
                  'label' => __('Read the HubSpot implementation case study', 'webmakerr'),
                  'url'   => '#',
              ),
              array(
                  'label' => __('See how Buffer unified their funnels', 'webmakerr'),
                  'url'   => '#',
              ),
          );
          ?>

          <div class="mt-12 rounded-[5px] border border-zinc-200 bg-white/80 p-6 shadow-sm">
            <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-6">
              <?php foreach ($customer_proof_logos as $logo) : ?>
                <div class="flex items-center justify-center">
                  <img src="<?php echo esc_url($logo['logo']); ?>" alt="<?php echo esc_attr($logo['name']); ?>" class="h-8 w-auto opacity-80 transition hover:opacity-100" />
                  <span class="sr-only"><?php echo esc_html($logo['name']); ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="mt-16 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
            <?php foreach ($customer_testimonials as $testimonial) : ?>
              <div class="flex h-full flex-col justify-between gap-6 rounded-[5px] border border-zinc-200 bg-white p-6 text-left shadow-sm">
                <div class="flex flex-col gap-4">
                  <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7"><?php echo esc_html($testimonial['quote']); ?></p>
                  <div class="flex flex-col">
                    <span class="text-sm font-semibold text-zinc-950 sm:text-base"><?php echo esc_html($testimonial['name']); ?></span>
                    <span class="text-xs font-medium uppercase tracking-[0.24em] text-zinc-400 sm:text-[0.7rem] sm:tracking-[0.3em]">
                      <?php echo esc_html($testimonial['title']); ?>
                    </span>
                  </div>
                </div>
                <div class="rounded-[5px] border border-primary/20 bg-primary/5 px-4 py-2 text-sm font-semibold text-primary">
                  <?php echo esc_html($testimonial['metric']); ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <?php if (! empty($customer_case_studies)) : ?>
            <div class="mt-10 flex flex-col items-center gap-3 sm:flex-row sm:justify-center">
              <?php foreach ($customer_case_studies as $case_study) : ?>
                <a class="inline-flex items-center justify-center rounded-[5px] border border-primary/30 bg-primary/5 px-5 py-2 text-sm font-semibold text-primary transition hover:border-primary/40 hover:bg-primary/10 hover:text-primary !no-underline" href="<?php echo esc_url($case_study['url']); ?>">
                  <?php echo esc_html($case_study['label']); ?> &rarr;
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </section>

      <section class="border-t border-zinc-200 bg-white py-10">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="flex flex-col gap-4 rounded-[6px] border border-primary/20 bg-primary/5 px-6 py-6 text-center sm:flex-row sm:items-center sm:justify-between sm:text-left">
            <div class="flex flex-col gap-2 text-zinc-700">
              <span class="text-xs font-semibold uppercase tracking-[0.24em] text-primary"><?php esc_html_e('Next step', 'webmakerr'); ?></span>
              <p class="text-base font-semibold text-zinc-950 sm:text-lg"><?php esc_html_e('See Webmakerr tailored to your team in a live walkthrough.', 'webmakerr'); ?></p>
              <p class="text-sm text-zinc-600 sm:text-base"><?php esc_html_e('Meet with our specialists to map your workflows and success plan.', 'webmakerr'); ?></p>
            </div>
            <div class="flex justify-center sm:justify-end">
              <a class="inline-flex items-center justify-center rounded bg-dark px-5 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-dark/90 !no-underline" href="<?php echo esc_url($marketing_business_demo_anchor); ?>" data-analytics-event="marketing-bottom-banner" data-analytics-funnel="bottom">
                <?php esc_html_e('Start My Managed Launch', 'webmakerr'); ?>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="border-t border-zinc-200 bg-white py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-4xl flex-col gap-4 text-center">
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              Why Webmakerr Wins Where Others Stop
            </h2>
            <p class="text-base leading-7 text-zinc-600 sm:text-lg">Webmakerr is designed to feel effortless day-to-day while quietly delivering the reliability leaders expect.</p>
          </div>
          <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php
            $transformation_features = array(
                array(
                    'icon'     => 'layers',
                    'eyebrow'  => 'Unified Architecture',
                    'icon_bg'  => 'from-primary/15 via-primary/5 to-white text-primary',
                    'title'    => 'A True Platform — Not a Patchwork',
                    'summary'  => 'One ecosystem keeps every touchpoint aligned.',
                    'bullets'  => array(
                        'Shared design system for web, store, and CRM.',
                        'No plugin glue or conflicting admin panels.',
                    ),
                ),
                array(
                    'icon'     => 'cloud',
                    'eyebrow'  => 'Managed Infrastructure',
                    'icon_bg'  => 'from-sky-200/60 via-sky-100/80 to-white text-sky-600',
                    'title'    => 'Global Cloud + Managed Reliability',
                    'summary'  => 'Your site runs on our distributed cloud.',
                    'bullets'  => array(
                        'Security patches, updates, and uptime handled for you.',
                        'Automated daily backups and 24/7 monitoring.',
                    ),
                ),
                array(
                    'icon'     => 'target',
                    'eyebrow'  => 'Conversion Accuracy',
                    'icon_bg'  => 'from-amber-200/70 via-amber-100/80 to-white text-amber-600',
                    'title'    => 'Server-Side Pixel — Included',
                    'summary'  => 'Never miss a conversion event again.',
                    'bullets'  => array(
                        'Server-side tracking bypasses browser blocks.',
                        'Included by default—no extra $39/month add-on.',
                    ),
                ),
                array(
                    'icon'     => 'search',
                    'eyebrow'  => 'Search Performance',
                    'icon_bg'  => 'from-violet-200/70 via-violet-100/80 to-white text-violet-600',
                    'title'    => 'SEO Intelligence Built In',
                    'summary'  => 'Rank-ready pages out of the box.',
                    'bullets'  => array(
                        'AI audits flag issues before campaigns launch.',
                        'Live scoring guides every edit to stay optimized.',
                    ),
                ),
                array(
                    'icon'     => 'repeat',
                    'eyebrow'  => 'On-Demand Engineering',
                    'icon_bg'  => 'from-rose-200/70 via-rose-100/80 to-white text-rose-600',
                    'title'    => 'Custom Solutions on Demand',
                    'summary'  => 'Ship custom requests without pausing momentum.',
                    'bullets'  => array(
                        'Flat-rate builds for new integrations or workflows.',
                        'Delivered by the same team that maintains the platform.',
                    ),
                ),
                array(
                    'icon'     => 'shield-check',
                    'eyebrow'  => 'Ownership & Control',
                    'icon_bg'  => 'from-emerald-200/70 via-emerald-100/80 to-white text-emerald-600',
                    'title'    => 'You Own It',
                    'summary'  => 'Open-source foundations with your name on the keys.',
                    'bullets'  => array(
                        'Built on WordPress so data stays portable.',
                        'Full control over content, customers, and stack.',
                    ),
                ),
            );

            foreach ($transformation_features as $feature) :
                ?>
                <div class="group relative flex h-full flex-col gap-5 overflow-hidden rounded-[12px] border border-zinc-200 bg-gradient-to-br from-white via-white to-light/70 p-6 text-left shadow-sm transition duration-200 hover:-translate-y-1 hover:border-primary/40 hover:shadow-xl">
                  <span class="absolute inset-x-0 top-0 h-0.5 bg-gradient-to-r from-primary/60 via-primary to-primary/40 opacity-0 transition duration-300 group-hover:opacity-100" aria-hidden="true"></span>
                  <span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br <?php echo esc_attr($feature['icon_bg']); ?> shadow-inner ring-1 ring-white/60">
                    <?php
                    // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    echo marketing_business_render_icon($feature['icon'], 'h-6 w-6');
                    ?>
                  </span>
                  <div class="flex flex-col gap-2">
                    <?php if (! empty($feature['eyebrow'])) : ?>
                      <span class="text-[0.7rem] font-semibold uppercase tracking-[0.3em] text-primary/70"><?php echo esc_html($feature['eyebrow']); ?></span>
                    <?php endif; ?>
                    <p class="text-base font-semibold text-zinc-950 sm:text-lg"><?php echo esc_html($feature['title']); ?></p>
                    <?php if (! empty($feature['summary'])) : ?>
                      <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7"><?php echo esc_html($feature['summary']); ?></p>
                    <?php endif; ?>
                    <?php if (! empty($feature['bullets'])) : ?>
                      <ul class="mt-2 flex flex-col gap-1.5 text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7">
                        <?php foreach ($feature['bullets'] as $bullet) : ?>
                          <li class="flex gap-2">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-primary/50"></span>
                            <span class="flex-1"><?php echo esc_html($bullet); ?></span>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>
                  </div>
                </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section id="ecosystem" class="border-t border-zinc-200 bg-slate-50 py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-5xl flex-col gap-10">
            <div class="grid gap-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
              <div class="flex flex-col gap-4">
                <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
                  Everything Inside One Platform — One Flow from Visitor to Revenue
                </h2>
                <p class="text-base leading-7 text-zinc-600 sm:text-lg">
                  Your business moves as one continuous experience. Webmakerr keeps that experience connected—from the first visit to the renewal conversation—so teams share the same momentum.
                </p>
              </div>
              <div class="grid gap-3 rounded-[12px] border border-primary/20 bg-white/90 p-6 shadow-sm sm:grid-cols-2">
                <?php
                $ecosystem_overview = array(
                    array(
                        'title' => __('11 connected modules', 'webmakerr'),
                        'body'  => __('Marketing, sales, and service data stay synced automatically.', 'webmakerr'),
                    ),
                    array(
                        'title' => __('One managed workspace', 'webmakerr'),
                        'body'  => __('Launch, convert, and support customers without juggling plugins.', 'webmakerr'),
                    ),
                    array(
                        'title' => __('Built-in automation', 'webmakerr'),
                        'body'  => __('Adaptive journeys keep deals moving while your team stays focused.', 'webmakerr'),
                    ),
                    array(
                        'title' => __('Real-time insight', 'webmakerr'),
                        'body'  => __('Shared reporting keeps every department working from the same playbook.', 'webmakerr'),
                    ),
                );

                foreach ($ecosystem_overview as $overview) :
                    ?>
                    <div class="flex flex-col gap-1 rounded-[10px] border border-zinc-200/60 bg-slate-50/60 p-4">
                      <span class="text-sm font-semibold text-zinc-900"><?php echo esc_html($overview['title']); ?></span>
                      <span class="text-xs leading-5 text-zinc-600"><?php echo esc_html($overview['body']); ?></span>
                    </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <div class="mt-12 grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
            <?php
            $ecosystem_modules = array(
                array(
                    'number'      => 1,
                    'title'       => 'WebBuilder: Where It All Begins',
                    'summary'     => 'Launch conversion-ready experiences without inheriting plugin sprawl.',
                    'highlights'  => array(
                        'Industry-specific blueprints accelerate go-live while staying on brand.',
                        'SEO architecture and global caching keep pages fast under enterprise load.',
                        'Native CRM, analytics, and consent tools connected from day one.',
                    ),
                ),
                array(
                    'number'      => 2,
                    'title'       => 'WebCRM: Turn Visitors into Relationships',
                    'summary'     => 'Turn every visitor touchpoint into pipeline insight that drives predictable revenue.',
                    'highlights'  => array(
                        'Forms, chat, and ad sources consolidate into unified profiles in real time.',
                        'Engagement scoring surfaces ready-to-buy accounts for sales prioritization.',
                        'Adaptive sequences trigger instantly to progress deals without manual effort.',
                    ),
                ),
                array(
                    'number'      => 3,
                    'title'       => 'WebBooking: From Interest to Interaction',
                    'summary'     => 'Let prospects schedule next steps instantly so teams stay focused on delivery.',
                    'highlights'  => array(
                        'Self-serve scheduling for demos, consultations, and services in any time zone.',
                        'Calendar intelligence syncs with pipelines and resource plans automatically.',
                        'Automated reminders and confirmations protect every revenue moment.',
                    ),
                ),
                array(
                    'number'      => 4,
                    'title'       => 'WebCart + WebCommerce: From Offer to Order',
                    'summary'     => 'Monetize any offer with checkout, billing, and fulfillment tied to every customer record.',
                    'highlights'  => array(
                        'Unified checkout supports physical, digital, and recurring revenue models.',
                        'Revenue analytics, billing, and support data stay synchronized in one view.',
                        'Subscription stewardship runs without add-on maintenance or scripts.',
                    ),
                ),
                array(
                    'number'      => 5,
                    'title'       => 'WebBoard: From Sale to Delivery',
                    'summary'     => 'Activate delivery the moment payment clears and keep teams accountable to client outcomes.',
                    'highlights'  => array(
                        'Automated task plans launch for each new engagement with role-based ownership.',
                        'Progress, files, and conversations remain linked to the originating deal.',
                        'Predictive milestones and alerts keep clients confident in every stage.',
                    ),
                ),
                array(
                    'number'      => 6,
                    'title'       => 'WebSupport: From Questions to Loyalty',
                    'summary'     => 'Deliver proactive, context-rich support that strengthens retention and expansion.',
                    'highlights'  => array(
                        'Tickets, chats, and conversations map to orders and subscriptions instantly.',
                        'Agents see lifecycle history, sentiment, and open actions in one workspace.',
                        'Knowledge assets and automations turn support into a loyalty engine.',
                    ),
                ),
                array(
                    'number'      => 7,
                    'title'       => 'WebAffiliate: Turn Customers into Promoters',
                    'summary'     => 'Transform satisfied customers into a scalable growth channel with transparent partner management.',
                    'highlights'  => array(
                        'Automated referral tracking and performance dashboards motivate partners.',
                        'Flexible commission programs align incentives with revenue targets.',
                        'Ready-to-use assets and messaging accelerate campaign launches.',
                    ),
                ),
                array(
                    'number'      => 8,
                    'title'       => 'WebSEO: Always Found, Always Fast',
                    'summary'     => 'Command search visibility with AI guidance and edge delivery tuned for speed.',
                    'highlights'  => array(
                        'Real-time diagnostics uncover technical, on-page, and content wins.',
                        'Global edge network (170+ nodes) sustains instant load times worldwide.',
                        'Actionable recommendations feed directly into WebBuilder for rapid execution.',
                    ),
                ),
                array(
                    'number'      => 9,
                    'title'       => 'WebPixel: Every Click, Accurately Counted',
                    'summary'     => 'Trust every attribution decision with privacy-conscious, server-side tracking.',
                    'highlights'  => array(
                        'First-party data capture preserves campaign accuracy despite browser limits.',
                        'Conversion events sync automatically with WebCRM and downstream automation.',
                        'Compliant measurement keeps multi-channel reporting audit-ready.',
                    ),
                ),
                array(
                    'number'      => 10,
                    'title'       => 'Managed Cloud: Always Secure, Always Updated',
                    'summary'     => 'Rely on enterprise-grade infrastructure that is continuously optimized and protected.',
                    'highlights'  => array(
                        '24/7 monitoring delivers proactive performance tuning and anomaly response.',
                        'Automated updates and encrypted backups run without interrupting operations.',
                        'Layered security hardens uptime while reducing in-house maintenance costs.',
                    ),
                ),
                array(
                    'number'      => 11,
                    'title'       => 'Custom Solutions: Built for You',
                    'summary'     => 'Extend the platform with dedicated engineering designed for predictable investment.',
                    'highlights'  => array(
                        'Flat-rate delivery for bespoke features, integrations, and migrations.',
                        'QA, release management, and change control handled by Webmakerr experts.',
                        'Future-ready architecture evolves with your strategic roadmap.',
                    ),
                ),
            );

            foreach ($ecosystem_modules as $module) :
                ?>
                <article class="group flex h-full flex-col justify-between rounded-[16px] border border-zinc-200 bg-white p-6 shadow-sm transition transition-transform hover:-translate-y-1 hover:border-primary/40 hover:shadow-lg">
                  <div class="flex items-start justify-between gap-4">
                    <span class="inline-flex items-center rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.24em] text-primary">
                      <?php echo esc_html(sprintf(__('Module %s', 'webmakerr'), str_pad((string) $module['number'], 2, '0', STR_PAD_LEFT))); ?>
                    </span>
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-[0.7rem] font-semibold uppercase tracking-[0.3em] text-primary/70"><?php echo esc_html__('Unified journey', 'webmakerr'); ?></span>
                  </div>
                  <div class="mt-4 flex flex-col gap-3">
                    <h3 class="text-lg font-semibold text-zinc-950 sm:text-xl"><?php echo esc_html($module['title']); ?></h3>
                    <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7"><?php echo esc_html($module['summary']); ?></p>
                  </div>
                  <ul class="mt-5 grid gap-2">
                    <?php foreach ($module['highlights'] as $highlight) : ?>
                      <li class="flex items-start gap-3 rounded-[10px] border border-zinc-100 bg-slate-50/80 p-3 text-sm text-zinc-600 shadow-sm">
                        <span class="mt-1 flex h-5 w-5 flex-none items-center justify-center rounded-full bg-primary/10 text-primary">
                          <?php
                          // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                          echo marketing_business_render_icon('check', 'h-3.5 w-3.5');
                          ?>
                        </span>
                        <span class="leading-5 sm:text-base sm:leading-6"><?php echo esc_html($highlight); ?></span>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </article>
            <?php endforeach; ?>
          </div>
          <div class="mt-12 flex justify-center">
            <a class="btn-main inline-flex items-center justify-center px-6 py-3 text-base font-medium" href="<?php echo esc_url($marketing_business_demo_anchor); ?>">
              Book a Demo to See It in Action →
            </a>
          </div>
        </div>
      </section>

      <section class="border-t border-zinc-200 bg-white py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-4xl flex-col gap-6 text-center">
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              <?php esc_html_e('How to Get Started with Webmakerr', 'webmakerr'); ?>
            </h2>
            <p class="text-base leading-7 text-zinc-600 sm:text-lg">
              <?php esc_html_e('We keep onboarding collaborative and personal. Here’s how we guide every launch in four focused phases.', 'webmakerr'); ?>
            </p>
          </div>
          <div class="mt-12 grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
            <div>
              <div x-data="{ open: true }" class="border-b border-zinc-200 py-4">
                <button type="button" @click="open = ! open" class="w-full text-left font-semibold text-gray-800">
                  <?php esc_html_e('Guided Onboarding Overview', 'webmakerr'); ?>
                </button>
                <div x-show="open" class="mt-2 text-gray-600 text-sm leading-relaxed">
                  <aside class="flex flex-col gap-6 rounded-[14px] border border-primary/15 bg-gradient-to-br from-primary/5 via-white to-white px-6 py-8 text-left shadow-sm lg:px-8">
                    <span class="inline-flex w-fit items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-primary">
                      <?php
                      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                      echo marketing_business_render_icon('target', 'h-4 w-4 text-primary');
                      ?>
                      <span class="text-primary/80"><?php esc_html_e('Guided onboarding', 'webmakerr'); ?></span>
                    </span>
                    <h3 class="text-2xl font-semibold text-zinc-950 sm:text-3xl">
                      <?php esc_html_e('A phased rollout with your team at the center', 'webmakerr'); ?>
                    </h3>
                    <p class="text-base leading-7 text-zinc-600 sm:text-lg">
                      <?php esc_html_e('Every customer pairs with a dedicated specialist who shapes the launch schedule around your timeline and tech stack.', 'webmakerr'); ?>
                    </p>
                    <ul class="grid gap-2 text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7">
                      <li class="flex items-start gap-3 rounded-[10px] border border-white/60 bg-white/60 p-3 shadow-sm">
                        <span class="mt-1 flex h-5 w-5 flex-none items-center justify-center rounded-full bg-primary/10 text-primary">
                          <?php
                          // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                          echo marketing_business_render_icon('check', 'h-3.5 w-3.5');
                          ?>
                        </span>
                        <span><?php esc_html_e('Dedicated onboarding specialist from day one.', 'webmakerr'); ?></span>
                      </li>
                      <li class="flex items-start gap-3 rounded-[10px] border border-white/60 bg-white/60 p-3 shadow-sm">
                        <span class="mt-1 flex h-5 w-5 flex-none items-center justify-center rounded-full bg-primary/10 text-primary">
                          <?php
                          // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                          echo marketing_business_render_icon('check', 'h-3.5 w-3.5');
                          ?>
                        </span>
                        <span><?php esc_html_e('Weekly launch checkpoints tailored to your goals.', 'webmakerr'); ?></span>
                      </li>
                      <li class="flex items-start gap-3 rounded-[10px] border border-white/60 bg-white/60 p-3 shadow-sm">
                        <span class="mt-1 flex h-5 w-5 flex-none items-center justify-center rounded-full bg-primary/10 text-primary">
                          <?php
                          // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                          echo marketing_business_render_icon('check', 'h-3.5 w-3.5');
                          ?>
                        </span>
                        <span><?php esc_html_e('Automation tune-ups continue after your site goes live.', 'webmakerr'); ?></span>
                      </li>
                    </ul>
                    <div class="flex items-center gap-4 rounded-[12px] border border-primary/20 bg-primary/5 px-4 py-4 text-left">
                      <span class="text-4xl font-semibold text-primary">48h</span>
                      <p class="text-sm font-medium uppercase tracking-[0.26em] text-primary/80">
                        <?php esc_html_e('Most teams launch within 48 hours', 'webmakerr'); ?>
                      </p>
                    </div>
                    <a class="btn-main inline-flex items-center justify-center px-6 py-3 text-base font-medium" href="<?php echo esc_url($marketing_business_demo_anchor); ?>" data-analytics-event="marketing-mid-onboarding" data-analytics-funnel="mid">
                      <?php esc_html_e('Plan Your Rollout →', 'webmakerr'); ?>
                    </a>
                    <p class="text-xs text-zinc-500 sm:text-sm">
                      <?php esc_html_e('Your onboarding team stays on-call to refine automations after go-live.', 'webmakerr'); ?>
                    </p>
                  </aside>
                </div>
              </div>
            </div>
            <div class="relative flex flex-col gap-6">
              <span class="pointer-events-none absolute left-5 top-6 hidden h-[calc(100%-3rem)] w-px bg-gradient-to-b from-primary/40 via-primary/20 to-transparent lg:block"></span>
            <?php
            $onboarding_steps = array(
                array(
                    'step' => 1,
                    'icon' => 'user-plus',
                    'title'  => __('Connect', 'webmakerr'),
                    'summary' => __('Kickoff & orientation', 'webmakerr'),
                    'highlights' => array(
                        __('Create your account and secure admin access.', 'webmakerr'),
                        __('Link your WordPress site and review goals together.', 'webmakerr'),
                    ),
                ),
                array(
                    'step' => 2,
                    'icon' => 'sliders',
                    'title'  => __('Configure', 'webmakerr'),
                    'summary' => __('Tailored configuration', 'webmakerr'),
                    'highlights' => array(
                        __('Select the modules that match your pipeline.', 'webmakerr'),
                        __('We migrate data and align your integrations.', 'webmakerr'),
                    ),
                ),
                array(
                    'step' => 3,
                    'icon' => 'rocket',
                    'title'  => __('Launch', 'webmakerr'),
                    'summary' => __('Cloud provisioning & QA', 'webmakerr'),
                    'highlights' => array(
                        __('We provision your Webmakerr Cloud environment.', 'webmakerr'),
                        __('Performance tuning and workflow validation follow.', 'webmakerr'),
                    ),
                ),
                array(
                    'step' => 4,
                    'icon' => 'trending-up',
                    'title'  => __('Scale', 'webmakerr'),
                    'summary' => __('Optimization without the stall', 'webmakerr'),
                    'highlights' => array(
                        __('Automate recurring processes alongside our team.', 'webmakerr'),
                        __('Monitor insights and plan continual optimizations.', 'webmakerr'),
                    ),
                ),
            );

            foreach ($onboarding_steps as $step) :
                $is_first_step = (1 === (int) $step['step']);
                ?>
                <div x-data="{ open: <?php echo $is_first_step ? 'true' : 'false'; ?> }" class="border-b border-zinc-200 py-4 last:border-b-0">
                  <button type="button" @click="open = ! open" class="w-full text-left font-semibold text-gray-800">
                    <?php echo esc_html(sprintf(__('Step %1$s — %2$s', 'webmakerr'), str_pad((string) $step['step'], 2, '0', STR_PAD_LEFT), $step['title'])); ?>
                  </button>
                  <div x-show="open" class="mt-2 text-gray-600 text-sm leading-relaxed">
                    <article class="relative flex h-full flex-col gap-4 rounded-[10px] border border-zinc-200 bg-white/95 p-6 text-left shadow-sm transition hover:-translate-y-1 hover:border-primary/40 hover:shadow-lg lg:pl-12">
                      <span class="absolute -left-[26px] top-6 hidden h-10 w-10 items-center justify-center rounded-full border-2 border-white bg-primary text-sm font-semibold text-white shadow-sm lg:flex">
                        <?php echo esc_html(str_pad((string) $step['step'], 2, '0', STR_PAD_LEFT)); ?>
                      </span>
                      <div class="flex items-start justify-between gap-4">
                        <span class="flex h-12 w-12 flex-none items-center justify-center rounded-full bg-primary/10 text-primary">
                          <?php
                          // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                          echo marketing_business_render_icon($step['icon'], 'h-6 w-6');
                          ?>
                        </span>
                        <div class="flex flex-col">
                          <span class="text-xs font-semibold uppercase tracking-[0.32em] text-primary">
                            <?php echo esc_html(sprintf(__('Step %s', 'webmakerr'), str_pad((string) $step['step'], 2, '0', STR_PAD_LEFT))); ?>
                          </span>
                          <p class="mt-1 text-base font-semibold text-zinc-950 sm:text-lg"><?php echo esc_html($step['title']); ?></p>
                          <p class="text-sm font-medium text-primary sm:text-base">
                            <?php echo esc_html($step['summary']); ?>
                          </p>
                        </div>
                      </div>
                      <ul class="grid gap-2 text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7">
                        <?php foreach ($step['highlights'] as $highlight) : ?>
                          <li class="flex items-start gap-3 rounded-[10px] bg-slate-50/70 p-3">
                            <span class="mt-1 flex h-5 w-5 flex-none items-center justify-center rounded-full bg-primary/10 text-primary">
                              <?php
                              // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                              echo marketing_business_render_icon('check', 'h-3.5 w-3.5');
                              ?>
                            </span>
                            <span><?php echo esc_html($highlight); ?></span>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </article>
                  </div>
                </div>
            <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>

      <section class="border-t border-zinc-200 bg-slate-50 py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="grid gap-12 lg:grid-cols-[0.9fr_1.1fr]">
            <div class="flex flex-col gap-6">
              <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
                Our Mission &amp; Mindset
              </h2>
              <blockquote class="rounded-[6px] border border-zinc-200 bg-light px-6 py-6 text-left shadow-sm">
                <p class="text-base leading-7 text-zinc-600 sm:text-lg">
                  “We built Webmakerr after watching businesses waste hours managing tools that never talked to each other. Growth should be automatic — not exhausting.”
                </p>
                <footer class="mt-4 text-sm font-semibold text-zinc-950 sm:text-base">
                  — [Founder Name], Creator of Webmakerr
                </footer>
              </blockquote>
              <div class="flex flex-col gap-4">
                <p class="text-base leading-7 text-zinc-600 sm:text-lg">
                  <?php esc_html_e('Our platform exists so teams can spend their time on creative momentum instead of maintenance checklists.', 'webmakerr'); ?>
                </p>
                <ul class="grid gap-2 text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7">
                  <li class="flex items-start gap-3 rounded-[8px] border border-zinc-200 bg-white/80 px-4 py-3">
                    <span class="mt-1 flex h-5 w-5 flex-none items-center justify-center rounded-full bg-primary/10 text-primary">
                      <?php
                      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                      echo marketing_business_render_icon('check', 'h-3.5 w-3.5');
                      ?>
                    </span>
                    <span><?php esc_html_e('No more juggling logins, dashboards, and disparate vendors.', 'webmakerr'); ?></span>
                  </li>
                  <li class="flex items-start gap-3 rounded-[8px] border border-zinc-200 bg-white/80 px-4 py-3">
                    <span class="mt-1 flex h-5 w-5 flex-none items-center justify-center rounded-full bg-primary/10 text-primary">
                      <?php
                      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                      echo marketing_business_render_icon('check', 'h-3.5 w-3.5');
                      ?>
                    </span>
                    <span><?php esc_html_e('Updates, security, and scale are handled by specialists on your behalf.', 'webmakerr'); ?></span>
                  </li>
                  <li class="flex items-start gap-3 rounded-[8px] border border-zinc-200 bg-white/80 px-4 py-3">
                    <span class="mt-1 flex h-5 w-5 flex-none items-center justify-center rounded-full bg-primary/10 text-primary">
                      <?php
                      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                      echo marketing_business_render_icon('check', 'h-3.5 w-3.5');
                      ?>
                    </span>
                    <span><?php esc_html_e('Every release is backed by measurable performance targets, not guesswork.', 'webmakerr'); ?></span>
                  </li>
                </ul>
              </div>
              <dl class="grid gap-4 rounded-[10px] border border-zinc-200 bg-white/80 p-5 sm:grid-cols-2">
                <div>
                  <dt class="text-xs font-semibold uppercase tracking-[0.32em] text-primary">
                    <?php esc_html_e('Average response time', 'webmakerr'); ?>
                  </dt>
                  <dd class="mt-2 text-2xl font-semibold text-zinc-950">15m</dd>
                  <p class="text-xs text-zinc-500 sm:text-sm">
                    <?php esc_html_e('Support engineers resolve critical alerts before campaigns are affected.', 'webmakerr'); ?>
                  </p>
                </div>
                <div>
                  <dt class="text-xs font-semibold uppercase tracking-[0.32em] text-primary">
                    <?php esc_html_e('Launch readiness score', 'webmakerr'); ?>
                  </dt>
                  <dd class="mt-2 text-2xl font-semibold text-zinc-950">99%</dd>
                  <p class="text-xs text-zinc-500 sm:text-sm">
                    <?php esc_html_e('Infrastructure reviews ensure every rollout meets enterprise benchmarks.', 'webmakerr'); ?>
                  </p>
                </div>
              </dl>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
              <?php
              $mission_values = array(
                  array(
                      'icon' => 'smile',
                      'title' => __('People-first support', 'webmakerr'),
                      'summary' => __('Dedicated humans, proactive monitoring, and direct Slack channels keep teams informed.', 'webmakerr'),
                      'details' => array(
                          __('24/7 monitoring across sites, stores, and funnels.', 'webmakerr'),
                          __('Escalation playbooks tailored to your launch calendar.', 'webmakerr'),
                      ),
                  ),
                  array(
                      'icon' => 'check',
                      'title' => __('Operational certainty', 'webmakerr'),
                      'summary' => __('Predictable infrastructure removes second-guessing before every drop.', 'webmakerr'),
                      'details' => array(
                          __('Managed updates, backups, and compliance reporting.', 'webmakerr'),
                          __('Capacity planning that scales alongside campaign velocity.', 'webmakerr'),
                      ),
                  ),
                  array(
                      'icon' => 'zap',
                      'title' => __('Velocity with control', 'webmakerr'),
                      'summary' => __('Rapid experimentation without sacrificing performance standards.', 'webmakerr'),
                      'details' => array(
                          __('Reusable modules built for marketing, product, and ops teams.', 'webmakerr'),
                          __('Performance budgets validated before each release hits production.', 'webmakerr'),
                      ),
                  ),
                  array(
                      'icon' => 'target',
                      'title' => __('Evidence-driven outcomes', 'webmakerr'),
                      'summary' => __('Every program is measured against agreed metrics to stay accountable.', 'webmakerr'),
                      'details' => array(
                          __('Quarterly growth reviews with transparent scorecards.', 'webmakerr'),
                          __('Shared dashboards connect campaigns to revenue impact.', 'webmakerr'),
                      ),
                  ),
              );

              foreach ($mission_values as $value) :
                  ?>
                  <article class="flex h-full flex-col gap-4 rounded-[10px] border border-zinc-200 bg-white/90 p-5 shadow-sm transition hover:-translate-y-0.5 hover:border-primary/30">
                    <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary">
                      <?php
                      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                      echo marketing_business_render_icon($value['icon']);
                      ?>
                    </span>
                    <div class="flex flex-col gap-2">
                      <p class="text-sm font-semibold text-zinc-950 sm:text-base"><?php echo esc_html($value['title']); ?></p>
                      <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7">
                        <?php echo esc_html($value['summary']); ?>
                      </p>
                      <ul class="grid gap-2 text-xs leading-5 text-zinc-500 sm:text-sm">
                        <?php foreach ($value['details'] as $detail) : ?>
                          <li class="flex items-start gap-2">
                            <span class="mt-1 inline-flex h-3 w-3 flex-none items-center justify-center rounded-full bg-primary/20"></span>
                            <span><?php echo esc_html($detail); ?></span>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  </article>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>

      <section class="border-t border-zinc-200 bg-white py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-4xl flex-col gap-4 text-center">
            <span class="inline-flex w-fit items-center gap-2 self-center rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.26em] text-primary">
              <?php esc_html_e('Webmakerr Advantage', 'webmakerr'); ?>
            </span>
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              <?php esc_html_e('Three pillars competitors can’t deliver together', 'webmakerr'); ?>
            </h2>
            <p class="text-base leading-7 text-zinc-600 sm:text-lg">
              <?php esc_html_e('Here’s what makes Webmakerr the managed choice: enterprise infrastructure, custom development without the agency meter, and tracking that keeps your data honest.', 'webmakerr'); ?>
            </p>
          </div>
          <?php
          $webmakerr_pillars = array(
              array(
                  'icon'        => 'cloud',
                  'title'       => __('Managed Cloud', 'webmakerr'),
                  'description' => __('Always-on, optimized hosting with a global edge network — while DIY stacks leave your team chasing downtime and patches.', 'webmakerr'),
              ),
              array(
                  'icon'        => 'repeat',
                  'title'       => __('Flat-rate Custom Development', 'webmakerr'),
                  'description' => __('Request features and integrations at a predictable flat rate instead of juggling agencies and unpredictable invoices.', 'webmakerr'),
              ),
              array(
                  'icon'        => 'target',
                  'title'       => __('Server-side Tracking', 'webmakerr'),
                  'description' => __('Capture conversions accurately through native server-side tracking — no extra tools that lose signal to browser blockers.', 'webmakerr'),
              ),
          );
          ?>
          <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($webmakerr_pillars as $pillar) : ?>
              <div class="group flex h-full flex-col gap-4 rounded-[10px] border border-zinc-200 bg-gradient-to-br from-white via-white to-light/60 p-6 text-left shadow-sm transition duration-200 hover:-translate-y-1 hover:border-primary/40 hover:shadow-lg">
                <span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary">
                  <?php
                  // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                  echo marketing_business_render_icon($pillar['icon'], 'h-6 w-6');
                  ?>
                </span>
                <div class="flex flex-col gap-2">
                  <p class="text-base font-semibold text-zinc-950 sm:text-lg"><?php echo esc_html($pillar['title']); ?></p>
                  <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7"><?php echo esc_html($pillar['description']); ?></p>
                </div>
                <span class="mt-auto h-0.5 w-16 rounded-full bg-gradient-to-r from-primary via-primary/70 to-transparent opacity-0 transition duration-200 group-hover:opacity-100" aria-hidden="true"></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <?php
      $marketing_business_commitments = array(
          array(
              'icon'        => 'shield-check',
              'title'       => __('Personalized launch plan', 'webmakerr'),
              'description' => __('We map Webmakerr to your workflows, data, and integrations before day one.', 'webmakerr'),
          ),
          array(
              'icon'        => 'server',
              'title'       => __('Managed cloud infrastructure', 'webmakerr'),
              'description' => __('Global edge delivery, security patching, and 24/7 monitoring handled for you.', 'webmakerr'),
          ),
          array(
              'icon'        => 'repeat',
              'title'       => __('Ongoing success partnership', 'webmakerr'),
              'description' => __('Monthly strategy reviews and priority support keep momentum after launch.', 'webmakerr'),
          ),
          array(
              'icon'        => 'rocket',
              'title'       => __('Faster revenue experiments', 'webmakerr'),
              'description' => __('Deploy new funnels and automations without juggling plugins or vendors.', 'webmakerr'),
          ),
      );
      ?>
      <section id="demo" class="relative overflow-hidden bg-gradient-to-r from-primary/90 via-dark to-dark py-12 lg:py-20">
        <div class="relative mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="grid gap-12 text-white lg:grid-cols-[1fr_0.95fr] lg:items-center">
            <div class="flex flex-col gap-6 text-center lg:text-left">
              <h2 class="text-3xl font-semibold text-white sm:text-4xl">
                <?php esc_html_e('Ready to Run Your Entire Business on One Platform?', 'webmakerr'); ?>
              </h2>
              <p class="text-base leading-7 text-white/80 sm:text-lg">
                <?php esc_html_e('Every Webmakerr setup is personalized, cloud-provisioned, and fully managed by our team.', 'webmakerr'); ?>
              </p>
              <div class="inline-flex items-center justify-center gap-2 self-center rounded-full border border-white/30 bg-white/10 px-4 py-1 text-[0.75rem] font-semibold uppercase tracking-[0.3em] text-white/80 shadow-sm lg:self-start">
                <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                echo marketing_business_render_icon('target', 'h-4 w-4 text-white/80');
                ?>
                <span><?php esc_html_e('Limited onboarding each month', 'webmakerr'); ?></span>
              </div>
              <div class="mt-6 flex flex-col items-center justify-center gap-4 sm:flex-row lg:justify-start">
                <a class="inline-flex w-full items-center justify-center rounded border border-transparent bg-primary px-5 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-primary-dark focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white !no-underline sm:w-auto" href="<?php echo esc_url($marketing_business_demo_link); ?>" data-analytics-event="marketing-bottom-demo" data-analytics-funnel="bottom">
                  <?php esc_html_e('Reserve My Managed Launch →', 'webmakerr'); ?>
                </a>
                <a class="inline-flex w-full items-center justify-center rounded border border-white/70 bg-transparent px-5 py-2 text-sm font-semibold text-white transition hover:bg-white/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white !no-underline sm:w-auto" href="#platform-overview">
                  <?php esc_html_e('Explore the Platform →', 'webmakerr'); ?>
                </a>
              </div>
              <p class="text-sm text-white/70">
                <?php esc_html_e('Join thousands of founders and teams who simplified their operations with Webmakerr. Fewer tools. Faster growth. Real control.', 'webmakerr'); ?>
              </p>
            </div>
            <div class="flex flex-col gap-6">
              <div class="rounded-[12px] border border-white/15 bg-white/10 p-6 shadow-lg shadow-black/20 backdrop-blur">
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-white/70">
                  <?php esc_html_e('What to expect after you schedule', 'webmakerr'); ?>
                </p>
                <p class="mt-3 text-base text-white/80">
                  <?php esc_html_e('We reserve a discovery call to understand your growth goals, design a build-and-launch plan, and align the team that will manage it for you.', 'webmakerr'); ?>
                </p>
              </div>
              <ul class="grid gap-4 sm:grid-cols-2">
                <?php foreach ($marketing_business_commitments as $commitment) : ?>
                  <li class="group flex h-full flex-col gap-3 rounded-[12px] border border-white/10 bg-white/5 p-5 text-left shadow-sm transition duration-200 hover:-translate-y-0.5 hover:border-white/40 hover:bg-white/10">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-white">
                      <?php
                      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                      echo marketing_business_render_icon($commitment['icon'], 'h-5 w-5');
                      ?>
                    </span>
                    <p class="text-base font-semibold text-white">
                      <?php echo esc_html($commitment['title']); ?>
                    </p>
                    <p class="text-sm leading-6 text-white/70">
                      <?php echo esc_html($commitment['description']); ?>
                    </p>
                    <span class="mt-auto h-px w-14 rounded-full bg-gradient-to-r from-white/70 via-white/30 to-transparent opacity-0 transition duration-200 group-hover:opacity-100" aria-hidden="true"></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </article>
  <?php endwhile; ?>
</main>

<?php
get_footer();
?>
