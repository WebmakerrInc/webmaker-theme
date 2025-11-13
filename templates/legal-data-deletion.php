<?php
/**
 * Template Name: User Data Deletion Policy
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
            'id' => 'introduction-scope',
            'title' => __('Introduction & Scope', 'webmakerr'),
            'paragraphs' => array(
                __('This User Data Deletion Policy explains how Webmakerr responds to requests to erase personal data in alignment with the European Union General Data Protection Regulation (GDPR) and comparable laws. It applies to all individuals located in the European Economic Area, the United Kingdom, Switzerland, and any other jurisdiction that provides a right to erasure.', 'webmakerr'),
                __('The policy covers personal data processed by Webmakerr when you interact with our websites, products, customer support, marketing communications, or partner programs. It supplements our Privacy Policy and prevails in the event of a conflict relating to deletion rights.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'right-to-erasure',
            'title' => __('Your Right to Erasure (GDPR Article 17)', 'webmakerr'),
            'paragraphs' => array(
                __('Under Article 17 of the GDPR, you have the right to request the deletion of personal data that Webmakerr processes about you when certain grounds apply. These include situations where the data is no longer necessary for the purposes for which it was collected, you withdraw consent on which the processing is based, or you successfully object to processing based on legitimate interests.', 'webmakerr'),
                __('We will carefully review each request and balance your rights with our legal obligations, contractual requirements, and legitimate interests. If a request is denied, we will communicate the legal basis for refusal and provide information on how you can challenge the decision or escalate the concern to a supervisory authority.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'data-qualifies',
            'title' => __('What Data Qualifies for Deletion', 'webmakerr'),
            'paragraphs' => array(
                __('Personal data eligible for deletion may include identification and contact details, account profile information, usage data tied to your account, support conversations, marketing preferences, and project assets that can reasonably be linked to you as an individual.', 'webmakerr'),
            ),
            'lists' => array(
                array(
                    'intro' => __('When we confirm that the right to erasure applies, we will delete or irreversibly anonymize:', 'webmakerr'),
                    'items' => array(
                        __('Profile data stored in Webmakerr administrative dashboards, billing tools, and customer relationship systems.', 'webmakerr'),
                        __('Content that you uploaded to our services if it is solely associated with your account and not otherwise required for service integrity.', 'webmakerr'),
                        __('Marketing and communication records held in our email, messaging, or analytics platforms that relate specifically to you.', 'webmakerr'),
                        __('Support tickets, chat logs, or call recordings that are no longer needed to resolve active issues or meet legal obligations.', 'webmakerr'),
                    ),
                ),
            ),
        ),
        array(
            'id' => 'data-cannot-delete',
            'title' => __('What Data Cannot Be Deleted (Legal Exceptions)', 'webmakerr'),
            'paragraphs' => array(
                __('Certain categories of personal data cannot be deleted immediately when legal or contractual obligations require retention. Webmakerr will limit use of such data to the necessary purpose and securely archive it for the required retention period.', 'webmakerr'),
            ),
            'lists' => array(
                array(
                    'intro' => __('Examples of lawful exceptions include:', 'webmakerr'),
                    'items' => array(
                        __('Transaction and invoicing records we must retain for tax, audit, anti-fraud, or accounting obligations.', 'webmakerr'),
                        __('Information needed to establish, exercise, or defend legal claims, including litigation holds or regulatory investigations.', 'webmakerr'),
                        __('Security logs and access records required to detect, prevent, or investigate malicious activity on our platform.', 'webmakerr'),
                        __('Data subject to statutory retention under financial services, telecommunications, or other sector-specific regulations.', 'webmakerr'),
                    ),
                ),
            ),
            'additional_paragraphs' => array(
                __('When an exception applies, we will explain the specific reason to you and restrict access to retained data until the retention requirement expires.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'request-process',
            'title' => __('How to Request Data Deletion', 'webmakerr'),
            'paragraphs' => array(
                __('You may submit a deletion request using our dedicated privacy request form, by emailing privacy@webmakerr.com, or by writing to the postal address listed in the Contact Information section below. Please include “GDPR Data Deletion Request” in the subject line or first sentence so our privacy team can prioritize your inquiry.', 'webmakerr'),
                __('If you are submitting a request on behalf of another individual, such as an employee or client, you must provide documented proof of authorization so we can validate the scope of your request.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'verification-requirements',
            'title' => __('Verification Requirements', 'webmakerr'),
            'paragraphs' => array(
                __('To protect personal data from unauthorized deletion, Webmakerr must verify the identity of the requester before processing an erasure request. We may ask you to confirm your account credentials, respond to a verification email, or provide government-issued identification. We will use this information solely to authenticate your request and will delete the verification data once the process is complete.', 'webmakerr'),
                __('If we cannot verify your identity, we will explain what additional information is needed or decline the request in order to safeguard account security.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'deletion-timeframe',
            'title' => __('Data Deletion Timeframe (Maximum 30 Days)', 'webmakerr'),
            'paragraphs' => array(
                __('Upon receiving a verified request, Webmakerr will complete the deletion or provide a substantive response within one month (30 days), as required by the GDPR. Complex or multiple requests may extend this period by up to two additional months; if that happens, we will notify you within the initial 30-day period and explain the reason for the delay.', 'webmakerr'),
                __('We will keep you informed of progress, especially if data resides in backup systems where secure erasure requires additional processing time.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'processing-requests',
            'title' => __('How We Process Deletion Requests', 'webmakerr'),
            'paragraphs' => array(
                __('Our privacy, security, and engineering teams coordinate to identify all systems that store your personal data. We will remove or anonymize data from production environments, caches, analytics platforms, and collaboration tools that Webmakerr controls.', 'webmakerr'),
            ),
            'lists' => array(
                array(
                    'intro' => __('During processing we will:', 'webmakerr'),
                    'items' => array(
                        __('Log the request in our compliance register and assign a reference number for auditing.', 'webmakerr'),
                        __('Map relevant databases, applications, and integrated services that contain your personal data.', 'webmakerr'),
                        __('Coordinate with our security team to ensure backups and disaster recovery copies are overwritten or rendered inaccessible on their normal rotation schedule.', 'webmakerr'),
                        __('Send you a confirmation notice once data has been deleted or anonymized, including details of any data retained under a legal exception.', 'webmakerr'),
                    ),
                ),
            ),
        ),
        array(
            'id' => 'third-party-deletion',
            'title' => __('Third-Party Data Deletion', 'webmakerr'),
            'paragraphs' => array(
                __('When Webmakerr shares personal data with subprocessors or partners to deliver services, we ensure that contractual agreements require them to assist with GDPR-compliant deletion. After your request is validated, we will notify relevant third parties and instruct them to delete or anonymize your personal data, unless applicable law requires continued retention.', 'webmakerr'),
                __('We maintain records of these onward deletion requests and will share a summary of the subprocessors contacted upon request.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'account-closure',
            'title' => __('Account Closure', 'webmakerr'),
            'paragraphs' => array(
                __('When a deletion request is fulfilled, associated Webmakerr accounts may be closed to prevent further processing of your personal data. Account closure means that you will lose access to saved projects, integrations, analytics history, and any services that rely on personal data we have erased.', 'webmakerr'),
                __('If you wish to continue using Webmakerr services after a deletion request, you may need to create a new account with fresh credentials, subject to any contractual agreements in place.', 'webmakerr'),
            ),
        ),
        array(
            'id' => 'contact-information',
            'title' => __('Contact Information for EU Data Requests', 'webmakerr'),
            'paragraphs' => array(
                __('You can reach our privacy team or Data Protection Officer using the contact details below. Please specify your country of residence and include any reference numbers provided in prior correspondence to help us respond efficiently.', 'webmakerr'),
            ),
            'lists' => array(
                array(
                    'items' => array(
                        __('Email: privacy@webmakerr.com', 'webmakerr'),
                        __('Postal Address: Webmakerr Privacy Office, 1200 Market Street, Suite 210, San Francisco, CA 94105, USA', 'webmakerr'),
                        __('EU Representative: Webmakerr EU Privacy Desk, 5 Rue de la Paix, 75002 Paris, France', 'webmakerr'),
                        __('Supervisory Authority Guidance: You may lodge a complaint with your local data protection authority if you believe your rights have been infringed.', 'webmakerr'),
                    ),
                ),
            ),
        ),
    );
    ?>
    <article <?php post_class("flex flex-col font-['Roboto'] text-zinc-600"); ?>>
      <section class="bg-white py-20 sm:py-24">
        <div class="mx-auto w-full max-w-6xl px-4 sm:px-6 lg:px-8">
          <header class="flex flex-col gap-6 text-center">
            <h1 class="font-['Playfair Display'] text-4xl font-semibold text-zinc-950 sm:text-5xl lg:text-6xl">
              <?php esc_html_e('User Data Deletion Policy', 'webmakerr'); ?>
            </h1>
            <p class="mx-auto max-w-3xl text-base leading-7 text-zinc-600 sm:text-lg">
              <?php esc_html_e('How you can request deletion of your personal data under GDPR.', 'webmakerr'); ?>
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
