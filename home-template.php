<?php
/*
  Template Name: Home
*/

get_header(); ?>


<!-- ============================================================
     SECTION 01 — HERO
     ============================================================ -->
<section class="relative min-h-screen flex items-stretch overflow-hidden" style="background-color: #162525;">

  <!-- Hero slideshow styles -->
  <style>
    .ig-slide {
      position: absolute; inset: 0;
      opacity: 0;
      animation: igFade 18s infinite;
      overflow: hidden;
    }
    .ig-slide:nth-child(1) { animation-delay: 0s; }
    .ig-slide:nth-child(2) { animation-delay: 6s;  }
    .ig-slide:nth-child(3) { animation-delay: 12s; }
    @keyframes igFade {
      0%        { opacity: 0;   transform: scale(1);      }
      5%        { opacity: 1;   transform: scale(1);      }
      28%       { opacity: 1;   transform: scale(1.035);  }
      33%       { opacity: 0;   transform: scale(1.04);   }
      100%      { opacity: 0;   transform: scale(1);      }
    }

    /* Trust bar ticker */
    .ig-ticker-track {
      display: flex;
      gap: 0;
      animation: igTicker 20s linear infinite;
      width: max-content;
    }
    .ig-ticker-track:hover { animation-play-state: paused; }
    @keyframes igTicker {
      0%   { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }

    /* ============================================================
       SCROLL REVEAL
       ============================================================ */
    .ig-reveal {
      opacity: 0;
      transition: opacity 0.65s cubic-bezier(0.22, 1, 0.36, 1),
                  transform 0.65s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .ig-reveal.fade-up    { transform: translateY(36px); }
    .ig-reveal.from-left  { transform: translateX(-40px); }
    .ig-reveal.from-right { transform: translateX(40px); }
    .ig-reveal.fade-scale { transform: scale(0.96); }

    .ig-reveal.is-visible {
      opacity: 1;
      transform: none;
    }

    @media (prefers-reduced-motion: reduce) {
      .ig-reveal { transition: opacity 0.3s ease; transform: none !important; }
    }
  </style>

  <!-- Background slideshow -->
  <div class="absolute inset-0 z-0 overflow-hidden">
    <div class="ig-slide">
      <img src="/wp-content/uploads/2026/04/ImveraHero1-scaled.jpg" alt="Hero slide 1" class="w-full h-full object-cover">
    </div>
    <div class="ig-slide">
      <img src="/wp-content/uploads/2026/04/ImveraHero2-scaled.jpg" alt="Hero slide 2" class="w-full h-full object-cover">
    </div>
    <div class="ig-slide">
      <img src="/wp-content/uploads/2026/04/ImveraHero3-scaled.jpg" alt="Hero slide 3" class="w-full h-full object-cover">
    </div>
    <!-- Dark directional overlay -->
    <div class="absolute inset-0"
         style="background: linear-gradient(to right, rgba(22,37,37,0.97) 0%, rgba(22,37,37,0.85) 55%, rgba(22,37,37,0.55) 100%);"></div>
    <!-- Moss Green → Verdigris accent strip along left edge -->
    <div class="absolute inset-y-0 left-0 w-1.5"
         style="background: linear-gradient(to bottom, #6FC061, #2A9D93);"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28 w-full flex items-center">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-16 w-full items-center">

      <!-- Left: Headline + CTAs -->
      <div>
        <!-- Gradient pill badge -->
        <div class="inline-flex items-center gap-2 rounded-full px-4 py-1.5 mb-6"
             style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15)); border: 1px solid rgba(42,157,147,0.35);">
          <span class="w-2 h-2 rounded-full"
                style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
          <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Commercial Interior Subcontractor</span>
        </div>

        <h1 class="text-4xl sm:text-5xl xl:text-6xl font-bold text-white leading-[1.05] tracking-tight mb-6">
          The Multi-Trade Interior Subcontractor Built for
          <span style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"> Certainty.</span>
        </h1>

        <p class="text-base leading-relaxed mb-4 max-w-xl" style="color: #b8d4ce;">
          Imvera Group delivers disciplined commercial interior execution across framing, drywall, flooring, ceilings, FRP, and cabinetry — with the labor stability, daily communication, and multi-state consistency that general contractors depend on.
        </p>
        <p class="text-base leading-relaxed mb-8 max-w-xl" style="color: #7fa89e;">
          No surprises. No rework. No drama. Just execution that protects your schedule, passes inspections, and closes scopes cleanly.
        </p>

        <div class="flex flex-col sm:flex-row gap-3">
          <a href="/contact-us"
             class="inline-flex items-center justify-center gap-2 font-bold px-7 py-4 rounded transition-all duration-200 text-sm tracking-wide"
             style="background: linear-gradient(135deg, #6FC061, #2A9D93); color: #F1F6F2;"
             onmouseover="this.style.opacity='0.88'"
             onmouseout="this.style.opacity='1'">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            Request a Scope Review
          </a>
          <a href="/services"
             class="inline-flex items-center justify-center gap-2 font-semibold px-7 py-4 rounded transition-all duration-200 text-sm tracking-wide"
             style="border: 1px solid rgba(241,246,242,0.25); color: #F1F6F2;"
             onmouseover="this.style.borderColor='rgba(241,246,242,0.5)'; this.style.background='rgba(241,246,242,0.05)'"
             onmouseout="this.style.borderColor='rgba(241,246,242,0.25)'; this.style.background='transparent'">
            Explore Our Services
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Right: Inline Contact Form (React component) -->
      <div id="render-contact-form-here"
           data-variant="dark"
           data-title="Send an Inquiry"
           data-subtitle="Get a Response Within 1 Business Day">
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 02 — TRUST BAR
     ============================================================ -->
<section id="ig-trust-bar" style="background-color: #0f1a1a; border-top: 1px solid rgba(42,157,147,0.15); border-bottom: 1px solid rgba(42,157,147,0.15); overflow: hidden;">

  <?php
  $stats = [
    ['num' => '7',    'label' => 'States',   'desc' => 'Active Operations Across the Southeast'],
    ['num' => '6',    'label' => 'Trades',   'desc' => 'Complete Interior Scope Under One Contract'],
    ['num' => '12+',  'label' => 'Years',    'desc' => 'Hands-On Commercial Construction Experience'],
    ['num' => '1',    'label' => 'Standard', 'desc' => 'Consistent Execution in Every Market We Operate'],
    ['num' => 'OSHA', 'label' => 'Certified','desc' => 'OSHA 10 & 30 Certified Crews on Every Project'],
  ];
  ?>

  <!-- Ticker — all breakpoints -->
  <div class="py-8">
    <div class="ig-ticker-track">
      <?php
      $ticker_items = array_merge($stats, $stats);
      foreach ($ticker_items as $stat) : ?>
        <div class="flex items-center gap-4 px-10" style="border-right: 1px solid rgba(42,157,147,0.15);">
          <span class="text-4xl xl:text-5xl font-bold leading-none flex-shrink-0"
                style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
            <?php echo $stat['num']; ?>
          </span>
          <div class="whitespace-nowrap">
            <p class="font-semibold text-sm leading-tight text-white"><?php echo $stat['label']; ?></p>
            <p class="text-xs mt-0.5" style="color: #4d7069;"><?php echo $stat['desc']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

</section>


<!-- ============================================================
     SECTION 03 — ABOUT TEASER
     ============================================================ -->
<section id="ig-about-section" style="background-color: #F1F6F2;" class="py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-20 items-center">

      <div id="ig-about-left" class="relative">
        <div class="aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
          <img src="/wp-content/uploads/2026/04/WhoWeRImvera-scaled.png"
               alt="Imvera Group crew on active commercial jobsite"
               class="w-full h-full object-cover">
        </div>
        <div class="absolute -bottom-5 -right-4 sm:-right-6 px-6 py-4 rounded-xl shadow-xl"
             style="background: linear-gradient(135deg, #6FC061, #2A9D93);">
          <p class="text-white text-2xl font-bold leading-none">12+</p>
          <p class="text-xs mt-0.5 leading-snug" style="color: rgba(241,246,242,0.85);">Years Commercial<br>Construction</p>
        </div>
      </div>

      <div id="ig-about-right">
        <p class="text-xs font-semibold tracking-widest uppercase mb-3" style="color: #2A9D93;">Who We Are</p>
        <h2 class="text-3xl sm:text-4xl font-bold leading-tight mb-6" style="color: #162525;">
          Built for GCs Who Cannot Afford Subcontractor Risk.
        </h2>
        <p class="text-base leading-relaxed mb-4" style="color: #585858;">
          Commercial construction runs on thin margins. GCs operating inside 6% cannot absorb inspection failures, rework events, or schedule delays caused by unreliable subcontractors.
        </p>
        <p class="text-base leading-relaxed mb-4" style="color: #585858;">
          Imvera Group was built to eliminate that risk. Across six commercial interior trade disciplines — all self-performed by our own dedicated crews — we deliver the execution discipline, labor stability, and communication standards that GC partners depend on across the Southeast.
        </p>
        <p class="text-base leading-relaxed mb-8 italic pl-4" style="color: #585858; border-left: 4px solid #2A9D93;">
          We don't aim to be the loudest presence on a project. We aim to be the most reliable one.
        </p>
        <a href="/about-us"
           class="inline-flex items-center gap-2 font-semibold px-7 py-3.5 rounded transition-all duration-200 text-sm text-white"
           style="background-color: #162525;"
           onmouseover="this.style.backgroundColor='#2A9D93'"
           onmouseout="this.style.backgroundColor='#162525'">
          Learn About Imvera
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 04 — SERVICES CAROUSEL
     ============================================================ -->
<section class="py-20 lg:py-28" style="background-color: #fff;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div id="ig-svc-header" class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 mb-10">
      <div class="max-w-2xl">
        <p class="text-xs font-semibold tracking-widest uppercase mb-3" style="color: #2A9D93;">What We Do</p>
        <h2 class="text-3xl sm:text-4xl font-bold leading-tight mb-4" style="color: #162525;">
          Seven Trades. One Subcontractor. Zero Coordination Overhead.
        </h2>
        <p class="text-base leading-relaxed" style="color: #585858;">
          Every interior scope self-performed by dedicated crews under a single execution standard. Multi-trade capability under one contract means fewer vendors, less coordination, and one accountable partner for the entire interior package.
        </p>
      </div>
      <!-- Carousel controls -->
      <div class="flex items-center gap-2 flex-shrink-0">
        <button id="ig-svc-prev"
                class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-200"
                style="border: 1px solid #dde8e5; color: #585858; background: white;"
                onmouseover="this.style.borderColor='#2A9D93'; this.style.color='#2A9D93'"
                onmouseout="this.style.borderColor='#dde8e5'; this.style.color='#585858'"
                aria-label="Previous service">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.75 19.5L8.25 12l7.5-7.5"/>
          </svg>
        </button>
        <button id="ig-svc-next"
                class="w-10 h-10 rounded-full flex items-center justify-center transition-all duration-200"
                style="border: 1px solid #dde8e5; color: #585858; background: white;"
                onmouseover="this.style.borderColor='#2A9D93'; this.style.color='#2A9D93'"
                onmouseout="this.style.borderColor='#dde8e5'; this.style.color='#585858'"
                aria-label="Next service">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Carousel viewport -->
    <div class="overflow-hidden" id="ig-svc-viewport">
      <div class="flex gap-6 transition-transform duration-500 ease-in-out" id="ig-svc-track"
           style="will-change: transform;">

        <?php
        $services = [
          ['slug' => 'eco-grip-flooring',         'title' => 'ECO Grip Flooring',         'desc' => 'Certified installation for commercial kitchens, food service, and compliance-driven environments.',   'url' => '/wp-content/uploads/2026/06/EcoGripAfter2.jpg'],
          ['slug' => 'cabinets-countertops',       'title' => 'Cabinets &amp; Countertops', 'desc' => 'Corian and commercial casework installation to a zero-tolerance finishing standard.',                'url' => '/wp-content/uploads/2026/06/CabinetCountertopAfter-scaled.jpg'],
          ['slug' => 'acoustical-ceilings',        'title' => 'Acoustical Ceilings',        'desc' => 'Armstrong and USG systems. Up to 1,400 sq ft per day. Restaurants, medical, retail.',              'url' => '/wp-content/uploads/2026/06/AcousticalCeilingIMV-1.png'],
          ['slug' => 'frp-installation',           'title' => 'FRP Installation',           'desc' => 'Southern Building Products FRP for kitchens, restrooms, healthcare, and retail.',                    'url' => '/wp-content/uploads/2026/06/FRPInstallation2After.jpeg'],
          ['slug' => 'drywall-finishing',          'title' => 'Drywall &amp; Finishing',     'desc' => 'Fire-rated and moisture-resistant assemblies. Dedicated crews. Smooth finish only.',                 'url' => '/wp-content/uploads/2026/06/DrywallServiceBefore.jpeg'],
          ['slug' => 'metal-framing',              'title' => 'Metal Framing',              'desc' => '16, 18, 20 gauge non-structural interior framing. Executed from drawings. Inspection-ready.',        'url' => '/wp-content/uploads/2026/06/MetalFramingHome.jpeg'],
          ['slug' => 'post-construction-cleaning', 'title' => 'Post-Construction Cleaning', 'desc' => 'Final clean, punch list execution, surface detailing, and inspection-ready handoff after construction closeout.', 'url' => '/wp-content/uploads/2026/06/PostConstructionBefore-scaled.jpg'],
        ];
        foreach ($services as $service) : ?>
          <a href="/services/<?php echo esc_attr($service['slug']); ?>"
             class="ig-svc-card group bg-white rounded-xl overflow-hidden flex flex-col flex-shrink-0 transition-all duration-300"
             style="border: 1px solid #e8efed; width: calc((100% - 3rem) / 3);"
             onmouseover="this.style.borderColor='rgba(42,157,147,0.4)'; this.style.boxShadow='0 8px 24px rgba(42,157,147,0.1)'"
             onmouseout="this.style.borderColor='#e8efed'; this.style.boxShadow='none'">
            <div class="aspect-[16/9] overflow-hidden bg-gray-100">
              <?php if (!empty($service['url'])) : ?>
              <img src="<?php echo esc_url($service['url']); ?>"
                   alt="<?php echo esc_attr(strip_tags($service['title'])); ?>"
                   class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
              <?php else : ?>
              <div class="w-full h-full flex items-center justify-center"
                   style="background: linear-gradient(135deg, rgba(22,37,37,0.06), rgba(42,157,147,0.1));">
                <svg class="w-10 h-10" style="color: #2A9D93; opacity: 0.4;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                </svg>
              </div>
              <?php endif; ?>
            </div>
            <div class="p-6 flex flex-col flex-1">
              <div class="w-8 h-0.5 mb-3 rounded-full transition-all duration-300 group-hover:w-14"
                   style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></div>
              <h3 class="font-bold text-base leading-tight mb-2" style="color: #162525;"><?php echo $service['title']; ?></h3>
              <p class="text-sm leading-relaxed flex-1" style="color: #585858;"><?php echo $service['desc']; ?></p>
              <div class="mt-4 flex items-center gap-1.5 text-xs font-semibold transition-all duration-200 group-hover:gap-2.5"
                   style="color: #2A9D93;">
                View Service
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
              </div>
            </div>
          </a>
        <?php endforeach; ?>

      </div>
    </div>

    <!-- Dots -->
    <div class="flex items-center justify-center gap-2 mt-8" id="ig-svc-dots"></div>

    <div id="ig-svc-cta" class="mt-8 text-center">
      <a href="/services"
         class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded transition-all duration-200 text-sm text-white"
         style="background-color: #162525;"
         onmouseover="this.style.backgroundColor='#2A9D93'"
         onmouseout="this.style.backgroundColor='#162525'">
        View All Services
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>
  </div>
</section>

<script>
(function () {
  const track    = document.getElementById('ig-svc-track');
  const viewport = document.getElementById('ig-svc-viewport');
  const btnPrev  = document.getElementById('ig-svc-prev');
  const btnNext  = document.getElementById('ig-svc-next');
  const dotsEl   = document.getElementById('ig-svc-dots');

  const cards    = track.querySelectorAll('.ig-svc-card');
  const total    = cards.length;
  let current    = 0;
  let autoplayTimer = null;

  function visibleCount() {
    return window.innerWidth < 640 ? 1 : window.innerWidth < 1024 ? 2 : 3;
  }

  function maxIndex() {
    return total - visibleCount();
  }

  function updateWidths() {
    const vis = visibleCount();
    const gap = 24;
    cards.forEach(c => {
      c.style.width = `calc((100% - ${gap * (vis - 1)}px) / ${vis})`;
    });
  }

  function buildDots() {
    dotsEl.innerHTML = '';
    const count = maxIndex() + 1;
    for (let i = 0; i < count; i++) {
      const d = document.createElement('button');
      d.style.cssText = `width:${i === current ? '1.5rem' : '0.5rem'}; height:0.5rem; border-radius:9999px; border:none; cursor:pointer; transition:all 0.3s; background:${i === current ? '#2A9D93' : '#dde8e5'};`;
      d.setAttribute('aria-label', `Go to slide ${i + 1}`);
      d.addEventListener('click', () => { goTo(i); resetAutoplay(); });
      dotsEl.appendChild(d);
    }
  }

  function updateDots() {
    const dots = dotsEl.querySelectorAll('button');
    dots.forEach((d, i) => {
      d.style.width      = i === current ? '1.5rem' : '0.5rem';
      d.style.background = i === current ? '#2A9D93' : '#dde8e5';
    });
  }

  function goTo(index) {
    current = Math.max(0, Math.min(index, maxIndex()));
    const cardW = cards[0].getBoundingClientRect().width + 24;
    track.style.transform = `translateX(-${current * cardW}px)`;
    updateDots();
    btnPrev.style.opacity = current === 0 ? '0.35' : '1';
    btnNext.style.opacity = current >= maxIndex() ? '0.35' : '1';
  }

  /* ── Autoplay ─────────────────────────────────────────────── */
  function startAutoplay() {
    autoplayTimer = setInterval(function () {
      const next = current >= maxIndex() ? 0 : current + 1;
      goTo(next);
    }, 3500);
  }

  function stopAutoplay() {
    clearInterval(autoplayTimer);
  }

  function resetAutoplay() {
    stopAutoplay();
    startAutoplay();
  }

  /* ── Controles manuales ───────────────────────────────────── */
  btnPrev.addEventListener('click', () => { goTo(current - 1); resetAutoplay(); });
  btnNext.addEventListener('click', () => { goTo(current + 1); resetAutoplay(); });

  /* ── Pause on hover ───────────────────────────────────────── */
  viewport.addEventListener('mouseenter', stopAutoplay);
  viewport.addEventListener('mouseleave', startAutoplay);

  /* ── Touch swipe ──────────────────────────────────────────── */
  let tx = 0;
  viewport.addEventListener('touchstart', e => { tx = e.touches[0].clientX; stopAutoplay(); }, { passive: true });
  viewport.addEventListener('touchend', e => {
    const dx = e.changedTouches[0].clientX - tx;
    if (Math.abs(dx) > 40) dx < 0 ? goTo(current + 1) : goTo(current - 1);
    startAutoplay();
  });

  /* ── Init ─────────────────────────────────────────────────── */
  updateWidths();
  buildDots();
  goTo(0);
  startAutoplay();

  window.addEventListener('resize', () => {
    updateWidths();
    buildDots();
    goTo(Math.min(current, maxIndex()));
  });
})();
</script>


<!-- ============================================================
     SECTION 05 — WHY IMVERA
     ============================================================ -->
<section id="ig-why-section" class="py-20 lg:py-28" style="background-color: #162525;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div id="ig-why-heading" class="max-w-2xl mb-12">
      <p class="text-xs font-semibold tracking-widest uppercase mb-3" style="color: #2A9D93;">Why Imvera</p>
      <h2 class="text-3xl sm:text-4xl font-bold leading-tight text-white">
        Why General Contractors Choose Imvera Group.
      </h2>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-16 items-start">

      <div id="ig-why-image" class="lg:sticky lg:top-24">
        <div class="aspect-[3/4] rounded-xl overflow-hidden bg-gray-700">
          <img src="/wp-content/uploads/2026/04/ImveraGroupInc-scaled.png"
               alt="Imvera Group uniformed crew on active commercial jobsite"
               class="w-full h-full object-cover">
        </div>
      </div>

      <div id="ig-why-cards" class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <?php
        $reasons = [
          ['title' => 'Certified ECO Grip Installer',        'desc' => 'One of a select group of authorized ECO Grip installers in the Southeast. Certification required by leading national food service operators.'],
          ['title' => 'Self-Performed. No Brokered Labor.',   'desc' => 'Every trade executed by our own dedicated crews. No third-party labor. The same accountability standard on every project.'],
          ['title' => 'Daily Communication & Photo Updates',  'desc' => 'GC partners receive daily progress reports with photo documentation. The information arrives before you ask.'],
          ['title' => 'Multi-State. One Standard.',           'desc' => 'Active across 7 states. The same execution quality in Atlanta as in Charlotte as in Nashville. Geography does not change our performance.'],
          ['title' => 'Immediate Response. No Delays.',       'desc' => 'We respond immediately to GC requests — local or out of state. When the work is there, we show up.'],
          ['title' => '1-Year Workmanship Warranty',          'desc' => 'All completed installations are backed by a 1-year workmanship warranty. We stand behind every scope we execute.'],
        ];
        foreach ($reasons as $reason) : ?>
          <div class="ig-why-card rounded-xl p-5 transition-all duration-200"
               style="background: rgba(241,246,242,0.04); border: 1px solid rgba(241,246,242,0.08);"
               onmouseover="this.style.borderColor='rgba(42,157,147,0.35)'; this.style.background='rgba(241,246,242,0.06)'"
               onmouseout="this.style.borderColor='rgba(241,246,242,0.08)'; this.style.background='rgba(241,246,242,0.04)'">
            <div class="w-8 h-0.5 mb-3 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></div>
            <h3 class="font-semibold text-sm leading-snug mb-2 text-white"><?php echo esc_html($reason['title']); ?></h3>
            <p class="text-xs leading-relaxed" style="color: #7fa89e;"><?php echo esc_html($reason['desc']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div id="ig-why-cta" class="mt-12">
      <a href="/about-us"
         class="inline-flex items-center gap-2 font-semibold px-7 py-3.5 rounded transition-all duration-200 text-sm"
         style="border: 1px solid rgba(241,246,242,0.2); color: #F1F6F2;"
         onmouseover="this.style.borderColor='rgba(42,157,147,0.5)'; this.style.color='#2A9D93'"
         onmouseout="this.style.borderColor='rgba(241,246,242,0.2)'; this.style.color='#F1F6F2'">
        Learn More About Imvera
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 06 — GALLERY PREVIEW
     ============================================================ -->
<section class="py-20 lg:py-28" style="background-color: #F1F6F2;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div id="ig-gallery-header" class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
      <div>
        <p class="text-xs font-semibold tracking-widest uppercase mb-3" style="color: #2A9D93;">Our Work</p>
        <h2 class="text-3xl sm:text-4xl font-bold leading-tight" style="color: #162525;">Work That Speaks for Itself.</h2>
        <p class="text-base leading-relaxed mt-3 max-w-xl" style="color: #585858;">
          Commercial interior execution across restaurants, healthcare facilities, retail TI, and franchise rollout programs throughout the Southeast.
        </p>
      </div>
      <a href="/gallery"
         class="inline-flex items-center gap-2 font-semibold px-6 py-3 rounded transition-all duration-200 text-sm flex-shrink-0"
         style="border: 1px solid rgba(22,37,37,0.2); color: #162525;"
         onmouseover="this.style.borderColor='#2A9D93'; this.style.color='#2A9D93'"
         onmouseout="this.style.borderColor='rgba(22,37,37,0.2)'; this.style.color='#162525'">
        View Full Gallery
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>

    <?php
    $gallery_photos = [
      ['url' => '/wp-content/uploads/2026/06/Eco-Grip-Photo-2.jpg',                         'label' => 'ECO Grip Flooring',   'sector' => 'Food Service'],
      ['url' => '/wp-content/uploads/2026/06/EcoGripAfter2.jpg',                             'label' => 'ECO Grip Flooring',   'sector' => 'Commercial Kitchen'],
      ['url' => '/wp-content/uploads/2026/06/DrywallServiceBefore.jpeg',                     'label' => 'Drywall',             'sector' => 'Commercial TI'],
      ['url' => '/wp-content/uploads/2026/06/AcousticalCeilingIMV-1.png',                    'label' => 'Acoustical Ceilings', 'sector' => 'Armstrong System'],
      ['url' => '/wp-content/uploads/2026/06/FRPInstallation2After.jpeg',                    'label' => 'FRP Installation',    'sector' => 'Commercial Kitchen'],
      ['url' => '/wp-content/uploads/2026/06/MetalFramingBefore.jpeg',                      'label' => 'Metal Framing',       'sector' => 'Healthcare Buildout'],
      ['url' => '/wp-content/uploads/2026/06/Cabinet-Photo-11.jpg',                          'label' => 'Cabinets',            'sector' => 'Countertop Install'],
      ['url' => '/wp-content/uploads/2026/04/ImveraGroupCrew-scaled.jpg',                    'label' => 'Imvera Crew',         'sector' => 'Full PPE / Uniforms'],
      ['url' => '/wp-content/uploads/2026/06/CabinetCountertopAfter-scaled.jpg',             'label' => 'Cabinets',            'sector' => 'Countertop Install'],
      ['url' => '/wp-content/uploads/2026/04/ImveraInstallationCrew-scaled.jpg',             'label' => 'Imvera Crew',         'sector' => 'Full PPE / Uniforms'],
    ];
    ?>
    <div id="ig-gallery-grid" class="grid grid-cols-2 md:grid-cols-4 gap-3">
      <?php foreach ($gallery_photos as $i => $photo) :
        $span = ($i === 0 || $i === 5) ? 'col-span-2' : 'col-span-1';
      ?>
        <div class="<?php echo $span; ?> group relative overflow-hidden rounded-lg bg-gray-200"
             style="aspect-ratio: <?php echo ($i === 0 || $i === 5) ? '2/1' : '1/1'; ?>">
          <img src="<?php echo esc_url($photo['url']); ?>"
               alt="<?php echo esc_attr($photo['label'] . ' — ' . $photo['sector']); ?>"
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center gap-1 p-4 text-center"
               style="background: linear-gradient(135deg, rgba(22,37,37,0.82), rgba(42,157,147,0.65));">
            <p class="text-white font-semibold text-sm leading-tight"><?php echo esc_html($photo['label']); ?></p>
            <p class="text-xs" style="color: #b8d4ce;"><?php echo esc_html($photo['sector']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ============================================================
     SECTION 07 — MARKETS STRIP
     ============================================================ -->
<section id="ig-markets-section" class="py-20 lg:py-28" style="background-color: #fff;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div id="ig-markets-heading" class="max-w-2xl mb-12">
      <p class="text-xs font-semibold tracking-widest uppercase mb-3" style="color: #2A9D93;">Where We Work</p>
      <h2 class="text-3xl sm:text-4xl font-bold leading-tight" style="color: #162525;">
        Active Across the Southeast's Fastest-Growing Commercial Markets.
      </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-6">
      <?php
      $markets = [
        ['city' => 'Atlanta, GA',            'label' => '', 'desc' => '', 'href' => '/markets-we-serve'],
        ['city' => 'Charlotte, NC',          'label' => '', 'desc' => '', 'href' => '/markets-we-serve'],
        ['city' => 'Nashville, TN',          'label' => '', 'desc' => '', 'href' => '/markets-we-serve'],
        ['city' => 'Raleigh / Triangle, NC', 'label' => '', 'desc' => '', 'href' => '/markets-we-serve'],
      ];
      foreach ($markets as $market) : ?>
        <a href="<?php echo esc_attr($market['href']); ?>"
           class="ig-market-card group rounded-xl p-6 transition-all duration-200"
           style="background: #F1F6F2; border: 1px solid #dde8e5;"
           onmouseover="this.style.borderColor='rgba(42,157,147,0.4)'; this.style.boxShadow='0 4px 16px rgba(42,157,147,0.1)'"
           onmouseout="this.style.borderColor='#dde8e5'; this.style.boxShadow='none'">
          <div class="h-0.5 mb-4 rounded-full w-8 group-hover:w-12 transition-all duration-300"
               style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></div>
          <p class="text-xs font-semibold tracking-wide uppercase mb-1" style="color: #2A9D93;"><?php echo esc_html($market['label']); ?></p>
          <h3 class="font-bold text-base mb-2 leading-snug" style="color: #162525;"><?php echo esc_html($market['city']); ?></h3>
          <p class="text-xs leading-relaxed" style="color: #585858;"><?php echo esc_html($market['desc']); ?></p>
        </a>
      <?php endforeach; ?>
    </div>

    <div id="ig-markets-footer" class="flex flex-col sm:flex-row items-center gap-3 rounded-xl px-6 py-4"
         style="background: rgba(22,37,37,0.04); border: 1px solid rgba(22,37,37,0.08);">
      <p class="text-xs font-semibold" style="color: #162525;">Also active in:</p>
      <div class="flex flex-wrap gap-2">
        <?php foreach (['South Carolina', 'Texas', 'Kentucky', 'Florida'] as $state) : ?>
          <span class="bg-white text-xs font-medium px-3 py-1 rounded-full"
                style="border: 1px solid #dde8e5; color: #585858;"><?php echo esc_html($state); ?></span>
        <?php endforeach; ?>
      </div>
      <div class="sm:ml-auto">
        <a href="/markets-we-serve"
           class="inline-flex items-center gap-1.5 text-xs font-semibold whitespace-nowrap transition-colors duration-200"
           style="color: #2A9D93;">
          View All Markets
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>
    </div>

  </div>
</section>


<!-- ============================================================
     SECTION 08 — FAQ
     ============================================================ -->
<section id="ig-faq-section" class="py-20 lg:py-28" style="background-color: #F1F6F2;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 xl:gap-16">

      <div id="ig-faq-left">
        <p class="text-xs font-semibold tracking-widest uppercase mb-3" style="color: #2A9D93;">FAQ</p>
        <h2 class="text-3xl sm:text-4xl font-bold leading-tight mb-4" style="color: #162525;">
          Common Questions from GC Partners.
        </h2>
        <p class="text-sm leading-relaxed mb-6" style="color: #585858;">Can't find what you're looking for? Reach out directly.</p>
        <a href="/contact-us"
           class="inline-flex items-center gap-2 font-bold px-6 py-3.5 rounded transition-all duration-200 text-sm"
           style="background: linear-gradient(135deg, #6FC061, #2A9D93); color: #F1F6F2;"
           onmouseover="this.style.opacity='0.88'"
           onmouseout="this.style.opacity='1'">
          Request a Scope Review
        </a>
      </div>

      <div id="ig-faq-right" class="lg:col-span-2" style="border-top: 1px solid #dde8e5;">
        <?php
        $faqs = [
          ['q' => 'Do you self-perform all trades or use subcontractors?',    'a' => 'All six of our trade disciplines are self-performed by our own dedicated crews. We do not broker work to third-party labor. This is what allows us to maintain a consistent execution standard across every project and every state.'],
          ['q' => 'Can you handle multiple trades on the same project?',       'a' => 'Yes. Multi-trade execution under a single contract is one of Imvera\'s core advantages. Framing, drywall, ceilings, flooring, FRP, and cabinetry can all be scoped together — one contract, one point of contact, one execution standard across the entire interior package.'],
          ['q' => 'Are you a certified ECO Grip installer?',                   'a' => 'Yes. Imvera Group holds certified installer status for ECO Grip commercial flooring systems — one of the credentials that leading national food service operators require before awarding interior flooring contracts.'],
          ['q' => 'What states do you operate in?',                           'a' => 'We maintain active operations across Georgia, North Carolina, South Carolina, Tennessee, Texas, Kentucky, and Florida. Our primary commercial construction focus markets are Atlanta, Charlotte, Nashville, and the Raleigh-Durham Triangle.'],
          ['q' => 'How do you communicate with GC partners during a project?', 'a' => 'Daily progress updates with photo documentation are sent to GC project contacts throughout every active project. Issues are reported immediately before they affect schedule. Our standard is that you receive information without having to ask for it.'],
          ['q' => 'Do you offer a workmanship warranty?',                      'a' => 'Yes. All completed installations are backed by a 1-year workmanship warranty.'],
        ];
        foreach ($faqs as $i => $faq) : ?>
          <details class="group py-5 cursor-pointer" style="border-bottom: 1px solid #dde8e5;" <?php echo $i === 0 ? 'open' : ''; ?>>
            <summary class="flex items-center justify-between gap-4 list-none marker:hidden [&::-webkit-details-marker]:hidden">
              <h3 class="font-semibold text-sm sm:text-base leading-snug pr-2" style="color: #162525;"><?php echo esc_html($faq['q']); ?></h3>
              <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 transition-all duration-200"
                   style="border: 1px solid #dde8e5; background: white;">
                <svg class="w-3 h-3 group-open:rotate-45 transition-transform duration-200"
                     fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #2A9D93;">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
                </svg>
              </div>
            </summary>
            <p class="mt-3 text-sm leading-relaxed max-w-2xl" style="color: #585858;"><?php echo esc_html($faq['a']); ?></p>
          </details>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 09 — BOTTOM CTA
     ============================================================ -->
<section class="py-20 lg:py-28 relative overflow-hidden" style="background-color: #162525;">

  <div class="absolute inset-0 z-0">
    <img src="/wp-content/uploads/2026/04/ImveraHero3-scaled.jpg"
         alt=""
         aria-hidden="true"
         class="w-full h-full object-cover">
    <div class="absolute inset-0"
         style="background: linear-gradient(to right, rgba(22,37,37,0.97) 0%, rgba(22,37,37,0.88) 50%, rgba(22,37,37,0.82) 100%);"></div>
    <div class="absolute inset-y-0 left-0 w-1.5"
         style="background: linear-gradient(to bottom, #6FC061, #2A9D93);"></div>
  </div>

  <div id="ig-cta-block" class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <p class="text-xs font-semibold tracking-widest uppercase mb-4" style="color: #2A9D93;">Ready to Start?</p>
    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight mb-6">
      Your Next Interior Project Needs a Subcontractor Built for Certainty.
    </h2>
    <p class="text-base sm:text-lg leading-relaxed mb-4 max-w-2xl mx-auto" style="color: #b8d4ce;">
      Imvera Group works with mid-to-large general contractors, franchise rollout contractors, and commercial developers across the Southeast who need multi-trade interior execution that performs at institutional standards.
    </p>
    <p class="text-sm leading-relaxed mb-10 max-w-xl mx-auto" style="color: #7fa89e;">
      If you're evaluating subcontractors for an upcoming project, managing an active rollout program, or looking to establish a recurring multi-market partnership — reach out. We respond within one business day.
    </p>

    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="/contact-us"
         class="inline-flex items-center justify-center gap-2 font-bold px-8 py-4 rounded transition-all duration-200 text-sm tracking-wide"
         style="background: linear-gradient(135deg, #6FC061, #2A9D93); color: #F1F6F2;"
         onmouseover="this.style.opacity='0.88'"
         onmouseout="this.style.opacity='1'">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
        </svg>
        Request a Scope Review
      </a>
      <a href="tel:6788363266"
         class="inline-flex items-center justify-center gap-2 font-semibold px-8 py-4 rounded transition-all duration-200 text-sm tracking-wide"
         style="border: 1px solid rgba(241,246,242,0.2); color: #F1F6F2;"
         onmouseover="this.style.borderColor='rgba(42,157,147,0.5)'; this.style.background='rgba(241,246,242,0.05)'"
         onmouseout="this.style.borderColor='rgba(241,246,242,0.2)'; this.style.background='transparent'">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
        </svg>
        Call Us: 678-836-3266
      </a>
    </div>
  </div>
</section>


<!-- ============================================================
     SCROLL REVEAL — IntersectionObserver
     ============================================================ -->
<script>
(function () {

  /* ── Core observer ─────────────────────────────────────────── */
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('is-visible');
      io.unobserve(entry.target);
    });
  }, { threshold: 0.12 });

  function prep(el, type, delay) {
    if (!el) return;
    el.classList.add('ig-reveal', type);
    if (delay) el.style.transitionDelay = delay + 'ms';
    io.observe(el);
  }

  /* ── S02 — Trust Bar ───────────────────────────────────────── */
  prep(document.querySelector('#ig-trust-bar .ig-ticker-track'), 'fade-up', 0);

  /* ── S03 — About Teaser ────────────────────────────────────── */
  prep(document.getElementById('ig-about-left'),  'from-left',  0);
  prep(document.getElementById('ig-about-right'), 'from-right', 80);

  /* ── S04 — Services Carousel ───────────────────────────────── */
  prep(document.getElementById('ig-svc-header'),   'fade-up', 0);
  prep(document.getElementById('ig-svc-viewport'), 'fade-up', 140);
  prep(document.getElementById('ig-svc-dots'),     'fade-up', 220);
  prep(document.getElementById('ig-svc-cta'),      'fade-up', 280);

  /* ── S05 — Why Imvera ──────────────────────────────────────── */
  prep(document.getElementById('ig-why-heading'), 'fade-up',   0);
  prep(document.getElementById('ig-why-image'),   'from-left', 60);

  var whyCards = document.querySelectorAll('.ig-why-card');
  whyCards.forEach(function (card, i) {
    prep(card, 'fade-up', 100 + i * 80);
  });

  prep(document.getElementById('ig-why-cta'), 'fade-up', 600);

  /* ── S06 — Gallery ─────────────────────────────────────────── */
  prep(document.getElementById('ig-gallery-header'), 'fade-up',    0);
  prep(document.getElementById('ig-gallery-grid'),   'fade-scale', 120);

  /* ── S07 — Markets ─────────────────────────────────────────── */
  prep(document.getElementById('ig-markets-heading'), 'fade-up', 0);

  var marketCards = document.querySelectorAll('.ig-market-card');
  marketCards.forEach(function (card, i) {
    prep(card, 'fade-up', 80 + i * 70);
  });

  prep(document.getElementById('ig-markets-footer'), 'fade-up', 380);

  /* ── S08 — FAQ ─────────────────────────────────────────────── */
  prep(document.getElementById('ig-faq-left'),  'from-left',  0);
  prep(document.getElementById('ig-faq-right'), 'from-right', 100);

  /* ── S09 — Bottom CTA ──────────────────────────────────────── */
  prep(document.getElementById('ig-cta-block'), 'fade-up', 0);

})();
</script>

<?php get_footer();