@extends('layouts.app')

@section('title', 'Odoo ERP Customization & Development Services | Tech Solution')
@section('meta_description', 'Expert Odoo ERP customization, custom Python module development, third-party integrations, data migration, and Odoo implementation for growing businesses worldwide.')
@section('canonical', url('/services/odoo-erp'))

@push('head')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "Service",
  "@@id": "{{ url('/services/odoo-erp') }}#odoo-erp-service",
  "name": "Odoo ERP Customization & Development Services",
  "provider": {
    "@@type": "Organization",
    "name": "Tech Solution",
    "url": "{{ url('/') }}"
  },
  "serviceType": [
    "Odoo ERP Customization",
    "Custom Odoo Module Development",
    "Odoo Third-Party Integration",
    "Odoo Data Migration",
    "Odoo Implementation",
    "Odoo Support & Maintenance"
  ],
  "description": "Tech Solution delivers full-cycle Odoo ERP customization services including custom Python module development, workflow automation, third-party API integrations, legacy data migration, and ongoing support for businesses in manufacturing, retail, logistics, and services.",
  "areaServed": ["United States", "United Kingdom", "United Arab Emirates", "India", "Singapore"]
}
</script>
@endpush

@section('content')

{{-- 1. HERO SECTION --}}
<section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-12 border border-emerald-500/30 shadow-xl relative overflow-hidden">
    <div class="max-w-3xl">
      <span class="px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 text-xs font-bold uppercase tracking-wider border border-emerald-500/20 mb-4 inline-block">
        Odoo ERP Customization & Development
      </span>
      <nav class="breadcrumb-nav mb-4 text-slate-400 text-xs flex items-center gap-2" aria-label="Breadcrumb">
        <a href="{{ url('/') }}" class="hover:text-emerald-400 transition-colors">Home</a>
        <span class="sep">/</span>
        <span class="current text-emerald-400">Odoo ERP</span>
      </nav>
      <h1 class="font-heading text-3xl sm:text-4xl font-extrabold text-white tracking-tight mb-4">
        Odoo ERP Customization Services for <span class="text-gradient">Scalable Business Operations</span>
      </h1>
      <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-6">
        Businesses can deploy Odoo through out-of-the-box setup, certified partners, freelance consultants, or a specialized development agency. Tech Solution is the technical partner for companies that need custom module development, deep workflow automation, third-party integrations, clean data migrations, and a reliable team that owns delivery from scoping through go-live and beyond.
      </p>
      <a href="#calculator" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-emerald-400 to-teal-500 text-slate-950 font-bold text-xs uppercase tracking-wider shadow-lg hover:scale-105 transition-all">
        Estimate My Odoo Project
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M3 12h18" /></svg>
      </a>
    </div>
    <!-- Service Hero Image -->
    <div class="mt-8 rounded-xl overflow-hidden border border-emerald-500/20 shadow-xl shadow-emerald-500/10">
      <img
        src="{{ asset('images/services/odoo-erp.png') }}"
        alt="Odoo ERP dashboard — CRM, inventory management and financial reporting modules by Tech Solution"
        class="w-full h-auto object-cover"
        width="1200" height="600"
        loading="eager" decoding="async"
      />
    </div>
  </div>
</section>

{{-- 2. BUYER GUIDE --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-slate-800/80 text-emerald-300 text-[11px] font-bold uppercase tracking-wider border border-slate-700 mb-3 inline-block">
      Buyer Guide
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      Who Provides Odoo ERP Customization Services?
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed">
      The right Odoo partner depends on how much customization your business processes require, what systems you need to connect, and how critical data accuracy is during migration. Here is how the main options compare.
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Official Odoo Partner</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Certified partners offer structured deployments with standard modules. Best for companies needing a quick out-of-the-box rollout with limited customization requirements.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Freelance Odoo Developers</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Suitable for isolated module fixes, simple customizations, or small integrations where you manage project coordination, QA, and deployment yourself.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">In-House ERP Teams</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Large enterprises build internal Odoo teams for continuous development. Requires hiring, onboarding, and maintaining Python/Odoo expertise across multiple domains.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Specialized Dev Agencies</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Agencies handle custom modules, API integrations, multi-company setups, complex data migrations, and post-launch support under one accountable delivery team.
      </p>
    </div>
  </div>
</section>

{{-- 3. WHAT OUR SERVICE INCLUDES --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 text-[11px] font-bold uppercase tracking-wider border border-emerald-500/20 mb-3 inline-block">
      Tech Solution Delivery
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      What Our Odoo ERP Customization Service Includes
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed">
      We build, extend, and integrate Odoo ERP for businesses that need more than a default configuration — custom workflows, industry-specific logic, external system connections, and a platform that grows with your operations.
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">Custom Python Module Development</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Tailor-made Odoo apps built in Python and OWL that add new business objects, views, workflows, automated actions, and reporting specific to your industry and operations — not available in any standard module.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-teal-500/10 border border-teal-500/20 flex items-center justify-center text-teal-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">Third-Party API Integrations</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Connect Odoo with your existing tools: payment gateways (Stripe, PayPal), shipping carriers (FedEx, DHL), ecommerce platforms (Shopify, WooCommerce), CRM tools, accounting software, and custom REST APIs.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-sky-500/10 border border-sky-500/20 flex items-center justify-center text-sky-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2 1 3 3 3h10c2 0 3-1 3-3V7M4 7c0-2 1-3 3-3h10c2 0 3 1 3 3M4 7h16" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">Data Migration & Legacy System Transfer</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Secure extraction, cleansing, transformation, and import of data from legacy ERP systems, Excel spreadsheets, QuickBooks, SAP, or any SQL/NoSQL database into Odoo with full validation and zero data loss.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 014-4h4a4 4 0 014 4v2M9 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">Workflow Automation & Business Rules</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Automate approval flows, reordering rules, invoice generation, email triggers, SLA escalations, scheduled actions, and complex multi-step processes to eliminate manual work across departments.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">Custom Reporting & Dashboards</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Custom QWeb reports, Excel/PDF exports, pivot tables, KPI dashboards, and real-time business intelligence views tailored to your operational metrics, financial reporting, and management needs.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-rose-500/10 border border-rose-500/20 flex items-center justify-center text-rose-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">Odoo Support, Upgrade & Maintenance</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Post-go-live bug fixes, Odoo version upgrades, performance tuning, user training, module updates, server monitoring, and a predictable monthly support retainer so your ERP stays stable and current.
      </p>
    </div>
  </div>
</section>

{{-- 4. MODULES COVERED --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-slate-800/80 text-emerald-300 text-[11px] font-bold uppercase tracking-wider border border-slate-700 mb-3 inline-block">
      Module Coverage
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      Odoo Modules We Customize & Extend
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed">
      We work across the full Odoo application suite — customizing, connecting, and automating modules to match your exact business processes rather than forcing your workflows to fit a default setup.
    </p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-emerald-400 inline-block"></span>
        Sales & CRM
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">Custom pipeline stages, automated lead scoring, quotation templates, multi-pricelist management, commissions, and sales team performance dashboards.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-teal-400 inline-block"></span>
        Inventory & Warehouse
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">Multi-warehouse routing, automated reorder rules, lot & serial number tracking, barcode scanning, putaway strategies, and real-time stock valuation.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-sky-400 inline-block"></span>
        Accounting & Finance
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">Multi-currency, multi-company accounting, bank reconciliation automation, custom tax rules, analytic accounts, budget management, and localized financial reports.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-purple-400 inline-block"></span>
        Manufacturing & MRP
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">Bill of materials customization, work center scheduling, production order automation, quality control checkpoints, scrap management, and maintenance planning.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-amber-400 inline-block"></span>
        Purchase & Procurement
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">Automated purchase requisitions, vendor rating, RFQ workflows, multi-approval purchase orders, landed costs, and supplier portal integrations.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-rose-400 inline-block"></span>
        HR & Payroll
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">Custom payroll rules, leave management, shift scheduling, expense approval flows, employee self-service portals, and recruitment pipeline automation.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-indigo-400 inline-block"></span>
        eCommerce & Website
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">Custom Odoo website themes, product configurators, B2B portals, customer pricing rules, payment gateway connections, and shop SEO optimizations.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-cyan-400 inline-block"></span>
        Project & Field Service
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">Project task automation, timesheet management, customer billing milestones, field service scheduling, mobile technician apps, and SLA tracking dashboards.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-orange-400 inline-block"></span>
        Point of Sale & Retail
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">Custom POS interfaces, loyalty program logic, multi-store inventory sync, cash management, offline POS mode, and retail analytics dashboards.</p>
    </div>
  </div>
</section>

{{-- 5. CUSTOMIZATION PROCESS --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-slate-700/80 shadow-xl">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
      <div class="lg:col-span-4">
        <span class="px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-300 text-[11px] font-bold uppercase tracking-wider border border-emerald-500/20 mb-3 inline-block">
          Delivery Process
        </span>
        <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
          How We Deliver Odoo Customizations
        </h2>
        <p class="text-slate-400 text-sm leading-relaxed">
          Every Odoo project follows a structured process — from scoping your business logic through testing, deployment, and ongoing support — so nothing gets lost in translation between your operations team and our engineers.
        </p>
      </div>
      <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="glass-card rounded-2xl p-5">
          <span class="text-[10px] font-bold uppercase text-emerald-400">01</span>
          <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Business Process Analysis</h3>
          <p class="text-slate-400 text-xs leading-relaxed">We map your existing workflows, data structures, team roles, and integration points to define a precise technical scope before writing a single line of code.</p>
        </div>
        <div class="glass-card rounded-2xl p-5">
          <span class="text-[10px] font-bold uppercase text-teal-400">02</span>
          <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Module Design & Architecture</h3>
          <p class="text-slate-400 text-xs leading-relaxed">Custom module structures, data models, access rights, views, and API contracts are designed and reviewed with your team before development begins.</p>
        </div>
        <div class="glass-card rounded-2xl p-5">
          <span class="text-[10px] font-bold uppercase text-sky-400">03</span>
          <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Development, Testing & QA</h3>
          <p class="text-slate-400 text-xs leading-relaxed">Iterative module development in a staging environment with unit tests, user acceptance testing cycles, and regression checks before each deployment to production.</p>
        </div>
        <div class="glass-card rounded-2xl p-5">
          <span class="text-[10px] font-bold uppercase text-purple-400">04</span>
          <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Go-Live, Training & Support</h3>
          <p class="text-slate-400 text-xs leading-relaxed">Smooth production deployment, user training sessions, written documentation, and a post-launch support window to resolve any operational issues quickly.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- 6. BEST FIT SECTION --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-slate-700/80 shadow-xl">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
      <div class="lg:col-span-5">
        <span class="px-3 py-1 rounded-full bg-teal-500/10 text-teal-300 text-[11px] font-bold uppercase tracking-wider border border-teal-500/20 mb-3 inline-block">
          Best Fit
        </span>
        <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
          Choose Tech Solution When Standard Odoo Is Not Enough
        </h2>
        <p class="text-slate-400 text-sm leading-relaxed">
          Our strongest fit is an Odoo project where out-of-the-box modules need significant customization, external systems need reliable API connections, or complex business rules need to be encoded into automated workflows.
        </p>
      </div>
      <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-3">
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Manufacturing & Production</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Custom MRP workflows, multi-level BOMs, production scheduling, quality checks, and real-time shop-floor dashboards connected to inventory and accounting.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Retail & eCommerce Operators</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Shopify or WooCommerce sync, multi-store POS, loyalty programs, automated price rules, customer segmentation, and stock-level alerts across locations.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Logistics & Distribution</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Multi-warehouse routing, carrier API integrations, shipment tracking, driver dispatch apps, delivery proof collection, and automated billing on delivery.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Service Businesses & Agencies</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Project billing, timesheet approvals, retainer contracts, client portals, field service scheduling, and subscription invoicing connected to CRM pipelines.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- 7. FAQ SECTION --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-slate-800/80 text-emerald-300 text-[11px] font-bold uppercase tracking-wider border border-slate-700 mb-3 inline-block">
      Common Questions
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      Odoo ERP Customization — Frequently Asked Questions
    </h2>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">What is the difference between Odoo customization and Odoo implementation?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Implementation is installing and configuring standard Odoo modules for your business. Customization goes further — building new Python modules, modifying existing ones, adding custom views, automated actions, or connecting Odoo to external systems that are not part of the standard product.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Can you integrate Odoo with our existing software like Shopify, Stripe, or a custom API?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Yes. We build custom connectors for Shopify, WooCommerce, Stripe, PayPal, FedEx, DHL, custom REST APIs, and legacy databases. Integrations are built as proper Odoo modules so they behave like native features and survive version upgrades.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Will our data be safe during migration to Odoo?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">We follow a structured migration process: data extraction, cleansing, transformation scripts, a staging import for validation, reconciliation reports, and only then a production migration. A full data backup is taken before any production changes are made.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Which Odoo version do you work with?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">We work with Odoo Community and Enterprise across versions 16 and 17. For older versions, we can assess upgrade feasibility and provide a migration path to a supported version with minimal disruption to your daily operations.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">How long does a typical Odoo customization project take?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">A focused single-module customization takes 2–4 weeks. Multi-module implementations with migrations and integrations typically take 6–16 weeks depending on data complexity, the number of integrations, and the number of user acceptance testing rounds required.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Do you provide ongoing Odoo support after go-live?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Yes. We offer monthly support retainers covering bug fixes, user questions, module updates, performance monitoring, security patches, and minor feature additions so your Odoo system stays stable and current without needing to rebuild your vendor relationship from scratch.</p>
    </div>
  </div>
</section>

{{-- Related Services Section --}}
<section class="py-10 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="text-center mb-6">
    <p class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-1">Explore More</p>
    <h2 class="font-heading text-xl sm:text-2xl font-bold text-white">Services That Work Best Together</h2>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    <a href="{{ url('/services/web-development') }}" class="related-service-card group">
      <p class="rs-label text-sky-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
        Web Development →
      </p>
      <p class="rs-desc">Build a custom customer portal, ecommerce storefront, or reporting dashboard that connects directly to your Odoo data.</p>
    </a>
    <a href="{{ url('/services/mobile-apps') }}" class="related-service-card group">
      <p class="rs-label text-indigo-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
        Mobile Apps →
      </p>
      <p class="rs-desc">Give your field teams a Flutter app that syncs with Odoo in real time — inventory, tasks, and approvals on the go.</p>
    </a>
    <a href="{{ url('/services/cloud-computing') }}" class="related-service-card group">
      <p class="rs-label text-amber-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 001-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z" /></svg>
        Cloud &amp; DevOps →
      </p>
      <p class="rs-desc">Host and maintain your Odoo instance on managed cloud infrastructure with automated backups and monitoring.</p>
    </a>
  </div>
</section>

{{-- 8. ODOO CALCULATOR --}}
@include('components.calculators.odoo-calculator')

@endsection
