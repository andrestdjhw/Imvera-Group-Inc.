<?php
/*
  Template Name: Service — Post-Construction Cleaning
*/

get_header(); ?>

<?php
/* ── Image URLs ───────────────────────────────────────────────
 * Paste URLs from: WP Admin → Media → click image → Copy URL
 * ─────────────────────────────────────────────────────────── */
$img_hero       = '/wp-content/uploads/2026/04/ImveraHero3-scaled.jpg'; // Hero background
$img_phases     = '/wp-content/uploads/2026/06/PostConstructionAfter-scaled.jpg'; // Phase section image (right column)
$img_cta        = '/wp-content/uploads/2026/04/ImveraHero1-scaled.jpg'; // Bottom CTA background (optional)
?>


<!-- ============================================================
     HERO
     ============================================================ -->
<section class="relative overflow-hidden" style="min-height: 52vh; background-color: #162525;">

  <?php if ($img_hero) : ?>
  <div class="absolute inset-0 z-0">
    <img src="<?php echo esc_url($img_hero); ?>" alt="" aria-hidden="true" class="w-full h-full object-cover">
    <div class="absolute inset-0"
         style="background: linear-gradient(to right, rgba(22,37,37,0.97) 0%, rgba(22,37,37,0.88) 55%, rgba(22,37,37,0.65) 100%);"></div>
  </div>
  <?php else : ?>
  <div class="absolute inset-0 pointer-events-none"
       style="background: radial-gradient(ellipse at 75% 50%, rgba(42,157,147,0.1) 0%, transparent 60%);"></div>
  <?php endif; ?>

  <div class="absolute inset-y-0 left-0 w-1.5"
       style="background: linear-gradient(to bottom, #6FC061, #2A9D93);"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-end pb-14 lg:pb-20"
       style="min-height: 52vh; padding-top: 7rem;">

    <div class="flex items-center gap-3 mb-4">
      <a href="/services"
         class="flex items-center gap-1.5 text-xs font-semibold transition-colors duration-200"
         style="color: #7fa89e;"
         onmouseover="this.style.color='#F1F6F2'"
         onmouseout="this.style.color='#7fa89e'">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.75 19.5L8.25 12l7.5-7.5"/>
        </svg>
        All Services
      </a>
      <span style="color: rgba(241,246,242,0.2);">/</span>
      <span class="text-xs font-semibold" style="color: #2A9D93;">Post-Construction Cleaning</span>
    </div>

    <div class="inline-flex items-center gap-2 rounded-full px-4 py-1.5 mb-5 self-start"
         style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15)); border: 1px solid rgba(42,157,147,0.35);">
      <span class="w-2 h-2 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
      <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Commercial Interior Service</span>
    </div>

    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-[1.05] tracking-tight mb-5 max-w-3xl">
      Post-Construction
      <span style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"> Cleaning.</span>
    </h1>

    <p class="text-base leading-relaxed max-w-xl mb-8" style="color: #b8d4ce;">
      Final clean, punch list execution, surface detailing, and inspection-ready handoff — the last step before your GC closes out the project and hands keys to the owner.
    </p>

    <div class="flex flex-col sm:flex-row gap-3">
      <a href="/contact-us"
         class="inline-flex items-center justify-center gap-2 font-bold px-7 py-3.5 rounded transition-all duration-200 text-sm tracking-wide self-start"
         style="background: linear-gradient(135deg, #6FC061, #2A9D93); color: #F1F6F2;"
         onmouseover="this.style.opacity='0.88'"
         onmouseout="this.style.opacity='1'">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
        </svg>
        Request a Scope Review
      </a>
      <a href="tel:6788363266"
         class="inline-flex items-center justify-center gap-2 font-semibold px-7 py-3.5 rounded transition-all duration-200 text-sm self-start"
         style="border: 1px solid rgba(241,246,242,0.25); color: #F1F6F2;"
         onmouseover="this.style.borderColor='rgba(241,246,242,0.5)'; this.style.background='rgba(241,246,242,0.05)'"
         onmouseout="this.style.borderColor='rgba(241,246,242,0.25)'; this.style.background='transparent'">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
        </svg>
        678-836-3266
      </a>
    </div>

  </div>
</section>


<!-- ============================================================
     SCOPE OVERVIEW — 4 STATS
     ============================================================ -->
<section style="background-color: #0f1a1a; border-bottom: 1px solid rgba(42,157,147,0.15);">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-4">
      <?php
      $stats = [
        ['num' => '1-Day',  'label' => 'Turnaround',      'desc' => 'Fast mobilization on closeout schedule'],
        ['num' => '100%',   'label' => 'Self-Performed',   'desc' => 'Our own crews — no third-party labor'],
        ['num' => 'Zero',   'label' => 'Rework',           'desc' => 'Inspection-ready on first submission'],
        ['num' => '1-Year', 'label' => 'Warranty',         'desc' => 'Workmanship warranty on all scopes'],
      ];
      foreach ($stats as $i => $stat) :
        $is_last = $i === count($stats) - 1;
      ?>
        <div class="flex flex-row items-start gap-4"
             style="<?php echo !$is_last ? 'border-right: 1px solid rgba(42,157,147,0.15); padding-right: 1.5rem;' : ''; ?>">
          <span class="text-2xl lg:text-3xl font-bold leading-none flex-shrink-0"
                style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
            <?php echo $stat['num']; ?>
          </span>
          <div>
            <p class="font-semibold text-sm leading-tight text-white"><?php echo $stat['label']; ?></p>
            <p class="text-xs mt-0.5 leading-relaxed" style="color: #4d7069;"><?php echo $stat['desc']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ============================================================
     WHAT WE DO + WHAT'S INCLUDED
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #F1F6F2;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-20 items-start">

      <!-- Left: description + scope list -->
      <div>
        <p class="text-xs font-semibold tracking-widest uppercase mb-3" style="color: #2A9D93;">What We Do</p>
        <h2 class="text-3xl sm:text-4xl font-bold leading-tight mb-6" style="color: #162525;">
          The Last Trade on the Job.<br>The One That Matters for Handoff.
        </h2>
        <p class="text-base leading-relaxed mb-4" style="color: #585858;">
          Post-construction cleaning is the final execution before an owner walks the space. Drywall dust, adhesive residue, caulk smears, screw shavings, and construction debris left behind by other trades — Imvera cleans it all to a white-glove commercial standard.
        </p>
        <p class="text-base leading-relaxed mb-8" style="color: #585858;">
          We don't just wipe surfaces. We execute a structured clean sequence that covers every trade interface — floors, walls, ceilings, fixtures, windows, and mechanical covers — leaving the space ready for inspection and owner walkthrough.
        </p>

        <p class="text-xs font-semibold tracking-widest uppercase mb-4" style="color: #2A9D93;">Scope Includes</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <?php
          $scope = [
            'Rough clean — debris removal and initial sweep',
            'Final clean — all surfaces, floors, and fixtures',
            'Window and glass cleaning — interior side',
            'Drywall dust removal from all surfaces and ledges',
            'Adhesive and caulk residue removal',
            'Mechanical cover and diffuser wipe-down',
            'Restroom and breakroom fixture detailing',
            'Punch list execution and surface touch-ups',
            'Construction material and packaging disposal',
            'Inspection-ready walkthrough and sign-off',
          ];
          foreach ($scope as $item) : ?>
            <div class="flex items-start gap-3 rounded-lg px-4 py-3" style="background: white; border: 1px solid #dde8e5;">
              <div class="w-4 h-4 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                   style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15));">
                <svg class="w-2.5 h-2.5" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                </svg>
              </div>
              <span class="text-xs leading-relaxed" style="color: #585858;"><?php echo esc_html($item); ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Right: image + capacity badge -->
      <div class="relative">
        <?php if ($img_phases) : ?>
        <div class="aspect-[3/4] rounded-xl overflow-hidden">
          <img src="<?php echo esc_url($img_phases); ?>"
               alt="Post-construction cleaning crew on active commercial jobsite"
               class="w-full h-full object-cover">
        </div>
        <?php else : ?>
        <div class="aspect-[3/4] rounded-xl flex items-center justify-center"
             style="background: linear-gradient(135deg, rgba(22,37,37,0.05), rgba(42,157,147,0.08)); border: 1px solid #dde8e5;">
          <div class="text-center px-8">
            <svg class="w-12 h-12 mx-auto mb-3" style="color: #2A9D93; opacity: 0.4;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
            </svg>
            <p class="text-sm" style="color: #7fa89e;">Image coming soon</p>
          </div>
        </div>
        <?php endif; ?>

        <!-- Floating badge -->
        <div class="absolute -bottom-5 -left-4 sm:-left-6 px-6 py-4 rounded-xl shadow-xl"
             style="background: linear-gradient(135deg, #162525, #1e3333); border: 1px solid rgba(42,157,147,0.3);">
          <p class="font-bold text-xl leading-none" style="color: #2A9D93;">Day-1</p>
          <p class="text-xs mt-0.5 leading-snug" style="color: #7fa89e;">Mobilization<br>Capability</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     CLEAN SEQUENCE — 4 PHASES (DARK)
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #162525;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="max-w-2xl mb-12">
      <p class="text-xs font-semibold tracking-widest uppercase mb-3" style="color: #2A9D93;">How We Execute</p>
      <h2 class="text-3xl sm:text-4xl font-bold text-white leading-tight">
        A Structured Clean Sequence.<br>Not a One-Day Wipe-Down.
      </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <?php
      $phases = [
        [
          'num'   => '01',
          'title' => 'Site Assessment',
          'desc'  => 'Walk the space with GC to document trade punch items, identify debris zones, flag surface damage from other trades, and confirm sequence with project closeout schedule.',
        ],
        [
          'num'   => '02',
          'title' => 'Rough Clean',
          'desc'  => 'Remove construction debris, packaging, loose material, and bulk waste from all areas. Initial floor sweep and vacuum. Rough wipe of all horizontal surfaces.',
        ],
        [
          'num'   => '03',
          'title' => 'Detail Clean',
          'desc'  => 'Surface-by-surface detail clean. Drywall dust removal, adhesive and caulk residue, window glass, fixture detailing, mechanical covers, restrooms, and breakrooms.',
        ],
        [
          'num'   => '04',
          'title' => 'Punch & Sign-Off',
          'desc'  => 'Execute punch list items identified during assessment. Final walkthrough with GC project manager. Inspection-ready documentation provided before closeout.',
        ],
      ];
      foreach ($phases as $phase) : ?>
        <div class="rounded-xl p-6 transition-all duration-200"
             style="background: rgba(241,246,242,0.04); border: 1px solid rgba(241,246,242,0.08);"
             onmouseover="this.style.borderColor='rgba(42,157,147,0.35)'; this.style.background='rgba(241,246,242,0.06)'"
             onmouseout="this.style.borderColor='rgba(241,246,242,0.08)'; this.style.background='rgba(241,246,242,0.04)'">
          <span class="inline-block text-xs font-bold tracking-widest mb-4"
                style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
            <?php echo $phase['num']; ?>
          </span>
          <div class="w-8 h-0.5 mb-4 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></div>
          <h3 class="font-semibold text-sm leading-snug mb-3 text-white"><?php echo esc_html($phase['title']); ?></h3>
          <p class="text-xs leading-relaxed" style="color: #7fa89e;"><?php echo esc_html($phase['desc']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ============================================================
     WHAT SEPARATES IMVERA — DIFFERENTIATORS
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #fff;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="max-w-2xl mb-12">
      <p class="text-xs font-semibold tracking-widest uppercase mb-3" style="color: #2A9D93;">Why It Matters</p>
      <h2 class="text-3xl sm:text-4xl font-bold leading-tight" style="color: #162525;">
        The Difference Between a Clean Job<br>and an Inspection-Ready One.
      </h2>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
      <?php
      $diffs = [
        [
          'title' => 'Coordinated with GC Closeout Schedule',
          'desc'  => 'We mobilize when you need us — not when it\'s convenient for us. Post-construction cleaning is scheduled around your closeout timeline so the space is ready for the owner walkthrough without delays.',
        ],
        [
          'title' => 'Multi-Trade Surface Knowledge',
          'desc'  => 'Because Imvera performs framing, drywall, ceilings, flooring, and FRP, our cleaning crews understand every trade interface. We know where dust accumulates, where adhesive bleeds, and what surfaces need special treatment.',
        ],
        [
          'title' => 'Punch List Execution Included',
          'desc'  => 'We don\'t just clean around open punch items — we close them. Minor touch-ups, joint repairs, screw dimple correction, and surface corrections are executed as part of the scope, not billed separately.',
        ],
        [
          'title' => 'Same Crew Standard as Construction Scope',
          'desc'  => 'Full PPE on site. No phones during work hours. Formal job start every morning. The same discipline standard Imvera applies to framing and drywall applies to the final clean.',
        ],
        [
          'title' => 'Daily Photo Documentation',
          'desc'  => 'GC project contacts receive daily progress photos throughout the clean scope. You know what was completed, what\'s pending, and what punch items were closed — without having to call and ask.',
        ],
        [
          'title' => 'Inspection-Ready Handoff',
          'desc'  => 'The scope is not complete until it passes inspection. We conduct a final walkthrough with your PM before signing off, and we don\'t leave until the space is ready for the owner.',
        ],
      ];
      foreach ($diffs as $diff) : ?>
        <div class="flex items-start gap-5 p-6 rounded-xl transition-all duration-200"
             style="border: 1px solid #e8efed;"
             onmouseover="this.style.borderColor='rgba(42,157,147,0.3)'; this.style.boxShadow='0 4px 16px rgba(42,157,147,0.07)'"
             onmouseout="this.style.borderColor='#e8efed'; this.style.boxShadow='none'">
          <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5"
               style="background: linear-gradient(135deg, rgba(111,192,97,0.12), rgba(42,157,147,0.12));">
            <svg class="w-4 h-4" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
          </div>
          <div>
            <h3 class="font-semibold text-sm leading-snug mb-2" style="color: #162525;"><?php echo esc_html($diff['title']); ?></h3>
            <p class="text-sm leading-relaxed" style="color: #585858;"><?php echo esc_html($diff['desc']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ============================================================
     MARKETS
     ============================================================ -->
<section class="py-14" style="background-color: #F1F6F2;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
      <p class="text-xs font-semibold tracking-widest uppercase flex-shrink-0" style="color: #2A9D93;">Active Markets</p>
      <div class="h-px flex-1" style="background: linear-gradient(to right, rgba(42,157,147,0.3), transparent);"></div>
    </div>
    <div class="flex flex-wrap gap-3 mt-5">
      <?php
      $markets = ['Atlanta, GA', 'Charlotte, NC', 'Nashville, TN', 'Raleigh, NC', 'South Carolina', 'Texas', 'Kentucky', 'Florida'];
      foreach ($markets as $market) : ?>
        <span class="flex items-center gap-1.5 text-xs font-medium px-3 py-1.5 rounded-full bg-white"
              style="border: 1px solid #dde8e5; color: #585858;">
          <span class="w-1.5 h-1.5 rounded-full flex-shrink-0"
                style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
          <?php echo esc_html($market); ?>
        </span>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ============================================================
     BOTTOM CTA
     ============================================================ -->
<section class="py-16 lg:py-20 relative overflow-hidden" style="background-color: #162525;">

  <?php if ($img_cta) : ?>
  <div class="absolute inset-0 z-0">
    <img src="<?php echo esc_url($img_cta); ?>" alt="" aria-hidden="true" class="w-full h-full object-cover">
    <div class="absolute inset-0"
         style="background: linear-gradient(to right, rgba(22,37,37,0.97) 0%, rgba(22,37,37,0.88) 50%, rgba(22,37,37,0.82) 100%);"></div>
  </div>
  <?php else : ?>
  <div class="absolute inset-0 pointer-events-none"
       style="background: radial-gradient(ellipse at 70% 50%, rgba(42,157,147,0.12) 0%, transparent 60%), radial-gradient(ellipse at 15% 75%, rgba(111,192,97,0.07) 0%, transparent 50%);"></div>
  <?php endif; ?>

  <div class="absolute inset-y-0 left-0 w-1.5"
       style="background: linear-gradient(to bottom, #6FC061, #2A9D93);"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

      <div>
        <p class="text-xs font-semibold tracking-widest uppercase mb-3" style="color: #2A9D93;">Ready to Close Out?</p>
        <h2 class="text-3xl sm:text-4xl font-bold text-white leading-tight mb-4">
          Your Closeout Schedule Needs a Cleaning Crew That Executes Like a Trade.
        </h2>
        <p class="text-base leading-relaxed mb-4" style="color: #b8d4ce;">
          Imvera Group's post-construction cleaning service is built for GCs who can't afford delays at closeout. We mobilize fast, execute clean, and hand the space off inspection-ready.
        </p>
        <p class="text-sm leading-relaxed" style="color: #7fa89e;">
          Available across all seven of our active states — same crew standard, same communication, same accountability that GC partners depend on for every other Imvera trade scope.
        </p>
      </div>

      <div id="render-contact-form-postconstruction"
           data-variant="dark"
           data-title="Request a Scope Review"
           data-subtitle="Response Within 1 Business Day">
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>