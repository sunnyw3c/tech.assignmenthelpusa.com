{{-- MOBILE APP SMART CALCULATOR — 5-Step Wizard --}}
<section id="calculator" class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10 scroll-mt-20">
  <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-indigo-500/30 shadow-xl relative overflow-hidden">

    <div class="text-center max-w-xl mx-auto mb-8">
      <span class="px-3 py-1 rounded-full bg-indigo-500/10 text-indigo-400 text-[11px] font-bold uppercase tracking-wider border border-indigo-500/20 mb-2 inline-block">
        📱 Mobile App Estimator
      </span>
      <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight">
        Mobile App Price Calculator
      </h2>
      <p class="text-slate-400 text-xs sm:text-sm mt-1">5 targeted questions for an accurate mobile project estimate. Select your needs step by step.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
      <div class="lg:col-span-7 space-y-5">

        {{-- Progress Bar --}}
        <div class="calc-progress-bar" id="mobile-progress-bar">
          <div class="calc-progress-step"><div class="calc-progress-dot active" data-step="1">1</div><div class="calc-progress-line"></div><span class="calc-progress-label">App Type</span></div>
          <div class="calc-progress-step"><div class="calc-progress-dot" data-step="2">2</div><div class="calc-progress-line"></div><span class="calc-progress-label">Platform</span></div>
          <div class="calc-progress-step"><div class="calc-progress-dot" data-step="3">3</div><div class="calc-progress-line"></div><span class="calc-progress-label">Backend</span></div>
          <div class="calc-progress-step"><div class="calc-progress-dot" data-step="4">4</div><div class="calc-progress-line"></div><span class="calc-progress-label">UI Level</span></div>
          <div class="calc-progress-step"><div class="calc-progress-dot" data-step="5">5</div><div class="calc-progress-line"></div><span class="calc-progress-label">Timeline</span></div>
        </div>

        {{-- STEP 1: App Type --}}
        <div id="mobile-step-1" class="calc-step">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-indigo-500 text-white text-[10px] flex items-center justify-center font-bold">1</span>
            What type of mobile app are you building?
          </h3>
          <div class="grid grid-cols-2 sm:grid-cols-3 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-type" value="on-demand" data-price="2200" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-indigo-500/50 transition-all">
                <span class="option-badge popular">⭐ Popular</span>
                <span class="option-icon">🚗</span>
                <p class="font-bold text-xs text-white">On-Demand Service</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Uber/Delivery Style</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $2,200</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-type" value="social" data-price="1800" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-indigo-500/50 transition-all">
                <span class="option-icon">👥</span>
                <p class="font-bold text-xs text-white">Social & Marketplace</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Profiles, Feeds & Chat</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $1,800</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-type" value="enterprise" data-price="2600" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-indigo-500/50 transition-all">
                <span class="option-icon">🏗️</span>
                <p class="font-bold text-xs text-white">Enterprise Internal</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Operations & CRM</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $2,600</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-type" value="health" data-price="3200" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-indigo-500/50 transition-all">
                <span class="option-badge best-value">🔒 Regulated</span>
                <span class="option-icon">🏥</span>
                <p class="font-bold text-xs text-white">Health & Wellness</p>
                <p class="text-[10px] text-slate-400 mt-0.5">HIPAA Compliance</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $3,200</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-type" value="fintech" data-price="4000" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-indigo-500/50 transition-all">
                <span class="option-icon">💰</span>
                <p class="font-bold text-xs text-white">Fintech & Payments</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Banking, Wallet, Crypto</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">from $4,000</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-type" value="dontknow" data-price="2000" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-indigo-500/50 transition-all">
                <span class="option-icon">🤖</span>
                <p class="font-bold text-xs text-sky-400">I Don't Know</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Recommend best fit</p>
                <p class="text-[10px] text-sky-400 font-semibold mt-1.5">We'll advise</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 2: Platform --}}
        <div id="mobile-step-2" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-purple-500 text-white text-[10px] flex items-center justify-center font-bold">2</span>
            Target operating system & platform
          </h3>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-platform" value="ios" data-price="1800" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-purple-500/50 transition-all">
                <span class="option-icon">🍎</span>
                <p class="font-bold text-xs text-white">iOS Native</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Swift / Xcode</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$1,800</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-platform" value="android" data-price="1800" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-purple-500/50 transition-all">
                <span class="option-icon">🤖</span>
                <p class="font-bold text-xs text-white">Android Native</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Kotlin / Jetpack</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$1,800</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-platform" value="dual" data-price="2800" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-purple-500/50 transition-all">
                <span class="option-badge popular">⭐ Popular</span>
                <span class="option-icon">📱</span>
                <p class="font-bold text-xs text-white">iOS + Android</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Flutter Cross-Platform</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$2,800</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-platform" value="pwa" data-price="1200" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-purple-500/50 transition-all">
                <span class="option-badge best-value">💰 Budget</span>
                <span class="option-icon">🌐</span>
                <p class="font-bold text-xs text-white">Web PWA</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Progressive Web App</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$1,200</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 3: Backend & API --}}
        <div id="mobile-step-3" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-sky-500 text-white text-[10px] flex items-center justify-center font-bold">3</span>
            Backend API & server complexity
          </h3>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-backend" value="basic" data-price="800" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-sky-500/50 transition-all">
                <span class="option-badge best-value">💰 Simple</span>
                <span class="option-icon">⚙️</span>
                <p class="font-bold text-xs text-white">Basic REST API</p>
                <p class="text-[10px] text-slate-400 mt-0.5">CRUD + Auth</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$800</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-backend" value="realtime" data-price="1600" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-sky-500/50 transition-all">
                <span class="option-badge popular">⭐ Popular</span>
                <span class="option-icon">⚡</span>
                <p class="font-bold text-xs text-white">Realtime Sockets</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Chat, Live Feed</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$1,600</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-backend" value="ai" data-price="2800" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-sky-500/50 transition-all">
                <span class="option-icon">🧠</span>
                <p class="font-bold text-xs text-white">AI Integrated</p>
                <p class="text-[10px] text-slate-400 mt-0.5">ML / GPT Features</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$2,800</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-backend" value="dontknow" data-price="1000" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-sky-500/50 transition-all">
                <span class="option-icon">❓</span>
                <p class="font-bold text-xs text-sky-400">Not Sure</p>
                <p class="text-[10px] text-slate-400 mt-0.5">We'll recommend</p>
                <p class="text-[10px] text-sky-400 font-semibold mt-1.5">We'll advise</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 4: UI Complexity --}}
        <div id="mobile-step-4" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-amber-500 text-white text-[10px] flex items-center justify-center font-bold">4</span>
            UI design & visual complexity
          </h3>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-ui" value="simple" data-price="0" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-amber-500/50 transition-all">
                <span class="option-badge best-value">💰 Budget</span>
                <span class="option-icon">🎨</span>
                <p class="font-bold text-xs text-white">Simple Screens</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Material Design</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$0</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-ui" value="polished" data-price="600" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-amber-500/50 transition-all">
                <span class="option-badge popular">⭐ Popular</span>
                <span class="option-icon">✨</span>
                <p class="font-bold text-xs text-white">Polished UI</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Custom animations</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$600</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-ui" value="luxury" data-price="1400" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-amber-500/50 transition-all">
                <span class="option-icon">💎</span>
                <p class="font-bold text-xs text-white">Luxury Premium</p>
                <p class="text-[10px] text-slate-400 mt-0.5">3D, Lottie, Motion</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$1,400</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-ui" value="dontknow" data-price="500" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-amber-500/50 transition-all">
                <span class="option-icon">❓</span>
                <p class="font-bold text-xs text-sky-400">Not Sure</p>
                <p class="text-[10px] text-slate-400 mt-0.5">Match my budget</p>
                <p class="text-[10px] text-sky-400 font-semibold mt-1.5">We'll advise</p>
              </div>
            </label>

          </div>
        </div>

        {{-- STEP 5: Timeline --}}
        <div id="mobile-step-5" class="calc-step hidden">
          <h3 class="text-xs font-semibold text-slate-300 uppercase tracking-wider mb-3 flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-emerald-500 text-white text-[10px] flex items-center justify-center font-bold">5</span>
            Delivery timeline & urgency
          </h3>
          <div class="grid grid-cols-3 gap-2.5">

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-urgency" value="standard" data-mult="1.0" data-timeline="6-8 weeks" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/50 transition-all">
                <span class="option-badge best-value">💰 Standard</span>
                <span class="option-icon">🐢</span>
                <p class="font-bold text-xs text-white">Standard Pace</p>
                <p class="text-[10px] text-slate-400 mt-0.5">6–8 weeks delivery</p>
                <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">×1.0 rate</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-urgency" value="accelerated" data-mult="1.25" data-timeline="3-4 weeks" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/50 transition-all">
                <span class="option-badge popular">⭐ Fast</span>
                <span class="option-icon">🚀</span>
                <p class="font-bold text-xs text-white">Accelerated</p>
                <p class="text-[10px] text-slate-400 mt-0.5">3–4 weeks priority</p>
                <p class="text-[10px] text-amber-400 font-semibold mt-1.5">+25% rate</p>
              </div>
            </label>

            <label class="cursor-pointer calc-option-label relative">
              <input type="radio" name="mobile-urgency" value="rush" data-mult="1.5" data-timeline="2 weeks" class="mobile-calc-input sr-only" />
              <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-emerald-500/50 transition-all">
                <span class="option-badge fast">⚡ Rush</span>
                <span class="option-icon">⚡</span>
                <p class="font-bold text-xs text-white">Priority Rush</p>
                <p class="text-[10px] text-slate-400 mt-0.5">2 weeks dedicated</p>
                <p class="text-[10px] text-red-400 font-semibold mt-1.5">+50% rate</p>
              </div>
            </label>

          </div>
        </div>

      </div>

      {{-- Live Output Panel --}}
      <div class="lg:col-span-5 lg:sticky lg:top-28">
        <div class="calc-output-panel p-5 rounded-2xl border border-indigo-500/25 shadow-xl">
          <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Live App Estimate</p>
          <div class="flex items-baseline gap-1.5 mb-0.5">
            <span id="mobile-calc-display" class="font-heading text-4xl sm:text-5xl font-extrabold text-gradient">$0</span>
            <span class="text-xs text-slate-400">USD</span>
          </div>
          <p id="mobile-range-display" class="text-xs text-indigo-400 font-medium mb-4">Select options to begin...</p>

          <div class="mb-4">
            <div class="flex justify-between items-center mb-1">
              <span class="text-[10px] text-slate-400 font-semibold uppercase tracking-wide">Estimate Accuracy</span>
              <span class="confidence-label text-[10px] font-bold text-indigo-400">0% Accuracy</span>
            </div>
            <div class="confidence-track"><div class="confidence-bar-fill" style="background: linear-gradient(90deg,#818cf8,#a78bfa)"></div></div>
          </div>

          <div class="mb-4">
            <p class="text-[10px] font-bold uppercase tracking-wide text-slate-500 mb-2">Cost Breakdown</p>
            <div class="price-breakdown-list"><p class="text-[11px] text-slate-500 italic">No selections yet...</p></div>
          </div>

          <div class="space-y-1.5 py-3 border-t border-b border-slate-800/50 text-xs mb-4">
            <div class="flex justify-between"><span class="text-slate-400">App Type:</span> <span id="mobile-summary-type" class="font-bold text-white">—</span></div>
            <div class="flex justify-between"><span class="text-slate-400">Platform:</span> <span id="mobile-summary-platform" class="text-indigo-400 font-medium">Pending</span></div>
            <div class="flex justify-between"><span class="text-slate-400">Backend:</span> <span id="mobile-summary-backend" class="text-sky-400 font-medium">Pending</span></div>
            <div class="flex justify-between"><span class="text-slate-400">UI Level:</span> <span id="mobile-summary-ui" class="text-purple-400 font-medium">Pending</span></div>
            <div class="flex justify-between"><span class="text-slate-400">Timeline:</span> <span id="mobile-summary-urgency" class="text-amber-400 font-medium">Pending</span></div>
            <div class="flex justify-between font-bold border-t border-slate-800/50 pt-1.5 mt-1">
              <span class="text-slate-300">Estimate Range:</span>
              <span id="mobile-grand-range" class="text-emerald-400">$0 – $0</span>
            </div>
          </div>

          <div class="mb-4">
            <span class="timeline-chip" id="mobile-timeline-chip">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              Estimated delivery: Select options
            </span>
          </div>

          <button id="calc-lock-btn" type="button"
            class="w-full py-3.5 rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-400 hover:to-purple-500 text-white font-bold text-xs uppercase tracking-wider shadow-md transition-all hover:shadow-indigo-500/30 hover:shadow-lg hover:-translate-y-0.5">
            🔒 Lock in App Estimate
          </button>
          <p class="text-center text-[10px] text-slate-500 mt-2">Free consultation · No commitment required</p>
        </div>
      </div>

    </div>
  </div>
</section>
