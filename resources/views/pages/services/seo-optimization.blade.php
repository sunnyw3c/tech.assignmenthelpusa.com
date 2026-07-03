@extends('layouts.app')

@section('title', 'SEO Optimization Services | Technical SEO & Core Web Vitals - Tech Solution')
@section('meta_description', 'Compare SEO service providers and choose Tech Solution for technical audits, Core Web Vitals tuning, structured schema markup, keyword strategy, and programmatic content at scale.')
@section('canonical', url('/services/seo-optimization'))

@push('head')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "Service",
  "@@id": "{{ url('/services/seo-optimization') }}#seo-service",
  "name": "SEO Optimization Services",
  "provider": {
    "@@type": "Organization",
    "name": "Tech Solution",
    "url": "{{ url('/') }}"
  },
  "serviceType": ["Technical SEO Audit", "Core Web Vitals Optimization", "Structured Schema Markup", "Keyword Strategy", "Programmatic SEO", "Local SEO"],
  "description": "Tech Solution delivers data-driven SEO programs covering technical audits, Core Web Vitals speed tuning, JSON-LD schema integration, keyword mapping, programmatic content, and ongoing rank tracking for sustainable organic growth.",
  "areaServed": ["United States", "United Kingdom", "United Arab Emirates", "India", "Singapore"]
}
</script>
@endpush

@section('content')

{{-- 1. HERO SECTION --}}
<!-- 1. FUTURISTIC HOLOGRAPHIC HERO SECTION -->
<section class="hero-futuristic-container w-full z-10 theme-purple">
  <div class="hero-glow-blob-1"></div>
  <div class="hero-glow-blob-2"></div>
  <div class="hero-glow-blob-3"></div>

  <div class="hero-futuristic-grid">
    <!-- Left Side: Marketing Content -->
    <div class="flex flex-col justify-center text-left max-w-2xl mx-auto lg:mx-0">
      <nav class="breadcrumb-nav mb-4" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="sep">/</span>
        <span class="current">SEO Optimization</span>
      </nav>

      <div class="flex justify-center lg:justify-start">
        <span class="trust-pill">
          <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
          Technical Audit & Rank Growth
        </span>
      </div>

      <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight mb-6 text-center lg:text-left">
        SEO Optimization for <span class="text-gradient">Technical Rank & Growth</span>
      </h1>

      <p class="text-sm sm:text-base text-slate-300 leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0 text-center lg:text-left">
        Businesses can build organic reach through freelancers, consultants, or link builders. Tech Solution is the technical engineering partner for systems requiring deep web audits, Core Web Vitals speed alignment, JSON-LD schema, and programmatic scale.
      </p>

      <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
        <a href="#calculator" class="w-full sm:w-auto btn-futuristic-primary text-center justify-center">
          <span>Estimate My SEO Program</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M3 12h18" /></svg>
        </a>
        <a href="#buyer-guide" class="w-full sm:w-auto btn-futuristic-secondary text-center justify-center">
          <span>Compare Options</span>
        </a>
      </div>
    </div>

    <!-- Right Side: 3D Isometric SEO Stack -->
    <div class="isometric-stack-container">
      <!-- Floating Technology Chips -->
      <span class="tech-chip" id="chip-laravel">GA4</span>
      <span class="tech-chip" id="chip-react">Schema</span>
      <span class="tech-chip" id="chip-vite">Ahrefs</span>
      <span class="tech-chip" id="chip-tailwind">GSC</span>

      <!-- 3D Perspective Viewport -->
      <div class="isometric-stack-viewport">
        <!-- Connecting Vertical Lasers (Standing perpendicular in 3D) -->
        <div class="connector-line connector-line-1"></div>
        <div class="connector-line connector-line-2"></div>
        <div class="connector-line connector-line-3"></div>
        <div class="connector-line connector-line-4"></div>

        <!-- 1. Frontend Layer (Top) - Google SERP Rank -->
        <div class="stack-layer layer-frontend flex flex-col justify-between">
          <!-- Glassmorphism Google Header -->
          <div class="flex items-center justify-between border-b border-cyan-400/20 pb-1.5 mb-2">
            <span class="text-[8px] font-bold text-white tracking-wider font-sans">Google Search Results</span>
            <div class="bg-slate-950/50 text-[6px] text-emerald-400 px-2 py-0.5 rounded border border-emerald-500/20 font-mono font-bold">
              Rank #1
            </div>
          </div>
          <!-- Mock SERP Card -->
          <div class="flex-1 bg-slate-950/40 rounded p-2 border border-slate-800/50 flex flex-col justify-between">
            <div>
              <div class="text-[6px] text-slate-400 font-mono">https://yourbrand.com/service-page</div>
              <div class="text-[9px] text-cyan-400 font-bold hover:underline cursor-pointer leading-tight">Best Enterprise Web Solutions & Services</div>
              <!-- Glowing rating stars -->
              <div class="flex items-center gap-1 mt-0.5">
                <span class="text-amber-400 text-[8px]">★★★★★</span>
                <span class="text-[6px] text-slate-500">Rating: 5.0 - 42 votes - Price range: $$$</span>
              </div>
            </div>
            <div class="text-[6.5px] text-slate-300 leading-snug">
              Get high-performance custom Laravel development, Flutter apps, and technical SEO optimizations engineered for global enterprise scalability...
            </div>
          </div>
          <!-- Footer Status -->
          <div class="flex items-center justify-between text-[7px] text-cyan-400/80 font-bold pt-1.5 border-t border-cyan-400/10">
            <span>GOOGLE SERP LAYOUT</span>
            <span>+42% CTR GROWTH</span>
          </div>
        </div>

        <!-- 2. Backend Layer (Middle) - Keywords & Semantic Core -->
        <div class="stack-layer layer-backend flex flex-col justify-between">
          <!-- Glassmorphism Keyword Audit Header -->
          <div class="flex items-center justify-between border-b border-sky-400/20 pb-1.5 mb-2">
            <span class="text-[7px] text-sky-400 font-mono">keywords_map.json</span>
            <span class="text-[7px] text-emerald-400 font-mono">Index: Success</span>
          </div>
          <!-- Keywords Map View -->
          <div class="flex-1 flex flex-col justify-center gap-1.5">
            <div class="flex justify-between items-center bg-slate-950/40 p-1 rounded border border-slate-800/40">
              <span class="text-[7px] text-slate-300 font-mono">"laravel development"</span>
              <span class="text-[6px] text-emerald-400 font-bold">Vol: 12.4K / Difficulty: 24</span>
            </div>
            <div class="flex justify-between items-center bg-slate-950/40 p-1 rounded border border-slate-800/40">
              <span class="text-[7px] text-slate-300 font-mono">"flutter mobile app"</span>
              <span class="text-[6px] text-emerald-400 font-bold">Vol: 8.2K / Difficulty: 18</span>
            </div>
            <div class="flex justify-between items-center bg-slate-950/40 p-1 rounded border border-slate-800/40">
              <span class="text-[7px] text-slate-300 font-mono">"technical seo agency"</span>
              <span class="text-[6px] text-emerald-400 font-bold">Vol: 3.1K / Difficulty: 12</span>
            </div>
          </div>
          <!-- Footer Status -->
          <div class="flex items-center justify-between text-[7px] text-sky-400/80 font-bold pt-1.5 border-t border-sky-400/10">
            <span>SEMANTIC STRUCTURE</span>
            <span>2.4K TARGET PHRASES</span>
          </div>
        </div>

        <!-- 3. Database Layer (Bottom) - Audit / Schema -->
        <div class="stack-layer layer-database flex flex-col justify-between">
          <!-- Glassmorphism Audit Header -->
          <div class="flex items-center justify-between border-b border-purple-400/20 pb-1.5 mb-2">
            <span class="text-[7px] text-purple-400 font-mono">JSON-LD Schema Markup</span>
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
          </div>
          <!-- DB Audit Schema visual -->
          <div class="flex-1 flex items-center justify-between gap-4">
            <!-- Structured Data JSON -->
            <div class="w-1/2 bg-slate-950/50 rounded border border-purple-500/20 p-1.5 font-mono text-[6px] text-slate-400 leading-tight">
              <div>{</div>
              <div class="pl-2">"@type": "Service",</div>
              <div class="pl-2">"name": "SEO Consulting",</div>
              <div class="pl-2">"provider": "Tech Solution",</div>
              <div class="pl-2">"areaServed": "US, UK, UAE"</div>
              <div>}</div>
            </div>
            <!-- Technical Audit scores -->
            <div class="flex-1 flex flex-col gap-1 items-center justify-center">
              <span class="text-[7px] text-purple-400 font-bold tracking-wider uppercase">Crawl Audit</span>
              <div class="px-2 py-0.5 rounded bg-purple-500/10 border border-purple-400/30 text-[6px] text-purple-300 font-bold font-mono">LCP: 0.8s (PASS)</div>
              <div class="px-2 py-0.5 rounded bg-purple-500/10 border border-purple-400/30 text-[6px] text-purple-300 font-bold font-mono">CLS: 0.01 (PASS)</div>
              <div class="px-2 py-0.5 rounded bg-purple-500/10 border border-purple-400/30 text-[6px] text-purple-300 font-bold font-mono">FID: 12ms (PASS)</div>
            </div>
          </div>
          <!-- Footer Status -->
          <div class="flex items-center justify-between text-[7px] text-purple-400/80 font-bold pt-1.5 border-t border-purple-400/10">
            <span>CORE WEB VITALS METRICS</span>
            <span>100% CRAWL COMPLIANT</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- 2. BUYER GUIDE: WHO PROVIDES SEO SERVICES --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-slate-800/80 text-purple-300 text-[11px] font-bold uppercase tracking-wider border border-slate-700 mb-3 inline-block">
      Buyer Guide
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      Who Provides SEO Optimization Services?
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed">
      The right provider depends on whether your SEO gap is technical, content-based, authority-driven, or a combination of all three. Here is how the main options compare.
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Freelance SEO Consultants</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Best for audits, keyword research, and on-page recommendations on smaller sites where you can implement fixes in-house and manage ongoing content independently.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Link-Building Agencies</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Specialize in authority acquisition through guest posts, PR placements, and digital outreach — effective for competitive niches where domain rating is the primary gap.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Content Marketing Studios</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Focus on blog production, topic clusters, and editorial calendars for brands that need a steady content pipeline to capture mid-funnel informational search.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Technical SEO Agencies</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Handle crawl audits, site architecture, speed optimization, structured data, indexation, Core Web Vitals, and programmatic content for complex or large-scale sites.
      </p>
    </div>
  </div>
</section>

{{-- 3. WHAT OUR SERVICE INCLUDES --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-purple-500/10 text-purple-400 text-[11px] font-bold uppercase tracking-wider border border-purple-500/20 mb-3 inline-block">
      Tech Solution Delivery
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      What Our SEO Optimization Service Includes
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed">
      We build SEO programs for companies that need more than keyword reports: fixed technical foundations, structured data that earns rich results, content architecture that scales, and monthly evidence of rank movement and organic traffic growth.
    </p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Technical SEO Audit</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Full crawl analysis covering indexation errors, duplicate content, canonical mismatches, broken links, redirect chains, sitemap health, and robots.txt configuration with prioritized fix recommendations.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Core Web Vitals Optimization</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        LCP, INP, and CLS improvements through image optimization, render-blocking elimination, lazy loading, font subsetting, critical CSS, CDN configuration, and server response time tuning.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Structured Schema Markup</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        JSON-LD implementation for Organization, WebSite, Service, FAQ, Article, Product, BreadcrumbList, and LocalBusiness schemas to earn rich results and enhance SERP click-through rates.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Keyword Strategy &amp; Architecture</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Competitor gap analysis, intent-based keyword mapping, topic cluster design, internal linking structure, page hierarchy planning, and title and meta optimization across all target pages.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Programmatic SEO &amp; Content</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Automated template systems that generate thousands of unique, indexable service and location pages from structured data — capturing long-tail search volume at scale without manual effort.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Rank Tracking &amp; Monthly Reporting</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Weekly position monitoring, organic traffic attribution, conversion-path analysis, Search Console integration, and monthly executive reports with clear rank movement and next-priority actions.
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
          Choose Tech Solution When SEO Must Drive Measurable Business Revenue
        </h2>
        <p class="text-slate-400 text-sm leading-relaxed">
          Our strongest fit is an SEO program where technical health, content strategy, structured data, and rank accountability all need one team — not three separate vendors.
        </p>
      </div>
      <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-3">
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">New Website SEO Launch</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Set up technical foundations, URL architecture, schema, and content strategy from day one so the site earns organic traffic from first publish.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Penalty &amp; Traffic Recovery</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Diagnose Google algorithm updates, manual actions, and technical regressions causing organic traffic drops and implement a structured recovery roadmap.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Programmatic &amp; Local SEO</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Scale service-area pages, location landing pages, and industry-vertical pages automatically to capture high-intent geographic and long-tail search demand.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Ongoing SEO Retainer</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Continuous technical monitoring, monthly content updates, schema maintenance, Core Web Vitals tracking, and rank reporting on a predictable monthly engagement.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Related Services Section --}}
<section class="py-10 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="text-center mb-6">
    <p class="text-xs font-bold uppercase tracking-widest text-purple-400 mb-1">Explore More</p>
    <h2 class="font-heading text-xl sm:text-2xl font-bold text-white">Services That Work Best Together</h2>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    <a href="{{ url('/services/web-development') }}" class="related-service-card group">
      <p class="rs-label text-sky-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
        Web Development →
      </p>
      <p class="rs-desc">Build a technically clean Laravel site that search engines can crawl, index, and rank from day one.</p>
    </a>
    <a href="{{ url('/services/ai-automation') }}" class="related-service-card group">
      <p class="rs-label text-violet-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h16a2 2 0 012 2v10a2 2 0 01-2 2h-2" /></svg>
        AI Automation →
      </p>
      <p class="rs-desc">Scale programmatic SEO content production with AI-powered pipelines and automated page generation.</p>
    </a>
    <a href="{{ url('/services/odoo-erp') }}" class="related-service-card group">
      <p class="rs-label text-emerald-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
        Odoo ERP →
      </p>
      <p class="rs-desc">Connect your CRM and sales pipeline to track exactly which SEO keywords drive qualified leads and revenue.</p>
    </a>
  </div>
</section>

{{-- SEO Calculator Component --}}
@include('components.calculators.seo-calculator')

@endsection
