@extends('layouts.app')

@section('title', 'Web Development Services Provider | Custom Websites & Web Apps - Tech Solution')
@section('meta_description', 'Compare who provides web development services and choose Tech Solution for custom websites, Laravel and React web apps, ecommerce, CMS, APIs, SEO, security, and support.')

@section('content')

<!-- 1. FUTURISTIC HOLOGRAPHIC HERO SECTION -->
<section class="hero-futuristic-container w-full z-10">
  <div class="hero-glow-blob-1"></div>
  <div class="hero-glow-blob-2"></div>
  <div class="hero-glow-blob-3"></div>

  <div class="hero-futuristic-grid">
    <!-- Left Side: Marketing Content -->
    <div class="flex flex-col justify-center text-left max-w-2xl mx-auto lg:mx-0">
      <nav class="breadcrumb-nav mb-4" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="sep">/</span>
        <span class="current">Web Development</span>
      </nav>

      <div class="flex justify-center lg:justify-start">
        <span class="trust-pill">
          <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
          Enterprise-Grade Performance
        </span>
      </div>

      <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight mb-6 text-center lg:text-left">
        Web Development for <span class="text-gradient">Websites, Stores & Apps</span>
      </h1>

      <p class="text-sm sm:text-base text-slate-300 leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0 text-center lg:text-left">
        Businesses can hire freelancers, website builders, or ecommerce specialists. Tech Solution is the full-service partner for projects needing strategy, custom Laravel & React engineering, Core Web Vitals optimization, and ongoing improvements.
      </p>

      <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
        <a href="#calculator" class="w-full sm:w-auto btn-futuristic-primary text-center justify-center">
          <span>Plan My Web Project</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M3 12h18" /></svg>
        </a>
        <a href="#buyer-guide" class="w-full sm:w-auto btn-futuristic-secondary text-center justify-center">
          <span>Compare Options</span>
        </a>
      </div>
    </div>

    <!-- Right Side: Interactive Holographic Globe & Orbit Rings & Floating Panels -->
    <!-- Right Side: 3D Isometric Web Application Stack -->
    <div class="isometric-stack-container">
      <!-- Floating Technology Chips -->
      <span class="tech-chip" id="chip-laravel">Laravel</span>
      <span class="tech-chip" id="chip-react">React</span>
      <span class="tech-chip" id="chip-vite">Vite</span>
      <span class="tech-chip" id="chip-tailwind">Tailwind</span>

      <!-- 3D Perspective Viewport -->
      <div class="isometric-stack-viewport">
        <!-- Connecting Vertical Lasers (Standing perpendicular in 3D) -->
        <div class="connector-line connector-line-1"></div>
        <div class="connector-line connector-line-2"></div>
        <div class="connector-line connector-line-3"></div>
        <div class="connector-line connector-line-4"></div>

        <!-- 1. Frontend Layer (Top) -->
        <div class="stack-layer layer-frontend flex flex-col justify-between">
          <!-- Glassmorphism Mock Browser Header -->
          <div class="flex items-center justify-between border-b border-cyan-400/20 pb-1.5 mb-2">
            <div class="flex gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>
              <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
            </div>
            <div class="bg-slate-950/50 text-[7px] text-slate-400 px-3 py-0.5 rounded border border-slate-800/80 tracking-wide font-mono">
              techsolution.com/app
            </div>
            <div class="w-4"></div>
          </div>
          <!-- Mock Page Content -->
          <div class="flex-1 flex gap-2">
            <div class="w-1/3 bg-slate-950/40 rounded p-1 flex flex-col justify-between border border-slate-800/50">
              <div class="h-2 w-full bg-cyan-400/20 rounded"></div>
              <div class="h-1.5 w-2/3 bg-slate-700/40 rounded mt-1"></div>
              <div class="h-1.5 w-1/2 bg-slate-700/40 rounded mt-1"></div>
              <div class="h-4 w-full bg-cyan-400/10 rounded mt-2 flex items-center justify-center">
                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
              </div>
            </div>
            <div class="flex-1 bg-slate-950/30 rounded p-1.5 border border-slate-800/50 flex flex-col justify-between">
              <div class="flex justify-between items-center mb-1">
                <span class="text-[7px] text-cyan-400 font-bold uppercase tracking-wider">Metrics</span>
                <span class="text-[6px] text-emerald-400">Live</span>
              </div>
              <div class="flex-1 flex items-end gap-1 pb-1">
                <div class="w-3 bg-cyan-400/40 h-8 rounded-sm"></div>
                <div class="w-3 bg-cyan-400 h-10 rounded-sm"></div>
                <div class="w-3 bg-cyan-400/60 h-6 rounded-sm"></div>
                <div class="w-3 bg-cyan-400/20 h-4 rounded-sm"></div>
              </div>
            </div>
          </div>
          <!-- Footer Status -->
          <div class="flex items-center justify-between text-[7px] text-cyan-400/80 font-bold pt-1.5 border-t border-cyan-400/10">
            <span>FRONTEND LAYER</span>
            <span>99 PERFORMANCE</span>
          </div>
        </div>

        <!-- 2. Backend Layer (Middle) -->
        <div class="stack-layer layer-backend flex flex-col justify-between">
          <!-- Glassmorphism Mock Code Editor Header -->
          <div class="flex items-center justify-between border-b border-sky-400/20 pb-1.5 mb-2">
            <span class="text-[7px] text-sky-400 font-mono">UserController.php</span>
            <span class="text-[7px] text-slate-500 font-mono">UTF-8</span>
          </div>
          <!-- Code Block Mock -->
          <div class="flex-1 font-mono text-[7px] text-slate-300 leading-normal flex flex-col justify-center">
            <div><span class="text-sky-400">Route::</span><span class="text-sky-300">get</span>(<span class="text-amber-300">'/api/v1/users'</span>, function() {</div>
            <div class="pl-3"><span class="text-purple-400">return</span> <span class="text-sky-400">User::</span><span class="text-sky-300">with</span>(<span class="text-amber-300">'profile'</span>)-><span class="text-sky-300">paginate</span>(15);</div>
            <div>});</div>
            <div class="mt-2 text-slate-500">// Cached index for 3600 seconds</div>
          </div>
          <!-- Footer Status -->
          <div class="flex items-center justify-between text-[7px] text-sky-400/80 font-bold pt-1.5 border-t border-sky-400/10">
            <span>BACKEND API (LARAVEL)</span>
            <span class="text-emerald-400">BUILD OK</span>
          </div>
        </div>

        <!-- 3. Database Layer (Bottom) -->
        <div class="stack-layer layer-database flex flex-col justify-between">
          <!-- Glassmorphism Schema Header -->
          <div class="flex items-center justify-between border-b border-purple-400/20 pb-1.5 mb-2">
            <span class="text-[7px] text-purple-400 font-mono">sqlite://database.sqlite</span>
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
          </div>
          <!-- DB Schema Visual -->
          <div class="flex-1 flex items-center justify-between gap-4">
            <!-- Schema Card -->
            <div class="w-1/2 bg-slate-950/50 rounded border border-purple-500/20 p-1.5 font-mono text-[6px] text-slate-400">
              <div class="text-[7px] text-purple-400 font-bold border-b border-purple-500/10 pb-0.5 mb-1 uppercase">users table</div>
              <div>id : INTEGER [PK]</div>
              <div>name : VARCHAR</div>
              <div>email : VARCHAR [UNIQUE]</div>
              <div>created_at : TIMESTAMP</div>
            </div>
            <!-- Disk Cylinders -->
            <div class="flex-1 flex flex-col gap-1 items-center justify-center">
              <div class="w-12 h-4 rounded-full bg-purple-500/20 border border-purple-400/30 flex items-center justify-center text-[7px] text-purple-300 font-bold">SQLITE_1</div>
              <div class="w-12 h-4 rounded-full bg-purple-500/20 border border-purple-400/30 flex items-center justify-center text-[7px] text-purple-300 font-bold">SQLITE_2</div>
              <div class="w-12 h-4 rounded-full bg-purple-500/20 border border-purple-400/30 flex items-center justify-center text-[7px] text-purple-300 font-bold">REPLICAS</div>
            </div>
          </div>
          <!-- Footer Status -->
          <div class="flex items-center justify-between text-[7px] text-purple-400/80 font-bold pt-1.5 border-t border-purple-400/10">
            <span>PERSISTENT STORAGE</span>
            <span>2ms RESP TIME</span>
          </div>
        </div>
      </div>
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
