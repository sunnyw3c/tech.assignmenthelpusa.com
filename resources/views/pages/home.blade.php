@extends('layouts.app')

@section('title', 'Laravel Web Development, SEO &amp; Odoo ERP Agency | Tech Solution')
@section('meta_description', 'Tech Solution builds fast Laravel websites, Flutter mobile apps, technical SEO programs, AI automation, and Odoo ERP integrations for growing businesses.')
@section('canonical', url('/'))

@push('head')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "Organization",
      "@@id": "{{ url('/') }}#organization",
      "name": "Tech Solution",
      "url": "{{ url('/') }}",
      "description": "Tech Solution is a digital engineering agency offering Laravel web development, mobile app development, technical SEO, AI automation, cloud consulting, and Odoo ERP implementation.",
      "areaServed": ["United States", "United Kingdom", "United Arab Emirates", "India", "Singapore"],
      "knowsAbout": [
        "Laravel web development",
        "Flutter mobile app development",
        "technical SEO",
        "Core Web Vitals optimization",
        "Odoo ERP implementation",
        "AI workflow automation",
        "cloud infrastructure consulting"
      ]
    },
    {
      "@@type": "WebSite",
      "@@id": "{{ url('/') }}#website",
      "url": "{{ url('/') }}",
      "name": "Tech Solution",
      "publisher": { "@@id": "{{ url('/') }}#organization" },
      "inLanguage": "en"
    },
    {
      "@@type": "Service",
      "@@id": "{{ url('/') }}#digital-engineering-services",
      "name": "Digital product engineering, SEO, mobile app, and Odoo ERP services",
      "provider": { "@@id": "{{ url('/') }}#organization" },
      "serviceType": [
        "Laravel web development",
        "Mobile app development",
        "Technical SEO services",
        "Odoo ERP implementation",
        "AI automation and cloud consulting"
      ],
      "areaServed": ["United States", "United Kingdom", "United Arab Emirates", "India", "Singapore"]
    }
  ]
}
</script>
@endpush

@section('content')

<!-- 1. HERO SECTION -->
<section class="relative py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto text-center z-10">
  <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass-panel border border-sky-500/20 text-sky-400 text-xs font-medium mb-6 shadow-md">
    <span class="w-2 h-2 rounded-full bg-emerald-400 pulse-dot"></span>
    <span>Search-ready product engineering for web, mobile, SEO, AI, and ERP</span>
  </div>

  <h1 class="font-heading text-3xl sm:text-5xl font-extrabold tracking-tight text-white dark:text-white light:text-slate-900 leading-tight mb-4 max-w-5xl mx-auto">
    Laravel Web Development, Mobile Apps, SEO &amp; Odoo ERP Built to <span class="text-gradient">Rank and Convert</span>
  </h1>

  <p class="max-w-3xl mx-auto text-sm sm:text-base text-slate-400 dark:text-slate-400 light:text-slate-600 leading-relaxed mb-8">
    Tech Solution helps startups, service businesses, ecommerce teams, and enterprise operators launch fast websites, custom Laravel applications, Flutter mobile apps, technical SEO systems, AI automations, and Odoo workflows that support measurable traffic, leads, and revenue.
  </p>

  <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 mb-12">
    <a href="#calculator" class="w-full sm:w-auto px-6 py-3 rounded-xl bg-gradient-to-r from-sky-500 via-indigo-600 to-purple-600 hover:from-sky-400 hover:to-purple-500 text-white font-semibold text-sm shadow-lg shadow-sky-500/20 transition-all flex items-center justify-center gap-2 group">
      <span>Estimate Your Project</span>
      <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M3 12h18" /></svg>
    </a>

    <a href="#services" class="w-full sm:w-auto px-6 py-3 rounded-xl glass-panel text-slate-200 font-semibold text-sm hover:bg-slate-800/80 transition-all flex items-center justify-center gap-2">
      <span>Explore Services</span>
    </a>
  </div>

  <div class="pt-8 border-t border-slate-800/60 grid grid-cols-2 md:grid-cols-4 gap-4 text-left">
    <div class="p-3.5 rounded-xl glass-card">
      <p class="font-heading text-2xl font-bold text-sky-400 stat-counter" data-target="95" data-suffix="+">0</p>
      <p class="text-xs text-slate-400 mt-0.5">PageSpeed Target</p>
    </div>
    <div class="p-3.5 rounded-xl glass-card">
      <p class="font-heading text-2xl font-bold text-indigo-400 stat-counter" data-target="5">0</p>
      <p class="text-xs text-slate-400 mt-0.5">Core Service Pillars</p>
    </div>
    <div class="p-3.5 rounded-xl glass-card">
      <p class="font-heading text-2xl font-bold text-purple-400 stat-counter" data-target="30" data-suffix="+">0</p>
      <p class="text-xs text-slate-400 mt-0.5">Launch Checklist Items</p>
    </div>
    <div class="p-3.5 rounded-xl glass-card">
      <p class="font-heading text-2xl font-bold text-emerald-400 stat-counter" data-target="24" data-suffix="/7">0</p>
      <p class="text-xs text-slate-400 mt-0.5">Async Delivery Support</p>
    </div>
  </div>
</section>

<!-- 2. SEARCH-READY ARCHITECTURE -->
<section class="py-12 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="text-center max-w-3xl mx-auto mb-10">
    <p class="text-xs font-bold uppercase tracking-widest text-sky-400 mb-1">Architecture Standards</p>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight">
      Engineering Built Around Search Visibility, Speed, and Sales
    </h2>
    <p class="text-slate-400 text-xs sm:text-sm mt-3 leading-relaxed">
      Ranking is easier when the site gives search engines and buyers the same thing: clear service pages, crawlable HTML, strong internal links, fast load times, and answers that match real buying questions.
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
    <div class="md:col-span-2 glass-card rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden group">
      <div>
        <span class="px-2.5 py-0.5 rounded-full bg-sky-500/20 text-sky-400 text-[10px] font-bold uppercase mb-3 inline-block">Technical SEO Foundation</span>
        <h3 class="font-heading text-xl font-bold text-white mb-2">Fast Laravel Pages That Search Engines Can Understand</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">
          We structure each build around clean Blade output, descriptive headings, schema-ready service content, compressed assets, caching, and Core Web Vitals tuning before launch.
        </p>
      </div>
      <div class="flex items-center gap-4 pt-3 border-t border-slate-800/80">
        <div><p class="font-heading text-xl font-bold text-emerald-400">&lt;2.5s</p><p class="text-[10px] text-slate-400">LCP Goal</p></div>
        <div class="h-6 w-px bg-slate-800"></div>
        <div><p class="font-heading text-xl font-bold text-sky-400">0.1 CLS</p><p class="text-[10px] text-slate-400">Layout Shift Goal</p></div>
      </div>
    </div>

    <div class="glass-card rounded-2xl p-6 flex flex-col justify-between">
      <div>
        <div class="w-10 h-10 rounded-xl bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 mb-4">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 014-4h7M9 7h11M5 7h.01M5 17h.01" /></svg>
        </div>
        <h3 class="font-heading text-lg font-bold text-white mb-1">Conversion-Focused UX</h3>
        <p class="text-slate-400 text-xs leading-relaxed">Service pages, forms, calculators, and dashboards are planned around buyer intent, proof, friction removal, and clear next steps.</p>
      </div>
    </div>

    <div class="glass-card rounded-2xl p-6 flex flex-col justify-between">
      <div>
        <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2m4-2a8 8 0 11-16 0 8 8 0 0116 0z" /></svg>
        </div>
        <h3 class="font-heading text-lg font-bold text-white mb-1">Maintainable Growth</h3>
        <p class="text-slate-400 text-xs leading-relaxed">Your content, APIs, Odoo modules, and automation flows are documented so your team can iterate without rebuilding from scratch.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3. CORE SERVICES GRID -->
<section id="services" class="py-12 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10 scroll-mt-20">
  <div class="text-center max-w-3xl mx-auto mb-10">
    <p class="text-xs font-bold uppercase tracking-widest text-sky-400 mb-1">SEO-Focused Service Pages</p>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight">
      Digital Services for Teams That Need More Than a Template
    </h2>
    <p class="text-slate-400 text-xs sm:text-sm mt-3 leading-relaxed">
      Each service is written, scoped, and linked for high-intent searches such as Laravel development company, Flutter app development, technical SEO services, and Odoo ERP implementation.
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="glass-card rounded-2xl p-6 flex flex-col justify-between group">
      <div>
        <div class="w-12 h-12 rounded-xl bg-sky-500/10 border border-sky-500/20 flex items-center justify-center text-sky-400 mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
        </div>
        <h3 class="font-heading text-xl font-bold text-white mb-2">Laravel Web Development Services</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">Custom websites, portals, SaaS dashboards, ecommerce workflows, APIs, and admin panels built with Laravel, Blade, Livewire, Inertia, React, or Vue.</p>
      </div>
      <a href="{{ url('/services/web-development') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-sky-400 hover:text-sky-300">View Laravel service &rarr;</a>
    </div>

    <div class="glass-card rounded-2xl p-6 flex flex-col justify-between group">
      <div>
        <div class="w-12 h-12 rounded-xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center text-indigo-400 mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
        </div>
        <h3 class="font-heading text-xl font-bold text-white mb-2">Flutter Mobile App Development</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">iOS and Android apps with secure APIs, push notifications, subscriptions, offline sync, analytics, and backend dashboards for operations teams.</p>
      </div>
      <a href="{{ url('/services/mobile-apps') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-indigo-400 hover:text-indigo-300">View mobile service &rarr;</a>
    </div>

    <div class="glass-card rounded-2xl p-6 flex flex-col justify-between group">
      <div>
        <div class="w-12 h-12 rounded-xl bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
        </div>
        <h3 class="font-heading text-xl font-bold text-white mb-2">Technical SEO &amp; Core Web Vitals</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">SEO audits, content architecture, schema markup, crawl cleanup, page speed optimization, internal linking, and measurable search growth plans.</p>
      </div>
      <a href="{{ url('/services/seo-optimization') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-purple-400 hover:text-purple-300">View SEO service &rarr;</a>
    </div>

    <div class="glass-card rounded-2xl p-6 flex flex-col justify-between group">
      <div>
        <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V7a2 2 0 00-2-2h-3l-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2h6m4-6l2 2 4-4" /></svg>
        </div>
        <h3 class="font-heading text-xl font-bold text-white mb-2">Odoo ERP Implementation</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">CRM, inventory, purchasing, accounting, manufacturing, HR, and custom Odoo modules integrated with websites, ecommerce, and reporting systems.</p>
      </div>
      <a href="{{ url('/services/odoo-erp') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-emerald-400 hover:text-emerald-300">View Odoo service &rarr;</a>
    </div>

    <div class="glass-card rounded-2xl p-6 flex flex-col justify-between group">
      <div>
        <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 001-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z" /></svg>
        </div>
        <h3 class="font-heading text-xl font-bold text-white mb-2">AI Automation &amp; Cloud Consulting</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">Process automation, AI-assisted workflows, AWS/GCP deployments, CI/CD pipelines, monitoring, backup plans, and cloud cost optimization.</p>
      </div>
      <a href="{{ url('/services/it-consulting') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-amber-400 hover:text-amber-300">View cloud service &rarr;</a>
    </div>

    <div class="glass-card rounded-2xl p-6 flex flex-col justify-between group">
      <div>
        <div class="w-12 h-12 rounded-xl bg-rose-500/10 border border-rose-500/20 flex items-center justify-center text-rose-400 mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3a8 8 0 105.657 13.657L21 21M11 7v4l3 2" /></svg>
        </div>
        <h3 class="font-heading text-xl font-bold text-white mb-2">SEO Content &amp; Landing Page Strategy</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">Keyword mapping, page briefs, service-area content, FAQ planning, conversion copy, and launch checklists built around real buyer questions.</p>
      </div>
      <a href="#faq" class="inline-flex items-center gap-1.5 text-xs font-semibold text-rose-400 hover:text-rose-300">Read common questions &rarr;</a>
    </div>
  </div>
</section>

<!-- 4. PROCESS SECTION -->
<section id="process" class="py-12 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10 scroll-mt-20">
  <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
    <div class="lg:col-span-4">
      <p class="text-xs font-bold uppercase tracking-widest text-sky-400 mb-1">Delivery Process</p>
      <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
        From Keyword Intent to Production-Ready Code
      </h2>
      <p class="text-slate-400 text-xs sm:text-sm leading-relaxed">
        We connect SEO research, technical architecture, design, development, and reporting so the homepage supports both search discovery and qualified lead generation.
      </p>
    </div>

    <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="glass-card rounded-2xl p-5">
        <span class="text-[10px] font-bold uppercase text-sky-400">01</span>
        <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Audit Search and Buyer Intent</h3>
        <p class="text-slate-400 text-xs leading-relaxed">We map the homepage and service pages to terms buyers actually use, then identify missing proof, unclear messaging, dead links, and technical blockers.</p>
      </div>
      <div class="glass-card rounded-2xl p-5">
        <span class="text-[10px] font-bold uppercase text-indigo-400">02</span>
        <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Build a Crawlable Content Structure</h3>
        <p class="text-slate-400 text-xs leading-relaxed">Each page gets one H1, descriptive H2 sections, internal links, concise metadata, structured data where relevant, and visible answers for high-intent questions.</p>
      </div>
      <div class="glass-card rounded-2xl p-5">
        <span class="text-[10px] font-bold uppercase text-purple-400">03</span>
        <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Ship Fast, Secure Web and App Code</h3>
        <p class="text-slate-400 text-xs leading-relaxed">Laravel, mobile, cloud, and ERP work is delivered with performance budgets, security basics, form tracking, analytics events, and maintainable components.</p>
      </div>
      <div class="glass-card rounded-2xl p-5">
        <span class="text-[10px] font-bold uppercase text-emerald-400">04</span>
        <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Measure, Improve, and Expand</h3>
        <p class="text-slate-400 text-xs leading-relaxed">After launch, we use Search Console, analytics, speed reports, and lead-quality feedback to improve pages and build the next cluster of content.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5. INDUSTRIES SECTION -->
<section id="industries" class="py-12 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="text-center max-w-3xl mx-auto mb-10">
    <p class="text-xs font-bold uppercase tracking-widest text-sky-400 mb-1">Industry Fit</p>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight">
      Website, App, and ERP Builds for Operational Businesses
    </h2>
    <p class="text-slate-400 text-xs sm:text-sm mt-3 leading-relaxed">
      The strongest ranking pages are specific. We shape page copy, forms, workflows, and integrations around the industry, buyer, and conversion path.
    </p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">SaaS &amp; B2B Services</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Landing pages, trial flows, client portals, subscription billing, CRM sync, and analytics dashboards.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Ecommerce &amp; Marketplaces</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Catalog SEO, checkout performance, inventory sync, payment integrations, and conversion tracking.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Healthcare &amp; Wellness</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Appointment workflows, secure intake forms, mobile apps, location pages, and compliance-conscious UX.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Logistics &amp; Manufacturing</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Driver apps, warehouse tools, ERP modules, procurement flows, reporting, and customer self-service portals.</p>
    </div>
  </div>
</section>

<!-- 6. CALCULATOR INCLUDE -->
@include('components.calculator')

<!-- 7. PROJECT TYPES SECTION -->
<section id="cases" class="py-12 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10 scroll-mt-20">
  <div class="text-center max-w-3xl mx-auto mb-8">
    <p class="text-xs font-bold uppercase tracking-widest text-sky-400 mb-1">Portfolio Signals</p>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight">Project Types We Build, Optimize, and Support</h2>
    <p class="text-slate-400 text-xs sm:text-sm mt-3 leading-relaxed">
      Use these patterns to scope a first release, rebuild an underperforming site, or connect separate tools into one measurable digital system.
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="glass-card rounded-2xl p-5 flex flex-col justify-between">
      <div>
        <span class="px-2.5 py-0.5 rounded-full bg-sky-500/20 text-sky-400 text-[10px] font-bold uppercase mb-3 inline-block">SaaS Platform</span>
        <h3 class="font-heading text-lg font-bold text-white mb-1">Subscription Web App</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">Laravel backend, customer dashboard, payment gateway, onboarding flow, email automation, analytics, and technical SEO pages.</p>
      </div>
      <span class="text-xs font-semibold text-sky-400">Best for B2B software teams</span>
    </div>

    <div class="glass-card rounded-2xl p-5 flex flex-col justify-between">
      <div>
        <span class="px-2.5 py-0.5 rounded-full bg-indigo-500/20 text-indigo-400 text-[10px] font-bold uppercase mb-3 inline-block">Mobile Operations</span>
        <h3 class="font-heading text-lg font-bold text-white mb-1">Field Team Mobile App</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">Flutter app with offline sync, role-based access, GPS workflows, media uploads, push alerts, and a Laravel admin panel.</p>
      </div>
      <span class="text-xs font-semibold text-indigo-400">Best for logistics and services</span>
    </div>

    <div class="glass-card rounded-2xl p-5 flex flex-col justify-between">
      <div>
        <span class="px-2.5 py-0.5 rounded-full bg-emerald-500/20 text-emerald-400 text-[10px] font-bold uppercase mb-3 inline-block">ERP Automation</span>
        <h3 class="font-heading text-lg font-bold text-white mb-1">Odoo Workflow Integration</h3>
        <p class="text-slate-400 text-xs leading-relaxed mb-4">CRM, inventory, quotes, invoices, purchase orders, and reporting connected to ecommerce, forms, and custom web dashboards.</p>
      </div>
      <span class="text-xs font-semibold text-emerald-400">Best for operations-heavy teams</span>
    </div>
  </div>
</section>

<!-- 8. GLOBAL DELIVERY SECTION -->
<section id="global" class="py-12 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10 scroll-mt-20">
  <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-slate-700/60">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
      <div class="lg:col-span-5">
        <p class="text-xs font-bold uppercase tracking-widest text-sky-400 mb-1">Global Delivery</p>
        <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
          Remote Engineering for US, UK, UAE, India, and Singapore Teams
        </h2>
        <p class="text-slate-400 text-xs sm:text-sm leading-relaxed">
          Distributed businesses need clear communication more than noisy meetings. We work with async updates, sprint checkpoints, shared documentation, and timezone-aware handoffs.
        </p>
      </div>

      <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="glass-card rounded-2xl p-5">
          <h3 class="font-heading text-base font-bold text-white mb-2">Discovery</h3>
          <p class="text-slate-400 text-xs leading-relaxed">Clear scope, buyer intent, sitemap, technical risks, integrations, and launch priorities before build work begins.</p>
        </div>
        <div class="glass-card rounded-2xl p-5">
          <h3 class="font-heading text-base font-bold text-white mb-2">Delivery</h3>
          <p class="text-slate-400 text-xs leading-relaxed">Short implementation cycles with demos, code reviews, QA checks, performance budgets, and rollback planning.</p>
        </div>
        <div class="glass-card rounded-2xl p-5">
          <h3 class="font-heading text-base font-bold text-white mb-2">Growth</h3>
          <p class="text-slate-400 text-xs leading-relaxed">Search Console review, content expansion, UX improvements, conversion reporting, and cloud monitoring after launch.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 9. FAQ SECTION -->
<section id="faq" class="py-12 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10 scroll-mt-20">
  <div class="text-center max-w-3xl mx-auto mb-10">
    <p class="text-xs font-bold uppercase tracking-widest text-sky-400 mb-1">Common Questions</p>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight">
      Answers Buyers Search Before They Contact an Agency
    </h2>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Can you improve rankings just by changing homepage content?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Better homepage content helps search engines understand your services, but ranking also depends on technical health, service pages, backlinks, local signals, useful content, speed, and ongoing measurement.</p>
    </div>

    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Do you build custom Laravel websites or use templates?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">We build custom Laravel and Blade interfaces when the project needs speed, integrations, dashboards, role-based access, or a clean content structure that generic templates cannot support well.</p>
    </div>

    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Can you fix Core Web Vitals without redesigning everything?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Often, yes. We start with asset weight, caching, render-blocking scripts, image handling, layout shifts, server response time, and third-party tags before recommending a full redesign.</p>
    </div>

    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Can a mobile app share the same backend as the website?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Yes. A Laravel API can power the website, admin dashboard, and Flutter mobile app so customers, staff, and managers work from one consistent data layer.</p>
    </div>

    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">What Odoo modules can you integrate?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Common integrations include CRM, sales, invoicing, accounting, inventory, purchase, manufacturing, HR, ecommerce, custom reports, and website form submissions.</p>
    </div>

    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">What should we prepare before requesting an estimate?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Share your current website or app, target customers, required features, competitors, preferred timeline, integrations, and the main business result you want the project to improve.</p>
    </div>
  </div>
</section>

<!-- 10. CONTACT FORM SECTION -->
<section id="contact" class="py-12 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto relative z-10 scroll-mt-20">
  <div id="contact-card" class="glass-panel rounded-2xl p-6 sm:p-10 border border-slate-700/60 shadow-xl">
    <div class="text-center max-w-xl mx-auto mb-8">
      <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white">Get a Search-Ready Project Estimate</h2>
      <p class="text-slate-400 text-xs sm:text-sm mt-1">Send the goal, scope, and timeline. We will respond with a practical next-step estimate.</p>
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
        <span class="text-slate-400 text-[10px]">Valid for 30 days</span>
      </div>

      <div>
        <label for="contact-details" class="block text-xs font-semibold text-slate-300 uppercase mb-1">Project Brief</label>
        <textarea id="contact-details" rows="3" placeholder="Share your website, target service, traffic goal, integrations, and launch timeline..." class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/80 border border-slate-800 text-white text-xs focus:outline-none focus:border-sky-400 resize-none"></textarea>
      </div>

      <button type="submit" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-sky-400 to-indigo-500 hover:from-sky-300 hover:to-indigo-400 text-slate-950 font-bold text-sm shadow-lg transition-all">
        Send Project Request
      </button>

      <div id="contact-success-message" class="hidden p-3 rounded-xl bg-emerald-500/20 border border-emerald-500/30 text-emerald-400 text-center text-xs font-semibold">
        Thank you. Your estimate request has been received and an engineer will contact you shortly.
      </div>
    </form>
  </div>
</section>

@endsection
