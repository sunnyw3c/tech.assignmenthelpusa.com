{{-- WEB DEVELOPMENT SMART CALCULATOR — 6-Step Wizard with Live Breakdown --}}
<section id="calculator" class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10 scroll-mt-20">
  <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-sky-500/30 shadow-xl relative overflow-hidden">

    <div class="text-center max-w-xl mx-auto mb-8">
      <span class="px-3 py-1 rounded-full bg-sky-500/10 text-sky-400 text-[11px] font-bold uppercase tracking-wider border border-sky-500/20 mb-2 inline-block">
        ⚡ Smart Context-Aware Estimator
      </span>
      <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight">
        Web Project Price Calculator
      </h2>
      <p class="text-slate-400 text-xs sm:text-sm mt-1">Answer step-by-step for an accurate, real-time estimate. Every answer refines your price.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

      {{-- Questions Column --}}
      <div class="lg:col-span-7 space-y-5">

        {{-- Progress Bar --}}
        <div class="calc-progress-bar" id="web-progress-bar">
          <div class="calc-progress-step">
            <div class="calc-progress-dot active" data-step="1">1</div>
            <div class="calc-progress-line"></div>
            <span class="calc-progress-label">Type</span>
          </div>
          <div class="calc-progress-step">
            <div class="calc-progress-dot" data-step="2">2</div>
            <div class="calc-progress-line"></div>
            <span class="calc-progress-label">Stack</span>
          </div>
          <div class="calc-progress-step">
            <div class="calc-progress-dot" data-step="3">3</div>
            <div class="calc-progress-line"></div>
            <span class="calc-progress-label">Design</span>
          </div>
          <div class="calc-progress-step">
            <div class="calc-progress-dot" data-step="4">4</div>
            <div class="calc-progress-line"></div>
            <span class="calc-progress-label">Content</span>
          </div>
          <div class="calc-progress-step">
            <div class="calc-progress-dot" data-step="5">5</div>
            <div class="calc-progress-line"></div>
            <span class="calc-progress-label">Timeline</span>
          </div>
          <div class="calc-progress-step">
            <div class="calc-progress-dot" data-step="6">6</div>
            <div class="calc-progress-line"></div>
            <span class="calc-progress-label">Add-ons</span>
          </div>
        </div>

        {{-- STEP 1: Project Type --}}
        <div id="step-1" class="calc-step">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-sky-500 text-white text-[10px] flex items-center justify-center font-bold">1</span>
            What type of website are you building?
          </h3>
          <div class="grid grid-cols-2 sm:grid-cols-3 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-type" value="blog" data-price="300" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-sky-500/50 transition-all">
                <span class="option-icon">📝</span>
                <p class="font-bold text-xs text-white">Blog & Publication</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Writers & Content Creators</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $300</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-type" value="personal" data-price="400" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-sky-500/50 transition-all">
                <span class="option-icon">👤</span>
                <p class="font-bold text-xs text-white">Personal Portfolio</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Lawyers, Doctors, Students</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $400</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-type" value="business" data-price="800" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-sky-500/50 transition-all">
                <span class="option-badge popular">⭐ Popular</span>
                <span class="option-icon">🏢</span>
                <p class="font-bold text-xs text-white">Business Corporate</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Companies & Agencies</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $800</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-type" value="ecommerce" data-price="1800" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-sky-500/50 transition-all">
                <span class="option-icon">🛒</span>
                <p class="font-bold text-xs text-white">E-Commerce Store</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Products, Cart & Payments</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $1,800</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-type" value="saas" data-price="2800" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-sky-500/50 transition-all">
                <span class="option-badge best-value">🔥 Enterprise</span>
                <span class="option-icon">🚀</span>
                <p class="font-bold text-xs text-white">SaaS Platform</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Software as a Service</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $2,800</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-type" value="dontknow" data-price="500" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-sky-500/50 transition-all">
                <span class="option-icon">🤖</span>
                <p class="font-bold text-xs text-sky-400">I Don't Know</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Recommend best fit</p>
                <p class="text-[10px] text-sky-400 font-semibold mt-1.5">We'll advise</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 2: Tech Stack (Dynamic inject) --}}
        <div id="step-2" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-indigo-500 text-white text-[10px] flex items-center justify-center font-bold">2</span>
            <span id="step-2-title">Recommended Technology Engine</span>
          </h3>
          <div id="step-2-options-container" class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">
            {{-- Injected by JS --}}
          </div>
        </div>

        {{-- STEP 3: Design Complexity --}}
        <div id="step-3" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-purple-500 text-white text-[10px] flex items-center justify-center font-bold">3</span>
            Design complexity & visual level
          </h3>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-design" value="simple" data-price="0" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-purple-500/50 transition-all">
                <span class="option-badge best-value">💰 Budget</span>
                <span class="option-icon">🎨</span>
                <p class="font-bold text-xs text-white">Simple & Clean</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Minimal, Fast Load</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$0</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-design" value="premium" data-price="400" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-purple-500/50 transition-all">
                <span class="option-badge popular">⭐ Popular</span>
                <span class="option-icon">✨</span>
                <p class="font-bold text-xs text-white">Modern Premium</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Animations & Micro-UI</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$400</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-design" value="luxury" data-price="900" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-purple-500/50 transition-all">
                <span class="option-icon">💎</span>
                <p class="font-bold text-xs text-white">Luxury Custom</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Full Brand + Motion</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$900</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-design" value="dontknow" data-price="300" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-purple-500/50 transition-all">
                <span class="option-icon">🤖</span>
                <p class="font-bold text-xs text-sky-400">Recommend</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Best for my budget</p>
                <p class="text-[10px] text-sky-400 font-semibold mt-1.5">We'll match</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 4: Content & Media --}}
        <div id="step-4" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-amber-500 text-white text-[10px] flex items-center justify-center font-bold">4</span>
            Who provides website content & media?
          </h3>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-content" value="user" data-price="0" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-amber-500/50 transition-all">
                <span class="option-badge best-value">💰 Save</span>
                <span class="option-icon">📁</span>
                <p class="font-bold text-xs text-white">I Provide All</p>
                <p class="text-[10px] text-slate-400 mt-0.5">My text, images & logos</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$0</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-content" value="agency" data-price="350" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-amber-500/50 transition-all">
                <span class="option-badge popular">⭐ Popular</span>
                <span class="option-icon">✍️</span>
                <p class="font-bold text-xs text-white">Agency Provides</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Copywriting & Stock Photos</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$350</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-content" value="dontknow" data-price="0" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-amber-500/50 transition-all">
                <span class="option-icon">❓</span>
                <p class="font-bold text-xs text-sky-400">Not Sure Yet</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Decide during kickoff</p>
                <p class="text-[10px] text-sky-400 font-semibold mt-1.5">TBD</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 5: Delivery Timeline --}}
        <div id="step-5" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-emerald-500 text-white text-[10px] flex items-center justify-center font-bold">5</span>
            Delivery timeline & urgency
          </h3>
          <div class="grid grid-cols-3 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-urgency" value="standard" data-mult="1.0" data-timeline="3-4 weeks" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/50 transition-all">
                <span class="option-badge best-value">💰 Standard</span>
                <span class="option-icon">🐢</span>
                <p class="font-bold text-xs text-white">Standard Pace</p>
                <p class="text-[10px] text-slate-400 mt-0.5">3–4 weeks delivery</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">×1.0 rate</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-urgency" value="accelerated" data-mult="1.25" data-timeline="2 weeks" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/50 transition-all">
                <span class="option-badge popular">⭐ Fast</span>
                <span class="option-icon">🚀</span>
                <p class="font-bold text-xs text-white">Accelerated</p>
                <p class="text-[10px] text-slate-400 mt-0.5">2 weeks priority</p>
                <p class="text-[10px] text-amber-400 font-semibold mt-1.5">+25% rate</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="web-urgency" value="rush" data-mult="1.5" data-timeline="1 week" class="web-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/50 transition-all">
                <span class="option-badge fast">⚡ Rush</span>
                <span class="option-icon">⚡</span>
                <p class="font-bold text-xs text-white">Priority Rush</p>
                <p class="text-[10px] text-slate-400 mt-0.5">1 week dedicated team</p>
                <p class="text-[10px] text-red-400 font-semibold mt-1.5">+50% rate</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 6: Add-on Modules --}}
        <div id="step-6" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-rose-500 text-white text-[10px] flex items-center justify-center font-bold">6</span>
            Functional add-on modules <span class="text-slate-500 normal-case font-normal">(optional)</span>
          </h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="300" data-name="Newsletter System" class="web-calc-input web-addon sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-rose-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">📧 Newsletter & Email System</span>
                <span class="text-xs text-sky-400 font-bold ml-2 shrink-0">+$300</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="400" data-name="Booking System" class="web-calc-input web-addon sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-rose-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">📅 Appointment Booking</span>
                <span class="text-xs text-sky-400 font-bold ml-2 shrink-0">+$400</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="500" data-name="Multi-language" class="web-calc-input web-addon sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-rose-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">🌍 Multi-Language (i18n)</span>
                <span class="text-xs text-sky-400 font-bold ml-2 shrink-0">+$500</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="600" data-name="Payment Gateway" class="web-calc-input web-addon sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-rose-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">💳 Payment Gateway</span>
                <span class="text-xs text-sky-400 font-bold ml-2 shrink-0">+$600</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="350" data-name="Live Chat" class="web-calc-input web-addon sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-rose-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">💬 Live Chat & Chatbot</span>
                <span class="text-xs text-sky-400 font-bold ml-2 shrink-0">+$350</span>
              </div>
            </label>

            <label class="calc-toggle-card cursor-pointer block">
              <input type="checkbox" data-price="800" data-name="AI Integration" class="web-calc-input web-addon sr-only" />
              <div class="p-3 rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-rose-500/40 transition-all flex items-center justify-between">
                <span class="text-xs font-medium text-slate-200 flex items-center gap-2">🤖 AI / GPT Integration</span>
                <span class="text-xs text-sky-400 font-bold ml-2 shrink-0">+$800</span>
              </div>
            </label>

          </div>
        </div>

      </div>

      {{-- Live Output Panel --}}
      <div class="lg:col-span-5 lg:sticky lg:top-28">
        <div class="calc-output-panel p-5 rounded-2xl border shadow-xl">

          <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Live Project Estimate</p>

          <div class="flex items-baseline gap-1.5 mb-0.5">
            <span id="web-calc-display" class="font-heading text-4xl sm:text-5xl font-extrabold text-gradient">$0</span>
            <span class="text-xs text-slate-400">USD</span>
          </div>
          <p id="web-range-display" class="text-xs text-sky-400 font-medium mb-4">Select options above to begin...</p>

          {{-- Confidence Meter --}}
          <div class="mb-4">
            <div class="flex justify-between items-center mb-1">
              <span class="text-[10px] text-slate-400 font-semibold uppercase tracking-wide">Estimate Accuracy</span>
              <span class="confidence-label text-[10px] font-bold text-sky-400">0% Accuracy</span>
            </div>
            <div class="confidence-track">
              <div class="confidence-bar-fill"></div>
            </div>
          </div>

          {{-- Cost Breakdown --}}
          <div class="mb-4">
            <p class="text-[10px] font-bold uppercase tracking-wide text-slate-500 mb-2">Cost Breakdown</p>
            <div class="price-breakdown-list">
              <p class="text-[11px] text-slate-500 italic">No selections yet...</p>
            </div>
          </div>

          {{-- Summary Rows --}}
          <div class="space-y-1.5 py-3 border-t border-b border-slate-800/50 text-xs mb-4">
            <div class="flex justify-between"><span class="text-slate-400">Project Type:</span> <span id="web-summary-type" class="font-bold text-white">—</span></div>
            <div class="flex justify-between"><span class="text-slate-400">Tech Stack:</span> <span id="web-summary-tech" class="text-sky-400 font-medium">Pending</span></div>
            <div class="flex justify-between"><span class="text-slate-400">Design Level:</span> <span id="web-summary-design" class="text-indigo-400 font-medium">Pending</span></div>
            <div class="flex justify-between"><span class="text-slate-400">Content:</span> <span id="web-summary-content" class="text-purple-400 font-medium">Pending</span></div>
            <div class="flex justify-between"><span class="text-slate-400">Urgency:</span> <span id="web-summary-urgency" class="text-amber-400 font-medium">Pending</span></div>
            <div class="flex justify-between font-bold border-t border-slate-800/50 pt-1.5 mt-1">
              <span class="text-slate-300">Estimate Range:</span>
              <span id="web-grand-range" class="text-emerald-400">$0 – $0</span>
            </div>
          </div>

          {{-- Timeline Chip --}}
          <div class="mb-4">
            <span class="timeline-chip" id="web-timeline-chip">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              Estimated delivery: Select options
            </span>
          </div>

          {{-- CTA --}}
          <button id="calc-lock-btn" type="button"
            class="w-full py-3.5 rounded-xl bg-gradient-to-r from-sky-400 to-indigo-500 hover:from-sky-300 hover:to-indigo-400 text-slate-950 font-bold text-xs uppercase tracking-wider shadow-md transition-all hover:shadow-sky-500/30 hover:shadow-lg hover:-translate-y-0.5">
            🔒 Lock in Estimate & Get Proposal
          </button>
          <p class="text-center text-[10px] text-slate-500 mt-2">Free consultation · No commitment required</p>

        </div>
      </div>

    </div>
  </div>
</section>
