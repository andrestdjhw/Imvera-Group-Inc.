<?php
/*
  Template Name: About Us
*/

get_header(); ?>


<!-- ============================================================
     HERO
     ============================================================ -->
<section class="relative min-h-[75vh] flex items-end bg-[#0f1c2e] overflow-hidden">

  <!-- Background image -->
  <div class="absolute inset-0 z-0">
    <div class="w-full h-full bg-[#0a1520]"
         style="background-image: url('<?php echo get_theme_file_uri('/images/about-hero.jpg'); ?>'); background-size: cover; background-position: center;">
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-[#0f1c2e] via-[#0f1c2e]/60 to-[#0f1c2e]/20"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-24 w-full">
    <div class="max-w-3xl">
      <div class="inline-flex items-center gap-2 bg-[#d4a843]/15 border border-[#d4a843]/30 rounded-full px-4 py-1.5 mb-6">
        <span class="w-2 h-2 rounded-full bg-[#d4a843]"></span>
        <span class="text-[#d4a843] text-xs font-semibold tracking-widest uppercase">About Imvera Group</span>
      </div>
      <h1 class="text-4xl sm:text-5xl xl:text-6xl font-bold text-white leading-[1.05] tracking-tight mb-6">
        Commercial Interior Execution Built for the Way GCs
        <span class="text-[#d4a843]"> Actually Work.</span>
      </h1>
      <p class="text-gray-300 text-lg leading-relaxed mb-4 max-w-2xl">
        Imvera Group Inc. is a multi-trade commercial interior construction company serving general contractors, franchise rollout contractors, and commercial developers across seven states in the Southeast and South Central United States.
      </p>
      <p class="text-gray-400 text-base leading-relaxed max-w-2xl">
        We execute commercial interior scopes — ECO Grip flooring, cabinet and countertop installation, acoustical ceilings, FRP wall panels, drywall and finishing, and metal framing — with our own dedicated crews, under a single execution standard, with daily communication that keeps GC partners informed without requiring them to follow up.
      </p>
    </div>
  </div>
</section>


<!-- ============================================================
     WHO WE ARE — The Problem / How We Solve It
     ============================================================ -->
<section class="bg-white py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Section label -->
    <div class="flex items-center gap-3 mb-12">
      <span class="text-xs font-semibold tracking-widest text-[#d4a843] uppercase">Who We Are</span>
      <div class="flex-1 max-w-xs h-px bg-[#d4a843]/30"></div>
    </div>

    <h2 class="text-3xl sm:text-4xl font-bold text-[#0f1c2e] leading-tight mb-12 max-w-xl">
      The Most Reliable.
    </h2>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 border border-gray-100 rounded-2xl overflow-hidden">

      <!-- Left: The Problem -->
      <div class="p-8 lg:p-12 bg-[#f7f5f0] border-b lg:border-b-0 lg:border-r border-gray-100">
        <div class="w-10 h-10 bg-[#0f1c2e] rounded-lg flex items-center justify-center mb-5">
          <svg class="w-5 h-5 text-[#d4a843]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
          </svg>
        </div>
        <h3 class="text-[#0f1c2e] font-bold text-xl mb-4">The Problem We Solve</h3>
        <p class="text-gray-600 text-sm leading-relaxed mb-4">
          Commercial construction is an environment where thin margins leave no room for subcontractor underperformance. GC margins average 6%. A single inspection failure, rework event, or schedule delay is not an inconvenience — it is a financial event that can eliminate the profit on an entire scope.
        </p>
        <p class="text-gray-500 text-sm leading-relaxed italic border-l-4 border-[#d4a843] pl-4">
          The most dangerous subcontractor in this environment is not the most expensive one. It is the unreliable one.
        </p>
      </div>

      <!-- Right: How We Solve It -->
      <div class="p-8 lg:p-12 bg-white">
        <div class="w-10 h-10 bg-[#d4a843] rounded-lg flex items-center justify-center mb-5">
          <svg class="w-5 h-5 text-[#0f1c2e]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <h3 class="text-[#0f1c2e] font-bold text-xl mb-4">How We Solve It</h3>
        <p class="text-gray-600 text-sm leading-relaxed mb-4">
          Imvera Group was built specifically for this environment. We do not compete on price. We compete on operational certainty — the ability to deliver what we commit to, in every market, on every project, without requiring the GC to manage us.
        </p>
        <p class="text-gray-600 text-sm leading-relaxed">
          That means self-performed crews. Daily documentation. Immediate response. And a workmanship standard backed by a 1-year warranty.
        </p>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     HOW WE OPERATE — 6 Operational Standards
     ============================================================ -->
<section class="bg-[#0f1c2e] py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Section label -->
    <div class="flex items-center gap-3 mb-12">
      <span class="text-xs font-semibold tracking-widest text-[#d4a843] uppercase">How We Operate</span>
      <div class="flex-1 max-w-xs h-px bg-[#d4a843]/30"></div>
    </div>

    <h2 class="text-3xl sm:text-4xl font-bold text-white leading-tight mb-12 max-w-2xl">
      The Operational Standards That Protect Your Project.
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

      <?php
      $operations = [
        [
          'num'   => '01',
          'title' => 'Self-Performed Crews',
          'desc'  => 'Every trade we execute is performed by our own dedicated crews — not brokered to third-party labor. Hanging, taping, mudding, framing, flooring, ceiling, FRP, and casework are all internal. Dedicated means accountable.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>',
        ],
        [
          'num'   => '02',
          'title' => 'Daily Photo Documentation',
          'desc'  => 'GC partners receive daily progress updates with photo documentation throughout every active project. Any issues discovered on site are reported immediately — before they become schedule problems. You don\'t follow up. We send it.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>',
        ],
        [
          'num'   => '03',
          'title' => 'Immediate Response',
          'desc'  => 'When a GC calls — local or out of state — we respond. We go where the work is. Our scheduling model is built so that our crews are always deployed and always available for the right project.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
        ],
        [
          'num'   => '04',
          'title' => 'Full PPE. Every Site.',
          'desc'  => 'Every Imvera crew arrives in uniform with full personal protective equipment: hard hats, safety glasses, ear protection, masks, and harness where required. This is not optional. It is part of how we operate.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
        ],
        [
          'num'   => '05',
          'title' => 'Equipment Ownership',
          'desc'  => 'Imvera owns and operates dump trailers and enclosed trailers for material transport and debris removal. No third-party logistics required. Our equipment moves when the project needs it to.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 5H4m0 0l4 4m-4-4l4-4"/>',
        ],
        [
          'num'   => '06',
          'title' => '1-Year Workmanship Warranty',
          'desc'  => 'All completed installations are backed by a 1-year workmanship warranty. We stand behind the work we execute.',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>',
        ],
      ];

      foreach ($operations as $op) : ?>
        <div class="bg-white/[0.04] border border-white/8 rounded-xl p-7 hover:border-[#d4a843]/30 hover:bg-white/[0.06] transition-all duration-200 group">
          <div class="flex items-start justify-between mb-5">
            <div class="w-10 h-10 bg-[#d4a843]/10 group-hover:bg-[#d4a843]/20 rounded-lg flex items-center justify-center transition-colors duration-200">
              <svg class="w-5 h-5 text-[#d4a843]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <?php echo $op['icon']; ?>
              </svg>
            </div>
            <span class="text-white/15 font-bold text-3xl leading-none"><?php echo $op['num']; ?></span>
          </div>
          <h3 class="text-white font-bold text-base mb-3 leading-snug"><?php echo esc_html($op['title']); ?></h3>
          <p class="text-gray-400 text-sm leading-relaxed"><?php echo esc_html($op['desc']); ?></p>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>


<!-- ============================================================
     WHAT WE STAND FOR — 6 Principles
     ============================================================ -->
<section class="bg-[#f7f5f0] py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Section label -->
    <div class="flex items-center gap-3 mb-12">
      <span class="text-xs font-semibold tracking-widest text-[#d4a843] uppercase">What We Stand For</span>
      <div class="flex-1 max-w-xs h-px bg-[#d4a843]/30"></div>
    </div>

    <h2 class="text-3xl sm:text-4xl font-bold text-[#0f1c2e] leading-tight mb-12 max-w-2xl">
      Six Principles That Define Every Project We Execute.
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

      <?php
      $principles = [
        [
          'title' => 'Operational Certainty',
          'desc'  => 'We deliver what we commit to. Schedules hold. Inspections pass. Rework does not happen.',
        ],
        [
          'title' => 'Execution Discipline',
          'desc'  => 'We follow specs without shortcuts, coordinate without friction, and close scopes without surprises.',
        ],
        [
          'title' => 'Labor Stability',
          'desc'  => 'Stable, trained crews in every market. Workforce reliability is a strategic asset, not a given.',
        ],
        [
          'title' => 'Institutional Integrity',
          'desc'  => 'We communicate proactively and address issues directly — before they become the GC\'s problem.',
        ],
        [
          'title' => 'Multi-State Consistency',
          'desc'  => 'The same execution standard in Atlanta as in Charlotte as in Nashville. Geography doesn\'t dilute performance.',
        ],
        [
          'title' => 'Risk Reduction',
          'desc'  => 'Our role is to reduce the GC\'s operational exposure. Every decision we make is filtered through that.',
        ],
      ];

      foreach ($principles as $i => $principle) : ?>
        <div class="bg-white border border-gray-100 rounded-xl p-7 hover:border-[#d4a843]/30 hover:shadow-md transition-all duration-200">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-7 h-7 rounded-full bg-[#0f1c2e] flex items-center justify-center flex-shrink-0">
              <span class="text-[#d4a843] text-xs font-bold leading-none"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
            </div>
            <div class="flex-1 h-px bg-gray-100"></div>
          </div>
          <h3 class="text-[#0f1c2e] font-bold text-base mb-2 leading-snug"><?php echo esc_html($principle['title']); ?></h3>
          <p class="text-gray-500 text-sm leading-relaxed"><?php echo esc_html($principle['desc']); ?></p>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>


<!-- ============================================================
     WHY GCS CHOOSE IMVERA
     ============================================================ -->
<section class="bg-white py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Section label -->
    <div class="flex items-center gap-3 mb-8">
      <span class="text-xs font-semibold tracking-widest text-[#d4a843] uppercase">Why GCs Choose Imvera</span>
      <div class="flex-1 max-w-xs h-px bg-[#d4a843]/30"></div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 xl:gap-16 mb-16">
      <div class="lg:col-span-2">
        <h2 class="text-3xl sm:text-4xl font-bold text-[#0f1c2e] leading-tight mb-5">
          What Makes the Difference on a Commercial Project.
        </h2>
        <p class="text-gray-600 text-base leading-relaxed">
          In a highly fragmented specialty trades market, most subcontractors offer the same things: a trade, a price, and availability. What they don't offer consistently is the operational reliability that protects GC margins in a volatile, thin-margin environment.
        </p>
      </div>
    </div>

    <!-- Differentiator 1: ECO Grip — image left, text right -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 xl:gap-16 items-center mb-16 pb-16 border-b border-gray-100">
      <div class="order-2 lg:order-1">
        <div class="aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
          <img src="<?php echo get_theme_file_uri('/images/eco-grip-install.jpg'); ?>"
               alt="ECO Grip installation in progress — crew in commercial kitchen"
               class="w-full h-full object-cover">
        </div>
      </div>
      <div class="order-1 lg:order-2">
        <div class="inline-flex items-center gap-2 bg-[#d4a843]/10 rounded-full px-3 py-1 mb-4">
          <span class="w-1.5 h-1.5 rounded-full bg-[#d4a843]"></span>
          <span class="text-[#d4a843] text-xs font-semibold tracking-wide">Certified Credential</span>
        </div>
        <h3 class="text-2xl font-bold text-[#0f1c2e] leading-tight mb-4">Certified ECO Grip Installer</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Imvera Group holds certified installer status for ECO Grip commercial flooring systems. Certification is required by leading national food service operators before awarding flooring contracts — and it is not common among Southeast commercial flooring contractors. For GC partners managing food service, healthcare, or franchise rollout interior packages, Imvera's certification removes a procurement obstacle.
        </p>
      </div>
    </div>

    <!-- Differentiators 2–5: stacked text blocks -->
    <?php
    $differentiators = [
      [
        'title' => 'Multi-Trade Capability Under One Contract',
        'desc'  => 'Imvera Group executes across metal framing, drywall and finishing, commercial flooring, acoustical ceilings, FRP installation, and cabinet and countertop installation. Multi-trade capability under a single contract eliminates coordination friction, reduces the number of subcontractors a GC must manage, and creates a single point of accountability for the entire interior scope.',
      ],
      [
        'title' => 'Real-Time Communication and Daily Documentation',
        'desc'  => 'Imvera maintains direct, proactive communication with GC partners throughout every project. Our crews provide daily updates with photo documentation so the GC always knows exactly where the project stands — without asking. Issues encountered on site are reported immediately, before they affect the schedule or trigger an inspection failure.',
      ],
      [
        'title' => 'Labor Stability in a Constrained Market',
        'desc'  => 'Specialty trades face persistent labor shortages across the Southeast. When labor tightens, stable crews command the work and unreliable operators disappear. Imvera\'s workforce is trained, consistent, and deployed under the same operational standard regardless of project location. GCs who partner with Imvera are not competing for labor — they are accessing crews that show up prepared and perform to spec.',
      ],
      [
        'title' => 'Consistent Execution Across Multiple States',
        'desc'  => 'Imvera Group operates across seven states with a single performance standard. The framing precision required in Atlanta does not change in Charlotte. The ECO Grip installation process executed in a Nashville Starbucks is the same process executed in a Georgia location. Multi-state consistency is the operational foundation the company was built on.',
      ],
    ];

    foreach ($differentiators as $i => $diff) : ?>
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start mb-10 pb-10 <?php echo $i < count($differentiators) - 1 ? 'border-b border-gray-100' : ''; ?>">
        <div>
          <span class="text-[#d4a843]/40 font-bold text-5xl leading-none block mb-1"><?php echo str_pad($i + 2, 2, '0', STR_PAD_LEFT); ?></span>
          <h3 class="text-[#0f1c2e] font-bold text-lg leading-snug"><?php echo esc_html($diff['title']); ?></h3>
        </div>
        <p class="lg:col-span-2 text-gray-600 text-sm leading-relaxed self-center"><?php echo esc_html($diff['desc']); ?></p>
      </div>
    <?php endforeach; ?>

    <!-- Closing statement + CTA -->
    <div class="bg-[#0f1c2e] rounded-2xl p-8 lg:p-10 flex flex-col sm:flex-row items-start sm:items-center gap-6 justify-between">
      <p class="text-gray-300 text-base leading-relaxed italic max-w-xl">
        Imvera Group does not aim to be the loudest presence on a project. We aim to be the most reliable one.
      </p>
      <a href="/contact-us"
         class="inline-flex items-center gap-2 bg-[#d4a843] hover:bg-[#c49a38] text-[#0f1c2e] font-bold px-7 py-3.5 rounded transition-colors duration-200 text-sm whitespace-nowrap flex-shrink-0">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
        </svg>
        Request a Scope Review
      </a>
    </div>

  </div>
</section>


<!-- ============================================================
     GEOGRAPHIC COVERAGE
     ============================================================ -->
<section class="bg-[#f7f5f0] py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Section label -->
    <div class="flex items-center gap-3 mb-12">
      <span class="text-xs font-semibold tracking-widest text-[#d4a843] uppercase">Geographic Coverage</span>
      <div class="flex-1 max-w-xs h-px bg-[#d4a843]/30"></div>
    </div>

    <h2 class="text-3xl sm:text-4xl font-bold text-[#0f1c2e] leading-tight mb-12">
      Seven States. Four Primary Markets.
    </h2>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-10">

      <!-- Active States -->
      <div class="bg-white border border-gray-100 rounded-2xl p-8">
        <div class="flex items-center gap-3 mb-6">
          <div class="w-9 h-9 bg-[#0f1c2e] rounded-lg flex items-center justify-center">
            <svg class="w-5 h-5 text-[#d4a843]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
            </svg>
          </div>
          <h3 class="text-[#0f1c2e] font-bold text-lg">Active States</h3>
        </div>
        <div class="flex flex-wrap gap-2.5">
          <?php
          $states = ['Georgia', 'North Carolina', 'South Carolina', 'Tennessee', 'Texas', 'Kentucky', 'Florida'];
          foreach ($states as $state) : ?>
            <span class="bg-[#f7f5f0] border border-gray-200 text-[#0f1c2e] text-sm font-medium px-4 py-2 rounded-lg">
              <?php echo esc_html($state); ?>
            </span>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Primary Markets -->
      <div class="bg-[#0f1c2e] rounded-2xl p-8">
        <div class="flex items-center gap-3 mb-6">
          <div class="w-9 h-9 bg-[#d4a843]/15 rounded-lg flex items-center justify-center">
            <svg class="w-5 h-5 text-[#d4a843]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
          </div>
          <h3 class="text-white font-bold text-lg">Primary Markets</h3>
        </div>
        <div class="grid grid-cols-2 gap-3">
          <?php
          $markets = ['Atlanta, GA', 'Charlotte, NC', 'Nashville, TN', 'Raleigh / Triangle, NC'];
          foreach ($markets as $market) : ?>
            <div class="flex items-center gap-2.5">
              <span class="w-1.5 h-1.5 rounded-full bg-[#d4a843] flex-shrink-0"></span>
              <span class="text-gray-300 text-sm font-medium"><?php echo esc_html($market); ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>

    <div>
      <a href="/markets-we-serve"
         class="inline-flex items-center gap-2 bg-[#0f1c2e] hover:bg-[#1a2f4a] text-white font-semibold px-7 py-4 rounded transition-colors duration-200 text-sm">
        View Markets We Serve
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>

  </div>
</section>

<?php get_footer();