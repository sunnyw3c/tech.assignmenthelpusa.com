@extends('layouts.app')

@section('title', 'Technical SEO & Speed Tuning | Growth Analytics - Tech Solution')
@section('meta_description', 'Data-driven technical SEO audits, programmatic content generation, Core Web Vitals speed optimization, and high-converting keyword strategies.')

@section('content')

<section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-12 border border-purple-500/30 shadow-xl relative overflow-hidden">
    <div class="max-w-2xl">
      <span class="px-3 py-1 rounded-full bg-purple-500/10 text-purple-400 text-xs font-bold uppercase tracking-wider border border-purple-500/20 mb-4 inline-block">
        Growth & Search Optimization
      </span>
      <h1 class="font-heading text-3xl sm:text-4xl font-extrabold text-white tracking-tight mb-4">
        Technical SEO & <span class="text-gradient">Core Web Vitals</span>
      </h1>
      <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-6">
        Dominating organic search through programmatic schema engineering, rapid server response tuning, and authority content strategies.
      </p>
      <a href="#calculator" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-purple-500 to-indigo-600 text-white font-bold text-xs uppercase tracking-wider shadow-lg hover:scale-105 transition-all">
        Calculate SEO Scope & ROI
      </a>
    </div>
  </div>
</section>

<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <h2 class="sr-only">SEO Engineering Capabilities</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Programmatic SEO</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Automated template generation for capturing high-intent long-tail search volume at scale.</p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Core Web Vitals Speed</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Deep code refactoring to pass LCP, FID, and CLS thresholds for Google ranking signals.</p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Structured Schema Markup</h3>
      <p class="text-slate-400 text-xs leading-relaxed">JSON-LD rich snippet integration for enhanced search visibility and higher click-through rates.</p>
    </div>
  </div>
</section>

@include('components.calculators.seo-calculator')

@endsection
