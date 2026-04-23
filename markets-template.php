<?php
/*
  Template Name: Markets We Serve
*/

get_header(); ?>


<!-- ============================================================
     HERO
     ============================================================ -->
<section class="relative overflow-hidden" style="background-color: #162525;">
  <div class="absolute inset-y-0 left-0 w-1.5"
       style="background: linear-gradient(to bottom, #6FC061, #2A9D93);"></div>
  <div class="absolute inset-0 pointer-events-none"
       style="background: radial-gradient(ellipse at 75% 50%, rgba(42,157,147,0.1) 0%, transparent 60%);"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
    <div class="max-w-2xl">
      <div class="inline-flex items-center gap-2 rounded-full px-4 py-1.5 mb-6"
           style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15)); border: 1px solid rgba(42,157,147,0.35);">
        <span class="w-2 h-2 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
        <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Where We Work</span>
      </div>
      <h1 class="text-4xl sm:text-5xl font-bold text-white leading-[1.05] tracking-tight mb-5">
        Active Across the Southeast's
        <span style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"> Fastest Growing Markets.</span>
      </h1>
      <p class="text-base leading-relaxed" style="color: #b8d4ce;">
        Imvera Group maintains active commercial interior operations across seven states with four primary markets where we deliver consistent volume for GC partners managing ongoing project pipelines.
      </p>
    </div>
  </div>
</section>


<!-- ============================================================
     ACTIVE STATES STRIP
     ============================================================ -->
<div style="background-color: #0f1a1a; border-bottom: 1px solid rgba(42,157,147,0.15);">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-wrap items-center gap-x-6 gap-y-2">
    <p class="text-xs font-semibold uppercase tracking-widest" style="color: #4d7069;">Active States:</p>
    <?php foreach (['Georgia', 'North Carolina', 'South Carolina', 'Tennessee', 'Texas', 'Kentucky', 'Florida'] as $state) : ?>
      <div class="flex items-center gap-1.5">
        <span class="w-1.5 h-1.5 rounded-full flex-shrink-0"
              style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
        <span class="text-xs font-medium" style="color: #7fa89e;"><?php echo $state; ?></span>
      </div>
    <?php endforeach; ?>
  </div>
</div>


<!-- ============================================================
     PRIMARY MARKETS GRID
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #F1F6F2;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="flex items-center gap-3 mb-10">
      <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Primary Markets</span>
      <div class="flex-1 max-w-xs h-px" style="background: linear-gradient(to right, rgba(42,157,147,0.5), transparent);"></div>
    </div>

    <?php
    $markets = [
      [
        'id'      => 'atlanta',
        'city'    => 'Atlanta, GA',
        'label'   => 'Pipeline Stabilizer',
        'desc'    => 'High project velocity, large GC ecosystem, and continuous TI and franchise rollout cycles make Atlanta Imvera\'s highest-volume primary market. The density of national food service operators, healthcare systems, and retail developers in the metro creates consistent multi-trade interior demand year-round.',
        'map'     => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212496.48305!2d-84.5596!3d33.7490!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5045d6993098d%3A0x66fede2f990b630b!2sAtlanta%2C%20GA!5e0!3m2!1sen!2sus!4v1620000000000',
        'stats'   => ['Retail TI', 'Food Service', 'Healthcare', 'Franchise Rollout'],
      ],
      [
        'id'      => 'charlotte',
        'city'    => 'Charlotte, NC',
        'label'   => 'Repeat Revenue Engine',
        'desc'    => 'Financial sector tenant improvement, multifamily interior packages, and franchise program expansion drive steady interior construction demand across the Charlotte metro. Imvera\'s GC relationships in this market produce repeatable, multi-project engagement.',
        'map'     => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d208754.23!2d-80.8431!3d35.2271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88541fc4fc381a81%3A0xad3f30f5e922ae19!2sCharlotte%2C%20NC!5e0!3m2!1sen!2sus!4v1620000000000',
        'stats'   => ['Financial TI', 'Multifamily', 'Franchise', 'Retail'],
      ],
      [
        'id'      => 'nashville',
        'city'    => 'Nashville, TN',
        'label'   => 'Healthcare & Compliance',
        'desc'    => 'Outpatient facility expansion, hospitality renovation programs, and compliance-heavy interior buildouts define Nashville\'s commercial interior market. Imvera\'s expertise in fire rated assemblies, FRP, and healthcare casework positions us well for the project types driving growth in this market.',
        'map'     => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d206222.77!2d-86.7816!3d36.1627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8864ec3213eb903d%3A0x7d3fb9d0a1e9daa0!2sNashville%2C%20TN!5e0!3m2!1sen!2sus!4v1620000000000',
        'stats'   => ['Healthcare', 'Hospitality', 'Compliance', 'Food Service'],
      ],
      [
        'id'      => 'raleigh',
        'city'    => 'Raleigh / Triangle, NC',
        'label'   => 'Stable Buildout Environment',
        'desc'    => 'Corporate relocations, medical office growth, institutional expansion, and tech sector tenant improvement create a stable, diversified interior construction pipeline in the Raleigh-Durham Triangle. Imvera operates across the full Triangle market Raleigh, Durham, and Chapel Hill.',
        'map'     => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d206862.26!2d-78.6382!3d35.7796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89ac5a2f9f51e0f7%3A0x6f8d2a3dbf5d7f8!2sRaleigh%2C%20NC!5e0!3m2!1sen!2sus!4v1620000000000',
        'stats'   => ['Corporate TI', 'Medical Office', 'Institutional', 'Tech Sector'],
      ],
    ];

    foreach ($markets as $i => $market) :
      $is_even = $i % 2 === 0;
    ?>
      <div id="<?php echo $market['id']; ?>"
           class="bg-white rounded-2xl overflow-hidden mb-6 last:mb-0"
           style="border: 1px solid #dde8e5;">

        <div class="grid grid-cols-1 lg:grid-cols-2">

          <!-- Map — alternates left/right -->
          <div class="<?php echo $is_even ? 'lg:order-1' : 'lg:order-2'; ?> relative" style="min-height: 320px;">
            <iframe
              src="<?php echo esc_url($market['map']); ?>"
              width="100%"
              height="100%"
              style="border: 0; display: block; min-height: 320px;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="Map of <?php echo esc_attr($market['city']); ?>">
            </iframe>
          </div>

          <!-- Content -->
          <div class="<?php echo $is_even ? 'lg:order-2' : 'lg:order-1'; ?> p-8 lg:p-10 flex flex-col justify-center">

            <div class="w-8 h-0.5 mb-4 rounded-full"
                 style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></div>

            <p class="text-xs font-semibold tracking-widest uppercase mb-2" style="color: #2A9D93;">
              <?php echo esc_html($market['label']); ?>
            </p>
            <h2 class="text-2xl sm:text-3xl font-bold leading-tight mb-4" style="color: #162525;">
              <?php echo esc_html($market['city']); ?>
            </h2>
            <p class="text-sm leading-relaxed mb-6" style="color: #585858;">
              <?php echo esc_html($market['desc']); ?>
            </p>

            <!-- Sector tags -->
            <div class="flex flex-wrap gap-2 mb-6">
              <?php foreach ($market['stats'] as $tag) : ?>
                <span class="text-xs font-medium px-3 py-1.5 rounded-full"
                      style="background: linear-gradient(135deg, rgba(111,192,97,0.08), rgba(42,157,147,0.08)); border: 1px solid rgba(42,157,147,0.2); color: #2A9D93;">
                  <?php echo esc_html($tag); ?>
                </span>
              <?php endforeach; ?>
            </div>

            <a href="/contact-us"
               class="inline-flex items-center gap-2 font-semibold text-sm px-6 py-3 rounded self-start transition-all duration-200 text-white"
               style="background-color: #162525;"
               onmouseover="this.style.backgroundColor='#2A9D93'"
               onmouseout="this.style.backgroundColor='#162525'">
              Discuss a Project in <?php echo esc_html(explode(',', $market['city'])[0]); ?>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>

          </div>
        </div>
      </div>

    <?php endforeach; ?>

  </div>
</section>


<!-- ============================================================
     ALSO ACTIVE IN + CONTACT FORM
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #162525;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-16 items-start">

      <!-- Left: also active in + copy -->
      <div>
        <p class="text-xs font-semibold tracking-widest uppercase mb-3" style="color: #2A9D93;">Also Active In</p>
        <h2 class="text-3xl sm:text-4xl font-bold text-white leading-tight mb-4">
          Seven States. One Standard.
        </h2>
        <p class="text-base leading-relaxed mb-8" style="color: #b8d4ce;">
          Beyond our four primary markets, Imvera Group maintains active operations across South Carolina, Texas, Kentucky, and Florida. The same crew standard, the same execution quality, regardless of geography.
        </p>

        <div class="flex flex-wrap gap-3 mb-10">
          <?php foreach (['South Carolina', 'Texas', 'Kentucky', 'Florida'] as $state) : ?>
            <div class="flex items-center gap-2 px-4 py-2.5 rounded-lg"
                 style="background: rgba(241,246,242,0.05); border: 1px solid rgba(241,246,242,0.1);">
              <span class="w-1.5 h-1.5 rounded-full flex-shrink-0"
                    style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
              <span class="text-sm font-medium" style="color: #b8d4ce;"><?php echo esc_html($state); ?></span>
            </div>
          <?php endforeach; ?>
        </div>

        <p class="text-sm italic pl-4" style="color: #7fa89e; border-left: 3px solid rgba(42,157,147,0.4);">
          Working in a state not listed? Contact us we go where the work is.
        </p>
      </div>

      <!-- Right: React contact form component -->
      <div id="render-contact-form-markets"
           data-variant="dark"
           data-title="Discuss a Project"
           data-subtitle="Active in 7 States Across the Southeast">
      </div>

    </div>
  </div>
</section>

<?php get_footer();