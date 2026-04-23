<?php
/*
  Template Name: Service — Drywall & Finishing
*/

get_header(); ?>


<!-- ============================================================
     HERO
     ============================================================ -->
<section class="relative overflow-hidden" style="background-color: #162525; min-height: 72vh; display: flex; align-items: flex-end;">

  <div class="absolute inset-0 z-0">
    <div class="w-full h-full"
         style="background-image: url('<?php echo get_theme_file_uri('/images/services/drywall-hero.jpg'); ?>'); background-size: cover; background-position: center;">
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
      <span style="color: #7fa89e;">Drywall & Finishing</span>
    </div>

    <div class="max-w-3xl">

      <!-- Number + badge -->
      <div class="flex items-center gap-3 mb-5">
        <span class="font-bold text-5xl leading-none"
              style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; opacity: 0.35;">05</span>
        <div class="h-px flex-1 max-w-xs"
             style="background: linear-gradient(to right, rgba(42,157,147,0.5), transparent);"></div>
        <div class="inline-flex items-center gap-2 rounded-full px-3 py-1"
             style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15)); border: 1px solid rgba(42,157,147,0.35);">
          <span class="w-1.5 h-1.5 rounded-full"
                style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
          <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Core Volume Trade</span>
        </div>
      </div>

      <h1 class="text-4xl sm:text-5xl xl:text-6xl font-bold text-white leading-[1.05] tracking-tight mb-6">
        Drywall &
        <span style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"> Finishing.</span>
      </h1>

      <p class="text-lg leading-relaxed mb-6 max-w-2xl" style="color: #b8d4ce;">
        All phases self performed hanging, taping, mudding, and patching by dedicated crews that do not rotate to other trades. Fire rated and moisture resistant assemblies. Smooth walls only. No textures.
      </p>

      <!-- Discipline callout -->
      <div class="inline-flex items-start gap-3 rounded-xl px-5 py-3.5 mb-8"
           style="background: rgba(42,157,147,0.1); border: 1px solid rgba(42,157,147,0.25);">
        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
        </svg>
        <p class="text-sm" style="color: #b8d4ce;">
          <strong class="text-white">480 sheets per week · 2 person crew.</strong> Dedicated hanging, taping, and mudding crews never mixed with other trades.
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
     OVERVIEW + CAPACITY STATS
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
          All Phases. Self Performed. Smooth Finish Only.
        </h2>
        <p class="text-base leading-relaxed mb-4" style="color: #585858;">
          Imvera Group self performs all phases of commercial drywall installation hanging, taping, mudding, and patching with dedicated crews that do not rotate to other trades. This discipline is what produces a consistent, inspection-ready finish on every project.
        </p>
        <p class="text-base leading-relaxed" style="color: #585858;">
          We install fire rated and moisture resistant assemblies for commercial interior environments across retail, healthcare, restaurant, office, and light industrial projects. Our finishing standard is smooth no textures which is the specification that commercial GC partners and institutional clients require for painted commercial interiors.
        </p>
      </div>

      <!-- Capacity stats -->
      <div class="grid grid-cols-2 gap-4">
        <?php
        $stats = [
          ['value' => '480',    'unit' => 'sheets/wk', 'label' => 'Weekly Output',  'sub' => '2-person crew'],
          ['value' => '80',     'unit' => 'sheets/day', 'label' => 'Daily Output',   'sub' => 'Per 8-hour shift'],
          ['value' => 'Smooth', 'unit' => '',            'label' => 'Finish Type',    'sub' => 'No textures — ever'],
          ['value' => '1yr',    'unit' => '',            'label' => 'Warranty',       'sub' => 'All completed installations'],
        ];
        foreach ($stats as $s) : ?>
          <div class="bg-white rounded-xl p-6" style="border: 1px solid #dde8e5;">
            <div class="w-6 h-0.5 mb-3 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></div>
            <p class="font-bold leading-none mb-1"
               style="font-size: <?php echo strlen($s['value']) > 3 ? '1.5rem' : '2.25rem'; ?>; background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
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
     EXECUTION PHASES — dark
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #162525;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="flex items-center gap-3 mb-4">
      <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">How We Work</span>
      <div class="flex-1 max-w-xs h-px" style="background: linear-gradient(to right, rgba(42,157,147,0.5), transparent);"></div>
    </div>
    <h2 class="text-3xl sm:text-4xl font-bold text-white leading-tight mb-10">
      Four Phases. All Self-Performed.
    </h2>

    <!-- Phases — horizontal flow on desktop -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-10">
      <?php
      $phases = [
        [
          'num'   => '01',
          'title' => 'Hanging',
          'desc'  => 'Fire rated and moisture-resistant drywall installed to spec correct board type, correct orientation, correct fastener pattern. No shortcuts on the substrate.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>',
        ],
        [
          'num'   => '02',
          'title' => 'Taping',
          'desc'  => 'Tape applied to all seams and corners before the mudding sequence begins. Properly embedded tape is the foundation of a smooth, crack-free finished wall.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>',
        ],
        [
          'num'   => '03',
          'title' => 'Mudding',
          'desc'  => 'Multiple coat mud application with proper dry time between coats. Rushed mudding is the most common source of finish defects. Imvera crews do not rush the mud.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/>',
        ],
        [
          'num'   => '04',
          'title' => 'Patching',
          'desc'  => 'All patching completed by the same crew using the same material and technique as the original installation. Consistent finish across new work and repairs.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>',
        ],
      ];
      foreach ($phases as $i => $phase) : ?>
        <div class="rounded-xl p-6 relative overflow-hidden transition-all duration-200"
             style="background: rgba(241,246,242,0.04); border: 1px solid rgba(241,246,242,0.08);"
             onmouseover="this.style.borderColor='rgba(42,157,147,0.35)'; this.style.background='rgba(241,246,242,0.07)'"
             onmouseout="this.style.borderColor='rgba(241,246,242,0.08)'; this.style.background='rgba(241,246,242,0.04)'">
          <!-- Watermark number -->
          <span class="absolute top-3 right-4 font-bold text-4xl leading-none pointer-events-none select-none"
                style="color: rgba(241,246,242,0.05);"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
          <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4"
               style="background: rgba(42,157,147,0.12);">
            <svg class="w-5 h-5" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <?php echo $phase['icon']; ?>
            </svg>
          </div>
          <div class="w-6 h-0.5 mb-3 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></div>
          <p class="text-xs font-semibold uppercase tracking-widest mb-1" style="color: #4d7069;"><?php echo $phase['num']; ?></p>
          <h3 class="text-white font-bold text-base mb-2"><?php echo esc_html($phase['title']); ?></h3>
          <p class="text-xs leading-relaxed" style="color: #7fa89e;"><?php echo esc_html($phase['desc']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Assembly types -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
      <?php
      $assemblies = [
        ['title' => 'Fire-Rated Assemblies',          'desc' => 'Code compliant fire separation and protection for commercial interiors requiring rated wall systems.'],
        ['title' => 'Moisture-Resistant Assemblies',  'desc' => 'Kitchens, restrooms, and high humidity commercial environments where standard drywall fails.'],
        ['title' => 'Standard Commercial Drywall',    'desc' => 'Retail TI, office, healthcare, and restaurant interiors. Full scope from first board to paint ready wall.'],
      ];
      foreach ($assemblies as $a) : ?>
        <div class="rounded-xl px-5 py-4 flex items-start gap-3"
             style="background: rgba(241,246,242,0.04); border: 1px solid rgba(241,246,242,0.08);">
          <span class="w-1.5 h-1.5 rounded-full flex-shrink-0 mt-1.5"
                style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
          <div>
            <p class="text-white font-semibold text-sm mb-1"><?php echo esc_html($a['title']); ?></p>
            <p class="text-xs leading-relaxed" style="color: #7fa89e;"><?php echo esc_html($a['desc']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ============================================================
     EXECUTION STANDARD — discipline differentiator
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #fff;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-16 items-start">

      <div>
        <div class="flex items-center gap-3 mb-6">
          <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Execution Standard</span>
          <div class="flex-1 max-w-xs h-px" style="background: linear-gradient(to right, rgba(42,157,147,0.4), transparent);"></div>
        </div>
        <h2 class="text-3xl font-bold leading-tight mb-5" style="color: #162525;">
          The Differentiator Is Discipline. Not the Material.
        </h2>
        <p class="text-base leading-relaxed mb-4" style="color: #585858;">
          What separates Imvera drywall crews from the competition is not the material it is the discipline. The same drywall sheets are available to every contractor on the market. What is not common is the operational behavior that produces inspection ready walls.
        </p>
        <p class="text-base leading-relaxed italic pl-4" style="color: #585858; border-left: 4px solid #2A9D93;">
          These behaviors are rarer than GCs would expect in a fragmented subcontractor market.
        </p>
      </div>

      <!-- Discipline points -->
      <div class="flex flex-col gap-4">
        <?php
        $disciplines = [
          [
            'title' => 'Clean Tools. Maintained Between Phases.',
            'desc'  => 'Tools are cleaned and properly maintained between hanging, taping, and mudding phases. Contaminated tools produce contaminated finishes. Imvera crews know the difference.',
          ],
          [
            'title' => 'Formal Job Starts. Executed to Procedure.',
            'desc'  => 'Every job day begins with a formal start scope confirmed, materials staged, sequence set. No ad hoc improvisation on the job site.',
          ],
          [
            'title' => 'Dedicated Crews. Not Rotated Between Trades.',
            'desc'  => 'Imvera drywall crews hang, tape, and mud. They do not get pulled to frame or float ceilings. Crew continuity on a scope is what holds the finish standard.',
          ],
          [
            'title' => 'No Phones on Site. No Distractions.',
            'desc'  => 'Phone use on the job site is not permitted during active installation. The work gets the attention it requires. This is an operational rule, not a suggestion.',
          ],
        ];
        foreach ($disciplines as $d) : ?>
          <div class="flex items-start gap-4 rounded-xl p-5 transition-all duration-200"
               style="background: #F1F6F2; border: 1px solid #dde8e5;"
               onmouseover="this.style.borderColor='rgba(42,157,147,0.4)'; this.style.boxShadow='0 4px 12px rgba(42,157,147,0.07)'"
               onmouseout="this.style.borderColor='#dde8e5'; this.style.boxShadow='none'">
            <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                 style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15));">
              <svg class="w-4 h-4" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <div>
              <h3 class="font-bold text-sm mb-1.5 leading-snug" style="color: #162525;"><?php echo esc_html($d['title']); ?></h3>
              <p class="text-xs leading-relaxed" style="color: #585858;"><?php echo esc_html($d['desc']); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     PRIMARY SECTORS
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #F1F6F2;">
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
          Drywall is the backbone of commercial interior construction. Imvera's output rate and finishing standard make the difference on fast-track schedules where there is no room for rework.
        </p>
      </div>

      <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-4">
        <?php
        $sectors = [
          [
            'title' => 'Retail TI & Restaurants',
            'desc'  => 'Fast track drywall for retail tenant improvement and restaurant interiors on compressed schedules. Output rate keeps the project moving.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>',
          ],
          [
            'title' => 'Healthcare & Medical Office',
            'desc'  => 'Fire rated and moisture-resistant assemblies for healthcare buildouts with code driven wall system requirements. Infection control sequencing coordinated.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>',
          ],
          [
            'title' => 'Corporate & Mixed-Use TI',
            'desc'  => 'Office and mixed use interior buildouts where smooth, paint-ready walls are the baseline expectation. Imvera delivers it consistently at scale.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>',
          ],
          [
            'title' => 'Light Industrial & Warehouse Office',
            'desc'  => 'Office build outs within light industrial and warehouse facilities requiring efficient, compliant drywall installation on production timelines.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>',
          ],
        ];
        foreach ($sectors as $sector) : ?>
          <div class="bg-white rounded-xl p-6 transition-all duration-200"
               style="border: 1px solid #dde8e5;"
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
          Request a Drywall Scope Review.
        </h2>
        <p class="text-base leading-relaxed mb-6" style="color: #b8d4ce;">
          Imvera's dedicated drywall crews are available across the Southeast for hanging, taping, mudding, and patching on commercial interior projects. We respond within one business day.
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
          ['label' => 'Trade',         'value' => 'Drywall & Finishing'],
          ['label' => 'Phases',        'value' => 'Hanging · Taping · Mudding · Patching'],
          ['label' => 'Weekly Output', 'value' => '480 sheets (2-person crew)'],
          ['label' => 'Daily Output',  'value' => '80 sheets per 8-hour shift'],
          ['label' => 'Finish Type',   'value' => 'Smooth only no textures'],
          ['label' => 'Assemblies',    'value' => 'Fire-rated & moisture-resistant'],
          ['label' => 'Warranty',      'value' => '1 year workmanship'],
          ['label' => 'Active States', 'value' => 'GA · NC · SC · TN · TX · KY · FL'],
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