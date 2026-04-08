<?php
/*
  Template Name: Service — ECO Grip Flooring
*/

get_header(); ?>


<!-- ============================================================
     HERO
     ============================================================ -->
<section class="relative overflow-hidden" style="background-color: #162525; min-height: 72vh; display: flex; align-items: flex-end;">

  <!-- Background image -->
  <div class="absolute inset-0 z-0">
    <div class="w-full h-full"
         style="background-image: url('<?php echo get_theme_file_uri('/images/services/eco-grip-hero.jpg'); ?>'); background-size: cover; background-position: center;">
    </div>
    <div class="absolute inset-0"
         style="background: linear-gradient(to right, rgba(22,37,37,0.97) 0%, rgba(22,37,37,0.82) 55%, rgba(22,37,37,0.45) 100%);"></div>
    <!-- Left accent strip -->
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
      <span style="color: #7fa89e;">ECO Grip Commercial Flooring</span>
    </div>

    <div class="max-w-3xl">

      <!-- Service number + badge -->
      <div class="flex items-center gap-3 mb-5">
        <span class="font-bold text-5xl leading-none"
              style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; opacity: 0.35;">01</span>
        <div class="h-px flex-1 max-w-xs"
             style="background: linear-gradient(to right, rgba(42,157,147,0.5), transparent);"></div>
        <div class="inline-flex items-center gap-2 rounded-full px-3 py-1"
             style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15)); border: 1px solid rgba(42,157,147,0.35);">
          <span class="w-1.5 h-1.5 rounded-full"
                style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
          <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Certified Installer</span>
        </div>
      </div>

      <h1 class="text-4xl sm:text-5xl xl:text-6xl font-bold text-white leading-[1.05] tracking-tight mb-6">
        ECO Grip Commercial
        <span style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"> Flooring.</span>
      </h1>

      <p class="text-lg leading-relaxed mb-6 max-w-2xl" style="color: #b8d4ce;">
        Imvera Group is a certified ECO Grip commercial flooring installer — one of a select group of contractors authorized to install this specialty flooring system for commercial food service, healthcare, and high-compliance interior environments across the Southeast.
      </p>

      <!-- Certified credential callout -->
      <div class="inline-flex items-start gap-3 rounded-xl px-5 py-3.5 mb-8"
           style="background: rgba(111,192,97,0.1); border: 1px solid rgba(111,192,97,0.25);">
        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: #6FC061;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
        </svg>
        <p class="text-sm" style="color: #b8d4ce;">
          <strong class="text-white">Certified installer status</strong> — required by leading national food service operators before awarding interior flooring contracts. Not common in the Southeast market.
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
          Request an ECO Grip Scope Review
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
     SERVICE OVERVIEW
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #F1F6F2;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-20 items-center">

      <div>
        <div class="flex items-center gap-3 mb-6">
          <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Service Overview</span>
          <div class="flex-1 max-w-xs h-px" style="background: linear-gradient(to right, rgba(42,157,147,0.5), transparent);"></div>
        </div>
        <h2 class="text-3xl sm:text-4xl font-bold leading-tight mb-5" style="color: #162525;">
          A Precision System. Not a Standard Installation.
        </h2>
        <p class="text-base leading-relaxed mb-4" style="color: #585858;">
          ECO Grip is not a standard flooring installation. It is a precision system that requires exact surface preparation, proprietary adhesive application, seam sealing, drain integration, and final finishing — executed in the correct sequence to meet food service compliance and long-term durability requirements.
        </p>
        <p class="text-base leading-relaxed" style="color: #585858;">
          Imvera's certified crews have performed this installation in commercial kitchens and food service environments across multiple states, building a process that consistently delivers inspection-ready results.
        </p>
      </div>

      <!-- Capacity stats -->
      <div class="grid grid-cols-2 gap-4">

        <?php
        $stats = [
          ['value' => '480', 'unit' => 'sq ft/day', 'label' => 'Daily Output',        'sub' => '3-person crew'],
          ['value' => '1yr',  'unit' => '',           'label' => 'Workmanship Warranty','sub' => 'All installations'],
          ['value' => '✓',    'unit' => '',           'label' => 'Drain Integration',  'sub' => 'Cuts, flanges & sealing'],
          ['value' => '✓',    'unit' => '',           'label' => 'Full Demolition',    'sub' => 'Ceramic, tile, grinding'],
        ];
        foreach ($stats as $s) : ?>
          <div class="bg-white rounded-xl p-6" style="border: 1px solid #dde8e5;">
            <div class="w-6 h-0.5 mb-3 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></div>
            <p class="font-bold leading-none mb-1"
               style="font-size: <?php echo strlen($s['value']) > 3 ? '1.75rem' : '2.25rem'; ?>; background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
              <?php echo $s['value']; ?><?php echo $s['unit'] ? '<span style="font-size:0.875rem; color:#2A9D93; -webkit-text-fill-color: #2A9D93;">' . $s['unit'] . '</span>' : ''; ?>
            </p>
            <p class="font-semibold text-sm" style="color: #162525;"><?php echo $s['label']; ?></p>
            <p class="text-xs mt-0.5" style="color: #7fa89e;"><?php echo $s['sub']; ?></p>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     INSTALLATION PROCESS — 6 Phases
     ============================================================ -->
<section class="py-16 lg:py-24" style="background-color: #162525;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="flex items-center gap-3 mb-4">
      <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Installation Process</span>
      <div class="flex-1 max-w-xs h-px" style="background: linear-gradient(to right, rgba(42,157,147,0.5), transparent);"></div>
    </div>
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4 mb-12">
      <h2 class="text-3xl sm:text-4xl font-bold text-white leading-tight max-w-xl">
        The ECO Grip Installation Process. Exact, Sequenced, Non-Negotiable.
      </h2>
      <p class="text-sm max-w-sm lg:text-right" style="color: #7fa89e;">
        Shortcuts in any phase compromise the integrity of the finished floor.
      </p>
    </div>

    <!-- Phase timeline -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

      <?php
      $phases = [
        [
          'phase' => 'Phase 1',
          'title' => 'Site Preparation',
          'desc'  => 'Existing plumbing removal. Verification that the site is clear and ready. Protection of surrounding customer-facing areas to contain dust and debris.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>',
        ],
        [
          'phase' => 'Phase 2',
          'title' => 'Demolition & Surface Prep',
          'desc'  => 'Removal of existing ceramic or tile flooring. Full grinding and leveling of the substrate. Floor left to cure before installation begins.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>',
        ],
        [
          'phase' => 'Phase 3',
          'title' => 'Layout & Adhesive Application',
          'desc'  => 'Precise floor layout marking. Sheet-by-sheet ECO Grip application with fast-grab adhesive, followed immediately by 100 lb roller compression for full bond.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>',
        ],
        [
          'phase' => 'Phase 4',
          'title' => 'Seam Sealing',
          'desc'  => 'Precision reveal cuts at all seam joints. Tape masking and proprietary seam sealer application. Tape removal before sealer sets. Full perimeter angle installation with ECO Grip-supplied hardware.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>',
        ],
        [
          'phase' => 'Phase 5',
          'title' => 'Drain Integration',
          'desc'  => 'Drain cuts, flange reveals, and waterproof flange installation. Hammer drill anchor points, sealant application for full impermeabilization, and flange hardware secured.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>',
        ],
        [
          'phase' => 'Phase 6',
          'title' => 'Reinstallation & Final Clean',
          'desc'  => 'Full reinstallation of all removed equipment: cabinets, plumbing, boiler, sinks, ice maker, pastry cases. Complete store clean and tool removal. Site returned ready for operation.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>',
        ],
      ];

      foreach ($phases as $i => $phase) : ?>
        <div class="rounded-xl p-6 relative overflow-hidden transition-all duration-200 group"
             style="background: rgba(241,246,242,0.04); border: 1px solid rgba(241,246,242,0.08);"
             onmouseover="this.style.borderColor='rgba(42,157,147,0.35)'; this.style.background='rgba(241,246,242,0.07)'"
             onmouseout="this.style.borderColor='rgba(241,246,242,0.08)'; this.style.background='rgba(241,246,242,0.04)'">

          <!-- Phase number watermark -->
          <span class="absolute top-4 right-5 font-bold text-4xl leading-none pointer-events-none select-none"
                style="color: rgba(241,246,242,0.05);"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>

          <div class="flex items-start justify-between mb-4">
            <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"
                 style="background: rgba(42,157,147,0.12);">
              <svg class="w-5 h-5" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <?php echo $phase['icon']; ?>
              </svg>
            </div>
          </div>

          <div class="w-8 h-0.5 mb-3 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></div>
          <p class="text-xs font-semibold uppercase tracking-widest mb-1" style="color: #4d7069;"><?php echo $phase['phase']; ?></p>
          <h3 class="text-white font-bold text-base mb-2 leading-snug"><?php echo esc_html($phase['title']); ?></h3>
          <p class="text-xs leading-relaxed" style="color: #7fa89e;"><?php echo esc_html($phase['desc']); ?></p>
        </div>
      <?php endforeach; ?>

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
          ECO Grip is specified for environments where floor integrity directly affects health code compliance, sanitation, and inspection outcomes.
        </p>
      </div>

      <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-4">
        <?php
        $sectors = [
          [
            'title' => 'Commercial Food Service',
            'desc'  => 'Restaurants, QSR chains, coffee concepts, and franchise rollout kitchens requiring compliance-grade flooring.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>',
          ],
          [
            'title' => 'Healthcare & Medical',
            'desc'  => 'Facilities requiring hygienic, durable, and cleanable floor systems that meet healthcare interior standards.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>',
          ],
          [
            'title' => 'Retail Food Environments',
            'desc'  => 'Specialty food retail, grab-and-go concepts, and commercial food preparation environments.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>',
          ],
          [
            'title' => 'Wet Areas & Restrooms',
            'desc'  => 'Restroom and wet-area commercial flooring applications requiring waterproofing and drain integration.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>',
          ],
        ];
        foreach ($sectors as $sector) : ?>
          <div class="rounded-xl p-6 transition-all duration-200 group"
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
     WHAT SETS IMVERA APART
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #F1F6F2;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="flex items-center gap-3 mb-4">
      <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Why Imvera</span>
      <div class="flex-1 max-w-xs h-px" style="background: linear-gradient(to right, rgba(42,157,147,0.5), transparent);"></div>
    </div>
    <h2 class="text-3xl sm:text-4xl font-bold leading-tight mb-10" style="color: #162525;">
      What Sets Imvera Apart on ECO Grip.
    </h2>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
      <?php
      $differentiators = [
        [
          'title' => 'Certified Installer Status',
          'desc'  => 'Not all commercial flooring contractors are authorized to install ECO Grip. Imvera holds certified status — one of the credentials required by leading national food service operators before awarding flooring contracts.',
          'highlight' => true,
        ],
        [
          'title' => 'Full-Scope Capability',
          'desc'  => 'Demolition, installation, drain integration, equipment reinstallation, and final clean under one contract. One crew, one schedule, one point of accountability from start to operation-ready.',
          'highlight' => false,
        ],
        [
          'title' => 'Multi-State Deployment',
          'desc'  => 'Same crew standard in every location. The ECO Grip process executed in Nashville is identical to the one executed in Atlanta or Charlotte. Geography does not change performance.',
          'highlight' => false,
        ],
        [
          'title' => 'Proven Track Record',
          'desc'  => 'National food service operators across the Southeast. Multiple states. Repeated engagement — the kind that only comes from inspection-ready results and reliable execution.',
          'highlight' => false,
        ],
        [
          'title' => 'Equipment Ownership',
          'desc'  => 'Dump trailers and enclosed trailers on-site for material transport and debris removal. No third-party logistics required. Our equipment moves when the project needs it to.',
          'highlight' => false,
        ],
        [
          'title' => 'Inspection-Ready Standard',
          'desc'  => 'Every ECO Grip installation is completed to meet food service compliance requirements. The process is designed so that inspection is not a concern — it is a confirmation.',
          'highlight' => false,
        ],
      ];
      foreach ($differentiators as $diff) : ?>
        <div class="bg-white rounded-xl p-6 transition-all duration-200"
             style="border: <?php echo $diff['highlight'] ? '1px solid rgba(111,192,97,0.4)' : '1px solid #dde8e5'; ?>; <?php echo $diff['highlight'] ? 'background: linear-gradient(135deg, rgba(111,192,97,0.04), rgba(42,157,147,0.04));' : ''; ?>"
             onmouseover="this.style.borderColor='rgba(42,157,147,0.4)'; this.style.boxShadow='0 4px 16px rgba(42,157,147,0.07)'"
             onmouseout="this.style.borderColor='<?php echo $diff['highlight'] ? 'rgba(111,192,97,0.4)' : '#dde8e5'; ?>'; this.style.boxShadow='none'">
          <?php if ($diff['highlight']) : ?>
            <div class="inline-flex items-center gap-1.5 rounded-full px-2.5 py-1 mb-3"
                 style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15)); border: 1px solid rgba(42,157,147,0.25);">
              <span class="w-1.5 h-1.5 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
              <span class="text-xs font-semibold" style="color: #2A9D93;">Key Credential</span>
            </div>
          <?php endif; ?>
          <div class="w-6 h-0.5 mb-3 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></div>
          <h3 class="font-bold text-sm mb-2 leading-snug" style="color: #162525;"><?php echo esc_html($diff['title']); ?></h3>
          <p class="text-xs leading-relaxed" style="color: #585858;"><?php echo esc_html($diff['desc']); ?></p>
        </div>
      <?php endforeach; ?>
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
          Request an ECO Grip Scope Review.
        </h2>
        <p class="text-base leading-relaxed mb-6" style="color: #b8d4ce;">
          Imvera's certified ECO Grip crews are available across the Southeast. If you have an upcoming flooring scope in a food service, healthcare, or compliance-driven environment, reach out. We respond within one business day.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="/contact-us"
             class="inline-flex items-center gap-2 font-bold px-7 py-4 rounded transition-all duration-200 text-sm"
             style="background: linear-gradient(135deg, #6FC061, #2A9D93); color: #F1F6F2;"
             onmouseover="this.style.opacity='0.88'" onmouseout="this.style.opacity='1'">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            Request an ECO Grip Scope Review
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
          ['label' => 'Trade',           'value' => 'ECO Grip Commercial Flooring'],
          ['label' => 'Installer Status','value' => 'Certified'],
          ['label' => 'Daily Output',    'value' => '480 sq ft (3-person crew)'],
          ['label' => 'Drain Integration','value' => 'Included'],
          ['label' => 'Demolition',      'value' => 'Ceramic, tile, grinding & leveling'],
          ['label' => 'Warranty',        'value' => '1 year workmanship'],
          ['label' => 'Active States',   'value' => 'GA · NC · SC · TN · TX · KY · FL'],
        ];
        foreach ($specs as $i => $spec) : ?>
          <div class="flex items-start justify-between gap-4 py-2.5 <?php echo $i < count($specs) - 1 ? 'border-b' : ''; ?>"
               style="border-color: rgba(241,246,242,0.08);">
            <span class="text-xs" style="color: #7fa89e; flex-shrink: 0;"><?php echo esc_html($spec['label']); ?></span>
            <span class="text-xs font-semibold text-right" style="color: #F1F6F2;"><?php echo esc_html($spec['value']); ?></span>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>

<?php get_footer();