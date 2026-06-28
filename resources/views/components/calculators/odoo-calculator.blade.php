{{-- ODOO ERP SMART CALCULATOR — 4-Step Wizard --}}
<section id="calculator" class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10 scroll-mt-20">
  <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-emerald-500/30 shadow-xl relative overflow-hidden">

    <div class="text-center max-w-xl mx-auto mb-8">
      <span class="px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 text-[11px] font-bold uppercase tracking-wider border border-emerald-500/20 mb-2 inline-block">
        🏭 Odoo ERP Estimator
      </span>
      <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight">
        Odoo ERP Implementation Calculator
      </h2>
      <p class="text-slate-400 text-xs sm:text-sm mt-1">Configure your ERP scope step-by-step for an accurate implementation estimate.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
      <div class="lg:col-span-7 space-y-5">

        {{-- Progress Bar --}}
        <div class="calc-progress-bar" id="odoo-progress-bar">
          <div class="calc-progress-step"><div class="calc-progress-dot active" data-step="1">1</div><div class="calc-progress-line"></div><span class="calc-progress-label">Biz Size</span></div>
          <div class="calc-progress-step"><div class="calc-progress-dot" data-step="2">2</div><div class="calc-progress-line"></div><span class="calc-progress-label">Modules</span></div>
          <div class="calc-progress-step"><div class="calc-progress-dot" data-step="3">3</div><div class="calc-progress-line"></div><span class="calc-progress-label">Integration</span></div>
          <div class="calc-progress-step"><div class="calc-progress-dot" data-step="4">4</div><div class="calc-progress-line"></div><span class="calc-progress-label">Support</span></div>
        </div>

        {{-- STEP 1: Business Size --}}
        <div id="odoo-step-1" class="calc-step">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-emerald-500 text-white text-[10px] flex items-center justify-center font-bold">1</span>
            Business size & team scale
          </h3>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="odoo-size" value="startup" data-price="1500" class="odoo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/50 transition-all">
                <span class="option-badge best-value">💰 Starter</span>
                <span class="option-icon">🌱</span>
                <p class="font-bold text-xs text-white">Startup (1–10)</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Small growing team</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $1,500</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="odoo-size" value="sme" data-price="3500" class="odoo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/50 transition-all">
                <span class="option-badge popular">⭐ Common</span>
                <span class="option-icon">🏢</span>
                <p class="font-bold text-xs text-white">SME (11–100)</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Multiple departments</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $3,500</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="odoo-size" value="enterprise" data-price="8000" class="odoo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/50 transition-all">
                <span class="option-icon">🏗️</span>
                <p class="font-bold text-xs text-white">Enterprise (100+)</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Complex multi-entity</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $8,000</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 2: Module Selection (checkboxes) --}}
        <div id="odoo-step-2" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-teal-500 text-white text-[10px] flex items-center justify-center font-bold">2</span>
            Select Odoo modules needed <span class="text-slate-500 normal-case font-normal">(multi-select)</span>
          </h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="900" data-name="CRM & Sales" class="odoo-calc-input odoo-module sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">👥 CRM & Sales Pipeline</span>
                <span class="text-xs text-emerald-400 font-bold ml-2 shrink-0">+$900</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="1000" data-name="Accounting & Invoicing" class="odoo-calc-input odoo-module sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">📊 Accounting & Invoicing</span>
                <span class="text-xs text-emerald-400 font-bold ml-2 shrink-0">+$1,000</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="1400" data-name="Inventory & Warehouse" class="odoo-calc-input odoo-module sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">📦 Inventory & Warehouse</span>
                <span class="text-xs text-emerald-400 font-bold ml-2 shrink-0">+$1,400</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="800" data-name="HR & Payroll" class="odoo-calc-input odoo-module sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">👨‍💼 HR & Payroll</span>
                <span class="text-xs text-emerald-400 font-bold ml-2 shrink-0">+$800</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="1800" data-name="Manufacturing & MRP" class="odoo-calc-input odoo-module sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">🏭 Manufacturing & MRP</span>
                <span class="text-xs text-emerald-400 font-bold ml-2 shrink-0">+$1,800</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="1200" data-name="eCommerce Portal" class="odoo-calc-input odoo-module sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">🛒 eCommerce Portal</span>
                <span class="text-xs text-emerald-400 font-bold ml-2 shrink-0">+$1,200</span>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 3: Integration Complexity --}}
        <div id="odoo-step-3" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-cyan-500 text-white text-[10px] flex items-center justify-center font-bold">3</span>
            Integration & customization complexity
          </h3>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="odoo-integration" value="standalone" data-price="0" class="odoo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-cyan-500/50 transition-all">
                <span class="option-badge best-value">💰 Simple</span>
                <span class="option-icon">🔧</span>
                <p class="font-bold text-xs text-white">Standalone Odoo</p>
                <p class="text-[10px] text-slate-400 mt-0.5">No external integrations</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$0</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="odoo-integration" value="api" data-price="2000" class="odoo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-cyan-500/50 transition-all">
                <span class="option-badge popular">⭐ Popular</span>
                <span class="option-icon">🔌</span>
                <p class="font-bold text-xs text-white">API Integrations</p>
                <p class="text-[10px] text-slate-400 mt-0.5">3rd party APIs & webhooks</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$2,000</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="odoo-integration" value="custom" data-price="4500" class="odoo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-cyan-500/50 transition-all">
                <span class="option-icon">🏗️</span>
                <p class="font-bold text-xs text-white">Full Custom Workflow</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Python modules & full ERP</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$4,500</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 4: Support Plan --}}
        <div id="odoo-step-4" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-emerald-400 text-white text-[10px] flex items-center justify-center font-bold">4</span>
            Post-launch support & maintenance plan
          </h3>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="odoo-support" value="basic" data-price="500" class="odoo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/50 transition-all">
                <span class="option-badge best-value">💰 Starter</span>
                <span class="option-icon">🛡️</span>
                <p class="font-bold text-xs text-white">Basic (3 months)</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Bug fixes & guidance</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$500</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="odoo-support" value="standard" data-price="1500" class="odoo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/50 transition-all">
                <span class="option-badge popular">⭐ Popular</span>
                <span class="option-icon">🔰</span>
                <p class="font-bold text-xs text-white">Standard (12 months)</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Updates, SLA + priority</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$1,500</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="odoo-support" value="premium" data-price="3000" class="odoo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/50 transition-all">
                <span class="option-icon">👑</span>
                <p class="font-bold text-xs text-white">Premium Ongoing</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Dedicated team + 24/7</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$3,000</p>
              </div>
            </label>

          </div>
        </div>

      </div>

      {{-- Live Output Panel --}}
      <div class="lg:col-span-5 lg:sticky lg:top-28">
        <div class="calc-output-panel p-5 rounded-2xl border border-emerald-500/25 shadow-xl">
          <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Odoo ERP Total Estimate</p>
          <div class="flex items-baseline gap-1.5 mb-0.5">
            <span id="odoo-calc-display" class="font-heading text-4xl sm:text-5xl font-extrabold text-gradient">$0</span>
            <span class="text-xs text-slate-400">USD</span>
          </div>
          <p id="odoo-range-display" class="text-xs text-emerald-400 font-medium mb-4">Select business size to begin...</p>

          <div class="mb-4">
            <div class="flex justify-between items-center mb-1">
              <span class="text-[10px] text-slate-400 font-semibold uppercase tracking-wide">Estimate Accuracy</span>
              <span class="confidence-label text-[10px] font-bold text-emerald-400">0% Accuracy</span>
            </div>
            <div class="confidence-track"><div class="confidence-bar-fill" style="background: linear-gradient(90deg,#10b981,#059669)"></div></div>
          </div>

          <div class="mb-4">
            <p class="text-[10px] font-bold uppercase tracking-wide text-slate-500 mb-2">Cost Breakdown</p>
            <div class="price-breakdown-list"><p class="text-[11px] text-slate-500 italic">No selections yet...</p></div>
          </div>

          <div class="space-y-1.5 py-3 border-t border-b border-slate-800/50 text-xs mb-4">
            <div class="flex justify-between"><span class="text-slate-400">Business Size:</span> <span id="odoo-summary-size" class="font-bold text-white">—</span></div>
            <div class="flex justify-between"><span class="text-slate-400">Integration:</span> <span id="odoo-summary-integration" class="text-emerald-400 font-medium">Pending</span></div>
            <div class="flex justify-between"><span class="text-slate-400">Support Plan:</span> <span id="odoo-summary-support" class="text-teal-400 font-medium">Pending</span></div>
            <div class="flex justify-between font-bold border-t border-slate-800/50 pt-1.5 mt-1">
              <span class="text-slate-300">Estimate Range:</span>
              <span id="odoo-grand-range" class="text-emerald-400">$0 – $0</span>
            </div>
          </div>

          <div class="mb-4">
            <span class="timeline-chip" style="color:#10b981;background:rgba(16,185,129,0.08);border-color:rgba(16,185,129,0.25)">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              Implementation: 4–12 weeks depending on scope
            </span>
          </div>

          <button id="calc-lock-btn" type="button"
            class="w-full py-3.5 rounded-xl bg-gradient-to-r from-emerald-400 to-teal-500 hover:from-emerald-300 hover:to-teal-400 text-slate-950 font-bold text-xs uppercase tracking-wider shadow-md transition-all hover:shadow-emerald-500/30 hover:shadow-lg hover:-translate-y-0.5">
            🔒 Lock in Odoo Estimate
          </button>
          <p class="text-center text-[10px] text-slate-500 mt-2">Free discovery call · Certified Odoo partner</p>
        </div>
      </div>

    </div>
  </div>
</section>
