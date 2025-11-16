<?php
/**
 * Template Name: Landing Page
 * Description: Custom landing page highlighting the $1 Webmakerr trial.
 *
 * @package Webmakerr
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<style>
/********************************************
 * Landing Page – custom CSS helpers
 ********************************************/
@keyframes skeleton {
  0% { background-position:-200px 0; }
  100% { background-position:200px 0; }
}
.skeleton {
  background-image:linear-gradient(90deg,#e5e7eb 0%,#fafafa 50%,#e5e7eb 100%);
  background-size:400px 100%;
  animation:skeleton 1.2s infinite linear;
}
.demo-slide { position:absolute; inset:0; opacity:0; transition:opacity .6s ease-in-out; pointer-events:none; }
.demo-slide.active { opacity:1; z-index:2; }
.day { height:32px; background:#e5e7eb; border-radius:6px; font-size:12px; display:flex; align-items:center; justify-content:center; opacity:0; transform:translateY(6px) scale(.96); animation:dayFade .45s forwards ease-out; }
@keyframes dayFade { to { opacity:1; transform:translateY(0) scale(1); } }
.book-mouse { width:8px; height:8px; background:#111; border-radius:50%; position:absolute; z-index:50; top:60px; left:50px; transform:translate(-50%,-50%); animation:bookCursor 6s infinite ease-in-out; }
@keyframes bookCursor {
  0%   { top:60px; left:50px; }
  20%  { top:155px; left:160px; }
  30%  { top:155px; left:160px; }
  45%  { top:110px; left:140px; }
  55%  { top:175px; left:160px; }
  65%  { top:175px; left:160px; }
  100% { top:60px; left:50px; }
}
.book-click { width:14px; height:14px; border:2px solid #111; border-radius:50%; position:absolute; top:155px; left:160px; opacity:0; transform:translate(-50%,-50%) scale(.4); animation:bookClick 6s infinite ease-in-out; }
@keyframes bookClick {
  0%,18% { opacity:0; }
  20% { opacity:1; transform:scale(1); }
  28% { opacity:0; transform:scale(1.6); }
  100%{ opacity:0; }
}
.book-form { position:absolute; bottom:20px; left:50%; transform:translateX(-50%) translateY(20px); width:80%; background:white; border:1px solid #e5e7eb; border-radius:10px; padding:12px; box-shadow:0 4px 20px rgba(0,0,0,0.08); opacity:0; animation:formIn 6s infinite ease; }
@keyframes formIn {
  0%,28% { opacity:0; transform:translateX(-50%) translateY(20px); }
  30%,50% { opacity:1; transform:translateX(-50%) translateY(0); }
  52%,100% { opacity:0; }
}
.book-success { position:absolute; bottom:120px; left:50%; transform:translateX(-50%); padding:6px 12px; background:#10b981; color:white; font-size:12px; border-radius:6px; opacity:0; animation:bookSuccess 6s infinite ease-out; }
@keyframes bookSuccess { 0%,50%{ opacity:0; } 52%,75%{ opacity:1; } 80%,100%{ opacity:0; } }
.crm-bar { width:18px; border-radius:4px; background:#d1d5db; transform:scaleY(.3); opacity:.4; }
.bar-1{height:25%} .bar-2{height:40%} .bar-3{height:30%} .bar-4{height:55%} .bar-5{height:35%}
.bar-4 { animation:crmPulse 4s infinite; }
@keyframes crmPulse { 0%,38%,100% { background:#d1d5db; opacity:.4; } 42%,52% { background:#111; opacity:1; } }
.crm-mouse { width:8px; height:8px; background:#111; border-radius:50%; position:absolute; z-index:50; top:40px; left:40px; transform:translate(-50%,-50%); animation:crmCursor 4s infinite ease-in-out; }
@keyframes crmCursor {
  0% { top:40px; left:40px; }
  25%{ top:120px; left:140px; }
  40%{ top:120px; left:140px; }
  70%{ top:65px; left:105px; }
  100%{ top:40px; left:40px; }
}
.crm-click { width:14px; height:14px; border:2px solid #111; border-radius:50%; position:absolute; top:120px; left:140px; opacity:0; transform:translate(-50%,-50%) scale(.4); animation:crmClick 4s infinite; }
@keyframes crmClick { 0%,22%{ opacity:0; } 25%{ opacity:1; transform:scale(1); } 33%{ opacity:0; transform:scale(1.6); } 100%{ opacity:0; } }
.store-img{ width:100%; height:70px; border-radius:10px; background:#e5e7eb; animation:skeleton 1.1s infinite; }
.store-text{ width:60%; height:10px; background:#d1d5db; border-radius:4px; margin-top:8px; }
.store-item{ background:white; padding:10px; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.06); transform:scale(.92); opacity:0; }
.item-1{ animation:storeFade 4s infinite .2s; }
.item-2{ animation:storeFade 4s infinite .4s; }
@keyframes storeFade {
  0%{opacity:0; transform:scale(.92);}
  10%{opacity:1; transform:scale(1);}
  45%{opacity:1;}
  70%{opacity:.88; transform:scale(.97);}
  100%{opacity:0; transform:scale(.92);}
}
.store-mouse{ width:8px; height:8px; background:#111; border-radius:50%; position:absolute; top:60px; left:70px; transform:translate(-50%,-50%); animation:storeCursor 4s infinite; }
@keyframes storeCursor {
  0%  { top:60px; left:70px; }
  25% { top:95px; left:140px; }
  40% { top:95px; left:140px; }
  65% { top:135px; left:105px; }
  100%{ top:60px; left:70px; }
}
.node{ width:18px; height:18px; background:#d4d4d4; border-radius:50%; position:absolute; animation:nodePulse 3s infinite alternate ease; }
.a1{ top:35px; left:35px; }
.a2{ top:80px; right:35px; }
.a3{ bottom:40px; left:65px; }
@keyframes nodePulse { 0%{ transform:scale(.85); opacity:.6; } 100%{ transform:scale(1); opacity:1; } }
.line-x{ position:absolute; top:55px; left:35px; right:50px; height:2px; background:#e5e7eb; transform-origin:left; animation:lineGrowX 3s infinite; }
@keyframes lineGrowX { 0%{ transform:scaleX(0); opacity:.4; } 30%{ transform:scaleX(1); opacity:1; } 100%{ opacity:.4; } }
.line-y{ position:absolute; top:35px; left:42px; bottom:45px; width:2px; background:#e5e7eb; transform-origin:top; animation:lineGrowY 3s infinite; }
@keyframes lineGrowY { 0%{ transform:scaleY(0); opacity:.4; } 35%{ transform:scaleY(1); opacity:1; } 100%{ opacity:.4; } }
.auto-mouse{ width:8px; height:8px; background:#111; border-radius:50%; position:absolute; top:45px; left:40px; transform:translate(-50%,-50%); animation:autoCursor 3s infinite ease; }
@keyframes autoCursor {
  0%{ top:45px; left:40px; }
  40%{ top:85px; left:135px; }
  70%{ top:115px; left:80px; }
  100%{ top:45px; left:40px; }
}
.ecommerce-slide { transition: opacity .6s ease-in-out; }
.cursor-ec { width:8px; height:8px; background:#111; border-radius:50%; position:absolute; top:220px; left:230px; transform:translate(-50%,-50%); animation:ecCursor 6s infinite ease-in-out; }
@keyframes ecCursor { 0%   { top:220px; left:230px; } 20%  { top:260px; left:230px; } 30%  { top:260px; left:230px; } 100% { top:220px; left:230px; } }
.cursor-click-ec { width:14px; height:14px; border:2px solid #111; border-radius:50%; position:absolute; top:260px; left:230px; transform:translate(-50%,-50%) scale(.4); opacity:0; animation:ecClick 6s infinite; }
@keyframes ecClick { 0%,18%{opacity:0;} 20%{opacity:1; transform:scale(1);} 30%{opacity:0; transform:scale(1.6);} 100%{opacity:0;} }
.cursor-ec-cart { width:8px; height:8px; background:#111; border-radius:50%; position:absolute; top:260px; left:250px; transform:translate(-50%,-50%); animation:ecCartCursor 6s infinite ease; }
@keyframes ecCartCursor { 0% { opacity:0; } 34%{ opacity:1; top:260px; left:250px; } 50%{ top:300px; left:250px; } 60%{ top:300px; left:250px; } 100%{ opacity:0; } }
.cursor-click-ec-cart { width:14px; height:14px; border:2px solid #111; border-radius:50%; position:absolute; top:300px; left:250px; transform:translate(-50%,-50%) scale(.4); opacity:0; animation:ecCartClick 6s infinite; }
@keyframes ecCartClick { 0%,45%{opacity:0;} 50%{opacity:1; transform:scale(1);} 60%{opacity:0; transform:scale(1.6);} 100%{opacity:0;} }
.cursor-ec-checkout { width:8px; height:8px; background:#111; border-radius:50%; position:absolute; top:280px; left:240px; transform:translate(-50%,-50%); animation:ecCheckoutCursor 6s infinite ease; }
@keyframes ecCheckoutCursor { 0%{opacity:0;} 60%{opacity:1; top:280px; left:240px;} 80%{top:330px; left:240px;} 90%{top:330px; left:240px;} 100%{opacity:0;} }
.cursor-click-ec-checkout { width:14px; height:14px; border:2px solid #111; border-radius:50%; position:absolute; top:330px; left:240px; transform:translate(-50%,-50%) scale(.4); opacity:0; animation:ecCheckoutClick 6s infinite; }
@keyframes ecCheckoutClick { 0%,70%{opacity:0;} 80%{opacity:1; transform:scale(1);} 90%{opacity:0; transform:scale(1.6);} 100%{opacity:0;} }
</style>

<section class="w-full bg-gray-50 pt-20 pb-14 border-b border-gray-200">
    <div class="max-w-[1150px] mx-auto px-6">
        <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm p-10 md:p-12 grid lg:grid-cols-[1fr_1.2fr] gap-12 items-center">
            <div class="flex flex-col">
                <span class="inline-flex items-center bg-gray-100 text-gray-600 text-xs px-3 py-1 rounded-full w-fit mb-4">
                    <?php esc_html_e('Try Webmakerr for $1', 'webmakerr'); ?>
                </span>
                <h1 class="text-[38px] md:text-[46px] font-semibold leading-[1.15] text-gray-900">
                    <?php esc_html_e('Run your business like a pro — for just $1.', 'webmakerr'); ?>
                </h1>
                <p class="mt-4 text-gray-600 text-[15px] leading-relaxed max-w-[420px]">
                    <?php esc_html_e('Get full access to selling tools, booking system, CRM, automations, website builder, and more. Experience the complete Webmakerr platform for only $1 for 14 days.', 'webmakerr'); ?>
                </p>
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 mt-8">
                    <a href="#pricing" class="inline-flex items-center justify-center bg-black text-white px-6 py-3 rounded-lg text-sm font-semibold hover:bg-black/90 transition">
                        <?php esc_html_e('▶ Start your 14-day trial for $1', 'webmakerr'); ?>
                    </a>
                    <a href="#pricing" class="inline-flex items-center justify-center bg-gray-100 border border-gray-300 text-gray-800 px-6 py-3 rounded-lg text-sm font-semibold hover:bg-gray-200 transition">
                        <?php esc_html_e('Compare plans →', 'webmakerr'); ?>
                    </a>
                </div>
                <div class="flex items-center gap-6 mt-8 opacity-80">
                    <div class="flex items-center gap-2 text-xs text-gray-600">
                        <span class="text-green-600 text-lg">✓</span> <?php esc_html_e('Payment Secure', 'webmakerr'); ?>
                    </div>
                    <div class="flex items-center gap-2 text-xs text-gray-600">
                        <span class="text-blue-600 text-lg">★</span> <?php esc_html_e('Trusted by 5,000+ businesses', 'webmakerr'); ?>
                    </div>
                </div>
            </div>
            <div class="relative w-full h-[360px] rounded-[20px] border border-gray-200 shadow-sm overflow-hidden" id="demoSlider">
                <div class="demo-slide" id="slide-1">
                    <div class="w-full h-full bg-gray-100 p-4 rounded-xl relative overflow-hidden">
                        <div class="w-full h-8 skeleton rounded"></div>
                        <div class="p-4 grid grid-cols-7 gap-1 text-center">
                            <div class="col-span-7 grid grid-cols-7 text-[9px] text-gray-500">
                                <span>S</span><span>M</span><span>T</span><span>W</span><span>T</span><span>F</span><span>S</span>
                            </div>
                            <div class="col-span-7 grid grid-cols-7 gap-1 mt-2">
                                <div></div><div></div><div></div>
                                <div class="day">1</div>
                                <div class="day">2</div>
                                <div class="day">3</div>
                                <div class="day">4</div>
                                <div class="day">5</div>
                                <div class="day">6</div>
                                <div class="day">7</div>
                                <div class="day">8</div>
                                <div class="day">9</div>
                                <div class="day">10</div>
                                <div class="day">11</div>
                            </div>
                            <div class="book-mouse"></div>
                            <div class="book-click"></div>
                            <div class="book-form">
                                <div class="text-[12px] font-medium text-gray-800 mb-2">Book Appointment</div>
                                <input class="w-full border border-gray-300 rounded px-2 py-1 text-[12px] mb-2" placeholder="Name" />
                                <input class="w-full border border-gray-300 rounded px-2 py-1 text-[12px]" placeholder="Email" />
                                <button class="w-full bg-black text-white text-[12px] py-1.5 rounded mt-2">Confirm</button>
                            </div>
                            <div class="book-success">✔ Booking confirmed</div>
                        </div>
                    </div>
                </div>
                <div class="demo-slide" id="slide-2">
                    <div class="w-full h-full bg-gray-100 p-4 relative rounded-xl overflow-hidden">
                        <div class="w-full h-8 skeleton rounded"></div>
                        <div class="absolute inset-0 p-5 flex gap-3 items-end mt-6">
                            <div class="crm-bar bar-1"></div>
                            <div class="crm-bar bar-2"></div>
                            <div class="crm-bar bar-3"></div>
                            <div class="crm-bar bar-4"></div>
                            <div class="crm-bar bar-5"></div>
                        </div>
                        <div class="crm-mouse"></div>
                        <div class="crm-click"></div>
                    </div>
                </div>
                <div class="demo-slide" id="slide-3">
                    <div class="w-full h-full bg-gray-100 p-4 grid grid-cols-2 gap-3 rounded-xl relative">
                        <div class="store-item item-1">
                            <div class="store-img"></div>
                            <div class="store-text"></div>
                        </div>
                        <div class="store-item item-2">
                            <div class="store-img"></div>
                            <div class="store-text"></div>
                        </div>
                        <div class="store-mouse"></div>
                    </div>
                </div>
                <div class="demo-slide" id="slide-4">
                    <div class="w-full h-full bg-gray-100 p-4 rounded-xl relative overflow-hidden">
                        <div class="node a1"></div>
                        <div class="node a2"></div>
                        <div class="node a3"></div>
                        <div class="line-x"></div>
                        <div class="line-y"></div>
                        <div class="auto-mouse"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pricing" class="w-full bg-[#f7f7f7] py-16 border-t border-gray-200">
    <div class="max-w-[1150px] mx-auto px-6 text-center">
        <span class="inline-flex items-center bg-white border border-gray-300 px-3 py-1 text-xs rounded-full text-gray-600 shadow-sm mb-6">
            <?php esc_html_e('Pricing', 'webmakerr'); ?>
        </span>
        <h2 class="text-[38px] md:text-[44px] font-semibold text-[#181818] leading-[1.2]">
            <?php esc_html_e('Simple, transparent pricing', 'webmakerr'); ?>
        </h2>
        <p class="mt-3 text-gray-600 text-[15px] leading-relaxed">
            <?php esc_html_e('All plans include a $1 trial for 14 days. Cancel anytime.', 'webmakerr'); ?>
        </p>
        <div class="flex justify-center mt-8 mb-10">
            <div class="bg-white border border-gray-200 rounded-full p-1 flex text-sm shadow-sm">
                <button id="monthlyBtn" class="px-4 py-2 rounded-full font-medium bg-black text-white">
                    <?php esc_html_e('Monthly', 'webmakerr'); ?>
                </button>
                <button id="yearlyBtn" class="px-4 py-2 rounded-full font-medium text-gray-700 hover:bg-gray-100">
                    <?php esc_html_e('Yearly', 'webmakerr'); ?> <span class="text-green-600"><?php esc_html_e('(save 20%)', 'webmakerr'); ?></span>
                </button>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-8 mt-6 text-left">
            <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm p-8 flex flex-col">
                <h3 class="text-lg font-semibold text-gray-900"><?php esc_html_e('Starter', 'webmakerr'); ?></h3>
                <p class="text-sm text-gray-500"><?php esc_html_e('For freelancers & creators', 'webmakerr'); ?></p>
                <div class="mt-6 flex items-end gap-1">
                    <span class="starterPrice text-[34px] font-bold text-gray-900">$19</span>
                    <span class="text-gray-500 text-sm mb-1">/mo</span>
                </div>
                <p class="text-xs text-gray-500 mt-1"><?php esc_html_e('$1 trial applies', 'webmakerr'); ?></p>
                <ul class="mt-6 space-y-3 text-sm text-gray-700">
                    <li>✔ <?php esc_html_e('1 Website', 'webmakerr'); ?></li>
                    <li>✔ <?php esc_html_e('Basic CRM', 'webmakerr'); ?></li>
                    <li>✔ <?php esc_html_e('Booking System', 'webmakerr'); ?></li>
                    <li>✔ <?php esc_html_e('Sell Services', 'webmakerr'); ?></li>
                    <li>✔ <?php esc_html_e('Basic Automations', 'webmakerr'); ?></li>
                </ul>
                <a href="#" class="mt-auto inline-flex justify-center bg-black text-white px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-black/90">
                    <?php esc_html_e('Start for $1 →', 'webmakerr'); ?>
                </a>
            </div>
            <div class="bg-white border-2 border-black rounded-[20px] shadow-lg p-8 flex flex-col relative">
                <span class="absolute -top-3 left-1/2 -translate-x-1/2 bg-black text-white px-3 py-1 text-[11px] rounded-full font-semibold tracking-wide shadow">
                    <?php esc_html_e('MOST POPULAR', 'webmakerr'); ?>
                </span>
                <h3 class="text-lg font-semibold text-gray-900"><?php esc_html_e('Pro', 'webmakerr'); ?></h3>
                <p class="text-sm text-gray-500"><?php esc_html_e('Best for growing businesses', 'webmakerr'); ?></p>
                <div class="mt-6 flex items-end gap-1">
                    <span class="proPrice text-[34px] font-bold text-gray-900">$49</span>
                    <span class="text-gray-500 text-sm mb-1">/mo</span>
                </div>
                <p class="text-xs text-gray-500 mt-1"><?php esc_html_e('$1 trial applies', 'webmakerr'); ?></p>
                <ul class="mt-6 space-y-3 text-sm text-gray-700">
                    <li>✔ <?php esc_html_e('Unlimited Websites', 'webmakerr'); ?></li>
                    <li>✔ <?php esc_html_e('Full CRM + Pipelines', 'webmakerr'); ?></li>
                    <li>✔ <?php esc_html_e('Automations + Workflows', 'webmakerr'); ?></li>
                    <li>✔ <?php esc_html_e('Online Store + Checkout', 'webmakerr'); ?></li>
                    <li>✔ <?php esc_html_e('Custom Domain', 'webmakerr'); ?></li>
                    <li>✔ <?php esc_html_e('Priority Support', 'webmakerr'); ?></li>
                </ul>
                <a href="#" class="mt-auto inline-flex justify-center bg-black text-white px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-black/90">
                    <?php esc_html_e('Start for $1 →', 'webmakerr'); ?>
                </a>
            </div>
            <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm p-8 flex flex-col">
                <h3 class="text-lg font-semibold text-gray-900"><?php esc_html_e('Business', 'webmakerr'); ?></h3>
                <p class="text-sm text-gray-500"><?php esc_html_e('For agencies & organizations', 'webmakerr'); ?></p>
                <div class="mt-6 flex items-end gap-1">
                    <span class="businessPrice text-[34px] font-bold text-gray-900">$99</span>
                    <span class="text-gray-500 text-sm mb-1">/mo</span>
                </div>
                <p class="text-xs text-gray-500 mt-1"><?php esc_html_e('$1 trial applies', 'webmakerr'); ?></p>
                <ul class="mt-6 space-y-3 text-sm text-gray-700">
                    <li>✔ <?php esc_html_e('Unlimited Everything', 'webmakerr'); ?></li>
                    <li>✔ <?php esc_html_e('Teams + Permissions', 'webmakerr'); ?></li>
                    <li>✔ <?php esc_html_e('Advanced Automations', 'webmakerr'); ?></li>
                    <li>✔ <?php esc_html_e('API Access', 'webmakerr'); ?></li>
                    <li>✔ <?php esc_html_e('White-label Options', 'webmakerr'); ?></li>
                    <li>✔ <?php esc_html_e('Dedicated Support', 'webmakerr'); ?></li>
                </ul>
                <a href="#" class="mt-auto inline-flex justify-center bg-black text-white px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-black/90">
                    <?php esc_html_e('Start for $1 →', 'webmakerr'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-white py-24">
    <div class="max-w-[1150px] mx-auto px-6 text-center">
        <span class="inline-flex items-center bg-gray-100 text-gray-600 text-xs px-3 py-1 rounded-full mb-4">
            <?php esc_html_e('Key benefits', 'webmakerr'); ?>
        </span>
        <h2 class="text-[32px] md:text-[44px] font-semibold leading-tight text-gray-900">
            <?php esc_html_e('How Webmakerr works for talent acquisition teams', 'webmakerr'); ?>
        </h2>
        <p class="max-w-[700px] mx-auto mt-4 text-gray-600 text-[15px] leading-relaxed">
            <?php esc_html_e('Accelerate your hiring process with scheduling tools that make it easy to connect with candidates, coordinate interviews, and streamline recruitment workflows.', 'webmakerr'); ?>
        </p>
        <a href="#pricing" class="inline-flex items-center bg-black text-white px-6 py-3 rounded-lg text-sm font-semibold mt-6 hover:bg-black/90 transition">
            <?php esc_html_e('Get started →', 'webmakerr'); ?>
        </a>
    </div>
    <div class="max-w-[1150px] mx-auto px-6 mt-20 grid lg:grid-cols-2 gap-12 items-center">
        <div class="flex justify-center lg:justify-start">
            <div class="bg-white border border-gray-200 rounded-[20px] shadow-[0_6px_20px_rgba(0,0,0,0.05)] p-6 w-full max-w-[540px]">
                <div class="flex items-center space-x-2 mb-4">
                    <div class="w-3 h-3 rounded-full bg-gray-300"></div>
                    <div class="w-3 h-3 rounded-full bg-gray-300"></div>
                    <div class="w-3 h-3 rounded-full bg-gray-300"></div>
                </div>
                <div class="w-full bg-gray-100 text-gray-500 text-[11px] py-1 rounded-full text-center mb-5 border border-gray-200">
                    webmakerr.com/instant-meeting
                </div>
                <div class="grid grid-cols-2 gap-4 mb-5">
                    <?php
                    $talent = array('Nizar', 'Max', 'Bailey', 'Ewa');
                    foreach ($talent as $person) :
                    ?>
                        <div class="relative rounded-xl overflow-hidden bg-gray-200">
                            <img src="https://via.placeholder.com/700x450" class="w-full h-full object-cover" alt="<?php echo esc_attr($person); ?>" />
                            <span class="absolute bottom-2 left-2 bg-black/60 text-white text-[11px] px-2 py-0.5 rounded"><?php echo esc_html($person); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="flex items-center justify-center space-x-6 text-gray-600 text-[18px] pb-2">
                    <button class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center hover:bg-gray-200">🎤</button>
                    <button class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center hover:bg-gray-200">🎥</button>
                    <button class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center hover:bg-gray-200">💬</button>
                    <button class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center hover:bg-gray-200">🖥️</button>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center pl-4">
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-md bg-gray-100 text-gray-700 text-xs font-medium shadow-sm mb-4">01</span>
            <h3 class="text-[28px] md:text-[34px] font-semibold text-gray-900 leading-tight mb-4">
                <?php esc_html_e('Simplified interview scheduling', 'webmakerr'); ?>
            </h3>
            <p class="text-gray-600 text-[15px] leading-relaxed max-w-[430px]">
                <?php esc_html_e('Coordinate interviews across time zones without the back-and-forth. Webmakerr integrates with video conferencing tools, supports panel interviews, and ensures a seamless experience for both recruiters and candidates.', 'webmakerr'); ?>
            </p>
        </div>
    </div>
</section>

<section class="w-full bg-[#fafafa] py-24 border-t border-gray-200">
    <div class="max-w-[1150px] mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
        <div class="order-1">
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-md bg-gray-100 text-gray-700 text-xs font-medium shadow-sm mb-4">04</span>
            <h3 class="text-[28px] md:text-[34px] font-semibold text-gray-900 leading-tight">
                <?php esc_html_e('Simplify team coordination', 'webmakerr'); ?>
            </h3>
            <p class="mt-4 text-[15px] text-gray-600 leading-relaxed max-w-[480px]">
                <?php esc_html_e('Webmakerr keeps your entire team in sync with shared availability, pooled schedules, and collective booking pages. Ensure the right team member is always matched with the right client, automatically.', 'webmakerr'); ?>
            </p>
        </div>
        <div class="order-2 flex justify-center lg:justify-end">
            <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm w-full max-w-[540px] p-6">
                <div class="flex items-center gap-2 mb-6">
                    <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                    <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                    <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                </div>
                <h4 class="text-[18px] font-semibold text-gray-900 mb-1">
                    <?php esc_html_e('Team Availability Overview', 'webmakerr'); ?>
                </h4>
                <p class="text-[14px] text-gray-600 mb-4">
                    <?php esc_html_e('One view to understand who is available and when.', 'webmakerr'); ?>
                </p>
                <div class="space-y-4">
                    <?php
                    $team = array(
                        array('name' => 'Sarah', 'status' => 'Online', 'note' => 'Available 9am–4pm', 'color' => 'bg-green-100 text-green-700'),
                        array('name' => 'James', 'status' => 'Busy', 'note' => 'Available 11am–6pm', 'color' => 'bg-yellow-100 text-yellow-700'),
                        array('name' => 'Alicia', 'status' => 'Offline', 'note' => 'Out today', 'color' => 'bg-red-100 text-red-700'),
                    );
                    foreach ($team as $member) :
                    ?>
                        <div class="flex items-center justify-between bg-gray-50 border border-gray-200 rounded-xl p-4">
                            <div class="flex items-center gap-3">
                                <img src="https://via.placeholder.com/40" class="w-10 h-10 rounded-full" alt="<?php echo esc_attr($member['name']); ?>" />
                                <div>
                                    <p class="text-[14px] font-semibold text-gray-900"><?php echo esc_html($member['name']); ?></p>
                                    <p class="text-[13px] text-gray-600"><?php echo esc_html($member['note']); ?></p>
                                </div>
                            </div>
                            <span class="text-[12px] px-2 py-1 rounded <?php echo esc_attr($member['color']); ?>">
                                <?php echo esc_html($member['status']); ?>
                            </span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-white py-24 border-t border-gray-200">
    <div class="max-w-[1150px] mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
        <div class="flex justify-center lg:justify-start">
            <div class="relative bg-white border border-gray-200 rounded-[20px] shadow-sm w-full max-w-[540px] h-[380px] overflow-hidden p-6">
                <div class="flex items-center gap-2 mb-5">
                    <div class="w-3 h-3 rounded-full bg-gray-300"></div>
                    <div class="w-3 h-3 rounded-full bg-gray-300"></div>
                    <div class="w-3 h-3 rounded-full bg-gray-300"></div>
                </div>
                <div class="absolute inset-0 ecommerce-slide ecommerce-1">
                    <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm max-w-[350px] mx-auto">
                        <div class="w-full h-[160px] bg-gray-200 rounded-lg mb-4 animate-pulse"></div>
                        <h4 class="text-[16px] font-semibold text-gray-900"><?php esc_html_e('Premium Headphones', 'webmakerr'); ?></h4>
                        <p class="text-[13px] text-gray-600 mt-1"><?php esc_html_e('High-quality sound, noise cancelling.', 'webmakerr'); ?></p>
                        <button class="mt-4 w-full bg-black text-white text-[14px] py-2 rounded-lg">
                            <?php esc_html_e('Add to Cart', 'webmakerr'); ?>
                        </button>
                        <div class="cursor-ec"></div>
                        <div class="cursor-click-ec"></div>
                    </div>
                </div>
                <div class="absolute inset-0 ecommerce-slide ecommerce-2 opacity-0">
                    <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm max-w-[360px] mx-auto">
                        <h4 class="text-[16px] font-semibold text-gray-900 mb-3"><?php esc_html_e('Your Cart', 'webmakerr'); ?></h4>
                        <div class="flex items-center gap-3 border-b border-gray-200 pb-3">
                            <div class="w-[60px] h-[60px] bg-gray-200 rounded-lg"></div>
                            <div>
                                <p class="text-[14px] font-medium text-gray-900"><?php esc_html_e('Premium Headphones', 'webmakerr'); ?></p>
                                <p class="text-[13px] text-gray-600">$89.00</p>
                            </div>
                        </div>
                        <button class="mt-4 w-full bg-black text-white text-[14px] py-2 rounded-lg">
                            <?php esc_html_e('Checkout →', 'webmakerr'); ?>
                        </button>
                        <div class="cursor-ec-cart"></div>
                        <div class="cursor-click-ec-cart"></div>
                    </div>
                </div>
                <div class="absolute inset-0 ecommerce-slide ecommerce-3 opacity-0">
                    <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm max-w-[380px] mx-auto">
                        <h4 class="text-[16px] font-semibold text-gray-900 mb-3"><?php esc_html_e('Checkout', 'webmakerr'); ?></h4>
                        <input class="w-full border border-gray-300 rounded px-3 py-2 text-[14px] mb-3" placeholder="<?php esc_attr_e('Full Name', 'webmakerr'); ?>" />
                        <input class="w-full border border-gray-300 rounded px-3 py-2 text-[14px] mb-3" placeholder="<?php esc_attr_e('Email', 'webmakerr'); ?>" />
                        <input class="w-full border border-gray-300 rounded px-3 py-2 text-[14px]" placeholder="<?php esc_attr_e('Card Number', 'webmakerr'); ?>" />
                        <button class="mt-4 w-full bg-black text-white text-[14px] py-2 rounded-lg">
                            <?php esc_html_e('Pay $89', 'webmakerr'); ?>
                        </button>
                        <div class="cursor-ec-checkout"></div>
                        <div class="cursor-click-ec-checkout"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center">
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-md bg-gray-100 text-gray-700 text-xs font-medium shadow-sm mb-4">05</span>
            <h3 class="text-[28px] md:text-[34px] font-semibold text-gray-900 leading-tight">
                <?php esc_html_e('Sell smarter with automated ecommerce flows', 'webmakerr'); ?>
            </h3>
            <p class="mt-4 text-[15px] text-gray-600 leading-relaxed max-w-[480px]">
                <?php esc_html_e('Webmakerr gives you a frictionless product-to-checkout experience. Automate upsells, reduce cart abandonment, and offer your customers a seamless buying journey—fully integrated with CRM and workflows.', 'webmakerr'); ?>
            </p>
        </div>
    </div>
</section>

<section class="w-full bg-[#fafafa] py-24 border-t border-gray-200">
    <div class="max-w-[1150px] mx-auto px-6 text-center">
        <span class="inline-flex items-center bg-white border border-gray-300 px-3 py-1 text-xs rounded-full text-gray-600 shadow-sm mb-6">
            <?php esc_html_e('Testimonials', 'webmakerr'); ?>
        </span>
        <h2 class="text-[32px] md:text-[44px] font-semibold text-gray-900 leading-tight mb-12">
            <?php esc_html_e('Loved by businesses worldwide', 'webmakerr'); ?>
        </h2>
        <div class="relative max-w-[820px] mx-auto">
            <div id="testimonialTrack" class="flex transition-transform duration-700 ease-out select-none">
                <?php
                $testimonials = array(
                    array(
                        'quote' => '“Webmakerr helped us automate our entire booking flow. Our no-shows dropped by 60% within the first month.”',
                        'name'  => 'Amanda Lee',
                        'role'  => 'Head of Operations, LumiHealth',
                    ),
                    array(
                        'quote' => '“The $1 trial was a game-changer. We onboarded our entire sales team in minutes and started closing appointments instantly.”',
                        'name'  => 'Daniel Morris',
                        'role'  => 'Sales Lead, IntraPro',
                    ),
                    array(
                        'quote' => '“Finally, a business tool that feels modern. Automated workflows and booking forms made our operations 10× smoother.”',
                        'name'  => 'Sophia Carter',
                        'role'  => 'Founder, Brightside Studio',
                    ),
                );
                foreach ($testimonials as $item) :
                ?>
                    <div class="testimonial-slide w-full flex-shrink-0 px-4">
                        <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm p-8">
                            <p class="text-[16px] text-gray-700 leading-relaxed italic"><?php echo esc_html($item['quote']); ?></p>
                            <div class="flex items-center gap-4 mt-6">
                                <img src="https://via.placeholder.com/40" class="w-10 h-10 rounded-full" alt="<?php echo esc_attr($item['name']); ?>" />
                                <div class="text-left">
                                    <p class="font-semibold text-gray-900 text-sm"><?php echo esc_html($item['name']); ?></p>
                                    <p class="text-xs text-gray-500"><?php echo esc_html($item['role']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button id="prevBtn" class="absolute -left-4 top-1/2 -translate-y-1/2 bg-white border border-gray-200 w-10 h-10 rounded-full flex items-center justify-center shadow-sm hover:bg-gray-50">←</button>
            <button id="nextBtn" class="absolute -right-4 top-1/2 -translate-y-1/2 bg-white border border-gray-200 w-10 h-10 rounded-full flex items-center justify-center shadow-sm hover:bg-gray-50">→</button>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const slides = [
        { id: "slide-1", duration: 6000 },
        { id: "slide-2", duration: 4000 },
        { id: "slide-3", duration: 4000 },
        { id: "slide-4", duration: 3000 },
    ];
    let current = 0;
    const switchSlide = (index) => {
        document.querySelectorAll(".demo-slide").forEach((el) => el.classList.remove("active"));
        const active = document.getElementById(slides[index].id);
        if (active) {
            active.classList.add("active");
        }
    };
    const queueNext = () => {
        current = (current + 1) % slides.length;
        switchSlide(current);
        setTimeout(queueNext, slides[current].duration);
    };
    switchSlide(0);
    setTimeout(queueNext, slides[0].duration);
});

(function(){
    const track = document.getElementById("testimonialTrack");
    if (! track) {
        return;
    }
    const slides = document.querySelectorAll(".testimonial-slide");
    const prev = document.getElementById("prevBtn");
    const next = document.getElementById("nextBtn");
    let index = 0;
    const total = slides.length;
    const updateSlider = () => {
        track.style.transform = `translateX(-${index * 100}%)`;
    };
    const goNext = () => {
        index = (index + 1) % total;
        updateSlider();
    };
    const goPrev = () => {
        index = (index - 1 + total) % total;
        updateSlider();
    };
    if (next) next.addEventListener('click', goNext);
    if (prev) prev.addEventListener('click', goPrev);
    setInterval(goNext, 4000);
    let startX = 0;
    track.addEventListener("touchstart", (e) => startX = e.touches[0].clientX);
    track.addEventListener("touchend", (e) => {
        const endX = e.changedTouches[0].clientX;
        if (endX < startX - 50) {
            goNext();
        } else if (endX > startX + 50) {
            goPrev();
        }
    });
})();
</script>

<?php
get_footer();
?>
