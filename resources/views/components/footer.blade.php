<!-- FOOTER (Laravel Blade Component - Light & Dark Mode Compatible) -->
<footer class="border-t pt-12 pb-8 relative z-10 text-sm footer-section">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
      
      <div class="space-y-3">
        <a href="{{ url('/') }}" class="font-heading font-extrabold text-xl nav-brand-text">
          TECH<span class="text-gradient">SOLUTION</span>
        </a>
        <p class="text-xs footer-muted leading-relaxed">
          Global digital agency crafting high-performance websites, mobile applications, technical SEO engines, and enterprise Odoo systems.
        </p>
      </div>

      <div>
        <h3 class="font-bold footer-heading text-xs uppercase tracking-wider mb-3">Core Services</h3>
        <ul class="space-y-2 text-xs footer-muted">
          <li><a href="{{ url('/services/web-development') }}" class="footer-link hover:text-sky-400 transition-colors">Laravel Web Development</a></li>
          <li><a href="{{ url('/services/mobile-apps') }}" class="footer-link hover:text-sky-400 transition-colors">iOS &amp; Android Mobile Apps</a></li>
          <li><a href="{{ url('/services/seo-optimization') }}" class="footer-link hover:text-sky-400 transition-colors">SEO &amp; Technical Optimization</a></li>
          <li><a href="{{ url('/services/odoo-erp') }}" class="footer-link hover:text-sky-400 transition-colors">Odoo ERP Modules</a></li>
        </ul>
      </div>

      <div>
        <h3 class="font-bold footer-heading text-xs uppercase tracking-wider mb-3">Company</h3>
        <ul class="space-y-2 text-xs footer-muted">
          <li><a href="{{ url('/#calculator') }}" class="footer-link hover:text-sky-400 transition-colors">Dynamic Cost Estimator</a></li>
          <li><a href="{{ url('/#cases') }}" class="footer-link hover:text-sky-400 transition-colors">Global Case Studies</a></li>
          <li><a href="{{ url('/#global') }}" class="footer-link hover:text-sky-400 transition-colors">Global Reach &amp; Hubs</a></li>
          <li><a href="{{ url('/#contact') }}" class="footer-link hover:text-sky-400 transition-colors">Lock in Estimate</a></li>
        </ul>
      </div>

      <div>
        <h3 class="font-bold footer-heading text-xs uppercase tracking-wider mb-3">Global Operations</h3>
        <p class="text-xs footer-muted mb-3">Operating 24/7 across New York, London, Singapore, and Dubai.</p>
        <span class="inline-block px-3 py-1 rounded-md footer-status-badge text-sky-400 text-[11px] font-mono">
          status: all_systems_operational
        </span>
      </div>

    </div>

    <div class="pt-6 border-t footer-divider text-center text-xs footer-subtle flex flex-col sm:flex-row items-center justify-between gap-3">
      <p>&copy; {{ date('Y') }} Tech Solution Agency. All rights reserved.</p>
      <div class="flex gap-4">
        <a href="#" class="footer-link hover:text-slate-400 transition-colors">Privacy Policy</a>
        <a href="#" class="footer-link hover:text-slate-400 transition-colors">Terms of Service</a>
        <a href="#" class="footer-link hover:text-slate-400 transition-colors">SLA Guarantee</a>
      </div>
    </div>
  </div>
</footer>
