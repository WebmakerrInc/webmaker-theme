<?php
/**
 * Template Name: Privacy Policy
 */
?>
<?php
if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="bg-white">
  <?php while (have_posts()) : the_post(); ?>
    <?php
    $policy_sections = array(
        array(
            'id' => 'introduction',
            'title' => __('Introduction', 'webmakerr'),
            'paragraphs' => array(
                __('Webmakerr builds digital experiences, marketing tools, and commerce infrastructure that help creative businesses thrive online. This Privacy Policy explains the personal information we collect about you when you use our websites, services, applications, or communicate with our team.', 'webmakerr'),
                __('By engaging with Webmakerr, you consent to the data practices described below. We have written this document in plain language so you understand how your information is used, the safeguards we apply, and the rights available to you under applicable laws.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'information-we-collect',
            'title' => __('Information We Collect', 'webmakerr'),
            'paragraphs' => array(
                __('We collect information when you visit our digital properties, submit inquiries, purchase a plan, or collaborate with our support and success teams. Some of this information is provided directly by you, while other data is automatically generated through your device or interactions with our platform.', 'webmakerr'),
            ),
            'lists' => array(
                array(
                    'intro' => __('This includes, depending on how you engage with us:', 'webmakerr'),
                    'items' => array(
                        __('Contact details such as your name, company, email address, phone number, and billing information.', 'webmakerr'),
                        __('Account credentials including usernames, role assignments, and authentication tokens.', 'webmakerr'),
                        __('Project information like brand assets, creative briefs, or feedback that you choose to share with us.', 'webmakerr'),
                        __('Technical data such as IP address, browser type, device identifiers, and pages visited.', 'webmakerr'),
                        __('Communication records from live chat, email threads, recorded demos, or support tickets.', 'webmakerr'),
                    ),
                ),
            ),
            'additional_paragraphs' => array(
                __('We also generate aggregated analytics and performance metrics to understand how customers use our tools. Aggregated data does not identify individuals and is used to enhance product design, reliability, and user experience.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'how-we-use-your-information',
            'title' => __('How We Use Your Information', 'webmakerr'),
            'paragraphs' => array(
                __('Webmakerr uses collected information to deliver tailored services, support business operations, and improve our product ecosystem. We combine data across systems only when necessary and only for the purposes outlined here.', 'webmakerr'),
            ),
            'lists' => array(
                array(
                    'intro' => __('Specifically, we may use your data to:', 'webmakerr'),
                    'items' => array(
                        __('Provide, activate, and maintain websites, hosting, integrations, and subscription features you request.', 'webmakerr'),
                        __('Process transactions, send invoices, manage billing cycles, and prevent fraudulent activity.', 'webmakerr'),
                        __('Deliver customer support, onboarding guidance, and technical troubleshooting through our help desk.', 'webmakerr'),
                        __('Personalize product recommendations, educational content, and marketing communications.', 'webmakerr'),
                        __('Conduct analytics, testing, and research to monitor usage patterns and improve performance.', 'webmakerr'),
                    ),
                ),
            ),
            'additional_paragraphs' => array(
                __('We will not sell your personal information. When we share information with vendors or partners, it is limited to what is needed for them to provide contracted services on our behalf and they must follow strict confidentiality and security obligations.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'legal-basis-gdpr',
            'title' => __('Legal Basis (GDPR)', 'webmakerr'),
            'paragraphs' => array(
                __('If you are located in the European Economic Area, the United Kingdom, or Switzerland, Webmakerr processes your personal information only where we have a valid legal basis under the General Data Protection Regulation (GDPR).', 'webmakerr'),
                __('The specific legal basis depends on the context in which we collect your data:', 'webmakerr'),
            ),
            'lists' => array(
                array(
                    'items' => array(
                        __('Performance of a contract when we provide requested services, manage your account, or fulfill support agreements.', 'webmakerr'),
                        __('Legitimate interests to improve our offerings, secure our platform, or communicate updates that are relevant to your usage.', 'webmakerr'),
                        __('Compliance with legal obligations, including record-keeping, tax requirements, and responding to lawful requests.', 'webmakerr'),
                        __('Consent when you opt in to marketing communications, cookies that are not strictly necessary, or certain beta features.', 'webmakerr'),
                    ),
                ),
            ),
            'additional_paragraphs' => array(
                __('You may withdraw consent at any time, and we will honor your decision unless a different legal basis requires us to continue processing specific information.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'cookies-and-tracking-technologies',
            'title' => __('Cookies & Tracking Technologies', 'webmakerr'),
            'paragraphs' => array(
                __('We use cookies, pixels, and similar tracking technologies to deliver essential functionality, remember your preferences, and analyze how visitors use our websites. Some cookies are necessary for the site to function, while others help us tailor content or measure the success of campaigns.', 'webmakerr'),
            ),
            'lists' => array(
                array(
                    'intro' => __('We group cookies into the following categories:', 'webmakerr'),
                    'items' => array(
                        __('Essential cookies that support secure sign-in, session management, and shopping cart functionality.', 'webmakerr'),
                        __('Performance cookies that gather aggregated analytics about visits, page views, and response times.', 'webmakerr'),
                        __('Functional cookies that remember language choices, saved preferences, or previously viewed resources.', 'webmakerr'),
                        __('Marketing cookies that help us deliver relevant ads or promotions on Webmakerr and partner platforms.', 'webmakerr'),
                    ),
                ),
            ),
            'additional_paragraphs' => array(
                __('You can manage cookie preferences through your browser settings or via the cookie banner presented on our sites. Disabling certain cookies may limit access to product features that rely on them.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'data-storage-and-security',
            'title' => __('Data Storage & Security', 'webmakerr'),
            'paragraphs' => array(
                __('Webmakerr stores data on secure servers located in regions that align with our customers’ deployment needs. We apply administrative, technical, and physical safeguards to protect information from unauthorized access, disclosure, alteration, or destruction.', 'webmakerr'),
            ),
            'lists' => array(
                array(
                    'intro' => __('Our security program includes:', 'webmakerr'),
                    'items' => array(
                        __('Encryption in transit and at rest for sensitive account and payment information.', 'webmakerr'),
                        __('Access controls that restrict internal data handling to trained personnel with legitimate business purposes.', 'webmakerr'),
                        __('Continuous monitoring, logging, and alerting to detect unusual activity across our infrastructure.', 'webmakerr'),
                        __('Regular audits, vendor assessments, and incident response procedures to maintain compliance.', 'webmakerr'),
                    ),
                ),
            ),
            'additional_paragraphs' => array(
                __('While no online platform can guarantee absolute security, we continually refine our safeguards to reduce risk and respond quickly to potential issues.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'your-data-rights',
            'title' => __('Your Data Rights', 'webmakerr'),
            'paragraphs' => array(
                __('Depending on your jurisdiction, you may have specific rights regarding the personal information we hold about you. We honor these rights consistent with applicable laws and will respond to verified requests within the required time frames.', 'webmakerr'),
            ),
            'lists' => array(
                array(
                    'intro' => __('You may have the right to:', 'webmakerr'),
                    'items' => array(
                        __('Access a copy of your personal information and receive details about how we process it.', 'webmakerr'),
                        __('Request corrections to inaccurate or incomplete information we maintain about you.', 'webmakerr'),
                        __('Request deletion of personal information when it is no longer needed or when consent is withdrawn.', 'webmakerr'),
                        __('Object to or restrict processing based on legitimate interests or direct marketing.', 'webmakerr'),
                        __('Request data portability so you can reuse information across different services.', 'webmakerr'),
                    ),
                ),
            ),
            'additional_paragraphs' => array(
                __('To exercise your rights, contact us using the details provided in the Contact Information section. We may need to verify your identity before completing a request.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'third-party-services',
            'title' => __('Third-Party Services', 'webmakerr'),
            'paragraphs' => array(
                __('Webmakerr partners with carefully vetted service providers that support payments, analytics, cloud hosting, customer support, marketing, and other operational needs. These partners process data only under contract and must adhere to confidentiality, security, and legal compliance obligations.', 'webmakerr'),
                __('Our websites may include links to third-party resources. We are not responsible for the privacy practices of those third parties, and we encourage you to review their policies before sharing personal information.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'childrens-privacy',
            'title' => __('Children\'s Privacy', 'webmakerr'),
            'paragraphs' => array(
                __('Webmakerr services are intended for professionals and business owners. We do not knowingly collect personal information from children under the age required by applicable law. If we become aware that a child has provided personal data without parental consent, we will take steps to delete that information promptly.', 'webmakerr'),
                __('Parents or guardians who believe a child has submitted personal information to Webmakerr should contact us immediately so we can investigate and take appropriate action.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'changes-to-this-policy',
            'title' => __('Changes to This Policy', 'webmakerr'),
            'paragraphs' => array(
                __('We may update this Privacy Policy from time to time to reflect operational, legal, or regulatory changes. When we make material updates, we will post a prominent notice on our website or notify you through the email address associated with your account.', 'webmakerr'),
                __('The “Last Updated” date at the top of this page indicates the effective date of the most recent revision. Continued use of Webmakerr services after an update constitutes acceptance of the revised policy.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'contact-information',
            'title' => __('Contact Information', 'webmakerr'),
            'paragraphs' => array(
                __('If you have questions about this Privacy Policy, our data practices, or would like to exercise your privacy rights, please reach out to us. Our privacy team is ready to help clarify any concerns.', 'webmakerr'),
            ),
            'lists' => array(
                array(
                    'items' => array(
                        __('Email: privacy@webmakerr.com', 'webmakerr'),
                        __('Mailing Address: Webmakerr Privacy Office, 1200 Market Street, Suite 210, San Francisco, CA 94105, USA', 'webmakerr'),
                        __('Support Portal: Submit a ticket through the Webmakerr Help Center for secure request tracking.', 'webmakerr'),
                    ),
                ),
            ),
            'additional_paragraphs' => array(
                __('We respond to verified privacy inquiries within the timelines required by applicable regulations. When necessary, we will guide you through additional steps so we can authenticate your identity and protect your information.', 'webmakerr'),
            ),
        ),
    );
    ?>
    <article <?php post_class('flex flex-col font-[\'Roboto\'] text-zinc-600'); ?>>
      <section class="bg-white py-20 sm:py-24">
        <div class="mx-auto w-full max-w-6xl px-4 sm:px-6 lg:px-8">
          <header class="flex flex-col gap-6 text-center">
            <h1 class="font-['Playfair Display'] text-4xl font-semibold text-zinc-950 sm:text-5xl lg:text-6xl">
              <?php esc_html_e('Privacy Policy', 'webmakerr'); ?>
            </h1>
            <p class="mx-auto max-w-3xl text-base leading-7 text-zinc-600 sm:text-lg">
              <?php esc_html_e('This page explains how we collect, use and protect your information.', 'webmakerr'); ?>
            </p>
          </header>
        </div>
      </section>

      <section class="py-16 sm:py-20 lg:py-24">
        <div class="mx-auto w-full max-w-4xl px-4 sm:px-6 lg:px-8">
          <div class="rounded-[6px] border border-zinc-200 bg-white p-8 shadow-sm">
            <h2 class="font-['Playfair Display'] text-2xl font-semibold text-zinc-950">
              <?php esc_html_e('Table of Contents', 'webmakerr'); ?>
            </h2>
            <ul class="mt-6 space-y-3 text-base">
              <?php foreach ($policy_sections as $section) : ?>
                <li>
                  <a class="inline-flex items-center gap-2 text-[#01C468] transition hover:text-[#019955]" href="#<?php echo esc_attr($section['id']); ?>">
                    <span class="h-1.5 w-1.5 rounded-full bg-[#01C468]"></span>
                    <span><?php echo esc_html($section['title']); ?></span>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </section>

      <section class="py-16 sm:py-20 lg:py-24">
        <div class="mx-auto w-full max-w-4xl px-4 sm:px-6 lg:px-8">
          <div class="flex flex-col divide-y divide-zinc-200">
            <?php foreach ($policy_sections as $section) : ?>
              <div id="<?php echo esc_attr($section['id']); ?>" class="scroll-mt-24 py-12 sm:py-14">
                <div class="flex flex-col gap-6">
                  <div class="flex flex-col gap-3">
                    <h2 class="font-['Playfair Display'] text-3xl font-semibold text-zinc-950 sm:text-4xl">
                      <?php echo esc_html($section['title']); ?>
                    </h2>
                    <?php if (! empty($section['paragraphs'])) : ?>
                      <?php foreach ($section['paragraphs'] as $paragraph) : ?>
                        <p class="text-base leading-7 text-zinc-600 sm:text-lg">
                          <?php echo esc_html($paragraph); ?>
                        </p>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </div>

                  <?php if (! empty($section['lists'])) : ?>
                    <?php foreach ($section['lists'] as $list) : ?>
                      <div class="flex flex-col gap-4">
                        <?php if (! empty($list['intro'])) : ?>
                          <p class="text-base leading-7 text-zinc-600 sm:text-lg">
                            <?php echo esc_html($list['intro']); ?>
                          </p>
                        <?php endif; ?>
                        <?php if (! empty($list['items'])) : ?>
                          <ul class="list-disc space-y-3 pl-5 text-base leading-7 text-zinc-600 sm:text-lg">
                            <?php foreach ($list['items'] as $item) : ?>
                              <li><?php echo esc_html($item); ?></li>
                            <?php endforeach; ?>
                          </ul>
                        <?php endif; ?>
                      </div>
                    <?php endforeach; ?>
                  <?php endif; ?>

                  <?php if (! empty($section['additional_paragraphs'])) : ?>
                    <?php foreach ($section['additional_paragraphs'] as $paragraph) : ?>
                      <p class="text-base leading-7 text-zinc-600 sm:text-lg">
                        <?php echo esc_html($paragraph); ?>
                      </p>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="py-16 sm:py-20 lg:py-24">
        <div class="mx-auto flex w-full max-w-4xl flex-col items-center gap-6 px-4 sm:px-6 lg:px-8">
          <h2 class="font-['Playfair Display'] text-3xl font-semibold text-zinc-950 sm:text-4xl">
            <?php esc_html_e('Need something else?', 'webmakerr'); ?>
          </h2>
          <p class="max-w-2xl text-center text-base leading-7 text-zinc-600 sm:text-lg">
            <?php esc_html_e('Return to the Webmakerr homepage to explore resources, manage your subscriptions, or connect with our team.', 'webmakerr'); ?>
          </p>
          <a
            class="inline-flex items-center justify-center rounded-[5px] bg-black px-6 py-3 text-sm font-semibold text-white transition hover:bg-black/90 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2"
            href="<?php echo esc_url(home_url('/')); ?>"
          >
            <?php esc_html_e('Back to Homepage', 'webmakerr'); ?>
          </a>
        </div>
      </section>
    </article>
  <?php endwhile; ?>
</main>

<?php
get_footer();
?>
