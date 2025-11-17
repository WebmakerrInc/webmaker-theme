<?php
/**
 * Template Name: Landing Page Home
 */
?>
<?php
if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<script src="https://cdn.tailwindcss.com"></script>

<style>
    .booking-hero-panel {
        opacity: 0;
        transform: translateY(16px) scale(0.985);
        transition: all 700ms cubic-bezier(0.16, 1, 0.3, 1);
        pointer-events: none;
        position: absolute;
        inset: 0;
    }

    .booking-hero-panel.is-active {
        opacity: 1;
        transform: translateY(0) scale(1);
        pointer-events: auto;
    }

    .booking-hero-ambient {
        background: radial-gradient(circle at 20% 20%, rgba(96, 165, 250, 0.08), transparent 45%),
                    radial-gradient(circle at 80% 0%, rgba(167, 139, 250, 0.08), transparent 35%),
                    radial-gradient(circle at 50% 80%, rgba(16, 185, 129, 0.08), transparent 40%);
    }
</style>

<!-- ======================================= -->
<!-- STEP 1 — HERO SECTION (Optimized) -->
<!-- ======================================= -->

<section class="w-full bg-gray-50 pt-24 pb-16">
    <div class="max-w-[1150px] mx-auto px-6">

        <!-- HERO CARD -->
        <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm 
                    p-12 grid lg:grid-cols-2 gap-12 items-center">

            <!-- LEFT SIDE -->
            <div class="flex flex-col">

                <!-- Pill -->
                <span class="inline-flex items-center bg-gray-100 text-gray-600 text-xs 
                             px-3 py-1 rounded-full w-fit mb-5">
                    Cal.com launches v5.9
                    <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M4 2l4 4-4 4"/>
                    </svg>
                </span>

                <!-- Headline -->
                <h1 class="text-[42px] md:text-[48px] font-semibold leading-[1.1] text-gray-900">
                    The better way to<br/>schedule your<br/>meetings
                </h1>

                <!-- Subheadline -->
                <p class="mt-5 text-gray-600 text-[15px] leading-relaxed max-w-[420px]">
                    A fully customizable scheduling software for individuals, businesses 
                    taking calls, and developers building scheduling platforms where users meet users.
                </p>

                <!-- Google Button -->
                <button class="mt-8 bg-black text-white text-sm px-5 py-3 rounded-lg 
                               w-full max-w-xs flex items-center justify-center gap-2 hover:bg-black/90">
                    <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-4" alt="">
                    Sign up with Google
                </button>

                <!-- Email Button -->
                <button class="mt-3 bg-gray-100 text-gray-700 text-sm px-5 py-3 rounded-lg 
                               w-full max-w-xs flex items-center justify-between hover:bg-gray-200">
                    <span>Sign up with email</span>
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.4">
                        <path d="M4 2l6 5-6 5"/>
                    </svg>
                </button>

                <p class="text-xs text-gray-500 mt-3">No credit card required</p>

                <!-- Ratings -->
                <div class="flex items-center gap-4 mt-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Trustpilot_logo_2022.svg/2560px-Trustpilot_logo_2022.svg.png"
                         class="h-5 object-contain" alt="Trustpilot">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Google_Reviews_logo.png"
                         class="h-5 object-contain" alt="Google Reviews">
                </div>

            </div>

            <!-- RIGHT SIDE — Animated Booking Preview -->
            <div class="relative bg-white border border-gray-200 rounded-[20px] shadow-sm overflow-hidden booking-hero-ambient">

                <div class="p-6 flex flex-col gap-5 relative z-[1]">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=200&q=80" class="w-10 h-10 rounded-full object-cover" alt="">
                            <div>
                                <p class="text-sm font-medium text-gray-900">Isabella Valce</p>
                                <p class="text-lg font-semibold text-gray-900 -mt-0.5">Creative Photoshoot</p>
                                <p class="text-sm text-gray-500 mt-1 leading-relaxed max-w-sm">
                                    A modern booking experience that moves from availability to confirmation in a few smooth steps.
                                </p>
                            </div>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-[11px] bg-gray-900 text-white shadow-sm">Live preview</span>
                    </div>

                    <div class="flex gap-2 text-xs text-gray-600 flex-wrap">
                        <span class="px-3 py-1 rounded-full border border-gray-300">30 min</span>
                        <span class="px-3 py-1 rounded-full border border-gray-300">Virtual / In-person</span>
                        <span class="px-3 py-1 rounded-full border border-gray-300">Timezone aware</span>
                    </div>

                    <div class="relative mt-2 bg-white/80 backdrop-blur-sm border border-gray-200 rounded-xl p-4 shadow-sm min-h-[320px]">
                        <!-- Calendar State -->
                        <div class="booking-hero-panel is-active" data-booking-state="calendar">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <p class="text-xs uppercase tracking-[0.08em] text-gray-500">Availability</p>
                                    <p class="text-xl font-semibold text-gray-900">May 2025</p>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <button class="w-8 h-8 rounded-full border border-gray-200 hover:border-gray-300 hover:bg-gray-50 flex items-center justify-center">‹</button>
                                    <button class="w-8 h-8 rounded-full border border-gray-200 hover:border-gray-300 hover:bg-gray-50 flex items-center justify-center">›</button>
                                </div>
                            </div>

                            <div class="grid grid-cols-7 text-center text-[11px] text-gray-400 mb-2">
                                <span>SUN</span><span>MON</span><span>TUE</span><span>WED</span>
                                <span>THU</span><span>FRI</span><span>SAT</span>
                            </div>

                            <div class="grid grid-cols-7 gap-2 text-center text-sm">
                                <span class="text-gray-300 py-2"></span>
                                <span class="text-gray-300 py-2"></span>
                                <span class="text-gray-300 py-2"></span>
                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">1</span>
                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">2</span>
                                <span class="text-gray-300 py-2"></span>
                                <span class="text-gray-300 py-2"></span>

                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">5</span>
                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">6</span>
                                <span class="text-white py-2 bg-gray-900 rounded-lg font-semibold shadow">7</span>
                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">8</span>
                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">9</span>
                                <span class="text-gray-300 py-2"></span>
                                <span class="text-gray-300 py-2"></span>

                                <span class="text-gray-900 py-2">12</span>
                                <span class="text-gray-900 py-2">13</span>
                                <span class="text-gray-900 py-2">14</span>
                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">15</span>
                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">16</span>
                                <span class="text-gray-300 py-2"></span>
                                <span class="text-gray-300 py-2"></span>

                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">19</span>
                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">20</span>
                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">21</span>
                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">22</span>
                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">23</span>
                                <span class="text-gray-300 py-2"></span>
                                <span class="text-gray-300 py-2"></span>

                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">26</span>
                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">27</span>
                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">28</span>
                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">29</span>
                                <span class="text-gray-900 py-2 bg-gray-100 rounded-lg">30</span>
                                <span class="text-gray-300 py-2"></span>
                                <span class="text-gray-300 py-2"></span>
                            </div>

                            <div class="mt-4 flex items-center gap-2 text-xs text-gray-600">
                                <span class="w-2 h-2 bg-gray-900 rounded-full"></span> Preferred slots available
                                <span class="w-2 h-2 bg-gray-200 rounded-full ml-3"></span> Secondary
                            </div>
                        </div>

                        <!-- Booking Form State -->
                        <div class="booking-hero-panel" data-booking-state="form">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <p class="text-xs uppercase tracking-[0.08em] text-gray-500">Details</p>
                                    <p class="text-xl font-semibold text-gray-900">Confirm your booking</p>
                                </div>
                                <span class="text-xs text-gray-500">Wed, May 7 · 2:00 PM GMT-3</span>
                            </div>

                            <div class="space-y-3">
                                <div>
                                    <label class="text-xs text-gray-600">Full name</label>
                                    <input class="w-full mt-1 rounded-lg border border-gray-200 px-3 py-2 text-sm focus:border-gray-900 focus:outline-none" value="Arianna Doe" />
                                </div>
                                <div>
                                    <label class="text-xs text-gray-600">Email</label>
                                    <input class="w-full mt-1 rounded-lg border border-gray-200 px-3 py-2 text-sm focus:border-gray-900 focus:outline-none" value="arianna@example.com" />
                                </div>
                                <div class="grid grid-cols-2 gap-3">
                                    <div>
                                        <label class="text-xs text-gray-600">Meeting type</label>
                                        <div class="mt-1 flex items-center gap-2">
                                            <span class="px-3 py-2 rounded-lg border border-gray-200 text-sm flex-1 text-center">Zoom</span>
                                            <span class="px-3 py-2 rounded-lg border border-gray-900 bg-gray-900 text-white text-sm flex-1 text-center">In studio</span>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="text-xs text-gray-600">Duration</label>
                                        <div class="mt-1 px-3 py-2 rounded-lg border border-gray-200 text-sm flex items-center justify-between">
                                            <span>60 minutes</span>
                                            <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 4l4 4 4-4" /></svg>
                                        </div>
                                    </div>
                                </div>

                                <button class="w-full mt-2 bg-gray-900 text-white text-sm font-medium py-3 rounded-lg shadow hover:bg-gray-800">Book now</button>
                            </div>
                        </div>

                        <!-- Confirmation State -->
                        <div class="booking-hero-panel" data-booking-state="confirmation">
                            <div class="flex flex-col items-center justify-center text-center h-full gap-3 pt-4">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-green-400 to-emerald-600 text-white flex items-center justify-center shadow-md">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div>
                                    <p class="text-xs uppercase tracking-[0.08em] text-emerald-600 font-semibold">Booking Confirmed</p>
                                    <p class="text-xl font-semibold text-gray-900 mt-1">See you soon, Arianna!</p>
                                    <p class="text-sm text-gray-600 mt-1">A confirmation email has been sent with the meeting link and details.</p>
                                </div>
                                <div class="mt-4 flex flex-col gap-2 w-full max-w-sm">
                                    <div class="flex items-center justify-between text-sm text-gray-700 border border-gray-100 rounded-lg px-3 py-2">
                                        <span>Wednesday, May 7</span>
                                        <span class="text-gray-500">2:00 PM GMT-3</span>
                                    </div>
                                    <div class="flex items-center justify-between text-sm text-gray-700 border border-gray-100 rounded-lg px-3 py-2">
                                        <span>Location</span>
                                        <span class="text-gray-500">Rio Studio • Hybrid</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="absolute inset-0 bg-gradient-to-br from-white via-white/80 to-gray-50 pointer-events-none"></div>
            </div>

        </div>

    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const panels = Array.from(document.querySelectorAll('[data-booking-state]'));
        if (!panels.length) return;

        let activeIndex = 0;

        const setActivePanel = (nextIndex) => {
            panels.forEach((panel, idx) => {
                panel.classList.toggle('is-active', idx === nextIndex);
            });
        };

        setActivePanel(activeIndex);

        setInterval(() => {
            activeIndex = (activeIndex + 1) % panels.length;
            setActivePanel(activeIndex);
        }, 3600);
    });
</script>

 <!-- ======================================= -->
<!-- STEP 2 — HOW IT WORKS (Optimized) -->
<!-- ======================================= -->
<section class="w-full bg-[#f7f7f7] py-24 border-t border-gray-200">
    <div class="max-w-[1150px] mx-auto px-6">

        <!-- Top Heading Block -->
        <div class="text-center max-w-[700px] mx-auto">
            <span class="inline-flex items-center bg-white border border-gray-300 
                         px-3 py-1 text-xs rounded-full text-gray-600 shadow-sm mb-7">
                How it works
            </span>

            <h2 class="text-[40px] md:text-[46px] font-semibold text-gray-900 leading-[1.15]">
                With us, appointment scheduling is easy
            </h2>

            <p class="mt-4 text-gray-600 text-[15px] leading-relaxed">
                Streamlined scheduling for individuals, teams, and fast-growing companies.
            </p>

            <button class="mt-8 bg-black text-white text-sm font-semibold px-6 py-3 rounded-lg
                           hover:bg-black/90 transition shadow-sm">
                Get started →
            </button>
        </div>

        <!-- Cards -->
        <div class="grid md:grid-cols-3 gap-8 mt-20">

            <!-- CARD 1 -->
            <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm p-8 flex flex-col">
                
                <span class="flex items-center justify-center w-10 h-10 mb-4 
                             bg-gray-100 rounded-lg shadow-sm text-gray-700 text-sm font-medium">
                    01
                </span>

                <h3 class="text-lg font-semibold text-gray-900">Connect your calendar</h3>

                <p class="text-[14px] text-gray-600 mt-2 leading-relaxed">
                    We automatically sync everything so you never double-book again.
                </p>

                <div class="mt-auto flex justify-center pt-10">
                    <div class="w-48 h-48 rounded-full border-2 border-gray-200 flex items-center justify-center relative">

                        <!-- Center label -->
                        <div class="absolute bg-white px-3 py-1 rounded-full border text-xs font-medium shadow">
                            App
                        </div>

                        <span class="absolute -top-2 left-1/2 -translate-x-1/2 
                                     bg-white p-2 rounded-full shadow border text-xs">📅</span>

                        <span class="absolute -left-3 top-1/2 -translate-y-1/2 
                                     bg-white p-2 rounded-full shadow border text-xs">🔄</span>

                        <span class="absolute -bottom-2 left-1/2 -translate-x-1/2 
                                     bg-white p-2 rounded-full shadow border text-xs">📆</span>
                    </div>
                </div>

            </div>

            <!-- CARD 2 -->
            <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm p-8 flex flex-col">

                <span class="flex items-center justify-center w-10 h-10 mb-4 
                             bg-gray-100 rounded-lg shadow-sm text-gray-700 text-sm font-medium">
                    02
                </span>

                <h3 class="text-lg font-semibold text-gray-900">Set your availability</h3>

                <p class="text-[14px] text-gray-600 mt-2 leading-relaxed">
                    Define your working hours, buffers, and availability preferences.
                </p>

                <div class="mt-auto pt-10">
                    <div class="border border-gray-200 rounded-[14px] p-4 shadow-sm bg-white">

                        <div class="flex items-center justify-between text-[14px] text-gray-700 mb-3">
                            <span class="flex items-center gap-2">
                                <span class="w-3 h-3 bg-gray-900 rounded-full inline-block"></span>
                                Mon
                            </span>
                            <span>8:30am – 5:00pm</span>
                        </div>

                        <div class="flex items-center justify-between text-[14px] text-gray-400 mb-3">
                            <span class="flex items-center gap-2">
                                <span class="w-3 h-3 bg-gray-300 rounded-full inline-block"></span>
                                Tue
                            </span>
                            <span>–</span>
                        </div>

                        <div class="flex items-center justify-between text-[14px] text-gray-700">
                            <span class="flex items-center gap-2">
                                <span class="w-3 h-3 bg-gray-900 rounded-full inline-block"></span>
                                Wed
                            </span>
                            <span>10:00am – 7:00pm</span>
                        </div>

                    </div>
                </div>

            </div>

            <!-- CARD 3 -->
            <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm p-8 flex flex-col">

                <span class="flex items-center justify-center w-10 h-10 mb-4 
                             bg-gray-100 rounded-lg shadow-sm text-gray-700 text-sm font-medium">
                    03
                </span>

                <h3 class="text-lg font-semibold text-gray-900">Choose how to meet</h3>

                <p class="text-[14px] text-gray-600 mt-2 leading-relaxed">
                    Meet via video call, phone, or whatever works best for you.
                </p>

                <div class="mt-auto pt-10">
                    <div class="border border-gray-200 rounded-[14px] bg-white shadow-sm p-4">

                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex justify-center">
                                <div class="w-14 h-14 rounded-full bg-gray-200"></div>
                            </div>
                            <div class="flex justify-center">
                                <div class="w-14 h-14 rounded-full bg-gray-200"></div>
                            </div>
                        </div>

                        <div class="flex items-center justify-center gap-4 mt-5 text-gray-500 text-xl">
                            <span>🎤</span>
                            <span>🎥</span>
                            <span>💬</span>
                            <span>🔗</span>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<!-- ======================================= -->
<!-- STEP 3 — FEATURE GRID (Optimized Pixel-Perfect) -->
<!-- ======================================= -->
<section class="w-full bg-[#f7f7f7] py-20">
    <div class="max-w-[860px] mx-auto px-4">

        <!-- Heading -->
        <h2 class="text-center text-[38px] md:text-[44px] font-semibold text-[#181818] mb-12">
            ...and so much more!
        </h2>

        <!-- GRID -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-7 place-items-center">

            <!-- CARD TEMPLATE -->
            <!-- CARD 1 -->
            <div class="w-[180px] h-[180px] bg-white border border-[#e5e7eb] rounded-[28px] 
                        shadow-sm flex flex-col items-center justify-center">

                <div class="w-14 h-14 rounded-xl bg-[#f5f5f5] border border-[#e5e7eb] shadow-sm 
                            flex items-center justify-center relative mb-3">

                    <!-- Screws -->
                    <span class="absolute top-1 left-1 w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span class="absolute top-1 right-1 w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 left-1 w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 right-1 w-1 h-1 bg-gray-300 rounded-full"></span>

                    <!-- Icon -->
                    <span class="text-xl text-gray-700">💳</span>
                </div>

                <p class="text-[14px] font-medium text-[#222]">Accept payments</p>
            </div>

            <!-- CARD 2 -->
            <div class="w-[180px] h-[180px] bg-white border border-[#e5e7eb] rounded-[28px] 
                        shadow-sm flex flex-col items-center justify-center">

                <div class="w-14 h-14 rounded-xl bg-[#f5f5f5] border border-[#e5e7eb] shadow-sm 
                            flex items-center justify-center relative mb-3">

                    <span class="absolute top-1 left-1 w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span class="absolute top-1 right-1 w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 left-1 w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 right-1 w-1 h-1 bg-gray-300 rounded-full"></span>

                    <span class="text-xl text-gray-700">🎥</span>
                </div>

                <p class="text-[14px] font-medium text-[#222]">Built-in video conferencing</p>
            </div>

            <!-- CARD 3 -->
            <div class="w-[180px] h-[180px] bg-white border border-[#e5e7eb] rounded-[28px] 
                        shadow-sm flex flex-col items-center justify-center">

                <div class="w-14 h-14 rounded-xl bg-[#f5f5f5] border border-[#e5e7eb] shadow-sm 
                            flex items-center justify-center relative mb-3">

                    <span class="absolute top-1 left-1 w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span class="absolute top-1 right-1 w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 left-1 w-1 h-h bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 right-1 w-h bg-gray-300 rounded-full"></span>

                    <span class="text-xl text-gray-700">🔗</span>
                </div>

                <p class="text-[14px] font-medium text-[#222]">Short booking links</p>
            </div>

            <!-- CARD 4 -->
            <div class="w-[180px] h-[180px] bg-white border border-[#e5e7eb] rounded-[28px] 
                        shadow-sm flex flex-col items-center justify-center">

                <div class="w-14 h-14 rounded-xl bg-[#f5f5f5] border border-[#e5e7eb] shadow-sm 
                            flex items-center justify-center relative mb-3">

                    <span class="absolute top-1 left-1 w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span class="absolute top-1 right-1 w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 left-1 w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 right-1 w-1 bg-gray-300 rounded-full"></span>

                    <span class="text-xl text-gray-700">✔️</span>
                </div>

                <p class="text-[14px] font-medium text-[#222]">Privacy first</p>
            </div>

            <!-- CARD 5 -->
            <div class="w-[180px] h-[180px] bg-white border border-[#e5e7eb] rounded-[28px] 
                        shadow-sm flex flex-col items-center justify-center">

                <div class="w-14 h-14 rounded-xl bg-[#f5f5f5] border border-[#e5e7eb] shadow-sm 
                            flex items-center justify-center relative mb-3">

                    <span class="absolute top-1 left-1 w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span class="absolute top-1 right-1 w-1 h-h bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 left-1 w-1 h-h bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 right-1 w-1 h-1 bg-gray-300 rounded-full"></span>

                    <span class="text-xl text-gray-700">🌐</span>
                </div>

                <p class="text-[14px] font-medium text-[#222]">65+ languages</p>
            </div>

            <!-- CARD 6 -->
            <div class="w-[180px] h-[180px] bg-white border border-[#e5e7eb] rounded-[28px] 
                        shadow-sm flex flex-col items-center justify-center">

                <div class="w-14 h-14 rounded-xl bg-[#f5f5f5] border border-[#e5e7eb] shadow-sm 
                            flex items-center justify-center relative mb-3">

                    <span class="absolute top-1 left-1 w-1 h-h bg-gray-300 rounded-full"></span>
                    <span class="absolute top-1 right-1 w-1 h-h bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 left-1 w-1 h-h bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 right-1 w-1 h-h bg-gray-300 rounded-full"></span>

                    <span class="text-xl text-gray-700">📥</span>
                </div>

                <p class="text-[14px] font-medium text-[#222]">Easy embeds</p>
            </div>

            <!-- CARD 7 -->
            <div class="w-[180px] h-[180px] bg-white border border-[#e5e7eb] rounded-[28px] 
                        shadow-sm flex flex-col items-center justify-center">

                <div class="w-14 h-14 rounded-xl bg-[#f5f5f5] border border-[#e5e7eb] shadow-sm 
                            flex items-center justify-center relative mb-3">

                    <span class="absolute top-1 left-1 w-1 h-h bg-gray-300 rounded-full"></span>
                    <span class="absolute top-1 right-1 w-1 h-h bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 left-1 w-1 h-h bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 right-1 w-1 h-h bg-gray-300 rounded-full"></span>

                    <span class="text-xl text-gray-700">⭐</span>
                </div>

                <p class="text-[14px] font-medium text-[#222]">All your favorite apps</p>
            </div>

            <!-- CARD 8 -->
            <div class="w-[180px] h-[180px] bg-white border border-[#e5e7eb] rounded-[28px] 
                        shadow-sm flex flex-col items-center justify-center">

                <div class="w-14 h-14 rounded-xl bg-[#f5f5f5] border border-[#e5e7eb] shadow-sm 
                            flex items-center justify-center relative mb-3">

                    <span class="absolute top-1 left-1 w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span class="absolute top-1 right-1 w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 left-1 w-1 h-h bg-gray-300 rounded-full"></span>
                    <span class="absolute bottom-1 right-1 w-1 h-h bg-gray-300 rounded-full"></span>

                    <span class="text-xl text-gray-700">💬</span>
                </div>

                <p class="text-[14px] font-medium text-[#222]">Simple customization</p>
            </div>

        </div>

    </div>
</section>
<!-- ======================================= -->
<!-- STEP 4 — TESTIMONIALS (Desktop+Mobile Perfect) -->
<!-- ======================================= -->
<section class="w-full bg-[#f7f7f7] py-24">
    <div class="max-w-[1080px] mx-auto px-4 text-center">

        <!-- Pill -->
        <span class="inline-flex items-center bg-white border border-gray-300 
                     px-3 py-1 text-xs rounded-full text-gray-600 shadow-sm mb-6">
            Testimonials
        </span>

        <!-- Heading -->
        <h2 class="text-[32px] md:text-[46px] font-semibold text-[#181818] leading-[1.15]">
            Don’t just take our word for it
        </h2>

        <!-- Subheading -->
        <p class="mt-4 text-gray-600 text-[14px] md:text-[15px] leading-relaxed max-w-[620px] mx-auto">
            Our users are our best ambassadors. Discover why we’re the top choice
            for scheduling meetings.
        </p>

        <!-- ====================== -->
        <!-- DESKTOP LAYOUT (3 CARDS) -->
        <!-- ====================== -->
        <div class="hidden md:flex justify-center items-center gap-[32px] mt-12">

            <!-- LEFT (faded) -->
            <div class="w-[350px] h-[210px] bg-white border border-gray-200 rounded-[18px]
                        shadow-sm opacity-[0.35] scale-[0.94] p-6 flex flex-col justify-center text-left">

                <p class="text-[15px] text-gray-900 italic leading-snug">
                    “Absolutely love this tool. Best scheduling experience by far.”
                </p>

                <div class="flex items-center mt-5">
                    <div class="w-9 h-9 rounded-full bg-gray-300"></div>
                    <div class="ml-3">
                        <p class="text-sm font-semibold text-gray-700">Jane Doe</p>
                        <p class="text-xs text-gray-500">Founder, Example Co.</p>
                    </div>
                </div>
            </div>

            <!-- CENTER (active) -->
            <div class="w-[420px] h-[230px] bg-white border border-gray-200 rounded-[18px]
                        shadow-sm p-7 flex flex-col justify-center text-left">

                <p class="text-[17px] text-gray-900 font-semibold leading-snug">
                    “Moving here was the best decision. Smooth, simple,
                    and everything just works.”
                </p>

                <div class="flex items-center mt-6">
                    <div class="w-10 h-10 rounded-full bg-gray-300"></div>
                    <div class="ml-3">
                        <p class="text-sm font-semibold text-gray-700">Alex Carter</p>
                        <p class="text-xs text-gray-500">CTO, Example App</p>
                    </div>
                </div>
            </div>

            <!-- RIGHT (faded) -->
            <div class="w-[350px] h-[210px] bg-white border border-gray-200 rounded-[18px]
                        shadow-sm opacity-[0.35] scale-[0.94] p-6 flex flex-col justify-center text-left">

                <p class="text-[15px] text-gray-900 italic leading-snug">
                    “Cleaner, faster, and better than anything else I've used.”
                </p>

                <div class="flex items-center mt-5">
                    <div class="w-9 h-9 rounded-full bg-gray-300"></div>
                    <div class="ml-3">
                        <p class="text-sm font-semibold text-gray-700">Rachel Mei</p>
                        <p class="text-xs text-gray-500">Marketing Lead, Startup X</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- ====================== -->
        <!-- MOBILE LAYOUT (1 CARD ONLY) -->
        <!-- ====================== -->
        <div class="md:hidden mt-10 mx-auto w-full max-w-[380px]">

            <div class="bg-white border border-gray-200 rounded-[18px] shadow-sm
                        p-6 flex flex-col justify-center text-left">

                <p class="text-[16px] text-gray-900 font-semibold leading-snug">
                    “Moving here was the best decision. Smooth, simple,
                    and everything just works.”
                </p>

                <div class="flex items-center mt-5">
                    <div class="w-9 h-9 rounded-full bg-gray-300"></div>
                    <div class="ml-3">
                        <p class="text-sm font-semibold text-gray-700">Alex Carter</p>
                        <p class="text-xs text-gray-500">CTO, Example App</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<!-- ======================================= -->
<!-- STEP 5 — APP STORE SECTION (Optimized Pixel-Perfect) -->
<!-- ======================================= -->
<section class="w-full bg-[#f7f7f7] py-24">
    <div class="max-w-[1150px] mx-auto px-4">

        <!-- WHITE WRAPPER -->
        <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm
                    p-12 grid grid-cols-1 md:grid-cols-[1fr_1.25fr] gap-12 items-center">

            <!-- ================= LEFT SIDE ================= -->
            <div class="flex flex-col">

                <!-- Pill -->
                <span class="inline-flex items-center bg-white border border-gray-300 
                             px-3 py-1 text-xs rounded-full text-gray-600 shadow-sm mb-6">
                    App store
                </span>

                <!-- Heading -->
                <h2 class="text-[38px] md:text-[42px] font-semibold leading-[1.15] text-[#181818] mb-4">
                    All your key tools in-sync<br>with your meetings
                </h2>

                <!-- Subheading -->
                <p class="text-[15px] text-gray-600 leading-relaxed max-w-[420px] mb-8">
                    Cal.com works with all the apps in your workflow, ensuring everything
                    stays connected and perfectly aligned.
                </p>

                <!-- CTA Buttons -->
                <div class="flex items-center gap-3">
                    <button class="bg-black text-white px-6 py-3 rounded-lg text-sm font-semibold 
                                   hover:bg-black/90 transition shadow-sm">
                        Get started →
                    </button>

                    <button class="bg-gray-100 text-gray-800 px-6 py-3 rounded-lg text-sm font-semibold 
                                   border border-gray-300 hover:bg-gray-200 transition">
                        Explore apps →
                    </button>
                </div>
            </div>

            <!-- ================= RIGHT SIDE (App Grid) ================= -->
            <div class="grid grid-cols-3 grid-rows-3 w-full border border-gray-200 rounded-[16px] overflow-hidden">

                <!-- Row 1 -->
                <div class="h-[120px] flex items-center justify-center border-b border-r border-gray-200 p-6">
                    <img src="https://cdn-icons-png.flaticon.com/512/281/281769.png" class="w-10 opacity-90" alt="">
                </div>

                <div class="h-[120px] flex items-center justify-center border-b border-r border-gray-200 p-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3b/Zapier_logo.png" class="w-16 opacity-90" alt="">
                </div>

                <div class="h-[120px] flex items-center justify-center border-b border-gray-200 p-6">
                    <img src="https://seeklogo.com/images/S/stripe-logo-66D2C7D7FC-seeklogo.com.png" class="w-12 opacity-90" alt="">
                </div>

                <!-- Row 2 -->
                <div class="h-[120px] flex items-center justify-center border-b border-r border-gray-200 p-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/83/HubSpot_Logo.png" class="w-10 opacity-90" alt="">
                </div>

                <div class="h-[120px] flex items-center justify-center border-b border-r border-gray-200 p-6">
                    <!-- Empty cell (Cal.com has blank middle) -->
                </div>

                <div class="h-[120px] flex items-center justify-center border-b border-gray-200 p-6">
                    <img src="https://cdn.worldvectorlogo.com/logos/outlook-icon.svg" class="w-12 opacity-90" alt="">
                </div>

                <!-- Row 3 -->
                <div class="h-[120px] flex items-center justify-center border-r border-gray-200 p-6">
                    <img src="https://logos-world.net/wp-content/uploads/2021/03/Salesforce-Logo.png" class="w-16 opacity-90" alt="">
                </div>

                <div class="h-[120px] flex items-center justify-center border-r border-gray-200 p-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c8/Google_Meet_icon_(2020).svg" class="w-10 opacity-90" alt="">
                </div>

                <div class="h-[120px] flex items-center justify-center p-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9b/Google_Calendar_2020_Logo.svg" class="w-10 opacity-90" alt="">
                </div>

            </div>

        </div>

    </div>
</section>
<!-- ======================================= -->
<!-- STEP 6 — CTA BANNER (Fully Optimized, Pixel Perfect) -->
<!-- ======================================= -->
<section class="w-full bg-[#f7f7f7] py-24">
    <div class="max-w-[1150px] mx-auto px-4">

        <!-- CTA Card -->
        <div class="relative bg-white border border-gray-200 rounded-[20px] shadow-sm 
                    px-6 py-12 md:px-10 md:py-14 text-center overflow-hidden">

            <!-- Subtle Background Pattern -->
            <div class="absolute inset-0 opacity-[0.07] pointer-events-none"
                 style="
                    background-image:
                        radial-gradient(circle at center, #000 1px, transparent 1px),
                        radial-gradient(circle at center, #000 1px, transparent 1px);
                    background-size: 34px 34px;
                    background-position: 0 0, 17px 17px;
                 ">
            </div>

            <!-- Content -->
            <div class="relative z-10">

                <!-- Heading -->
                <h2 class="text-[28px] sm:text-[32px] md:text-[36px] font-semibold text-[#181818] leading-[1.25] mx-auto max-w-[700px]">
                    Free up your time. We’ve got your scheduling covered.
                    <br class="hidden sm:block">Try Cal.com now!
                </h2>

                <!-- CTA Button -->
                <div class="mt-8 flex justify-center">
                    <button class="bg-black text-white px-6 py-3 md:px-7 md:py-3 rounded-lg 
                                   text-sm md:text-[14px] font-semibold hover:bg-black/90 
                                   transition shadow-sm">
                        Get started →
                    </button>
                </div>

            </div>

        </div>

    </div>
</section>


<?php
get_footer();
?>
