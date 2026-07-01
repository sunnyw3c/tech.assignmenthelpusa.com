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
<section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-12 border border-indigo-500/30 shadow-xl relative overflow-hidden">
    <div class="max-w-3xl">
      <span class="px-3 py-1 rounded-full bg-indigo-500/10 text-indigo-400 text-xs font-bold uppercase tracking-wider border border-indigo-500/20 mb-4 inline-block">
        Mobile App Development Service Provider
      </span>
      <nav class="breadcrumb-nav" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="sep">/</span>
        <span class="current">Mobile Apps</span>
      </nav>
      <h1 class="font-heading text-3xl sm:text-4xl font-extrabold text-white tracking-tight mb-4">
        Mobile App Development Services for <span class="text-gradient">iOS, Android &amp; Flutter</span>
      </h1>
      <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-6">
        Businesses can build mobile apps with freelancers, no-code tools, cross-platform studios, or full-service agencies. Tech Solution is the engineering partner for projects that need native-quality performance, secure authentication, offline capability, backend integration, and reliable App Store and Google Play deployment.
      </p>
      <a href="#calculator" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-bold text-xs uppercase tracking-wider shadow-lg hover:scale-105 transition-all">
        Estimate My Mobile App
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M3 12h18" /></svg>
      </a>
    </div>
    <!-- Service Hero Image -->
    <div class="mt-8 rounded-xl overflow-hidden border border-indigo-500/20 shadow-xl shadow-indigo-500/10">
      <img
        src="{{ asset('images/services/mobile-apps.png') }}"
        alt="Flutter mobile app development — iOS and Android app mockups built by Tech Solution"
        class="w-full h-auto object-cover"
        width="1200" height="600"
        loading="eager" decoding="async"
      />
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
