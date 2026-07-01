@extends('layouts.app')

@section('title', 'Web Development Services Provider | Custom Websites & Web Apps - Tech Solution')
@section('meta_description', 'Compare who provides web development services and choose Tech Solution for custom websites, Laravel and React web apps, ecommerce, CMS, APIs, SEO, security, and support.')

@section('content')

<section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-12 border border-sky-500/30 shadow-xl relative overflow-hidden">
    <div class="max-w-3xl">
      <span class="px-3 py-1 rounded-full bg-sky-500/10 text-sky-400 text-xs font-bold uppercase tracking-wider border border-sky-500/20 mb-4 inline-block">
        Web Development Service Provider
      </span>
      <nav class="breadcrumb-nav" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="sep">/</span>
        <span class="current">Web Development</span>
      </nav>
      <h1 class="font-heading text-3xl sm:text-4xl font-extrabold text-white tracking-tight mb-4">
        Web Development Services for <span class="text-gradient">Websites, Stores & Apps</span>
      </h1>
      <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-6">
        Businesses can hire freelancers, website builders, ecommerce specialists, or full-service agencies for web development. Tech Solution is the full-service partner for projects that need strategy, UI/UX, Laravel and React engineering, SEO-ready content structure, security, integrations, launch support, and ongoing improvement.
      </p>
      <a href="#calculator" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-sky-400 to-indigo-500 text-slate-950 font-bold text-xs uppercase tracking-wider shadow-lg hover:scale-105 transition-all">
        Plan My Web Project
      </a>
    </div>
    <!-- Service Hero Image -->
    <div class="mt-8 rounded-xl overflow-hidden border border-sky-500/20 shadow-xl shadow-sky-500/10">
      <img
        src="{{ asset('images/services/web-development.png') }}"
        alt="Custom Laravel web development — code editor and website dashboard built by Tech Solution"
        class="w-full h-auto object-cover"
        width="1200" height="600"
        loading="eager" decoding="async"
      />
    </div>
  </div>
</section>

<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-slate-800/80 text-sky-300 text-[11px] font-bold uppercase tracking-wider border border-slate-700 mb-3 inline-block">
      Buyer Guide
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      Who Provides Web Development Services?
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed">
      The right provider depends on budget, timeline, technical risk, and how much ownership you need after launch. Here is how the main options compare.
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Freelance Developers</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Best for small landing pages, theme fixes, single features, and budget-led tasks where you can manage scope, QA, hosting, and maintenance.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Website Builders</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Wix, Webflow, and WordPress studios work well for fast marketing sites, blogs, and CMS pages when custom business logic is limited.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Ecommerce Specialists</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Shopify and WooCommerce partners focus on catalogs, checkout, payments, inventory, analytics, product pages, and conversion optimization.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Full-Service Agencies</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Agencies handle discovery, UX, frontend, backend, integrations, testing, deployment, security, content structure, and long-term support.
      </p>
    </div>
  </div>
</section>

<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-sky-500/10 text-sky-400 text-[11px] font-bold uppercase tracking-wider border border-sky-500/20 mb-3 inline-block">
      Tech Solution Delivery
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      What Our Web Development Service Includes
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed">
      We build websites and web applications for companies that need more than a template: clean architecture, measurable performance, secure workflows, and a site that can keep growing after launch.
    </p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Discovery & Conversion UX</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Sitemap planning, buyer journey mapping, responsive interface design, copy structure, and call-to-action flow built around lead generation or sales.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Custom Laravel & React Build</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Business websites, CMS platforms, ecommerce stores, dashboards, booking systems, customer portals, REST APIs, and third-party integrations.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Launch, Security & Growth</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Core Web Vitals tuning, technical SEO setup, analytics, secure forms, role-based access, deployment, backups, bug fixing, and maintenance.
      </p>
    </div>
  </div>
</section>

<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-slate-700/80 shadow-xl">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
      <div class="lg:col-span-5">
        <span class="px-3 py-1 rounded-full bg-indigo-500/10 text-indigo-300 text-[11px] font-bold uppercase tracking-wider border border-indigo-500/20 mb-3 inline-block">
          Best Fit
        </span>
        <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
          Choose Tech Solution When Your Website Must Work Like a Business System
        </h2>
        <p class="text-slate-400 text-sm leading-relaxed">
          Our strongest fit is a custom website or web app where design, content, integrations, speed, and support all need one accountable team.
        </p>
      </div>
      <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-3">
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Business Website Rebuild</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Modernize an outdated site with faster pages, stronger service pages, clear conversion paths, and editable content.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Custom Web Application</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Build dashboards, portals, internal tools, booking flows, SaaS products, or workflow automation on a scalable stack.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Ecommerce & Payments</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Launch product catalogs, checkout flows, payment gateways, order management, coupons, and analytics tracking.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Ongoing Web Support</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Keep the site secure, updated, backed up, monitored, optimized, and ready for new campaigns or product changes.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Related Services Section --}}
<section class="py-10 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="text-center mb-6">
    <p class="text-xs font-bold uppercase tracking-widest text-sky-400 mb-1">Explore More</p>
    <h2 class="font-heading text-xl sm:text-2xl font-bold text-white">Services That Work Best Together</h2>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    <a href="{{ url('/services/mobile-apps') }}" class="related-service-card group">
      <p class="rs-label text-indigo-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
        Mobile App Development →
      </p>
      <p class="rs-desc">Extend your web platform with a native iOS &amp; Android app powered by the same Laravel backend.</p>
    </a>
    <a href="{{ url('/services/seo-optimization') }}" class="related-service-card group">
      <p class="rs-label text-purple-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
        SEO Optimization →
      </p>
      <p class="rs-desc">Get your newly built site ranking on Google with technical SEO, schema markup, and Core Web Vitals tuning.</p>
    </a>
    <a href="{{ url('/services/ai-automation') }}" class="related-service-card group">
      <p class="rs-label text-violet-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h16a2 2 0 012 2v10a2 2 0 01-2 2h-2" /></svg>
        AI Automation →
      </p>
      <p class="rs-desc">Automate repetitive workflows inside your web application with AI-powered pipelines and integrations.</p>
    </a>
  </div>
</section>

{{-- Dedicated Web Calculator Component --}}
@include('components.calculators.web-calculator')

@endsection
