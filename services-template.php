<?php
/*
  Template Name: Services
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
        <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">What We Do</span>
      </div>
      <h1 class="text-4xl sm:text-5xl font-bold text-white leading-[1.05] tracking-tight mb-5">
        Seven Trades. One Subcontractor.
        <span style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"> Zero Overhead.</span>
      </h1>
      <p class="text-base leading-relaxed" style="color: #b8d4ce;">
        Every interior scope self-performed by dedicated crews under a single execution standard. Multi-trade capability under one contract means fewer vendors, less coordination, and one accountable partner for the entire interior package.
      </p>
    </div>
  </div>
</section>


<!-- ============================================================
     SERVICES GRID
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #F1F6F2;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
      $services = [
        [
          'num'   => '01',
          'slug'  => 'eco-grip-flooring',
          'title' => 'ECO Grip Flooring',
          'tag'   => 'Highest margin · Growth priority',
          'desc'  => 'Certified installation for commercial kitchens, food service, and compliance-driven environments across the Southeast.',
          'url'   => '/wp-content/uploads/2026/06/EcoGripAfter2.jpg',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>',
        ],
        [
          'num'   => '02',
          'slug'  => 'cabinets-countertops',
          'title' => 'Cabinets & Countertops',
          'tag'   => 'High margin · Precision-driven',
          'desc'  => 'Corian and commercial casework installation to a zero-tolerance finishing standard for food service, healthcare, and office interiors.',
          'url'   => '/wp-content/uploads/2026/06/CabinetCountertopAfter-scaled.jpg',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>',
        ],
        [
          'num'   => '03',
          'slug'  => 'acoustical-ceilings',
          'title' => 'Acoustical Ceilings',
          'tag'   => 'High output · Compliance-driven',
          'desc'  => 'Armstrong and USG systems. Up to 1,400 sq ft per day with a 2-person crew. Restaurants, medical offices, and retail TI.',
          'url'   => '/wp-content/uploads/2026/06/AcousticalCeilingAfter.png',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>',
        ],
        [
          'num'   => '04',
          'slug'  => 'frp-installation',
          'title' => 'FRP Installation',
          'tag'   => 'Specialty · Compliance-driven',
          'desc'  => 'Southern Building Products FRP for commercial kitchens, restrooms, healthcare, and retail environments requiring hygiene-grade wall systems.',
          'url'   => '/wp-content/uploads/2026/06/FRPInstallation2After.jpeg',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/>',
        ],
        [
          'num'   => '05',
          'slug'  => 'drywall-finishing',
          'title' => 'Drywall & Finishing',
          'tag'   => 'Core volume trade',
          'desc'  => 'All phases self-performed — hanging, taping, mudding, patching. Fire-rated and moisture-resistant assemblies. Smooth finish only. 480 sheets per week.',
          'url'   => '/wp-content/uploads/2026/06/DrywallServiceBefore.jpeg',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/>',
        ],
        [
          'num'   => '06',
          'slug'  => 'metal-framing',
          'title' => 'Metal Framing',
          'tag'   => 'Core volume trade · Foundation scope',
          'desc'  => '16, 18, and 20 gauge non-structural interior framing executed from structural drawings. English-speaking foreman. Passes inspection first submission.',
          'url'   => 'http://imvera-group-inc.local/wp-content/uploads/2026/06/MetalFramingBefore.jpeg',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>',
        ],
        [
          'num'   => '07',
          'slug'  => 'post-construction-cleaning',
          'title' => 'Post-Construction Cleaning',
          'tag'   => 'Closeout service · Inspection-ready',
          'desc'  => 'Final clean, punch list execution, surface detailing, and inspection-ready handoff — the last step before your GC closes out the project.',
          'url'   => '/wp-content/uploads/2026/06/PostConstructionBefore-scaled.jpg',
          'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>',
        ],
      ];

      foreach ($services as $i => $service) :
        $is_last = $i === count($services) - 1;
      ?>
        <a href="/services/<?php echo esc_attr($service['slug']); ?>"
           class="group bg-white rounded-xl overflow-hidden flex flex-col transition-all duration-300<?php echo $is_last ? ' lg:col-span-3 lg:flex-row' : ''; ?>"
           style="border: 1px solid #dde8e5;"
           onmouseover="this.style.borderColor='rgba(42,157,147,0.4)'; this.style.boxShadow='0 8px 24px rgba(42,157,147,0.1)'"
           onmouseout="this.style.borderColor='#dde8e5'; this.style.boxShadow='none'">

          <!-- Image -->
          <div class="<?php echo $is_last ? 'aspect-[16/9] lg:aspect-auto lg:w-2/5 lg:flex-shrink-0' : 'aspect-[16/9]'; ?> overflow-hidden bg-gray-100 relative">
            <?php if (!empty($service['url'])) : ?>
            <img src="<?php echo esc_url($service['url']); ?>"
                 alt="<?php echo esc_attr($service['title']); ?>"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <?php else : ?>
            <div class="w-full h-full flex items-center justify-center"
                 style="background: linear-gradient(135deg, rgba(22,37,37,0.06), rgba(42,157,147,0.1));">
              <svg class="w-10 h-10" style="color: #2A9D93; opacity: 0.35;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <?php echo $service['icon']; ?>
              </svg>
            </div>
            <?php endif; ?>
            <!-- Number badge -->
            <div class="absolute top-3 left-3">
              <span class="text-xs font-bold px-2.5 py-1 rounded-full"
                    style="background: rgba(22,37,37,0.75); backdrop-filter: blur(4px); color: #2A9D93;">
                <?php echo $service['num']; ?>
              </span>
            </div>
          </div>

          <!-- Content -->
          <div class="p-6 flex flex-col flex-1">
            <!-- Icon + gradient bar -->
            <div class="flex items-center gap-3 mb-3">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0"
                   style="background: linear-gradient(135deg, rgba(111,192,97,0.12), rgba(42,157,147,0.12));">
                <svg class="w-4 h-4" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <?php echo $service['icon']; ?>
                </svg>
              </div>
              <div class="flex-1 h-px transition-all duration-300 group-hover:opacity-100 opacity-60"
                   style="background: linear-gradient(to right, #6FC061, #2A9D93);"></div>
            </div>

            <p class="text-xs font-semibold tracking-wide uppercase mb-1" style="color: #2A9D93;"><?php echo esc_html($service['tag']); ?></p>
            <h2 class="font-bold text-base leading-snug mb-2" style="color: #162525;"><?php echo esc_html($service['title']); ?></h2>
            <p class="text-sm leading-relaxed flex-1" style="color: #585858;"><?php echo esc_html($service['desc']); ?></p>

            <div class="mt-5 flex items-center gap-1.5 text-xs font-bold group-hover:gap-3 transition-all duration-200"
                 style="color: #2A9D93;">
              Learn More
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </div>
          </div>

        </a>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ============================================================
     CONTACT FORM
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #162525;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-16 items-start">

      <!-- Left: copy -->
      <div>
        <p class="text-xs font-semibold tracking-widest uppercase mb-3" style="color: #2A9D93;">Get in Touch</p>
        <h2 class="text-3xl sm:text-4xl font-bold text-white leading-tight mb-4">
          Ready to Scope a Project?
        </h2>
        <p class="text-base leading-relaxed mb-6" style="color: #b8d4ce;">
          Tell us about your project and we'll respond within one business day.
        </p>

        <!-- Quick stats -->
        <div class="flex flex-col gap-3">
          <?php
          $points = [
            '7 trades under one contract — no coordination overhead',
            'Active across GA, NC, SC, TN, TX, KY, and FL',
            'English-speaking foreman on every project',
            '1-year workmanship warranty on all installations',
          ];
          foreach ($points as $point) : ?>
            <div class="flex items-start gap-3">
              <div class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                   style="background: linear-gradient(135deg, rgba(111,192,97,0.2), rgba(42,157,147,0.2));">
                <svg class="w-3 h-3" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                </svg>
              </div>
              <p class="text-sm leading-relaxed" style="color: #7fa89e;"><?php echo esc_html($point); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Right: React contact form component -->
      <div id="render-contact-form-services"
           class="lg:col-span-1"
           data-variant="dark"
           data-title="Request a Scope Review"
           data-subtitle="Response Within 1 Business Day">
      </div>

    </div>
  </div>
</section>

<?php get_footer();