<?php
/*
  Template Name: Service — FRP Installation
*/

get_header(); ?>


<!-- ============================================================
     HERO
     ============================================================ -->
<section class="relative overflow-hidden" style="background-color: #162525; min-height: 72vh; display: flex; align-items: flex-end;">

  <div class="absolute inset-0 z-0">
    <div class="w-full h-full"
         style="background-image: url('<?php echo get_theme_file_uri('/images/services/frp-hero.jpg'); ?>'); background-size: cover; background-position: center;">
    </div>
    <div class="absolute inset-0"
         style="background: linear-gradient(to right, rgba(22,37,37,0.97) 0%, rgba(22,37,37,0.82) 55%, rgba(22,37,37,0.45) 100%);"></div>
    <div class="absolute inset-y-0 left-0 w-1.5"
         style="background: linear-gradient(to bottom, #6FC061, #2A9D93);"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-24 w-full">

    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 mb-8 text-xs" style="color: #4d7069;">
      <a href="/services" style="color: inherit; text-decoration: none;"
         onmouseover="this.style.color='#2A9D93'" onmouseout="this.style.color='#4d7069'">Services</a>
      <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
      </svg>
      <span style="color: #7fa89e;">FRP Installation</span>
    </div>

    <div class="max-w-3xl">

      <!-- Number + badge -->
      <div class="flex items-center gap-3 mb-5">
        <span class="font-bold text-5xl leading-none"
              style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; opacity: 0.35;">04</span>
        <div class="h-px flex-1 max-w-xs"
             style="background: linear-gradient(to right, rgba(42,157,147,0.5), transparent);"></div>
        <div class="inline-flex items-center gap-2 rounded-full px-3 py-1"
             style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15)); border: 1px solid rgba(42,157,147,0.35);">
          <span class="w-1.5 h-1.5 rounded-full"
                style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
          <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Specialty · Compliance</span>
        </div>
      </div>

      <h1 class="text-4xl sm:text-5xl xl:text-6xl font-bold text-white leading-[1.05] tracking-tight mb-6">
        FRP Wall Panel
        <span style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"> Installation.</span>
      </h1>

      <p class="text-lg leading-relaxed mb-6 max-w-2xl" style="color: #b8d4ce;">
        Southern Building Products FRP systems for commercial interiors where wall surface durability, moisture resistance, and compliance are non negotiable. Installed correctly to meet health department, USDA, and facility standards.
      </p>

      <!-- Output callout -->
      <div class="inline-flex items-start gap-3 rounded-xl px-5 py-3.5 mb-8"
           style="background: rgba(42,157,147,0.1); border: 1px solid rgba(42,157,147,0.25);">
        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/>
        </svg>
        <p class="text-sm" style="color: #b8d4ce;">
          <strong class="text-white">Southern Building Products FRP · Fast Grab adhesive.</strong> 480 sq ft per day with a 3-person crew. Cove base available where specified.
        </p>
      </div>

      <div class="flex flex-col sm:flex-row gap-3">
        <a href="/contact-us"
           class="inline-flex items-center justify-center gap-2 font-bold px-7 py-4 rounded transition-all duration-200 text-sm tracking-wide"
           style="background: linear-gradient(135deg, #6FC061, #2A9D93); color: #F1F6F2;"
           onmouseover="this.style.opacity='0.88'" onmouseout="this.style.opacity='1'">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
          </svg>
          Request a Scope Review
        </a>
        <a href="/services"
           class="inline-flex items-center justify-center gap-2 font-semibold px-7 py-4 rounded transition-all duration-200 text-sm"
           style="border: 1px solid rgba(241,246,242,0.2); color: #F1F6F2;"
           onmouseover="this.style.borderColor='rgba(241,246,242,0.45)'; this.style.background='rgba(241,246,242,0.05)'"
           onmouseout="this.style.borderColor='rgba(241,246,242,0.2)'; this.style.background='transparent'">
          All Services
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     OVERVIEW + CAPACITY
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #F1F6F2;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-20 items-start">

      <div>
        <div class="flex items-center gap-3 mb-6">
          <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Service Overview</span>
          <div class="flex-1 max-w-xs h-px" style="background: linear-gradient(to right, rgba(42,157,147,0.4), transparent);"></div>
        </div>
        <h2 class="text-3xl sm:text-4xl font-bold leading-tight mb-5" style="color: #162525;">
          Compliance Critical Wall Systems. Installed Correctly.
        </h2>
        <p class="text-base leading-relaxed mb-4" style="color: #585858;">
          FRP is a critical finish system in food service, healthcare, and industrial interior applications and it must be installed correctly to meet health department, USDA, and facility compliance standards. A failed FRP installation is not a cosmetic issue. It is an inspection failure.
        </p>
        <p class="text-base leading-relaxed" style="color: #585858;">
          Imvera installs Southern Building Products FRP wall panel systems using Fast Grab adhesive for permanent, compliant bond with a three person crew capable of 480 square feet per day on the production rate that food service and healthcare schedules require.
        </p>
      </div>

      <!-- Capacity stats -->
      <div class="grid grid-cols-2 gap-4">
        <?php
        $stats = [
          ['value' => '480',  'unit' => 'sq ft/day', 'label' => 'Daily Output',     'sub' => '3-person crew'],
          ['value' => 'SBP',  'unit' => '',           'label' => 'Product',          'sub' => 'Southern Building Products'],
          ['value' => 'FG',   'unit' => '',           'label' => 'Adhesive System',  'sub' => 'Fast Grab — permanent bond'],
          ['value' => '1yr',  'unit' => '',           'label' => 'Warranty',         'sub' => 'All completed installations'],
        ];
        foreach ($stats as $s) : ?>
          <div class="bg-white rounded-xl p-6" style="border: 1px solid #dde8e5;">
            <div class="w-6 h-0.5 mb-3 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></div>
            <p class="font-bold leading-none mb-1"
               style="font-size: 2rem; background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
              <?php echo $s['value']; ?>
            </p>
            <?php if ($s['unit']) : ?>
              <p class="text-xs font-semibold mb-1" style="color: #2A9D93;"><?php echo $s['unit']; ?></p>
            <?php endif; ?>
            <p class="font-semibold text-sm" style="color: #162525;"><?php echo $s['label']; ?></p>
            <p class="text-xs mt-0.5" style="color: #7fa89e;"><?php echo $s['sub']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     WHAT WE INSTALL — dark
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #162525;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="flex items-center gap-3 mb-4">
      <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Scope of Work</span>
      <div class="flex-1 max-w-xs h-px" style="background: linear-gradient(to right, rgba(42,157,147,0.5), transparent);"></div>
    </div>
    <h2 class="text-3xl sm:text-4xl font-bold text-white leading-tight mb-10">
      What We Install.
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
      <?php
      $installs = [
        [
          'title' => 'Southern Building Products FRP Systems',
          'desc'  => 'Full surface FRP wall panel installation using Fast Grab adhesive for food service, healthcare, and retail environments. Permanent bond, compliant finish, correct sequence.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/>',
          'highlight' => true,
        ],
        [
          'title' => 'Moisture-Resistant Surface Systems',
          'desc'  => 'High regulation commercial interiors requiring cleanable, moisture resistant wall surfaces. Health department and USDA compliance driven installations in kitchens and wet areas.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>',
          'highlight' => false,
        ],
        [
          'title' => 'Cove Base Installation',
          'desc'  => 'Cove base installation where specified by the GC or facility requirements. Protects the wall-floor junction and maintains the integrity of the FRP system at the base.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>',
          'highlight' => false,
        ],
        [
          'title' => 'Wall Protection for Compliance Environments',
          'desc'  => 'FRP in restrooms, back of house corridors, and any commercial interior area requiring long term wall surface protection and maintenance free compliance.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
          'highlight' => false,
        ],
      ];
      foreach ($installs as $item) : ?>
        <div class="rounded-xl p-7 transition-all duration-200"
             style="background: rgba(241,246,242,0.04); border: 1px solid <?php echo $item['highlight'] ? 'rgba(111,192,97,0.3)' : 'rgba(241,246,242,0.08)'; ?>;"
             onmouseover="this.style.borderColor='rgba(42,157,147,0.4)'; this.style.background='rgba(241,246,242,0.07)'"
             onmouseout="this.style.borderColor='<?php echo $item['highlight'] ? 'rgba(111,192,97,0.3)' : 'rgba(241,246,242,0.08)'; ?>'; this.style.background='rgba(241,246,242,0.04)'">
          <?php if ($item['highlight']) : ?>
            <div class="inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 mb-4"
                 style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15)); border: 1px solid rgba(42,157,147,0.3);">
              <span class="w-1.5 h-1.5 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
              <span class="text-xs font-semibold" style="color: #2A9D93;">Primary System</span>
            </div>
          <?php endif; ?>
          <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4"
               style="background: rgba(42,157,147,0.12);">
            <svg class="w-5 h-5" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <?php echo $item['icon']; ?>
            </svg>
          </div>
          <div class="w-8 h-0.5 mb-3 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></div>
          <h3 class="text-white font-bold text-base mb-2 leading-snug"><?php echo esc_html($item['title']); ?></h3>
          <p class="text-xs leading-relaxed" style="color: #7fa89e;"><?php echo esc_html($item['desc']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Scope note -->
    <div class="mt-5 rounded-xl px-5 py-4 flex items-start gap-3"
         style="background: rgba(241,246,242,0.04); border: 1px solid rgba(241,246,242,0.08);">
      <svg class="w-4 h-4 flex-shrink-0 mt-0.5" style="color: #4d7069;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
      </svg>
      <p class="text-xs" style="color: #4d7069;">
        <strong class="text-white" style="-webkit-text-fill-color: white;">Scope note:</strong> Imvera installs cove base where specified. Trim moldings are not included in FRP scope.
      </p>
    </div>

  </div>
</section>


<!-- ============================================================
     PRIMARY SECTORS
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #fff;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 xl:gap-16">

      <div>
        <div class="flex items-center gap-3 mb-6">
          <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Where We Work</span>
          <div class="flex-1 max-w-xs h-px" style="background: linear-gradient(to right, rgba(42,157,147,0.4), transparent);"></div>
        </div>
        <h2 class="text-3xl font-bold leading-tight mb-4" style="color: #162525;">
          Primary Sectors.
        </h2>
        <p class="text-sm leading-relaxed" style="color: #585858;">
          FRP is specified wherever wall surface performance directly affects compliance outcomes health department inspections, USDA approval, or sanitation certification.
        </p>
      </div>

      <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-4">
        <?php
        $sectors = [
          [
            'title' => 'Commercial Kitchens & Food Service',
            'desc'  => 'Back of house wall systems for restaurants, QSR chains, and food service operators. Health department and USDA compliance driven installation.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>',
          ],
          [
            'title' => 'Restrooms — High-Traffic & Institutional',
            'desc'  => 'Restroom wall panels for retail, food service, healthcare, and institutional environments. Cleanable surface systems that hold up under constant use and cleaning cycles.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>',
          ],
          [
            'title' => 'Healthcare Facilities',
            'desc'  => 'Hygienic, cleanable wall surface systems for healthcare interiors where infection control and surface maintenance requirements drive the specification.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>',
          ],
          [
            'title' => 'Retail Wall Protection',
            'desc'  => 'FRP in retail environments where wall protection and moisture resistance are required stock rooms, prep areas, and back-of-house commercial spaces.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>',
          ],
        ];
        foreach ($sectors as $sector) : ?>
          <div class="rounded-xl p-6 transition-all duration-200"
               style="background: #F1F6F2; border: 1px solid #dde8e5;"
               onmouseover="this.style.borderColor='rgba(42,157,147,0.4)'; this.style.boxShadow='0 4px 16px rgba(42,157,147,0.08)'"
               onmouseout="this.style.borderColor='#dde8e5'; this.style.boxShadow='none'">
            <div class="w-9 h-9 rounded-lg flex items-center justify-center mb-4"
                 style="background: linear-gradient(135deg, rgba(111,192,97,0.12), rgba(42,157,147,0.12));">
              <svg class="w-4 h-4" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <?php echo $sector['icon']; ?>
              </svg>
            </div>
            <div class="w-6 h-0.5 mb-3 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></div>
            <h3 class="font-bold text-sm mb-2" style="color: #162525;"><?php echo esc_html($sector['title']); ?></h3>
            <p class="text-xs leading-relaxed" style="color: #585858;"><?php echo esc_html($sector['desc']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     BOTTOM CTA
     ============================================================ -->
<section class="py-16 lg:py-20 relative overflow-hidden" style="background-color: #162525;">
  <div class="absolute inset-0 pointer-events-none"
       style="background: radial-gradient(ellipse at 70% 50%, rgba(42,157,147,0.13) 0%, transparent 60%), radial-gradient(ellipse at 15% 75%, rgba(111,192,97,0.08) 0%, transparent 50%);"></div>

  <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

      <div>
        <p class="text-xs font-semibold tracking-widest uppercase mb-4" style="color: #2A9D93;">Ready to Scope?</p>
        <h2 class="text-3xl sm:text-4xl font-bold text-white leading-tight mb-4">
          Request an FRP Scope Review.
        </h2>
        <p class="text-base leading-relaxed mb-6" style="color: #b8d4ce;">
          Imvera's FRP crews are available across the Southeast for food service, healthcare, restroom, and retail wall panel scopes. We respond within one business day.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="/contact-us"
             class="inline-flex items-center gap-2 font-bold px-7 py-4 rounded transition-all duration-200 text-sm"
             style="background: linear-gradient(135deg, #6FC061, #2A9D93); color: #F1F6F2;"
             onmouseover="this.style.opacity='0.88'" onmouseout="this.style.opacity='1'">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            Request a Scope Review
          </a>
          <a href="tel:6788363266"
             class="inline-flex items-center gap-2 font-semibold px-7 py-4 rounded transition-all duration-200 text-sm"
             style="border: 1px solid rgba(241,246,242,0.2); color: #F1F6F2;"
             onmouseover="this.style.borderColor='rgba(42,157,147,0.5)'; this.style.background='rgba(241,246,242,0.05)'"
             onmouseout="this.style.borderColor='rgba(241,246,242,0.2)'; this.style.background='transparent'">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            678-836-3266
          </a>
        </div>
      </div>

      <!-- Quick spec card -->
      <div class="rounded-2xl p-7" style="background: rgba(241,246,242,0.05); border: 1px solid rgba(241,246,242,0.1);">
        <p class="text-xs font-semibold tracking-widest uppercase mb-4" style="color: #2A9D93;">Quick Specs</p>
        <?php
        $specs = [
          ['label' => 'Trade',          'value' => 'FRP Wall Panel Installation'],
          ['label' => 'Product',        'value' => 'Southern Building Products FRP'],
          ['label' => 'Adhesive',       'value' => 'Fast Grab system'],
          ['label' => 'Daily Output',   'value' => '480 sq ft (3-person crew)'],
          ['label' => 'Cove Base',      'value' => 'Available where specified'],
          ['label' => 'Warranty',       'value' => '1 year workmanship'],
          ['label' => 'Active States',  'value' => 'GA · NC · SC · TN · TX · KY · FL'],
        ];
        foreach ($specs as $i => $spec) : ?>
          <div class="flex items-start justify-between gap-4 py-2.5 <?php echo $i < count($specs) - 1 ? 'border-b' : ''; ?>"
               style="border-color: rgba(241,246,242,0.08);">
            <span class="text-xs flex-shrink-0" style="color: #7fa89e;"><?php echo esc_html($spec['label']); ?></span>
            <span class="text-xs font-semibold text-right" style="color: #F1F6F2;"><?php echo esc_html($spec['value']); ?></span>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>

<?php get_footer();