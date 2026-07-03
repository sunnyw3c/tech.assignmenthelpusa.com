@extends('layouts.app')

@section('title', 'Mobile App Development Services | iOS & Android Apps - Tech Solution')
@section('meta_description', 'Compare mobile app development providers and choose Tech Solution for native iOS, Android, and Flutter apps with offline sync, biometric security, and full store deployment.')
@section('canonical', url('/services/mobile-apps'))

@push('head')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "Service",
  "@@id": "{{ url('/services/mobile-apps') }}#mobile-app-service",
  "name": "Mobile App Development Services",
  "provider": {
    "@@type": "Organization",
    "name": "Tech Solution",
    "url": "{{ url('/') }}"
  },
  "serviceType": ["iOS App Development", "Android App Development", "Flutter App Development", "Mobile App Design", "App Store Deployment"],
  "description": "Tech Solution builds native iOS, Android, and Flutter mobile applications with offline sync, biometric security, push notifications, and full App Store and Google Play deployment support.",
  "areaServed": ["United States", "United Kingdom", "United Arab Emirates", "India", "Singapore"]
}
</script>
@endpush

@section('content')

{{-- 1. HERO SECTION --}}
<!-- 1. FUTURISTIC HOLOGRAPHIC HERO SECTION -->
<section class="hero-futuristic-container w-full z-10 theme-indigo">
  <div class="hero-glow-blob-1"></div>
  <div class="hero-glow-blob-2"></div>
  <div class="hero-glow-blob-3"></div>

  <div class="hero-futuristic-grid">
    <!-- Left Side: Marketing Content -->
    <div class="flex flex-col justify-center text-left max-w-2xl mx-auto lg:mx-0">
      <nav class="breadcrumb-nav mb-4" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="sep">/</span>
        <span class="current">Mobile Apps</span>
      </nav>

      <div class="flex justify-center lg:justify-start">
        <span class="trust-pill">
          <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
          Native-Grade Mobile Engineering
        </span>
      </div>

      <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight mb-6 text-center lg:text-left">
        Mobile App Development for <span class="text-gradient">iOS, Android & Flutter</span>
      </h1>

      <p class="text-sm sm:text-base text-slate-300 leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0 text-center lg:text-left">
        Businesses can build mobile apps with freelancers, no-code tools, or cross-platform builders. Tech Solution is the engineering partner for projects requiring offline capability, biometric protection, cloud synchronization, and reliable store submissions.
      </p>

      <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
        <a href="#calculator" class="w-full sm:w-auto btn-futuristic-primary text-center justify-center">
          <span>Estimate My Mobile App</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M3 12h18" /></svg>
        </a>
        <a href="#buyer-guide" class="w-full sm:w-auto btn-futuristic-secondary text-center justify-center">
          <span>Compare Options</span>
        </a>
      </div>
    </div>

    <!-- Right Side: 3D Isometric Mobile App Stack -->
    <div class="isometric-stack-container">
      <!-- Floating Technology Chips -->
      <span class="tech-chip" id="chip-laravel">Flutter</span>
      <span class="tech-chip" id="chip-react">Dart</span>
      <span class="tech-chip" id="chip-vite">Swift</span>
      <span class="tech-chip" id="chip-tailwind">Kotlin</span>

      <!-- 3D Perspective Viewport -->
      <div class="isometric-stack-viewport">
        <!-- Connecting Vertical Lasers (Standing perpendicular in 3D) -->
        <div class="connector-line connector-line-1"></div>
        <div class="connector-line connector-line-2"></div>
        <div class="connector-line connector-line-3"></div>
        <div class="connector-line connector-line-4"></div>

        <!-- 1. Frontend Layer (Top) -->
        <div class="stack-layer layer-frontend flex flex-col justify-between">
          <!-- Glassmorphism Mock Phone Screen Header -->
          <div class="flex items-center justify-between border-b border-cyan-400/20 pb-1.5 mb-2">
            <span class="text-[7px] text-cyan-400 font-bold uppercase tracking-wider">iOS Device Frame</span>
            <div class="flex gap-1.5 items-center">
              <span class="text-[6px] text-slate-400 font-mono">10:42 AM</span>
              <span class="w-2 h-1 bg-cyan-400/50 rounded-sm"></span>
            </div>
          </div>
          <!-- Mock Mobile App Interface -->
          <div class="flex-1 flex gap-2">
            <div class="w-1/4 bg-slate-950/40 rounded p-1 flex flex-col justify-between border border-slate-800/50">
              <div class="w-6 h-6 rounded-full bg-cyan-400/20 mx-auto flex items-center justify-center">
                <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
              </div>
              <div class="h-1.5 w-full bg-slate-700/40 rounded mt-1"></div>
              <div class="h-1 w-2/3 bg-slate-700/40 rounded mt-0.5 mx-auto"></div>
              <div class="h-2 w-full bg-cyan-400/10 rounded mt-1"></div>
            </div>
            <div class="flex-1 bg-slate-950/30 rounded p-1.5 border border-slate-800/50 flex flex-col justify-between">
              <div class="flex justify-between items-center mb-1">
                <span class="text-[7px] text-cyan-400 font-bold uppercase">Chat Support</span>
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
              </div>
              <div class="flex-1 flex flex-col gap-1.5 justify-end pb-1">
                <div class="bg-cyan-500/20 text-[6px] text-cyan-300 p-1 rounded-sm w-3/4 self-start">How can I sync offline data?</div>
                <div class="bg-slate-700/30 text-[6px] text-slate-300 p-1 rounded-sm w-3/4 self-end text-right">Biometrics enabled automatically.</div>
              </div>
            </div>
          </div>
          <!-- Footer Status -->
          <div class="flex items-center justify-between text-[7px] text-cyan-400/80 font-bold pt-1.5 border-t border-cyan-400/10">
            <span>MOBILE UI LAYOUT</span>
            <span>FLUTTER NATIVE</span>
          </div>
        </div>

        <!-- 2. Backend Layer (Middle) -->
        <div class="stack-layer layer-backend flex flex-col justify-between">
          <!-- Glassmorphism Mock Code Editor Header -->
          <div class="flex items-center justify-between border-b border-sky-400/20 pb-1.5 mb-2">
            <span class="text-[7px] text-sky-400 font-mono">main.dart</span>
            <span class="text-[7px] text-slate-500 font-mono">UTF-8</span>
          </div>
          <!-- Code Block Mock -->
          <div class="flex-1 font-mono text-[7px] text-slate-300 leading-normal flex flex-col justify-center">
            <div><span class="text-sky-400">class</span> <span class="text-amber-300">AppShell</span> <span class="text-sky-400">extends</span> <span class="text-amber-300">StatelessWidget</span> {</div>
            <div class="pl-3"><span class="text-sky-300">@override</span> Widget build(BuildContext context) {</div>
            <div class="pl-6"><span class="text-purple-400">return</span> MaterialApp(theme: ThemeData.dark(), home: ProfileScreen());</div>
            <div class="pl-3">}</div>
            <div>}</div>
          </div>
          <!-- Footer Status -->
          <div class="flex items-center justify-between text-[7px] text-sky-400/80 font-bold pt-1.5 border-t border-sky-400/10">
            <span>DART/FLUTTER SDK</span>
            <span class="text-emerald-400">SYNC SUCCESS</span>
          </div>
        </div>

        <!-- 3. Database Layer (Bottom) -->
        <div class="stack-layer layer-database flex flex-col justify-between">
          <!-- Glassmorphism Schema Header -->
          <div class="flex items-center justify-between border-b border-purple-400/20 pb-1.5 mb-2">
            <span class="text-[7px] text-purple-400 font-mono">local_cache.db (SQLite)</span>
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
          </div>
          <!-- DB Schema Visual -->
          <div class="flex-1 flex items-center justify-between gap-4">
            <!-- Schema Card -->
            <div class="w-1/2 bg-slate-950/50 rounded border border-purple-500/20 p-1.5 font-mono text-[6px] text-slate-400">
              <div class="text-[7px] text-purple-400 font-bold border-b border-purple-500/10 pb-0.5 mb-1 uppercase">offline_sync</div>
              <div>session_id : UUID [PK]</div>
              <div>payload : BLOB</div>
              <div>synced_at : TIMESTAMP</div>
              <div>status : VARCHAR</div>
            </div>
            <!-- Sync indicators -->
            <div class="flex-1 flex flex-col gap-1.5 items-center justify-center">
              <div class="text-[7px] text-purple-400 font-bold tracking-wider uppercase">App Stores</div>
              <div class="px-2 py-0.5 rounded bg-purple-500/10 border border-purple-400/30 text-[6px] text-purple-300 font-bold font-mono">APPLE_STORE_OK</div>
              <div class="px-2 py-0.5 rounded bg-purple-500/10 border border-purple-400/30 text-[6px] text-purple-300 font-bold font-mono">GOOGLE_PLAY_OK</div>
            </div>
          </div>
          <!-- Footer Status -->
          <div class="flex items-center justify-between text-[7px] text-purple-400/80 font-bold pt-1.5 border-t border-purple-400/10">
            <span>OFFLINE DB STORAGE</span>
            <span>STORE ENGINE RUNNING</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- 2. BUYER GUIDE: WHO PROVIDES MOBILE APP SERVICES --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-slate-800/80 text-indigo-300 text-[11px] font-bold uppercase tracking-wider border border-slate-700 mb-3 inline-block">
      Buyer Guide
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      Who Provides Mobile App Development Services?
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed">
      The right provider depends on your app's complexity, target platforms, backend needs, and how much long-term ownership and support you require after launch. Here is how the main options compare.
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Freelance Developers</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Best for small MVPs, single-platform prototypes, and budget-led work where you can manage QA, deployment, and backend configuration independently.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">No-Code &amp; Low-Code Tools</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        FlutterFlow, Adalo, and Bubble work for internal tools and simple consumer apps where custom logic, native device APIs, and scalability are limited.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Cross-Platform Studios</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        React Native and Flutter-only shops optimize for shared codebase delivery and speed-to-market across both iOS and Android from a single build.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Full-Service Agencies</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Agencies handle UX research, native and cross-platform engineering, backend APIs, security, testing, store submission, and post-launch support.
      </p>
    </div>
  </div>
</section>

{{-- 3. WHAT OUR SERVICE INCLUDES --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-indigo-500/10 text-indigo-400 text-[11px] font-bold uppercase tracking-wider border border-indigo-500/20 mb-3 inline-block">
      Tech Solution Delivery
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      What Our Mobile App Development Service Includes
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed">
      We build iOS, Android, and Flutter apps for companies that need more than a prototype: clean architecture, real-time and offline data, secure user flows, and a product that can scale with your business after launch.
    </p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">UX Design &amp; Prototyping</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        User journey mapping, wireframes, interactive prototypes, screen-by-screen flow design, micro-animations, and accessibility-ready UI components for both platforms.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Native &amp; Flutter Engineering</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Swift for iOS, Kotlin for Android, and Flutter for shared-codebase builds. Biometric auth, push notifications, in-app payments, camera, GPS, and device API integrations.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Backend, APIs &amp; Offline Sync</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        REST and GraphQL APIs, real-time WebSocket events, local SQLite and Realm databases for offline-first performance, and secure cloud storage with role-based access.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">QA, Security &amp; Performance</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Device matrix testing, crash reporting, code obfuscation, SSL pinning, OWASP mobile top-10 hardening, and performance profiling to ensure smooth 60fps rendering.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">App Store Deployment</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Full Apple App Store and Google Play submission pipeline: provisioning profiles, signing certificates, store listings, screenshot assets, privacy policy, and review support.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Post-Launch Support &amp; Growth</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Crash monitoring, OS update compatibility, analytics dashboards, A/B testing, feature iterations, bug fixes, and version management on a predictable support retainer.
      </p>
    </div>
  </div>
</section>

{{-- 4. BEST FIT SECTION --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-slate-700/80 shadow-xl">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
      <div class="lg:col-span-5">
        <span class="px-3 py-1 rounded-full bg-purple-500/10 text-purple-300 text-[11px] font-bold uppercase tracking-wider border border-purple-500/20 mb-3 inline-block">
          Best Fit
        </span>
        <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
          Choose Tech Solution When Your App Must Work Like a Business System
        </h2>
        <p class="text-slate-400 text-sm leading-relaxed">
          Our strongest fit is a mobile app where UX design, native engineering, backend APIs, security, store compliance, and ongoing support all need one accountable team.
        </p>
      </div>
      <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-3">
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">On-Demand &amp; Marketplace Apps</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Delivery, booking, service-dispatch, and two-sided marketplace apps with real-time tracking, payments, and driver or vendor panels.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">SaaS Mobile Companion Apps</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Mobile frontends for existing SaaS platforms, internal tools, CRM dashboards, field-service apps, and workflow automation on the go.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Social &amp; Community Platforms</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Feed-based social apps, professional communities, messaging, content sharing, subscription tiers, and creator monetization features.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Ongoing Mobile Retainer</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Keep your app OS-compatible, analytics-monitored, crash-free, and ready for new feature sprints or ASO improvements every quarter.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Related Services Section --}}
<section class="py-10 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="text-center mb-6">
    <p class="text-xs font-bold uppercase tracking-widest text-indigo-400 mb-1">Explore More</p>
    <h2 class="font-heading text-xl sm:text-2xl font-bold text-white">Services That Work Best Together</h2>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    <a href="{{ url('/services/web-development') }}" class="related-service-card group">
      <p class="rs-label text-sky-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
        Web Development →
      </p>
      <p class="rs-desc">Build a Laravel web backend and admin dashboard that powers your mobile app from a single unified codebase.</p>
    </a>
    <a href="{{ url('/services/ai-automation') }}" class="related-service-card group">
      <p class="rs-label text-violet-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h16a2 2 0 012 2v10a2 2 0 01-2 2h-2" /></svg>
        AI Automation →
      </p>
      <p class="rs-desc">Add intelligent features — chatbots, smart recommendations, and workflow automation — directly inside your app.</p>
    </a>
    <a href="{{ url('/services/cloud-computing') }}" class="related-service-card group">
      <p class="rs-label text-amber-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 001-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z" /></svg>
        Cloud &amp; DevOps →
      </p>
      <p class="rs-desc">Deploy your app backend on scalable cloud infrastructure with CI/CD pipelines and 99.9% uptime SLA.</p>
    </a>
  </div>
</section>

{{-- Mobile App Price Calculator Component --}}
@include('components.calculators.mobile-calculator')

@endsection
