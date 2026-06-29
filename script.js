/**
 * Tech Solution - Enterprise Interactive Script
 * Handles Dynamic Pricing Calculator, Theme Toggle, Counter Animations, and Modal Workflows.
 */

document.addEventListener('DOMContentLoaded', () => {
  initTheme();
  initCalculator();
  initCounters();
  initCaseStudyTabs();
  initMobileMenu();
  initContactModal();
});

/* ==========================================
   1. Theme Management (Dark / Light Mode)
   ========================================== */
function initTheme() {
  const themeToggleBtns = document.querySelectorAll('.theme-toggle-btn');
  const savedTheme = localStorage.getItem('techsolution_theme') || 'dark';

  if (savedTheme === 'light') {
    document.documentElement.classList.add('light');
    document.documentElement.classList.remove('dark');
  } else {
    document.documentElement.classList.add('dark');
    document.documentElement.classList.remove('light');
  }

  themeToggleBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const isLight = document.documentElement.classList.contains('light');
      if (isLight) {
        document.documentElement.classList.remove('light');
        document.documentElement.classList.add('dark');
        localStorage.setItem('techsolution_theme', 'dark');
      } else {
        document.documentElement.classList.remove('dark');
        document.documentElement.classList.add('light');
        localStorage.setItem('techsolution_theme', 'light');
      }
      updateThemeIcons();
    });
  });

  updateThemeIcons();
}

function updateThemeIcons() {
  const isLight = document.documentElement.classList.contains('light');
  const sunIcons = document.querySelectorAll('.theme-icon-sun');
  const moonIcons = document.querySelectorAll('.theme-icon-moon');

  sunIcons.forEach(icon => icon.classList.toggle('hidden', isLight));
  moonIcons.forEach(icon => icon.classList.toggle('hidden', !isLight));
}

/* ==========================================
   2. Dynamic Pricing Calculator Engine
   ==========================================
   Pricing based on 2025 market research:
   - Freelance web design: $3,000–$15,000
   - Mobile apps: $5,000–$15,000+
   - SEO retainer: $800–$2,000/mo
   - Odoo ERP SMB: $5,000–$20,000
   - IT/Cloud consulting: $1,500–$5,000+
   ========================================== */

// Base prices reflect small/MVP scope for each service
const SERVICE_PRICES = {
  web_blog:     300,   // Blog & Publication — WordPress blog, up to 10 posts, basic theme
  web_landing:  499,   // Landing Page — single page, fast delivery
  web_business: 1499,  // Business Website — 5–10 pages, CMS, SEO ready
  web_ecomm:    2999,  // E-commerce Store — WooCommerce/Laravel, payments
  web_custom:   4999,  // Custom Web App — full-stack, APIs, dashboards
  app:          5500,  // Mobile App (iOS & Android) — cross-platform Flutter
  seo:          1200,  // SEO & Growth Suite — 3-month minimum campaign
  odoo:         5000,  // Odoo ERP — core modules (CRM, Inventory, Accounting)
  consulting:   2000   // IT & Cloud Architecture — discovery + roadmap
};

// Scale multipliers reflect real scope growth
const SCALE_MULTIPLIERS = {
  small:      1.0,   // MVP / Core — minimal features, tight scope
  medium:     1.75,  // Growth — full system, more integrations & pages
  enterprise: 3.0    // Enterprise — high availability, custom SLA, team
};

// Urgency multipliers reflect resource dedication cost
const URGENCY_MULTIPLIERS = {
  standard:    1.0,   // 3–4 Weeks — normal sprint cycle
  accelerated: 1.25,  // 2 Weeks — priority queue, extended hours
  rush:        1.55   // 1 Week — dedicated team, round-the-clock delivery
};

// Human-readable labels for website sub-types
const WEB_TYPE_LABELS = {
  web_blog:     'Blog & Publication',
  web_landing:  'Landing Page',
  web_business: 'Business Website',
  web_ecomm:    'E-commerce Store',
  web_custom:   'Custom Web App'
};

function initCalculator() {
  const serviceCheckboxes = document.querySelectorAll('.calc-service-checkbox');
  const webTypeRadios     = document.querySelectorAll('input[name="calc-web-type"]');
  const webTypeSection    = document.getElementById('calc-web-type-section');
  const scaleRadios       = document.querySelectorAll('input[name="calc-scale"]');
  const urgencyRadios     = document.querySelectorAll('input[name="calc-urgency"]');
  const priceDisplay      = document.getElementById('calc-price-display');
  const rangeDisplay      = document.getElementById('calc-range-display');
  const breakdownList     = document.getElementById('calc-breakdown-list');

  if (!priceDisplay) return;

  // Show/hide website type selector based on whether web is checked
  function toggleWebTypeSection() {
    const webCheckbox = document.querySelector('.calc-service-checkbox[data-service-group="web"]');
    if (!webTypeSection) return;
    if (webCheckbox && webCheckbox.checked) {
      webTypeSection.classList.remove('hidden');
    } else {
      webTypeSection.classList.add('hidden');
    }
  }

  function calculateTotal() {
    let basePrice = 0;
    let selectedServices = [];
    let breakdown = [];

    serviceCheckboxes.forEach(cb => {
      if (!cb.checked) return;

      if (cb.dataset.serviceGroup === 'web') {
        // Find selected web sub-type
        let webType = 'web_blog'; // default
        webTypeRadios.forEach(r => { if (r.checked) webType = r.value; });
        const price = SERVICE_PRICES[webType] || SERVICE_PRICES.web_blog;
        const label = WEB_TYPE_LABELS[webType] || 'Website';
        basePrice += price;
        selectedServices.push(label);
        breakdown.push({ label: `Website — ${label}`, price });
      } else {
        const price = SERVICE_PRICES[cb.value] || 0;
        basePrice += price;
        selectedServices.push(cb.dataset.name);
        breakdown.push({ label: cb.dataset.name, price });
      }
    });

    if (basePrice === 0) {
      basePrice = SERVICE_PRICES.web_blog;
      breakdown.push({ label: 'Business Website (default)', price: basePrice });
    }

    let scaleMult = 1.0;
    let scaleLabel = 'Small / MVP';
    scaleRadios.forEach(r => {
      if (r.checked) {
        scaleMult = SCALE_MULTIPLIERS[r.value] || 1.0;
        const labelMap = { small: 'MVP scope', medium: 'Growth scale (×1.75)', enterprise: 'Enterprise scale (×3.0)' };
        scaleLabel = labelMap[r.value] || '';
      }
    });

    let urgencyMult = 1.0;
    urgencyRadios.forEach(r => {
      if (r.checked) urgencyMult = URGENCY_MULTIPLIERS[r.value] || 1.0;
    });

    const subtotal        = Math.round(basePrice * scaleMult);
    const calculatedExact = Math.round(subtotal * urgencyMult);
    const minEstimate     = Math.round(calculatedExact * 0.9);
    const maxEstimate     = Math.round(calculatedExact * 1.15);

    // Render price
    priceDisplay.textContent = `$${calculatedExact.toLocaleString()}`;
    if (rangeDisplay) {
      rangeDisplay.textContent = `Estimated range: $${minEstimate.toLocaleString()} – $${maxEstimate.toLocaleString()}`;
    }

    // Render inline breakdown
    if (breakdownList) {
      breakdownList.innerHTML = '';
      breakdown.forEach(item => {
        const li = document.createElement('div');
        li.className = 'flex justify-between text-xs text-slate-400 py-1 border-b border-slate-800/60';
        li.innerHTML = `<span>${item.label}</span><span class="text-slate-300 font-medium">$${item.price.toLocaleString()}</span>`;
        breakdownList.appendChild(li);
      });
      if (scaleMult !== 1.0) {
        const li = document.createElement('div');
        li.className = 'flex justify-between text-xs text-slate-400 py-1 border-b border-slate-800/60';
        li.innerHTML = `<span>${scaleLabel}</span><span class="text-sky-400 font-medium">×${scaleMult}</span>`;
        breakdownList.appendChild(li);
      }
      if (urgencyMult !== 1.0) {
        const li = document.createElement('div');
        li.className = 'flex justify-between text-xs text-slate-400 py-1';
        li.innerHTML = `<span>Priority delivery surcharge</span><span class="text-amber-400 font-medium">×${urgencyMult}</span>`;
        breakdownList.appendChild(li);
      }
    }

    // Store estimate state on lock button
    const lockBtn = document.getElementById('calc-lock-btn');
    if (lockBtn) {
      lockBtn.dataset.estimate = `$${calculatedExact.toLocaleString()}`;
      lockBtn.dataset.services = selectedServices.length > 0 ? selectedServices.join(', ') : 'Custom Web Solution';
    }
  }

  // ── Active-state class management for radio cards ──────────────────────
  // JS sets the class directly on the div so Tailwind CDN can't override it.
  function syncRadioActiveStates(radioGroup) {
    radioGroup.forEach(r => {
      const card = r.nextElementSibling;
      if (!card) return;
      if (r.checked) {
        card.classList.add('radio-card-active');
      } else {
        card.classList.remove('radio-card-active');
      }
    });
  }

  // Event Listeners
  serviceCheckboxes.forEach(cb => {
    cb.addEventListener('change', () => {
      toggleWebTypeSection();
      calculateTotal();
    });
  });
  webTypeRadios.forEach(r => r.addEventListener('change', () => {
    syncRadioActiveStates(webTypeRadios);
    calculateTotal();
  }));
  scaleRadios.forEach(r => r.addEventListener('change', () => {
    syncRadioActiveStates(scaleRadios);
    calculateTotal();
  }));
  urgencyRadios.forEach(r => r.addEventListener('change', () => {
    syncRadioActiveStates(urgencyRadios);
    calculateTotal();
  }));

  // Initial Run
  toggleWebTypeSection();
  syncRadioActiveStates(webTypeRadios);
  syncRadioActiveStates(scaleRadios);
  syncRadioActiveStates(urgencyRadios);
  calculateTotal();
}

/* ==========================================
   3. Lock Estimate & Contact Form Integration
   ========================================== */
function initContactModal() {
  const lockBtn = document.getElementById('calc-lock-btn');
  const serviceField = document.getElementById('contact-service-summary');
  const estimateField = document.getElementById('contact-estimate-badge');
  const contactForm = document.getElementById('contact-form');
  const formSuccess = document.getElementById('contact-success-message');

  if (lockBtn) {
    lockBtn.addEventListener('click', (e) => {
      e.preventDefault();
      const estimate = lockBtn.dataset.estimate || '$1,500';
      const services = lockBtn.dataset.services || 'Selected Services';

      if (serviceField) serviceField.value = `Selected Scope: ${services}`;
      if (estimateField) estimateField.textContent = `Locked Estimate: ${estimate}`;

      // Smooth scroll to contact section
      const contactSec = document.getElementById('contact');
      if (contactSec) {
        contactSec.scrollIntoView({ behavior: 'smooth' });
        // Highlight form card
        const formCard = document.getElementById('contact-card');
        if (formCard) {
          formCard.classList.add('ring-2', 'ring-sky-400');
          setTimeout(() => formCard.classList.remove('ring-2', 'ring-sky-400'), 2500);
        }
      }
    });
  }

  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const btn = contactForm.querySelector('button[type="submit"]');
      if (btn) {
        btn.disabled = true;
        btn.innerHTML = `<svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Reserving Your Lock...`;
      }

      setTimeout(() => {
        contactForm.reset();
        if (btn) {
          btn.disabled = false;
          btn.textContent = 'Lock in Estimate & Send Request';
        }
        if (formSuccess) {
          formSuccess.classList.remove('hidden');
          setTimeout(() => formSuccess.classList.add('hidden'), 6000);
        }
      }, 1200);
    });
  }
}

/* ==========================================
   4. Animated Metric Counters
   ========================================== */
function initCounters() {
  const counters = document.querySelectorAll('.stat-counter');
  if (counters.length === 0) return;

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const target = entry.target;
        const countTo = parseInt(target.getAttribute('data-target'), 10);
        const suffix = target.getAttribute('data-suffix') || '';
        let count = 0;
        const duration = 2000;
        const stepTime = 20;
        const steps = duration / stepTime;
        const increment = countTo / steps;

        const timer = setInterval(() => {
          count += increment;
          if (count >= countTo) {
            target.textContent = countTo + suffix;
            clearInterval(timer);
          } else {
            target.textContent = Math.floor(count) + suffix;
          }
        }, stepTime);

        obs.unobserve(target);
      }
    });
  }, { threshold: 0.3 });

  counters.forEach(counter => observer.observe(counter));
}

/* ==========================================
   5. Case Study Filter Tabs
   ========================================== */
function initCaseStudyTabs() {
  const tabBtns = document.querySelectorAll('.case-tab-btn');
  const caseCards = document.querySelectorAll('.case-card');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const filter = btn.dataset.filter;

      tabBtns.forEach(b => {
        b.classList.remove('bg-sky-500', 'text-white', 'shadow-lg', 'shadow-sky-500/20');
        b.classList.add('bg-slate-800/60', 'text-slate-400', 'hover:text-white');
      });

      btn.classList.add('bg-sky-500', 'text-white', 'shadow-lg', 'shadow-sky-500/20');
      btn.classList.remove('bg-slate-800/60', 'text-slate-400', 'hover:text-white');

      caseCards.forEach(card => {
        if (filter === 'all' || card.dataset.category === filter) {
          card.classList.remove('hidden');
          card.classList.add('animate-fade-in');
        } else {
          card.classList.add('hidden');
        }
      });
    });
  });
}

/* ==========================================
   6. Mobile Menu Navigation Drawer
   ========================================== */
function initMobileMenu() {
  const menuBtn = document.getElementById('mobile-menu-btn');
  const menuDrawer = document.getElementById('mobile-menu-drawer');
  const closeBtn = document.getElementById('mobile-menu-close');
  const navLinks = document.querySelectorAll('.mobile-nav-link');

  if (!menuBtn || !menuDrawer) return;

  menuBtn.addEventListener('click', () => {
    menuDrawer.classList.remove('translate-x-full');
  });

  if (closeBtn) {
    closeBtn.addEventListener('click', () => {
      menuDrawer.classList.add('translate-x-full');
    });
  }

  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      menuDrawer.classList.add('translate-x-full');
    });
  });
}
