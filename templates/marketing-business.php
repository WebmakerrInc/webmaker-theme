<?php
/**
 * Template Name: Marketing Business
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="flex flex-col bg-white">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('flex flex-col'); ?>>
      <section class="relative overflow-hidden border-b border-zinc-200 bg-gradient-to-b from-white via-white to-light">
        <div class="relative z-10 mx-auto max-w-screen-xl px-6 py-12 lg:px-8 lg:py-20">
          <div class="grid items-center gap-16 lg:grid-cols-[1.1fr_0.9fr]">
            <div class="flex flex-col gap-6">
              <h1 class="text-4xl font-medium tracking-tight [text-wrap:balance] text-zinc-950 sm:text-5xl">
                Stop Managing Plugins. Start Scaling Your Business.
              </h1>
              <div class="flex flex-col gap-4 text-base leading-7 text-zinc-600 sm:text-lg">
                <p>You’ve built something great — but your tech stack is holding you hostage.</p>
                <p>Plugins collide. Updates break. Every “quick fix” adds cost and chaos.</p>
                <p>You spend more time maintaining software than growing your business.</p>
                <p>That ends here.</p>
              </div>
              <div class="mt-10 flex flex-col items-center gap-3 sm:flex-row sm:items-center sm:gap-4">
                <a class="btn-main inline-flex w-full justify-center rounded bg-dark px-4 py-1.5 text-sm font-semibold text-white transition hover:bg-dark/90 !no-underline sm:w-auto" href="#with-webmakerr">
                  Start Free →
                </a>
                <a class="btn-outline inline-flex w-full justify-center rounded border border-zinc-200 px-4 py-1.5 text-sm font-semibold text-zinc-950 transition hover:border-zinc-300 hover:text-zinc-950 !no-underline sm:w-auto" href="#with-webmakerr">
                  Book a Demo →
                </a>
              </div>
              <p class="mt-3 text-xs font-medium text-zinc-500 sm:text-sm">
                Limited onboarding slots available each month.
              </p>
            </div>
            <div class="relative isolate overflow-hidden rounded-[5px] border border-white/60 bg-white/80 p-8 shadow-xl shadow-primary/10 backdrop-blur">
              <div class="absolute -left-16 -top-16 h-48 w-48 rounded-full bg-primary/10 blur-3xl"></div>
              <div class="relative flex flex-col gap-4">
                <p class="text-base leading-7 text-zinc-600 sm:text-lg">
                  Webmakerr unifies everything — your website, CRM, store, projects, support, and analytics — into one managed business platform.
                </p>
                <p class="text-base leading-7 text-zinc-600 sm:text-lg">
                  Fully hosted. Lightning-fast. Designed to scale.
                </p>
                <p class="text-base leading-7 text-zinc-600 sm:text-lg">
                  Powered by our global cloud network (170+ edge locations) and maintained 24/7 by our dedicated team.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="bg-white py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-3xl flex-col gap-6 text-zinc-600">
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              Why Growth Feels Harder Than It Should
            </h2>
            <p class="text-base leading-7 sm:text-lg">You already know what makes your product powerful — but here’s what slows you down:</p>
            <ul class="list-disc space-y-3 pl-6 text-base leading-7 sm:text-lg">
              <li>Fact 1: Disjointed tools create data silos.</li>
              <li>Fact 2: Manual updates risk downtime and errors.</li>
              <li>Fact 3: Every plugin adds another monthly bill.</li>
            </ul>
            <p class="text-base leading-7 sm:text-lg">Your team spends hours fixing issues instead of serving customers.</p>
          </div>
        </div>
      </section>

      <section class="border-t border-b border-zinc-200 bg-light py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-3xl flex-col gap-4 text-center">
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              What Makes (or Breaks) a Website
            </h2>
            <p class="text-base leading-7 text-zinc-600 sm:text-lg">Most websites fail long before the first conversion.</p>
            <p class="text-base leading-7 text-zinc-600 sm:text-lg">Why? Because beneath the design are hidden problems that cost you visitors and sales.</p>
          </div>
          <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex h-full flex-col gap-4 rounded-[5px] border border-zinc-200 bg-white p-6 text-left shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
              <span class="text-3xl">⚡</span>
              <p class="text-sm font-semibold text-zinc-950">Speed: 53% of visitors leave if a site loads in more than 3 seconds.</p>
            </div>
            <div class="flex h-full flex-col gap-4 rounded-[5px] border border-zinc-200 bg-white p-6 text-left shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
              <span class="text-3xl">🧩</span>
              <p class="text-sm font-semibold text-zinc-950">Stability: Each plugin update risks breaking key functions.</p>
            </div>
            <div class="flex h-full flex-col gap-4 rounded-[5px] border border-zinc-200 bg-white p-6 text-left shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
              <span class="text-3xl">🔒</span>
              <p class="text-sm font-semibold text-zinc-950">Security: Cheap add-ons create vulnerabilities hackers love.</p>
            </div>
            <div class="flex h-full flex-col gap-4 rounded-[5px] border border-zinc-200 bg-white p-6 text-left shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
              <span class="text-3xl">📊</span>
              <p class="text-sm font-semibold text-zinc-950">Consistency: When tools don’t share data, your analytics lie.</p>
            </div>
          </div>
          <div class="mx-auto mt-10 max-w-3xl space-y-4 text-base leading-7 text-zinc-600 sm:text-lg">
            <p>A slow, fragile, plugin-heavy site quietly loses revenue every single day.</p>
            <p class="text-zinc-950">Webmakerr fixes the foundation — not just the surface.</p>
          </div>
        </div>
      </section>

      <section class="bg-white py-12 lg:py-20">
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

      <section id="with-webmakerr" class="border-t border-zinc-200 bg-light py-12 lg:py-20">
        <div class="mx-auto max-w-screen-xl px-6 lg:px-8">
          <div class="mx-auto flex max-w-3xl flex-col gap-6 text-center">
            <h2 class="text-3xl font-semibold text-zinc-950 sm:text-4xl">
              Everything You Need — in One Platform
            </h2>
            <div class="space-y-4 text-base leading-7 text-zinc-600 sm:text-lg">
              <p>Cloud hosting, CRM, store, SEO, support, analytics — all included.</p>
              <p>No plugin renewals.</p>
              <p>No integration headaches.</p>
              <p>No extra tools or tracking subscriptions.</p>
              <p>Webmakerr plans start at just $29 / month — including hosting, SEO, automation, backups, and full support.</p>
            </div>
            <div class="mt-6 flex justify-center">
              <a class="btn-main inline-flex items-center justify-center px-6 py-3 text-base font-medium" href="#">
                See How Webmakerr Works →
              </a>
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
