/**
 * Tech Solution — Master Interactive Script
 * Progressive wizard calculators with confidence meter, cost breakdown,
 * progress bar, timeline chip, and animated price display.
 */

document.addEventListener('DOMContentLoaded', () => {
  initTheme();
  initMainCalculator();
  initWebCalculator();
  initMobileCalculator();
  initSeoCalculator();
  initOdooCalculator();
  initCloudCalculator();
  initCounters();
  initCaseStudyTabs();
  initMobileMenu();
  initContactModal();
  initHero3DTilt();
});

/* ============================================================
   THEME MANAGEMENT
   ============================================================ */
function initTheme() {
  const themeToggleBtns = document.querySelectorAll('.theme-toggle-btn');
  const savedTheme = localStorage.getItem('techsolution_theme') || 'dark';

  function applyTheme(theme) {
    if (theme === 'light') {
      document.documentElement.classList.add('light');
      document.documentElement.classList.remove('dark');
      document.body.classList.add('light');
      document.body.classList.remove('dark');
    } else {
      document.documentElement.classList.add('dark');
      document.documentElement.classList.remove('light');
      document.body.classList.add('dark');
      document.body.classList.remove('light');
    }
    updateThemeIcons();
    setTimeout(updateVisualActiveStates, 50);
  }

  applyTheme(savedTheme);

  themeToggleBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const isLight = document.documentElement.classList.contains('light');
      const newTheme = isLight ? 'dark' : 'light';
      localStorage.setItem('techsolution_theme', newTheme);
      applyTheme(newTheme);
    });
  });
}

function updateThemeIcons() {
  const isLight = document.documentElement.classList.contains('light');
  const sunIcons = document.querySelectorAll('.theme-icon-sun');
  const moonIcons = document.querySelectorAll('.theme-icon-moon');
  // Dark mode → show SUN (click to go light)
  // Light mode → show MOON (click to go dark)
  sunIcons.forEach(icon => icon.classList.toggle('hidden', isLight));
  moonIcons.forEach(icon => icon.classList.toggle('hidden', !isLight));
}

/* ============================================================
   GLOBAL HELPERS
   ============================================================ */
function revealStep(stepEl) {
  if (!stepEl || !stepEl.classList.contains('hidden')) return;
  stepEl.classList.remove('hidden');
  stepEl.classList.add('step-reveal');
  setTimeout(() => stepEl.classList.remove('step-reveal'), 400);
  setTimeout(() => stepEl.scrollIntoView({ behavior: 'smooth', block: 'nearest' }), 120);
}

function updateVisualActiveStates() {
  const isLight = document.documentElement.classList.contains('light');
  document.querySelectorAll('.calc-option-label').forEach(label => {
    const radio = label.querySelector('input[type="radio"]');
    const card = label.querySelector('.calc-radio-card');
    if (!radio || !card) return;
    if (radio.checked) {
      if (isLight) {
        card.style.borderColor = '#0284c7';
        card.style.backgroundColor = '#eff6ff';
        card.style.boxShadow = '0 0 0 2px rgba(2,132,199,0.15)';
      } else {
        card.style.borderColor = '#38bdf8';
        card.style.backgroundColor = 'rgba(56,189,248,0.1)';
        card.style.boxShadow = '0 0 20px rgba(56,189,248,0.15)';
      }
    } else {
      card.style.borderColor = '';
      card.style.backgroundColor = '';
      card.style.boxShadow = '';
    }
  });
}

function animatePrice(el, value) {
  if (!el) return;
  el.classList.remove('price-animate');
  void el.offsetWidth; // reflow
  el.textContent = value;
  el.classList.add('price-animate');
}

function updateProgressDots(progressBarEl, completedStep) {
  if (!progressBarEl) return;
  const dots = progressBarEl.querySelectorAll('.calc-progress-dot');
  const lines = progressBarEl.querySelectorAll('.calc-progress-line');
  dots.forEach((dot, i) => {
    const stepNum = i + 1;
    dot.classList.remove('active', 'done');
    if (stepNum < completedStep) dot.classList.add('done');
    else if (stepNum === completedStep) dot.classList.add('active');
  });
  lines.forEach((line, i) => {
    line.classList.toggle('done', i + 1 < completedStep);
  });
}

function updateConfidence(sectionEl, answered, total) {
  if (!sectionEl) return;
  const pct = Math.round((answered / total) * 100);
  const bar = sectionEl.querySelector('.confidence-bar-fill');
  const label = sectionEl.querySelector('.confidence-label');
  if (bar) bar.style.width = pct + '%';
  if (label) label.textContent = pct + '% Accuracy';
}

function updateBreakdown(sectionEl, items) {
  if (!sectionEl) return;
  const list = sectionEl.querySelector('.price-breakdown-list');
  if (!list) return;
  if (items.length === 0) {
    list.innerHTML = '<p class="text-[11px] text-slate-500 italic">No selections yet...</p>';
    return;
  }
  list.innerHTML = items.map(item => `
    <div class="flex justify-between items-center py-1.5 border-b border-slate-800/40 last:border-0">
      <span class="text-[11px] text-slate-400 truncate mr-2">${item.label}</span>
      <span class="text-[11px] font-bold text-white shrink-0">+$${item.price.toLocaleString()}</span>
    </div>
  `).join('');
}

function setSummaryEl(id, value) {
  const el = document.getElementById(id);
  if (el) el.textContent = value;
}

function setTimelineChip(id, text) {
  const el = document.getElementById(id);
  if (el) {
    const svg = el.querySelector('svg');
    el.textContent = '';
    if (svg) el.appendChild(svg);
    el.append(' ' + text);
  }
}

/* ============================================================
   1. MAIN HOME CALCULATOR
   ============================================================ */
const SERVICE_PRICES = { web: 1500, app: 2800, seo: 800, odoo: 3500, consulting: 1200 };
const SCALE_MULTIPLIERS = { small: 1.0, medium: 1.6, enterprise: 2.5 };
const URGENCY_MULTIPLIERS = { standard: 1.0, accelerated: 1.3, rush: 1.6 };

function initMainCalculator() {
  const serviceCheckboxes = document.querySelectorAll('.calc-service-checkbox');
  const scaleRadios = document.querySelectorAll('input[name="calc-scale"]');
  const urgencyRadios = document.querySelectorAll('input[name="calc-urgency"]');
  const priceDisplay = document.getElementById('calc-price-display');
  const rangeDisplay = document.getElementById('calc-range-display');

  if (!priceDisplay) return;

  function calculateTotal() {
    let basePrice = 0;
    let selectedServices = [];
    serviceCheckboxes.forEach(cb => {
      if (cb.checked) {
        basePrice += SERVICE_PRICES[cb.value] || 0;
        selectedServices.push(cb.dataset.name);
      }
    });
    if (basePrice === 0) basePrice = 1500;

    let scaleMult = 1.0;
    scaleRadios.forEach(r => { if (r.checked) scaleMult = SCALE_MULTIPLIERS[r.value] || 1.0; });
    let urgencyMult = 1.0;
    urgencyRadios.forEach(r => { if (r.checked) urgencyMult = URGENCY_MULTIPLIERS[r.value] || 1.0; });

    const total = Math.round(basePrice * scaleMult * urgencyMult);
    const min = Math.round(total * 0.9);
    const max = Math.round(total * 1.15);

    animatePrice(priceDisplay, `$${total.toLocaleString()}`);
    if (rangeDisplay) rangeDisplay.textContent = `Starting range: $${min.toLocaleString()} – $${max.toLocaleString()}`;

    const lockBtn = document.getElementById('calc-lock-btn');
    if (lockBtn) {
      lockBtn.dataset.estimate = `$${total.toLocaleString()}`;
      lockBtn.dataset.services = selectedServices.length > 0 ? selectedServices.join(', ') : 'Custom Solution';
    }
  }

  serviceCheckboxes.forEach(cb => cb.addEventListener('change', calculateTotal));
  scaleRadios.forEach(r => r.addEventListener('change', calculateTotal));
  urgencyRadios.forEach(r => r.addEventListener('change', calculateTotal));
  calculateTotal();
}

/* ============================================================
   2. WEB DEVELOPMENT CALCULATOR (6 steps)
   ============================================================ */
const STEP2_BRANCH_OPTIONS = {
  blog: [
    { name: 'WordPress Blog', price: 300, desc: 'Easy Publishing CMS', icon: '📝' },
    { name: 'Ghost CMS', price: 500, desc: 'Modern Clean Publication', icon: '👻' },
    { name: 'Custom Laravel Blog', price: 700, desc: 'High Performance', icon: '⚡', badge: 'popular' },
    { name: '❓ Recommend', price: 400, desc: 'Best Tech Match', icon: '🤖' }
  ],
  personal: [
    { name: 'Tailwind HTML/Blade', price: 300, desc: 'Fast Minimal Portfolio', icon: '🎨', badge: 'budget' },
    { name: 'WordPress Portfolio', price: 400, desc: 'Easy Profile Management', icon: '🌐' },
    { name: 'Custom Laravel App', price: 800, desc: 'Enterprise Personal', icon: '🚀', badge: 'popular' },
    { name: '❓ Recommend', price: 400, desc: 'Best Tech Match', icon: '🤖' }
  ],
  business: [
    { name: 'Custom Laravel', price: 800, desc: 'Enterprise MVC API', icon: '🏗️', badge: 'popular' },
    { name: 'Filament Admin CMS', price: 600, desc: 'Rapid Management', icon: '⚙️' },
    { name: 'Headless Next.js', price: 1400, desc: 'Decoupled Architecture', icon: '🔌' },
    { name: '❓ Recommend', price: 700, desc: 'Best Tech Match', icon: '🤖' }
  ],
  ecommerce: [
    { name: 'WooCommerce', price: 800, desc: 'WordPress E-Commerce', icon: '🛒', badge: 'popular' },
    { name: 'Shopify Custom', price: 1200, desc: 'Theme & APIs', icon: '💙' },
    { name: 'Laravel Commerce', price: 1800, desc: 'High-Scale Custom Cart', icon: '🚀', badge: 'enterprise' },
    { name: '❓ Recommend', price: 1000, desc: 'Best Tech Match', icon: '🤖' }
  ],
  saas: [
    { name: 'Laravel SaaS', price: 1800, desc: 'Multi-tenant Enterprise', icon: '🏗️', badge: 'popular' },
    { name: 'Node + Nest API', price: 2200, desc: 'Realtime Microservices', icon: '⚡' },
    { name: 'React/Vue SPA', price: 1600, desc: 'Reactive Dashboard UI', icon: '💻' },
    { name: '❓ Recommend', price: 1500, desc: 'Best Tech Match', icon: '🤖' }
  ],
  dontknow: [
    { name: 'Recommended Stack', price: 600, desc: 'Tailored for your goals', icon: '🎯', badge: 'popular' },
    { name: 'WordPress CMS', price: 400, desc: 'User Friendly Standard', icon: '🌐' },
    { name: 'Custom Laravel', price: 800, desc: 'High Speed Enterprise', icon: '🚀' },
    { name: '❓ Expert Choice', price: 500, desc: 'Engineers Select', icon: '🤖' }
  ]
};

function initWebCalculator() {
  const section = document.getElementById('calculator');
  const display = document.getElementById('web-calc-display');
  if (!display) return;

  const range = document.getElementById('web-range-display');
  const progressBar = document.getElementById('web-progress-bar');
  const step2 = document.getElementById('step-2');
  const step3 = document.getElementById('step-3');
  const step4 = document.getElementById('step-4');
  const step5 = document.getElementById('step-5');
  const step6 = document.getElementById('step-6');
  const step2Container = document.getElementById('step-2-options-container');
  const step2Title = document.getElementById('step-2-title');

  // Track the currently rendered Step-2 branch so we don't re-wipe it on every recalc
  let currentBranch = null;

  function renderStep2(branchKey) {
    if (!step2Container) return;
    const options = STEP2_BRANCH_OPTIONS[branchKey] || STEP2_BRANCH_OPTIONS['business'];
    const badgeMap = { popular: '<span class="option-badge popular">⭐ Popular</span>', budget: '<span class="option-badge best-value">💰 Budget</span>', enterprise: '<span class="option-badge fast">🔥 Enterprise</span>' };
    step2Container.innerHTML = options.map(opt => `
      <label class="cursor-pointer calc-option-label relative">
        <input type="radio" name="web-tech" value="${opt.name}" data-price="${opt.price}" class="web-calc-input sr-only" />
        <div class="calc-radio-card p-3.5 text-center rounded-xl border border-slate-700/80 bg-slate-900/60 hover:border-indigo-500/50 transition-all">
          ${opt.badge ? badgeMap[opt.badge] || '' : ''}
          <span class="option-icon">${opt.icon}</span>
          <p class="font-bold text-xs text-white">${opt.name}</p>
          <p class="text-[10px] text-slate-400 mt-0.5">${opt.desc}</p>
          <p class="text-[10px] text-emerald-400 font-semibold mt-1.5">+$${opt.price.toLocaleString()}</p>
        </div>
      </label>
    `).join('');
    if (step2Title) step2Title.textContent = `Recommended Engine for ${branchKey.toUpperCase()}`;

    // Re-attach listeners on freshly rendered inputs
    step2Container.querySelectorAll('input[name="web-tech"]').forEach(radio => {
      radio.addEventListener('change', () => {
        // Apply active state immediately on this group before full recalc
        applyActiveStates(step2Container);
        recalc();
      });
    });

    // Apply active visual state to any already-checked card in this group
    applyActiveStates(step2Container);
  }

  // Applies the radio-card-active class within a container based on :checked state
  function applyActiveStates(container) {
    container.querySelectorAll('.calc-option-label').forEach(label => {
      const radio = label.querySelector('input[type="radio"]');
      const card  = label.querySelector('.calc-radio-card');
      if (!radio || !card) return;
      if (radio.checked) {
        card.classList.add('radio-card-active');
      } else {
        card.classList.remove('radio-card-active');
      }
    });
    // Also run global inline-style updater for theme awareness
    updateVisualActiveStates();
  }


  function recalc() {
    let baseSum = 0;
    let urgencyMult = 1.0;
    let timeline = 'Select options above';
    let answeredCount = 0;
    const breakdownItems = [];

    const typeInput = document.querySelector('input[name="web-type"]:checked');
    const techInput = document.querySelector('input[name="web-tech"]:checked');
    const designInput = document.querySelector('input[name="web-design"]:checked');
    const contentInput = document.querySelector('input[name="web-content"]:checked');
    const urgencyInput = document.querySelector('input[name="web-urgency"]:checked');

    if (typeInput) {
      const price = parseInt(typeInput.dataset.price || 0, 10);
      baseSum += price;
      breakdownItems.push({ label: 'Project Type: ' + (typeInput.parentElement.querySelector('.font-bold') || typeInput.parentElement).textContent?.trim().split('\n')[0], price });
      answeredCount++;
      revealStep(step2);
      // Only re-render Step 2 cards when the website type actually changes.
      // Re-rendering every recalc() call wiped innerHTML and destroyed the selection.
      if (typeInput.value !== currentBranch) {
        currentBranch = typeInput.value;
        renderStep2(typeInput.value);
      } else {
        // Branch unchanged — just re-apply active state so selection stays visible
        if (step2Container) applyActiveStates(step2Container);
      }
      updateProgressDots(progressBar, 2);
    }
    if (techInput) {
      const price = parseInt(techInput.dataset.price || 0, 10);
      baseSum += price;
      breakdownItems.push({ label: 'Tech Stack: ' + techInput.value, price });
      answeredCount++;
      revealStep(step3);
      updateProgressDots(progressBar, 3);
    }
    if (designInput) {
      const price = parseInt(designInput.dataset.price || 0, 10);
      baseSum += price;
      if (price > 0) breakdownItems.push({ label: 'Design Level: ' + designInput.value, price });
      answeredCount++;
      revealStep(step4);
      updateProgressDots(progressBar, 4);
    }
    if (contentInput) {
      const price = parseInt(contentInput.dataset.price || 0, 10);
      baseSum += price;
      if (price > 0) breakdownItems.push({ label: 'Content: Agency provided', price });
      answeredCount++;
      revealStep(step5);
      updateProgressDots(progressBar, 5);
    }
    if (urgencyInput) {
      urgencyMult = parseFloat(urgencyInput.dataset.mult || 1.0);
      timeline = urgencyInput.dataset.timeline || '3–4 weeks';
      answeredCount++;
      revealStep(step6);
      updateProgressDots(progressBar, 6);
    }

    // Add-ons
    document.querySelectorAll('.web-addon:checked').forEach(cb => {
      const price = parseInt(cb.dataset.price || 0, 10);
      baseSum += price;
      breakdownItems.push({ label: 'Add-on: ' + (cb.dataset.name || 'Module'), price });
    });

    // Urgency surcharge shown
    if (urgencyMult > 1.0) {
      const surcharge = Math.round(baseSum * (urgencyMult - 1.0));
      breakdownItems.push({ label: `Urgency surcharge (×${urgencyMult})`, price: surcharge });
    }

    updateVisualActiveStates();
    updateConfidence(section, answeredCount, 5);
    updateBreakdown(section, breakdownItems);

    const summaryType = typeInput ? typeInput.parentElement.querySelector('.font-bold')?.textContent?.trim().split('\n')[0] : '—';
    const summaryTech = techInput ? techInput.value : 'Pending';
    const summaryDesign = designInput ? designInput.value : 'Pending';
    const summaryContent = contentInput ? contentInput.value : 'Pending';
    const summaryUrgency = urgencyInput ? urgencyInput.value : 'Pending';

    setSummaryEl('web-summary-type', summaryType || '—');
    setSummaryEl('web-summary-tech', summaryTech);
    setSummaryEl('web-summary-design', summaryDesign);
    setSummaryEl('web-summary-content', summaryContent);
    setSummaryEl('web-summary-urgency', summaryUrgency);

    if (!typeInput) {
      animatePrice(display, '$0');
      if (range) range.textContent = 'Select Step 1 to begin...';
      setSummaryEl('web-grand-range', '$0 – $0');
      return;
    }

    const total = Math.round(baseSum * urgencyMult);
    const min = Math.round(total * 0.9);
    const max = Math.round(total * 1.15);

    animatePrice(display, `$${total.toLocaleString()}`);
    if (range) range.textContent = `Estimated range: $${min.toLocaleString()} – $${max.toLocaleString()}`;
    setSummaryEl('web-grand-range', `$${min.toLocaleString()} – $${max.toLocaleString()}`);

    // Timeline chip
    const chipEl = document.getElementById('web-timeline-chip');
    if (chipEl) {
      const svg = chipEl.querySelector('svg');
      chipEl.innerHTML = '';
      if (svg) chipEl.appendChild(svg);
      chipEl.append(' Estimated delivery: ' + timeline);
    }

    const lockBtn = document.getElementById('calc-lock-btn');
    if (lockBtn) {
      lockBtn.dataset.estimate = `$${total.toLocaleString()}`;
      lockBtn.dataset.services = `${summaryType} (${summaryTech})`;
    }
  }

  document.querySelectorAll('input[name="web-type"]').forEach(r => {
    r.addEventListener('change', () => {
      // Reset subsequent steps when type changes
      [step3, step4, step5, step6].forEach(s => { if (s) s.classList.add('hidden'); });
      recalc();
    });
  });
  document.querySelectorAll('.web-calc-input').forEach(i => i.addEventListener('change', recalc));
  recalc();
}

/* ============================================================
   3. MOBILE APP CALCULATOR (5 steps)
   ============================================================ */
function initMobileCalculator() {
  const section = document.getElementById('calculator');
  const display = document.getElementById('mobile-calc-display');
  if (!display) return;

  const range = document.getElementById('mobile-range-display');
  const progressBar = document.getElementById('mobile-progress-bar');
  const step2 = document.getElementById('mobile-step-2');
  const step3 = document.getElementById('mobile-step-3');
  const step4 = document.getElementById('mobile-step-4');
  const step5 = document.getElementById('mobile-step-5');

  function recalc() {
    let baseSum = 0;
    let urgencyMult = 1.0;
    let timeline = 'Select all options';
    let answeredCount = 0;
    const breakdownItems = [];

    const typeInput = document.querySelector('input[name="mobile-type"]:checked');
    const platformInput = document.querySelector('input[name="mobile-platform"]:checked');
    const backendInput = document.querySelector('input[name="mobile-backend"]:checked');
    const uiInput = document.querySelector('input[name="mobile-ui"]:checked');
    const urgencyInput = document.querySelector('input[name="mobile-urgency"]:checked');

    if (typeInput) {
      const price = parseInt(typeInput.dataset.price || 0, 10);
      baseSum += price;
      breakdownItems.push({ label: 'App Type: ' + typeInput.value, price });
      answeredCount++;
      revealStep(step2);
      updateProgressDots(progressBar, 2);
    }
    if (platformInput) {
      const price = parseInt(platformInput.dataset.price || 0, 10);
      baseSum += price;
      breakdownItems.push({ label: 'Platform: ' + platformInput.value, price });
      answeredCount++;
      revealStep(step3);
      updateProgressDots(progressBar, 3);
    }
    if (backendInput) {
      const price = parseInt(backendInput.dataset.price || 0, 10);
      baseSum += price;
      breakdownItems.push({ label: 'Backend: ' + backendInput.value, price });
      answeredCount++;
      revealStep(step4);
      updateProgressDots(progressBar, 4);
    }
    if (uiInput) {
      const price = parseInt(uiInput.dataset.price || 0, 10);
      baseSum += price;
      if (price > 0) breakdownItems.push({ label: 'UI Complexity: ' + uiInput.value, price });
      answeredCount++;
      revealStep(step5);
      updateProgressDots(progressBar, 5);
    }
    if (urgencyInput) {
      urgencyMult = parseFloat(urgencyInput.dataset.mult || 1.0);
      timeline = urgencyInput.dataset.timeline || '6–8 weeks';
      if (urgencyMult > 1.0) {
        const surcharge = Math.round(baseSum * (urgencyMult - 1.0));
        breakdownItems.push({ label: `Urgency surcharge (×${urgencyMult})`, price: surcharge });
      }
      answeredCount++;
    }

    updateVisualActiveStates();
    updateConfidence(section, answeredCount, 5);
    updateBreakdown(section, breakdownItems);

    setSummaryEl('mobile-summary-type', typeInput ? typeInput.value : '—');
    setSummaryEl('mobile-summary-platform', platformInput ? platformInput.value : 'Pending');
    setSummaryEl('mobile-summary-backend', backendInput ? backendInput.value : 'Pending');
    setSummaryEl('mobile-summary-ui', uiInput ? uiInput.value : 'Pending');
    setSummaryEl('mobile-summary-urgency', urgencyInput ? urgencyInput.value : 'Pending');

    if (!typeInput) {
      animatePrice(display, '$0');
      if (range) range.textContent = 'Select Step 1 to begin...';
      setSummaryEl('mobile-grand-range', '$0 – $0');
      return;
    }

    const total = Math.round(baseSum * urgencyMult);
    const min = Math.round(total * 0.9);
    const max = Math.round(total * 1.15);

    animatePrice(display, `$${total.toLocaleString()}`);
    if (range) range.textContent = `Estimated range: $${min.toLocaleString()} – $${max.toLocaleString()}`;
    setSummaryEl('mobile-grand-range', `$${min.toLocaleString()} – $${max.toLocaleString()}`);

    const chipEl = document.getElementById('mobile-timeline-chip');
    if (chipEl) {
      const svg = chipEl.querySelector('svg');
      chipEl.innerHTML = '';
      if (svg) chipEl.appendChild(svg);
      chipEl.append(' Estimated delivery: ' + timeline);
    }

    const lockBtn = document.getElementById('calc-lock-btn');
    if (lockBtn) {
      lockBtn.dataset.estimate = `$${total.toLocaleString()}`;
      lockBtn.dataset.services = `Mobile App Project`;
    }
  }

  document.querySelectorAll('.mobile-calc-input').forEach(i => i.addEventListener('change', recalc));
  recalc();
}

/* ============================================================
   4. SEO CAMPAIGN CALCULATOR (4 steps)
   ============================================================ */
function initSeoCalculator() {
  const section = document.getElementById('calculator');
  const display = document.getElementById('seo-calc-display');
  if (!display) return;

  const range = document.getElementById('seo-range-display');
  const progressBar = document.getElementById('seo-progress-bar');
  const step2 = document.getElementById('seo-step-2');
  const step3 = document.getElementById('seo-step-3');
  const step4 = document.getElementById('seo-step-4');

  function recalc() {
    let total = 0;
    let answeredCount = 0;
    const breakdownItems = [];

    const marketInput = document.querySelector('input[name="seo-market"]:checked');
    const statusInput = document.querySelector('input[name="seo-status"]:checked');
    const contentInput = document.querySelector('input[name="seo-content"]:checked');

    if (marketInput) {
      const price = parseInt(marketInput.dataset.price || 0, 10);
      total += price;
      breakdownItems.push({ label: 'Market: ' + marketInput.value, price });
      answeredCount++;
      revealStep(step2);
      updateProgressDots(progressBar, 2);
    }
    if (statusInput) {
      const price = parseInt(statusInput.dataset.price || 0, 10);
      total += price;
      breakdownItems.push({ label: 'Site Status: ' + statusInput.value, price });
      answeredCount++;
      revealStep(step3);
      updateProgressDots(progressBar, 3);
    }
    if (contentInput) {
      const price = parseInt(contentInput.dataset.price || 0, 10);
      total += price;
      breakdownItems.push({ label: 'Content Vol: ' + contentInput.value, price });
      answeredCount++;
      revealStep(step4);
      updateProgressDots(progressBar, 4);
    }

    // Add-ons
    document.querySelectorAll('.seo-addon:checked').forEach(cb => {
      const price = parseInt(cb.dataset.price || 0, 10);
      total += price;
      breakdownItems.push({ label: cb.dataset.name || 'Add-on', price });
    });

    updateVisualActiveStates();
    updateConfidence(section, answeredCount, 3);
    updateBreakdown(section, breakdownItems);

    setSummaryEl('seo-summary-market', marketInput ? marketInput.value : '—');
    setSummaryEl('seo-summary-status', statusInput ? statusInput.value : 'Pending');
    setSummaryEl('seo-summary-content', contentInput ? contentInput.value : 'Pending');

    if (!marketInput) {
      animatePrice(display, '$0');
      if (range) range.textContent = 'Select Step 1 to begin...';
      setSummaryEl('seo-grand-range', '$0 – $0');
      return;
    }

    const min = Math.round(total * 0.9);
    const max = Math.round(total * 1.15);
    animatePrice(display, `$${total.toLocaleString()}`);
    if (range) range.textContent = `Estimated monthly: $${min.toLocaleString()} – $${max.toLocaleString()}`;
    setSummaryEl('seo-grand-range', `$${min.toLocaleString()} – $${max.toLocaleString()}`);

    const lockBtn = document.getElementById('calc-lock-btn');
    if (lockBtn) {
      lockBtn.dataset.estimate = `$${total.toLocaleString()}/mo`;
      lockBtn.dataset.services = 'SEO Campaign';
    }
  }

  document.querySelectorAll('.seo-calc-input').forEach(i => i.addEventListener('change', recalc));
  recalc();
}

/* ============================================================
   5. ODOO ERP CALCULATOR (4 steps)
   ============================================================ */
function initOdooCalculator() {
  const section = document.getElementById('calculator');
  const display = document.getElementById('odoo-calc-display');
  if (!display) return;

  const range = document.getElementById('odoo-range-display');
  const progressBar = document.getElementById('odoo-progress-bar');
  const step2 = document.getElementById('odoo-step-2');
  const step3 = document.getElementById('odoo-step-3');
  const step4 = document.getElementById('odoo-step-4');

  function recalc() {
    let total = 0;
    let answeredCount = 0;
    const breakdownItems = [];

    const sizeInput = document.querySelector('input[name="odoo-size"]:checked');
    const integrationInput = document.querySelector('input[name="odoo-integration"]:checked');
    const supportInput = document.querySelector('input[name="odoo-support"]:checked');

    if (sizeInput) {
      const price = parseInt(sizeInput.dataset.price || 0, 10);
      total += price;
      breakdownItems.push({ label: 'Business Size: ' + sizeInput.value, price });
      answeredCount++;
      revealStep(step2);
      updateProgressDots(progressBar, 2);
    }

    // Modules (checkboxes)
    let moduleCount = 0;
    document.querySelectorAll('.odoo-module:checked').forEach(cb => {
      const price = parseInt(cb.dataset.price || 0, 10);
      total += price;
      breakdownItems.push({ label: 'Module: ' + (cb.dataset.name || 'Odoo Module'), price });
      moduleCount++;
    });
    if (moduleCount > 0) {
      answeredCount++;
      revealStep(step3);
      updateProgressDots(progressBar, 3);
    }

    if (integrationInput) {
      const price = parseInt(integrationInput.dataset.price || 0, 10);
      total += price;
      if (price > 0) breakdownItems.push({ label: 'Integration: ' + integrationInput.value, price });
      answeredCount++;
      revealStep(step4);
      updateProgressDots(progressBar, 4);
    }

    if (supportInput) {
      const price = parseInt(supportInput.dataset.price || 0, 10);
      total += price;
      breakdownItems.push({ label: 'Support Plan: ' + supportInput.value, price });
      answeredCount++;
    }

    updateVisualActiveStates();
    updateConfidence(section, answeredCount, 4);
    updateBreakdown(section, breakdownItems);

    setSummaryEl('odoo-summary-size', sizeInput ? sizeInput.value : '—');
    setSummaryEl('odoo-summary-integration', integrationInput ? integrationInput.value : 'Pending');
    setSummaryEl('odoo-summary-support', supportInput ? supportInput.value : 'Pending');

    if (!sizeInput) {
      animatePrice(display, '$0');
      if (range) range.textContent = 'Select business size to begin...';
      setSummaryEl('odoo-grand-range', '$0 – $0');
      return;
    }

    const min = Math.round(total * 0.9);
    const max = Math.round(total * 1.15);
    animatePrice(display, `$${total.toLocaleString()}`);
    if (range) range.textContent = `Estimated range: $${min.toLocaleString()} – $${max.toLocaleString()}`;
    setSummaryEl('odoo-grand-range', `$${min.toLocaleString()} – $${max.toLocaleString()}`);

    const lockBtn = document.getElementById('calc-lock-btn');
    if (lockBtn) {
      lockBtn.dataset.estimate = `$${total.toLocaleString()}`;
      lockBtn.dataset.services = 'Odoo ERP Implementation';
    }
  }

  document.querySelectorAll('.odoo-calc-input').forEach(i => i.addEventListener('change', recalc));
  recalc();
}

/* ============================================================
   6. CLOUD / IT CONSULTING CALCULATOR (4 steps)
   ============================================================ */
function initCloudCalculator() {
  const section = document.getElementById('calculator');
  const display = document.getElementById('cloud-calc-display');
  if (!display) return;

  const range = document.getElementById('cloud-range-display');
  const progressBar = document.getElementById('cloud-progress-bar');
  const step2 = document.getElementById('cloud-step-2');
  const step3 = document.getElementById('cloud-step-3');
  const step4 = document.getElementById('cloud-step-4');

  function recalc() {
    let total = 0;
    let answeredCount = 0;
    const breakdownItems = [];

    const providerInput = document.querySelector('input[name="cloud-provider"]:checked');
    const projectInput = document.querySelector('input[name="cloud-project"]:checked');
    const teamInput = document.querySelector('input[name="cloud-team"]:checked');

    if (providerInput) {
      const price = parseInt(providerInput.dataset.price || 0, 10);
      total += price;
      breakdownItems.push({ label: 'Cloud: ' + providerInput.value, price });
      answeredCount++;
      revealStep(step2);
      updateProgressDots(progressBar, 2);
    }
    if (projectInput) {
      const price = parseInt(projectInput.dataset.price || 0, 10);
      total += price;
      breakdownItems.push({ label: 'Project: ' + projectInput.value, price });
      answeredCount++;
      revealStep(step3);
      updateProgressDots(progressBar, 3);
    }
    if (teamInput) {
      const price = parseInt(teamInput.dataset.price || 0, 10);
      total += price;
      breakdownItems.push({ label: 'Team: ' + teamInput.value, price });
      answeredCount++;
      revealStep(step4);
      updateProgressDots(progressBar, 4);
    }

    // Add-ons
    document.querySelectorAll('.cloud-addon:checked').forEach(cb => {
      const price = parseInt(cb.dataset.price || 0, 10);
      total += price;
      breakdownItems.push({ label: cb.dataset.name || 'Add-on', price });
    });

    updateVisualActiveStates();
    updateConfidence(section, answeredCount, 3);
    updateBreakdown(section, breakdownItems);

    setSummaryEl('cloud-summary-provider', providerInput ? providerInput.value : '—');
    setSummaryEl('cloud-summary-project', projectInput ? projectInput.value : 'Pending');
    setSummaryEl('cloud-summary-team', teamInput ? teamInput.value : 'Pending');

    if (!providerInput) {
      animatePrice(display, '$0');
      if (range) range.textContent = 'Select cloud provider to begin...';
      setSummaryEl('cloud-grand-range', '$0 – $0');
      return;
    }

    const min = Math.round(total * 0.9);
    const max = Math.round(total * 1.15);
    animatePrice(display, `$${total.toLocaleString()}`);
    if (range) range.textContent = `Estimated range: $${min.toLocaleString()} – $${max.toLocaleString()}`;
    setSummaryEl('cloud-grand-range', `$${min.toLocaleString()} – $${max.toLocaleString()}`);

    const lockBtn = document.getElementById('calc-lock-btn');
    if (lockBtn) {
      lockBtn.dataset.estimate = `$${total.toLocaleString()}`;
      lockBtn.dataset.services = 'Cloud Infrastructure Project';
    }
  }

  document.querySelectorAll('.cloud-calc-input').forEach(i => i.addEventListener('change', recalc));
  recalc();
}

/* ============================================================
   CONTACT MODAL INTEGRATION
   ============================================================ */
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
      const contactSec = document.getElementById('contact');
      if (contactSec) {
        contactSec.scrollIntoView({ behavior: 'smooth' });
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
        if (btn) { btn.disabled = false; btn.textContent = 'Lock in Estimate & Send Request'; }
        if (formSuccess) { formSuccess.classList.remove('hidden'); setTimeout(() => formSuccess.classList.add('hidden'), 6000); }
      }, 1200);
    });
  }
}

/* ============================================================
   METRIC COUNTERS
   ============================================================ */
function initCounters() {
  const counters = document.querySelectorAll('.stat-counter');
  if (counters.length === 0) return;
  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const target = entry.target;
      const countTo = parseInt(target.getAttribute('data-target'), 10);
      const suffix = target.getAttribute('data-suffix') || '';
      let count = 0;
      const increment = countTo / 100;
      const timer = setInterval(() => {
        count += increment;
        if (count >= countTo) { target.textContent = countTo + suffix; clearInterval(timer); }
        else { target.textContent = Math.floor(count) + suffix; }
      }, 20);
      obs.unobserve(target);
    });
  }, { threshold: 0.3 });
  counters.forEach(c => observer.observe(c));
}

/* ============================================================
   CASE STUDY FILTER TABS
   ============================================================ */
function initCaseStudyTabs() {
  const tabBtns = document.querySelectorAll('.case-tab-btn');
  const caseCards = document.querySelectorAll('.case-card');
  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const filter = btn.dataset.filter;
      tabBtns.forEach(b => { b.classList.remove('bg-sky-500', 'text-white', 'shadow-lg', 'shadow-sky-500/20'); b.classList.add('tab-inactive'); });
      btn.classList.add('bg-sky-500', 'text-white', 'shadow-lg', 'shadow-sky-500/20');
      btn.classList.remove('tab-inactive');
      caseCards.forEach(card => {
        if (filter === 'all' || card.dataset.category === filter) card.classList.remove('hidden');
        else card.classList.add('hidden');
      });
    });
  });
}

/* ============================================================
   MOBILE DRAWER MENU
   ============================================================ */
function initMobileMenu() {
  const menuBtn = document.getElementById('mobile-menu-btn');
  const menuDrawer = document.getElementById('mobile-menu-drawer');
  const closeBtn = document.getElementById('mobile-menu-close');
  const navLinks = document.querySelectorAll('.mobile-nav-link');
  if (!menuBtn || !menuDrawer) return;
  menuBtn.addEventListener('click', () => menuDrawer.classList.remove('translate-x-full'));
  if (closeBtn) closeBtn.addEventListener('click', () => menuDrawer.classList.add('translate-x-full'));
  navLinks.forEach(link => link.addEventListener('click', () => menuDrawer.classList.add('translate-x-full')));
}
/* ============================================================
   HERO 3D TILT EFFECT
   ============================================================ */
function initHero3DTilt() {
  const card = document.getElementById('hero-3d-card');
  if (!card) return;

  const img = card.querySelector('img');
  
  // Create reflective shine overlay
  const shine = document.createElement('div');
  shine.className = 'absolute inset-0 bg-gradient-to-tr from-white/0 via-white/10 to-white/0 opacity-0 pointer-events-none z-30 transition-opacity duration-300';
  card.appendChild(shine);

  card.addEventListener('mousemove', (e) => {
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    
    const centerX = rect.width / 2;
    const centerY = rect.height / 2;
    
    // Max rotation 12 degrees
    const rotateX = ((centerY - y) / centerY) * 12;
    const rotateY = ((x - centerX) / centerX) * 12;
    
    card.style.transition = 'transform 0.1s ease-out';
    card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
    
    if (img) {
      // Parallax effect: image moves slightly in the opposite direction
      const translateImgX = ((x - centerX) / centerX) * -6;
      const translateImgY = ((y - centerY) / centerY) * -6;
      img.style.transition = 'transform 0.1s ease-out';
      img.style.transform = `scale(1.05) translate3d(${translateImgX}px, ${translateImgY}px, 0)`;
    }
    
    // Move shine reflection overlay
    const shineX = (x / rect.width) * 100;
    const shineY = (y / rect.height) * 100;
    shine.style.background = `radial-gradient(circle at ${shineX}% ${shineY}%, rgba(255,255,255,0.18) 0%, rgba(255,255,255,0) 70%)`;
    shine.style.opacity = '1';
  });

  card.addEventListener('mouseleave', () => {
    card.style.transition = 'transform 0.5s ease-out';
    card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
    
    if (img) {
      img.style.transition = 'transform 0.5s ease-out';
      img.style.transform = 'scale(1.05) translate3d(0, 0, 0)';
    }
    
    shine.style.transition = 'opacity 0.5s ease-out';
    shine.style.opacity = '0';
  });
}
