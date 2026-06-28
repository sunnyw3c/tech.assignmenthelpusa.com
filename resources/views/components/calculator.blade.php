<!-- DYNAMIC PRICING CALCULATOR (Laravel Blade Component - Compact & SEO Structured) -->
<section id="calculator" class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10 scroll-mt-20">
  <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-slate-700/60 shadow-xl relative overflow-hidden">
    
    <div class="text-center max-w-xl mx-auto mb-8">
      <span class="px-3 py-1 rounded-full bg-sky-500/10 text-sky-400 text-[11px] font-bold uppercase tracking-wider border border-sky-500/20 mb-2 inline-block">
        Frictionless Estimator
      </span>
      <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight">
        Dynamic Project Cost Calculator
      </h2>
      <p class="text-slate-400 text-xs sm:text-sm mt-1">
        Select scope parameters below for an instant real-time estimate.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
      
      <!-- Controls Panel (Left 7 cols) -->
      <div class="lg:col-span-7 space-y-6">
        
        <!-- Step 1: Select Services -->
        <div>
          <h3 class="text-xs font-semibold text-slate-200 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-sky-500 text-white text-[10px] flex items-center justify-center font-bold">1</span>
            <span>Select Required Services</span>
          </h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
            
            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" value="web" data-name="Custom Website" class="calc-service-checkbox sr-only" checked />
              <div class="p-3 rounded-xl border border-slate-800 bg-slate-900/60 hover:border-slate-700 transition-all flex items-center gap-2.5">
                <div class="w-3.5 h-3.5 rounded border border-slate-600 flex items-center justify-center text-sky-400 text-xs check-icon">✓</div>
                <span class="text-xs font-medium text-slate-200">Custom Web (Laravel)</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" value="app" data-name="Mobile Application" class="calc-service-checkbox sr-only" />
              <div class="p-3 rounded-xl border border-slate-800 bg-slate-900/60 hover:border-slate-700 transition-all flex items-center gap-2.5">
                <div class="w-3.5 h-3.5 rounded border border-slate-600 flex items-center justify-center text-sky-400 text-xs check-icon">✓</div>
                <span class="text-xs font-medium text-slate-200">Mobile App (iOS/Android)</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" value="seo" data-name="SEO Optimization" class="calc-service-checkbox sr-only" />
              <div class="p-3 rounded-xl border border-slate-800 bg-slate-900/60 hover:border-slate-700 transition-all flex items-center gap-2.5">
                <div class="w-3.5 h-3.5 rounded border border-slate-600 flex items-center justify-center text-sky-400 text-xs check-icon">✓</div>
                <span class="text-xs font-medium text-slate-200">SEO & Growth Suite</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" value="odoo" data-name="Odoo ERP Integration" class="calc-service-checkbox sr-only" />
              <div class="p-3 rounded-xl border border-slate-800 bg-slate-900/60 hover:border-slate-700 transition-all flex items-center gap-2.5">
                <div class="w-3.5 h-3.5 rounded border border-slate-600 flex items-center justify-center text-sky-400 text-xs check-icon">✓</div>
                <span class="text-xs font-medium text-slate-200">Odoo ERP Modules</span>
              </div>
            </label>

          </div>
        </div>

        <!-- Step 2: Project Scale -->
        <div>
          <h3 class="text-xs font-semibold text-slate-200 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-indigo-500 text-white text-[10px] flex items-center justify-center font-bold">2</span>
            <span>Project Scale & Scope</span>
          </h3>
          <div class="grid grid-cols-3 gap-2.5">
            <label class="cursor-pointer">
              <input type="radio" name="calc-scale" value="small" class="sr-only" checked />
              <div class="calc-radio-card p-3 text-center rounded-xl border border-slate-800 bg-slate-900/60 transition-all">
                <p class="font-bold text-xs text-white">Startup / MVP</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Essential features</p>
              </div>
            </label>

            <label class="cursor-pointer">
              <input type="radio" name="calc-scale" value="medium" class="sr-only" />
              <div class="calc-radio-card p-3 text-center rounded-xl border border-slate-800 bg-slate-900/60 transition-all">
                <p class="font-bold text-xs text-white">Growth Business</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Advanced integrations</p>
              </div>
            </label>

            <label class="cursor-pointer">
              <input type="radio" name="calc-scale" value="enterprise" class="sr-only" />
              <div class="calc-radio-card p-3 text-center rounded-xl border border-slate-800 bg-slate-900/60 transition-all">
                <p class="font-bold text-xs text-white">Enterprise Global</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Custom SLA & cloud</p>
              </div>
            </label>
          </div>
        </div>

        <!-- Step 3: Urgency -->
        <div>
          <h3 class="text-xs font-semibold text-slate-200 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-amber-500 text-white text-[10px] flex items-center justify-center font-bold">3</span>
            <span>Delivery Urgency</span>
          </h3>
          <div class="grid grid-cols-3 gap-2.5">
            <label class="cursor-pointer">
              <input type="radio" name="calc-urgency" value="standard" class="sr-only" checked />
              <div class="calc-radio-card p-3 text-center rounded-xl border border-slate-800 bg-slate-900/60 transition-all">
                <p class="font-bold text-xs text-white">Standard</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Standard timeline</p>
              </div>
            </label>

            <label class="cursor-pointer">
              <input type="radio" name="calc-urgency" value="accelerated" class="sr-only" />
              <div class="calc-radio-card p-3 text-center rounded-xl border border-slate-800 bg-slate-900/60 transition-all">
                <p class="font-bold text-xs text-white">Accelerated</p>
                <p class="text-[10px] text-slate-400 mt-0.5">+30% Fast-track</p>
              </div>
            </label>

            <label class="cursor-pointer">
              <input type="radio" name="calc-urgency" value="rush" class="sr-only" />
              <div class="calc-radio-card p-3 text-center rounded-xl border border-slate-800 bg-slate-900/60 transition-all">
                <p class="font-bold text-xs text-white">Rush Priority</p>
                <p class="text-[10px] text-slate-400 mt-0.5">+60% Dedicated</p>
              </div>
            </label>
          </div>
        </div>

      </div>

      <!-- Output Panel (Right 5 cols) -->
      <div class="lg:col-span-5 lg:sticky lg:top-28">
        <div class="p-6 rounded-2xl bg-gradient-to-br from-slate-900 via-slate-900 to-slate-950 border border-sky-500/40 shadow-xl text-center">
          <p class="text-xs font-semibold text-slate-400 uppercase mb-1">Estimated Total Cost</p>
          
          <div class="flex items-baseline justify-center gap-1.5 mb-1">
            <span id="calc-price-display" class="font-heading text-4xl sm:text-5xl font-extrabold text-white text-gradient">
              $1,500
            </span>
            <span class="text-xs text-slate-400 font-medium">USD</span>
          </div>

          <p id="calc-range-display" class="text-xs text-sky-400 font-medium mb-5">
            Starting range: $1,350 - $1,725
          </p>

          <button id="calc-lock-btn" type="button" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-sky-400 to-indigo-500 hover:from-sky-300 hover:to-indigo-400 text-slate-950 font-bold text-xs uppercase tracking-wider shadow-md transition-all">
            Lock in Estimate
          </button>
        </div>
      </div>

    </div>
  </div>
</section>
