<?php
/**
 * Template Name: Marketing Business
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();

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
?>

<main id="primary" class="flex flex-col bg-white">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('flex flex-col'); ?>>
      <section class="relative overflow-hidden border-b border-zinc-200 bg-gradient-to-b from-white via-white to-light">
        <div class="relative z-10 mx-auto max-w-screen-xl px-6 py-12 lg:px-8 lg:py-20">
          <div class="grid items-center gap-16 lg:grid-cols-[1.1fr_0.9fr]">
            <div class="flex flex-col gap-6">
              <span class="inline-flex w-fit items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.26em] text-primary">
                <?php esc_html_e('Managed Business Platform', 'webmakerr'); ?>
              </span>
              <h1 class="mt-4 text-4xl font-medium tracking-tight [text-wrap:balance] text-zinc-950 sm:text-5xl">
                <?php esc_html_e('Stop Managing Plugins. Start Scaling Your Business.', 'webmakerr'); ?>
              </h1>
              <p class="max-w-2xl text-base leading-7 text-zinc-600 sm:text-lg">
                <?php esc_html_e('You built something great, but your tech stack keeps slowing you down. Plugins collide, updates break, and every “quick fix” adds cost and chaos. Webmakerr unifies the stack so you can focus on growth.', 'webmakerr'); ?>
              </p>
              <div class="mt-10 flex flex-col items-center gap-3 sm:flex-row sm:items-center">
                <a class="inline-flex w-full justify-center rounded bg-dark px-4 py-1.5 text-sm font-semibold text-white transition hover:bg-dark/90 !no-underline sm:w-auto" href="#with-webmakerr">
                  <?php esc_html_e('Start Free →', 'webmakerr'); ?>
                </a>
                <a class="inline-flex w-full justify-center rounded border border-zinc-200 px-4 py-1.5 text-sm font-semibold text-zinc-950 transition hover:border-zinc-300 hover:text-zinc-950 !no-underline sm:w-auto" href="#with-webmakerr">
                  <?php esc_html_e('Book a Demo →', 'webmakerr'); ?>
                </a>
              </div>
              <p class="mt-3 text-xs font-medium text-zinc-500 sm:text-sm">
                <?php esc_html_e('Limited onboarding slots available each month.', 'webmakerr'); ?>
              </p>
            </div>
            <div class="relative isolate overflow-hidden rounded-[5px] border border-white/60 bg-white/80 p-8 shadow-xl shadow-primary/10 backdrop-blur">
              <div class="absolute -left-16 -top-16 h-48 w-48 rounded-full bg-primary/10 blur-3xl"></div>
              <div class="relative flex flex-col gap-6">
                <?php if (has_post_thumbnail()) : ?>
                  <figure class="overflow-hidden rounded-[8px] border border-zinc-200 bg-white/90">
                    <?php echo wp_kses_post(get_the_post_thumbnail(null, 'large', array('class' => 'h-full w-full object-cover'))); ?>
                  </figure>
                <?php endif; ?>
                <div class="rounded-[5px] border border-zinc-200 bg-white/80 p-6 shadow-sm">
                  <p class="text-xs font-semibold uppercase tracking-[0.3em] text-primary"><?php esc_html_e('Unified growth stack', 'webmakerr'); ?></p>
                  <p class="mt-2 text-sm text-zinc-600"><?php esc_html_e('Webmakerr brings your website, CRM, store, and analytics into one managed platform so you can grow without tech debt.', 'webmakerr'); ?></p>
                </div>
                <ul class="grid gap-3 text-sm text-zinc-600">
                  <li class="flex items-center gap-3 rounded-[5px] border border-zinc-200 bg-white px-4 py-3">
                    <span class="flex h-9 w-9 items-center justify-center rounded-full bg-primary/10 text-primary">
                      <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                      echo marketing_business_render_icon('zap', 'h-5 w-5'); ?>
                    </span>
                    <?php esc_html_e('Lightning-fast sites with enterprise uptime.', 'webmakerr'); ?>
                  </li>
                  <li class="flex items-center gap-3 rounded-[5px] border border-zinc-200 bg-white px-4 py-3">
                    <span class="flex h-9 w-9 items-center justify-center rounded-full bg-primary/10 text-primary">
                      <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                      echo marketing_business_render_icon('layers', 'h-5 w-5'); ?>
                    </span>
                    <?php esc_html_e('Managed updates, security, and performance.', 'webmakerr'); ?>
                  </li>
                  <li class="flex items-center gap-3 rounded-[5px] border border-zinc-200 bg-white px-4 py-3">
                    <span class="flex h-9 w-9 items-center justify-center rounded-full bg-primary/10 text-primary">
                      <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                      echo marketing_business_render_icon('check', 'h-5 w-5'); ?>
                    </span>
                    <?php esc_html_e('All-in-one tooling that scales with your business.', 'webmakerr'); ?>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="border-t border-zinc-200 bg-white py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="grid gap-12 text-zinc-600 lg:grid-cols-[0.9fr_1.1fr]">
            <div class="flex flex-col gap-6">
              <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
                Why Growth Feels Harder Than It Should
              </h2>
              <p class="text-base leading-7 sm:text-lg">You already know what makes your product powerful — but your infrastructure slows the momentum.</p>
              <p class="text-base leading-7 sm:text-lg">Teams end up maintaining tools instead of building the experiences customers expect.</p>
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

      <section class="border-t border-zinc-200 bg-slate-50 py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-4xl flex-col gap-6 text-center text-zinc-600">
            <h3 class="text-2xl font-semibold text-zinc-950 sm:text-3xl">Growth accelerates when the foundation is managed.</h3>
            <p class="text-base leading-7 sm:text-lg">Webmakerr removes the friction that keeps teams in reactive mode, so every launch, campaign, and customer touchpoint stays consistent.</p>
          </div>
        </div>
      </section>

      <section class="border-t border-zinc-200 bg-white py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-3xl flex-col gap-4 text-center text-zinc-600">
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              What Makes (or Breaks) a Website
            </h2>
            <p class="text-base leading-7 sm:text-lg">Most websites fail long before the first conversion.</p>
            <p class="text-base leading-7 sm:text-lg">Why? Because beneath the design are hidden problems that cost you visitors and sales.</p>
          </div>
          <?php
          $website_failure_signals = array(
              array(
                  'icon'        => 'zap',
                  'title'       => 'Speed',
                  'description' => '53% of visitors leave if a site loads in more than 3 seconds — a slow, fragile, plugin-heavy site quietly loses revenue every single day.',
              ),
              array(
                  'icon'        => 'layers',
                  'title'       => 'Stability',
                  'description' => 'Each plugin update risks breaking key functions. Most websites fail long before the first conversion.',
              ),
              array(
                  'icon'        => 'shield-check',
                  'title'       => 'Security',
                  'description' => 'Cheap add-ons create vulnerabilities hackers love. Because beneath the design are hidden problems that cost you visitors and sales.',
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

      <section class="border-t border-zinc-200 bg-white py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-4xl flex-col gap-6 text-zinc-600">
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              The Hidden Cost of “Simple” Website Setups
            </h2>
            <p class="text-base leading-7 sm:text-lg">Running a modern website isn’t cheap — it’s just disguised as a dozen “affordable” tools.</p>
            <p class="text-base leading-7 sm:text-lg">Here’s what most businesses really spend:</p>
            <div class="overflow-hidden rounded-[6px] border border-zinc-200 bg-white shadow-sm">
              <div class="overflow-x-auto">
                <table class="min-w-full border-collapse text-left">
                  <thead class="bg-light/70 text-xs font-semibold uppercase tracking-[0.26em] text-zinc-500">
                    <tr>
                      <th class="px-6 py-4 align-bottom">Tool / Service</th>
                      <th class="px-6 py-4 align-bottom">Typical Monthly Cost</th>
                      <th class="px-6 py-4 align-bottom">Purpose</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-zinc-200 text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7">
                    <tr>
                      <td class="px-6 py-4">Web Design (basic setup)</td>
                      <td class="px-6 py-4">$149 (one-time)</td>
                      <td class="px-6 py-4">Initial design &amp; updates</td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">Cloud Hosting</td>
                      <td class="px-6 py-4">$15</td>
                      <td class="px-6 py-4">Keeps your site online</td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">CRM Software</td>
                      <td class="px-6 py-4">$39</td>
                      <td class="px-6 py-4">Manage leads &amp; clients</td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">eCommerce Platform</td>
                      <td class="px-6 py-4">$29</td>
                      <td class="px-6 py-4">Sell products &amp; subscriptions</td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">Booking System</td>
                      <td class="px-6 py-4">$15</td>
                      <td class="px-6 py-4">Schedule demos &amp; calls</td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">SEO Plugin</td>
                      <td class="px-6 py-4">$12</td>
                      <td class="px-6 py-4">Optimize pages for search</td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">Support System</td>
                      <td class="px-6 py-4">$49</td>
                      <td class="px-6 py-4">Handle chats &amp; tickets</td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">Project Management Tool</td>
                      <td class="px-6 py-4">$25</td>
                      <td class="px-6 py-4">Manage work &amp; deadlines</td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">Server-Side Pixel Tracking</td>
                      <td class="px-6 py-4">$19</td>
                      <td class="px-6 py-4">Accurate ad attribution</td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">CDN &amp; Performance Add-ons</td>
                      <td class="px-6 py-4">$15</td>
                      <td class="px-6 py-4">Global speed optimization</td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">Backup &amp; Security</td>
                      <td class="px-6 py-4">$5</td>
                      <td class="px-6 py-4">Prevent data loss</td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">Paid Plugin Licenses</td>
                      <td class="px-6 py-4">$29</td>
                      <td class="px-6 py-4">Extend functionality</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="mt-6 space-y-2 text-base leading-7 text-zinc-950 sm:text-lg">
              <p>Average Monthly Stack Cost: ≈ $253 / month</p>
              <p>Average Startup Cost (with design): ≈ $400+</p>
            </div>
          </div>
        </div>
      </section>

      <section id="with-webmakerr" class="border-t border-zinc-200 bg-slate-50 py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="grid gap-12 lg:grid-cols-[0.9fr_1.1fr]">
            <div class="flex flex-col gap-6 text-center text-zinc-600 lg:text-left">
              <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
                Everything You Need — in One Platform
              </h2>
              <p class="text-base leading-7 sm:text-lg">Cloud hosting, CRM, store, SEO, support, analytics — managed, connected, and always up to date.</p>
              <p class="text-base leading-7 sm:text-lg">Webmakerr plans start at just $29 / month, including automation, backups, and proactive support.</p>
              <div class="mt-2 flex justify-center lg:justify-start">
                <a class="btn-main inline-flex items-center justify-center px-6 py-3 text-base font-medium" href="#">
                  See How Webmakerr Works →
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

      <section class="border-t border-zinc-200 bg-white py-16">
        <div class="container mx-auto px-6 lg:px-8">
          <div class="grid gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
            <div class="flex flex-col gap-6 text-zinc-600">
              <span class="inline-flex w-fit items-center gap-2 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.26em] text-primary">
                <?php esc_html_e('Trusted by growing teams', 'webmakerr'); ?>
              </span>
              <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
                Growth should be automatic — not exhausting.
              </h2>
              <blockquote class="rounded-[6px] border border-zinc-200 bg-light px-6 py-6 text-left shadow-sm">
                <p class="text-base leading-7 text-zinc-600 sm:text-lg">
                  “We built Webmakerr after watching businesses waste hours managing tools that never talked to each other. Growth should be automatic — not exhausting.”
                </p>
                <footer class="mt-4 text-sm font-semibold text-zinc-950 sm:text-base">
                  — [Founder Name], Creator of Webmakerr
                </footer>
              </blockquote>
              <p class="text-base leading-7 text-zinc-600 sm:text-lg">
                Webmakerr removes the friction that keeps teams in reactive mode, so every launch, campaign, and customer touchpoint stays consistent.
              </p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
              <?php
              $marketing_stats = array(
                  array(
                      'icon'  => 'server',
                      'label' => 'Global CDN (170 edge servers) — <1.5 s worldwide',
                  ),
                  array(
                      'icon'  => 'shield-check',
                      'label' => 'Server-Side Marketing Pixel — included',
                  ),
                  array(
                      'icon'  => 'check',
                      'label' => 'Webmakerr plans start at just $29 / month, including automation, backups, and proactive support.',
                  ),
                  array(
                      'icon'  => 'repeat',
                      'label' => 'Most users are fully operational within 48 hours.',
                  ),
              );

              foreach ($marketing_stats as $stat) :
                  ?>
                  <div class="flex flex-col gap-3 rounded-[5px] border border-zinc-200 bg-light/60 p-6 text-sm text-zinc-600 shadow-sm">
                    <span class="flex h-10 w-10 items-center justify-center rounded-full bg-white text-primary">
                      <?php
                      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                      echo marketing_business_render_icon($stat['icon'], 'h-5 w-5');
                      ?>
                    </span>
                    <p class="font-semibold text-zinc-950"><?php echo esc_html($stat['label']); ?></p>
                  </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>

      <section class="border-t border-zinc-200 bg-slate-50 py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-5xl flex-col gap-12">
            <div class="flex flex-col gap-4 text-center text-zinc-600">
              <span class="inline-flex items-center justify-center self-center rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.26em] text-primary">
                The Webmakerr Transformation
              </span>
              <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
                From Chaos to Clarity — From Cost to Control
              </h2>
              <p class="text-base leading-7 sm:text-lg">Every business hits a point where managing plugins, updates, and tools becomes unsustainable.</p>
              <p class="text-base leading-7 sm:text-lg">Webmakerr replaces that complexity with one unified system — faster, smarter, and managed for you.</p>
            </div>
            <?php
            $transformation_moments = array(
                array(
                    'icon'        => 'activity',
                    'title'       => 'Operational breaking point',
                    'description' => 'Every business hits a point where managing plugins, updates, and tools becomes unsustainable.',
                ),
                array(
                    'icon'        => 'server',
                    'title'       => 'Managed foundation',
                    'description' => 'Webmakerr replaces that complexity with one unified system — faster, smarter, and managed for you.',
                ),
                array(
                    'icon'        => 'repeat',
                    'title'       => 'Predictable growth',
                    'description' => 'From fragmented tools to a managed ecosystem — Webmakerr turns operational noise into predictable growth.',
                ),
            );

            ?>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
              <?php foreach ($transformation_moments as $moment) : ?>
                <div class="flex items-start gap-4 rounded-[5px] border border-zinc-200 bg-white p-5 shadow-sm">
                  <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary">
                    <?php
                    // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    echo marketing_business_render_icon($moment['icon']);
                    ?>
                  </span>
                  <div class="flex flex-col gap-1 text-left">
                    <p class="text-sm font-semibold text-zinc-950 sm:text-base"><?php echo esc_html($moment['title']); ?></p>
                    <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7"><?php echo esc_html($moment['description']); ?></p>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="overflow-hidden rounded-[6px] border border-zinc-200 bg-white shadow-sm">
              <div class="overflow-x-auto">
                <table class="min-w-full border-collapse text-left">
                  <thead class="bg-light/70 text-xs font-semibold uppercase tracking-[0.26em] text-zinc-500">
                    <tr>
                      <th class="px-6 py-4 align-bottom">Before</th>
                      <th class="px-6 py-4 align-bottom">After with Webmakerr</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-zinc-200 text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7">
                    <tr>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">Tech Stack</p>
                        <p>12 plugins / 5 dashboards</p>
                      </td>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">Tech Stack</p>
                        <p>One unified platform</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">Performance</p>
                        <p>Slow loads, fragile uptime</p>
                      </td>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">Performance</p>
                        <p>Global CDN (170 edge servers) — &lt;1.5 s worldwide</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">SEO Visibility</p>
                        <p>Manual plugins &amp; guesswork</p>
                      </td>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">SEO Visibility</p>
                        <p>Built-in AI SEO Suite with live audits</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">Tracking &amp; Analytics</p>
                        <p>Paid pixel tools ($39 / mo)</p>
                      </td>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">Tracking &amp; Analytics</p>
                        <p>Server-Side Marketing Pixel — included</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">Maintenance</p>
                        <p>You handle backups &amp; security</p>
                      </td>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">Maintenance</p>
                        <p>Our team manages hosting, security &amp; backups</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">Customization</p>
                        <p>Hire developers hourly</p>
                      </td>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">Customization</p>
                        <p>Flat-rate custom feature development</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">Monthly Cost</p>
                        <p>$300–$500 in add-ons</p>
                      </td>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">Monthly Cost</p>
                        <p>Starts at $29 / mo — all built in</p>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">Scalability</p>
                        <p>Manual fixes &amp; plugin bloat</p>
                      </td>
                      <td class="px-6 py-4">
                        <p class="font-medium text-zinc-950">Scalability</p>
                        <p>Cloud uptime 99.9 %, zero conflicts</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="border-t border-zinc-200 bg-white py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-4xl flex-col gap-6 text-center">
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              Why Webmakerr Wins Where Others Stop
            </h2>
            <p class="text-base leading-7 text-zinc-600 sm:text-lg">We engineered Webmakerr to deliver enterprise reliability with the simplicity of a managed service.</p>
          </div>
          <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php
            $transformation_features = array(
                array(
                    'icon' => '🧩',
                    'title' => 'A True Platform — Not a Patchwork',
                    'body'  => 'Most “all-in-ones” glue plugins together. Webmakerr is engineered as one ecosystem — one core, one logic, one design language.',
                ),
                array(
                    'icon' => '☁️',
                    'title' => 'Global Cloud + Managed Reliability',
                    'body'  => 'Your business runs on our distributed cloud. We handle security, updates, and daily backups, so you never worry about uptime again.',
                ),
                array(
                    'icon' => '🎯',
                    'title' => 'Server-Side Pixel — Included',
                    'body'  => 'Track every conversion accurately, bypass browser blocks, and save $39 per month — built in by default.',
                ),
                array(
                    'icon' => '🔍',
                    'title' => 'SEO Intelligence Built In',
                    'body'  => 'AI-powered audits, live scoring, and automatic optimization keep every page ranking at its best.',
                ),
                array(
                    'icon' => '⚙️',
                    'title' => 'Custom Solutions on Demand',
                    'body'  => 'Need a feature or integration? Our engineers build it at a flat rate — no hourly surprises.',
                ),
                array(
                    'icon' => '🔒',
                    'title' => 'You Own It',
                    'body'  => 'Built on WordPress. Open-source. Secure. Yours forever. Your data, your control, your advantage.',
                ),
            );

            foreach ($transformation_features as $feature) :
                ?>
                <div class="flex h-full flex-col gap-4 rounded-[5px] border border-zinc-200 bg-white p-6 text-left shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                  <span class="text-3xl" aria-hidden="true"><?php echo esc_html($feature['icon']); ?></span>
                  <p class="text-base font-semibold text-zinc-950 sm:text-lg"><?php echo esc_html($feature['title']); ?></p>
                  <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7"><?php echo esc_html($feature['body']); ?></p>
                </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="border-t border-zinc-200 bg-slate-50 py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-4xl flex-col gap-6 text-center">
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              Everything Inside One Platform — One Flow from Visitor to Revenue
            </h2>
            <p class="text-base leading-7 text-zinc-600 sm:text-lg">
              Your business doesn’t run in pieces — it runs in motion. Webmakerr connects every stage of that motion, so when a visitor lands on your site, every system already knows what to do next.
            </p>
          </div>
          <div class="mt-12 grid gap-6 lg:grid-cols-2">
            <?php
            $ecosystem_modules = array(
                array(
                    'title' => 'Module 1 — WebBuilder: Where It All Begins',
                    'body'  => 'Create stunning, ultra-responsive websites using custom designs or industry-grade templates. Every site is SEO-ready, globally cached, and integrated with CRM and analytics. You attract attention. Webmakerr turns it into opportunity.',
                ),
                array(
                    'title' => 'Module 2 — WebCRM: Turn Visitors into Relationships',
                    'body'  => 'Every form, chat, or lead is captured instantly. WebCRM tracks engagement, scores intent, and launches automated follow-ups that fill your pipeline. You got the lead. The relationship starts here.',
                ),
                array(
                    'title' => 'Module 3 — WebBooking: From Interest to Interaction',
                    'body'  => 'Prospects can schedule demos, consultations, or services directly from your site. Bookings sync automatically with CRM pipelines and calendars. Your calendar fills itself — hands-free.',
                ),
                array(
                    'title' => 'Module 4 — WebCart + WebCommerce: From Offer to Order',
                    'body'  => 'Sell anything — physical products, digital downloads, subscriptions, or license keys. WebCommerce connects sales with CRM, analytics, and support. Revenue in. Data synced. Growth automated.',
                ),
                array(
                    'title' => 'Module 5 — WebBoard: From Sale to Delivery',
                    'body'  => 'Once payment clears, WebBoard automatically launches projects and assigns tasks. Deadlines, progress, and communications all stay connected to the same client record. Delivery runs smoothly. Clients stay confident.',
                ),
                array(
                    'title' => 'Module 6 — WebSupport: From Questions to Loyalty',
                    'body'  => 'Every ticket, chat, and conversation links back to a customer’s order or project. Agents have full context, which means faster, friendlier support. Retention becomes your new growth channel.',
                ),
                array(
                    'title' => 'Module 7 — WebAffiliate: Turn Customers into Promoters',
                    'body'  => 'Empower happy clients to refer new business. WebAffiliate automates tracking, payouts, and performance reports. Your customers become your best marketers.',
                ),
                array(
                    'title' => 'Module 8 — WebSEO: Always Found, Always Fast',
                    'body'  => 'WebSEO audits and optimizes every page with AI — paired with our global edge network (170+ nodes) for instant delivery. Visibility and speed — built into every pixel.',
                ),
                array(
                    'title' => 'Module 9 — WebPixel: Every Click, Accurately Counted',
                    'body'  => 'Our server-side tracking ensures every conversion and campaign is recorded correctly. No browser blockers. No lost data. Finally, analytics you can trust.',
                ),
                array(
                    'title' => 'Module 10 — Managed Cloud: Always Secure, Always Updated',
                    'body'  => 'Your system runs on enterprise-grade infrastructure, monitored and maintained 24/7 by our team. Automatic updates, daily backups, and layered protection — no maintenance required. Zero downtime. Total peace of mind.',
                ),
                array(
                    'title' => 'Module 11 — Custom Solutions: Built for You',
                    'body'  => 'Need something unique? Our engineers build and integrate it at a simple flat rate — fast, affordable, and fully tested. Your platform evolves as your business grows.',
                ),
            );

            foreach ($ecosystem_modules as $module) :
                ?>
                <div class="flex h-full flex-col gap-3 rounded-[5px] border border-zinc-200 bg-white p-6 text-left shadow-sm">
                  <p class="text-base font-semibold text-zinc-950 sm:text-lg"><?php echo esc_html($module['title']); ?></p>
                  <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7"><?php echo esc_html($module['body']); ?></p>
                </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-12 flex justify-center">
            <a class="btn-main inline-flex items-center justify-center px-6 py-3 text-base font-medium" href="#">
              Explore the Webmakerr Ecosystem →
            </a>
          </div>
        </div>
      </section>

      <section class="border-t border-zinc-200 bg-white py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-4xl flex-col gap-6 text-center">
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              How to Get Started with Webmakerr
            </h2>
            <p class="text-base leading-7 text-zinc-600 sm:text-lg">
              We keep onboarding simple and personal. Here’s how it works in four steps:
            </p>
          </div>
          <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <?php
            $onboarding_steps = array(
                array(
                    'number' => '1️⃣',
                    'title'  => 'Connect',
                    'body'   => 'Create your account and link your WordPress site.',
                ),
                array(
                    'number' => '2️⃣',
                    'title'  => 'Configure',
                    'body'   => 'Choose modules and import your existing data automatically.',
                ),
                array(
                    'number' => '3️⃣',
                    'title'  => 'Launch',
                    'body'   => 'Our team provisions your system on the Webmakerr Cloud and runs initial optimizations.',
                ),
                array(
                    'number' => '4️⃣',
                    'title'  => 'Scale',
                    'body'   => 'Automate your workflows and watch your business run in sync.',
                ),
            );

            foreach ($onboarding_steps as $step) :
                ?>
                <div class="flex h-full flex-col gap-3 rounded-[5px] border border-zinc-200 bg-white p-6 text-left shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                  <span class="text-3xl" aria-hidden="true"><?php echo esc_html($step['number']); ?></span>
                  <p class="text-base font-semibold text-zinc-950 sm:text-lg"><?php echo esc_html($step['title']); ?></p>
                  <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7"><?php echo esc_html($step['body']); ?></p>
                </div>
            <?php endforeach; ?>
          </div>
          <div class="mx-auto mt-10 flex max-w-3xl flex-col items-center gap-3 text-center">
            <p class="text-sm font-medium uppercase tracking-[0.24em] text-primary">
              Most users are fully operational within 48 hours.
            </p>
            <a class="btn-main inline-flex items-center justify-center px-6 py-3 text-base font-medium" href="#">
              Start Free Setup →
            </a>
          </div>
        </div>
      </section>

      <section class="border-t border-zinc-200 bg-slate-50 py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="grid gap-12 lg:grid-cols-[0.9fr_1.1fr]">
            <div class="flex flex-col gap-4">
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
              <p class="text-base leading-7 text-zinc-600 sm:text-lg">
                We believe technology should simplify growth — not slow it down. That’s why we handle infrastructure so you can focus on innovation, customers, and results.
              </p>
            </div>
            <div class="grid gap-4">
              <?php
              $mission_values = array(
                  array(
                      'icon' => 'smile',
                      'title' => 'People-first support',
                      'description' => 'Our team actively monitors performance and steps in before issues impact your customers.',
                  ),
                  array(
                      'icon' => 'check',
                      'title' => 'Operational certainty',
                      'description' => 'Predictable infrastructure and proactive maintenance eliminate guesswork around launches.',
                  ),
                  array(
                      'icon' => 'zap',
                      'title' => 'Velocity with control',
                      'description' => 'Ship new campaigns fast while knowing every module still performs at enterprise standards.',
                  ),
              );

              foreach ($mission_values as $value) :
                  ?>
                  <div class="flex items-start gap-4 rounded-[5px] border border-zinc-200 bg-slate-50 p-5 shadow-sm">
                    <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary">
                      <?php
                      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                      echo marketing_business_render_icon($value['icon']);
                      ?>
                    </span>
                    <div class="flex flex-col gap-1">
                      <p class="text-sm font-semibold text-zinc-950 sm:text-base"><?php echo esc_html($value['title']); ?></p>
                      <p class="text-sm leading-6 text-zinc-600 sm:text-base sm:leading-7"><?php echo esc_html($value['description']); ?></p>
                    </div>
                  </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>

      <section class="relative overflow-hidden bg-gradient-to-r from-primary/90 via-dark to-dark py-12 lg:py-20">
        <div class="relative mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-3xl flex-col gap-6 text-center text-white">
            <h2 class="text-3xl font-semibold text-white sm:text-4xl">
              <?php esc_html_e('Ready to Run Your Entire Business on One Platform?', 'webmakerr'); ?>
            </h2>
            <p class="text-base leading-7 text-white/80 sm:text-lg">
              <?php esc_html_e('Every Webmakerr setup is personalized, cloud-provisioned, and fully managed by our team. To guarantee performance and support quality, we onboard a limited number of businesses each month.', 'webmakerr'); ?>
            </p>
            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
              <a class="inline-flex items-center justify-center rounded border border-transparent bg-primary px-5 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-primary-dark focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white !no-underline" href="#">
                <?php esc_html_e('Start Free — No Credit Card Needed →', 'webmakerr'); ?>
              </a>
              <a class="inline-flex items-center justify-center rounded border border-white/70 bg-transparent px-5 py-2 text-sm font-semibold text-white transition hover:bg-white/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white !no-underline" href="#">
                <?php esc_html_e('Book a Demo →', 'webmakerr'); ?>
              </a>
            </div>
            <p class="text-sm text-white/70">
              <?php esc_html_e('Join thousands of founders and teams who simplified their operations with Webmakerr. Fewer tools. Faster growth. Real control.', 'webmakerr'); ?>
            </p>
          </div>
        </div>
      </section>
    </article>
  <?php endwhile; ?>
</main>

<?php
get_footer();
?>
