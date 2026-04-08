<?php
/*
  Template Name: Service — Acoustical Ceilings
*/

get_header(); ?>


<!-- ============================================================
     HERO
     ============================================================ -->
<section class="relative overflow-hidden" style="background-color: #162525; min-height: 72vh; display: flex; align-items: flex-end;">

  <div class="absolute inset-0 z-0">
    <div class="w-full h-full"
         style="background-image: url('<?php echo get_theme_file_uri('/images/services/acoustical-hero.jpg'); ?>'); background-size: cover; background-position: center;">
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
      <span style="color: #7fa89e;">Acoustical Ceilings</span>
    </div>

    <div class="max-w-3xl">

      <!-- Number + badge -->
      <div class="flex items-center gap-3 mb-5">
        <span class="font-bold text-5xl leading-none"
              style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; opacity: 0.35;">03</span>
        <div class="h-px flex-1 max-w-xs"
             style="background: linear-gradient(to right, rgba(42,157,147,0.5), transparent);"></div>
        <div class="inline-flex items-center gap-2 rounded-full px-3 py-1"
             style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15)); border: 1px solid rgba(42,157,147,0.35);">
          <span class="w-1.5 h-1.5 rounded-full"
                style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
          <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">High Output</span>
        </div>
      </div>

      <h1 class="text-4xl sm:text-5xl xl:text-6xl font-bold text-white leading-[1.05] tracking-tight mb-6">
        Acoustical Ceiling
        <span style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"> Installation.</span>
      </h1>

      <p class="text-lg leading-relaxed mb-6 max-w-2xl" style="color: #b8d4ce;">
        Armstrong and USG acoustical ceiling systems for commercial and institutional environments across the Southeast. 1,400 square feet per day with a two-person crew. Schedule performance that compressed commercial timelines require.
      </p>

      <!-- Output callout -->
      <div class="inline-flex items-start gap-3 rounded-xl px-5 py-3.5 mb-8"
           style="background: rgba(42,157,147,0.1); border: 1px solid rgba(42,157,147,0.25);">
        <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
        </svg>
        <p class="text-sm" style="color: #b8d4ce;">
          <strong class="text-white">1,400 sq ft per day</strong> — 2-person crew. Armstrong and USG systems. We also correct what other contractors left behind.
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
          Done Right the First Time.
        </h2>
        <p class="text-base leading-relaxed mb-4" style="color: #585858;">
          Acoustical ceiling installation sounds straightforward. In practice, it is one of the most frequently re-done ceiling scopes on commercial projects — because tile reveal cuts are executed incorrectly, grid systems are not properly leveled, or coordination with MEP rough-ins is mismanaged.
        </p>
        <p class="text-base leading-relaxed" style="color: #585858;">
          Imvera's ceiling crews are regularly called in to correct work that other contractors left behind. We do it right the first time.
        </p>
      </div>

      <!-- Stats grid -->
      <div class="grid grid-cols-2 gap-4">
        <?php
        $stats = [
          ['value' => '1,400', 'unit' => 'sq ft/day', 'label' => 'Daily Output',     'sub' => '2-person crew'],
          ['value' => '2',     'unit' => '',           'label' => 'Systems',          'sub' => 'Armstrong & USG'],
          ['value' => '✓',     'unit' => '',           'label' => 'MEP Coordination', 'sub' => 'Lighting, HVAC, full coordination'],
          ['value' => '1yr',   'unit' => '',           'label' => 'Warranty',         'sub' => 'All completed installations'],
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
          'title' => 'T-Bar Suspended Grid & Acoustical Tile',
          'desc'  => 'Standard Armstrong and USG suspended ceiling systems for commercial interiors. Clean grid layout, precise tile cuts, and level plane — every time.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>',
        ],
        [
          'title' => 'Specialty Healthcare & Institutional Systems',
          'desc'  => 'Acoustical ceiling applications for healthcare and institutional environments with compliance requirements — cleanroom-adjacent, infection-control, or high-specification acoustic performance.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>',
        ],
        [
          'title' => 'Ceiling Leveling & Re-Leveling',
          'desc'  => 'Grid systems that are out of plane — from poor original installation or building settlement — reset and re-leveled to eliminate visual defects and meet inspection standards.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>',
        ],
        [
          'title' => 'Tile Replacement & Reveal Correction',
          'desc'  => 'Perimeter tile reveal cuts done incorrectly by other contractors re-cut and reinstalled to specification. Imvera is frequently engaged to correct work left by previous ceiling crews.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>',
        ],
      ];
      foreach ($installs as $item) : ?>
        <div class="rounded-xl p-7 transition-all duration-200"
             style="background: rgba(241,246,242,0.04); border: 1px solid rgba(241,246,242,0.08);"
             onmouseover="this.style.borderColor='rgba(42,157,147,0.35)'; this.style.background='rgba(241,246,242,0.07)'"
             onmouseout="this.style.borderColor='rgba(241,246,242,0.08)'; this.style.background='rgba(241,246,242,0.04)'">
          <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-5"
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
     COMMON PROBLEMS IMVERA SOLVES — credibility section
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #fff;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-16 items-start">

      <div>
        <div class="flex items-center gap-3 mb-6">
          <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Why GCs Call Imvera</span>
          <div class="flex-1 max-w-xs h-px" style="background: linear-gradient(to right, rgba(42,157,147,0.4), transparent);"></div>
        </div>
        <h2 class="text-3xl font-bold leading-tight mb-5" style="color: #162525;">
          Common Problems Imvera Solves.
        </h2>
        <p class="text-sm leading-relaxed mb-6" style="color: #585858;">
          Acoustical ceilings are among the most commonly reworked scopes on commercial projects. The problems are predictable. Imvera's crews deal with them regularly — often brought in after another contractor has already failed.
        </p>
        <!-- Credibility statement -->
        <div class="rounded-xl p-6 relative overflow-hidden"
             style="background-color: #162525;">
          <div class="absolute inset-0 pointer-events-none"
               style="background: radial-gradient(ellipse at 90% 20%, rgba(111,192,97,0.1) 0%, transparent 55%);"></div>
          <div class="relative">
            <div class="w-8 h-0.5 mb-3 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></div>
            <p class="text-white font-bold text-base mb-2 leading-snug">We fix what others left behind.</p>
            <p class="text-xs leading-relaxed" style="color: #7fa89e;">
              Imvera's ceiling crews are regularly called in to correct deficient installations — re-cutting reveals, re-leveling grids, and coordinating MEP clearances that the original crew ignored. If a ceiling scope has already gone wrong on your project, we can reset it.
            </p>
          </div>
        </div>
      </div>

      <!-- Problems list -->
      <div class="flex flex-col gap-4">
        <?php
        $problems = [
          [
            'problem' => 'Tile reveal cuts done incorrectly',
            'solution'=> 'Imvera re-cuts and reinstalls perimeter tiles to spec. Reveal consistency is non-negotiable on a finished commercial ceiling.',
            'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>',
          ],
          [
            'problem' => 'Grid systems that are not level',
            'solution'=> 'Imvera re-levels and resets the suspended grid system to eliminate visible plane defects before tile installation begins.',
            'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>',
          ],
          [
            'problem' => 'MEP coordination failures',
            'solution'=> 'Ceiling plane interruptions caused by uncoordinated mechanical, electrical, or plumbing rough-ins. Imvera coordinates ahead of installation to prevent these conflicts.',
            'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>',
          ],
        ];
        foreach ($problems as $p) : ?>
          <div class="rounded-xl overflow-hidden" style="border: 1px solid #dde8e5;">
            <!-- Problem row -->
            <div class="flex items-start gap-3 px-5 py-4" style="background: #F1F6F2; border-bottom: 1px solid #dde8e5;">
              <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                   style="background: rgba(239,68,68,0.1);">
                <svg class="w-3.5 h-3.5" style="color: #ef4444;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <?php echo $p['icon']; ?>
                </svg>
              </div>
              <p class="font-semibold text-sm" style="color: #162525;"><?php echo esc_html($p['problem']); ?></p>
            </div>
            <!-- Solution row -->
            <div class="flex items-start gap-3 px-5 py-4 bg-white">
              <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                   style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15));">
                <svg class="w-3.5 h-3.5" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                </svg>
              </div>
              <p class="text-xs leading-relaxed" style="color: #585858;"><?php echo esc_html($p['solution']); ?></p>
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
          Acoustical ceilings appear on virtually every commercial interior scope. Imvera's output rate and correction capability make the difference on fast-track projects.
        </p>
      </div>

      <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-4">
        <?php
        $sectors = [
          [
            'title' => 'Restaurants & QSR Chains',
            'desc'  => 'Fast-track ceiling installation for restaurant and quick service restaurant projects across the Southeast. High output rate protects compressed schedules.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>',
          ],
          [
            'title' => 'Medical Offices & Healthcare',
            'desc'  => 'Specialty acoustical systems for healthcare environments with compliance and acoustic performance requirements. Coordination with MEP and infection control sequencing.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>',
          ],
          [
            'title' => 'Retail & Corporate TI',
            'desc'  => 'Fast-track ceiling installation for retail tenant improvement and corporate office buildouts. Volume output keeps interiors on schedule.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>',
          ],
          [
            'title' => 'Institutional Environments',
            'desc'  => 'Universities, government facilities, and financial sector buildouts requiring acoustical ceiling systems with institutional-grade performance and inspection-ready results.',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/>',
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
          Request an Acoustical Ceiling Scope Review.
        </h2>
        <p class="text-base leading-relaxed mb-6" style="color: #b8d4ce;">
          Whether you need a new ceiling installation on schedule or a correction of an existing scope, Imvera's ceiling crews are available across the Southeast. We respond within one business day.
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
          ['label' => 'Trade',         'value' => 'Acoustical Ceiling Installation'],
          ['label' => 'Systems',       'value' => 'Armstrong & USG'],
          ['label' => 'Daily Output',  'value' => '1,400 sq ft (2-person crew)'],
          ['label' => 'Coordination',  'value' => 'MEP, lighting & HVAC'],
          ['label' => 'Correction',    'value' => 'Re-leveling & reveal re-cuts'],
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