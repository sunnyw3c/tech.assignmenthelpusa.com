@extends('layouts.app')

@section('title', 'AI Automation Services | Workflow Automation & AI Integration - Tech Solution')
@section('meta_description', 'Custom AI automation solutions — chatbots, intelligent workflow automation, AI-powered data processing, LLM integrations, and business process automation for growing companies worldwide.')
@section('canonical', url('/services/ai-automation'))

@push('head')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "Service",
  "@@id": "{{ url('/services/ai-automation') }}#ai-automation-service",
  "name": "AI Automation Services",
  "provider": {
    "@@type": "Organization",
    "name": "Tech Solution",
    "url": "{{ url('/') }}"
  },
  "serviceType": [
    "AI Workflow Automation",
    "Chatbot Development",
    "LLM Integration",
    "Business Process Automation",
    "AI-Powered Data Processing",
    "Robotic Process Automation"
  ],
  "description": "Tech Solution builds custom AI automation systems including intelligent chatbots, LLM-powered applications, workflow automation pipelines, AI data processing, and RPA solutions that eliminate manual tasks and reduce operational costs for businesses worldwide.",
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
        <span class="current">AI Automation</span>
      </nav>

      <div class="flex justify-center lg:justify-start">
        <span class="trust-pill">
          <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
          Intelligent Workflow Agents
        </span>
      </div>

      <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight mb-6 text-center lg:text-left">
        AI Automation to <span class="text-gradient">Eliminate Manual Work</span>
      </h1>

      <p class="text-sm sm:text-base text-slate-300 leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0 text-center lg:text-left">
        Businesses waste thousands of hours on repetitive tasks. Tech Solution builds custom AI automation pipelines, LLM-powered tools, and process triggers that run 24/7 without error.
      </p>

      <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
        <a href="#contact" class="w-full sm:w-auto btn-futuristic-primary text-center justify-center">
          <span>Discuss My Automation Project</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M3 12h18" /></svg>
        </a>
        <a href="#buyer-guide" class="w-full sm:w-auto btn-futuristic-secondary text-center justify-center">
          <span>Compare Options</span>
        </a>
      </div>
    </div>

    <!-- Right Side: 3D Isometric AI Stack -->
    <div class="isometric-stack-container">
      <!-- Floating Technology Chips -->
      <span class="tech-chip" id="chip-laravel">OpenAI</span>
      <span class="tech-chip" id="chip-react">Python</span>
      <span class="tech-chip" id="chip-vite">LangChain</span>
      <span class="tech-chip" id="chip-tailwind">n8n</span>

      <!-- 3D Perspective Viewport -->
      <div class="isometric-stack-viewport">
        <!-- Connecting Vertical Lasers (Standing perpendicular in 3D) -->
        <div class="connector-line connector-line-1"></div>
        <div class="connector-line connector-line-2"></div>
        <div class="connector-line connector-line-3"></div>
        <div class="connector-line connector-line-4"></div>

        <!-- 1. Frontend Layer (Top) - Prompt & Input Interface -->
        <div class="stack-layer layer-frontend flex flex-col justify-between">
          <!-- Glassmorphism AI Input Header -->
          <div class="flex items-center justify-between border-b border-cyan-400/20 pb-1.5 mb-2">
            <span class="text-[8px] font-bold text-white tracking-wider font-sans">Prompt & Agent Input</span>
            <div class="bg-slate-950/50 text-[6px] text-cyan-400 px-2 py-0.5 rounded border border-cyan-500/20 font-mono">
              tokens: 142
            </div>
          </div>
          <!-- Prompt Text Area Mockup -->
          <div class="flex-1 flex gap-2">
            <div class="flex-1 bg-slate-950/40 rounded p-1.5 border border-slate-800/50 flex flex-col justify-between">
              <span class="text-[6.5px] text-cyan-300 font-mono leading-relaxed">
                "Analyze recent lead emails, categorize customer intent, write summary, and sync to CRM..."
              </span>
              <div class="h-2 w-12 bg-cyan-400/20 rounded mt-1.5 self-end flex items-center justify-center text-[6px] text-cyan-300">
                RUNNING
              </div>
            </div>
          </div>
          <!-- Footer Status -->
          <div class="flex items-center justify-between text-[7px] text-cyan-400/80 font-bold pt-1.5 border-t border-cyan-400/10">
            <span>LLM PROMPT AGENT</span>
            <span>INTENT ENGINE ACTIVE</span>
          </div>
        </div>

        <!-- 2. Backend Layer (Middle) - Execution Workflow Pipelines -->
        <div class="stack-layer layer-backend flex flex-col justify-between">
          <!-- Glassmorphism Pipeline Header -->
          <div class="flex items-center justify-between border-b border-sky-400/20 pb-1.5 mb-2">
            <span class="text-[7px] text-sky-400 font-mono">workflow_pipeline.py</span>
            <span class="text-[7px] text-emerald-400 font-mono">Trigger: Webhook</span>
          </div>
          <!-- Pipeline Visual Nodes -->
          <div class="flex-1 flex flex-col justify-center gap-1">
            <div class="flex items-center gap-2 font-mono text-[6px]">
              <span class="px-1.5 py-0.5 rounded bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">TRIGGER</span>
              <span class="text-slate-400">Incoming Customer Email</span>
            </div>
            <div class="h-3 w-px bg-slate-700 ml-6"></div>
            <div class="flex items-center gap-2 font-mono text-[6px]">
              <span class="px-1.5 py-0.5 rounded bg-purple-500/10 text-purple-400 border border-purple-500/20">PROCESS</span>
              <span class="text-slate-400">LLM Sentiment Extraction</span>
            </div>
            <div class="h-3 w-px bg-slate-700 ml-6"></div>
            <div class="flex items-center gap-2 font-mono text-[6px]">
              <span class="px-1.5 py-0.5 rounded bg-sky-500/10 text-sky-400 border border-sky-500/20">ACTION</span>
              <span class="text-slate-400">Post CRM + Alert Slack</span>
            </div>
          </div>
          <!-- Footer Status -->
          <div class="flex items-center justify-between text-[7px] text-sky-400/80 font-bold pt-1.5 border-t border-sky-400/10">
            <span>COGNITIVE ORCHESTRATION</span>
            <span>PIPELINE INSTANCE #104</span>
          </div>
        </div>

        <!-- 3. Database Layer (Bottom) - Model Metrics & Logs -->
        <div class="stack-layer layer-database flex flex-col justify-between">
          <!-- Glassmorphism Model metrics Header -->
          <div class="flex items-center justify-between border-b border-purple-400/20 pb-1.5 mb-2">
            <span class="text-[7px] text-purple-400 font-mono">GPT-4o API Node Stats</span>
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
          </div>
          <!-- Model Telemetry Details -->
          <div class="flex-1 flex items-center justify-between gap-4">
            <!-- Telemetry List -->
            <div class="w-1/2 bg-slate-950/50 rounded border border-purple-500/20 p-1.5 font-mono text-[6px] text-slate-400 leading-tight flex flex-col justify-between">
              <div class="flex justify-between border-b border-purple-500/10 pb-0.5 mb-1"><span class="text-purple-400">METRIC</span><span class="text-purple-300">VALUE</span></div>
              <div class="flex justify-between"><span>Latency:</span><span class="text-emerald-400">0.84s</span></div>
              <div class="flex justify-between"><span>Cache Hit:</span><span class="text-emerald-400">92%</span></div>
              <div class="flex justify-between"><span>Tokens In:</span><span class="text-slate-300">82.1K</span></div>
              <div class="flex justify-between"><span>Tokens Out:</span><span class="text-slate-300">14.8K</span></div>
            </div>
            <!-- Sync indicators -->
            <div class="flex-1 flex flex-col gap-1 items-center justify-center">
              <span class="text-[7px] text-purple-400 font-bold tracking-wider uppercase">Inference Logs</span>
              <div class="px-2 py-0.5 rounded bg-purple-500/10 border border-purple-400/30 text-[6px] text-purple-300 font-bold font-mono">AGENT_OK</div>
              <div class="px-2 py-0.5 rounded bg-purple-500/10 border border-purple-400/30 text-[6px] text-purple-300 font-bold font-mono">COST: $0.042</div>
            </div>
          </div>
          <!-- Footer Status -->
          <div class="flex items-center justify-between text-[7px] text-purple-400/80 font-bold pt-1.5 border-t border-purple-400/10">
            <span>LLM NODE ENDPOINT</span>
            <span>SYNC DATA SECURE</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- 2. BUYER GUIDE --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-slate-800/80 text-violet-300 text-[11px] font-bold uppercase tracking-wider border border-slate-700 mb-3 inline-block">
      Buyer Guide
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      Who Provides AI Automation Services?
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed">
      The right AI automation partner depends on what you want to automate, how complex your data is, and whether you need standalone tools or deep integrations with your existing software stack.
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">No-Code Automation Tools</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Zapier, Make, and n8n handle simple linear workflows between popular apps. Best for small teams automating basic triggers without custom logic or complex data transformations.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">SaaS AI Platforms</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Tools like ChatGPT Enterprise or Copilot add AI capabilities to existing workflows. Limited to pre-built integrations and cannot access your proprietary data or internal systems securely.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Freelance AI Developers</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Individual developers can build targeted automation scripts or chatbots. Best for isolated proof-of-concept builds where you handle integration, testing, and deployment yourself.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Full-Service AI Agencies</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Agencies design, build, integrate, and maintain end-to-end automation systems — from data pipelines and LLM applications to RPA bots and custom AI-powered dashboards.
      </p>
    </div>
  </div>
</section>

{{-- 3. WHAT OUR SERVICE INCLUDES --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-violet-500/10 text-violet-400 text-[11px] font-bold uppercase tracking-wider border border-violet-500/20 mb-3 inline-block">
      Tech Solution Delivery
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      What Our AI Automation Service Includes
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed">
      We build AI-powered systems that connect to your real business data, integrate with your existing tools, and automate processes that previously required hours of manual effort every day.
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-violet-500/10 border border-violet-500/20 flex items-center justify-center text-violet-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">AI Chatbots & Virtual Assistants</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Custom chatbots trained on your business data — product catalogs, FAQs, internal docs, or CRM records — deployed on your website, WhatsApp, Slack, or internal tools to handle customer queries, lead qualification, and support tickets automatically.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">Workflow & Business Process Automation</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        End-to-end automation of multi-step business processes — lead routing, invoice generation, email follow-up sequences, approval chains, report distribution, and data synchronization across platforms like CRM, ERP, and cloud storage.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center text-indigo-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">LLM Integration & Custom AI Applications</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Integration of large language models (GPT-4, Claude, Gemini, Llama) into your applications for intelligent document summarization, content generation, contract analysis, code review automation, and natural language query interfaces over your data.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-sky-500/10 border border-sky-500/20 flex items-center justify-center text-sky-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 014-4h4a4 4 0 014 4v2M9 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">Intelligent Document Processing</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Automated extraction and processing of data from invoices, purchase orders, contracts, forms, and PDFs using OCR and AI classification — feeding structured data directly into your ERP, CRM, or database without manual keying.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">Robotic Process Automation (RPA)</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Software bots that replicate human interactions with web portals, desktop applications, and legacy systems — automating data scraping, form submission, report downloads, and repetitive UI-driven tasks that have no API.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">AI-Powered Analytics & Reporting</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Automated data pipelines that collect, clean, and transform business data — combined with AI-generated insights, anomaly detection, demand forecasting, and auto-generated narrative reports delivered to your inbox or dashboard.
      </p>
    </div>
  </div>
</section>

{{-- 4. USE CASES --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-slate-800/80 text-violet-300 text-[11px] font-bold uppercase tracking-wider border border-slate-700 mb-3 inline-block">
      Real-World Applications
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      AI Automation Use Cases by Business Function
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed">
      Every department in your business has repetitive, rule-based tasks that can be fully or partially automated using AI — here are the highest-impact areas we target first.
    </p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-violet-400 inline-block"></span>
        Sales & Lead Management
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">AI lead scoring, automated follow-up emails, CRM data enrichment, sales call transcription and summary, and pipeline stage automation based on buyer behaviour signals.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-purple-400 inline-block"></span>
        Customer Support
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">AI chatbots for 24/7 first-line support, automated ticket classification and routing, sentiment analysis, FAQ generation from past tickets, and escalation triggers.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-indigo-400 inline-block"></span>
        Finance & Accounting
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">Invoice data extraction, automated three-way PO matching, expense receipt processing, bank statement reconciliation, and AI-generated financial commentary.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-sky-400 inline-block"></span>
        HR & Recruitment
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">Resume screening and shortlisting, job description generation, onboarding document automation, leave request processing, and employee sentiment analysis from survey data.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-emerald-400 inline-block"></span>
        Operations & Supply Chain
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">Demand forecasting, automated reorder triggers, supplier communication automation, shipment tracking alerts, quality inspection report generation, and inventory anomaly detection.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-amber-400 inline-block"></span>
        Marketing & Content
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">AI-assisted content generation, social media scheduling automation, campaign performance reporting, SEO content briefs, email personalization, and A/B test analysis.</p>
    </div>
  </div>
</section>

{{-- 5. HOW WE BUILD IT --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-slate-700/80 shadow-xl">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
      <div class="lg:col-span-4">
        <span class="px-3 py-1 rounded-full bg-violet-500/10 text-violet-300 text-[11px] font-bold uppercase tracking-wider border border-violet-500/20 mb-3 inline-block">
          Delivery Process
        </span>
        <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
          How We Build Your AI Automation System
        </h2>
        <p class="text-slate-400 text-sm leading-relaxed">
          Every AI automation project starts with understanding your data and processes — not with jumping straight to a model. We identify the highest-ROI automation targets first, then build, test, and iterate incrementally.
        </p>
      </div>
      <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="glass-card rounded-2xl p-5">
          <span class="text-[10px] font-bold uppercase text-violet-400">01</span>
          <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Process Audit & ROI Mapping</h3>
          <p class="text-slate-400 text-xs leading-relaxed">We analyse your current workflows, identify the highest-volume manual tasks, estimate time saved per automation, and prioritise by business impact before scoping any technical solution.</p>
        </div>
        <div class="glass-card rounded-2xl p-5">
          <span class="text-[10px] font-bold uppercase text-purple-400">02</span>
          <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Data & Integration Architecture</h3>
          <p class="text-slate-400 text-xs leading-relaxed">We design the data flow — what systems connect, how data is transformed, what triggers automation, and how results feed back into your CRM, ERP, or communication tools.</p>
        </div>
        <div class="glass-card rounded-2xl p-5">
          <span class="text-[10px] font-bold uppercase text-indigo-400">03</span>
          <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Build, Test & Validate</h3>
          <p class="text-slate-400 text-xs leading-relaxed">Iterative development with real business data, accuracy benchmarking for AI outputs, edge case testing, human-in-the-loop checkpoints where needed, and user acceptance sign-off before go-live.</p>
        </div>
        <div class="glass-card rounded-2xl p-5">
          <span class="text-[10px] font-bold uppercase text-sky-400">04</span>
          <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Deploy, Monitor & Improve</h3>
          <p class="text-slate-400 text-xs leading-relaxed">Production deployment with error logging, performance monitoring, alert thresholds, periodic accuracy reviews, and model or prompt updates as your business data and requirements evolve.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- 6. BEST FIT --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-slate-700/80 shadow-xl">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
      <div class="lg:col-span-5">
        <span class="px-3 py-1 rounded-full bg-purple-500/10 text-purple-300 text-[11px] font-bold uppercase tracking-wider border border-purple-500/20 mb-3 inline-block">
          Best Fit
        </span>
        <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
          Choose Tech Solution When Automation Must Connect to Your Real Business Systems
        </h2>
        <p class="text-slate-400 text-sm leading-relaxed">
          Our strongest fit is when you need AI automation that goes beyond pre-built tools — connecting to your own databases, APIs, ERP, or CRM with custom logic, secure data handling, and reliable production-grade reliability.
        </p>
      </div>
      <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-3">
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">eCommerce & Retail Businesses</h3>
          <p class="text-xs text-slate-400 leading-relaxed">AI product descriptions, automated inventory alerts, customer service chatbots, review analysis, and personalised recommendation engines.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Professional Services & Agencies</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Proposal generation, contract review, timesheet automation, client reporting, and AI-assisted project scoping from discovery call transcripts.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Manufacturing & Logistics</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Demand forecasting, supplier communication bots, quality inspection data extraction, shipment anomaly detection, and automated compliance documentation.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">SaaS & Tech Startups</h3>
          <p class="text-xs text-slate-400 leading-relaxed">In-app AI features, LLM-powered search, automated onboarding flows, usage anomaly alerts, and AI-generated in-app help and documentation.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- 7. FAQ --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-slate-800/80 text-violet-300 text-[11px] font-bold uppercase tracking-wider border border-slate-700 mb-3 inline-block">
      Common Questions
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      AI Automation Services — Frequently Asked Questions
    </h2>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">What is the difference between AI automation and traditional automation?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Traditional automation follows fixed rules — if X then Y. AI automation handles variability: it reads unstructured documents, understands natural language, adapts to new patterns, and makes decisions on data that changes every time, like customer emails, invoices, or product descriptions.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Do you use OpenAI, Claude, or other LLM providers?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">We work with all major LLM providers — OpenAI (GPT-4o), Anthropic (Claude), Google (Gemini), and open-source models (Llama, Mistral). We recommend the best model for your use case, cost profile, and data privacy requirements, including on-premise deployments if needed.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Is my business data safe when using AI automation?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Yes. We architect AI systems with data privacy at the core — using API calls with no training on your data, on-premise model options, data anonymisation, access controls, and encrypted pipelines. We can work within GDPR, HIPAA, and other compliance frameworks.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Can you connect AI automation to our existing CRM or ERP?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Yes. We integrate AI automation with Odoo, Salesforce, HubSpot, Zoho, SAP, and custom systems via REST APIs, webhooks, or direct database connections. The AI output feeds directly into your existing tools rather than requiring a separate platform to manage.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">How quickly can we go from idea to a working automation?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">A focused single-process automation — such as an invoice data extraction bot or a lead qualification chatbot — can be live within 2–4 weeks. More complex multi-step pipelines with multiple integrations typically take 6–12 weeks depending on data complexity and testing requirements.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">What happens when the AI makes a mistake?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">We build human-in-the-loop checkpoints for high-risk decisions, confidence thresholds that route low-confidence outputs to human review, error logging, and alert systems. No AI automation we deploy makes irreversible decisions without appropriate safeguards in place.</p>
    </div>
  </div>
</section>

{{-- 8. CONTACT CTA --}}
<section id="contact" class="py-8 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto relative z-10 scroll-mt-20">
  <div class="glass-panel rounded-2xl p-6 sm:p-10 border border-violet-500/20 shadow-xl text-center">
    <span class="px-3 py-1 rounded-full bg-violet-500/10 text-violet-400 text-[11px] font-bold uppercase tracking-wider border border-violet-500/20 mb-4 inline-block">
      Start Your Project
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white mb-3">
      Ready to Automate Your Business Operations?
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed mb-6 max-w-xl mx-auto">
      Tell us which manual processes are costing you the most time. We will identify the highest-ROI automation targets and outline a practical delivery plan.
    </p>
    <a href="{{ url('/#contact') }}" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-xl bg-gradient-to-r from-violet-500 to-purple-600 text-white font-bold text-sm shadow-lg hover:scale-105 transition-all">
      Get a Free Automation Audit
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M3 12h18" /></svg>
    </a>
  </div>
</section>

{{-- Related Services Section --}}
<section class="py-10 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="text-center mb-6">
    <p class="text-xs font-bold uppercase tracking-widest text-violet-400 mb-1">Explore More</p>
    <h2 class="font-heading text-xl sm:text-2xl font-bold text-white">Services That Work Best Together</h2>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    <a href="{{ url('/services/web-development') }}" class="related-service-card group">
      <p class="rs-label text-sky-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
        Web Development →
      </p>
      <p class="rs-desc">Embed AI automation directly into your web application — smart forms, AI chat, and automated data workflows.</p>
    </a>
    <a href="{{ url('/services/cloud-computing') }}" class="related-service-card group">
      <p class="rs-label text-amber-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 001-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z" /></svg>
        Cloud &amp; DevOps →
      </p>
      <p class="rs-desc">Deploy and scale your AI pipelines on managed cloud infrastructure with CI/CD automation and cost monitoring.</p>
    </a>
    <a href="{{ url('/services/seo-optimization') }}" class="related-service-card group">
      <p class="rs-label text-purple-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
        SEO Optimization →
      </p>
      <p class="rs-desc">Use AI-powered content generation and programmatic SEO to scale thousands of indexed pages automatically.</p>
    </a>
  </div>
</section>

@endsection
