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
?>

<?php
$marketing_business_demo_anchor = '#demo';
$marketing_business_demo_link   = get_permalink(get_page_by_path('book-a-demo'));

if (! $marketing_business_demo_link) {
    $marketing_business_demo_link = get_permalink(get_page_by_path('contact'));
}

if (! $marketing_business_demo_link) {
    $marketing_business_demo_link = home_url('/contact/');
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
                <?php esc_html_e('Turn your digital journey into a revenue engine—without the upkeep.', 'webmakerr'); ?>
              </h1>
              <p class="max-w-2xl text-base leading-7 text-zinc-600 sm:text-lg">
                <?php esc_html_e('Webmakerr keeps every experience fast, on-brand, and conversion-ready while it handles the updates, security, and integrations that usually slow teams down.', 'webmakerr'); ?>
              </p>
              <div class="mt-10 flex flex-col items-center gap-3 sm:flex-row sm:items-center">
                <a class="inline-flex w-full justify-center rounded bg-dark px-4 py-1.5 text-sm font-semibold text-white transition hover:bg-dark/90 !no-underline sm:w-auto" href="<?php echo esc_url($marketing_business_demo_anchor); ?>">
                  <?php esc_html_e('Schedule Your Launch Call →', 'webmakerr'); ?>
                </a>
                <a class="inline-flex w-full justify-center rounded border border-zinc-200 px-4 py-1.5 text-sm font-semibold text-zinc-950 transition hover:border-zinc-300 hover:text-zinc-950 !no-underline sm:w-auto" href="#platform-overview">
                  <?php esc_html_e('See How the Platform Works →', 'webmakerr'); ?>
                </a>
              </div>
              <p class="mt-3 text-xs font-medium text-zinc-500 sm:text-sm">
                <?php esc_html_e('Onboarding cohorts fill quickly—reserve your spot while availability lasts.', 'webmakerr'); ?>
              </p>
            </div>
            <div class="relative isolate overflow-hidden rounded-[5px] border border-white/60 bg-white/80 p-8 shadow-xl shadow-primary/10 backdrop-blur">
              <div class="absolute right-4 top-4 flex items-center gap-2 rounded-full border border-primary/20 bg-white/80 px-3 py-1 text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-primary shadow-sm">
                <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                echo marketing_business_render_icon('target', 'h-4 w-4 text-primary');
                ?>
                <span class="text-primary/80"><?php esc_html_e('Launch-ready in 60 days', 'webmakerr'); ?></span>
              </div>
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
                <div class="rounded-[6px] border border-primary/20 bg-gradient-to-r from-primary/5 via-primary/10 to-transparent p-6 shadow-sm">
                  <div class="flex items-center justify-between text-[0.65rem] font-semibold uppercase tracking-[0.3em] text-primary">
                    <span class="flex items-center gap-2">
                      <?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                      echo marketing_business_render_icon('trending-up', 'h-4 w-4 text-primary');
                      ?>
                      <?php esc_html_e('Adoption momentum', 'webmakerr'); ?>
                    </span>
                    <span class="text-primary/70"><?php esc_html_e('Customer cohorts', 'webmakerr'); ?></span>
                  </div>
                  <div class="mt-4 flex items-center justify-between text-sm font-medium text-zinc-700">
                    <span><?php esc_html_e('Teams fully onboarded', 'webmakerr'); ?></span>
                    <span class="text-lg font-semibold text-zinc-950">78%</span>
                  </div>
                  <div class="mt-3 h-2 w-full overflow-hidden rounded-full bg-white/70">
                    <span class="block h-full w-[78%] rounded-full bg-gradient-to-r from-primary via-primary/80 to-primary/60"></span>
                  </div>
                  <p class="mt-3 text-xs text-zinc-500"><?php esc_html_e('Average adoption within the first 60 days of launch.', 'webmakerr'); ?></p>
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
            <a href="#platform-overview" class="btn-main inline-flex items-center justify-center mt-3 px-8 py-3 font-semibold rounded-[5px] shadow transition transform hover:shadow-lg hover:scale-105 !no-underline">See How Webmakerr Works →</a>
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
                <a class="btn-main inline-flex items-center justify-center px-6 py-3 text-base font-medium" href="#ecosystem">
                  Discover the Managed Platform →
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
              <a class="inline-flex items-center justify-center rounded bg-dark px-5 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-dark/90 !no-underline" href="<?php echo esc_url($marketing_business_demo_anchor); ?>">
                <?php esc_html_e('Book a Demo', 'webmakerr'); ?>
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
              <a class="btn-main inline-flex items-center justify-center px-6 py-3 text-base font-medium" href="<?php echo esc_url($marketing_business_demo_anchor); ?>">
                <?php esc_html_e('Talk with Onboarding →', 'webmakerr'); ?>
              </a>
              <p class="text-xs text-zinc-500 sm:text-sm">
                <?php esc_html_e('Your onboarding team stays on-call to refine automations after go-live.', 'webmakerr'); ?>
              </p>
            </aside>
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
                ?>
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
                <a class="inline-flex w-full items-center justify-center rounded border border-transparent bg-primary px-5 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-primary-dark focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white !no-underline sm:w-auto" href="<?php echo esc_url($marketing_business_demo_link); ?>">
                  <?php esc_html_e('Book a Demo →', 'webmakerr'); ?>
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
