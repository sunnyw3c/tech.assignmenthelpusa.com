@extends('layouts.app')

@section('title', 'Mobile App Development | iOS & Android Native Engineering - Tech Solution')
@section('meta_description', 'High-performance mobile applications built with Swift, Kotlin, and Flutter. Feature-rich, offline-capable, and published to global app stores.')

@section('content')

<section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-12 border border-indigo-500/30 shadow-xl relative overflow-hidden">
    <div class="max-w-2xl">
      <span class="px-3 py-1 rounded-full bg-indigo-500/10 text-indigo-400 text-xs font-bold uppercase tracking-wider border border-indigo-500/20 mb-4 inline-block">
        Mobile Application Engineering
      </span>
      <h1 class="font-heading text-3xl sm:text-4xl font-extrabold text-white tracking-tight mb-4">
        Native iOS & <span class="text-gradient">Android Mobile Apps</span>
      </h1>
      <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-6">
        Building high-speed, intuitive mobile applications with offline syncing, biometric security, and smooth micro-animations.
      </p>
      <a href="#calculator" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-bold text-xs uppercase tracking-wider shadow-lg hover:scale-105 transition-all">
        Calculate Mobile Scope & ROI
      </a>
    </div>
  </div>
</section>

<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <h2 class="sr-only">Mobile Engineering Capabilities</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Cross-Platform Flutter</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Single codebase deployment across iOS and Android with zero performance compromise.</p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Offline Engine Sync</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Local SQLite and Realm databases ensure uninterrupted performance even in low-connectivity zones.</p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">App Store Publication</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Full deployment pipeline management for Apple App Store and Google Play compliance.</p>
    </div>
  </div>
</section>

@include('components.calculators.mobile-calculator')

@endsection
