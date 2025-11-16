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

:root { --cursor-color:#0f172a; --hero-bg:#f8fafc; --card-radius:20px; }

.hero-anim-card {
  position: relative;
  width: 100%;
  height: 420px;
  border-radius: var(--card-radius);
  overflow: hidden;
  border: 1px solid #e5e7eb;
  background: linear-gradient(135deg, #ffffff, #eef2ff);
  box-shadow: 0 25px 60px rgba(15, 23, 42, 0.12);
}

.hero-anim-card::after {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(248, 250, 252, 0.82);
  opacity: 0;
  transition: opacity .45s ease;
  pointer-events: none;
  z-index: 70;
}

.hero-anim-card.resetting::after { opacity: 1; }

.scene {
  position: absolute;
  inset: 0;
  padding: 28px;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transform: translateY(14px) scale(.98);
  transition: opacity .7s ease, transform .7s ease;
  pointer-events: none;
  background: var(--hero-bg);
}
.scene.active { opacity: 1; transform: translateY(0) scale(1); pointer-events: auto; }

.scene-layer { position: relative; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; }
.surface { background: white; border: 1px solid #e5e7eb; border-radius: 18px; box-shadow: 0 16px 48px rgba(15, 23, 42, 0.1); }

.cursor-dot { width: 10px; height: 10px; border-radius: 999px; background: var(--cursor-color); position: absolute; transform: translate(-50%, -50%); z-index: 60; opacity: 0; }
.scene.active .cursor-dot { opacity: 1; }
.click-ripple { position: absolute; width: 18px; height: 18px; border-radius: 999px; border: 2px solid var(--cursor-color); transform: translate(-50%, -50%) scale(.25); opacity: 0; z-index: 50; }
@keyframes ripple { 0% { opacity: 0; transform: translate(-50%,-50%) scale(.25); } 12% { opacity: 1; } 45% { transform: translate(-50%,-50%) scale(1.35); } 100% { opacity: 0; transform: translate(-50%,-50%) scale(1.8); } }

.scene-transition { position: absolute; inset: 0; background: linear-gradient(120deg, rgba(255,255,255,.85), rgba(241,245,249,.65)); opacity: 0; filter: blur(16px); pointer-events: none; }
.scene.active .scene-transition { animation: sceneGlow 1.2s ease forwards; }
@keyframes sceneGlow { from { opacity: 0; transform: scale(1.02); } to { opacity: 1; transform: scale(1); } }

/* BOOKING */
.scene-booking .booking-shell { width: 100%; max-width: 920px; display: grid; grid-template-columns: 1.4fr .75fr; gap: 20px; }
.booking-calendar { position: relative; overflow: hidden; }
.booking-calendar .month { font-size: 13px; font-weight: 700; color: #0f172a; }
.booking-calendar .label-row { display: grid; grid-template-columns: repeat(7,1fr); gap: 4px; margin-top: 10px; color: #94a3b8; font-size: 10px; text-transform: uppercase; letter-spacing: 0.08em; }
.booking-calendar .day-grid { display: grid; grid-template-columns: repeat(7,1fr); gap: 8px; margin-top: 10px; }
.booking-cell { height: 40px; border-radius: 12px; background: #e5e7eb; color: #111827; font-size: 13px; display: flex; align-items: center; justify-content: center; opacity: 0; transform: translateY(10px) scale(.92); box-shadow: inset 0 1px 0 rgba(255,255,255,.9); }
.booking-cell.highlight { background: linear-gradient(135deg,#c7d2fe,#6366f1); color: #0f172a; font-weight: 700; box-shadow: 0 12px 24px rgba(99,102,241,0.22); }
.scene-booking.active .booking-cell { animation: dayRise .6s forwards ease-out; animation-delay: var(--d); }
@keyframes dayRise { from { opacity: 0; transform: translateY(10px) scale(.92); } to { opacity: 1; transform: translateY(0) scale(1); } }

.booking-sidebar { display: flex; flex-direction: column; gap: 12px; }
.booking-sidebar .chip { display: flex; align-items: center; justify-content: space-between; padding: 10px 12px; border-radius: 12px; background: #f3f4f6; border: 1px solid #e5e7eb; font-size: 13px; color: #0f172a; box-shadow: 0 8px 18px rgba(15,23,42,0.05); opacity: 0; transform: translateX(12px); }
.scene-booking.active .chip { animation: chipSlide .65s forwards ease; animation-delay: var(--d); }
@keyframes chipSlide { from { opacity: 0; transform: translateX(12px); } to { opacity: 1; transform: translateX(0); } }

.booking-form { position: absolute; left: 50%; bottom: 26px; transform: translate(-50%,80px) scale(.97); width: 92%; max-width: 820px; background: white; border: 1px solid #e2e8f0; border-radius: 18px; padding: 18px 20px; box-shadow: 0 30px 70px rgba(15,23,42,0.16); opacity: 0; }
.scene-booking.active .booking-form { animation: formLift 6s cubic-bezier(.4,0,.2,1) forwards; }
@keyframes formLift { 0%,18% { opacity: 0; transform: translate(-50%,80px) scale(.97); } 26%,74% { opacity: 1; transform: translate(-50%,0) scale(1); } 90%,100% { opacity: 0; transform: translate(-50%,20px) scale(.98); } }

.booking-input { display: flex; flex-direction: column; gap: 6px; font-size: 12px; color: #6b7280; }
.booking-input label { text-transform: uppercase; letter-spacing: 0.08em; font-weight: 700; font-size: 10px; }
.booking-input .field { border: 1px solid #e5e7eb; background: #f8fafc; border-radius: 12px; padding: 10px 12px; font-size: 13px; color: #0f172a; position: relative; overflow: hidden; }
.typed-line { display: block; width: 0ch; white-space: nowrap; border-right: 2px solid #0f172a; }
.scene-booking.active .typed-name { animation: typingName 6s steps(6,end) forwards; }
@keyframes typingName { 0%,22% { width: 0ch; } 32%,46% { width: 6ch; } 100% { width: 6ch; } }
.scene-booking.active .typed-email { animation: typingEmail 6s steps(11,end) forwards; }
@keyframes typingEmail { 0%,32% { width: 0ch; } 42%,60% { width: 11ch; } 100% { width: 11ch; } }

.time-select { display: flex; align-items: center; gap: 8px; margin-top: 6px; }
.time-chip { padding: 8px 12px; border-radius: 12px; background: #e5e7eb; color: #0f172a; font-weight: 600; box-shadow: inset 0 1px 0 rgba(255,255,255,.9); transform: scale(.96); opacity: .45; }
.scene-booking.active .time-chip.hot { animation: timeFocus 6s forwards; }
@keyframes timeFocus { 0%,50% { opacity: .45; transform: scale(.96); } 56%,72% { opacity: 1; transform: scale(1.03); box-shadow: 0 12px 24px rgba(14,165,233,0.3); background: linear-gradient(135deg,#bae6fd,#0ea5e9); color: #0f172a; } 100% { opacity: 1; transform: scale(1); } }

.confirm-btn { margin-top: 12px; height: 38px; border-radius: 12px; background: #0f172a; color: white; font-size: 13px; display: flex; align-items: center; justify-content: center; gap: 6px; letter-spacing: 0.01em; box-shadow: 0 10px 30px rgba(15,23,42,0.28); }
.scene-booking.active .confirm-btn { animation: confirmPulse 6s forwards; }
@keyframes confirmPulse { 0%,60% { box-shadow: 0 10px 30px rgba(15,23,42,0.18); transform: scale(1); } 66% { transform: scale(1.03); box-shadow: 0 0 0 0 rgba(14,165,233,0.38); } 72% { box-shadow: 0 0 0 16px rgba(14,165,233,0); transform: scale(1); } 100% { box-shadow: 0 12px 30px rgba(15,23,42,0.18); } }

.booking-success { position: absolute; right: 26px; top: 28px; background: #22c55e; color: white; font-size: 12px; padding: 8px 12px; border-radius: 12px; display: flex; align-items: center; gap: 6px; opacity: 0; box-shadow: 0 12px 24px rgba(34,197,94,0.35); }
.scene-booking.active .booking-success { animation: successBadge 6s forwards; }
@keyframes successBadge { 0%,70% { opacity: 0; transform: translateY(-8px); } 76%,90% { opacity: 1; transform: translateY(0); } 100% { opacity: 0; transform: translateY(-6px); } }

.scene-booking .cursor-dot { top: 180px; left: 200px; }
.scene-booking.active .cursor-dot { animation: bookingCursor 6s cubic-bezier(.4,0,.2,1) forwards; }
@keyframes bookingCursor { 0% { top: 200px; left: 220px; } 18% { top: 250px; left: 340px; } 32% { top: 320px; left: 260px; } 52% { top: 330px; left: 320px; } 70% { top: 360px; left: 420px; } 92% { top: 120px; left: 520px; } 100% { top: 200px; left: 220px; } }
.scene-booking .click-ripple { top: 250px; left: 340px; }
.scene-booking.active .click-ripple { animation: bookingRipple 6s forwards; }
@keyframes bookingRipple { 0%,12% { opacity: 0; transform: translate(-50%,-50%) scale(.25); } 18% { opacity: 1; transform: translate(-50%,-50%) scale(1); } 26% { opacity: 0; transform: translate(-50%,-50%) scale(1.6); } 100% { opacity: 0; } }

/* CRM */
.scene-crm .crm-shell { display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 18px; width: 100%; max-width: 880px; position: relative; }
.crm-column { display: flex; flex-direction: column; gap: 12px; }
.pipeline { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 14px; display: grid; grid-template-columns: repeat(4,1fr); gap: 10px; }
.pipeline .stage { background: white; border: 1px solid #e5e7eb; border-radius: 12px; padding: 10px; box-shadow: 0 8px 18px rgba(15,23,42,0.06); position: relative; transition: transform .35s ease, box-shadow .35s ease; }
.scene-crm.active .stage.hot { animation: stagePop 4s forwards; }
@keyframes stagePop { 0%,35% { transform: translateY(8px) scale(.96); box-shadow: 0 8px 18px rgba(15,23,42,0.08); } 45%,70% { transform: translateY(-4px) scale(1.03); box-shadow: 0 18px 40px rgba(99,102,241,0.25); } 100% { transform: translateY(0) scale(1); } }

.bar-row { display: flex; align-items: flex-end; gap: 10px; height: 140px; }
.bar { width: 30px; border-radius: 12px; background: linear-gradient(180deg,#dbeafe,#818cf8); opacity: .5; transform-origin: bottom; }
.scene-crm.active .bar { animation: barGrow 4s forwards; }
@keyframes barGrow { 0% { transform: scaleY(.1); opacity: .3; } 35% { opacity: .8; } 60% { transform: scaleY(var(--h)); } 100% { transform: scaleY(var(--h)); opacity: 1; } }

.metric-card { background: white; border: 1px solid #e5e7eb; border-radius: 14px; padding: 12px; box-shadow: 0 12px 32px rgba(15,23,42,0.08); }
.metric-card .title { font-size: 12px; color: #6b7280; text-transform: uppercase; letter-spacing: 0.08em; }
.metric-card .value { font-size: 22px; font-weight: 700; color: #0f172a; }

.crm-tooltip { position: absolute; left: 50%; top: 10px; transform: translate(-50%,-10px); background: #0f172a; color: white; font-size: 12px; padding: 8px 12px; border-radius: 12px; box-shadow: 0 10px 30px rgba(15,23,42,0.25); opacity: 0; }
.scene-crm.active .crm-tooltip { animation: crmTooltip 4s forwards; }
@keyframes crmTooltip { 0%,28% { opacity: 0; transform: translate(-50%,-10px); } 36%,70% { opacity: 1; transform: translate(-50%,0); } 100% { opacity: 0; transform: translate(-50%,-8px); } }

.crm-highlight { position: absolute; bottom: 20px; right: 24px; width: 90px; height: 90px; border-radius: 18px; border: 1px solid rgba(14,165,233,0.4); box-shadow: 0 0 0 0 rgba(14,165,233,0.2); opacity: 0; }
.scene-crm.active .crm-highlight { animation: crmGlow 4s forwards; }
@keyframes crmGlow { 0%,55% { opacity: 0; transform: scale(.92); } 65%,82% { opacity: 1; transform: scale(1); box-shadow: 0 0 0 14px rgba(14,165,233,0.15); } 100% { opacity: 0; transform: scale(.95); } }

.scene-crm .cursor-dot { top: 220px; left: 240px; }
.scene-crm.active .cursor-dot { animation: crmCursor 4s cubic-bezier(.4,0,.2,1) forwards; }
@keyframes crmCursor { 0% { top: 250px; left: 260px; } 26% { top: 140px; left: 320px; } 46% { top: 140px; left: 320px; } 64% { top: 110px; left: 420px; } 100% { top: 250px; left: 260px; } }
.scene-crm .click-ripple { top: 140px; left: 320px; }
.scene-crm.active .click-ripple { animation: crmRipple 4s forwards; }
@keyframes crmRipple { 0%,20% { opacity: 0; } 26% { opacity: 1; transform: translate(-50%,-50%) scale(1); } 34% { opacity: 0; transform: translate(-50%,-50%) scale(1.55); } 100% { opacity: 0; } }

/* ECOMMERCE */
.scene-ecommerce .commerce-shell { display: grid; grid-template-columns: 1.1fr 1fr; gap: 18px; width: 100%; max-width: 900px; position: relative; }
.product-card { background: white; border: 1px solid #e5e7eb; border-radius: 16px; padding: 16px; box-shadow: 0 16px 38px rgba(15,23,42,0.08); display: grid; gap: 10px; }
.product-visual { width: 100%; height: 150px; border-radius: 14px; background: linear-gradient(135deg,#d1fae5,#60a5fa); position: relative; overflow: hidden; box-shadow: inset 0 1px 0 rgba(255,255,255,.9); }
.product-visual::after { content: ""; position: absolute; inset: 0; background: radial-gradient(circle at 30% 30%,rgba(255,255,255,.6),transparent 60%); }
.product-meta { display: flex; align-items: center; justify-content: space-between; }
.price-tag { font-size: 20px; font-weight: 700; color: #0f172a; }
.rating { display: flex; gap: 4px; color: #f59e0b; font-size: 14px; }

.cart-panel, .checkout-panel { background: white; border: 1px solid #e5e7eb; border-radius: 16px; padding: 16px; position: absolute; opacity: 0; box-shadow: 0 20px 50px rgba(15,23,42,0.12); }
.cart-panel { width: 240px; right: 24px; top: 24px; transform: translateX(120px); }
.checkout-panel { width: 260px; right: 24px; bottom: 24px; transform: translateY(40px); }
.scene-ecommerce.active .cart-panel { animation: cartReveal 6s forwards; }
@keyframes cartReveal { 0%,18% { opacity: 0; transform: translateX(120px); } 26%,52% { opacity: 1; transform: translateX(0); } 78%,100% { opacity: 0; transform: translateX(80px); } }
.scene-ecommerce.active .checkout-panel { animation: checkoutReveal 6s forwards; }
@keyframes checkoutReveal { 0%,48% { opacity: 0; transform: translateY(40px); } 58%,80% { opacity: 1; transform: translateY(0); } 100% { opacity: 0; transform: translateY(16px); } }

.cart-line, .checkout-line { height: 12px; border-radius: 999px; background: #e5e7eb; position: relative; overflow: hidden; margin-top: 10px; }
.cart-line::after, .checkout-line::after { content: ""; position: absolute; inset: 0; background: #0f172a; width: 0; }
.scene-ecommerce.active .cart-line::after { animation: cartFill 6s forwards; }
@keyframes cartFill { 0%,22% { width: 0; } 40% { width: 90%; } 100% { width: 90%; } }
.scene-ecommerce.active .checkout-line::after { animation: checkoutFill 6s forwards; }
@keyframes checkoutFill { 0%,60% { width: 0; } 78% { width: 100%; } 100% { width: 100%; } }

.ecom-button { display: flex; align-items: center; justify-content: center; gap: 6px; padding: 10px 14px; background: #0f172a; color: white; border-radius: 12px; font-weight: 600; box-shadow: 0 12px 30px rgba(15,23,42,0.2); }
.scene-ecommerce .order-success { position: absolute; left: 50%; bottom: 36px; transform: translate(-50%,16px); padding: 10px 16px; background: #22c55e; color: white; font-weight: 600; border-radius: 14px; box-shadow: 0 14px 32px rgba(34,197,94,0.38); opacity: 0; }
.scene-ecommerce.active .order-success { animation: orderToast 6s forwards; }
@keyframes orderToast { 0%,74% { opacity: 0; transform: translate(-50%,16px); } 80%,92% { opacity: 1; transform: translate(-50%,0); } 100% { opacity: 0; transform: translate(-50%,8px); } }

.scene-ecommerce .cursor-dot { top: 240px; left: 220px; }
.scene-ecommerce.active .cursor-dot { animation: ecomCursor 6s cubic-bezier(.4,0,.2,1) forwards; }
@keyframes ecomCursor { 0% { top: 230px; left: 220px; } 18% { top: 210px; left: 320px; } 34% { top: 180px; left: 430px; } 52% { top: 240px; left: 520px; } 68% { top: 300px; left: 500px; } 82% { top: 330px; left: 420px; } 100% { top: 230px; left: 220px; } }
.scene-ecommerce .click-ripple { top: 210px; left: 320px; }
.scene-ecommerce .ripple-checkout { top: 180px; left: 430px; }
.scene-ecommerce .ripple-pay { top: 300px; left: 500px; }
.scene-ecommerce.active .click-ripple { animation: ecomRipple 6s forwards; }
.scene-ecommerce.active .ripple-checkout { animation: ecomRippleCheckout 6s forwards; }
.scene-ecommerce.active .ripple-pay { animation: ecomRipplePay 6s forwards; }
@keyframes ecomRipple { 0%,10% { opacity: 0; } 16% { opacity: 1; transform: translate(-50%,-50%) scale(1); } 24% { opacity: 0; transform: translate(-50%,-50%) scale(1.5); } 100% { opacity: 0; } }
@keyframes ecomRippleCheckout { 0%,28% { opacity: 0; } 36% { opacity: 1; transform: translate(-50%,-50%) scale(1); } 44% { opacity: 0; transform: translate(-50%,-50%) scale(1.5); } 100% { opacity: 0; } }
@keyframes ecomRipplePay { 0%,64% { opacity: 0; } 72% { opacity: 1; transform: translate(-50%,-50%) scale(1); } 82% { opacity: 0; transform: translate(-50%,-50%) scale(1.5); } 100% { opacity: 0; } }

/* AUTOMATION */
.scene-automation { background: linear-gradient(140deg,#eef2ff,#fdf2f8); }
.automation-shell { width: 100%; max-width: 880px; position: relative; overflow: hidden; padding: 20px; }
.node { position: absolute; min-width: 170px; padding: 12px 14px; border-radius: 14px; background: white; border: 1px solid #e5e7eb; box-shadow: 0 18px 38px rgba(15,23,42,0.1); display: flex; flex-direction: column; gap: 6px; }
.node .title { font-weight: 700; color: #0f172a; font-size: 14px; }
.node .desc { font-size: 12px; color: #6b7280; }
.scene-automation.active .node { animation: nodePulse 4s infinite ease-in-out; }
@keyframes nodePulse { 0% { transform: scale(.96); box-shadow: 0 18px 38px rgba(15,23,42,0.1); } 50% { transform: scale(1.03); box-shadow: 0 22px 48px rgba(79,70,229,0.22); } 100% { transform: scale(.98); } }

.connection { position: absolute; height: 3px; background: linear-gradient(90deg,#6366f1,#22c55e); transform-origin: left; opacity: .5; border-radius: 999px; }
.scene-automation.active .connection { animation: connectionDraw 4s forwards; }
@keyframes connectionDraw { 0% { transform: scaleX(0); opacity: 0; } 30% { transform: scaleX(1); opacity: .8; } 100% { opacity: .6; } }
.connection-vertical { width: 3px; height: 120px; transform-origin: top; }
.scene-automation.active .connection-vertical { animation: connectionRise 4s forwards; }
@keyframes connectionRise { 0% { transform: scaleY(0); opacity: 0; } 32% { transform: scaleY(1); opacity: .8; } 100% { opacity: .6; } }

.automation-badge { position: absolute; top: 18px; right: 18px; padding: 8px 12px; background: #ecfeff; color: #0f172a; font-weight: 700; border-radius: 12px; border: 1px solid #bae6fd; box-shadow: 0 12px 26px rgba(59,130,246,0.22); opacity: 0; }
.scene-automation.active .automation-badge { animation: automationBadge 4s forwards; }
@keyframes automationBadge { 0%,38% { opacity: 0; transform: translateY(-8px); } 46%,80% { opacity: 1; transform: translateY(0); } 100% { opacity: 0; transform: translateY(-6px); } }

.tooltip-automation { position: absolute; bottom: 18px; left: 18px; padding: 8px 12px; background: #0f172a; color: white; border-radius: 12px; font-size: 12px; box-shadow: 0 12px 32px rgba(15,23,42,0.28); opacity: 0; }
.scene-automation.active .tooltip-automation { animation: autoTooltip 4s forwards; }
@keyframes autoTooltip { 0%,55% { opacity: 0; transform: translateY(8px); } 65%,90% { opacity: 1; transform: translateY(0); } 100% { opacity: 0; transform: translateY(6px); } }

.scene-automation .cursor-dot { top: 260px; left: 200px; }
.scene-automation.active .cursor-dot { animation: automationCursor 4s cubic-bezier(.4,0,.2,1) forwards; }
@keyframes automationCursor { 0% { top: 260px; left: 200px; } 28% { top: 170px; left: 320px; } 54% { top: 230px; left: 440px; } 78% { top: 300px; left: 360px; } 100% { top: 260px; left: 200px; } }

/* DASHBOARD */
.scene-dashboard .dashboard-shell { width: 100%; max-width: 900px; display: grid; grid-template-columns: 1.1fr 1fr; gap: 18px; }
.metric-tiles { display: grid; grid-template-columns: repeat(3,1fr); gap: 10px; }
.metric { background: white; border: 1px solid #e5e7eb; border-radius: 14px; padding: 12px; box-shadow: 0 12px 32px rgba(15,23,42,0.08); opacity: 0; transform: translateY(12px); }
.metric .label { font-size: 11px; color: #6b7280; text-transform: uppercase; letter-spacing: 0.08em; }
.metric .value { font-size: 22px; font-weight: 800; color: #0f172a; }
.scene-dashboard.active .metric { animation: metricPop 3s forwards; animation-delay: var(--d); }
@keyframes metricPop { 0% { opacity: 0; transform: translateY(12px); } 30% { opacity: 1; transform: translateY(0); } 100% { opacity: 1; } }

.chart-card { background: white; border: 1px solid #e5e7eb; border-radius: 14px; padding: 14px; box-shadow: 0 12px 32px rgba(15,23,42,0.08); position: relative; }
.line-chart { height: 160px; background: linear-gradient(180deg,#eef2ff,#ffffff); border-radius: 12px; position: relative; overflow: hidden; }
.spark-line { position: absolute; left: 14px; right: 14px; bottom: 40px; height: 3px; background: linear-gradient(90deg,#22c55e,#0ea5e9); width: 0; border-radius: 999px; box-shadow: 0 8px 24px rgba(14,165,233,0.3); }
.scene-dashboard.active .spark-line { animation: chartDraw 3s forwards; }
@keyframes chartDraw { 0% { width: 0; } 60% { width: 92%; } 100% { width: 100%; } }

.chart-dots { position: absolute; left: 14px; right: 14px; bottom: 40px; display: flex; justify-content: space-between; }
.chart-dots span { width: 12px; height: 12px; background: white; border: 2px solid #0ea5e9; border-radius: 999px; box-shadow: 0 8px 20px rgba(14,165,233,0.35); opacity: 0; transform: translateY(8px); }
.scene-dashboard.active .chart-dots span { animation: dotRise 3s forwards; animation-delay: calc(var(--i) * .12s); }
@keyframes dotRise { 0% { opacity: 0; transform: translateY(8px); } 40% { opacity: 1; transform: translateY(0); } 100% { opacity: 1; } }

.scene-dashboard .cursor-dot { top: 220px; left: 260px; }
.scene-dashboard.active .cursor-dot { animation: dashboardCursor 3s cubic-bezier(.4,0,.2,1) forwards; }
@keyframes dashboardCursor { 0% { top: 240px; left: 180px; } 46% { top: 180px; left: 340px; } 100% { top: 240px; left: 180px; } }

.hover-lift { position: absolute; inset: 0; border-radius: 14px; border: 2px solid rgba(14,165,233,0.35); opacity: 0; }
.scene-dashboard.active .hover-lift { animation: hoverLift 3s forwards; }
@keyframes hoverLift { 0%,40% { opacity: 0; } 52%,78% { opacity: 1; box-shadow: 0 0 0 12px rgba(14,165,233,0.14); } 100% { opacity: 0; } }
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
                    <div class="scene-layer">
                        <div class="booking-shell">
                            <div class="surface booking-calendar p-5">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-xs uppercase tracking-[0.08em] text-gray-400">Calendar</p>
                                        <p class="month">September 2024</p>
                                    </div>
                                    <span class="text-xs font-semibold px-3 py-1 rounded-full bg-indigo-50 text-indigo-600">Booking flow</span>
                                </div>
                                <div class="label-row">
                                    <span>S</span><span>M</span><span>T</span><span>W</span><span>T</span><span>F</span><span>S</span>
                                </div>
                                <div class="day-grid text-sm font-semibold text-gray-700">
                                    <span></span><span></span><span></span>
                                    <div class="booking-cell" style="--d:.05s">4</div>
                                    <div class="booking-cell" style="--d:.10s">5</div>
                                    <div class="booking-cell" style="--d:.15s">6</div>
                                    <div class="booking-cell" style="--d:.20s">7</div>
                                    <div class="booking-cell" style="--d:.25s">8</div>
                                    <div class="booking-cell highlight" style="--d:.30s">9</div>
                                    <div class="booking-cell" style="--d:.35s">10</div>
                                    <div class="booking-cell" style="--d:.40s">11</div>
                                    <div class="booking-cell" style="--d:.45s">12</div>
                                    <div class="booking-cell" style="--d:.50s">13</div>
                                    <div class="booking-cell" style="--d:.55s">14</div>
                                    <div class="booking-cell" style="--d:.60s">15</div>
                                    <div class="booking-cell" style="--d:.65s">16</div>
                                    <div class="booking-cell" style="--d:.70s">17</div>
                                    <div class="booking-cell" style="--d:.75s">18</div>
                                </div>
                                <div class="flex items-center justify-between text-[11px] text-gray-500 mt-4">
                                    <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-indigo-500"></span> Confirmed slots</span>
                                    <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Next available</span>
                                </div>
                            </div>

                            <div class="booking-sidebar">
                                <div class="chip" style="--d:.15s"><span class="font-semibold">Today</span><span class="text-gray-500">3 slots</span></div>
                                <div class="chip" style="--d:.25s"><span class="font-semibold">Tomorrow</span><span class="text-gray-500">4 slots</span></div>
                                <div class="chip" style="--d:.35s"><span class="font-semibold">Next available</span><span class="text-emerald-600 font-semibold">3:00 PM</span></div>
                                <div class="surface p-4">
                                    <p class="text-xs uppercase tracking-[0.08em] text-gray-400">Highlights</p>
                                    <p class="text-sm font-semibold text-gray-900 mt-2">Consultation Call</p>
                                    <p class="text-xs text-gray-500">30 minutes · video</p>
                                </div>
                            </div>
                        </div>

                        <div class="booking-form">
                            <div class="flex items-center justify-between mb-2">
                                <div>
                                    <p class="text-[10px] uppercase tracking-wide text-gray-400">Service</p>
                                    <p class="text-[14px] font-semibold text-gray-900">Consultation Call</p>
                                </div>
                                <span class="text-[11px] px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 font-semibold">Next available: 3:00 PM</span>
                            </div>
                            <div class="grid md:grid-cols-2 gap-3 mt-3">
                                <div class="booking-input">
                                    <label>Name</label>
                                    <div class="field">
                                        <span class="typed-line typed-name">Ava</span>
                                    </div>
                                </div>
                                <div class="booking-input">
                                    <label>Email</label>
                                    <div class="field">
                                        <span class="typed-line typed-email">ava@studio.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-input mt-3">
                                <label>Time</label>
                                <div class="time-select">
                                    <span class="time-chip">1:30 PM</span>
                                    <span class="time-chip hot">3:00 PM</span>
                                    <span class="time-chip">4:30 PM</span>
                                </div>
                            </div>
                            <div class="confirm-btn mt-4">✔ Confirm Booking</div>
                        </div>

                        <div class="booking-success">✔ Your meeting is scheduled!</div>
                        <div class="scene-transition"></div>
                    </div>
                    <div class="cursor-dot"></div>
                    <div class="click-ripple"></div>
                </div>

                <div class="scene scene-crm" data-scene="crm">
                    <div class="scene-layer">
                        <div class="crm-shell">
                            <div class="crm-column">
                                <div class="metric-card">
                                    <p class="title">Leads</p>
                                    <p class="value">132</p>
                                    <p class="text-[12px] text-emerald-600 font-semibold">+32 this week</p>
                                </div>
                                <div class="metric-card">
                                    <p class="title">Sales Pipeline</p>
                                    <div class="bar-row mt-3">
                                        <div class="bar" style="--h:.24"></div>
                                        <div class="bar" style="--h:.48"></div>
                                        <div class="bar" style="--h:.12"></div>
                                        <div class="bar" style="--h:.38"></div>
                                    </div>
                                </div>
                                <div class="metric-card">
                                    <p class="title">Tasks</p>
                                    <div class="flex items-center justify-between mt-2 text-[13px] text-gray-700">
                                        <span>Follow-ups</span>
                                        <span class="font-semibold text-indigo-600">18</span>
                                    </div>
                                    <div class="flex items-center justify-between text-[13px] text-gray-700">
                                        <span>Demos</span>
                                        <span class="font-semibold text-indigo-600">6</span>
                                    </div>
                                </div>
                            </div>

                            <div class="pipeline">
                                <div class="stage">
                                    <p class="text-[11px] uppercase tracking-[0.08em] text-gray-500">Leads</p>
                                    <p class="text-[20px] font-bold text-gray-900">24</p>
                                    <p class="text-[12px] text-gray-500">New this week</p>
                                </div>
                                <div class="stage hot">
                                    <p class="text-[11px] uppercase tracking-[0.08em] text-gray-500">Qualified</p>
                                    <p class="text-[20px] font-bold text-gray-900">48</p>
                                    <p class="text-[12px] text-gray-500">Ready for demo</p>
                                </div>
                                <div class="stage">
                                    <p class="text-[11px] uppercase tracking-[0.08em] text-gray-500">Proposal</p>
                                    <p class="text-[20px] font-bold text-gray-900">18</p>
                                    <p class="text-[12px] text-gray-500">Awaiting sign</p>
                                </div>
                                <div class="stage">
                                    <p class="text-[11px] uppercase tracking-[0.08em] text-gray-500">Won</p>
                                    <p class="text-[20px] font-bold text-gray-900">12</p>
                                    <p class="text-[12px] text-gray-500">Closed deals</p>
                                </div>
                            </div>
                        </div>
                        <div class="crm-tooltip">32 new leads this week</div>
                        <div class="crm-highlight"></div>
                        <div class="scene-transition"></div>
                    </div>
                    <div class="cursor-dot"></div>
                    <div class="click-ripple"></div>
                </div>

                <div class="scene scene-ecommerce" data-scene="ecommerce">
                    <div class="scene-layer">
                        <div class="commerce-shell">
                            <div class="product-card">
                                <div class="flex items-center justify-between text-[11px] text-gray-500">
                                    <span class="px-2 py-1 rounded-full bg-gray-100 text-gray-700 font-semibold">Audio · In stock</span>
                                    <span class="text-emerald-600 font-semibold">Free shipping</span>
                                </div>
                                <div class="product-visual"></div>
                                <div class="product-meta">
                                    <div>
                                        <p class="text-[16px] font-semibold text-gray-900">Premium Headphones</p>
                                        <p class="text-[13px] text-gray-500">Wireless · Noise cancelling</p>
                                    </div>
                                    <div class="price-tag">$89.00</div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="rating">★★★★★ <span class="text-[12px] text-gray-500 ml-1">(4.8)</span></div>
                                    <button class="ecom-button text-[12px]">Add to Cart</button>
                                </div>
                            </div>

                            <div class="cart-panel">
                                <div class="flex items-center justify-between text-sm font-semibold text-gray-900">
                                    <span>Cart</span>
                                    <span class="text-gray-500 text-xs">1 item</span>
                                </div>
                                <div class="flex gap-3 items-center mt-3">
                                    <div class="w-12 h-12 rounded-xl bg-indigo-100"></div>
                                    <div class="text-[13px] text-gray-800">
                                        <p class="font-semibold">Premium Headphones</p>
                                        <p class="text-gray-500">Qty 1</p>
                                    </div>
                                    <span class="ml-auto font-semibold text-gray-900">$89</span>
                                </div>
                                <div class="cart-line mt-3"></div>
                                <button class="ecom-button text-[12px] mt-3 w-full justify-center">Checkout →</button>
                            </div>

                            <div class="checkout-panel">
                                <div class="flex items-center justify-between text-sm font-semibold text-gray-900">
                                    <span>Checkout</span>
                                    <span class="text-xs text-gray-500">Secure</span>
                                </div>
                                <div class="mt-3 space-y-2 text-[12px] text-gray-700">
                                    <div class="flex flex-col gap-1">
                                        <span class="uppercase tracking-[0.08em] text-gray-400">Name</span>
                                        <div class="checkout-line"></div>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <span class="uppercase tracking-[0.08em] text-gray-400">Email</span>
                                        <div class="checkout-line"></div>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <span class="uppercase tracking-[0.08em] text-gray-400">Address</span>
                                        <div class="checkout-line"></div>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <span class="uppercase tracking-[0.08em] text-gray-400">Card</span>
                                        <div class="checkout-line"></div>
                                    </div>
                                </div>
                                <button class="ecom-button text-[12px] mt-4 w-full justify-center">Pay $89</button>
                            </div>

                            <div class="order-success">✔ Order Successful!</div>
                            <div class="scene-transition"></div>
                        </div>
                    </div>
                    <div class="cursor-dot"></div>
                    <div class="click-ripple"></div>
                    <div class="click-ripple ripple-checkout"></div>
                    <div class="click-ripple ripple-pay"></div>
                </div>

                <div class="scene scene-automation" data-scene="automation">
                    <div class="scene-layer">
                        <div class="automation-shell">
                            <div class="node" style="top:50px; left:70px;">
                                <p class="title">Booking Created</p>
                                <p class="desc">Capture details + timezone</p>
                            </div>
                            <div class="node" style="top:50px; right:80px;">
                                <p class="title">Check CRM Tag</p>
                                <p class="desc">Is VIP client?</p>
                            </div>
                            <div class="node" style="bottom:80px; left:120px;">
                                <p class="title">Send Email</p>
                                <p class="desc">Share confirmation + invite</p>
                            </div>
                            <div class="node" style="bottom:90px; right:120px;">
                                <p class="title">Add to Pipeline</p>
                                <p class="desc">Move into onboarding</p>
                            </div>

                            <span class="connection" style="top:86px; left:210px; width:160px;"></span>
                            <span class="connection connection-vertical" style="top:110px; left:150px;"></span>
                            <span class="connection" style="bottom:120px; left:240px; width:170px;"></span>
                            <span class="connection" style="top:190px; left:330px; width:120px;"></span>

                            <div class="automation-badge">Automation active</div>
                            <div class="tooltip-automation">Connections synced</div>
                            <div class="scene-transition"></div>
                        </div>
                    </div>
                    <div class="cursor-dot"></div>
                </div>

                <div class="scene scene-dashboard" data-scene="dashboard">
                    <div class="scene-layer">
                        <div class="dashboard-shell">
                            <div class="metric-tiles">
                                <div class="metric" style="--d:.05s">
                                    <p class="label">Bookings</p>
                                    <p class="value">12 bookings this week</p>
                                </div>
                                <div class="metric" style="--d:.12s">
                                    <p class="label">Revenue</p>
                                    <p class="value">$1,482</p>
                                </div>
                                <div class="metric" style="--d:.18s">
                                    <p class="label">Leads</p>
                                    <p class="value">32 new leads</p>
                                </div>
                            </div>

                            <div class="chart-card">
                                <div class="flex items-center justify-between mb-3">
                                    <div>
                                        <p class="text-xs uppercase tracking-[0.08em] text-gray-400">Performance</p>
                                        <p class="text-sm font-semibold text-gray-900">Booking + sales momentum</p>
                                    </div>
                                    <span class="text-[11px] px-3 py-1 rounded-full bg-gray-100 text-gray-700 font-semibold">Live</span>
                                </div>
                                <div class="line-chart">
                                    <div class="spark-line"></div>
                                    <div class="chart-dots">
                                        <span style="--i:0"></span>
                                        <span style="--i:1"></span>
                                        <span style="--i:2"></span>
                                        <span style="--i:3"></span>
                                        <span style="--i:4"></span>
                                    </div>
                                </div>
                                <div class="hover-lift"></div>
                            </div>
                        </div>
                        <div class="scene-transition"></div>
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
