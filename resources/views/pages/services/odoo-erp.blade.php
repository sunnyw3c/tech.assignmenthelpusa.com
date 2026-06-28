@extends('layouts.app')

@section('title', 'Odoo ERP Development | Custom Enterprise Implementation - Tech Solution')
@section('meta_description', 'Tailored Odoo ERP implementations, custom Python modules, inventory automation, CRM pipelines, and multi-currency accounting systems.')

@section('content')

<section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-12 border border-emerald-500/30 shadow-xl relative overflow-hidden">
    <div class="max-w-2xl">
      <span class="px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 text-xs font-bold uppercase tracking-wider border border-emerald-500/20 mb-4 inline-block">
        Enterprise Resource Planning
      </span>
      <h1 class="font-heading text-3xl sm:text-4xl font-extrabold text-white tracking-tight mb-4">
        Custom Odoo ERP <span class="text-gradient">Automation</span>
      </h1>
      <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-6">
        Unifying finance, supply chain, CRM, and HR into an automated Odoo ecosystem custom-built for your business operations.
      </p>
      <a href="#calculator" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-emerald-400 to-teal-500 text-slate-950 font-bold text-xs uppercase tracking-wider shadow-lg hover:scale-105 transition-all">
        Calculate Odoo Scope & ROI
      </a>
    </div>
  </div>
</section>

<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <h2 class="sr-only">Odoo Engineering Capabilities</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Custom Python Modules</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Tailor-made Odoo apps created specifically for unique industry workflows and reporting.</p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Multi-Warehouse Supply Chain</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Real-time inventory tracking, automated reordering rules, and barcode integration.</p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Seamless Data Migration</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Secure data extraction and transformation from legacy systems with zero data loss.</p>
    </div>
  </div>
</section>

@include('components.calculators.odoo-calculator')

@endsection
