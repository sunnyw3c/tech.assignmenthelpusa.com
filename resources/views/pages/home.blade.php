@extends('layouts.app')

@section('title', 'Tech Solution | Enterprise Digital Agency & AI Engineering')
@section('meta_description', 'High-performance Laravel platforms, mobile apps, AI-driven workflows, SEO engines, and enterprise Odoo ERP systems engineered for business outcomes.')

@section('content')

<!-- 1. HERO SECTION (Strict H1, Compact & Balanced Sizing) -->
<section class="relative py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto text-center z-10">
  
  <!-- Status Pill Badge -->
  <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass-panel border border-sky-500/20 text-sky-400 text-xs font-medium mb-6 shadow-md">
    <span class="w-2 h-2 rounded-full bg-emerald-400 pulse-dot"></span>
    <span>2026 Enterprise Agentic AI & Modular Cloud Architecture</span>
  </div>

  <!-- SINGLE H1 PER PAGE -->
  <h1 class="font-heading text-3xl sm:text-5xl font-extrabold tracking-tight text-white dark:text-white light:text-slate-900 leading-tight mb-4 max-w-4xl mx-auto">
    High-Performance Digital Solutions That <span class="text-gradient">Scale Your Revenue</span>
  </h1>

  <p class="max-w-2xl mx-auto text-sm sm:text-base text-slate-400 dark:text-slate-400 light:text-slate-600 leading-relaxed mb-8">
    Empowering global enterprises with high-speed Laravel platforms, native mobile applications, technical SEO engines, AI workflow automation, and custom Odoo ERP integrations.
  </p>

  <!-- CTA Buttons -->
  <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 mb-12">
    <a href="#calculator" class="w-full sm:w-auto px-6 py-3 rounded-xl bg-gradient-to-r from-sky-500 via-indigo-600 to-purple-600 hover:from-sky-400 hover:to-purple-500 text-white font-semibold text-sm shadow-lg shadow-sky-500/20 transition-all flex items-center justify-center gap-2 group">
      <span>Calculate Project Scope & ROI</span>
      <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M3 12h18" /></svg>
    </a>

    <a href="#cases" class="w-full sm:w-auto px-6 py-3 rounded-xl glass-panel text-slate-200 font-semibold text-sm hover:bg-slate-800/80 transition-all flex items-center justify-center gap-2">
      <span>View Case Studies</span>
    </a>
  </div>

  <!-- Trust Metric Bar -->
  <div class="pt-8 border-t border-slate-800/60 grid grid-cols-2 md:grid-cols-4 gap-4 text-left">
    <div class="p-3.5 rounded-xl glass-card">
      <p class="font-heading text-2xl font-bold text-sky-400 stat-counter" data-target="500" data-suffix="+">0</p>
      <p class="text-xs text-slate-400 mt-0.5">Enterprise Projects</p>
    </div>
    <div class="p-3.5 rounded-xl glass-card">
      <p class="font-heading text-2xl font-bold text-indigo-400 stat-counter" data-target="99" data-suffix=".99%">0</p>
      <p class="text-xs text-slate-400 mt-0.5">SLA Uptime SLA</p>
    </div>
    <div class="p-3.5 rounded-xl glass-card">
      <p class="font-heading text-2xl font-bold text-purple-400 stat-counter" data-target="35" data-suffix="+">0</p>
      <p class="text-xs text-slate-400 mt-0.5">Global Markets</p>
    </div>
    <div class="p-3.5 rounded-xl glass-card">
      <p class="font-heading text-2xl font-bold text-emerald-400 stat-counter" data-target="45" data-suffix="m">0</p>
      <p class="text-xs text-slate-400 mt-0.5">Active End-Users</p>
    </div>
  </div>
</section>

<!-- 2. BENTO GRID ARCHITECTURE SHOWCASE (Strict H2, H3 Hierarchy) -->
<section class="py-12 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="text-center max-w-2xl mx-auto mb-10">
    <p class="text-xs font-bold uppercase tracking-widest text-sky-400 mb-1">Architecture Standards</p>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight">
      Engineered for Speed, Security & Intelligence
    </h2>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
    <div class="md:col-span-2 glass-card rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden group">
      <div>
        <span class="px-2.5 py-0.5 rounded-full bg-sky-500/20 text-sky-400 text-[10px] font-bold uppercase mb-3 inline-block">Sub-Second Speed</span>
        <h3 class="font-heading text-xl font-bold text-white mb-2">Invisible High-Speed Architecture</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">
          Achieve 98+ Core Web Vitals scores. Modular CSS and lightweight Blade views eliminate heavy render-blocking JS overhead.
        </p>
      </div>
      <div class="flex items-center gap-4 pt-3 border-t border-slate-800/80">
        <div><p class="font-heading text-xl font-bold text-emerald-400">&lt;450ms</p><p class="text-[10px] text-slate-400">Server Latency</p></div>
        <div class="h-6 w-px bg-slate-800"></div>
        <div><p class="font-heading text-xl font-bold text-sky-400">99.8%</p><p class="text-[10px] text-slate-400">Cache Hit Ratio</p></div>
      </div>
    </div>

    <div class="glass-card rounded-2xl p-6 flex flex-col justify-between">
      <div>
        <div class="w-10 h-10 rounded-xl bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 mb-4">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
        </div>
        <h3 class="font-heading text-lg font-bold text-white mb-1">Agentic AI Workflows</h3>
        <p class="text-slate-400 text-xs leading-relaxed">Integrated AI agents for automated evaluations and predictive user flows.</p>
      </div>
    </div>

    <div class="glass-card rounded-2xl p-6 flex flex-col justify-between">
      <div>
        <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
        </div>
        <h3 class="font-heading text-lg font-bold text-white mb-1">Zero-Trust Security</h3>
        <p class="text-slate-400 text-xs leading-relaxed">Bank-grade encryption and continuous API security monitoring.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3. CORE SERVICES GRID (H2 for Section, H3 for Services) -->
<section id="services" class="py-12 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10 scroll-mt-20">
  <div class="text-center max-w-2xl mx-auto mb-10">
    <p class="text-xs font-bold uppercase tracking-widest text-sky-400 mb-1">Engineering Capabilities</p>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight">
      Enterprise Services Built for Performance
    </h2>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="glass-card rounded-2xl p-6 flex flex-col justify-between group">
      <div>
        <div class="w-12 h-12 rounded-xl bg-sky-500/10 border border-sky-500/20 flex items-center justify-center text-sky-400 mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
        </div>
        <h3 class="font-heading text-xl font-bold text-white mb-2">Custom Web Development</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">Fast, scalable web applications built on modern frameworks (Laravel, React, Vue).</p>
      </div>
      <a href="{{ url('/services/web-development') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-sky-400 hover:text-sky-300">View Service Details →</a>
    </div>

    <div class="glass-card rounded-2xl p-6 flex flex-col justify-between group">
      <div>
        <div class="w-12 h-12 rounded-xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center text-indigo-400 mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
        </div>
        <h3 class="font-heading text-xl font-bold text-white mb-2">Mobile App Development</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">Native & cross-platform mobile applications for iOS & Android.</p>
      </div>
      <a href="{{ url('/services/mobile-apps') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-indigo-400 hover:text-indigo-300">View Service Details →</a>
    </div>

    <div class="glass-card rounded-2xl p-6 flex flex-col justify-between group">
      <div>
        <div class="w-12 h-12 rounded-xl bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
        </div>
        <h3 class="font-heading text-xl font-bold text-white mb-2">SEO & Speed Tuning</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">Technical SEO audits, speed optimization, and programmatic schema tuning.</p>
      </div>
      <a href="{{ url('/services/seo-optimization') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-purple-400 hover:text-purple-300">View Service Details →</a>
    </div>
  </div>
</section>

<!-- 4. CALCULATOR INCLUDE -->
@include('components.calculator')

<!-- 5. CASE STUDIES SECTION (H2 Section, H3 Study Title) -->
<section id="cases" class="py-12 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10 scroll-mt-20">
  <div class="text-center max-w-2xl mx-auto mb-8">
    <p class="text-xs font-bold uppercase tracking-widest text-sky-400 mb-1">Client Results</p>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight">Featured Case Studies</h2>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="glass-card rounded-2xl p-5 flex flex-col justify-between">
      <div>
        <span class="px-2.5 py-0.5 rounded-full bg-sky-500/20 text-sky-400 text-[10px] font-bold uppercase mb-3 inline-block">FinTech SaaS</span>
        <h3 class="font-heading text-lg font-bold text-white mb-1">OmniPay Global Portal</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">High-speed Laravel architecture handling $40M+ monthly transactions.</p>
      </div>
      <span class="text-xs font-semibold text-sky-400">Read Full Study →</span>
    </div>

    <div class="glass-card rounded-2xl p-5 flex flex-col justify-between">
      <div>
        <span class="px-2.5 py-0.5 rounded-full bg-indigo-500/20 text-indigo-400 text-[10px] font-bold uppercase mb-3 inline-block">Flutter Mobile</span>
        <h3 class="font-heading text-lg font-bold text-white mb-1">Nexus Logistics App</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">Cross-platform driver mobile app with real-time offline GPS route syncing.</p>
      </div>
      <span class="text-xs font-semibold text-indigo-400">Read Full Study →</span>
    </div>

    <div class="glass-card rounded-2xl p-5 flex flex-col justify-between">
      <div>
        <span class="px-2.5 py-0.5 rounded-full bg-purple-500/20 text-purple-400 text-[10px] font-bold uppercase mb-3 inline-block">Odoo ERP</span>
        <h3 class="font-heading text-lg font-bold text-white mb-1">Vanguard ERP Automation</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">Automated inventory, procurement, and accounting workflows into Odoo.</p>
      </div>
      <span class="text-xs font-semibold text-purple-400">Read Full Study →</span>
    </div>
  </div>
</section>

<!-- 6. CONTACT FORM SECTION (H2 Section) -->
<section id="contact" class="py-12 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto relative z-10 scroll-mt-20">
  <div id="contact-card" class="glass-panel rounded-2xl p-6 sm:p-10 border border-slate-700/60 shadow-xl">
    <div class="text-center max-w-xl mx-auto mb-8">
      <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white">Lock In Your Estimate</h2>
      <p class="text-slate-400 text-xs sm:text-sm mt-1">Submit your contact details to reserve your locked price quote.</p>
    </div>

    <form id="contact-form" class="space-y-4">
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label for="contact-name" class="block text-xs font-semibold text-slate-300 uppercase mb-1">Full Name</label>
          <input type="text" id="contact-name" required placeholder="John Doe" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/80 border border-slate-800 text-white text-xs focus:outline-none focus:border-sky-400" />
        </div>
        <div>
          <label for="contact-email" class="block text-xs font-semibold text-slate-300 uppercase mb-1">Work Email</label>
          <input type="email" id="contact-email" required placeholder="john@company.com" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/80 border border-slate-800 text-white text-xs focus:outline-none focus:border-sky-400" />
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label for="contact-phone" class="block text-xs font-semibold text-slate-300 uppercase mb-1">Phone / WhatsApp</label>
          <input type="tel" id="contact-phone" placeholder="+1 (555) 000-0000" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/80 border border-slate-800 text-white text-xs focus:outline-none focus:border-sky-400" />
        </div>
        <div>
          <label class="block text-xs font-semibold text-slate-300 uppercase mb-1">Selected Scope</label>
          <input type="text" id="contact-service-summary" readonly value="Selected Scope: Custom Web Solution" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/80 border border-slate-800 text-sky-400 font-medium text-xs cursor-not-allowed" />
        </div>
      </div>

      <div class="flex items-center justify-between p-3 rounded-xl bg-sky-500/10 border border-sky-500/20 text-xs">
        <span id="contact-estimate-badge" class="font-bold text-sky-400">Locked Estimate: $1,500</span>
        <span class="text-slate-400 text-[10px]">Guaranteed 30 Days</span>
      </div>

      <div>
        <label for="contact-details" class="block text-xs font-semibold text-slate-300 uppercase mb-1">Project Brief</label>
        <textarea id="contact-details" rows="3" placeholder="Briefly describe your goals or timeline expectations..." class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/80 border border-slate-800 text-white text-xs focus:outline-none focus:border-sky-400 resize-none"></textarea>
      </div>

      <button type="submit" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-sky-400 to-indigo-500 hover:from-sky-300 hover:to-indigo-400 text-slate-950 font-bold text-sm shadow-lg transition-all">
        Lock in Estimate & Send Request
      </button>

      <div id="contact-success-message" class="hidden p-3 rounded-xl bg-emerald-500/20 border border-emerald-500/30 text-emerald-400 text-center text-xs font-semibold">
        🎉 Thank you! Your estimate lock has been reserved. An engineer will contact you shortly.
      </div>
    </form>
  </div>
</section>

@endsection
