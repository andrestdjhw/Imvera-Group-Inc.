<?php
/*
  Template Name: Service — Metal Framing
*/

get_header(); ?>


<!-- ============================================================
     HERO
     ============================================================ -->
<section class="relative overflow-hidden" style="background-color: #162525; min-height: 72vh; display: flex; align-items: flex-end;">

  <div class="absolute inset-0 z-0">
    <div class="w-full h-full"
         style="background-image: url('<?php echo get_theme_file_uri('/images/services/framing-hero.jpg'); ?>'); background-size: cover; background-position: center;">
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
      <span style="color: #7fa89e;">Metal Framing</span>
    </div>

    <div class="max-w-3xl">

      <!-- Number + badge -->
      <div class="flex items-center gap-3 mb-5">
        <span class="font-bold text-5xl leading-none"
              style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; opacity: 0.35;">06</span>
        <div class="h-px flex-1 max-w-xs"
             style="background: linear-gradient(to right, rgba(42,157,147,0.5), transparent);"></div>
        <div class="inline-flex items-center gap-2 rounded-full px-3 py-1"
             style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15)); border: 1px solid rgba(42,157,147,0.35);">
          <span class="w-1.5 h-1.5 rounded-full"
                style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
          <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Foundation Scope</span>
        </div>
      </div>

      <h1 class="text-4xl sm:text-5xl xl:text-6xl font-bold text-white leading-[1.05] tracking-tight mb-6">
        Non Structural Interior
        <span style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"> Metal Framing.</span>
      </h1>

      <p class="text-lg leading-relaxed mb-6 max-w-2xl" style="color: #b8d4ce;">
        Executed from structural drawings. 16, 18, and 20 gauge steel per spec. Layouts marked and verified before framing starts. English speaking foreman on every project. Passes inspection first time.
      </p>

      <!-- Inspection callout -->
      <div class="inline-flex items-start gap-3 rounded-xl px-5 py-3.5 mb-8"
           style="background: rgba(42,157,147,0.1); border: 1px solid rgba(42,157,147,0.25);">
        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
        </svg>
        <p class="text-sm" style="color: #b8d4ce;">
          <strong class="text-white">Framing and ACT ceiling inspections passed on first submission.</strong> Pre inspection layout verification eliminates the most common reinspection cause.
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
     OVERVIEW + OPERATIONAL STATS
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
          The Foundation Every Interior Scope Depends On.
        </h2>
        <p class="text-base leading-relaxed mb-4" style="color: #585858;">
          Framing is the structural foundation of every interior scope that follows. When it is done precisely layouts marked correctly, blocking installed where required, gauge selection matched to spec every subsequent trade executes faster and cleaner.
        </p>
        <p class="text-base leading-relaxed" style="color: #585858;">
          When it is not, the delays and costs compound through the entire project. Imvera provides non structural interior metal framing executed from structural drawings with the layout precision, material quality, and inspection readiness that GC partners require to keep projects moving without reinspection delays.
        </p>
      </div>

      <!-- Operational notes grid -->
      <div class="grid grid-cols-2 gap-4">
        <?php
        $stats = [
          ['value' => '3',        'label' => 'Gauges Available',     'sub' => '16, 18, and 20 gauge steel'],
          ['value' => '✓',        'label' => 'Passes Inspection',    'sub' => 'First submission framing & ACT'],
          ['value' => 'EN',       'label' => 'English Speaking',     'sub' => 'Foreman on every project'],
          ['value' => '1yr',      'label' => 'Warranty',             'sub' => 'All completed installations'],
        ];
        foreach ($stats as $s) : ?>
          <div class="bg-white rounded-xl p-6" style="border: 1px solid #dde8e5;">
            <div class="w-6 h-0.5 mb-3 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></div>
            <p class="font-bold leading-none mb-1"
               style="font-size: 2rem; background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
              <?php echo $s['value']; ?>
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
          'title' => 'Non Structural Interior Steel Framing',
          'desc'  => '16, 18, and 20 gauge steel framing per project specification. Correct gauge selected to spec not whatever is left on the truck. Executed from structural drawings.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>',
          'highlight' => true,
        ],
        [
          'title' => 'Demising Walls & Partition Systems',
          'desc'  => 'Interior demising walls and partition framing for tenant improvement, office, retail, and healthcare environments laid out and executed to architectural drawings.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 5H4m0 0l4 4m-4-4l4-4"/>',
          'highlight' => false,
        ],
        [
          'title' => 'Blocking Installations',
          'desc'  => 'Blocking installed at all required locations for ceiling attachment, fixture mounting, and equipment anchor points per inspection specification. Not skipped, not guessed.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>',
          'highlight' => false,
        ],
        [
          'title' => 'Drawing Based Layout Coordination',
          'desc'  => 'Layouts marked and verified from structural plans before framing begins. Pre inspection verification eliminates the most common cause of framing reinspection.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>',
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
              <span class="text-xs font-semibold" style="color: #2A9D93;">Core Scope</span>
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

  </div>
</section>


<!-- ============================================================
     WHAT FAILS vs WHAT IMVERA DELIVERS — comparison section
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #fff;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="flex items-center gap-3 mb-4">
      <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">What Sets Imvera Apart</span>
      <div class="flex-1 max-w-xs h-px" style="background: linear-gradient(to right, rgba(42,157,147,0.4), transparent);"></div>
    </div>
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4 mb-10">
      <h2 class="text-3xl sm:text-4xl font-bold leading-tight max-w-xl" style="color: #162525;">
        Common Failures on Other Crews. Not on Ours.
      </h2>
      <p class="text-sm max-w-sm lg:text-right" style="color: #585858;">
        The most common framing failures in commercial construction are execution and communication failures not material failures.
      </p>
    </div>

    <!-- Side-by-side comparison -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

      <!-- Left: What fails -->
      <div class="rounded-2xl overflow-hidden" style="border: 1px solid #fecaca;">
        <div class="px-6 py-4 flex items-center gap-2"
             style="background: rgba(239,68,68,0.06); border-bottom: 1px solid #fecaca;">
          <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0"
               style="background: rgba(239,68,68,0.12);">
            <svg class="w-3.5 h-3.5" style="color: #ef4444;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </div>
          <p class="font-bold text-sm" style="color: #162525;">What fails on other crews</p>
        </div>
        <div class="divide-y" style="background: #fff; border-color: #fef2f2;">
          <?php
          $failures = [
            'Old or incorrect gauge material used on site',
            'Layouts not marked correctly before framing begins',
            'No English speaking foreman GC cannot communicate directly',
            'Missing PPE: no masks, glasses, or harness on site',
            'Blocking not installed at required locations inspection failure',
          ];
          foreach ($failures as $f) : ?>
            <div class="flex items-start gap-3 px-6 py-4" style="border-color: #fef2f2;">
              <svg class="w-4 h-4 flex-shrink-0 mt-0.5" style="color: #fca5a5;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
              </svg>
              <p class="text-sm" style="color: #585858;"><?php echo esc_html($f); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Right: What Imvera delivers -->
      <div class="rounded-2xl overflow-hidden"
           style="border: 1px solid rgba(42,157,147,0.35);">
        <div class="px-6 py-4 flex items-center gap-2"
             style="background: linear-gradient(135deg, rgba(111,192,97,0.08), rgba(42,157,147,0.08)); border-bottom: 1px solid rgba(42,157,147,0.2);">
          <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0"
               style="background: linear-gradient(135deg, rgba(111,192,97,0.2), rgba(42,157,147,0.2));">
            <svg class="w-3.5 h-3.5" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
            </svg>
          </div>
          <p class="font-bold text-sm" style="color: #162525;">What Imvera delivers</p>
        </div>
        <div class="divide-y bg-white" style="border-color: rgba(42,157,147,0.1);">
          <?php
          $delivers = [
            'Correct gauge material per spec verified before framing starts',
            'Layouts marked and verified from structural drawings before work begins',
            'English speaking foreman on every commercial project',
            'Full PPE: masks, ear protection, safety glasses, harness where required',
            'Blocking installed correctly at all required locations passes inspection first time',
          ];
          foreach ($delivers as $d) : ?>
            <div class="flex items-start gap-3 px-6 py-4" style="border-color: rgba(42,157,147,0.08);">
              <div class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                   style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15));">
                <svg class="w-3 h-3" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                </svg>
              </div>
              <p class="text-sm" style="color: #162525;"><?php echo esc_html($d); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>

    <!-- Inspection note -->
    <div class="mt-5 rounded-xl p-6 flex items-start gap-4"
         style="background: linear-gradient(135deg, rgba(111,192,97,0.06), rgba(42,157,147,0.06)); border: 1px solid rgba(42,157,147,0.2);">
      <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
      </svg>
      <div>
        <p class="font-bold text-sm mb-1" style="color: #162525;">First Submission Inspection Record</p>
        <p class="text-sm leading-relaxed" style="color: #585858;">
          Imvera framing crews regularly pass framing and ACT ceiling inspections on first submission. The most common cause of framing reinspection blocking not installed where required is eliminated by Imvera's pre inspection layout verification process.
        </p>
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
          Metal framing is the first interior trade on virtually every commercial project. Getting it right sets the schedule for everything that follows.
        </p>
      </div>

      <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-4">
        <?php
        $sectors = [
          [
            'title' => 'Retail TI & Restaurants',
            'desc'  => 'Fast framing-to-drywall handoff on retail tenant improvement and restaurant interiors. Precise layout means the trades behind framing move faster.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>',
          ],
          [
            'title' => 'Healthcare & Medical Office',
            'desc'  => 'Fire rated framing assemblies for healthcare buildouts. Code compliant layouts and blocking verified before inspection no reinspection delays on healthcare timelines.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>',
          ],
          [
            'title' => 'Light Industrial & Warehouse Office',
            'desc'  => 'Office build outs within light industrial and warehouse facilities. Fast, compliant framing on production timelines with minimal disruption to active facility operations.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>',
          ],
          [
            'title' => 'Corporate & Mixed Use TI',
            'desc'  => 'Multi floor and multi zone interior framing programs for corporate and mixed use developments. Same foreman, same standard across every floor and every phase.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>',
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
          Request a Framing Scope Review.
        </h2>
        <p class="text-base leading-relaxed mb-6" style="color: #b8d4ce;">
          Imvera's framing crews are available across the Southeast. If you have an upcoming interior framing scope where first-submission inspection and direct foreman communication matter, reach out. We respond within one business day.
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
          ['label' => 'Trade',          'value' => 'Non Structural Interior Metal Framing'],
          ['label' => 'Gauge',          'value' => '16, 18, and 20 gauge steel'],
          ['label' => 'Drawings',       'value' => 'Works from structural plans'],
          ['label' => 'Foreman',        'value' => 'English speaking on every project'],
          ['label' => 'PPE',            'value' => 'Full masks, glasses, harness'],
          ['label' => 'Inspections',    'value' => 'Passes first submission'],
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