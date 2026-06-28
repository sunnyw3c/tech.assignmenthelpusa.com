@extends('layouts.app')

@section('title', 'IT Consulting & Cloud Infrastructure | DevOps Engineering - Tech Solution')
@section('meta_description', 'Enterprise AWS and Google Cloud architecture, serverless migration, Kubernetes container orchestration, and automated CI/CD pipelines.')

@section('content')

<section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-12 border border-amber-500/30 shadow-xl relative overflow-hidden">
    <div class="max-w-2xl">
      <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-400 text-xs font-bold uppercase tracking-wider border border-amber-500/20 mb-4 inline-block">
        Cloud Architecture & DevOps
      </span>
      <h1 class="font-heading text-3xl sm:text-4xl font-extrabold text-white tracking-tight mb-4">
        Enterprise Cloud & <span class="text-gradient">DevOps Pipelines</span>
      </h1>
      <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-6">
        Architecting secure, auto-scaling cloud infrastructure on AWS and Google Cloud with 99.99% operational SLA uptime guarantees.
      </p>
      <a href="#calculator" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-amber-400 to-orange-500 text-slate-950 font-bold text-xs uppercase tracking-wider shadow-lg hover:scale-105 transition-all">
        Calculate Cloud Scope & ROI
      </a>
    </div>
  </div>
</section>

<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <h2 class="sr-only">Cloud Engineering Capabilities</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">AWS & GCP Migration</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Seamless cloud migration with zero downtime using containerized Docker environments.</p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Kubernetes Orchestration</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Automated cluster management, horizontal pod autoscaling, and load balancing.</p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Automated CI/CD Deployment</h3>
      <p class="text-slate-400 text-xs leading-relaxed">GitHub Actions and GitLab CI pipelines for automated testing and production releases.</p>
    </div>
  </div>
</section>

@include('components.calculators.cloud-calculator')

@endsection
