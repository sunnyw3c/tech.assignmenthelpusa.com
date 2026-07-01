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
<section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-12 border border-purple-500/30 shadow-xl relative overflow-hidden">
    <div class="max-w-3xl">
      <span class="px-3 py-1 rounded-full bg-purple-500/10 text-purple-400 text-xs font-bold uppercase tracking-wider border border-purple-500/20 mb-4 inline-block">
        SEO Optimization Service Provider
      </span>
      <nav class="breadcrumb-nav" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="sep">/</span>
        <span class="current">SEO Optimization</span>
      </nav>
      <h1 class="font-heading text-3xl sm:text-4xl font-extrabold text-white tracking-tight mb-4">
        SEO Optimization Services for <span class="text-gradient">Technical Rank &amp; Organic Growth</span>
      </h1>
      <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-6">
        Businesses can improve organic search through in-house teams, freelance consultants, link-building agencies, or full-service SEO providers. Tech Solution is the technical partner for programs that need audits, Core Web Vitals fixes, structured data, keyword architecture, programmatic content, and measurable rank improvements — all under one accountable team.
      </p>
      <a href="#calculator" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-purple-500 to-indigo-600 text-white font-bold text-xs uppercase tracking-wider shadow-lg hover:scale-105 transition-all">
        Estimate My SEO Program
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M3 12h18" /></svg>
      </a>
    </div>
    <!-- Service Hero Image -->
    <div class="mt-8 rounded-xl overflow-hidden border border-purple-500/20 shadow-xl shadow-purple-500/10">
      <img
        src="{{ asset('images/services/seo-optimization.png') }}"
        alt="SEO analytics dashboard — rank tracking, Core Web Vitals, and organic traffic growth by Tech Solution"
        class="w-full h-auto object-cover"
        width="1200" height="600"
        loading="eager" decoding="async"
      />
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
