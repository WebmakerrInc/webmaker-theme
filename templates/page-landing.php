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

<script src="https://cdn.tailwindcss.com"></script>

<style>
:root {
  --cursor-color:#0f172a;
  --hero-bg:#f7f9fb;
}

@keyframes skeleton {
  0% { background-position:-240px 0; }
  100% { background-position:240px 0; }
}

.skeleton {
  background-image:linear-gradient(90deg,#e5e7eb 0%,#ffffff 50%,#e5e7eb 100%);
  background-size:480px 100%;
  animation:skeleton 1.4s linear infinite;
}

.hero-anim-card {
  position:relative;
  width:100%;
  height:380px;
  border-radius:20px;
  border:1px solid #e5e7eb;
  overflow:hidden;
  background:linear-gradient(145deg,#ffffff,#eef2ff);
  box-shadow:0 15px 45px rgba(15,23,42,0.08);
}

.hero-anim-card::after {
  content:"";
  position:absolute;
  inset:0;
  background:white;
  opacity:0;
  transition:opacity .45s ease;
  pointer-events:none;
  z-index:50;
}

.hero-anim-card.resetting::after {
  opacity:1;
}

.scene {
  position:absolute;
  inset:0;
  padding:24px;
  opacity:0;
  background:var(--hero-bg);
  transition:opacity .6s ease;
  pointer-events:none;
  display:flex;
  flex-direction:column;
  justify-content:center;
  gap:18px;
}

.scene.active {
  opacity:1;
  pointer-events:auto;
}

.ui-window {
  background:white;
  border-radius:18px;
  border:1px solid #e2e8f0;
  box-shadow:0 10px 30px rgba(15,23,42,0.08);
  padding:18px;
  position:relative;
  overflow:hidden;
}

.cursor-dot {
  width:8px;
  height:8px;
  border-radius:50%;
  background:var(--cursor-color);
  position:absolute;
  transform:translate(-50%,-50%);
  z-index:20;
  opacity:0;
}

.scene.active .cursor-dot {
  opacity:1;
}

.click-ripple {
  width:16px;
  height:16px;
  border-radius:50%;
  border:2px solid var(--cursor-color);
  position:absolute;
  transform:translate(-50%,-50%) scale(.4);
  opacity:0;
  z-index:10;
}

/* -------------------------------------------------------------- */
/* BOOKING FLOW */
/* -------------------------------------------------------------- */
.scene-booking .calendar-shell {
  display:flex;
  flex-direction:column;
  gap:12px;
}

.scene-booking .calendar-grid {
  display:grid;
  grid-template-columns:repeat(7,1fr);
  gap:6px;
}

.scene-booking .calendar-label {
  font-size:11px;
  color:#94a3b8;
  text-transform:uppercase;
  letter-spacing:0.04em;
}

.booking-day {
  height:36px;
  border-radius:10px;
  background:#e2e8f0;
  font-size:12px;
  display:flex;
  align-items:center;
  justify-content:center;
  opacity:0;
  transform:translateY(8px) scale(.9);
}

.scene-booking.active .booking-day {
  animation:dayPop .5s forwards ease-out;
  animation-delay:var(--delay);
}

@keyframes dayPop {
  0% { opacity:0; transform:translateY(8px) scale(.9); }
  100% { opacity:1; transform:translateY(0) scale(1); }
}

.booking-form {
  position:absolute;
  left:50%;
  bottom:24px;
  transform:translate(-50%,40px);
  width:80%;
  background:white;
  border:1px solid #e2e8f0;
  border-radius:16px;
  padding:16px;
  box-shadow:0 20px 40px rgba(15,23,42,0.12);
  opacity:0;
}

.scene-booking.active .booking-form {
  animation:bookingFormSlide 6s forwards cubic-bezier(.4,0,.2,1);
}

@keyframes bookingFormSlide {
  0%,28% { opacity:0; transform:translate(-50%,40px); }
  32%,58% { opacity:1; transform:translate(-50%,0); }
  65%,100% { opacity:0; transform:translate(-50%,20px); }
}

.typing-line {
  height:10px;
  background:#e2e8f0;
  border-radius:999px;
  margin-top:10px;
  position:relative;
  overflow:hidden;
}

.typing-line::after {
  content:"";
  position:absolute;
  inset:0;
  background:#0f172a;
  width:0;
}

.scene-booking.active .typing-line::after {
  animation:typingFill 1.2s forwards steps(30);
  animation-delay:var(--start,1.8s);
}

@keyframes typingFill {
  from { width:0; }
  to { width:100%; }
}

.confirm-btn {
  margin-top:12px;
  height:32px;
  border-radius:10px;
  background:#0f172a;
  color:white;
  font-size:12px;
  display:flex;
  align-items:center;
  justify-content:center;
}

@media (max-width: 768px) {
  .hero-anim-card {
    height:320px;
  }

  .scene {
    padding:16px;
  }
}

.scene-booking.active .confirm-btn {
  animation:confirmPulse 6s forwards;
}

@keyframes confirmPulse {
  0%,48% { box-shadow:none; }
  52% { box-shadow:0 0 0 0 rgba(15,23,42,0.35); }
  58% { box-shadow:0 0 0 12px rgba(15,23,42,0); }
  100% { box-shadow:none; }
}

.booking-success {
  position:absolute;
  top:38px;
  right:32px;
  background:#0ea5e9;
  color:white;
  font-size:12px;
  padding:6px 12px;
  border-radius:999px;
  opacity:0;
}

.scene-booking.active .booking-success {
  animation:bookingSuccess 6s forwards;
}

@keyframes bookingSuccess {
  0%,55% { opacity:0; transform:translateY(-8px); }
  60%,80% { opacity:1; transform:translateY(0); }
  100% { opacity:0; transform:translateY(-6px); }
}

.scene-booking .cursor-dot {
  top:110px;
  left:120px;
}

.scene-booking.active .cursor-dot {
  animation:bookingCursor 6s cubic-bezier(.4,0,.2,1) forwards;
}

@keyframes bookingCursor {
  0% { top:120px; left:100px; }
  20% { top:200px; left:220px; }
  32% { top:200px; left:220px; }
  48% { top:270px; left:210px; }
  58% { top:295px; left:285px; }
  100% { top:120px; left:100px; }
}

.scene-booking .click-ripple {
  top:200px;
  left:220px;
}

.scene-booking.active .click-ripple {
  animation:bookingRipple 6s forwards;
}

@keyframes bookingRipple {
  0%,18% { opacity:0; transform:translate(-50%,-50%) scale(.4); }
  22% { opacity:1; transform:translate(-50%,-50%) scale(1); }
  28% { opacity:0; transform:translate(-50%,-50%) scale(1.8); }
  100% { opacity:0; }
}

/* -------------------------------------------------------------- */
/* CRM FLOW */
/* -------------------------------------------------------------- */
.scene-crm .ui-window {
  display:flex;
  flex-direction:column;
  gap:18px;
}

.crm-kpis {
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:12px;
}

.crm-kpi {
  background:linear-gradient(135deg,#f8fafc,#eef2ff);
  border:1px solid #e2e8f0;
  border-radius:12px;
  padding:12px;
  box-shadow:0 8px 18px rgba(15,23,42,0.06);
}

.crm-kpi strong {
  display:block;
  font-size:16px;
  color:#0f172a;
}

.crm-kpi span {
  font-size:12px;
  color:#64748b;
}

.scene-crm.active .crm-kpi {
  animation:kpiPop 4s ease forwards;
}

@keyframes kpiPop {
  0% { transform:translateY(12px); opacity:0; }
  20% { transform:translateY(0); opacity:1; }
  100% { opacity:1; }
}

.lead-table {
  background:#0f172a;
  border-radius:14px;
  color:white;
  padding:14px;
  position:relative;
  overflow:hidden;
}

.lead-table::after {
  content:"";
  position:absolute;
  inset:0;
  background:radial-gradient(circle at 20% 20%, rgba(59,130,246,0.25), transparent 45%);
  pointer-events:none;
}

.lead-row {
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:8px 0;
  border-bottom:1px solid rgba(255,255,255,0.08);
  opacity:0;
}

.lead-row:last-child { border-bottom:none; }

.lead-info { display:flex; flex-direction:column; gap:2px; }

.lead-name { font-weight:600; font-size:13px; }

.lead-meta { font-size:11px; color:rgba(255,255,255,0.7); }

.status-pill {
  display:inline-flex;
  align-items:center;
  gap:6px;
  padding:6px 10px;
  border-radius:999px;
  font-size:11px;
  background:rgba(34,197,94,0.15);
  color:#bbf7d0;
  border:1px solid rgba(34,197,94,0.4);
}

.status-pill.pending {
  background:rgba(14,165,233,0.15);
  color:#bfdbfe;
  border-color:rgba(59,130,246,0.4);
}

.lead-profit {
  font-weight:700;
  font-size:13px;
  color:#bbf7d0;
}

.scene-crm.active .lead-row {
  animation:leadReveal 4s forwards;
  animation-delay:var(--delay,0s);
}

@keyframes leadReveal {
  0%,20% { opacity:0; transform:translateY(6px); }
  28%,70% { opacity:1; transform:translateY(0); }
  100% { opacity:1; }
}

.crm-activity {
  display:flex;
  align-items:center;
  gap:10px;
  font-size:12px;
  color:#334155;
}

.crm-activity .pulse-dot {
  width:9px;
  height:9px;
  border-radius:50%;
  background:#22c55e;
  box-shadow:0 0 0 0 rgba(34,197,94,0.4);
}

.scene-crm.active .pulse-dot {
  animation:pulse 2s infinite;
}

@keyframes pulse {
  0% { box-shadow:0 0 0 0 rgba(34,197,94,0.4); }
  50% { box-shadow:0 0 0 10px rgba(34,197,94,0); }
  100% { box-shadow:0 0 0 0 rgba(34,197,94,0); }
}

.scene-crm .cursor-dot { top:160px; left:200px; }

.scene-crm.active .cursor-dot {
  animation:crmCursor 4s cubic-bezier(.4,0,.2,1) forwards;
}

@keyframes crmCursor {
  0% { top:240px; left:140px; }
  35% { top:130px; left:260px; }
  60% { top:200px; left:320px; }
  100% { top:240px; left:140px; }
}

.scene-crm .click-ripple { top:130px; left:260px; }

.scene-crm.active .click-ripple {
  animation:crmRipple 4s forwards;
}

@keyframes crmRipple {
  0%,24% { opacity:0; }
  30% { opacity:1; transform:translate(-50%,-50%) scale(1); }
  42% { opacity:0; transform:translate(-50%,-50%) scale(1.6); }
  100% { opacity:0; }
}

/* -------------------------------------------------------------- */
/* E-COMMERCE FLOW */
/* -------------------------------------------------------------- */
.scene-ecommerce .product-card,
.scene-ecommerce .cart-panel,
.scene-ecommerce .checkout-panel {
  border-radius:18px;
  border:1px solid #e2e8f0;
  background:white;
  box-shadow:0 15px 35px rgba(15,23,42,0.08);
}

.scene-ecommerce .product-card {
  padding:18px;
  width:260px;
}

.scene-ecommerce .cart-panel,
.scene-ecommerce .checkout-panel {
  position:absolute;
  top:28px;
  right:28px;
  width:220px;
  padding:16px;
  opacity:0;
}

.scene-ecommerce .cart-panel {
  transform:translateX(140px);
}

.scene-ecommerce .checkout-panel {
  top:auto;
  bottom:32px;
  transform:translateY(30px);
}

.scene-ecommerce.active .cart-panel {
  animation:cartSlide 6s forwards;
}

@keyframes cartSlide {
  0%,24% { opacity:0; transform:translateX(140px); }
  30%,55% { opacity:1; transform:translateX(0); }
  75%,100% { opacity:0; transform:translateX(100px); }
}

.scene-ecommerce.active .checkout-panel {
  animation:checkoutRise 6s forwards;
}

@keyframes checkoutRise {
  0%,48% { opacity:0; transform:translateY(30px); }
  58%,78% { opacity:1; transform:translateY(0); }
  100% { opacity:0; transform:translateY(10px); }
}

.order-success {
  position:absolute;
  left:50%;
  bottom:40px;
  transform:translate(-50%,20px);
  padding:8px 16px;
  background:#22c55e;
  color:white;
  font-size:13px;
  border-radius:999px;
  opacity:0;
}

.scene-ecommerce.active .order-success {
  animation:orderBadge 6s forwards;
}

@keyframes orderBadge {
  0%,70% { opacity:0; transform:translate(-50%,20px); }
  78%,92% { opacity:1; transform:translate(-50%,0); }
  100% { opacity:0; transform:translate(-50%,10px); }
}

.scene-ecommerce .cursor-dot {
  top:140px;
  left:120px;
}

.scene-ecommerce.active .cursor-dot {
  animation:ecomCursor 6s cubic-bezier(.4,0,.2,1) forwards;
}

@keyframes ecomCursor {
  0% { top:190px; left:150px; }
  18% { top:250px; left:190px; }
  32% { top:140px; left:330px; }
  46% { top:210px; left:360px; }
  62% { top:320px; left:280px; }
  72% { top:320px; left:240px; }
  100% { top:190px; left:150px; }
}

.scene-ecommerce .ripple-add {
  top:250px;
  left:190px;
}

.scene-ecommerce .ripple-checkout {
  top:210px;
  left:360px;
}

.scene-ecommerce .ripple-pay {
  top:320px;
  left:240px;
}

.scene-ecommerce.active .ripple-add {
  animation:ecomRipple 6s forwards;
}

.scene-ecommerce.active .ripple-checkout {
  animation:ecomRippleCheckout 6s forwards;
}

.scene-ecommerce.active .ripple-pay {
  animation:ecomRipplePay 6s forwards;
}

@keyframes ecomRipple {
  0%,10% { opacity:0; }
  15% { opacity:1; transform:translate(-50%,-50%) scale(1); }
  24% { opacity:0; transform:translate(-50%,-50%) scale(1.8); }
  100% { opacity:0; }
}

@keyframes ecomRippleCheckout {
  0%,34% { opacity:0; }
  40% { opacity:1; transform:translate(-50%,-50%) scale(1); }
  48% { opacity:0; transform:translate(-50%,-50%) scale(1.8); }
  100% { opacity:0; }
}

@keyframes ecomRipplePay {
  0%,62% { opacity:0; }
  70% { opacity:1; transform:translate(-50%,-50%) scale(1); }
  78% { opacity:0; transform:translate(-50%,-50%) scale(1.8); }
  100% { opacity:0; }
}

.scene-ecommerce .btn {
  margin-top:14px;
  background:#0f172a;
  color:white;
  border-radius:10px;
  padding:10px 14px;
  font-size:13px;
  text-align:center;
}

.cart-line,
.checkout-line {
  height:10px;
  background:#e2e8f0;
  border-radius:999px;
  margin-top:10px;
  position:relative;
  overflow:hidden;
}

.cart-line::after,
.checkout-line::after {
  content:"";
  position:absolute;
  inset:0;
  background:#0f172a;
  width:0;
}

.scene-ecommerce.active .cart-line::after {
  animation:cartFill 6s forwards;
}

.scene-ecommerce.active .checkout-line::after {
  animation:checkoutFill 6s forwards;
}

@keyframes cartFill {
  0%,30% { width:0; }
  48% { width:80%; }
  100% { width:80%; }
}

@keyframes checkoutFill {
  0%,58% { width:0; }
  80% { width:100%; }
  100% { width:100%; }
}

/* -------------------------------------------------------------- */
/* AUTOMATION FLOW */
/* -------------------------------------------------------------- */
.scene-automation {
  background:linear-gradient(135deg,#fdf4ff,#eef2ff);
}

.automation-grid {
  display:grid;
  grid-template-columns:1.1fr 0.9fr;
  gap:16px;
  height:100%;
}

@media (max-width: 768px) {
  .automation-grid { grid-template-columns:1fr; }
}

.code-window {
  background:#0f172a;
  color:#e2e8f0;
  border-radius:14px;
  border:1px solid rgba(255,255,255,0.08);
  padding:16px;
  box-shadow:0 12px 30px rgba(15,23,42,0.2);
  position:relative;
  overflow:hidden;
}

.code-window::after {
  content:"";
  position:absolute;
  inset:0;
  background:radial-gradient(circle at 30% 20%, rgba(14,165,233,0.16), transparent 45%);
  pointer-events:none;
}

.code-line {
  font-family:"Roboto Mono", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size:12px;
  margin-bottom:8px;
  opacity:.4;
  transform:translateX(-6px);
  position:relative;
}

.code-line .cursor-block {
  display:inline-block;
  width:10px;
  height:12px;
  background:#22c55e;
  border-radius:2px;
  margin-left:6px;
  box-shadow:0 0 12px rgba(34,197,94,0.6);
}

.scene-automation.active .code-line {
  animation:codeReveal 4s forwards;
  animation-delay:var(--delay,0s);
}

@keyframes codeReveal {
  0%,10% { opacity:.2; transform:translateX(-10px); }
  18%,60% { opacity:1; transform:translateX(0); }
  100% { opacity:.8; }
}

.run-status {
  display:inline-flex;
  align-items:center;
  gap:8px;
  padding:8px 10px;
  border-radius:10px;
  background:rgba(34,197,94,0.1);
  color:#bbf7d0;
  font-size:12px;
  border:1px solid rgba(34,197,94,0.25);
}

.automation-flow {
  position:relative;
  background:linear-gradient(180deg,#ffffff,#eef2ff);
  border:1px solid #e2e8f0;
  border-radius:14px;
  padding:16px;
  box-shadow:0 12px 24px rgba(15,23,42,0.08);
  overflow:hidden;
}

.automation-steps {
  display:flex;
  flex-direction:column;
  gap:10px;
}

.automation-step {
  display:flex;
  align-items:center;
  gap:10px;
  padding:10px;
  background:white;
  border:1px solid #e2e8f0;
  border-radius:12px;
  box-shadow:0 4px 12px rgba(15,23,42,0.06);
  opacity:0;
}

.automation-step .bubble {
  width:10px;
  height:10px;
  border-radius:999px;
  background:#0ea5e9;
  box-shadow:0 0 0 6px rgba(14,165,233,0.15);
}

.automation-step strong { color:#0f172a; font-size:13px; }
.automation-step span { color:#475569; font-size:12px; }

.scene-automation.active .automation-step {
  animation:stepFade 4s forwards;
  animation-delay:var(--delay,0s);
}

@keyframes stepFade {
  0%,20% { opacity:0; transform:translateY(8px); }
  28%,70% { opacity:1; transform:translateY(0); }
  100% { opacity:1; }
}

.automation-log {
  margin-top:12px;
  display:flex;
  align-items:center;
  gap:8px;
  font-size:12px;
  color:#0f172a;
}

.automation-log .dot {
  width:8px;
  height:8px;
  background:#22c55e;
  border-radius:50%;
  box-shadow:0 0 0 8px rgba(34,197,94,0.12);
}

.scene-automation .cursor-dot {
  top:200px;
  left:240px;
}

.scene-automation.active .cursor-dot {
  animation:automationCursor 4s cubic-bezier(.4,0,.2,1) forwards;
}

@keyframes automationCursor {
  0% { top:260px; left:140px; }
  35% { top:180px; left:260px; }
  62% { top:230px; left:320px; }
  100% { top:260px; left:140px; }
}

/* -------------------------------------------------------------- */
/* SUMMARY DASHBOARD */
/* -------------------------------------------------------------- */
.scene-dashboard .widget-grid {
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:16px;
}

.scene-dashboard .widget {
  background:white;
  border:1px solid #e2e8f0;
  border-radius:16px;
  padding:16px;
  box-shadow:0 12px 30px rgba(15,23,42,0.06);
  position:relative;
}

.widget-value {
  height:34px;
  overflow:hidden;
  position:relative;
  font-weight:600;
  color:#0f172a;
  font-size:20px;
}

.digit-roller {
  display:flex;
  flex-direction:column;
  gap:6px;
}

.digit-roller span {
  display:block;
}

.scene-dashboard.active .digit-roller {
  animation:digitScroll 3s steps(5) forwards;
}

@keyframes digitScroll {
  from { transform:translateY(0); }
  to { transform:translateY(var(--scroll,-120%)); }
}

.widget-bar {
  width:100%;
  height:8px;
  background:#e2e8f0;
  border-radius:999px;
  margin-top:12px;
  position:relative;
  overflow:hidden;
}

.widget-bar::after {
  content:"";
  position:absolute;
  inset:0;
  background:#0f172a;
  width:0;
}

.scene-dashboard.active .widget-bar::after {
  animation:widgetFill 3s forwards;
}

@keyframes widgetFill {
  0% { width:0; }
  60% { width:80%; }
  100% { width:90%; }
}

.scene-dashboard .cursor-dot {
  top:180px;
  left:240px;
}

.scene-dashboard.active .cursor-dot {
  animation:dashboardCursor 3s cubic-bezier(.4,0,.2,1) forwards;
}

@keyframes dashboardCursor {
  0% { top:260px; left:140px; }
  45% { top:190px; left:260px; }
  100% { top:260px; left:140px; }
}

.scene-dashboard .hover-glow {
  position:absolute;
  inset:0;
  border-radius:16px;
  border:2px solid rgba(14,165,233,0.4);
  opacity:0;
}

.scene-dashboard.active .hover-glow {
  animation:hoverPulse 3s forwards;
}

@keyframes hoverPulse {
  0%,45% { opacity:0; }
  55%,80% { opacity:1; box-shadow:0 0 0 8px rgba(14,165,233,0.15); }
  100% { opacity:0; }
}

</style>

<section class="w-full bg-gray-50 pt-20 pb-14 border-b border-gray-200">
    <div class="max-w-[1150px] mx-auto px-6">

        <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm p-10 md:p-12 
                    grid lg:grid-cols-[1fr_1.2fr] gap-12 items-center">

            <div class="flex flex-col">

                <span class="inline-flex items-center bg-gray-100 text-gray-600 text-xs 
                             px-3 py-1 rounded-full w-fit mb-4">
                    Try Webmakerr for $1
                </span>

                <h1 class="text-[38px] md:text-[46px] font-semibold leading-[1.15] text-gray-900">
                    Run your business like a pro — for just $1.
                </h1>

                <p class="mt-4 text-gray-600 text-[15px] leading-relaxed max-w-[420px]">
                    Get full access to selling tools, booking system, CRM, automations, website builder, 
                    and more. Experience the complete Webmakerr platform for only $1 for 14 days.
                </p>

                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 mt-8">

                    <a href="#pricing"
                        class="inline-flex items-center justify-center bg-black text-white 
                               px-6 py-3 rounded-lg text-sm font-semibold hover:bg-black/90 transition">
                        ▶ Start your 14-day trial for $1
                    </a>

                    <a href="#pricing"
                        class="inline-flex items-center justify-center bg-gray-100 border 
                               border-gray-300 text-gray-800 px-6 py-3 rounded-lg text-sm 
                               font-semibold hover:bg-gray-200 transition">
                        Compare plans →
                    </a>

                </div>

                <div class="flex items-center gap-6 mt-8 opacity-80">
                    <div class="flex items-center gap-2 text-xs text-gray-600">
                        <span class="text-green-600 text-lg">✓</span> Payment Secure
                    </div>
                    <div class="flex items-center gap-2 text-xs text-gray-600">
                        <span class="text-blue-600 text-lg">★</span> Trusted by 5,000+ businesses
                    </div>
                </div>

            </div>


            <div class="hero-anim-card" id="webmakerrHero">

                <div class="scene scene-booking" data-scene="booking">
                    <div class="ui-window h-full">
                        <div class="skeleton w-2/3 h-6 rounded-lg mb-4"></div>
                        <div class="calendar-shell">
                            <div class="calendar-grid text-[10px] text-gray-400 tracking-[0.35em] uppercase font-semibold">
                                <span>S</span><span>M</span><span>T</span><span>W</span><span>T</span><span>F</span><span>S</span>
                            </div>
                            <div class="calendar-grid text-gray-700">
                                <span></span><span></span><span></span>
                                <div class="booking-day" style="--delay:0.05s">4</div>
                                <div class="booking-day" style="--delay:0.10s">5</div>
                                <div class="booking-day" style="--delay:0.15s">6</div>
                                <div class="booking-day" style="--delay:0.20s">7</div>
                                <div class="booking-day" style="--delay:0.25s">8</div>
                                <div class="booking-day" style="--delay:0.30s">9</div>
                                <div class="booking-day" style="--delay:0.35s">10</div>
                                <div class="booking-day" style="--delay:0.40s">11</div>
                                <div class="booking-day" style="--delay:0.45s">12</div>
                                <div class="booking-day" style="--delay:0.50s">13</div>
                                <div class="booking-day" style="--delay:0.55s">14</div>
                                <div class="booking-day" style="--delay:0.60s">15</div>
                                <div class="booking-day" style="--delay:0.65s">16</div>
                                <div class="booking-day" style="--delay:0.70s">17</div>
                                <div class="booking-day" style="--delay:0.75s">18</div>
                            </div>
                        </div>
                    </div>
                    <div class="booking-form">
                        <div class="text-[13px] font-semibold text-gray-800">Confirm booking</div>
                        <div class="text-[10px] uppercase tracking-wide text-gray-400 mt-3">Name</div>
                        <div class="typing-line" style="--start:1.9s"></div>
                        <div class="text-[10px] uppercase tracking-wide text-gray-400 mt-4">Email</div>
                        <div class="typing-line" style="--start:2.6s"></div>
                        <div class="confirm-btn">Confirm</div>
                    </div>
                    <div class="booking-success">✔ Booking confirmed</div>
                    <div class="cursor-dot"></div>
                    <div class="click-ripple"></div>
                </div>

                <div class="scene scene-crm" data-scene="crm">
                    <div class="ui-window h-full">
                        <div class="flex items-center justify-between">
                            <div class="text-sm font-semibold text-gray-900">CRM pipeline</div>
                            <div class="crm-activity">
                                <span class="pulse-dot"></span>
                                Syncing live leads
                            </div>
                        </div>

                        <div class="crm-kpis">
                            <div class="crm-kpi">
                                <strong>24</strong>
                                <span>New leads</span>
                            </div>
                            <div class="crm-kpi">
                                <strong>$18.4k</strong>
                                <span>Pipeline value</span>
                            </div>
                            <div class="crm-kpi">
                                <strong>62%</strong>
                                <span>Win rate</span>
                            </div>
                        </div>

                        <div class="lead-table">
                            <div class="lead-row" style="--delay:0.1s">
                                <div class="lead-info">
                                    <span class="lead-name">Mia Johnson</span>
                                    <span class="lead-meta">Demo booked • Agency</span>
                                </div>
                                <span class="status-pill">Won</span>
                                <span class="lead-profit">+$3,200</span>
                            </div>
                            <div class="lead-row" style="--delay:0.2s">
                                <div class="lead-info">
                                    <span class="lead-name">Arjun Patel</span>
                                    <span class="lead-meta">Follow-up • SaaS</span>
                                </div>
                                <span class="status-pill pending">Nurturing</span>
                                <span class="lead-profit">+$1,150</span>
                            </div>
                            <div class="lead-row" style="--delay:0.3s">
                                <div class="lead-info">
                                    <span class="lead-name">Chloe Park</span>
                                    <span class="lead-meta">Proposal sent • Ecommerce</span>
                                </div>
                                <span class="status-pill">Won</span>
                                <span class="lead-profit">+$4,780</span>
                            </div>
                            <div class="lead-row" style="--delay:0.4s">
                                <div class="lead-info">
                                    <span class="lead-name">Diego Martinez</span>
                                    <span class="lead-meta">Discovery • Consulting</span>
                                </div>
                                <span class="status-pill pending">In review</span>
                                <span class="lead-profit">+$960</span>
                            </div>
                        </div>
                    </div>
                    <div class="cursor-dot"></div>
                    <div class="click-ripple"></div>
                </div>

                <div class="scene scene-ecommerce" data-scene="ecommerce">
                    <div class="ui-window h-full">
                        <div class="product-card">
                            <div class="skeleton w-full h-32 rounded-2xl mb-4"></div>
                            <div class="h-3 rounded-full bg-slate-200"></div>
                            <div class="h-3 rounded-full bg-slate-200 mt-2 w-3/4"></div>
                            <div class="btn">Add to cart</div>
                        </div>
                        <div class="cart-panel">
                            <div class="text-sm font-semibold text-gray-900">Cart</div>
                            <div class="cart-line mt-4"></div>
                            <div class="cart-line"></div>
                            <div class="btn text-[12px] mt-4">Checkout →</div>
                        </div>
                        <div class="checkout-panel">
                            <div class="text-sm font-semibold text-gray-900">Checkout</div>
                            <div class="checkout-line mt-4"></div>
                            <div class="checkout-line"></div>
                            <div class="checkout-line"></div>
                            <div class="btn text-[12px] mt-4">Pay now</div>
                        </div>
                        <div class="order-success">✔ Order successful</div>
                    </div>
                    <div class="cursor-dot"></div>
                    <div class="click-ripple ripple-add"></div>
                    <div class="click-ripple ripple-checkout"></div>
                    <div class="click-ripple ripple-pay"></div>
                </div>

                <div class="scene scene-automation" data-scene="automation">
                    <div class="ui-window h-full">
                        <div class="automation-grid">
                            <div class="code-window">
                                <div class="flex items-center gap-2 text-[11px] text-gray-300 mb-3">
                                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                                    Automation script
                                </div>
                                <div class="code-line" style="--delay:0.05s">const lead = await fetchLead();</div>
                                <div class="code-line" style="--delay:0.12s">if (lead.intent === "demo") {</div>
                                <div class="code-line" style="--delay:0.2s">  queueEmail("Schedule demo", lead.email);</div>
                                <div class="code-line" style="--delay:0.28s">  syncCRM(lead.id, { stage: "Active" });</div>
                                <div class="code-line" style="--delay:0.36s">}</div>
                                <div class="code-line" style="--delay:0.44s">logRun("Automation deployed");<span class="cursor-block"></span></div>

                                <div class="run-status mt-4">
                                    <span>●</span> Running automation flow
                                </div>
                            </div>

                            <div class="automation-flow">
                                <div class="automation-steps">
                                    <div class="automation-step" style="--delay:0.12s">
                                        <span class="bubble"></span>
                                        <div>
                                            <strong>Webhook received</strong>
                                            <span>New signup detected</span>
                                        </div>
                                    </div>
                                    <div class="automation-step" style="--delay:0.22s">
                                        <span class="bubble"></span>
                                        <div>
                                            <strong>Qualify lead</strong>
                                            <span>Score raised to 92</span>
                                        </div>
                                    </div>
                                    <div class="automation-step" style="--delay:0.32s">
                                        <span class="bubble"></span>
                                        <div>
                                            <strong>Create task</strong>
                                            <span>Assign to sales team</span>
                                        </div>
                                    </div>
                                    <div class="automation-step" style="--delay:0.42s">
                                        <span class="bubble"></span>
                                        <div>
                                            <strong>Send confirmation</strong>
                                            <span>Meeting link shared</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="automation-log">
                                    <span class="dot"></span>
                                    Workflow synced to CRM
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cursor-dot"></div>
                </div>

                <div class="scene scene-dashboard" data-scene="dashboard">
                    <div class="ui-window h-full">
                        <div class="widget-grid">
                            <div class="widget">
                                <p class="text-[11px] text-gray-500 uppercase tracking-wide">Bookings</p>
                                <div class="widget-value">
                                    <div class="digit-roller" style="--scroll:-140%">
                                        <span>24</span>
                                        <span>48</span>
                                        <span>72</span>
                                        <span>96</span>
                                        <span>124</span>
                                    </div>
                                </div>
                                <div class="widget-bar"></div>
                                <div class="hover-glow"></div>
                            </div>
                            <div class="widget">
                                <p class="text-[11px] text-gray-500 uppercase tracking-wide">Revenue</p>
                                <div class="widget-value">
                                    <div class="digit-roller" style="--scroll:-160%">
                                        <span>$2k</span>
                                        <span>$4k</span>
                                        <span>$6k</span>
                                        <span>$9k</span>
                                        <span>$12k</span>
                                    </div>
                                </div>
                                <div class="widget-bar"></div>
                            </div>
                            <div class="widget">
                                <p class="text-[11px] text-gray-500 uppercase tracking-wide">Automation runs</p>
                                <div class="widget-value">
                                    <div class="digit-roller" style="--scroll:-120%">
                                        <span>5</span>
                                        <span>12</span>
                                        <span>24</span>
                                        <span>48</span>
                                        <span>64</span>
                                    </div>
                                </div>
                                <div class="widget-bar"></div>
                            </div>
                            <div class="widget">
                                <p class="text-[11px] text-gray-500 uppercase tracking-wide">Store sales</p>
                                <div class="widget-value">
                                    <div class="digit-roller" style="--scroll:-150%">
                                        <span>8</span>
                                        <span>16</span>
                                        <span>32</span>
                                        <span>48</span>
                                        <span>76</span>
                                    </div>
                                </div>
                                <div class="widget-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cursor-dot"></div>
                </div>

            </div>

        </div>

    </div>
</section>

<section id="pricing" class="w-full bg-[#f7f7f7] py-16 border-t border-gray-200">
    <div class="max-w-[1150px] mx-auto px-6 text-center">

        <span class="inline-flex items-center bg-white border border-gray-300 
                     px-3 py-1 text-xs rounded-full text-gray-600 shadow-sm mb-6">
            Pricing
        </span>

        <h2 class="text-[38px] md:text-[44px] font-semibold text-[#181818] leading-[1.2]">
            Simple, transparent pricing
        </h2>

        <p class="mt-3 text-gray-600 text-[15px] leading-relaxed">
            All plans include a <strong>$1 trial for 14 days</strong>. Cancel anytime.
        </p>

        <div class="flex justify-center mt-8 mb-10">
            <div class="bg-white border border-gray-200 rounded-full p-1 flex text-sm shadow-sm">
                <button id="monthlyBtn" class="px-4 py-2 rounded-full font-medium bg-black text-white">
                    Monthly
                </button>
                <button id="yearlyBtn" class="px-4 py-2 rounded-full font-medium text-gray-700 hover:bg-gray-100">
                    Yearly <span class="text-green-600">(save 20%)</span>
                </button>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mt-6">

            <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm p-8 flex flex-col text-left">
                <h3 class="text-lg font-semibold text-gray-900">Starter</h3>
                <p class="text-sm text-gray-500">For freelancers & creators</p>

                <div class="mt-6 flex items-end gap-1">
                    <span class="starterPrice text-[34px] font-bold text-gray-900">$19</span>
                    <span class="text-gray-500 text-sm mb-1">/mo</span>
                </div>
                <p class="text-xs text-gray-500 mt-1">$1 trial applies</p>

                <ul class="mt-6 space-y-3 text-sm text-gray-700">
                    <li>✔ 1 Website</li>
                    <li>✔ Basic CRM</li>
                    <li>✔ Booking System</li>
                    <li>✔ Sell Services</li>
                    <li>✔ Basic Automations</li>
                </ul>

                <a href="#" class="mt-auto inline-flex justify-center bg-black text-white 
                                  px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-black/90">
                    Start for $1 →
                </a>
            </div>

            <div class="bg-white border-2 border-black rounded-[20px] shadow-lg p-8 flex flex-col text-left relative">
                <span class="absolute -top-3 left-1/2 -translate-x-1/2 bg-black text-white 
                             px-3 py-1 text-[11px] rounded-full font-semibold tracking-wide shadow">
                    MOST POPULAR
                </span>

                <h3 class="text-lg font-semibold text-gray-900">Pro</h3>
                <p class="text-sm text-gray-500">Best for growing businesses</p>

                <div class="mt-6 flex items-end gap-1">
                    <span class="proPrice text-[34px] font-bold text-gray-900">$49</span>
                    <span class="text-gray-500 text-sm mb-1">/mo</span>
                </div>
                <p class="text-xs text-gray-500 mt-1">$1 trial applies</p>

                <ul class="mt-6 space-y-3 text-sm text-gray-700">
                    <li>✔ Unlimited Websites</li>
                    <li>✔ Full CRM + Pipelines</li>
                    <li>✔ Automations + Workflows</li>
                    <li>✔ Online Store + Checkout</li>
                    <li>✔ Custom Domain</li>
                    <li>✔ Priority Support</li>
                </ul>

                <a href="#" class="mt-auto inline-flex justify-center bg-black text-white 
                                  px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-black/90">
                    Start for $1 →
                </a>
            </div>

            <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm p-8 flex flex-col text-left">
                <h3 class="text-lg font-semibold text-gray-900">Business</h3>
                <p class="text-sm text-gray-500">For agencies & organizations</p>

                <div class="mt-6 flex items-end gap-1">
                    <span class="businessPrice text-[34px] font-bold text-gray-900">$99</span>
                    <span class="text-gray-500 text-sm mb-1">/mo</span>
                </div>
                <p class="text-xs text-gray-500 mt-1">$1 trial applies</p>

                <ul class="mt-6 space-y-3 text-sm text-gray-700">
                    <li>✔ Unlimited Everything</li>
                    <li>✔ Teams + Permissions</li>
                    <li>✔ Advanced Automations</li>
                    <li>✔ API Access</li>
                    <li>✔ White-label Options</li>
                    <li>✔ Dedicated Support</li>
                </ul>

                <a href="#" class="mt-auto inline-flex justify-center bg-black text-white 
                                  px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-black/90">
                    Start for $1 →
                </a>
            </div>

        </div>
    </div>
</section>

<section class="w-full bg-white py-24">
    <div class="max-w-[1150px] mx-auto px-6 text-center">

        <span class="inline-flex items-center bg-gray-100 text-gray-600 text-xs px-3 py-1 rounded-full mb-4">
            Key benefits
        </span>

        <h2 class="text-[32px] md:text-[44px] font-semibold leading-tight text-gray-900">
            How Webmakerr works for talent<br class="hidden md:block">
            acquisition teams
        </h2>

        <p class="max-w-[700px] mx-auto mt-4 text-gray-600 text-[15px] leading-relaxed">
            Accelerate your hiring process with scheduling tools that make it easy to
            connect with candidates, coordinate interviews, and streamline recruitment
            workflows.
        </p>

        <a href="#pricing"
           class="inline-flex items-center bg-black text-white px-6 py-3 rounded-lg 
                  text-sm font-semibold mt-6 hover:bg-black/90 transition">
            Get started →
        </a>
    </div>

    <div class="max-w-[1150px] mx-auto px-6 mt-20 grid lg:grid-cols-2 gap-12 items-center">

        <div class="flex justify-center lg:justify-start">
    <div class="bg-white border border-gray-200 rounded-[20px] shadow-[0_6px_20px_rgba(0,0,0,0.05)] 
                p-6 w-full max-w-[540px]">

        <div class="flex items-center space-x-2 mb-4">
            <div class="w-3 h-3 rounded-full bg-gray-300"></div>
            <div class="w-3 h-3 rounded-full bg-gray-300"></div>
            <div class="w-3 h-3 rounded-full bg-gray-300"></div>
        </div>

        <div class="w-full bg-gray-100 text-gray-500 text-[11px] py-1 rounded-full text-center mb-5 
                    border border-gray-200">
            webmakerr.com/instant-meeting
        </div>

        <div class="grid grid-cols-2 gap-4 mb-5">

            <div class="relative rounded-xl overflow-hidden bg-gray-200">
                <img src="https://via.placeholder.com/700x450"
                     class="w-full h-full object-cover" />
                <span class="absolute bottom-2 left-2 bg-black/60 text-white text-[11px] px-2 py-0.5 rounded">
                    Nizar
                </span>
            </div>

            <div class="relative rounded-xl overflow-hidden bg-gray-200">
                <img src="https://via.placeholder.com/700x450"
                     class="w-full h-full object-cover" />
                <span class="absolute bottom-2 left-2 bg-black/60 text-white text-[11px] px-2 py-0.5 rounded">
                    Max
                </span>
            </div>

            <div class="relative rounded-xl overflow-hidden bg-gray-200">
                <img src="https://via.placeholder.com/700x450"
                     class="w-full h-full object-cover" />
                <span class="absolute bottom-2 left-2 bg-black/60 text-white text-[11px] px-2 py-0.5 rounded">
                    Bailey
                </span>
            </div>

            <div class="relative rounded-xl overflow-hidden bg-gray-200">
                <img src="https://via.placeholder.com/700x450"
                     class="w-full h-full object-cover" />
                <span class="absolute bottom-2 left-2 bg-black/60 text-white text-[11px] px-2 py-0.5 rounded">
                    Ewa
                </span>
            </div>

        </div>

        <div class="flex items-center justify-center space-x-6 text-gray-600 text-[18px] pb-2">

            <button class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center hover:bg-gray-200">
                🎤
            </button>

            <button class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center hover:bg-gray-200">
                🎥
            </button>

            <button class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center hover:bg-gray-200">
                💬
            </button>

            <button class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center hover:bg-gray-200">
                🖥️
            </button>

        </div>

    </div>
</div>


        <div class="flex flex-col justify-center pl-4">

    <span class="inline-flex items-center justify-center w-8 h-8 rounded-md 
                 bg-gray-100 text-gray-700 text-xs font-medium shadow-sm mb-4">
        01
    </span>

    <h3 class="text-[28px] md:text-[34px] font-semibold text-gray-900 leading-tight mb-4">
        Simplified interview scheduling
    </h3>

    <p class="text-gray-600 text-[15px] leading-relaxed max-w-[430px]">
        Coordinate interviews across time zones without the back-and-forth.
        Webmakerr integrates with video conferencing tools, supports panel
        interviews, and ensures a seamless experience for both recruiters
        and candidates.
    </p>

</div>


    </div>
</section>

<section class="w-full bg-[#fafafa] py-24 border-t border-gray-200">
    <div class="max-w-[1150px] mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

        <div class="order-1">

            <span class="inline-flex items-center justify-center w-8 h-8 rounded-md 
                         bg-gray-100 text-gray-700 text-xs font-medium shadow-sm mb-4">
                04
            </span>

            <h3 class="text-[28px] md:text-[34px] font-semibold text-gray-900 leading-tight">
                Simplify team coordination
            </h3>

            <p class="mt-4 text-[15px] text-gray-600 leading-relaxed max-w-[480px]">
                Webmakerr keeps your entire team in sync with shared
                availability, pooled schedules, and collective booking pages.
                Ensure the right team member is always matched with the
                right client, automatically.
            </p>

        </div>

        <div class="order-2 flex justify-center lg:justify-end">
            <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm 
                        w-full max-w-[540px] p-6">

                <div class="flex items-center gap-2 mb-6">
                    <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                    <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                    <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                </div>

                <h4 class="text-[18px] font-semibold text-gray-900 mb-1">
                    Team Availability Overview
                </h4>
                <p class="text-[14px] text-gray-600 mb-4">
                    One view to understand who is available and when.
                </p>

                <div class="space-y-4">

                    <div class="flex items-center justify-between bg-gray-50 border border-gray-200 rounded-xl p-4">
                        <div class="flex items-center gap-3">
                            <img src="https://via.placeholder.com/40" class="w-10 h-10 rounded-full" />
                            <div>
                                <p class="text-[14px] font-semibold text-gray-900">Sarah</p>
                                <p class="text-[13px] text-gray-600">Available 9am–4pm</p>
                            </div>
                        </div>
                        <span class="text-[12px] px-2 py-1 rounded bg-green-100 text-green-700">
                            Online
                        </span>
                    </div>

                    <div class="flex items-center justify-between bg-gray-50 border border-gray-200 rounded-xl p-4">
                        <div class="flex items-center gap-3">
                            <img src="https://via.placeholder.com/40" class="w-10 h-10 rounded-full" />
                            <div>
                                <p class="text-[14px] font-semibold text-gray-900">James</p>
                                <p class="text-[13px] text-gray-600">Available 11am–6pm</p>
                            </div>
                        </div>
                        <span class="text-[12px] px-2 py-1 rounded bg-yellow-100 text-yellow-700">
                            Busy
                        </span>
                    </div>

                    <div class="flex items-center justify-between bg-gray-50 border border-gray-200 rounded-xl p-4">
                        <div class="flex items-center gap-3">
                            <img src="https://via.placeholder.com/40" class="w-10 h-10 rounded-full" />
                            <div>
                                <p class="text-[14px] font-semibold text-gray-900">Alicia</p>
                                <p class="text-[13px] text-gray-600">Out today</p>
                            </div>
                        </div>
                        <span class="text-[12px] px-2 py-1 rounded bg-red-100 text-red-700">
                            Offline
                        </span>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

<section class="w-full bg-white py-24 border-t border-gray-200">
    <div class="max-w-[1150px] mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

        <div class="flex justify-center lg:justify-start">
            <div class="relative bg-white border border-gray-200 rounded-[20px] shadow-sm 
                        w-full max-w-[540px] h-[380px] overflow-hidden p-6">

                <div class="flex items-center gap-2 mb-5">
                    <div class="w-3 h-3 rounded-full bg-gray-300"></div>
                    <div class="w-3 h-3 rounded-full bg-gray-300"></div>
                    <div class="w-3 h-3 rounded-full bg-gray-300"></div>
                </div>

                <div class="absolute inset-0 ecommerce-slide ecommerce-1">
                    <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm max-w-[350px] mx-auto">

                        <div class="w-full h-[160px] bg-gray-200 rounded-lg mb-4 animate-pulse"></div>

                        <h4 class="text-[16px] font-semibold text-gray-900">Premium Headphones</h4>
                        <p class="text-[13px] text-gray-600 mt-1">High-quality sound, noise cancelling.</p>

                        <button class="mt-4 w-full bg-black text-white text-[14px] py-2 rounded-lg">
                            Add to Cart
                        </button>

                        <div class="cursor-ec"></div>
                        <div class="cursor-click-ec"></div>
                    </div>
                </div>

                <div class="absolute inset-0 ecommerce-slide ecommerce-2 opacity-0">
                    <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm max-w-[360px] mx-auto">

                        <h4 class="text-[16px] font-semibold text-gray-900 mb-3">Your Cart</h4>

                        <div class="flex items-center gap-3 border-b border-gray-200 pb-3">
                            <div class="w-[60px] h-[60px] bg-gray-200 rounded-lg"></div>
                            <div>
                                <p class="text-[14px] font-medium text-gray-900">Premium Headphones</p>
                                <p class="text-[13px] text-gray-600">$89.00</p>
                            </div>
                        </div>

                        <button class="mt-4 w-full bg-black text-white text-[14px] py-2 rounded-lg">
                            Checkout →
                        </button>

                        <div class="cursor-ec-cart"></div>
                        <div class="cursor-click-ec-cart"></div>
                    </div>
                </div>

                <div class="absolute inset-0 ecommerce-slide ecommerce-3 opacity-0">
                    <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm max-w-[380px] mx-auto">

                        <h4 class="text-[16px] font-semibold text-gray-900 mb-3">Checkout</h4>

                        <input class="w-full border border-gray-300 rounded px-3 py-2 text-[14px] mb-3" placeholder="Full Name" />
                        <input class="w-full border border-gray-300 rounded px-3 py-2 text-[14px] mb-3" placeholder="Email" />
                        <input class="w-full border border-gray-300 rounded px-3 py-2 text-[14px]" placeholder="Card Number" />

                        <button class="mt-4 w-full bg-black text-white text-[14px] py-2 rounded-lg">
                            Pay $89
                        </button>

                        <div class="cursor-ec-checkout"></div>
                        <div class="cursor-click-ec-checkout"></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex flex-col justify-center">

            <span class="inline-flex items-center justify-center w-8 h-8 rounded-md 
                         bg-gray-100 text-gray-700 text-xs font-medium shadow-sm mb-4">
                05
            </span>

            <h3 class="text-[28px] md:text-[34px] font-semibold text-gray-900 leading-tight">
                Sell smarter with automated ecommerce flows
            </h3>

            <p class="mt-4 text-[15px] text-gray-600 leading-relaxed max-w-[480px]">
                Webmakerr gives you a frictionless product-to-checkout experience.
                Automate upsells, reduce cart abandonment, and offer your customers
                a seamless buying journey—fully integrated with CRM and workflows.
            </p>

        </div>

    </div>
</section>

<style>

.ecommerce-slide {
    transition: opacity .6s ease-in-out;
}

/* ===================== */
/* Cursor for Product    */
/* ===================== */
.cursor-ec {
    width:8px; height:8px; background:#111; border-radius:50%;
    position:absolute; top:220px; left:230px; 
    transform:translate(-50%,-50%);
    animation:ecCursor 6s infinite ease-in-out;
}
@keyframes ecCursor {
    0%   { top:220px; left:230px; }
    20%  { top:260px; left:230px; } /* move to button */
    30%  { top:260px; left:230px; }
    100% { top:220px; left:230px; }
}

.cursor-click-ec {
    width:14px; height:14px; border:2px solid #111; border-radius:50%;
    position:absolute; top:260px; left:230px;
    transform:translate(-50%,-50%) scale(.4);
    opacity:0;
    animation:ecClick 6s infinite;
}
@keyframes ecClick {
    0%,18%{opacity:0;}
    20%{opacity:1; transform:scale(1);}
    30%{opacity:0; transform:scale(1.6);}
    100%{opacity:0;}
}

/* ===================== */
/* Cursor for Cart       */
/* ===================== */
.cursor-ec-cart {
    width:8px; height:8px; background:#111; border-radius:50%;
    position:absolute; top:260px; left:250px;
    transform:translate(-50%,-50%);
    animation:ecCartCursor 6s infinite ease;
}
@keyframes ecCartCursor {
    0% { opacity:0; }
    34%{ opacity:1; top:260px; left:250px; }
    50%{ top:300px; left:250px; } /* move to checkout */
    60%{ top:300px; left:250px; }
    100%{ opacity:0; }
}

.cursor-click-ec-cart {
    width:14px; height:14px; border:2px solid #111; border-radius:50%;
    position:absolute; top:300px; left:250px;
    transform:translate(-50%,-50%) scale(.4);
    opacity:0;
    animation:ecCartClick 6s infinite;
}
@keyframes ecCartClick {
    0%,45%{opacity:0;}
    50%{opacity:1; transform:scale(1);}
    60%{opacity:0; transform:scale(1.6);}
    100%{opacity:0;}
}

/* ===================== */
/* Cursor for Checkout   */
/* ===================== */
.cursor-ec-checkout {
    width:8px; height:8px; background:#111; border-radius:50%;
    position:absolute; top:280px; left:240px;
    transform:translate(-50%,-50%);
    animation:ecCheckoutCursor 6s infinite ease;
}
@keyframes ecCheckoutCursor {
    0%{opacity:0;}
    60%{opacity:1; top:280px; left:240px;}
    80%{top:330px; left:240px;} /* click pay */
    90%{top:330px; left:240px;}
    100%{opacity:0;}
}

.cursor-click-ec-checkout {
    width:14px; height:14px; border:2px solid #111; border-radius:50%;
    position:absolute; top:330px; left:240px;
    transform:translate(-50%,-50%) scale(.4);
    opacity:0;
    animation:ecCheckoutClick 6s infinite;
}
@keyframes ecCheckoutClick {
    0%,70%{opacity:0;}
    80%{opacity:1; transform:scale(1);}
    90%{opacity:0; transform:scale(1.6);}
    100%{opacity:0;}
}

</style>

<section class="w-full bg-[#fafafa] py-24 border-t border-gray-200">
    <div class="max-w-[1150px] mx-auto px-6 text-center">

        <span class="inline-flex items-center bg-white border border-gray-300 
                     px-3 py-1 text-xs rounded-full text-gray-600 shadow-sm mb-6">
            Testimonials
        </span>

        <h2 class="text-[32px] md:text-[44px] font-semibold text-gray-900 leading-tight mb-12">
            Loved by businesses worldwide
        </h2>

        <div class="relative max-w-[820px] mx-auto">

            <div id="testimonialTrack"
                 class="flex transition-transform duration-700 ease-out select-none">

                <div class="testimonial-slide w-full flex-shrink-0 px-4">
                    <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm p-8">
                        <p class="text-[16px] text-gray-700 leading-relaxed italic">
                            “Webmakerr helped us automate our entire booking flow.
                            Our no-shows dropped by 60% within the first month.”
                        </p>

                        <div class="flex items-center gap-4 mt-6">
                            <img src="https://via.placeholder.com/40"
                                 class="w-10 h-10 rounded-full" />
                            <div class="text-left">
                                <p class="font-semibold text-gray-900 text-sm">Amanda Lee</p>
                                <p class="text-xs text-gray-500">Head of Operations, LumiHealth</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-slide w-full flex-shrink-0 px-4">
                    <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm p-8">
                        <p class="text-[16px] text-gray-700 leading-relaxed italic">
                            “The $1 trial was a game-changer. We onboarded our entire
                            sales team in minutes and started closing appointments instantly.”
                        </p>

                        <div class="flex items-center gap-4 mt-6">
                            <img src="https://via.placeholder.com/40"
                                 class="w-10 h-10 rounded-full" />
                            <div class="text-left">
                                <p class="font-semibold text-gray-900 text-sm">Daniel Morris</p>
                                <p class="text-xs text-gray-500">Sales Lead, IntraPro</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-slide w-full flex-shrink-0 px-4">
                    <div class="bg-white border border-gray-200 rounded-[20px] shadow-sm p-8">
                        <p class="text-[16px] text-gray-700 leading-relaxed italic">
                            “Finally, a business tool that feels modern. Automated
                            workflows and booking forms made our operations 10× smoother.”
                        </p>

                        <div class="flex items-center gap-4 mt-6">
                            <img src="https://via.placeholder.com/40"
                                 class="w-10 h-10 rounded-full" />
                            <div class="text-left">
                                <p class="font-semibold text-gray-900 text-sm">Sophia Carter</p>
                                <p class="text-xs text-gray-500">Founder, Brightside Studio</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button id="prevBtn"
                    class="absolute -left-4 top-1/2 -translate-y-1/2 bg-white border border-gray-200 
                           w-10 h-10 rounded-full flex items-center justify-center shadow-sm hover:bg-gray-50">
                ←
            </button>

            <button id="nextBtn"
                    class="absolute -right-4 top-1/2 -translate-y-1/2 bg-white border border-gray-200 
                           w-10 h-10 rounded-full flex items-center justify-center shadow-sm hover:bg-gray-50">
                →
            </button>

        </div>

    </div>
</section>

<script>
const track = document.getElementById("testimonialTrack");
const slides = document.querySelectorAll(".testimonial-slide");
const prev = document.getElementById("prevBtn");
const next = document.getElementById("nextBtn");

let index = 0;
const total = slides.length;

function updateSlider() {
    track.style.transform = `translateX(-${index * 100}%)`;
}

next.onclick = () => {
    index = (index + 1) % total;
    updateSlider();
};

prev.onclick = () => {
    index = (index - 1 + total) % total;
    updateSlider();
};

setInterval(() => {
    index = (index + 1) % total;
    updateSlider();
}, 4000);

let startX = 0;
track.addEventListener("touchstart", e => startX = e.touches[0].clientX);
track.addEventListener("touchend", e => {
    let endX = e.changedTouches[0].clientX;
    if (endX < startX - 50) next.onclick();
    if (endX > startX + 50) prev.onclick();
});
</script>


<script>
document.addEventListener("DOMContentLoaded", () => {
    const heroCard = document.getElementById("webmakerrHero");
    if (!heroCard) return;

    const timeline = [
        { id: "booking", duration: 6000 },
        { id: "crm", duration: 4000 },
        { id: "ecommerce", duration: 6000 },
        { id: "automation", duration: 4000 },
        { id: "dashboard", duration: 3000 },
    ];

    const scenes = timeline.map(item => ({
        el: heroCard.querySelector(`[data-scene="${item.id}"]`),
        duration: item.duration,
    })).filter(scene => scene.el);

    let index = 0;
    let timer;

    const activate = (idx) => {
        scenes.forEach((scene, sceneIndex) => {
            scene.el.classList.toggle("active", sceneIndex === idx);
        });

        clearTimeout(timer);
        timer = setTimeout(() => {
            const nextIndex = (idx + 1) % scenes.length;
            if (nextIndex === 0) {
                heroCard.classList.add("resetting");
                setTimeout(() => heroCard.classList.remove("resetting"), 500);
            }
            activate(nextIndex);
        }, scenes[idx].duration);
    };

    activate(index);
});
</script>

<footer class="w-full py-10 text-center text-gray-500 text-sm">
    © 2025 Webmakerr. All rights reserved.
</footer>

<?php
get_footer();
?>
