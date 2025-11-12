<?php
/**
 * Template Name: Webmakerr Marketing
 */

if (! defined('ABSPATH')) {
    exit;
}

if (! function_exists('webmakerr_marketing_render_icon')) {
    /**
     * Render select SVG icons for the marketing template.
     */
    function webmakerr_marketing_render_icon($name, $class = 'h-6 w-6')
    {
        $icons = array(
            'layers' => '<polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline>',
            'cloud-download' => '<path d="M8 17l4 4 4-4"></path><path d="M12 12v9"></path><path d="M20 16.58A5 5 0 0 0 18 7h-1.26A8 8 0 1 0 4 15.25"></path>',
            'target' => '<path d="M21 12h1"></path><path d="M12 3v1"></path><path d="M12 20v1"></path><path d="M3 12h1"></path><circle cx="12" cy="12" r="7"></circle><circle cx="12" cy="12" r="3"></circle>',
            'bar-chart' => '<path d="M3 3v18h18"></path><rect x="7" y="8" width="3" height="7" rx="1"></rect><rect x="12" y="5" width="3" height="10" rx="1"></rect><rect x="17" y="12" width="3" height="5" rx="1"></rect>',
            'package' => '<path d="m21 16-9 5-9-5V8l9-5 9 5z"></path><path d="M3.3 7.3 12 12l8.7-4.7"></path><path d="M12 22V12"></path>',
            'key' => '<path d="M21 2l-2 2"></path><path d="M15 8l-2 2"></path><path d="M21 8l-9.8 9.8a4 4 0 1 1-5.7-5.7L15.3 4.3a2 2 0 1 1 2.8 2.8L8 17"></path>'
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

get_header();
?>

<main id="primary" class="flex flex-col bg-white">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('flex flex-col'); ?>>
      <section class="relative overflow-hidden border-b border-zinc-200 bg-gradient-to-b from-white via-white to-light">
        <div class="absolute inset-x-0 top-0 h-72 bg-gradient-to-b from-primary/10 via-white/40 to-transparent blur-3xl"></div>
        <div class="relative z-10 mx-auto max-w-screen-xl px-6 pt-20 pb-24 sm:pb-28 lg:px-8 lg:pt-24 lg:pb-32">
          <div class="mx-auto flex max-w-3xl flex-col gap-6">
            <h1 class="text-4xl font-medium tracking-tight [text-wrap:balance] text-zinc-950 sm:text-5xl">
              Stop Managing Plugins. Start Scaling Your Business.
            </h1>
            <div class="flex flex-col gap-4 text-base leading-7 text-zinc-600 sm:text-lg">
              <p>You’ve built something great — but your stack is holding you hostage.<br />Plugins collide. Updates break. Each new tool adds cost and chaos.<br />You spend more time maintaining software than growing your company.</p>
              <p>That ends here.</p>
              <p>Webmakerr replaces plugin sprawl with one unified business platform —<br />fully managed, lightning-fast, and designed to scale with you.<br />Hosted on our global cloud network (170+ edge locations), optimized for SEO, tracking, and uptime, and supported by a dedicated team that keeps it running 24/7.</p>
            </div>
            <div class="mt-10 flex flex-col items-center gap-3 sm:flex-row sm:items-center sm:gap-4">
              <a class="btn-main inline-flex w-full justify-center rounded bg-dark px-4 py-1.5 text-sm font-semibold text-white transition hover:bg-dark/90 !no-underline sm:w-auto" href="#cta-final">
                Start Free →
              </a>
              <a class="btn-outline inline-flex w-full justify-center rounded border border-zinc-200 px-4 py-1.5 text-sm font-semibold text-zinc-950 transition hover:border-zinc-300 hover:text-zinc-950 !no-underline sm:w-auto" href="#cta-final">
                Book a Demo →
              </a>
            </div>
            <p class="mt-3 text-xs font-medium text-zinc-500 sm:text-sm">
              Limited onboarding slots available each month.
            </p>
          </div>
        </div>
      </section>

      <section id="pain-points" class="border-b border-zinc-200 bg-white py-16 sm:py-20 lg:py-24">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-3xl flex-col gap-6 text-zinc-600">
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              Why Most Businesses Struggle to Scale
            </h2>
            <p class="text-base leading-7 sm:text-lg">You already know what makes your product powerful.</p>
            <p class="text-base leading-7 sm:text-lg">But here’s what slows your growth:</p>
            <ul class="list-disc space-y-3 pl-6 text-base leading-7 sm:text-lg">
              <li><span class="font-semibold text-zinc-950">Fact 1:</span> Disjointed tools create data silos.</li>
              <li><span class="font-semibold text-zinc-950">Fact 2:</span> Manual updates risk downtime and errors.</li>
              <li><span class="font-semibold text-zinc-950">Fact 3:</span> Every plugin adds another monthly bill.</li>
            </ul>
            <p class="text-base leading-7 sm:text-lg">Result:</p>
            <p class="text-base leading-7 sm:text-lg">Your team spends hours fixing problems instead of creating progress.</p>
          </div>
        </div>
      </section>

      <section id="transformation" class="border-b border-zinc-200 bg-light/60 py-16 sm:py-20 lg:py-24">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-4xl flex-col gap-6 text-zinc-600">
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              The Webmakerr Transformation
            </h2>
            <h3 class="text-2xl font-semibold text-zinc-950">
              From Chaos to Clarity — From Cost to Control
            </h3>
            <div class="mt-10 hidden overflow-hidden rounded-[6px] border border-zinc-200 bg-white shadow-sm md:block">
              <table class="w-full border-collapse text-left">
                <thead class="bg-light/70 text-xs font-semibold uppercase tracking-[0.26em] text-zinc-500">
                  <tr>
                    <th class="px-6 py-4 align-bottom">&nbsp;</th>
                    <th class="px-6 py-4 align-bottom">Before</th>
                    <th class="px-6 py-4 align-bottom">After with Webmakerr</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 text-base leading-7 text-zinc-600">
                  <tr>
                    <th scope="row" class="px-6 py-5 text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500">Tech Stack</th>
                    <td class="px-6 py-5">12 plugins / 5 dashboards</td>
                    <td class="px-6 py-5">One unified platform</td>
                  </tr>
                  <tr>
                    <th scope="row" class="px-6 py-5 text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500">Performance</th>
                    <td class="px-6 py-5">Slow loads, fragile uptime</td>
                    <td class="px-6 py-5">Global CDN – 170 edge servers – &lt; 1.5 s worldwide</td>
                  </tr>
                  <tr>
                    <th scope="row" class="px-6 py-5 text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500">SEO Visibility</th>
                    <td class="px-6 py-5">Add-ons &amp; guesswork</td>
                    <td class="px-6 py-5">Built-in AI SEO Suite with live audits</td>
                  </tr>
                  <tr>
                    <th scope="row" class="px-6 py-5 text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500">Tracking &amp; Analytics</th>
                    <td class="px-6 py-5">Paid pixel tools ($39 / mo)</td>
                    <td class="px-6 py-5">Server-Side Marketing Pixel — included</td>
                  </tr>
                  <tr>
                    <th scope="row" class="px-6 py-5 text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500">Maintenance</th>
                    <td class="px-6 py-5">You handle backups &amp; security</td>
                    <td class="px-6 py-5">Our team manages cloud, security &amp; daily backups</td>
                  </tr>
                  <tr>
                    <th scope="row" class="px-6 py-5 text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500">Customization</th>
                    <td class="px-6 py-5">Hire developers hourly</td>
                    <td class="px-6 py-5">Flat-rate custom feature development</td>
                  </tr>
                  <tr>
                    <th scope="row" class="px-6 py-5 text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500">Monthly Cost</th>
                    <td class="px-6 py-5">$300–$500 in plugins + SaaS</td>
                    <td class="px-6 py-5">Starts at $49 / mo — all built in</td>
                  </tr>
                  <tr>
                    <th scope="row" class="px-6 py-5 text-sm font-semibold uppercase tracking-[0.2em] text-zinc-500">Scalability</th>
                    <td class="px-6 py-5">Manual fixes &amp; bloat</td>
                    <td class="px-6 py-5">Cloud-native uptime 99.9 %, zero conflicts</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="mt-10 grid gap-6 md:hidden">
              <div class="rounded-[6px] border border-zinc-200 bg-white p-6 shadow-sm">
                <h4 class="text-lg font-semibold text-zinc-950">Tech Stack</h4>
                <p class="mt-3 text-zinc-600">Before: 12 plugins / 5 dashboards</p>
                <p class="mt-1 text-zinc-950">After with Webmakerr: One unified platform</p>
              </div>
              <div class="rounded-[6px] border border-zinc-200 bg-white p-6 shadow-sm">
                <h4 class="text-lg font-semibold text-zinc-950">Performance</h4>
                <p class="mt-3 text-zinc-600">Before: Slow loads, fragile uptime</p>
                <p class="mt-1 text-zinc-950">After with Webmakerr: Global CDN – 170 edge servers – &lt; 1.5 s worldwide</p>
              </div>
              <div class="rounded-[6px] border border-zinc-200 bg-white p-6 shadow-sm">
                <h4 class="text-lg font-semibold text-zinc-950">SEO Visibility</h4>
                <p class="mt-3 text-zinc-600">Before: Add-ons &amp; guesswork</p>
                <p class="mt-1 text-zinc-950">After with Webmakerr: Built-in AI SEO Suite with live audits</p>
              </div>
              <div class="rounded-[6px] border border-zinc-200 bg-white p-6 shadow-sm">
                <h4 class="text-lg font-semibold text-zinc-950">Tracking &amp; Analytics</h4>
                <p class="mt-3 text-zinc-600">Before: Paid pixel tools ($39 / mo)</p>
                <p class="mt-1 text-zinc-950">After with Webmakerr: Server-Side Marketing Pixel — included</p>
              </div>
              <div class="rounded-[6px] border border-zinc-200 bg-white p-6 shadow-sm">
                <h4 class="text-lg font-semibold text-zinc-950">Maintenance</h4>
                <p class="mt-3 text-zinc-600">Before: You handle backups &amp; security</p>
                <p class="mt-1 text-zinc-950">After with Webmakerr: Our team manages cloud, security &amp; daily backups</p>
              </div>
              <div class="rounded-[6px] border border-zinc-200 bg-white p-6 shadow-sm">
                <h4 class="text-lg font-semibold text-zinc-950">Customization</h4>
                <p class="mt-3 text-zinc-600">Before: Hire developers hourly</p>
                <p class="mt-1 text-zinc-950">After with Webmakerr: Flat-rate custom feature development</p>
              </div>
              <div class="rounded-[6px] border border-zinc-200 bg-white p-6 shadow-sm">
                <h4 class="text-lg font-semibold text-zinc-950">Monthly Cost</h4>
                <p class="mt-3 text-zinc-600">Before: $300–$500 in plugins + SaaS</p>
                <p class="mt-1 text-zinc-950">After with Webmakerr: Starts at $49 / mo — all built in</p>
              </div>
              <div class="rounded-[6px] border border-zinc-200 bg-white p-6 shadow-sm">
                <h4 class="text-lg font-semibold text-zinc-950">Scalability</h4>
                <p class="mt-3 text-zinc-600">Before: Manual fixes &amp; bloat</p>
                <p class="mt-1 text-zinc-950">After with Webmakerr: Cloud-native uptime 99.9 %, zero conflicts</p>
              </div>
            </div>
            <p class="mt-8 text-center text-sm font-medium text-zinc-500">From fragmented tools to a managed ecosystem — Webmakerr turns operational noise into predictable growth.</p>
          </div>
        </div>
      </section>

      <section id="why-webmakerr" class="border-b border-zinc-200 bg-white py-16 sm:py-20 lg:py-24">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-3xl flex-col gap-4 text-center">
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              Why Webmakerr Wins
            </h2>
          </div>
          <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <div class="flex h-full flex-col gap-4 rounded-[5px] border border-zinc-200 bg-white p-6 text-left shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-lg">
              <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary"><?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
              echo webmakerr_marketing_render_icon('layers', 'h-5 w-5'); ?></span>
              <h3 class="text-xl font-semibold text-zinc-950">A True Platform — Not a Patchwork</h3>
              <p class="text-sm leading-6 text-zinc-600">Most “all-in-ones” glue plugins together.<br />Webmakerr is architected as one system — a shared database, shared logic, shared design language.</p>
            </div>
            <div class="flex h-full flex-col gap-4 rounded-[5px] border border-zinc-200 bg-white p-6 text-left shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-lg">
              <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary"><?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
              echo webmakerr_marketing_render_icon('cloud-download', 'h-5 w-5'); ?></span>
              <h3 class="text-xl font-semibold text-zinc-950">Global Cloud + Managed Reliability</h3>
              <p class="text-sm leading-6 text-zinc-600">Your business runs on our distributed cloud.<br />We handle security, monitoring, and daily backups so you never worry about uptime again.</p>
            </div>
            <div class="flex h-full flex-col gap-4 rounded-[5px] border border-zinc-200 bg-white p-6 text-left shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-lg">
              <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary"><?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
              echo webmakerr_marketing_render_icon('target', 'h-5 w-5'); ?></span>
              <h3 class="text-xl font-semibold text-zinc-950">Server-Side Marketing Pixel — Included</h3>
              <p class="text-sm leading-6 text-zinc-600">Track every conversion accurately, bypass browser blocks, and save $39 per month — built in by default.</p>
            </div>
            <div class="flex h-full flex-col gap-4 rounded-[5px] border border-zinc-200 bg-white p-6 text-left shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-lg">
              <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary"><?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
              echo webmakerr_marketing_render_icon('bar-chart', 'h-5 w-5'); ?></span>
              <h3 class="text-xl font-semibold text-zinc-950">SEO Intelligence Built In</h3>
              <p class="text-sm leading-6 text-zinc-600">AI-powered audits, live scoring, and automatic optimization keep every page ranking at its best.</p>
            </div>
            <div class="flex h-full flex-col gap-4 rounded-[5px] border border-zinc-200 bg-white p-6 text-left shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-lg">
              <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary"><?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
              echo webmakerr_marketing_render_icon('package', 'h-5 w-5'); ?></span>
              <h3 class="text-xl font-semibold text-zinc-950">Custom Solutions on Demand</h3>
              <p class="text-sm leading-6 text-zinc-600">Need an integration or workflow?<br />Our engineers build it at a simple flat rate — no hourly invoices, no hidden costs.</p>
            </div>
            <div class="flex h-full flex-col gap-4 rounded-[5px] border border-zinc-200 bg-white p-6 text-left shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-lg">
              <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary"><?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
              echo webmakerr_marketing_render_icon('key', 'h-5 w-5'); ?></span>
              <h3 class="text-xl font-semibold text-zinc-950">You Own It</h3>
              <p class="text-sm leading-6 text-zinc-600">Webmakerr runs on WordPress — open-source, secure, and fully yours.<br />Your data, your code, your control.</p>
            </div>
          </div>
        </div>
      </section>

      <div class="wm-container mx-auto px-6 md:px-12 lg:px-24">

        <section id="ecosystem" class="py-16 md:py-24 border-b border-gray-100">
          <div class="max-w-4xl text-gray-700">
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-900">
              Everything Inside One Platform — One Flow from Visitor to Revenue
            </h2>
            <p class="mt-6 text-lg">Your business doesn’t run in parts — it runs in motion.</p>
            <p class="mt-3 text-lg">Webmakerr connects every stage of that motion, so the moment a visitor lands on your site, your system already knows what to do next.</p>
            <p class="mt-6 text-lg">Here’s how the journey unfolds inside Webmakerr:</p>
            <div class="mt-8 space-y-10">
              <div>
                <h3 class="text-2xl font-semibold text-gray-900">1. WebBuilder — Where It All Begins</h3>
                <p class="mt-4">Your brand deserves more than a theme.<br />WebBuilder lets you create beautiful, ultra-responsive websites using custom designs or world-class templates from our library.<br />Every site is SEO-ready, globally cached, and integrated with CRM and analytics — so design becomes performance.<br />You attract attention. Webmakerr turns it into opportunity.</p>
              </div>
              <div>
                <h3 class="text-2xl font-semibold text-gray-900">2. WebCRM — Turn Visitors into Relationships</h3>
                <p class="mt-4">Every click and form submission instantly becomes a lead inside WebCRM.<br />It tracks activity, scores engagement, and launches automated nurture flows that keep your pipeline full and organized.<br />No lost leads. No manual follow-ups.<br />You got the lead. The relationship starts here.</p>
              </div>
              <div>
                <h3 class="text-2xl font-semibold text-gray-900">3. WebBooking — From Interest to Conversation</h3>
                <p class="mt-4">When prospects are ready to talk, WebBooking removes the friction.<br />They can schedule demos, calls, or sessions directly on your site.<br />Each booking syncs with CRM and pipelines automatically.<br />Your calendar fills itself — hands-free.</p>
              </div>
              <div>
                <h3 class="text-2xl font-semibold text-gray-900">4. WebCart + WebCommerce — From Offer to Order</h3>
                <p class="mt-4">When it’s time to buy, WebCommerce powers the checkout.<br />Sell physical goods, digital products, subscriptions, or license keys — all from one secure cart.<br />Orders flow into CRM, analytics, and support instantly.<br />Revenue in. Data synced. Growth automated.</p>
              </div>
              <div>
                <h3 class="text-2xl font-semibold text-gray-900">5. WebBoard — From Sale to Delivery</h3>
                <p class="mt-4">As soon as payment clears, WebBoard launches projects and tasks automatically.<br />Milestones, progress, and deadlines stay tied to each client’s record.<br />Your team always knows what’s next — and so do your customers.<br />Delivery runs smoothly. Clients stay confident.</p>
              </div>
              <div>
                <h3 class="text-2xl font-semibold text-gray-900">6. WebSupport — From Questions to Loyalty</h3>
                <p class="mt-4">When customers need help, WebSupport connects every ticket to their history.<br />Agents see purchases, projects, and prior chats in one view.<br />Fast, contextual service turns satisfaction into retention.<br />Retention is your new growth channel.</p>
              </div>
              <div>
                <h3 class="text-2xl font-semibold text-gray-900">7. WebAffiliate — Turn Customers into Promoters</h3>
                <p class="mt-4">Happy clients refer new ones.<br />WebAffiliate automates tracking, payouts, and performance reporting — so your customer base becomes a built-in sales force.<br />Your customers become your best marketers.</p>
              </div>
              <div>
                <h3 class="text-2xl font-semibold text-gray-900">8. WebSEO — Always Found. Always Fast.</h3>
                <p class="mt-4">While you grow, WebSEO keeps you visible.<br />AI-driven audits and keyword tracking optimize every page automatically, while our global CDN (170+ edge servers) delivers instant load times worldwide.<br />Speed and visibility — built into every pixel.</p>
              </div>
              <div>
                <h3 class="text-2xl font-semibold text-gray-900">9. WebPixel — Every Click, Accurately Counted</h3>
                <p class="mt-4">Our server-side tracking captures every interaction — even when browsers block scripts.<br />Every sale, signup, and campaign flows into one analytics hub, giving you 100 % accurate data.<br />Finally, reliable insights that actually drive decisions.</p>
              </div>
              <div>
                <h3 class="text-2xl font-semibold text-gray-900">10. Managed Cloud — Always Secure, Always Updated</h3>
                <p class="mt-4">Your platform runs on enterprise-grade cloud infrastructure — managed by our team 24 / 7.<br />We handle hosting, backups, monitoring, and performance tuning so you never lift a finger.<br />Zero downtime. Zero maintenance. Total confidence.</p>
              </div>
              <div>
                <h3 class="text-2xl font-semibold text-gray-900">11. Custom Solutions — Because No Two Businesses Are Alike</h3>
                <p class="mt-4">Need a new feature or integration?<br />Our engineers build it for you at a transparent flat rate, fully integrated and tested inside your Webmakerr system.<br />Your platform evolves as your business does.</p>
              </div>
            </div>
          </div>
        </section>

        <section id="global-performance" class="py-16 md:py-24 border-b border-gray-100">
          <div class="max-w-3xl text-gray-700">
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-900">
              Global Performance. Enterprise Reliability.
            </h2>
            <p class="mt-6 text-lg">Your audience is worldwide — and so is your infrastructure.</p>
            <p class="mt-3 text-lg">Webmakerr’s cloud edge network spans 170 cities with automated scaling, advanced caching, and 99.9 % uptime.</p>
            <ul class="mt-6 space-y-2 text-lg list-disc list-inside">
              <li>&lt; 1.5 s average global load time</li>
              <li>Daily backups &amp; proactive security</li>
              <li>GDPR-ready encryption</li>
              <li>Real-time performance analytics</li>
            </ul>
            <p class="mt-6 text-lg">Speed isn’t a feature — it’s the foundation.</p>
            <div class="mt-8">
              <a href="#cta-final" class="btn-outline inline-flex items-center justify-center px-6 py-3 text-base font-medium">
                Launch on Webmakerr Cloud →
              </a>
            </div>
          </div>
        </section>

        <section id="testimonials" class="py-16 md:py-24 border-b border-gray-100">
          <div class="max-w-3xl text-gray-700 space-y-8">
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-900">
              Results That Speak
            </h2>
            <blockquote class="border-l-4 border-gray-200 pl-6 text-lg text-gray-800">
              <p>“We cut onboarding time by 60 % and boosted conversions by 30 %. Everything finally works together.”</p>
              <footer class="mt-3 text-base text-gray-600">— Nia Patel, Agency Principal, GrowSuite</footer>
            </blockquote>
            <blockquote class="border-l-4 border-gray-200 pl-6 text-lg text-gray-800">
              <p>“Our sites load twice as fast, and support tickets dropped 40 %.”</p>
              <footer class="mt-3 text-base text-gray-600">— Elena Rossi, Head of Ops, Alpha Collective</footer>
            </blockquote>
            <blockquote class="border-l-4 border-gray-200 pl-6 text-lg text-gray-800">
              <p>“Webmakerr replaced seven plugins and three SaaS tools in a week.”</p>
              <footer class="mt-3 text-base text-gray-600">— Casey Morgan, Founder, Meridian Labs</footer>
            </blockquote>
            <p class="text-lg text-gray-700">Trusted by 10 000 + professionals who chose clarity over chaos.</p>
            <a href="#cta-final" class="btn-outline inline-flex items-center justify-center px-6 py-3 text-base font-medium">
              See Case Studies →
            </a>
          </div>
        </section>

        <section id="how-it-works" class="py-16 md:py-24 border-b border-gray-100">
          <div class="max-w-3xl text-gray-700 space-y-6">
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-900">
              How It Works
            </h2>
            <div class="space-y-4 text-lg">
              <p>Step 1 — Connect Create your account and link your site.</p>
              <p>Step 2 — Configure Pick modules and import data automatically.</p>
              <p>Step 3 — Launch Our team provisions your system on the cloud.</p>
              <p>Step 4 — Scale Automate workflows and grow with confidence.</p>
            </div>
            <a href="#cta-final" class="btn-main inline-flex items-center justify-center px-6 py-3 text-base font-medium">
              Start Free Setup →
            </a>
          </div>
        </section>

        <section id="mission" class="py-16 md:py-24 border-b border-gray-100">
          <div class="max-w-3xl text-gray-700 space-y-6">
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-900">
              Our Mission
            </h2>
            <p class="text-lg">“We built Webmakerr after watching businesses waste hours managing tools that never talked to each other.<br />Growth should be automatic, scalable, and fully owned.”</p>
            <p class="text-lg">—Roma Tietz, Creator of Webmakerr</p>
          </div>
        </section>

        <section id="cta-final" class="py-16 md:py-24 border-b border-gray-100">
          <div class="max-w-3xl text-gray-700 space-y-6">
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-900">
              Limited Onboarding Each Month
            </h2>
            <p class="text-lg">Because every Webmakerr system is personalized, cloud-provisioned, and managed by our team, onboarding slots are limited.</p>
            <p class="text-lg">Secure yours before capacity fills.</p>
            <div class="space-y-4 text-center sm:text-left">
              <a href="#" class="btn-main inline-flex w-full sm:w-auto items-center justify-center px-6 py-3 text-base font-medium">
                Start Free — No Credit Card Needed
              </a>
              <p class="text-lg">or</p>
              <a href="#" class="btn-outline inline-flex w-full sm:w-auto items-center justify-center px-6 py-3 text-base font-medium">
                Book a Demo →
              </a>
            </div>
          </div>
        </section>
      </div>
    </article>
  <?php endwhile; ?>
</main>

<?php
get_footer();
