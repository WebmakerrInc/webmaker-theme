<?php
/**
 * Template for the front page.
 *
 * @package Webmakerr
 */

if (! defined('ABSPATH')) {
    exit;
}

$popup_settings = webmakerr_get_template_popup_settings(__FILE__);
$popup_enabled  = (bool) ($popup_settings['enabled'] ?? false);

if (! function_exists('webmakerr_frontpage_icon')) {
    /**
     * Render service icons for the homepage.
     */
    function webmakerr_frontpage_icon(string $icon, string $class = 'h-12 w-12 text-primary')
    {
        $icons = array(
            'website' => '<path d="M4 5.5A2.5 2.5 0 0 1 6.5 3h11A2.5 2.5 0 0 1 20 5.5V18.5A2.5 2.5 0 0 1 17.5 21h-11A2.5 2.5 0 0 1 4 18.5zm2.5-.5A.5.5 0 0 0 6 5.5v2.75h12V5.5a.5.5 0 0 0-.5-.5zM6 10.25v8.25a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-8.25z"></path><path d="M9 14h6"></path><path d="M9 17h3.5"></path>',
            'funnel'  => '<path d="M5 4h14l-5.5 7.5v5.25a1.75 1.75 0 0 1-2.48 1.58l-1.54-.74A1.75 1.75 0 0 1 8.5 15.96v-4.46z"></path>',
            'plugin'  => '<path d="M13 3v3.5h2A2.5 2.5 0 0 1 17.5 9v1.5H21v3h-3.5V15A2.5 2.5 0 0 1 15 17.5h-2V21h-3v-3.5H8A2.5 2.5 0 0 1 5.5 15v-1.5H2v-3h3.5V9A2.5 2.5 0 0 1 8 6.5h2V3z"></path>',
            'landing' => '<rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M3 11h18"></path><path d="M9 8h6"></path><path d="M9 16h4"></path>',
            'shield'  => '<path d="M12 3.25 5 6v6c0 4.28 2.86 7.42 7 8.75 4.14-1.33 7-4.47 7-8.75V6z"></path><path d="M9.5 12.25 11.25 14l3.25-3.5"></path>',
            'growth'  => '<path d="M4 17h16"></path><path d="M7 13.5 11.5 9l2.5 2.5L17 8"></path><path d="M18 8h-3V5"></path><path d="M6 17V11"></path><path d="M10 17v-5"></path><path d="M14 17v-3"></path>',
            'handshake' => '<path d="m12.5 9.5 2-2.5a2.5 2.5 0 0 1 3.5-.38l1.88 1.51a2.5 2.5 0 0 1 .37 3.52l-3.25 3.9a2.5 2.5 0 0 1-3.56.27l-.82-.74"></path><path d="M11.5 14.5 9 17a2.5 2.5 0 0 1-3.56-.27L2.13 13a2.5 2.5 0 0 1 .37-3.52l2.13-1.72a2.5 2.5 0 0 1 3.5.29l2.37 2.7"></path><path d="M16 12.5H8.5"></path>',
            'quote'   => '<path d="M10.5 7A3.5 3.5 0 0 1 7 10.5V13a2 2 0 0 1-2 2H4v-2a5 5 0 0 1 5-5z"></path><path d="M20.5 7A3.5 3.5 0 0 1 17 10.5V13a2 2 0 0 1-2 2h-1v-2a5 5 0 0 1 5-5z"></path>',
        );

        if (! isset($icons[$icon])) {
            return '';
        }

        return sprintf(
            '<svg class="%1$s" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">%2$s</svg>',
            esc_attr($class),
            $icons[$icon]
        );
    }
}

if (! function_exists('webmakerr_frontpage_logo')) {
    /**
     * Render trust badge logos.
     */
    function webmakerr_frontpage_logo(string $logo, string $class = 'h-12 w-auto')
    {
        $logos = array(
            'growthlab'  => '
                <defs>
                  <linearGradient id="growthlabGradient" x1="12" y1="4" x2="108" y2="36" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#1D4ED8" />
                    <stop offset="1" stop-color="#22D3EE" />
                  </linearGradient>
                  <linearGradient id="growthlabAccent" x1="24" y1="10" x2="96" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#E0F2FE" />
                    <stop offset="1" stop-color="#C7D2FE" />
                  </linearGradient>
                </defs>
                <rect x="2" y="4" width="116" height="32" rx="12" fill="#F8FAFC" />
                <path d="M24 30C26 20.5 38.5 14 52 14C65.5 14 78 20.5 80 30" fill="url(#growthlabAccent)" />
                <path d="M36 26C38 18.5 45 14 52 14C59 14 66 18.5 68 26" fill="#FFFFFF" />
                <path d="M24 30C26.3 20 36 12 52 12C68 12 78.5 20 80 30" stroke="url(#growthlabGradient)" stroke-width="4" stroke-linecap="round" />
                <circle cx="52" cy="16" r="6" fill="#0F172A" />
                <path d="M48 18.5L52 24L56 18.5" stroke="#38BDF8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            ',
            'launchpad'  => '
                <defs>
                  <linearGradient id="launchpadTrail" x1="12" y1="8" x2="108" y2="32" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#A855F7" />
                    <stop offset="1" stop-color="#6366F1" />
                  </linearGradient>
                  <linearGradient id="launchpadGlow" x1="40" y1="6" x2="80" y2="34" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#F5F3FF" />
                    <stop offset="1" stop-color="#E0E7FF" />
                  </linearGradient>
                </defs>
                <rect x="2" y="4" width="116" height="32" rx="12" fill="#F5F3FF" />
                <path d="M30 28C34 20 46 14 60 14C74 14 86 20 90 28" stroke="url(#launchpadTrail)" stroke-width="4" stroke-linecap="round" />
                <path d="M60 10C65.5 16 69 23 69 29C69 30.2 68.9 31.3 68.8 32H51.2C51.1 31.3 51 30.2 51 29C51 23 54.5 16 60 10Z" fill="#1E1B4B" />
                <path d="M60 12C56.7 16 54 22 54 27.5C54 29.6 54.2 31.5 54.5 33H65.5C65.8 31.5 66 29.6 66 27.5C66 22 63.3 16 60 12Z" fill="url(#launchpadGlow)" />
                <circle cx="60" cy="18" r="4" fill="#312E81" />
                <path d="M44 30L60 20L76 30" stroke="#C4B5FD" stroke-width="2" stroke-linecap="round" />
                <circle cx="44" cy="30" r="3" fill="#C4B5FD" />
                <circle cx="76" cy="30" r="3" fill="#C4B5FD" />
            ',
            'convertix'  => '
                <defs>
                  <linearGradient id="convertixGradient" x1="12" y1="8" x2="108" y2="32" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#0EA5E9" />
                    <stop offset="1" stop-color="#2563EB" />
                  </linearGradient>
                </defs>
                <rect x="2" y="4" width="116" height="32" rx="12" fill="#F0F9FF" />
                <path d="M26 11L52 28" stroke="#0284C7" stroke-width="4" stroke-linecap="round" />
                <path d="M94 11L68 28" stroke="#2563EB" stroke-width="4" stroke-linecap="round" />
                <circle cx="40" cy="19" r="9" fill="#38BDF8" opacity="0.2" />
                <circle cx="80" cy="19" r="9" fill="#2563EB" opacity="0.2" />
                <path d="M40 12H80" stroke="url(#convertixGradient)" stroke-width="4" stroke-linecap="round" />
                <path d="M48 32H72" stroke="#0F172A" stroke-width="3" stroke-linecap="round" opacity="0.4" />
                <circle cx="40" cy="19" r="4" fill="#0EA5E9" />
                <circle cx="80" cy="19" r="4" fill="#2563EB" />
            ',
            'scale'      => '
                <defs>
                  <linearGradient id="scaleGradient" x1="24" y1="8" x2="92" y2="32" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#16A34A" />
                    <stop offset="1" stop-color="#22C55E" />
                  </linearGradient>
                </defs>
                <rect x="2" y="4" width="116" height="32" rx="12" fill="#ECFDF5" />
                <rect x="28" y="14" width="8" height="14" rx="3" fill="#BBF7D0" />
                <rect x="46" y="10" width="10" height="18" rx="3" fill="#86EFAC" />
                <rect x="66" y="8" width="12" height="20" rx="3" fill="#4ADE80" />
                <rect x="88" y="6" width="12" height="22" rx="3" fill="#22C55E" />
                <path d="M26 30H94" stroke="#A7F3D0" stroke-width="4" stroke-linecap="round" />
                <path d="M26 24C40 16 62 12 94 14" stroke="url(#scaleGradient)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                <circle cx="88" cy="14" r="4" fill="#15803D" />
            ',
            'brightwave' => '
                <defs>
                  <linearGradient id="brightwaveGradient" x1="16" y1="8" x2="104" y2="32" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#38BDF8" />
                    <stop offset="1" stop-color="#6366F1" />
                  </linearGradient>
                </defs>
                <rect x="2" y="4" width="116" height="32" rx="12" fill="#EEF2FF" />
                <path d="M20 26C32 18 44 14 60 14C76 14 90 18 100 26" stroke="url(#brightwaveGradient)" stroke-width="4" stroke-linecap="round" />
                <path d="M20 22C32 16 44 12 60 12C76 12 90 16 100 22" stroke="#A5B4FC" stroke-width="2" stroke-linecap="round" opacity="0.6" />
                <circle cx="36" cy="20" r="3" fill="#38BDF8" />
                <circle cx="60" cy="18" r="4" fill="#2563EB" />
                <circle cx="84" cy="20" r="3" fill="#6366F1" />
                <path d="M26 30H94" stroke="#C7D2FE" stroke-width="3" stroke-linecap="round" />
            ',
        );

        if (! isset($logos[$logo])) {
            return '';
        }

        return sprintf(
            '<svg class="%1$s" viewBox="0 0 120 40" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true">%2$s</svg>',
            esc_attr($class),
            $logos[$logo]
        );
    }
}

get_header();

$strategy_call_url  = home_url('/contact');
$portfolio_url      = home_url('/portfolio');
$case_study_url     = home_url('/case-study');
$toolkit_url        = home_url('/conversion-toolkit');
$lead_endpoint      = esc_url_raw(rest_url('webmakerr/v1/crm-lead'));
$lead_nonce         = wp_create_nonce('wp_rest');
$offer_download_url = home_url('/resources/conversion-launch-checklist/');
$frontpage_roi_matrix = array(
    '1-10'    => array(
        'pipeline'     => __('+18% qualified pipeline lift', 'webmakerr'),
        'pipeline_note'=> __('Modeled on agile teams spinning up product launches.', 'webmakerr'),
        'hours'        => __('35 hours saved', 'webmakerr'),
        'hours_note'   => __('Automation handles nurture, reporting, and QA workloads.', 'webmakerr'),
        'payback'      => __('2 months', 'webmakerr'),
        'payback_note' => __('Break-even hits after your first two launches.', 'webmakerr'),
        'summary'      => __('Ideal for founders validating product-market fit.', 'webmakerr'),
    ),
    '11-50'   => array(
        'pipeline'     => __('+26% qualified pipeline lift', 'webmakerr'),
        'pipeline_note'=> __('Benchmarked with GTM teams unifying demand and lifecycle motions.', 'webmakerr'),
        'hours'        => __('72 hours saved', 'webmakerr'),
        'hours_note'   => __('Consolidated launch requests remove cross-team busywork.', 'webmakerr'),
        'payback'      => __('90 days', 'webmakerr'),
        'payback_note' => __('Typically realized before quarter-end campaigns.', 'webmakerr'),
        'summary'      => __('Marketing squads unlock cross-channel alignment faster.', 'webmakerr'),
    ),
    '51-200'  => array(
        'pipeline'     => __('+34% qualified pipeline lift', 'webmakerr'),
        'pipeline_note'=> __('Built from revenue orgs migrating complex funnels onto Webmakerr.', 'webmakerr'),
        'hours'        => __('140 hours saved', 'webmakerr'),
        'hours_note'   => __('Ops-heavy teams reclaim cycles for experimentation and personalization.', 'webmakerr'),
        'payback'      => __('4 months', 'webmakerr'),
        'payback_note' => __('ROI lands after the first integrated campaign cohort.', 'webmakerr'),
        'summary'      => __('Growth leaders gain headroom for bigger campaign bets.', 'webmakerr'),
    ),
    '201-500' => array(
        'pipeline'     => __('+41% qualified pipeline lift', 'webmakerr'),
        'pipeline_note'=> __('Sourced from global teams orchestrating concurrent launches.', 'webmakerr'),
        'hours'        => __('220 hours saved', 'webmakerr'),
        'hours_note'   => __('Automations centralize localization, QA, and approvals.', 'webmakerr'),
        'payback'      => __('5 months', 'webmakerr'),
        'payback_note' => __('Efficiency gains compound across regions each quarter.', 'webmakerr'),
        'summary'      => __('Global orgs keep launches synchronized without extra headcount.', 'webmakerr'),
    ),
    '500+'    => array(
        'pipeline'     => __('+47% qualified pipeline lift', 'webmakerr'),
        'pipeline_note'=> __('Modeled on enterprise operators modernizing legacy stacks.', 'webmakerr'),
        'hours'        => __('310 hours saved', 'webmakerr'),
        'hours_note'   => __('Governance workflows and analytics handoffs run automatically.', 'webmakerr'),
        'payback'      => __('6 months', 'webmakerr'),
        'payback_note' => __('Savings scale with every business unit onboarded.', 'webmakerr'),
        'summary'      => __('Complex organizations stabilize compliance and accelerate go-lives.', 'webmakerr'),
    ),
);

$strategy_call_link = webmakerr_get_popup_link_attributes($strategy_call_url, $popup_enabled);
$toolkit_link       = webmakerr_get_popup_link_attributes($toolkit_url, $popup_enabled);
?>

<main id="primary" class="flex flex-col bg-white">
  <?php while (have_posts()) : the_post(); ?>
    <section class="relative overflow-hidden border-b border-zinc-200 bg-gradient-to-b from-white via-white to-light">
      <div class="absolute inset-x-0 top-0 h-72 bg-gradient-to-b from-primary/10 via-white/40 to-transparent blur-3xl"></div>
      <div class="relative z-10 mx-auto max-w-screen-xl px-6 pt-20 pb-24 sm:pb-28 lg:px-8 lg:pt-24 lg:pb-32">
        <div class="mx-auto flex max-w-3xl flex-col items-center gap-6 text-center">
          <span class="inline-flex w-fit items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.26em] text-primary">
            <?php esc_html_e('Revenue-Focused Web Partner', 'webmakerr'); ?>
          </span>
          <h1 class="mt-2 text-4xl font-medium tracking-tight [text-wrap:balance] text-zinc-950 sm:text-5xl lg:text-6xl">
            <?php esc_html_e('We Design, Redesign, and Build Funnels That Scale Revenue.', 'webmakerr'); ?>
          </h1>
          <p class="max-w-2xl text-base leading-7 text-zinc-600 sm:text-lg">
            <?php esc_html_e('Your growth deserves more than a brochure site—we craft conversion-led website redesigns, launch bespoke funnels, and keep your digital sales machine running 24/7.', 'webmakerr'); ?>
          </p>
          <div class="mt-6 flex flex-col items-center gap-3 sm:flex-row sm:items-center sm:gap-4">
            <a class="inline-flex w-full justify-center rounded bg-dark px-4 py-1.5 text-sm font-semibold text-white transition hover:bg-dark/90 !no-underline sm:w-auto" href="<?php echo esc_url($strategy_call_link['href']); ?>"<?php echo $strategy_call_link['attributes']; ?>>
              <?php esc_html_e('Schedule Your Strategy Call', 'webmakerr'); ?>
            </a>
            <a class="inline-flex w-full justify-center rounded border border-zinc-200 px-4 py-1.5 text-sm font-semibold text-zinc-950 transition hover:border-zinc-300 hover:text-zinc-950 !no-underline sm:w-auto" href="<?php echo esc_url($portfolio_url); ?>">
              <?php esc_html_e('Preview Our Results', 'webmakerr'); ?>
            </a>
            <button
              type="button"
              class="inline-flex w-full items-center justify-center gap-2 rounded border border-primary/20 px-4 py-1.5 text-sm font-semibold text-primary transition hover:border-primary/40 hover:text-primary/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:w-auto"
              data-video-modal-open
            >
              <?php esc_html_e('Watch the 2-minute walkthrough', 'webmakerr'); ?>
              <span aria-hidden="true">&rarr;</span>
            </button>
          </div>
          <p class="text-xs font-medium uppercase tracking-[0.26em] text-zinc-500 sm:text-sm">
            <?php esc_html_e('Preferred by marketing leaders, founders, and teams ready to scale.', 'webmakerr'); ?>
          </p>
        </div>
      </div>
    </section>

    <div
      id="product-walkthrough-modal"
      class="fixed inset-0 z-50 flex items-center justify-center bg-zinc-950/60 px-4 py-8 transition duration-200 ease-out hidden opacity-0"
      role="dialog"
      aria-modal="true"
      aria-hidden="true"
      aria-labelledby="product-walkthrough-title"
    >
      <div class="absolute inset-0" data-video-modal-close aria-hidden="true"></div>
      <div
        class="relative z-10 w-full max-w-3xl rounded-2xl border border-primary/20 bg-white shadow-2xl focus:outline-none"
        data-video-modal-card
        tabindex="-1"
      >
        <button
          type="button"
          class="absolute right-4 top-4 inline-flex h-9 w-9 items-center justify-center rounded-full border border-zinc-200 text-zinc-500 transition hover:text-zinc-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-900"
          data-video-modal-close
        >
          <span class="sr-only"><?php esc_html_e('Close product walkthrough modal', 'webmakerr'); ?></span>
          <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
        <div class="flex flex-col gap-6 p-6 sm:p-8">
          <div class="flex flex-col gap-2">
            <span class="text-xs font-semibold uppercase tracking-[0.26em] text-primary"><?php esc_html_e('Product Tour', 'webmakerr'); ?></span>
            <h2 id="product-walkthrough-title" class="text-2xl font-semibold text-zinc-950 sm:text-3xl">
              <?php esc_html_e('See how Webmakerr automates your next launch', 'webmakerr'); ?>
            </h2>
            <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7">
              <?php esc_html_e('Watch a quick walkthrough of the dashboards, automations, and handoffs that keep campaigns moving without adding headcount.', 'webmakerr'); ?>
            </p>
          </div>
          <div class="aspect-video overflow-hidden rounded-xl border border-zinc-200">
            <iframe
              class="h-full w-full"
              src="https://player.vimeo.com/video/76979871?h=8272103f6e&title=0&byline=0&portrait=0"
              title="<?php esc_attr_e('Webmakerr 2-minute product walkthrough', 'webmakerr'); ?>"
              allow="autoplay; fullscreen; picture-in-picture"
              allowfullscreen
              data-video-frame
            ></iframe>
          </div>
        </div>
      </div>
    </div>

    <section class="border-y border-zinc-200 bg-slate-50/60 py-20">
      <div class="mx-auto grid max-w-screen-xl gap-12 px-6 lg:grid-cols-[minmax(0,1fr)_minmax(0,420px)] lg:px-8 lg:items-center">
        <div class="flex flex-col gap-6">
          <span class="inline-flex w-fit items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.26em] text-primary">
            <?php esc_html_e('Forecast Your Impact', 'webmakerr'); ?>
          </span>
          <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl lg:text-5xl">
            <?php esc_html_e('Estimate ROI before we meet', 'webmakerr'); ?>
          </h2>
          <p class="max-w-2xl text-base leading-7 text-zinc-600 sm:text-lg">
            <?php esc_html_e('Plug in your team size to preview how much revenue lift, time saved, and payback you can expect once your funnels are rebuilt on Webmakerr.', 'webmakerr'); ?>
          </p>
          <ul class="flex flex-col gap-3 text-sm text-zinc-600 sm:text-base">
            <li class="flex items-center gap-2 font-medium text-zinc-700">
              <svg class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M20 6 9 17l-5-5"></path>
              </svg>
              <span><?php esc_html_e('Benchmarks sourced from 250+ launch and lifecycle teams.', 'webmakerr'); ?></span>
            </li>
            <li class="flex items-center gap-2 font-medium text-zinc-700">
              <svg class="h-4 w-4 text-primary" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M20 6 9 17l-5-5"></path>
              </svg>
              <span><?php esc_html_e('Outputs update instantly so you can compare scenarios.', 'webmakerr'); ?></span>
            </li>
          </ul>
        </div>
        <div class="rounded-2xl border border-primary/20 bg-white/95 p-6 shadow-lg shadow-primary/10 backdrop-blur" data-roi-calculator>
          <div class="flex flex-col gap-4">
            <div class="flex flex-col gap-2" data-field="company_size">
              <label class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500" for="frontpage-roi-company-size">
                <?php esc_html_e('Company size', 'webmakerr'); ?>
              </label>
              <select
                class="w-full rounded border border-zinc-200 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm transition focus:border-dark focus:outline-none focus:ring-2 focus:ring-dark/10"
                id="frontpage-roi-company-size"
                name="company_size"
                data-roi-select
              >
                <option value=""><?php esc_html_e('Select an option', 'webmakerr'); ?></option>
                <option value="1-10"><?php esc_html_e('1–10 people', 'webmakerr'); ?></option>
                <option value="11-50"><?php esc_html_e('11–50 people', 'webmakerr'); ?></option>
                <option value="51-200"><?php esc_html_e('51–200 people', 'webmakerr'); ?></option>
                <option value="201-500"><?php esc_html_e('201–500 people', 'webmakerr'); ?></option>
                <option value="500+"><?php esc_html_e('500+ people', 'webmakerr'); ?></option>
              </select>
              <p class="text-xs text-zinc-500" data-roi-summary><?php esc_html_e('Choose the team size closest to your operation to preview tailored impact numbers.', 'webmakerr'); ?></p>
            </div>
            <dl class="grid gap-4" data-roi-results>
              <div class="rounded-xl border border-zinc-200 bg-zinc-50/80 p-4">
                <dt class="text-xs font-semibold uppercase tracking-[0.2em] text-primary/80"><?php esc_html_e('Projected pipeline lift', 'webmakerr'); ?></dt>
                <dd class="mt-1 text-2xl font-semibold text-zinc-950" data-roi-output="pipeline">—</dd>
                <p class="mt-1 text-xs text-zinc-500" data-roi-note="pipeline"><?php esc_html_e('Based on conversion gains captured across similar teams.', 'webmakerr'); ?></p>
              </div>
              <div class="rounded-xl border border-zinc-200 bg-zinc-50/80 p-4">
                <dt class="text-xs font-semibold uppercase tracking-[0.2em] text-primary/80"><?php esc_html_e('Hours unlocked each quarter', 'webmakerr'); ?></dt>
                <dd class="mt-1 text-2xl font-semibold text-zinc-950" data-roi-output="hours">—</dd>
                <p class="mt-1 text-xs text-zinc-500" data-roi-note="hours"><?php esc_html_e('Average time reclaimed once automation replaces manual launch steps.', 'webmakerr'); ?></p>
              </div>
              <div class="rounded-xl border border-zinc-200 bg-zinc-50/80 p-4">
                <dt class="text-xs font-semibold uppercase tracking-[0.2em] text-primary/80"><?php esc_html_e('Payback window', 'webmakerr'); ?></dt>
                <dd class="mt-1 text-2xl font-semibold text-zinc-950" data-roi-output="payback">—</dd>
                <p class="mt-1 text-xs text-zinc-500" data-roi-note="payback"><?php esc_html_e('Estimated time to ROI once your first funnel migrations go live.', 'webmakerr'); ?></p>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </section>

    <section class="container mx-auto px-6 py-24 lg:px-8">
      <div class="mx-auto flex max-w-3xl flex-col gap-4 text-center">
        <span class="text-xs font-semibold uppercase tracking-[0.26em] text-primary">
          <?php esc_html_e('Services Engineered for Growth', 'webmakerr'); ?>
        </span>
        <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl lg:text-5xl">
          <?php esc_html_e('Website & Funnel Systems Built to Convert', 'webmakerr'); ?>
        </h2>
        <p class="text-base leading-7 text-zinc-600 sm:text-lg">
          <?php esc_html_e('Revenue teams rely on Webmakerr to rethink their web presence, align messaging, and deploy funnels that turn traffic into customers.', 'webmakerr'); ?>
        </p>
      </div>

      <div class="mt-14 grid gap-8 sm:grid-cols-2 xl:grid-cols-4">
        <?php
        $services = array(
            array(
                'icon'        => 'website',
                'title'       => __('Website Redesign & Conversion Makeovers', 'webmakerr'),
                'description' => __('Rearchitect your flagship pages with deep research, premium UI, and measurable lifts in pipeline.', 'webmakerr'),
            ),
            array(
                'icon'        => 'funnel',
                'title'       => __('Custom Funnel Development & Automation', 'webmakerr'),
                'description' => __('Design, test, and automate buyer journeys that move prospects from first click to closed revenue.', 'webmakerr'),
            ),
            array(
                'icon'        => 'plugin',
                'title'       => __('Website Design Systems & Integrations', 'webmakerr'),
                'description' => __('Launch modular design systems, connect your tech stack, and ensure every touchpoint stays on-brand and trackable.', 'webmakerr'),
            ),
            array(
                'icon'        => 'landing',
                'title'       => __('High-Converting Campaign Landing Pages', 'webmakerr'),
                'description' => __('Deploy data-backed landing pages engineered for launches, promos, and paid traffic that demands fast ROI.', 'webmakerr'),
            ),
        );

        foreach ($services as $service) :
            ?>
          <article class="flex h-full flex-col gap-6 rounded-[5px] border border-zinc-200 bg-white p-8 text-left shadow-sm">
            <span class="inline-flex h-14 w-14 items-center justify-center rounded-full bg-primary/10">
              <?php
              // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
              echo webmakerr_frontpage_icon($service['icon'], 'h-8 w-8 text-primary');
              ?>
            </span>
            <div class="flex flex-col gap-3">
              <h3 class="text-xl font-semibold text-zinc-950">
                <?php echo esc_html($service['title']); ?>
              </h3>
              <p class="text-sm leading-6 text-zinc-600">
                <?php echo esc_html($service['description']); ?>
              </p>
            </div>
            <a class="mt-auto inline-flex w-full justify-center rounded border border-zinc-200 px-4 py-1.5 text-sm font-semibold text-zinc-950 transition hover:border-zinc-300 hover:text-zinc-950 !no-underline" href="<?php echo esc_url(home_url('/contact-us')); ?>">
              <?php esc_html_e('Start a Project', 'webmakerr'); ?>
            </a>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="bg-light py-24">
      <div class="container mx-auto grid items-center gap-12 px-6 lg:grid-cols-[1fr_0.85fr] lg:px-8">
        <div class="flex flex-col gap-5">
          <span class="text-xs font-semibold uppercase tracking-[0.26em] text-primary">
            <?php esc_html_e('Client Growth Snapshot', 'webmakerr'); ?>
          </span>
          <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl lg:text-5xl">
            <?php esc_html_e('How a SaaS Redesign Unlocked 218% More Qualified Demos.', 'webmakerr'); ?>
          </h2>
          <p class="text-base leading-7 text-zinc-600 sm:text-lg">
            <?php esc_html_e('A venture-backed SaaS company partnered with Webmakerr to overhaul their positioning, rebuild critical pages, and streamline their funnel—resulting in a 218% surge in qualified demos within six weeks.', 'webmakerr'); ?>
          </p>
          <a class="inline-flex w-full justify-center rounded border border-zinc-200 px-4 py-1.5 text-sm font-semibold text-zinc-950 transition hover:border-zinc-300 hover:text-zinc-950 !no-underline sm:w-auto" href="<?php echo esc_url($case_study_url); ?>" data-case-study-modal-trigger>
            <?php esc_html_e('See the Full Case Study', 'webmakerr'); ?>
          </a>
        </div>
        <div class="relative overflow-hidden rounded-[5px] border border-zinc-200 bg-white p-8 shadow-lg">
          <div class="absolute -right-16 -top-16 h-32 w-32 rounded-full bg-primary/10 blur-2xl"></div>
          <div class="absolute -bottom-20 -left-12 h-40 w-40 rounded-full bg-dark/5 blur-3xl"></div>
          <div class="relative flex flex-col gap-6">
            <div class="flex flex-col gap-2 rounded-[5px] border border-zinc-200 bg-zinc-50 p-5">
              <p class="text-xs font-semibold uppercase tracking-[0.26em] text-primary">
                <?php esc_html_e('Performance Highlights', 'webmakerr'); ?>
              </p>
              <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-[5px] border border-white bg-white p-4 shadow-sm">
                  <p class="text-2xl font-semibold text-zinc-950">218%</p>
                  <p class="text-xs uppercase tracking-[0.26em] text-zinc-500">
                    <?php esc_html_e('Increase in Demo Requests', 'webmakerr'); ?>
                  </p>
                </div>
                <div class="rounded-[5px] border border-white bg-white p-4 shadow-sm">
                  <p class="text-2xl font-semibold text-zinc-950">3.8x</p>
                  <p class="text-xs uppercase tracking-[0.26em] text-zinc-500">
                    <?php esc_html_e('Pipeline Efficiency ROI', 'webmakerr'); ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="rounded-[5px] border border-zinc-200 bg-white/80 p-5">
              <p class="text-sm leading-6 text-zinc-600">
                <?php esc_html_e("“Webmakerr reframed our narrative, redesigned the entire experience, and our pipeline hasn't slowed down since launch.”", 'webmakerr'); ?>
              </p>
              <p class="mt-4 text-xs font-semibold uppercase tracking-[0.26em] text-zinc-500">
                <?php esc_html_e('Maya Ellis — VP Marketing, Launchfuel', 'webmakerr'); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container mx-auto px-6 py-24 lg:px-8">
      <div class="mx-auto flex max-w-3xl flex-col gap-4 text-center">
        <span class="text-xs font-semibold uppercase tracking-[0.26em] text-primary">
          <?php esc_html_e('Why Teams Choose Webmakerr', 'webmakerr'); ?>
        </span>
        <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl lg:text-5xl">
          <?php esc_html_e('Strategy-Led Execution Built for Scale', 'webmakerr'); ?>
        </h2>
        <p class="text-base leading-7 text-zinc-600 sm:text-lg">
          <?php esc_html_e('We blend research, design, and funnel engineering to accelerate conversions, improve retention, and unlock new revenue streams.', 'webmakerr'); ?>
        </p>
      </div>
      <div class="mt-14 grid gap-8 lg:grid-cols-3">
        <?php
        $pillars = array(
            array(
                'icon'  => 'shield',
                'title' => __('Strategy First — Every Decision Backed by Data.', 'webmakerr'),
                'copy'  => __('We audit analytics, customer journeys, and competitive messaging before we design the first component.', 'webmakerr'),
            ),
            array(
                'icon'  => 'growth',
                'title' => __('Conversion Engineered — Built for Measurable Growth.', 'webmakerr'),
                'copy'  => __('Modular funnels, relentless testing, and CRO best practices are embedded into every milestone.', 'webmakerr'),
            ),
            array(
                'icon'  => 'handshake',
                'title' => __('Partnership Driven — Momentum Beyond Launch.', 'webmakerr'),
                'copy'  => __('We integrate with your team post-launch to optimize campaigns, improve ops, and keep revenue climbing.', 'webmakerr'),
            ),
        );

        foreach ($pillars as $pillar) :
            ?>
          <div class="flex h-full flex-col gap-5 rounded-[5px] border border-zinc-200 bg-white p-8 text-center shadow-sm">
            <span class="mx-auto inline-flex h-16 w-16 items-center justify-center rounded-full bg-primary/10">
              <?php
              // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
              echo webmakerr_frontpage_icon($pillar['icon'], 'h-9 w-9 text-primary');
              ?>
            </span>
            <h3 class="text-lg font-semibold text-zinc-950">
              <?php echo esc_html($pillar['title']); ?>
            </h3>
            <p class="text-sm leading-6 text-zinc-600">
              <?php echo esc_html($pillar['copy']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="container mx-auto px-6 py-24 lg:px-8">
      <div class="relative overflow-hidden rounded-[5px] border border-zinc-900/20 bg-zinc-950 px-8 py-16 text-center text-white shadow-lg sm:px-12">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(255,255,255,0.08),_transparent_60%)]"></div>
        <div class="relative mx-auto flex max-w-3xl flex-col gap-6">
          <span class="text-xs font-semibold uppercase tracking-[0.26em] text-white/70">
            <?php esc_html_e('Take the Next Step', 'webmakerr'); ?>
          </span>
          <h2 class="text-3xl font-semibold sm:text-4xl">
            <?php esc_html_e("Let's Build Your Highest-Converting Website Yet.", 'webmakerr'); ?>
          </h2>
          <p class="text-base leading-7 text-white/80 sm:text-lg">
            <?php esc_html_e('Book a strategy session to receive a tailored roadmap covering website design, redesign opportunities, and funnel plays built for your goals.', 'webmakerr'); ?>
          </p>
          <div class="flex justify-center">
            <a class="inline-flex items-center justify-center rounded border border-transparent bg-white px-5 py-2 text-sm font-semibold text-zinc-950 shadow-sm transition hover:bg-white/90 !no-underline" href="<?php echo esc_url($strategy_call_link['href']); ?>"<?php echo $strategy_call_link['attributes']; ?>>
              <?php esc_html_e('Claim Your Strategy Session', 'webmakerr'); ?>
            </a>
          </div>
          <p class="text-xs font-medium uppercase tracking-[0.26em] text-white/60">
            <?php esc_html_e('Limited availability — reserve your session in under 60 seconds.', 'webmakerr'); ?>
          </p>
        </div>
      </div>
    </section>

    <section class="container mx-auto px-6 py-24 lg:px-8">
      <div class="mx-auto flex max-w-3xl flex-col gap-4 text-center">
        <span class="text-xs font-semibold uppercase tracking-[0.26em] text-primary">
          <?php esc_html_e('Client Proof', 'webmakerr'); ?>
        </span>
        <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl lg:text-5xl">
          <?php esc_html_e('What Growth Leaders Say About Webmakerr', 'webmakerr'); ?>
        </h2>
        <p class="text-base leading-7 text-zinc-600 sm:text-lg">
          <?php esc_html_e('Real teams rely on Webmakerr to relaunch websites, orchestrate funnels, and keep qualified leads flowing in.', 'webmakerr'); ?>
        </p>
      </div>
      <div class="mt-14 grid gap-8 md:grid-cols-3">
        <?php
        $testimonials = array(
            array(
                'quote' => __('“In four weeks our refreshed funnel generated 137% more booked calls. The Webmakerr crew tracked every lever.”', 'webmakerr'),
                'name'  => __('Jordan Blake', 'webmakerr'),
                'role'  => __('Founder, GrowthLab Media', 'webmakerr'),
            ),
            array(
                'quote' => __('“Our ecommerce redesign plus automation rollout pushed revenue up 62% and gave us clear visibility into every stage.”', 'webmakerr'),
                'name'  => __('Elena Ruiz', 'webmakerr'),
                'role'  => __('CMO, Brightwave Living', 'webmakerr'),
            ),
            array(
                'quote' => __('“They plugged into our team like seasoned operators—strategic, proactive, and accountable to growth metrics.”', 'webmakerr'),
                'name'  => __('Marcus Lee', 'webmakerr'),
                'role'  => __('Head of Demand Gen, Convertix', 'webmakerr'),
            ),
        );

        foreach ($testimonials as $testimonial) :
            ?>
          <figure class="flex h-full flex-col gap-6 rounded-[5px] border border-zinc-200 bg-white p-8 shadow-sm">
            <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-primary/10">
              <?php
              // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
              echo webmakerr_frontpage_icon('quote', 'h-5 w-5 text-primary');
              ?>
            </span>
            <blockquote class="text-sm leading-6 text-zinc-600">
              <?php echo esc_html($testimonial['quote']); ?>
            </blockquote>
            <figcaption class="text-left">
              <p class="text-sm font-semibold text-zinc-950">
                <?php echo esc_html($testimonial['name']); ?>
              </p>
              <p class="text-xs uppercase tracking-[0.26em] text-zinc-500">
                <?php echo esc_html($testimonial['role']); ?>
              </p>
            </figcaption>
          </figure>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="border-y border-zinc-200 bg-white py-24">
      <div class="mx-auto grid max-w-screen-xl gap-10 px-6 lg:grid-cols-[minmax(0,1fr)_minmax(0,420px)] lg:px-8 lg:items-center">
        <div class="flex flex-col gap-6">
          <span class="inline-flex w-fit items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.26em] text-primary">
            <?php esc_html_e('Downloadable Playbook', 'webmakerr'); ?>
          </span>
          <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl lg:text-5xl">
            <?php esc_html_e('Not ready for a live demo? Grab the launch checklist.', 'webmakerr'); ?>
          </h2>
          <p class="max-w-2xl text-base leading-7 text-zinc-600 sm:text-lg">
            <?php esc_html_e('Submit your details to instantly access the Conversion Launch Checklist—our step-by-step guide to prioritizing experiments, assets, and offers.', 'webmakerr'); ?>
          </p>
          <ul class="flex flex-col gap-3 text-sm text-zinc-600 sm:text-base">
            <li class="flex items-start gap-3">
              <span class="mt-1 flex h-6 w-6 items-center justify-center rounded-full bg-primary/10 text-primary">
                <svg class="h-3.5 w-3.5" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M3 7 5.5 9.5 11 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
              <span><?php esc_html_e('Frameworks for aligning marketing, sales, and success on launch day.', 'webmakerr'); ?></span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1 flex h-6 w-6 items-center justify-center rounded-full bg-primary/10 text-primary">
                <svg class="h-3.5 w-3.5" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M3 7 5.5 9.5 11 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
              <span><?php esc_html_e('Checklist covers funnel QA, analytics instrumentation, and launch communications.', 'webmakerr'); ?></span>
            </li>
          </ul>
        </div>
        <div class="rounded-2xl border border-primary/20 bg-white p-6 shadow-lg shadow-primary/10" data-lead-offer>
          <form
            class="flex flex-col gap-5"
            novalidate
            data-lead-form
            data-endpoint="<?php echo esc_url($lead_endpoint); ?>"
            data-nonce="<?php echo esc_attr($lead_nonce); ?>"
            data-source="frontpage-resource"
            data-offer="<?php esc_attr_e('Conversion Launch Checklist', 'webmakerr'); ?>"
            data-offer-url="<?php echo esc_url($offer_download_url); ?>"
            data-primary-goal="stay_informed"
            data-primary-goal-label="<?php esc_attr_e('Stay informed with best practices', 'webmakerr'); ?>"
            data-error-message="<?php esc_attr_e('We could not deliver the checklist right now. Please try again.', 'webmakerr'); ?>"
          >
            <div class="flex flex-col gap-2" data-field="name" data-required data-error-message="<?php esc_attr_e('Share your name so we know who to send the checklist to.', 'webmakerr'); ?>">
              <label class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500" for="frontpage-offer-name">
                <?php esc_html_e('Full name', 'webmakerr'); ?> <span class="text-red-500">*</span>
              </label>
              <input
                class="w-full rounded border border-zinc-200 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm transition focus:border-dark focus:outline-none focus:ring-2 focus:ring-dark/10"
                type="text"
                id="frontpage-offer-name"
                name="name"
                autocomplete="name"
              />
              <p class="hidden text-xs font-medium text-red-600" data-error="name"></p>
            </div>
            <div class="flex flex-col gap-2" data-field="email" data-required data-validate="email" data-error-message="<?php esc_attr_e('Add a valid work email so the download link reaches you.', 'webmakerr'); ?>">
              <label class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500" for="frontpage-offer-email">
                <?php esc_html_e('Work email', 'webmakerr'); ?> <span class="text-red-500">*</span>
              </label>
              <input
                class="w-full rounded border border-zinc-200 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm transition focus:border-dark focus:outline-none focus:ring-2 focus:ring-dark/10"
                type="email"
                id="frontpage-offer-email"
                name="email"
                autocomplete="email"
              />
              <p class="hidden text-xs font-medium text-red-600" data-error="email"></p>
            </div>
            <div class="flex flex-col gap-2" data-field="company_size" data-required data-error-message="<?php esc_attr_e('Choose the team size closest to yours.', 'webmakerr'); ?>">
              <label class="text-xs font-semibold uppercase tracking-[0.2em] text-zinc-500" for="frontpage-offer-company-size">
                <?php esc_html_e('Company size', 'webmakerr'); ?> <span class="text-red-500">*</span>
              </label>
              <select
                class="w-full rounded border border-zinc-200 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm transition focus:border-dark focus:outline-none focus:ring-2 focus:ring-dark/10"
                id="frontpage-offer-company-size"
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
            <p class="text-xs text-zinc-500"><?php esc_html_e('We’ll send the checklist and occasional insights. Unsubscribe anytime.', 'webmakerr'); ?></p>
            <button
              type="submit"
              class="inline-flex items-center justify-center rounded bg-dark px-4 py-2 text-sm font-semibold text-white transition hover:bg-dark/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-dark"
              data-submit
              data-default-label="<?php esc_attr_e('Send Me the Checklist', 'webmakerr'); ?>"
              data-loading-label="<?php esc_attr_e('Sending…', 'webmakerr'); ?>"
            >
              <?php esc_html_e('Send Me the Checklist', 'webmakerr'); ?>
            </button>
            <p class="hidden rounded border border-red-200 bg-red-50 px-4 py-2 text-xs font-medium text-red-600" data-form-alert role="alert"></p>
          </form>
          <div class="hidden flex flex-col gap-4 rounded-xl border border-green-200 bg-green-50 p-6 text-green-900" data-lead-success aria-hidden="true">
            <h3 class="text-lg font-semibold" data-success-heading data-default-heading="<?php esc_attr_e('Your checklist is ready!', 'webmakerr'); ?>">
              <?php esc_html_e('Your checklist is ready!', 'webmakerr'); ?>
            </h3>
            <p class="text-sm text-green-800" data-success-message data-default-message="<?php esc_attr_e('Check your inbox for the download link. You can also grab it instantly below.', 'webmakerr'); ?>">
              <?php esc_html_e('Check your inbox for the download link. You can also grab it instantly below.', 'webmakerr'); ?>
            </p>
            <a
              class="inline-flex items-center justify-center rounded bg-dark px-4 py-2 text-sm font-semibold text-white transition hover:bg-dark/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-dark !no-underline"
              href="<?php echo esc_url($offer_download_url); ?>"
              data-offer-link
              data-download-template="<?php echo esc_attr__('Download the %s', 'webmakerr'); ?>"
              target="_blank"
              rel="noopener"
            >
              <?php esc_html_e('Download the Conversion Launch Checklist', 'webmakerr'); ?>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-light py-24">
      <div class="container mx-auto grid gap-12 px-6 text-center lg:grid-cols-[1.1fr_0.9fr] lg:px-8 lg:text-left">
        <div class="flex flex-col gap-5">
          <span class="text-xs font-semibold uppercase tracking-[0.26em] text-primary">
            <?php esc_html_e('Conversion Toolkit', 'webmakerr'); ?>
          </span>
          <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl lg:text-5xl">
            <?php esc_html_e('Get the Website Conversion Toolkit We Use With Clients.', 'webmakerr'); ?>
          </h2>
          <p class="text-base leading-7 text-zinc-600 sm:text-lg">
            <?php esc_html_e('Steal the checklists, templates, and CRO frameworks our strategists deploy on every website and funnel engagement.', 'webmakerr'); ?>
          </p>
          <div class="flex flex-col items-center gap-4 sm:flex-row sm:justify-start">
            <a class="inline-flex w-full justify-center rounded bg-dark px-4 py-1.5 text-sm font-semibold text-white transition hover:bg-dark/90 !no-underline sm:w-auto" href="<?php echo esc_url($toolkit_link['href']); ?>"<?php echo $toolkit_link['attributes']; ?>>
              <?php esc_html_e('Access the Free Toolkit', 'webmakerr'); ?>
            </a>
            <p class="text-xs uppercase tracking-[0.26em] text-zinc-500">
              <?php esc_html_e('Instant download • 100% actionable', 'webmakerr'); ?>
            </p>
          </div>
        </div>
        <div class="relative overflow-hidden rounded-[5px] border border-zinc-200 bg-white p-8 shadow-lg">
          <div class="absolute -left-12 -top-16 h-32 w-32 rounded-full bg-primary/10 blur-3xl"></div>
          <div class="absolute -bottom-16 -right-16 h-36 w-36 rounded-full bg-dark/5 blur-3xl"></div>
          <div class="relative flex flex-col gap-4 text-left">
            <h3 class="text-sm font-semibold uppercase tracking-[0.26em] text-primary">
              <?php esc_html_e('Inside the Toolkit', 'webmakerr'); ?>
            </h3>
            <ul class="grid gap-3 text-sm leading-6 text-zinc-600">
              <li class="flex items-start gap-3">
                <span class="mt-1 flex h-6 w-6 items-center justify-center rounded-full bg-primary/10 text-primary">
                  <svg class="h-3.5 w-3.5" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7 5.5 9.5 11 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
                <span><?php esc_html_e('Funnel blueprints for webinars, launches, and SaaS demos that convert.', 'webmakerr'); ?></span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-1 flex h-6 w-6 items-center justify-center rounded-full bg-primary/10 text-primary">
                  <svg class="h-3.5 w-3.5" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7 5.5 9.5 11 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
                <span><?php esc_html_e('Optimization scorecards to prioritize the highest-impact improvements fast.', 'webmakerr'); ?></span>
              </li>
              <li class="flex items-start gap-3">
                <span class="mt-1 flex h-6 w-6 items-center justify-center rounded-full bg-primary/10 text-primary">
                  <svg class="h-3.5 w-3.5" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 7 5.5 9.5 11 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
                <span><?php esc_html_e('Messaging and copy frameworks aligned to every buyer stage.', 'webmakerr'); ?></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
</main>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var body = document.body;

    var videoModal = document.getElementById('product-walkthrough-modal');

    if (videoModal) {
      var videoTriggers = document.querySelectorAll('[data-video-modal-open]');
      var modalCard = videoModal.querySelector('[data-video-modal-card]');
      var closeButtons = videoModal.querySelectorAll('[data-video-modal-close]');
      var videoFrame = videoModal.querySelector('[data-video-frame]');
      var videoSource = videoFrame ? videoFrame.getAttribute('src') : '';
      var previouslyFocused = null;
      var transitionDuration = 200;

      var closeVideoModal = function () {
        if (videoModal.classList.contains('hidden')) {
          return;
        }

        videoModal.classList.add('opacity-0');

        if (videoFrame) {
          videoFrame.setAttribute('src', '');
        }

        window.setTimeout(function () {
          videoModal.classList.add('hidden');
          videoModal.setAttribute('aria-hidden', 'true');
          videoModal.classList.remove('opacity-0');
          document.removeEventListener('keydown', handleVideoKeydown);
          body.classList.remove('overflow-hidden');

          if (videoFrame && videoSource) {
            videoFrame.setAttribute('src', videoSource);
          }

          if (previouslyFocused && typeof previouslyFocused.focus === 'function') {
            previouslyFocused.focus();
          }
        }, transitionDuration);
      };

      var handleVideoKeydown = function (event) {
        if (event.key === 'Escape') {
          closeVideoModal();
        }
      };

      var openVideoModal = function (event) {
        if (event) {
          event.preventDefault();
        }

        if (!videoModal.classList.contains('hidden')) {
          return;
        }

        previouslyFocused = document.activeElement;

        videoModal.classList.remove('hidden');
        videoModal.setAttribute('aria-hidden', 'false');
        body.classList.add('overflow-hidden');

        window.requestAnimationFrame(function () {
          videoModal.classList.remove('opacity-0');

          if (modalCard && typeof modalCard.focus === 'function') {
            modalCard.focus();
          }
        });

        if (videoFrame && videoSource) {
          videoFrame.setAttribute('src', videoSource);
        }

        document.addEventListener('keydown', handleVideoKeydown);
      };

      videoTriggers.forEach(function (trigger) {
        trigger.addEventListener('click', openVideoModal);
      });

      closeButtons.forEach(function (button) {
        button.addEventListener('click', function (event) {
          event.preventDefault();
          closeVideoModal();
        });
      });

      videoModal.addEventListener('click', function (event) {
        if (event.target === videoModal) {
          closeVideoModal();
        }
      });
    }

    var roiCalculator = document.querySelector('[data-roi-calculator]');

    if (roiCalculator) {
      var roiSelect = roiCalculator.querySelector('[data-roi-select]');
      var roiSummary = roiCalculator.querySelector('[data-roi-summary]');
      var roiOutputs = {
        pipeline: roiCalculator.querySelector('[data-roi-output="pipeline"]'),
        hours: roiCalculator.querySelector('[data-roi-output="hours"]'),
        payback: roiCalculator.querySelector('[data-roi-output="payback"]')
      };
      var roiNotes = {
        pipeline: roiCalculator.querySelector('[data-roi-note="pipeline"]'),
        hours: roiCalculator.querySelector('[data-roi-note="hours"]'),
        payback: roiCalculator.querySelector('[data-roi-note="payback"]')
      };
      var defaultSummary = roiSummary ? roiSummary.textContent : '';
      var fallbackValue = '—';
      var roiMatrix = <?php echo wp_json_encode($frontpage_roi_matrix, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); ?>;

      var resetRoi = function () {
        Object.keys(roiOutputs).forEach(function (key) {
          if (roiOutputs[key]) {
            roiOutputs[key].textContent = fallbackValue;
          }
        });

        Object.keys(roiNotes).forEach(function (key) {
          if (roiNotes[key]) {
            roiNotes[key].textContent = '';
          }
        });

        if (roiSummary) {
          roiSummary.textContent = defaultSummary;
        }
      };

      var updateRoi = function () {
        var value = roiSelect ? roiSelect.value : '';

        if (!value || !roiMatrix[value]) {
          resetRoi();
          return;
        }

        var config = roiMatrix[value];

        if (roiOutputs.pipeline) {
          roiOutputs.pipeline.textContent = config.pipeline || fallbackValue;
        }

        if (roiOutputs.hours) {
          roiOutputs.hours.textContent = config.hours || fallbackValue;
        }

        if (roiOutputs.payback) {
          roiOutputs.payback.textContent = config.payback || fallbackValue;
        }

        if (roiNotes.pipeline) {
          roiNotes.pipeline.textContent = config.pipeline_note || '';
        }

        if (roiNotes.hours) {
          roiNotes.hours.textContent = config.hours_note || '';
        }

        if (roiNotes.payback) {
          roiNotes.payback.textContent = config.payback_note || '';
        }

        if (roiSummary) {
          roiSummary.textContent = config.summary || defaultSummary;
        }
      };

      if (roiSelect) {
        roiSelect.addEventListener('change', updateRoi);
        updateRoi();
      }
    }

    var leadForms = document.querySelectorAll('[data-lead-form]');

    if (leadForms.length) {
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      leadForms.forEach(function (form) {
        var endpoint = form.dataset.endpoint || '';

        if (!endpoint) {
          return;
        }

        var nonce = form.dataset.nonce || '';
        var generalAlert = form.querySelector('[data-form-alert]');
        var submitButton = form.querySelector('[data-submit]');
        var defaultLabel = submitButton ? submitButton.getAttribute('data-default-label') || submitButton.textContent : '';
        var loadingLabel = submitButton ? submitButton.getAttribute('data-loading-label') || submitButton.textContent : '';
        var successContainer = form.parentElement ? form.parentElement.querySelector('[data-lead-success]') : null;
        var successHeading = successContainer ? successContainer.querySelector('[data-success-heading]') : null;
        var successMessage = successContainer ? successContainer.querySelector('[data-success-message]') : null;
        var successLink = successContainer ? successContainer.querySelector('[data-offer-link]') : null;
        var defaultSuccessHeading = successHeading ? successHeading.getAttribute('data-default-heading') || successHeading.textContent : '';
        var defaultSuccessMessage = successMessage ? successMessage.getAttribute('data-default-message') || successMessage.textContent : '';
        var offerName = form.dataset.offer || '';
        var offerUrl = form.dataset.offerUrl || '';
        var primaryGoalValue = form.dataset.primaryGoal || '';
        var primaryGoalLabel = form.dataset.primaryGoalLabel || '';

        var fieldWrappers = {};
        var errorNodes = {};
        var fieldInputs = {};

        form.querySelectorAll('[data-field]').forEach(function (wrapper) {
          var key = wrapper.getAttribute('data-field');

          if (key) {
            fieldWrappers[key] = wrapper;
            var input = wrapper.querySelector('[name]');

            if (input) {
              fieldInputs[key] = input;

              var eventName = input.tagName === 'SELECT' ? 'change' : 'input';

              input.addEventListener(eventName, function () {
                clearFieldError(key);
                clearGeneralAlert();
              });
            }
          }
        });

        form.querySelectorAll('[data-error]').forEach(function (node) {
          var key = node.getAttribute('data-error');

          if (key) {
            errorNodes[key] = node;
          }
        });

        var clearGeneralAlert = function () {
          if (generalAlert) {
            generalAlert.classList.add('hidden');
            generalAlert.textContent = '';
          }
        };

        var showGeneralAlert = function (message) {
          if (generalAlert) {
            generalAlert.textContent = message;
            generalAlert.classList.remove('hidden');
          }
        };

        var getFieldMessage = function (field) {
          var wrapper = fieldWrappers[field];

          if (wrapper && wrapper.dataset.errorMessage) {
            return wrapper.dataset.errorMessage;
          }

          return form.dataset.errorMessage || 'Please review the highlighted fields.';
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
              var radios = form.querySelectorAll('input[name="' + input.name + '"]');

              radios.forEach(function (radio) {
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
              var radios = form.querySelectorAll('input[name="' + input.name + '"]');

              radios.forEach(function (radio) {
                radio.setAttribute('aria-invalid', 'true');
              });
            } else {
              input.setAttribute('aria-invalid', 'true');
            }
          }
        };

        var setSubmitting = function (isSubmitting) {
          if (submitButton) {
            submitButton.disabled = isSubmitting;

            if (isSubmitting && loadingLabel) {
              submitButton.textContent = loadingLabel;
            } else if (!isSubmitting && defaultLabel) {
              submitButton.textContent = defaultLabel;
            }
          }

          form.setAttribute('aria-busy', isSubmitting ? 'true' : 'false');
        };

        var handleSuccess = function (message, heading) {
          if (form) {
            form.classList.add('hidden');
            form.setAttribute('aria-hidden', 'true');
          }

          if (successContainer) {
            successContainer.classList.remove('hidden');
            successContainer.setAttribute('aria-hidden', 'false');
          }

          if (successHeading) {
            successHeading.textContent = heading || defaultSuccessHeading;
          }

          if (successMessage) {
            successMessage.textContent = message || defaultSuccessMessage;
          }

          if (successLink) {
            if (offerUrl) {
              successLink.setAttribute('href', offerUrl);
            }

            var template = successLink.getAttribute('data-download-template');

            if (template && offerName) {
              successLink.textContent = template.replace('%s', offerName);
            }
          }
        };

        form.addEventListener('submit', function (event) {
          event.preventDefault();
          clearGeneralAlert();

          var payload = {
            name: '',
            email: '',
            company_size: '',
            company_size_label: '',
            primary_goal: primaryGoalValue,
            primary_goal_label: primaryGoalLabel,
            source: form.dataset.source || 'frontpage-resource'
          };

          if (offerName) {
            payload.offer = offerName;
          }

          var isValid = true;

          Object.keys(fieldInputs).forEach(function (key) {
            clearFieldError(key);

            var input = fieldInputs[key];
            var wrapper = fieldWrappers[key];
            var required = wrapper && wrapper.hasAttribute('data-required');
            var value = '';

            if (input.tagName === 'SELECT') {
              value = input.value;
            } else if (input.type === 'radio') {
              var checked = form.querySelector('input[name="' + input.name + '"]:checked');
              value = checked ? checked.value : '';
            } else {
              value = input.value.trim();
            }

            if (required && !value) {
              isValid = false;
              showFieldError(key, getFieldMessage(key));
              return;
            }

            if (value && wrapper && wrapper.dataset.validate === 'email' && !emailPattern.test(value)) {
              isValid = false;
              showFieldError(key, getFieldMessage(key));
              return;
            }

            if (key === 'name') {
              payload.name = value;
            } else if (key === 'email') {
              payload.email = value;
            } else if (key === 'company_size') {
              payload.company_size = value;

              if (input.tagName === 'SELECT' && input.selectedOptions && input.selectedOptions.length) {
                payload.company_size_label = input.selectedOptions[0].textContent.trim();
              }
            } else if (key === 'primary_goal') {
              payload.primary_goal = value;

              var checkedRadio = form.querySelector('input[name="' + input.name + '"]:checked');

              if (checkedRadio && checkedRadio.dataset.label) {
                payload.primary_goal_label = checkedRadio.dataset.label;
              }
            }
          });

          if (!payload.primary_goal) {
            payload.primary_goal = primaryGoalValue || 'download_resource';
          }

          if (!payload.primary_goal_label && primaryGoalLabel) {
            payload.primary_goal_label = primaryGoalLabel;
          }

          if (!isValid) {
            return;
          }

          setSubmitting(true);

          window.fetch(endpoint, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-WP-Nonce': nonce
            },
            body: JSON.stringify(payload)
          })
            .then(function (response) {
              if (!response.ok) {
                return response.json().catch(function () {
                  return {
                    success: false,
                    message: form.dataset.errorMessage || 'We could not submit your request. Please try again.'
                  };
                });
              }

              return response.json();
            })
            .then(function (data) {
              if (!data) {
                showGeneralAlert(form.dataset.errorMessage || 'We could not submit your request. Please try again.');
                return;
              }

              if (data.success) {
                handleSuccess('', '');
              } else {
                if (data.errors) {
                  Object.keys(data.errors).forEach(function (key) {
                    if (data.errors[key]) {
                      showFieldError(key, data.errors[key]);
                    }
                  });
                }

                if (data.message) {
                  showGeneralAlert(data.message);
                } else {
                  showGeneralAlert(form.dataset.errorMessage || 'We could not submit your request. Please try again.');
                }
              }
            })
            .catch(function () {
              showGeneralAlert(form.dataset.errorMessage || 'We could not submit your request. Please try again.');
            })
            .finally(function () {
              setSubmitting(false);
            });
        });
      });
    }
  });
</script>

<?php
get_template_part('templates/partials/case-study-modal');
webmakerr_render_template_popup($popup_settings);
get_footer();
