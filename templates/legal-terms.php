<?php
/**
 * Template Name: Terms & Conditions
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<main id="primary" class="bg-white">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('flex flex-col'); ?>>
      <section class="bg-white py-16 sm:py-20 lg:py-24">
        <div class="mx-auto w-full max-w-6xl px-4 sm:px-6 lg:px-8">
          <div class="max-w-3xl">
            <span class="text-xs font-semibold uppercase tracking-[0.3em] text-zinc-500" style="font-family: 'Roboto', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;">
              <?php esc_html_e('Webmakerr Legal', 'webmakerr'); ?>
            </span>
            <h1 class="mt-6 text-4xl font-semibold text-zinc-950 sm:text-5xl" style="font-family: 'Playfair Display', ui-serif, Georgia, 'Times New Roman', Times, serif;">
              <?php esc_html_e('Terms & Conditions', 'webmakerr'); ?>
            </h1>
            <p class="mt-4 text-base leading-7 text-zinc-600 sm:text-lg" style="font-family: 'Roboto', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;">
              <?php esc_html_e('Please read these terms carefully before using our website or services.', 'webmakerr'); ?>
            </p>
          </div>
        </div>
      </section>

      <section class="py-8">
        <div class="mx-auto w-full max-w-6xl px-4 sm:px-6 lg:px-8">
          <nav aria-label="<?php esc_attr_e('Table of contents', 'webmakerr'); ?>" class="rounded-[6px] border border-zinc-200 bg-white p-8 shadow-sm">
            <h2 class="text-2xl font-semibold text-zinc-950" style="font-family: 'Playfair Display', ui-serif, Georgia, 'Times New Roman', Times, serif;">
              <?php esc_html_e('Table of Contents', 'webmakerr'); ?>
            </h2>
            <ul class="mt-6 grid grid-cols-1 gap-3 sm:grid-cols-2" style="font-family: 'Roboto', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;">
              <?php
              $toc_items = array(
                  'introduction' => __('Introduction', 'webmakerr'),
                  'acceptance-of-terms' => __('Acceptance of Terms', 'webmakerr'),
                  'changes-to-terms' => __('Changes to Terms', 'webmakerr'),
                  'use-of-our-services' => __('Use of Our Services', 'webmakerr'),
                  'user-accounts' => __('User Accounts', 'webmakerr'),
                  'payments-and-billing' => __('Payments & Billing', 'webmakerr'),
                  'intellectual-property-rights' => __('Intellectual Property Rights', 'webmakerr'),
                  'prohibited-activities' => __('Prohibited Activities', 'webmakerr'),
                  'termination' => __('Termination', 'webmakerr'),
                  'limitation-of-liability' => __('Limitation of Liability', 'webmakerr'),
                  'disclaimers' => __('Disclaimers', 'webmakerr'),
                  'governing-law' => __('Governing Law', 'webmakerr'),
                  'contact-information' => __('Contact Information', 'webmakerr'),
              );
              foreach ($toc_items as $slug => $label) :
                  ?>
                  <li>
                    <a class="inline-flex items-center text-sm font-medium text-[#01C468] transition hover:text-[#018f4d]" href="#<?php echo esc_attr($slug); ?>">
                      <svg class="mr-2 h-4 w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M3 8H13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9 4L13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                      <?php echo esc_html($label); ?>
                    </a>
                  </li>
                  <?php
              endforeach;
              ?>
            </ul>
          </nav>
        </div>
      </section>

      <?php
      $sections = array(
          'introduction' => array(
              'title' => __('Introduction', 'webmakerr'),
              'paragraphs' => array(
                  __('Welcome to Webmakerr. These Terms & Conditions (the “Terms”) govern your access to and use of our website, applications, and services (collectively, the “Services”). By engaging with Webmakerr, you agree to abide by these Terms and any policies referenced within them.', 'webmakerr'),
                  __('Our goal is to provide a transparent, reliable environment for creative collaboration. Please review these Terms carefully to understand your rights and obligations before using the Services or submitting any information to us.', 'webmakerr'),
              ),
          ),
          'acceptance-of-terms' => array(
              'title' => __('Acceptance of Terms', 'webmakerr'),
              'paragraphs' => array(
                  __('By accessing or using the Services, creating an account, or clicking to accept these Terms where presented, you acknowledge that you have read, understood, and agreed to be bound by them. If you do not agree, you must not access or use the Services.', 'webmakerr'),
                  __('You represent that you have the authority to enter into these Terms on behalf of yourself or the entity you represent. If you are using the Services on behalf of an organization, you agree that you are authorized to bind that organization and that the organization accepts these Terms.', 'webmakerr'),
              ),
          ),
          'changes-to-terms' => array(
              'title' => __('Changes to Terms', 'webmakerr'),
              'paragraphs' => array(
                  __('We may update these Terms from time to time to reflect changes in our Services, legal obligations, or business practices. When we make material changes, we will notify you by updating the “Last updated” date, providing a prominent notice on our site, or sending you a direct communication.', 'webmakerr'),
                  __('Your continued use of the Services after any changes become effective constitutes your acceptance of the revised Terms. If you do not agree to the modifications, you must stop using the Services and, if applicable, deactivate your account.', 'webmakerr'),
              ),
          ),
          'use-of-our-services' => array(
              'title' => __('Use of Our Services', 'webmakerr'),
              'paragraphs' => array(
                  __('You agree to use the Services only for lawful purposes and in accordance with these Terms, applicable laws, and any additional policies we provide. You must comply with all usage guidelines, documentation, and instructions that accompany our Services.', 'webmakerr'),
                  __('Webmakerr reserves the right to monitor your use of the Services to ensure compliance and to maintain the security and integrity of our platform. We may suspend or limit access where necessary to prevent fraud, abuse, or violations of these Terms.', 'webmakerr'),
              ),
          ),
          'user-accounts' => array(
              'title' => __('User Accounts', 'webmakerr'),
              'paragraphs' => array(
                  __('To access certain features, you may need to create an account. You agree to provide accurate, current, and complete information and to keep it updated. You are responsible for maintaining the confidentiality of your login credentials and for all activities that occur under your account.', 'webmakerr'),
                  __('Notify us immediately if you suspect unauthorized access or a security breach related to your account. Webmakerr is not liable for any loss or damage arising from your failure to comply with these obligations.', 'webmakerr'),
              ),
          ),
          'payments-and-billing' => array(
              'title' => __('Payments & Billing', 'webmakerr'),
              'paragraphs' => array(
                  __('Certain Services may require payment. By submitting payment information, you authorize Webmakerr and our payment processors to charge the applicable fees to the payment method you provide. All fees are stated in the currency specified at checkout unless otherwise indicated.', 'webmakerr'),
                  __('You are responsible for all taxes, levies, and duties imposed by taxing authorities. Unless otherwise stated, fees are non-refundable. If a payment is not successfully processed, we may suspend or terminate your access to the paid Services until payment is received.', 'webmakerr'),
              ),
          ),
          'intellectual-property-rights' => array(
              'title' => __('Intellectual Property Rights', 'webmakerr'),
              'paragraphs' => array(
                  __('All content, trademarks, logos, graphics, and intellectual property displayed through the Services are owned by or licensed to Webmakerr and are protected by applicable intellectual property laws. Except as expressly permitted, you may not copy, modify, distribute, or create derivative works from any part of the Services.', 'webmakerr'),
                  __('You retain ownership of any content you submit through the Services. By submitting content, you grant Webmakerr a worldwide, non-exclusive, royalty-free license to use, reproduce, modify, and display the content solely for the purposes of providing and improving the Services.', 'webmakerr'),
              ),
          ),
          'prohibited-activities' => array(
              'title' => __('Prohibited Activities', 'webmakerr'),
              'paragraphs' => array(
                  __('You agree not to engage in any activity that disrupts or interferes with the proper functioning of the Services, including introducing malware, attempting to gain unauthorized access, or circumventing security features.', 'webmakerr'),
                  __('You must not use the Services to transmit unlawful, infringing, defamatory, or otherwise harmful content. Webmakerr reserves the right to remove any content or suspend access if we determine that your conduct violates these Terms or applicable laws.', 'webmakerr'),
              ),
          ),
          'termination' => array(
              'title' => __('Termination', 'webmakerr'),
              'paragraphs' => array(
                  __('We may suspend or terminate your access to the Services at any time for any reason, including violation of these Terms, legal requirements, or suspected fraudulent activity. We will make reasonable efforts to notify you of termination when appropriate.', 'webmakerr'),
                  __('Upon termination, your right to use the Services will immediately cease. Sections of these Terms that by their nature should survive termination will remain in effect, including ownership provisions, warranty disclaimers, indemnity, and limitations of liability.', 'webmakerr'),
              ),
          ),
          'limitation-of-liability' => array(
              'title' => __('Limitation of Liability', 'webmakerr'),
              'paragraphs' => array(
                  __('To the fullest extent permitted by law, Webmakerr, its affiliates, directors, employees, and agents will not be liable for any indirect, incidental, special, consequential, or punitive damages, or for any loss of profits, revenues, data, or goodwill arising from or related to your use of the Services.', 'webmakerr'),
                  __('Our total liability for any claim relating to the Services is limited to the amount paid by you to Webmakerr for the specific Service in the twelve (12) months preceding the event giving rise to the claim. Some jurisdictions do not allow certain limitations, so these limitations may not apply to you.', 'webmakerr'),
              ),
          ),
          'disclaimers' => array(
              'title' => __('Disclaimers', 'webmakerr'),
              'paragraphs' => array(
                  __('The Services are provided on an “as is” and “as available” basis without warranties of any kind, whether express, implied, or statutory. Webmakerr disclaims all implied warranties, including merchantability, fitness for a particular purpose, title, and non-infringement.', 'webmakerr'),
                  __('We do not warrant that the Services will be uninterrupted, error-free, secure, or free from harmful components. We do not guarantee any specific results from the use of the Services, and you use the Services at your own risk.', 'webmakerr'),
              ),
          ),
          'governing-law' => array(
              'title' => __('Governing Law', 'webmakerr'),
              'paragraphs' => array(
                  __('These Terms are governed by and construed in accordance with the laws of the jurisdiction in which Webmakerr is incorporated, without regard to conflict-of-law principles. You agree to submit to the exclusive jurisdiction of the courts located in that jurisdiction to resolve any dispute arising out of or relating to the Services or these Terms.', 'webmakerr'),
                  __('If any provision of these Terms is found to be invalid or unenforceable, the remaining provisions will remain in full force and effect. Our failure to enforce any right or provision will not be deemed a waiver of such right or provision.', 'webmakerr'),
              ),
          ),
          'contact-information' => array(
              'title' => __('Contact Information', 'webmakerr'),
              'paragraphs' => array(
                  __('If you have questions about these Terms or need to reach us regarding the Services, please contact Webmakerr Legal at legal@webmakerr.com or by mail at the address listed on our website.', 'webmakerr'),
                  __('We strive to respond to all inquiries promptly and will work with you to resolve any concerns related to these Terms or your use of the Services.', 'webmakerr'),
              ),
          ),
      );
      ?>

      <section class="bg-white py-8 pb-20 sm:py-12 lg:py-16">
        <div class="mx-auto w-full max-w-6xl px-4 sm:px-6 lg:px-8">
          <?php foreach ($sections as $slug => $section) : ?>
            <div id="<?php echo esc_attr($slug); ?>" class="scroll-mt-24">
              <header class="flex flex-col gap-3">
                <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl" style="font-family: 'Playfair Display', ui-serif, Georgia, 'Times New Roman', Times, serif;">
                  <?php echo esc_html($section['title']); ?>
                </h2>
              </header>
              <div class="mt-4 flex flex-col gap-4 text-base leading-7 text-zinc-600 sm:text-lg" style="font-family: 'Roboto', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;">
                <?php foreach ($section['paragraphs'] as $paragraph) : ?>
                  <p><?php echo esc_html($paragraph); ?></p>
                <?php endforeach; ?>
              </div>
            </div>
            <?php if ($slug !== array_key_last($sections)) : ?>
              <hr class="my-12 border-t border-zinc-200" />
            <?php endif; ?>
          <?php endforeach; ?>

          <div class="mt-16 flex flex-wrap items-center justify-between gap-6 rounded-[6px] border border-zinc-200 bg-white p-8 shadow-sm">
            <div class="max-w-2xl">
              <h3 class="text-2xl font-semibold text-zinc-950 sm:text-3xl" style="font-family: 'Playfair Display', ui-serif, Georgia, 'Times New Roman', Times, serif;">
                <?php esc_html_e('Need to review more policies?', 'webmakerr'); ?>
              </h3>
              <p class="mt-3 text-base leading-7 text-zinc-600" style="font-family: 'Roboto', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;">
                <?php esc_html_e('Return to the homepage to explore additional resources, services, and support from the Webmakerr team.', 'webmakerr'); ?>
              </p>
            </div>
            <a class="inline-flex items-center justify-center rounded-[5px] bg-black px-6 py-3 text-sm font-semibold uppercase tracking-wide text-white transition hover:bg-zinc-900 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2" href="<?php echo esc_url(home_url('/')); ?>" style="font-family: 'Roboto', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;">
              <?php esc_html_e('Back to Homepage', 'webmakerr'); ?>
            </a>
          </div>
        </div>
      </section>
    </article>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
