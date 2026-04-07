<?php
/*
  Template Name: Home
*/

get_header(); ?>

<!-- ============================================================
     SECTION 01 — HERO
     ============================================================ -->
<section class="relative min-h-screen flex items-stretch bg-[#0f1c2e] overflow-hidden">

  <!-- Background image placeholder -->
  <div class="absolute inset-0 z-0">
    <div class="w-full h-full bg-[#0a1520]"
         style="background-image: url('<?php echo get_theme_file_uri('/images/hero-jobsite.jpg'); ?>'); background-size: cover; background-position: center;">
    </div>
    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#0f1c2e]/95 via-[#0f1c2e]/80 to-[#0f1c2e]/60"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28 w-full flex items-center">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-16 w-full items-center">

      <!-- Left: Headline + CTAs -->
      <div>
        <div class="inline-flex items-center gap-2 bg-[#d4a843]/15 border border-[#d4a843]/30 rounded-full px-4 py-1.5 mb-6">
          <span class="w-2 h-2 rounded-full bg-[#d4a843] animate-pulse"></span>
          <span class="text-[#d4a843] text-xs font-semibold tracking-widest uppercase">Commercial Interior Subcontractor</span>
        </div>

        <h1 class="text-4xl sm:text-5xl xl:text-6xl font-bold text-white leading-[1.05] tracking-tight mb-6">
          The Multi-Trade Interior Subcontractor Built for
          <span class="text-[#d4a843]"> Certainty.</span>
        </h1>

        <p class="text-gray-300 text-lg leading-relaxed mb-4 max-w-xl">
          Imvera Group delivers disciplined commercial interior execution across framing, drywall, flooring, ceilings, FRP, and cabinetry — with the labor stability, daily communication, and multi-state consistency that general contractors depend on.
        </p>
        <p class="text-gray-400 text-base leading-relaxed mb-8 max-w-xl">
          No surprises. No rework. No drama. Just execution that protects your schedule, passes inspections, and closes scopes cleanly.
        </p>

        <div class="flex flex-col sm:flex-row gap-3">
          <a href="/contact-us"
             class="inline-flex items-center justify-center gap-2 bg-[#d4a843] hover:bg-[#c49a38] text-[#0f1c2e] font-bold px-7 py-4 rounded transition-colors duration-200 text-sm tracking-wide">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            Request a Scope Review
          </a>
          <a href="/services"
             class="inline-flex items-center justify-center gap-2 border border-white/30 hover:border-white/60 text-white font-semibold px-7 py-4 rounded transition-colors duration-200 text-sm tracking-wide hover:bg-white/5">
            Explore Our Services
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Right: Inline Contact Form -->
      <div class="bg-white/[0.04] backdrop-blur-sm border border-white/10 rounded-2xl p-7 lg:p-8">
        <p class="text-xs font-semibold tracking-widest text-[#d4a843] uppercase mb-1">Get a Response Within 1 Business Day</p>
        <h2 class="text-white text-xl font-bold mb-5">Send an Inquiry</h2>

        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" class="flex flex-col gap-3.5">
          <?php wp_nonce_field('imvera_inquiry', 'imvera_inquiry_nonce'); ?>
          <input type="hidden" name="action" value="imvera_inquiry">

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
            <div>
              <label class="block text-xs font-medium text-gray-400 mb-1.5">Full Name *</label>
              <input type="text" name="full_name" required
                     class="w-full bg-white/[0.06] border border-white/10 focus:border-[#d4a843]/60 rounded-lg px-4 py-3 text-white text-sm placeholder-gray-600 outline-none transition-colors duration-200"
                     placeholder="John Smith">
            </div>
            <div>
              <label class="block text-xs font-medium text-gray-400 mb-1.5">Company *</label>
              <input type="text" name="company" required
                     class="w-full bg-white/[0.06] border border-white/10 focus:border-[#d4a843]/60 rounded-lg px-4 py-3 text-white text-sm placeholder-gray-600 outline-none transition-colors duration-200"
                     placeholder="ABC Construction">
            </div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
            <div>
              <label class="block text-xs font-medium text-gray-400 mb-1.5">Phone *</label>
              <input type="tel" name="phone" required
                     class="w-full bg-white/[0.06] border border-white/10 focus:border-[#d4a843]/60 rounded-lg px-4 py-3 text-white text-sm placeholder-gray-600 outline-none transition-colors duration-200"
                     placeholder="(678) 000-0000">
            </div>
            <div>
              <label class="block text-xs font-medium text-gray-400 mb-1.5">Email *</label>
              <input type="email" name="email" required
                     class="w-full bg-white/[0.06] border border-white/10 focus:border-[#d4a843]/60 rounded-lg px-4 py-3 text-white text-sm placeholder-gray-600 outline-none transition-colors duration-200"
                     placeholder="john@company.com">
            </div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
            <div>
              <label class="block text-xs font-medium text-gray-400 mb-1.5">Service Needed</label>
              <select name="service"
                      class="w-full bg-[#0f1c2e] border border-white/10 focus:border-[#d4a843]/60 rounded-lg px-4 py-3 text-gray-300 text-sm outline-none transition-colors duration-200 appearance-none cursor-pointer">
                <option value="">Select a service…</option>
                <option value="eco-grip-flooring">ECO Grip Flooring</option>
                <option value="cabinets-countertops">Cabinets &amp; Countertops</option>
                <option value="acoustical-ceilings">Acoustical Ceilings</option>
                <option value="frp-installation">FRP Installation</option>
                <option value="drywall-finishing">Drywall &amp; Finishing</option>
                <option value="metal-framing">Metal Framing</option>
                <option value="multi-trade">Multi-Trade Package</option>
              </select>
            </div>
            <div>
              <label class="block text-xs font-medium text-gray-400 mb-1.5">State</label>
              <select name="state"
                      class="w-full bg-[#0f1c2e] border border-white/10 focus:border-[#d4a843]/60 rounded-lg px-4 py-3 text-gray-300 text-sm outline-none transition-colors duration-200 appearance-none cursor-pointer">
                <option value="">Select a state…</option>
                <option value="GA">Georgia</option>
                <option value="NC">North Carolina</option>
                <option value="SC">South Carolina</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="KY">Kentucky</option>
                <option value="FL">Florida</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>

          <div>
            <label class="block text-xs font-medium text-gray-400 mb-1.5">Message</label>
            <textarea name="message" rows="3"
                      class="w-full bg-white/[0.06] border border-white/10 focus:border-[#d4a843]/60 rounded-lg px-4 py-3 text-white text-sm placeholder-gray-600 outline-none transition-colors duration-200 resize-none"
                      placeholder="Briefly describe your project scope…"></textarea>
          </div>

          <button type="submit"
                  class="w-full bg-[#d4a843] hover:bg-[#c49a38] text-[#0f1c2e] font-bold py-3.5 rounded-lg transition-colors duration-200 text-sm tracking-wide flex items-center justify-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
            </svg>
            Send Inquiry
          </button>
        </form>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 02 — BRAND STRIP / TRUST BAR
     ============================================================ -->
<section class="bg-[#091118] border-y border-white/5">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-4 text-center lg:text-left">

      <div class="flex flex-col lg:flex-row items-center lg:items-start gap-4 lg:border-r border-white/10 lg:pr-8">
        <span class="text-4xl xl:text-5xl font-bold text-[#d4a843] leading-none flex-shrink-0">7</span>
        <div>
          <p class="text-white font-semibold text-sm leading-tight">States</p>
          <p class="text-gray-500 text-xs mt-0.5 leading-relaxed">Active Operations Across the Southeast</p>
        </div>
      </div>

      <div class="flex flex-col lg:flex-row items-center lg:items-start gap-4 lg:border-r border-white/10 lg:pr-8">
        <span class="text-4xl xl:text-5xl font-bold text-[#d4a843] leading-none flex-shrink-0">6</span>
        <div>
          <p class="text-white font-semibold text-sm leading-tight">Trades</p>
          <p class="text-gray-500 text-xs mt-0.5 leading-relaxed">Complete Interior Scope Under One Contract</p>
        </div>
      </div>

      <div class="flex flex-col lg:flex-row items-center lg:items-start gap-4 lg:border-r border-white/10 lg:pr-8">
        <span class="text-4xl xl:text-5xl font-bold text-[#d4a843] leading-none flex-shrink-0">12+</span>
        <div>
          <p class="text-white font-semibold text-sm leading-tight">Years</p>
          <p class="text-gray-500 text-xs mt-0.5 leading-relaxed">Hands-On Commercial Construction Experience</p>
        </div>
      </div>

      <div class="flex flex-col lg:flex-row items-center lg:items-start gap-4">
        <span class="text-4xl xl:text-5xl font-bold text-[#d4a843] leading-none flex-shrink-0">1</span>
        <div>
          <p class="text-white font-semibold text-sm leading-tight">Standard</p>
          <p class="text-gray-500 text-xs mt-0.5 leading-relaxed">Consistent Execution in Every Market We Operate</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 03 — ABOUT TEASER
     ============================================================ -->
<section class="bg-white py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-20 items-center">

      <!-- Image -->
      <div class="relative">
        <div class="aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
          <img src="<?php echo get_theme_file_uri('/images/about-jobsite.jpg'); ?>"
               alt="Imvera Group crew on active commercial jobsite"
               class="w-full h-full object-cover">
        </div>
        <!-- Floating badge -->
        <div class="absolute -bottom-5 -right-4 sm:-right-6 bg-[#0f1c2e] text-white px-6 py-4 rounded-xl shadow-xl">
          <p class="text-[#d4a843] text-2xl font-bold leading-none">12+</p>
          <p class="text-xs text-gray-400 mt-0.5 leading-snug">Years Commercial<br>Construction</p>
        </div>
      </div>

      <!-- Copy -->
      <div>
        <p class="text-xs font-semibold tracking-widest text-[#d4a843] uppercase mb-3">Who We Are</p>
        <h2 class="text-3xl sm:text-4xl font-bold text-[#0f1c2e] leading-tight mb-6">
          Built for GCs Who Cannot Afford Subcontractor Risk.
        </h2>
        <p class="text-gray-600 text-base leading-relaxed mb-4">
          Commercial construction runs on thin margins. GCs operating inside 6% cannot absorb inspection failures, rework events, or schedule delays caused by unreliable subcontractors.
        </p>
        <p class="text-gray-600 text-base leading-relaxed mb-4">
          Imvera Group was built to eliminate that risk. Across six commercial interior trade disciplines — all self-performed by our own dedicated crews — we deliver the execution discipline, labor stability, and communication standards that GC partners depend on across the Southeast.
        </p>
        <p class="text-gray-500 text-base leading-relaxed mb-8 italic border-l-4 border-[#d4a843] pl-4">
          We don't aim to be the loudest presence on a project. We aim to be the most reliable one.
        </p>
        <a href="/about-us"
           class="inline-flex items-center gap-2 bg-[#0f1c2e] hover:bg-[#1a2f4a] text-white font-semibold px-7 py-3.5 rounded transition-colors duration-200 text-sm">
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
     SECTION 04 — SERVICES GRID
     ============================================================ -->
<section class="bg-[#f7f5f0] py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="max-w-2xl mb-12">
      <p class="text-xs font-semibold tracking-widest text-[#d4a843] uppercase mb-3">What We Do</p>
      <h2 class="text-3xl sm:text-4xl font-bold text-[#0f1c2e] leading-tight mb-4">
        Six Trades. One Subcontractor. Zero Coordination Overhead.
      </h2>
      <p class="text-gray-600 text-base leading-relaxed">
        Every interior scope self-performed by dedicated crews under a single execution standard. Multi-trade capability under one contract means fewer vendors, less coordination, and one accountable partner for the entire interior package.
      </p>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <?php
      $services = [
        [
          'slug'  => 'eco-grip-flooring',
          'title' => 'ECO Grip Flooring',
          'desc'  => 'Certified installation for commercial kitchens, food service, and compliance-driven environments.',
          'img'   => 'service-eco-grip.jpg',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>',
        ],
        [
          'slug'  => 'cabinets-countertops',
          'title' => 'Cabinets &amp; Countertops',
          'desc'  => 'Corian and commercial casework installation to a zero-tolerance finishing standard.',
          'img'   => 'service-cabinets.jpg',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>',
        ],
        [
          'slug'  => 'acoustical-ceilings',
          'title' => 'Acoustical Ceilings',
          'desc'  => 'Armstrong and USG systems. Up to 1,400 sq ft per day. Restaurants, medical, retail.',
          'img'   => 'service-ceilings.jpg',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>',
        ],
        [
          'slug'  => 'frp-installation',
          'title' => 'FRP Installation',
          'desc'  => 'Southern Building Products FRP for kitchens, restrooms, healthcare, and retail.',
          'img'   => 'service-frp.jpg',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/>',
        ],
        [
          'slug'  => 'drywall-finishing',
          'title' => 'Drywall &amp; Finishing',
          'desc'  => 'Fire-rated and moisture-resistant assemblies. Dedicated crews. Smooth finish only.',
          'img'   => 'service-drywall.jpg',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/>',
        ],
        [
          'slug'  => 'metal-framing',
          'title' => 'Metal Framing',
          'desc'  => '16, 18, 20 gauge non-structural interior framing. Executed from drawings. Inspection-ready.',
          'img'   => 'service-framing.jpg',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>',
        ],
      ];

      foreach ($services as $service) : ?>
        <a href="/services/<?php echo esc_attr($service['slug']); ?>"
           class="group bg-white rounded-xl overflow-hidden border border-gray-100 hover:border-[#d4a843]/30 hover:shadow-lg transition-all duration-300 flex flex-col">
          <!-- Image -->
          <div class="aspect-[16/9] overflow-hidden bg-gray-200">
            <img src="<?php echo get_theme_file_uri('/images/' . $service['img']); ?>"
                 alt="<?php echo esc_attr(strip_tags($service['title'])); ?>"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </div>
          <!-- Content -->
          <div class="p-6 flex flex-col flex-1">
            <div class="flex items-start gap-3 mb-3">
              <div class="w-9 h-9 bg-[#0f1c2e]/5 group-hover:bg-[#d4a843]/10 rounded-lg flex items-center justify-center flex-shrink-0 transition-colors duration-200">
                <svg class="w-5 h-5 text-[#0f1c2e] group-hover:text-[#d4a843] transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <?php echo $service['icon']; ?>
                </svg>
              </div>
              <h3 class="font-bold text-[#0f1c2e] text-base leading-tight pt-1"><?php echo $service['title']; ?></h3>
            </div>
            <p class="text-gray-500 text-sm leading-relaxed flex-1"><?php echo $service['desc']; ?></p>
            <div class="mt-4 flex items-center gap-1.5 text-xs font-semibold text-[#d4a843] group-hover:gap-2.5 transition-all duration-200">
              View Service
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </div>
          </div>
        </a>
      <?php endforeach; ?>

    </div>

    <div class="mt-10 text-center">
      <a href="/services"
         class="inline-flex items-center gap-2 bg-[#0f1c2e] hover:bg-[#1a2f4a] text-white font-semibold px-8 py-4 rounded transition-colors duration-200 text-sm">
        View All Services
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 05 — WHY IMVERA
     ============================================================ -->
<section class="bg-[#0f1c2e] py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="max-w-2xl mb-12">
      <p class="text-xs font-semibold tracking-widest text-[#d4a843] uppercase mb-3">Why Imvera</p>
      <h2 class="text-3xl sm:text-4xl font-bold text-white leading-tight">
        Why General Contractors Choose Imvera Group.
      </h2>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-16 items-start">

      <!-- Left: Photo -->
      <div class="lg:sticky lg:top-24">
        <div class="aspect-[3/4] rounded-xl overflow-hidden bg-gray-700">
          <img src="<?php echo get_theme_file_uri('/images/why-imvera-crew.jpg'); ?>"
               alt="Imvera Group uniformed crew on active commercial jobsite"
               class="w-full h-full object-cover">
        </div>
      </div>

      <!-- Right: Why us points grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

        <?php
        $reasons = [
          [
            'title' => 'Certified ECO Grip Installer',
            'desc'  => 'One of a select group of authorized ECO Grip installers in the Southeast. Certification required by leading national food service operators.',
          ],
          [
            'title' => 'Self-Performed. No Brokered Labor.',
            'desc'  => 'Every trade executed by our own dedicated crews. No third-party labor. The same accountability standard on every project.',
          ],
          [
            'title' => 'Daily Communication & Photo Updates',
            'desc'  => 'GC partners receive daily progress reports with photo documentation. The information arrives before you ask.',
          ],
          [
            'title' => 'Multi-State. One Standard.',
            'desc'  => 'Active across 7 states. The same execution quality in Atlanta as in Charlotte as in Nashville. Geography does not change our performance.',
          ],
          [
            'title' => 'Immediate Response. No Delays.',
            'desc'  => 'We respond immediately to GC requests — local or out of state. When the work is there, we show up.',
          ],
          [
            'title' => '1-Year Workmanship Warranty',
            'desc'  => 'All completed installations are backed by a 1-year workmanship warranty. We stand behind every scope we execute.',
          ],
        ];

        foreach ($reasons as $reason) : ?>
          <div class="bg-white/[0.04] border border-white/8 rounded-xl p-5 hover:border-[#d4a843]/30 hover:bg-white/[0.06] transition-all duration-200">
            <div class="w-8 h-0.5 bg-[#d4a843] mb-3"></div>
            <h3 class="text-white font-semibold text-sm leading-snug mb-2"><?php echo esc_html($reason['title']); ?></h3>
            <p class="text-gray-400 text-xs leading-relaxed"><?php echo esc_html($reason['desc']); ?></p>
          </div>
        <?php endforeach; ?>

      </div>
    </div>

    <div class="mt-12">
      <a href="/about-us"
         class="inline-flex items-center gap-2 border border-white/20 hover:border-[#d4a843]/50 text-white hover:text-[#d4a843] font-semibold px-7 py-3.5 rounded transition-colors duration-200 text-sm">
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
<section class="bg-white py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
      <div>
        <p class="text-xs font-semibold tracking-widest text-[#d4a843] uppercase mb-3">Our Work</p>
        <h2 class="text-3xl sm:text-4xl font-bold text-[#0f1c2e] leading-tight">
          Work That Speaks for Itself.
        </h2>
        <p class="text-gray-500 text-base leading-relaxed mt-3 max-w-xl">
          Commercial interior execution across restaurants, healthcare facilities, retail TI, and franchise rollout programs throughout the Southeast.
        </p>
      </div>
      <a href="/gallery"
         class="inline-flex items-center gap-2 text-[#0f1c2e] border border-[#0f1c2e]/20 hover:border-[#d4a843] hover:text-[#d4a843] font-semibold px-6 py-3 rounded transition-colors duration-200 text-sm flex-shrink-0">
        View Full Gallery
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>

    <!-- Gallery Grid -->
    <?php
    $gallery_photos = [
      ['img' => 'gallery-eco-grip-1.jpg',  'label' => 'ECO Grip Flooring',   'sector' => 'Food Service'],
      ['img' => 'gallery-eco-grip-2.jpg',  'label' => 'ECO Grip Flooring',   'sector' => 'Commercial Kitchen'],
      ['img' => 'gallery-drywall-1.jpg',   'label' => 'Drywall',             'sector' => 'Commercial TI'],
      ['img' => 'gallery-ceilings-1.jpg',  'label' => 'Acoustical Ceilings', 'sector' => 'Armstrong System'],
      ['img' => 'gallery-frp-1.jpg',       'label' => 'FRP Installation',    'sector' => 'Commercial Kitchen'],
      ['img' => 'gallery-framing-1.jpg',   'label' => 'Metal Framing',       'sector' => 'Healthcare Buildout'],
      ['img' => 'gallery-cabinets-1.jpg',  'label' => 'Cabinets',            'sector' => 'Countertop Install'],
      ['img' => 'gallery-crew-1.jpg',      'label' => 'Imvera Crew',         'sector' => 'Full PPE / Uniforms'],
    ];
    ?>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
      <?php foreach ($gallery_photos as $i => $photo) :
        // Make first photo and 4th span 2 columns for a dynamic grid
        $span = ($i === 0 || $i === 5) ? 'col-span-2' : 'col-span-1';
      ?>
        <div class="<?php echo $span; ?> group relative aspect-square overflow-hidden rounded-lg bg-gray-200">
          <img src="<?php echo get_theme_file_uri('/images/' . $photo['img']); ?>"
               alt="<?php echo esc_attr($photo['label'] . ' — ' . $photo['sector']); ?>"
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <!-- Hover overlay -->
          <div class="absolute inset-0 bg-[#0f1c2e]/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center gap-1 p-4 text-center">
            <p class="text-white font-semibold text-sm leading-tight"><?php echo esc_html($photo['label']); ?></p>
            <p class="text-[#d4a843] text-xs"><?php echo esc_html($photo['sector']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ============================================================
     SECTION 07 — MARKETS STRIP
     ============================================================ -->
<section class="bg-[#f7f5f0] py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="max-w-2xl mb-12">
      <p class="text-xs font-semibold tracking-widest text-[#d4a843] uppercase mb-3">Where We Work</p>
      <h2 class="text-3xl sm:text-4xl font-bold text-[#0f1c2e] leading-tight">
        Active Across the Southeast's Fastest-Growing Commercial Markets.
      </h2>
    </div>

    <!-- Primary Markets Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-6">

      <?php
      $markets = [
        [
          'city'    => 'Atlanta, GA',
          'label'   => 'Pipeline Stabilizer',
          'desc'    => 'High project velocity, large GC ecosystem, continuous TI and franchise rollout cycles.',
          'href'    => '/markets-we-serve#atlanta',
        ],
        [
          'city'    => 'Charlotte, NC',
          'label'   => 'Repeat Revenue Engine',
          'desc'    => 'Financial sector TI, multifamily interiors, franchise program expansion.',
          'href'    => '/markets-we-serve#charlotte',
        ],
        [
          'city'    => 'Nashville, TN',
          'label'   => 'Healthcare & Compliance',
          'desc'    => 'Outpatient expansion, hospitality renovation, compliance-heavy interior buildouts.',
          'href'    => '/markets-we-serve#nashville',
        ],
        [
          'city'    => 'Raleigh / Triangle, NC',
          'label'   => 'Stable Buildout Environment',
          'desc'    => 'Corporate relocations, medical office growth, institutional expansion, and tech sector TI.',
          'href'    => '/markets-we-serve#raleigh',
        ],
      ];

      foreach ($markets as $market) : ?>
        <a href="<?php echo esc_attr($market['href']); ?>"
           class="group bg-white border border-gray-200 hover:border-[#d4a843]/40 rounded-xl p-6 hover:shadow-md transition-all duration-200">
          <div class="w-8 h-0.5 bg-[#d4a843] mb-4 group-hover:w-12 transition-all duration-300"></div>
          <p class="text-[#d4a843] text-xs font-semibold tracking-wide uppercase mb-1"><?php echo esc_html($market['label']); ?></p>
          <h3 class="text-[#0f1c2e] font-bold text-base mb-2 leading-snug"><?php echo esc_html($market['city']); ?></h3>
          <p class="text-gray-500 text-xs leading-relaxed"><?php echo esc_html($market['desc']); ?></p>
        </a>
      <?php endforeach; ?>

    </div>

    <!-- Also Active In -->
    <div class="flex flex-col sm:flex-row items-center gap-3 bg-[#0f1c2e]/5 border border-[#0f1c2e]/10 rounded-xl px-6 py-4">
      <p class="text-xs font-semibold text-[#0f1c2e] whitespace-nowrap">Also active in:</p>
      <div class="flex flex-wrap gap-2">
        <?php foreach (['South Carolina', 'Texas', 'Kentucky', 'Florida'] as $state) : ?>
          <span class="bg-white border border-gray-200 text-gray-600 text-xs font-medium px-3 py-1 rounded-full"><?php echo esc_html($state); ?></span>
        <?php endforeach; ?>
      </div>
      <div class="sm:ml-auto">
        <a href="/markets-we-serve"
           class="inline-flex items-center gap-1.5 text-[#d4a843] text-xs font-semibold hover:gap-2.5 transition-all duration-200 whitespace-nowrap">
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
<section class="bg-white py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 xl:gap-16">

      <!-- Sidebar -->
      <div>
        <p class="text-xs font-semibold tracking-widest text-[#d4a843] uppercase mb-3">FAQ</p>
        <h2 class="text-3xl sm:text-4xl font-bold text-[#0f1c2e] leading-tight mb-4">
          Common Questions from GC Partners.
        </h2>
        <p class="text-gray-500 text-sm leading-relaxed mb-6">
          Can't find what you're looking for? Reach out directly.
        </p>
        <a href="/contact-us"
           class="inline-flex items-center gap-2 bg-[#d4a843] hover:bg-[#c49a38] text-[#0f1c2e] font-bold px-6 py-3.5 rounded transition-colors duration-200 text-sm">
          Request a Scope Review
        </a>
      </div>

      <!-- FAQ Accordion -->
      <div class="lg:col-span-2 divide-y divide-gray-100">

        <?php
        $faqs = [
          [
            'q' => 'Do you self-perform all trades or use subcontractors?',
            'a' => 'All six of our trade disciplines are self-performed by our own dedicated crews. We do not broker work to third-party labor. This is what allows us to maintain a consistent execution standard across every project and every state.',
          ],
          [
            'q' => 'Can you handle multiple trades on the same project?',
            'a' => 'Yes. Multi-trade execution under a single contract is one of Imvera\'s core advantages. Framing, drywall, ceilings, flooring, FRP, and cabinetry can all be scoped together — one contract, one point of contact, one execution standard across the entire interior package.',
          ],
          [
            'q' => 'Are you a certified ECO Grip installer?',
            'a' => 'Yes. Imvera Group holds certified installer status for ECO Grip commercial flooring systems — one of the credentials that leading national food service operators require before awarding interior flooring contracts.',
          ],
          [
            'q' => 'What states do you operate in?',
            'a' => 'We maintain active operations across Georgia, North Carolina, South Carolina, Tennessee, Texas, Kentucky, and Florida. Our primary commercial construction focus markets are Atlanta, Charlotte, Nashville, and the Raleigh-Durham Triangle.',
          ],
          [
            'q' => 'How do you communicate with GC partners during a project?',
            'a' => 'Daily progress updates with photo documentation are sent to GC project contacts throughout every active project. Issues are reported immediately before they affect schedule. Our standard is that you receive information without having to ask for it.',
          ],
          [
            'q' => 'Do you offer a workmanship warranty?',
            'a' => 'Yes. All completed installations are backed by a 1-year workmanship warranty.',
          ],
        ];

        foreach ($faqs as $i => $faq) : ?>
          <details class="group py-5 cursor-pointer list-none" <?php echo $i === 0 ? 'open' : ''; ?>>
            <summary class="flex items-center justify-between gap-4 list-none marker:hidden [&::-webkit-details-marker]:hidden">
              <h3 class="font-semibold text-[#0f1c2e] text-sm sm:text-base leading-snug pr-2"><?php echo esc_html($faq['q']); ?></h3>
              <div class="w-6 h-6 rounded-full border border-gray-200 group-open:border-[#d4a843] group-open:bg-[#d4a843] flex items-center justify-center flex-shrink-0 transition-colors duration-200">
                <svg class="w-3 h-3 text-gray-400 group-open:text-[#0f1c2e] group-open:rotate-45 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
                </svg>
              </div>
            </summary>
            <p class="mt-3 text-gray-500 text-sm leading-relaxed max-w-2xl"><?php echo esc_html($faq['a']); ?></p>
          </details>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 09 — BOTTOM CTA
     ============================================================ -->
<section class="bg-[#0f1c2e] py-20 lg:py-28">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

    <p class="text-xs font-semibold tracking-widest text-[#d4a843] uppercase mb-4">Ready to Start?</p>
    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight mb-6">
      Your Next Interior Project Needs a Subcontractor Built for Certainty.
    </h2>
    <p class="text-gray-400 text-base sm:text-lg leading-relaxed mb-4 max-w-2xl mx-auto">
      Imvera Group works with mid-to-large general contractors, franchise rollout contractors, and commercial developers across the Southeast who need multi-trade interior execution that performs at institutional standards.
    </p>
    <p class="text-gray-500 text-sm leading-relaxed mb-10 max-w-xl mx-auto">
      If you're evaluating subcontractors for an upcoming project, managing an active rollout program, or looking to establish a recurring multi-market partnership — reach out. We respond within one business day.
    </p>

    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="/contact-us"
         class="inline-flex items-center justify-center gap-2 bg-[#d4a843] hover:bg-[#c49a38] text-[#0f1c2e] font-bold px-8 py-4 rounded transition-colors duration-200 text-sm tracking-wide">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
        </svg>
        Request a Scope Review
      </a>
      <a href="tel:6788363266"
         class="inline-flex items-center justify-center gap-2 border border-white/20 hover:border-white/50 text-white font-semibold px-8 py-4 rounded transition-colors duration-200 text-sm tracking-wide hover:bg-white/5">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
        </svg>
        Call Us: 678-836-3266
      </a>
    </div>

  </div>
</section>

<?php get_footer();