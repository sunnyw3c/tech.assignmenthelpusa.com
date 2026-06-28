@extends('layouts.app')

@section('title', 'Custom Web Development | Laravel & React Enterprise Engineering - Tech Solution')
@section('meta_description', 'High-speed, scalable web applications built on Laravel, React, Vue, and Inertia. Engineered for conversion and top Core Web Vitals scores.')

@section('content')

<!-- Service Header Banner (Compact & Balanced Sizing) -->
<section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-12 border border-sky-500/30 shadow-xl relative overflow-hidden">
    <div class="max-w-2xl">
      <span class="px-3 py-1 rounded-full bg-sky-500/10 text-sky-400 text-xs font-bold uppercase tracking-wider border border-sky-500/20 mb-4 inline-block">
        Custom Web Engineering
      </span>
      <h1 class="font-heading text-3xl sm:text-4xl font-extrabold text-white tracking-tight mb-4">
        Custom Laravel & <span class="text-gradient">React Platforms</span>
      </h1>
      <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-6">
        Architecting enterprise-grade web applications engineered for sub-second page loads, complex workflow automation, and maximum buyer conversion.
      </p>
      <a href="#calculator" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-sky-400 to-indigo-500 text-slate-950 font-bold text-xs uppercase tracking-wider shadow-lg hover:scale-105 transition-all">
        Calculate Web Scope & ROI
      </a>
    </div>
  </div>
</section>

<!-- Deep Breakdown Section (Strict H2, H3 Hierarchy) -->
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <h2 class="sr-only">Core Engineering Capabilities</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Laravel Ecosystem Mastery</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Modern Laravel Blade components, Livewire, and Inertia.js for fast, interactive user interfaces with enterprise security.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Core Web Vitals Optimization</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Achieve 95+ performance scores on Google PageSpeed Insights through server-side caching and asset bundling strategies.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">High-Throughput REST APIs</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Clean, versioned API integrations ready for mobile apps, third-party payment gateways, and enterprise microservices.
      </p>
    </div>
  </div>
</section>

<!-- Dedicated Web Calculator Component -->
@include('components.calculators.web-calculator')

@endsection
