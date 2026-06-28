<!-- HEADER / NAVIGATION (Laravel Blade Component with Services Dropdown) -->
<header id="site-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 glass-panel border-b border-slate-800/60">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-3">
    
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="flex items-center gap-2 sm:gap-3 group min-w-0">
      <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-sky-400 to-indigo-600 flex items-center justify-center shadow-lg shadow-sky-500/20 group-hover:scale-105 transition-transform shrink-0">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
        </svg>
      </div>
      <span class="font-heading font-extrabold text-lg sm:text-xl tracking-tight nav-brand-text truncate">
        TECH<span class="text-gradient">SOLUTION</span>
      </span>
    </a>

    <!-- Desktop Navigation Links -->
    <nav class="hidden md:flex items-center gap-8 text-sm font-medium nav-link-color">
      <a href="{{ url('/') }}" class="nav-link hover:text-sky-400 transition-colors">Home</a>

      <!-- SERVICES DROPDOWN MENU -->
      <div class="relative group py-4">
        <button type="button" class="nav-link flex items-center gap-1.5 hover:text-sky-400 transition-colors focus:outline-none">
          <span>Services</span>
          <svg class="w-4 h-4 transition-transform group-hover:rotate-180 text-slate-400 group-hover:text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>

        <!-- Dropdown Menu Box -->
        <div class="absolute left-0 top-full w-72 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
          <div class="nav-dropdown p-3 rounded-2xl glass-panel border border-slate-700/80 shadow-2xl space-y-1">
            
            <a href="{{ url('/services/web-development') }}" class="flex items-center gap-3 p-2.5 rounded-xl nav-dropdown-item transition-colors group/item">
              <div class="w-8 h-8 rounded-lg bg-sky-500/10 text-sky-400 flex items-center justify-center group-hover/item:scale-110 transition-transform">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
              </div>
              <div>
                <p class="text-xs font-bold nav-dropdown-title group-hover/item:text-sky-400 transition-colors">Custom Web Dev</p>
                <p class="text-[10px] text-slate-400">Laravel, React, Inertia</p>
              </div>
            </a>

            <a href="{{ url('/services/mobile-apps') }}" class="flex items-center gap-3 p-2.5 rounded-xl nav-dropdown-item transition-colors group/item">
              <div class="w-8 h-8 rounded-lg bg-indigo-500/10 text-indigo-400 flex items-center justify-center group-hover/item:scale-110 transition-transform">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
              </div>
              <div>
                <p class="text-xs font-bold nav-dropdown-title group-hover/item:text-indigo-400 transition-colors">Mobile App Dev</p>
                <p class="text-[10px] text-slate-400">Flutter, iOS &amp; Android</p>
              </div>
            </a>

            <a href="{{ url('/services/seo-optimization') }}" class="flex items-center gap-3 p-2.5 rounded-xl nav-dropdown-item transition-colors group/item">
              <div class="w-8 h-8 rounded-lg bg-purple-500/10 text-purple-400 flex items-center justify-center group-hover/item:scale-110 transition-transform">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
              </div>
              <div>
                <p class="text-xs font-bold nav-dropdown-title group-hover/item:text-purple-400 transition-colors">SEO Optimization</p>
                <p class="text-[10px] text-slate-400">Technical &amp; Core Web Vitals</p>
              </div>
            </a>

            <a href="{{ url('/services/odoo-erp') }}" class="flex items-center gap-3 p-2.5 rounded-xl nav-dropdown-item transition-colors group/item">
              <div class="w-8 h-8 rounded-lg bg-emerald-500/10 text-emerald-400 flex items-center justify-center group-hover/item:scale-110 transition-transform">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
              </div>
              <div>
                <p class="text-xs font-bold nav-dropdown-title group-hover/item:text-emerald-400 transition-colors">Odoo ERP Modules</p>
                <p class="text-[10px] text-slate-400">Inventory, CRM &amp; Accounting</p>
              </div>
            </a>

            <a href="{{ url('/services/it-consulting') }}" class="flex items-center gap-3 p-2.5 rounded-xl nav-dropdown-item transition-colors group/item">
              <div class="w-8 h-8 rounded-lg bg-amber-500/10 text-amber-400 flex items-center justify-center group-hover/item:scale-110 transition-transform">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 001-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z" /></svg>
              </div>
              <div>
                <p class="text-xs font-bold nav-dropdown-title group-hover/item:text-amber-400 transition-colors">IT &amp; Cloud Consulting</p>
                <p class="text-[10px] text-slate-400">AWS, GCP &amp; DevOps CI/CD</p>
              </div>
            </a>

          </div>
        </div>
      </div>

      <a href="{{ url('/#calculator') }}" class="nav-link hover:text-sky-400 transition-colors flex items-center gap-1.5">
        <span>Calculator</span>
        <span class="bg-sky-500/10 text-sky-400 text-[10px] uppercase font-bold px-1.5 py-0.5 rounded-full border border-sky-500/20">Live</span>
      </a>
      <a href="{{ url('/#cases') }}" class="nav-link hover:text-sky-400 transition-colors">Portfolio</a>
      <a href="{{ url('/#global') }}" class="nav-link hover:text-sky-400 transition-colors">Global Reach</a>
      <a href="{{ url('/#testimonials') }}" class="nav-link hover:text-sky-400 transition-colors">Reviews</a>
    </nav>

    <!-- Right Actions: Theme Switcher + Main CTA -->
    <div class="hidden md:flex items-center gap-4">
      <button type="button" id="theme-toggle-desktop" class="theme-toggle-btn p-2.5 rounded-xl transition-all hover:scale-105" title="Toggle Dark/Light Mode" aria-label="Toggle Theme">
        <!-- Sun = dark mode (click to go light) -->
        <svg class="theme-icon-sun w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
        <!-- Moon = light mode (click to go dark) -->
        <svg class="theme-icon-moon w-5 h-5 text-slate-600 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
        </svg>
      </button>

      <a href="{{ url('/#calculator') }}" class="bg-gradient-to-r from-sky-500 to-indigo-600 hover:from-sky-400 hover:to-indigo-500 text-white font-medium text-sm px-5 py-2.5 rounded-xl shadow-lg shadow-sky-500/25 hover:shadow-sky-500/40 transition-all transform hover:-translate-y-0.5">
        Estimate Price
      </a>
    </div>

    <!-- Mobile Hamburger Button -->
    <div class="flex items-center gap-2 md:hidden shrink-0">
      <button type="button" id="theme-toggle-mobile" class="theme-toggle-btn p-2 rounded-lg transition-all shrink-0">
        <svg class="theme-icon-sun w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
        <svg class="theme-icon-moon w-5 h-5 text-slate-600 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" /></svg>
      </button>
      <button id="mobile-menu-btn" class="p-2 nav-link hover:text-white shrink-0" aria-label="Open Mobile Menu">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /></svg>
      </button>
    </div>

  </div>
</header>

<!-- MOBILE DRAWER MENU -->
<div id="mobile-menu-drawer" class="fixed inset-0 z-50 mobile-drawer backdrop-blur-2xl transform translate-x-full transition-transform duration-300 flex flex-col justify-between p-6 md:hidden">
  <div>
    <div class="flex items-center justify-between pb-6 border-b mobile-drawer-border">
      <span class="font-heading font-bold text-lg nav-brand-text">TECH<span class="text-gradient">SOLUTION</span></span>
      <button id="mobile-menu-close" class="p-2 nav-link hover:text-white">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
      </button>
    </div>
    <nav class="flex flex-col gap-4 mt-6 text-base font-medium">
      <a href="{{ url('/') }}" class="mobile-nav-link nav-link hover:text-sky-400">Home</a>
      <div class="py-2 border-y mobile-drawer-border space-y-2">
        <p class="text-xs uppercase font-bold text-sky-400 tracking-wider">All Services</p>
        <a href="{{ url('/services/web-development') }}" class="mobile-nav-link block text-sm nav-link hover:text-white pl-2">Custom Web Dev</a>
        <a href="{{ url('/services/mobile-apps') }}" class="mobile-nav-link block text-sm nav-link hover:text-white pl-2">Mobile App Dev</a>
        <a href="{{ url('/services/seo-optimization') }}" class="mobile-nav-link block text-sm nav-link hover:text-white pl-2">SEO Optimization</a>
        <a href="{{ url('/services/odoo-erp') }}" class="mobile-nav-link block text-sm nav-link hover:text-white pl-2">Odoo ERP Modules</a>
        <a href="{{ url('/services/it-consulting') }}" class="mobile-nav-link block text-sm nav-link hover:text-white pl-2">IT &amp; Cloud Consulting</a>
      </div>
      <a href="{{ url('/#calculator') }}" class="mobile-nav-link nav-link hover:text-sky-400">Price Calculator</a>
      <a href="{{ url('/#cases') }}" class="mobile-nav-link nav-link hover:text-sky-400">Portfolio &amp; Cases</a>
      <a href="{{ url('/#global') }}" class="mobile-nav-link nav-link hover:text-sky-400">Global Reach</a>
    </nav>
  </div>
  <div class="pt-6 border-t mobile-drawer-border">
    <a href="{{ url('/#calculator') }}" class="mobile-nav-link block text-center bg-sky-500 text-white font-medium py-3 rounded-xl shadow-lg">
      Calculate Project Cost
    </a>
  </div>
</div>
