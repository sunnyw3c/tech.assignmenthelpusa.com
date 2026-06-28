{{-- SEO CAMPAIGN SMART CALCULATOR — 4-Step Wizard --}}
<section id="calculator" class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10 scroll-mt-20">
  <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-purple-500/30 shadow-xl relative overflow-hidden">

    <div class="text-center max-w-xl mx-auto mb-8">
      <span class="px-3 py-1 rounded-full bg-purple-500/10 text-purple-400 text-[11px] font-bold uppercase tracking-wider border border-purple-500/20 mb-2 inline-block">
        📈 SEO Campaign Estimator
      </span>
      <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight">
        SEO Campaign Price Calculator
      </h2>
      <p class="text-slate-400 text-xs sm:text-sm mt-1">4 questions for an accurate monthly SEO retainer. Answers refine your estimate in real time.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
      <div class="lg:col-span-7 space-y-5">

        {{-- Progress Bar --}}
        <div class="calc-progress-bar" id="seo-progress-bar">
          <div class="calc-progress-step"><div class="calc-progress-dot active" data-step="1">1</div><div class="calc-progress-line"></div><span class="calc-progress-label">Market</span></div>
          <div class="calc-progress-step"><div class="calc-progress-dot" data-step="2">2</div><div class="calc-progress-line"></div><span class="calc-progress-label">Site Status</span></div>
          <div class="calc-progress-step"><div class="calc-progress-dot" data-step="3">3</div><div class="calc-progress-line"></div><span class="calc-progress-label">Content Vol.</span></div>
          <div class="calc-progress-step"><div class="calc-progress-dot" data-step="4">4</div><div class="calc-progress-line"></div><span class="calc-progress-label">Add-ons</span></div>
        </div>

        {{-- STEP 1: Target Market --}}
        <div id="seo-step-1" class="calc-step">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-purple-500 text-white text-[10px] flex items-center justify-center font-bold">1</span>
            Target geographic market
          </h3>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="seo-market" value="local" data-price="500" class="seo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-purple-500/50 transition-all">
                <span class="option-badge best-value">💰 Affordable</span>
                <span class="option-icon">📍</span>
                <p class="font-bold text-xs text-white">Local City SEO</p>
                <p class="text-[10px] text-slate-400 mt-0.5">1 City / Metro Area</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $500/mo</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="seo-market" value="national" data-price="1200" class="seo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-purple-500/50 transition-all">
                <span class="option-badge popular">⭐ Popular</span>
                <span class="option-icon">🏳️</span>
                <p class="font-bold text-xs text-white">National Market</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Country-wide Ranking</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $1,200/mo</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="seo-market" value="global" data-price="2500" class="seo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-purple-500/50 transition-all">
                <span class="option-icon">🌍</span>
                <p class="font-bold text-xs text-white">Global Multi-Country</p>
                <p class="text-[10px] text-slate-400 mt-0.5">International Reach</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $2,500/mo</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 2: Site Status --}}
        <div id="seo-step-2" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-indigo-500 text-white text-[10px] flex items-center justify-center font-bold">2</span>
            Current website status
          </h3>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="seo-status" value="new" data-price="400" class="seo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-indigo-500/50 transition-all">
                <span class="option-icon">🆕</span>
                <p class="font-bold text-xs text-white">Brand New Site</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Needs setup & baseline</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$400</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="seo-status" value="existing" data-price="200" class="seo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-indigo-500/50 transition-all">
                <span class="option-badge popular">⭐ Common</span>
                <span class="option-icon">🌐</span>
                <p class="font-bold text-xs text-white">Existing Site</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Needs audit & boost</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$200</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="seo-status" value="penalty" data-price="800" class="seo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-indigo-500/50 transition-all">
                <span class="option-badge fast">⚠️ Complex</span>
                <span class="option-icon">🚨</span>
                <p class="font-bold text-xs text-white">Penalty Recovery</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Google manual action</p>
                <p class="text-[10px] text-amber-400 font-semibold mt-1.5">+$800</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="seo-status" value="dontknow" data-price="300" class="seo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-indigo-500/50 transition-all">
                <span class="option-icon">❓</span>
                <p class="font-bold text-xs text-sky-400">Not Sure</p>
                <p class="text-[10px] text-slate-400 mt-0.5">We'll audit it</p>
                <p class="text-[10px] text-sky-400 font-semibold mt-1.5">We'll check</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 3: Content Volume --}}
        <div id="seo-step-3" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-sky-500 text-white text-[10px] flex items-center justify-center font-bold">3</span>
            Monthly content production volume
          </h3>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="seo-content" value="light" data-price="300" class="seo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-sky-500/50 transition-all">
                <span class="option-badge best-value">💰 Starter</span>
                <span class="option-icon">📄</span>
                <p class="font-bold text-xs text-white">4 Articles/mo</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Keyword-targeted posts</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$300</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="seo-content" value="medium" data-price="700" class="seo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-sky-500/50 transition-all">
                <span class="option-badge popular">⭐ Popular</span>
                <span class="option-icon">📰</span>
                <p class="font-bold text-xs text-white">10 Articles/mo</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Authority building</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$700</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="seo-content" value="heavy" data-price="1500" class="seo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-sky-500/50 transition-all">
                <span class="option-icon">🚀</span>
                <p class="font-bold text-xs text-white">20+ Articles/mo</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Programmatic scale</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$1,500</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="seo-content" value="dontknow" data-price="500" class="seo-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-sky-500/50 transition-all">
                <span class="option-icon">❓</span>
                <p class="font-bold text-xs text-sky-400">Advise Me</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Best for my niche</p>
                <p class="text-[10px] text-sky-400 font-semibold mt-1.5">We'll match</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 4: Add-ons --}}
        <div id="seo-step-4" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-emerald-500 text-white text-[10px] flex items-center justify-center font-bold">4</span>
            Technical SEO add-ons <span class="text-slate-500 normal-case font-normal">(optional)</span>
          </h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="600" data-name="Core Web Vitals Audit" class="seo-calc-input seo-addon sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-purple-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">⚡ Core Web Vitals Audit</span>
                <span class="text-xs text-purple-400 font-bold ml-2 shrink-0">+$600</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="800" data-name="Programmatic SEO" class="seo-calc-input seo-addon sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-purple-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">🔁 Programmatic SEO Pages</span>
                <span class="text-xs text-purple-400 font-bold ml-2 shrink-0">+$800</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="500" data-name="Link Building" class="seo-calc-input seo-addon sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-purple-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">🔗 Authority Link Building</span>
                <span class="text-xs text-purple-400 font-bold ml-2 shrink-0">+$500</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="350" data-name="Schema Markup" class="seo-calc-input seo-addon sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-purple-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">🏷️ Schema & Rich Snippets</span>
                <span class="text-xs text-purple-400 font-bold ml-2 shrink-0">+$350</span>
              </div>
            </label>

          </div>
        </div>

      </div>

      {{-- Live Output Panel --}}
      <div class="lg:col-span-5 lg:sticky lg:top-28">
        <div class="calc-output-panel p-5 rounded-2xl border border-purple-500/25 shadow-xl">
          <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Monthly SEO Estimate</p>
          <div class="flex items-baseline gap-1.5 mb-0.5">
            <span id="seo-calc-display" class="font-heading text-4xl sm:text-5xl font-extrabold text-gradient">$0</span>
            <span class="text-xs text-slate-400">USD / mo</span>
          </div>
          <p id="seo-range-display" class="text-xs text-purple-400 font-medium mb-4">Select options to begin...</p>

          <div class="mb-4">
            <div class="flex justify-between items-center mb-1">
              <span class="text-[10px] text-slate-400 font-semibold uppercase tracking-wide">Estimate Accuracy</span>
              <span class="confidence-label text-[10px] font-bold text-purple-400">0% Accuracy</span>
            </div>
            <div class="confidence-track"><div class="confidence-bar-fill" style="background: linear-gradient(90deg,#a855f7,#7c3aed)"></div></div>
          </div>

          <div class="mb-4">
            <p class="text-[10px] font-bold uppercase tracking-wide text-slate-500 mb-2">Cost Breakdown</p>
            <div class="price-breakdown-list"><p class="text-[11px] text-slate-500 italic">No selections yet...</p></div>
          </div>

          <div class="space-y-1.5 py-3 border-t border-b border-slate-800/50 text-xs mb-4">
            <div class="flex justify-between"><span class="text-slate-400">Market Scope:</span> <span id="seo-summary-market" class="font-bold text-white">—</span></div>
            <div class="flex justify-between"><span class="text-slate-400">Site Status:</span> <span id="seo-summary-status" class="text-purple-400 font-medium">Pending</span></div>
            <div class="flex justify-between"><span class="text-slate-400">Content Vol.:</span> <span id="seo-summary-content" class="text-sky-400 font-medium">Pending</span></div>
            <div class="flex justify-between font-bold border-t border-slate-800/50 pt-1.5 mt-1">
              <span class="text-slate-300">Monthly Range:</span>
              <span id="seo-grand-range" class="text-emerald-400">$0 – $0</span>
            </div>
          </div>

          <div class="mb-4">
            <span class="timeline-chip" style="color:#a855f7;background:rgba(168,85,247,0.08);border-color:rgba(168,85,247,0.25)">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
              Results typically visible: 3–6 months
            </span>
          </div>

          <button id="calc-lock-btn" type="button"
            class="w-full py-3.5 rounded-xl bg-gradient-to-r from-purple-500 to-indigo-600 hover:from-purple-400 hover:to-indigo-500 text-white font-bold text-xs uppercase tracking-wider shadow-md transition-all hover:shadow-purple-500/30 hover:shadow-lg hover:-translate-y-0.5">
            🔒 Lock in SEO Estimate
          </button>
          <p class="text-center text-[10px] text-slate-500 mt-2">Free audit · Monthly retainer · Cancel anytime</p>
        </div>
      </div>

    </div>
  </div>
</section>
