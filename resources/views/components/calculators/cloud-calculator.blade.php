{{-- CLOUD / IT CONSULTING SMART CALCULATOR — 4-Step Wizard --}}
<section id="calculator" class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10 scroll-mt-20">
  <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-amber-500/30 shadow-xl relative overflow-hidden">

    <div class="text-center max-w-xl mx-auto mb-8">
      <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-400 text-[11px] font-bold uppercase tracking-wider border border-amber-500/20 mb-2 inline-block">
        ☁️ Cloud & DevOps Estimator
      </span>
      <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight">
        Cloud Architecture & IT Consulting Calculator
      </h2>
      <p class="text-slate-400 text-xs sm:text-sm mt-1">Configure your cloud infrastructure needs for an accurate consulting estimate.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
      <div class="lg:col-span-7 space-y-5">

        {{-- Progress Bar --}}
        <div class="calc-progress-bar" id="cloud-progress-bar">
          <div class="calc-progress-step"><div class="calc-progress-dot active" data-step="1">1</div><div class="calc-progress-line"></div><span class="calc-progress-label">Provider</span></div>
          <div class="calc-progress-step"><div class="calc-progress-dot" data-step="2">2</div><div class="calc-progress-line"></div><span class="calc-progress-label">Project</span></div>
          <div class="calc-progress-step"><div class="calc-progress-dot" data-step="3">3</div><div class="calc-progress-line"></div><span class="calc-progress-label">Team Size</span></div>
          <div class="calc-progress-step"><div class="calc-progress-dot" data-step="4">4</div><div class="calc-progress-line"></div><span class="calc-progress-label">Add-ons</span></div>
        </div>

        {{-- STEP 1: Cloud Provider --}}
        <div id="cloud-step-1" class="calc-step">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-amber-500 text-white text-[10px] flex items-center justify-center font-bold">1</span>
            Target cloud ecosystem
          </h3>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="cloud-provider" value="aws" data-price="1200" class="cloud-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-amber-500/50 transition-all">
                <span class="option-badge popular">⭐ Popular</span>
                <span class="option-icon">☁️</span>
                <p class="font-bold text-xs text-white">AWS</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Amazon Web Services</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $1,200</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="cloud-provider" value="gcp" data-price="1200" class="cloud-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-amber-500/50 transition-all">
                <span class="option-icon">🔵</span>
                <p class="font-bold text-xs text-white">Google GCP</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Cloud Run & Kubernetes</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $1,200</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="cloud-provider" value="azure" data-price="1200" class="cloud-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-amber-500/50 transition-all">
                <span class="option-icon">🟦</span>
                <p class="font-bold text-xs text-white">Microsoft Azure</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Azure DevOps & AKS</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $1,200</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="cloud-provider" value="multi" data-price="2400" class="cloud-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-amber-500/50 transition-all">
                <span class="option-badge best-value">🌐 Multi</span>
                <span class="option-icon">⚡</span>
                <p class="font-bold text-xs text-white">Multi-Cloud</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Hybrid architecture</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $2,400</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 2: Project Type --}}
        <div id="cloud-step-2" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-orange-500 text-white text-[10px] flex items-center justify-center font-bold">2</span>
            Primary project type
          </h3>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="cloud-project" value="migration" data-price="2000" class="cloud-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-orange-500/50 transition-all">
                <span class="option-badge popular">⭐ Popular</span>
                <span class="option-icon">🚛</span>
                <p class="font-bold text-xs text-white">Cloud Migration</p>
                <p class="text-[10px] text-slate-400 mt-0.5">On-prem to cloud</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$2,000</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="cloud-project" value="infra" data-price="1600" class="cloud-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-orange-500/50 transition-all">
                <span class="option-icon">🏗️</span>
                <p class="font-bold text-xs text-white">New Infrastructure</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Greenfield cloud setup</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$1,600</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="cloud-project" value="devops" data-price="1800" class="cloud-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-orange-500/50 transition-all">
                <span class="option-icon">🔄</span>
                <p class="font-bold text-xs text-white">DevOps CI/CD</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Pipelines & automation</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$1,800</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="cloud-project" value="security" data-price="2200" class="cloud-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-orange-500/50 transition-all">
                <span class="option-icon">🔐</span>
                <p class="font-bold text-xs text-white">Security Audit</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Pen-test & hardening</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$2,200</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 3: Team & Duration --}}
        <div id="cloud-step-3" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-yellow-500 text-white text-[10px] flex items-center justify-center font-bold">3</span>
            Consulting team size & engagement duration
          </h3>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="cloud-team" value="solo" data-price="1500" class="cloud-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-yellow-500/50 transition-all">
                <span class="option-badge best-value">💰 Starter</span>
                <span class="option-icon">👤</span>
                <p class="font-bold text-xs text-white">1 Engineer · 1 Month</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Solo cloud architect</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$1,500</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="cloud-team" value="team" data-price="4500" class="cloud-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-yellow-500/50 transition-all">
                <span class="option-badge popular">⭐ Popular</span>
                <span class="option-icon">👥</span>
                <p class="font-bold text-xs text-white">2–3 Engineers · 3 Mo</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Core infra team</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$4,500</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="cloud-team" value="fullteam" data-price="12000" class="cloud-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-yellow-500/50 transition-all">
                <span class="option-icon">🏗️</span>
                <p class="font-bold text-xs text-white">Full Team · 6 Months</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Architect + DevOps + PM</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$12,000</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 4: Add-ons --}}
        <div id="cloud-step-4" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-amber-400 text-white text-[10px] flex items-center justify-center font-bold">4</span>
            Infrastructure add-ons <span class="text-slate-500 normal-case font-normal">(optional)</span>
          </h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="800" data-name="Monitoring & Alerting" class="cloud-calc-input cloud-addon sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-amber-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">📊 Monitoring & Alerting Setup</span>
                <span class="text-xs text-amber-400 font-bold ml-2 shrink-0">+$800</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="1000" data-name="DR & Backup Plan" class="cloud-calc-input cloud-addon sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-amber-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">🛡️ Disaster Recovery & Backup</span>
                <span class="text-xs text-amber-400 font-bold ml-2 shrink-0">+$1,000</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="1500" data-name="Compliance Audit" class="cloud-calc-input cloud-addon sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-amber-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">📋 Compliance Audit (SOC2/ISO)</span>
                <span class="text-xs text-amber-400 font-bold ml-2 shrink-0">+$1,500</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="600" data-name="Cost Optimization" class="cloud-calc-input cloud-addon sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-amber-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">💰 Cloud Cost Optimization</span>
                <span class="text-xs text-amber-400 font-bold ml-2 shrink-0">+$600</span>
              </div>
            </label>

          </div>
        </div>

      </div>

      {{-- Live Output Panel --}}
      <div class="lg:col-span-5 lg:sticky lg:top-28">
        <div class="calc-output-panel p-5 rounded-2xl border border-amber-500/25 shadow-xl">
          <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Cloud Consulting Estimate</p>
          <div class="flex items-baseline gap-1.5 mb-0.5">
            <span id="cloud-calc-display" class="font-heading text-4xl sm:text-5xl font-extrabold text-gradient">$0</span>
            <span class="text-xs text-slate-400">USD</span>
          </div>
          <p id="cloud-range-display" class="text-xs text-amber-400 font-medium mb-4">Select options to begin...</p>

          <div class="mb-4">
            <div class="flex justify-between items-center mb-1">
              <span class="text-[10px] text-slate-400 font-semibold uppercase tracking-wide">Estimate Accuracy</span>
              <span class="confidence-label text-[10px] font-bold text-amber-400">0% Accuracy</span>
            </div>
            <div class="confidence-track"><div class="confidence-bar-fill" style="background: linear-gradient(90deg,#f59e0b,#d97706)"></div></div>
          </div>

          <div class="mb-4">
            <p class="text-[10px] font-bold uppercase tracking-wide text-slate-500 mb-2">Cost Breakdown</p>
            <div class="price-breakdown-list"><p class="text-[11px] text-slate-500 italic">No selections yet...</p></div>
          </div>

          <div class="space-y-1.5 py-3 border-t border-b border-slate-800/50 text-xs mb-4">
            <div class="flex justify-between"><span class="text-slate-400">Cloud Platform:</span> <span id="cloud-summary-provider" class="font-bold text-white">—</span></div>
            <div class="flex justify-between"><span class="text-slate-400">Project Type:</span> <span id="cloud-summary-project" class="text-amber-400 font-medium">Pending</span></div>
            <div class="flex justify-between"><span class="text-slate-400">Team Scale:</span> <span id="cloud-summary-team" class="text-sky-400 font-medium">Pending</span></div>
            <div class="flex justify-between font-bold border-t border-slate-800/50 pt-1.5 mt-1">
              <span class="text-slate-300">Estimate Range:</span>
              <span id="cloud-grand-range" class="text-emerald-400">$0 – $0</span>
            </div>
          </div>

          <div class="mb-4">
            <span class="timeline-chip" style="color:#f59e0b;background:rgba(245,158,11,0.08);border-color:rgba(245,158,11,0.25)">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              Engagement kickoff: within 5 business days
            </span>
          </div>

          <button id="calc-lock-btn" type="button"
            class="w-full py-3.5 rounded-xl bg-gradient-to-r from-amber-400 to-orange-500 hover:from-amber-300 hover:to-orange-400 text-slate-950 font-bold text-xs uppercase tracking-wider shadow-md transition-all hover:shadow-amber-500/30 hover:shadow-lg hover:-translate-y-0.5">
            🔒 Lock in Cloud Estimate
          </button>
          <p class="text-center text-[10px] text-slate-500 mt-2">Free architecture review · No commitment</p>
        </div>
      </div>

    </div>
  </div>
</section>
