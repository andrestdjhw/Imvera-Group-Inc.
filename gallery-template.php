<?php
/*
  Template Name: Gallery
*/

get_header(); ?>


<!-- ============================================================
     HERO
     ============================================================ -->
<section class="relative overflow-hidden" style="background-color: #162525;">
  <div class="absolute inset-0 z-0 opacity-20"
       style="background-image: url('<?php echo get_theme_file_uri('/images/gallery-hero-bg.jpg'); ?>'); background-size: cover; background-position: center;">
  </div>
  <div class="absolute inset-0"
       style="background: linear-gradient(to bottom, rgba(22,37,37,0.75), #162525);"></div>
  <!-- Left accent strip -->
  <div class="absolute inset-y-0 left-0 w-1.5"
       style="background: linear-gradient(to bottom, #6FC061, #2A9D93);"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-24">
    <div class="max-w-3xl">
      <div class="inline-flex items-center gap-2 rounded-full px-4 py-1.5 mb-6"
           style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15)); border: 1px solid rgba(42,157,147,0.35);">
        <span class="w-2 h-2 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
        <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Project Gallery</span>
      </div>
      <h1 class="text-4xl sm:text-5xl xl:text-6xl font-bold text-white leading-[1.05] tracking-tight mb-6">
        Commercial Interior Execution
        <span style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"> Across the Southeast.</span>
      </h1>
      <p class="text-lg leading-relaxed mb-3" style="color: #b8d4ce;">
        Six trades. Seven states. Hundreds of completed commercial interior projects for general contractors, franchise rollout contractors, and commercial developers across the Southeast.
      </p>
      <p class="text-base leading-relaxed" style="color: #7fa89e;">
        Every project shown here was executed by Imvera Group's own dedicated crews — no brokered labor, no third-party installation. What you see is what we deliver.
      </p>
    </div>
  </div>
</section>


<!-- ============================================================
     FILTER BAR
     ============================================================ -->
<div class="sticky top-0 z-40" style="background-color: #F1F6F2; border-bottom: 1px solid #dde8e5; box-shadow: 0 1px 8px rgba(22,37,37,0.06);">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center gap-1.5 overflow-x-auto py-4 -mx-1 px-1" style="scrollbar-width: none;">

      <?php
      $filters = [
        ['key' => 'all',           'label' => 'All'],
        ['key' => 'eco-grip',      'label' => 'ECO Grip Flooring'],
        ['key' => 'cabinets',      'label' => 'Cabinets & Countertops'],
        ['key' => 'acoustical',    'label' => 'Acoustical Ceilings'],
        ['key' => 'frp',           'label' => 'FRP Installation'],
        ['key' => 'drywall',       'label' => 'Drywall & Finishing'],
        ['key' => 'metal-framing', 'label' => 'Metal Framing'],
        ['key' => 'crew',          'label' => 'Crew & Jobsite'],
      ];
      foreach ($filters as $filter) :
        $is_active = $filter['key'] === 'all';
      ?>
        <button
          data-filter="<?php echo esc_attr($filter['key']); ?>"
          class="ig-filter flex-shrink-0 text-xs font-semibold px-4 py-2 rounded-full border transition-all duration-200 whitespace-nowrap"
          style="<?php echo $is_active
            ? 'background: linear-gradient(135deg, #6FC061, #2A9D93); border-color: transparent; color: #F1F6F2;'
            : 'background: white; border-color: #dde8e5; color: #585858;'; ?>">
          <?php echo esc_html($filter['label']); ?>
        </button>
      <?php endforeach; ?>

    </div>
  </div>
</div>


<!-- ============================================================
     GALLERY GRID
     ============================================================ -->
<section class="py-12 lg:py-16" style="background-color: #F1F6F2;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="flex items-center justify-between mb-6">
      <p class="text-sm" style="color: #7fa89e;">
        Showing <span id="ig-visible-count" class="font-semibold" style="color: #162525;">0</span> projects
      </p>
    </div>

    <div id="ig-gallery-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">

      <?php
      $gallery_items = [
        ['cat' => 'eco-grip',      'img' => 'eco-grip-01.jpg',   'title' => 'ECO Grip Flooring Installation',        'location' => 'Atlanta, GA',     'sector' => 'Food Service',       'span' => 'col-span-2'],
        ['cat' => 'eco-grip',      'img' => 'eco-grip-02.jpg',   'title' => 'Finished Commercial Kitchen Floor',     'location' => 'Charlotte, NC',   'sector' => 'Food Service',       'span' => ''],
        ['cat' => 'eco-grip',      'img' => 'eco-grip-03.jpg',   'title' => 'ECO Grip with Drain Flanges',           'location' => 'Nashville, TN',   'sector' => 'Food Service',       'span' => ''],
        ['cat' => 'eco-grip',      'img' => 'eco-grip-04.jpg',   'title' => 'ECO Grip Flooring Installation',        'location' => 'Raleigh, NC',     'sector' => 'Healthcare',         'span' => ''],
        ['cat' => 'eco-grip',      'img' => 'eco-grip-05.jpg',   'title' => 'Commercial Kitchen Flooring',           'location' => 'Duluth, GA',      'sector' => 'Retail',             'span' => ''],
        ['cat' => 'cabinets',      'img' => 'cabinets-01.jpg',   'title' => 'Corian Countertop Installation',        'location' => 'Atlanta, GA',     'sector' => 'Healthcare',         'span' => ''],
        ['cat' => 'cabinets',      'img' => 'cabinets-02.jpg',   'title' => 'Commercial Casework — Restaurant',      'location' => 'Charlotte, NC',   'sector' => 'Food Service',       'span' => ''],
        ['cat' => 'cabinets',      'img' => 'cabinets-03.jpg',   'title' => 'Cabinet & Countertop Install',          'location' => 'Nashville, TN',   'sector' => 'Corporate TI',       'span' => 'col-span-2'],
        ['cat' => 'cabinets',      'img' => 'cabinets-04.jpg',   'title' => 'Corian Seam Detail',                    'location' => 'Raleigh, NC',     'sector' => 'Healthcare',         'span' => ''],
        ['cat' => 'cabinets',      'img' => 'cabinets-05.jpg',   'title' => 'Commercial Casework',                   'location' => 'Duluth, GA',      'sector' => 'Food Service',       'span' => ''],
        ['cat' => 'acoustical',    'img' => 'acoustical-01.jpg', 'title' => 'T-Bar Grid Installation',               'location' => 'Atlanta, GA',     'sector' => 'Restaurant',         'span' => ''],
        ['cat' => 'acoustical',    'img' => 'acoustical-02.jpg', 'title' => 'Armstrong Acoustical Ceiling',          'location' => 'Charlotte, NC',   'sector' => 'Medical Office',     'span' => ''],
        ['cat' => 'acoustical',    'img' => 'acoustical-03.jpg', 'title' => 'USG Ceiling System',                    'location' => 'Nashville, TN',   'sector' => 'Retail TI',          'span' => 'col-span-2'],
        ['cat' => 'acoustical',    'img' => 'acoustical-04.jpg', 'title' => 'Ceiling Grid — Wide Shot',              'location' => 'Raleigh, NC',     'sector' => 'Healthcare',         'span' => ''],
        ['cat' => 'acoustical',    'img' => 'acoustical-05.jpg', 'title' => 'Armstrong Ceiling Installation',        'location' => 'Duluth, GA',      'sector' => 'Restaurant',         'span' => ''],
        ['cat' => 'frp',           'img' => 'frp-01.jpg',        'title' => 'FRP Wall Panel Installation',           'location' => 'Atlanta, GA',     'sector' => 'Commercial Kitchen', 'span' => ''],
        ['cat' => 'frp',           'img' => 'frp-02.jpg',        'title' => 'FRP System — Finished Kitchen',         'location' => 'Charlotte, NC',   'sector' => 'Food Service',       'span' => ''],
        ['cat' => 'frp',           'img' => 'frp-03.jpg',        'title' => 'Southern Building Products FRP',        'location' => 'Nashville, TN',   'sector' => 'Healthcare',         'span' => ''],
        ['cat' => 'frp',           'img' => 'frp-04.jpg',        'title' => 'FRP with Cove Base',                    'location' => 'Duluth, GA',      'sector' => 'Retail',             'span' => 'col-span-2'],
        ['cat' => 'frp',           'img' => 'frp-05.jpg',        'title' => 'FRP Wall Panel Installation',           'location' => 'Raleigh, NC',     'sector' => 'Commercial Kitchen', 'span' => ''],
        ['cat' => 'drywall',       'img' => 'drywall-01.jpg',    'title' => 'Commercial Drywall — Hanging Crew',     'location' => 'Atlanta, GA',     'sector' => 'Retail TI',          'span' => 'col-span-2'],
        ['cat' => 'drywall',       'img' => 'drywall-02.jpg',    'title' => 'Taping & Mudding in Progress',          'location' => 'Charlotte, NC',   'sector' => 'Healthcare',         'span' => ''],
        ['cat' => 'drywall',       'img' => 'drywall-03.jpg',    'title' => 'Smooth Wall — Finished',                'location' => 'Nashville, TN',   'sector' => 'Corporate TI',       'span' => ''],
        ['cat' => 'drywall',       'img' => 'drywall-04.jpg',    'title' => 'Fire-Rated Drywall Assembly',           'location' => 'Duluth, GA',      'sector' => 'Healthcare',         'span' => ''],
        ['cat' => 'drywall',       'img' => 'drywall-05.jpg',    'title' => 'Commercial Drywall & Finishing',        'location' => 'Raleigh, NC',     'sector' => 'Retail TI',          'span' => ''],
        ['cat' => 'metal-framing', 'img' => 'framing-01.jpg',    'title' => 'Interior Metal Framing Layout',         'location' => 'Atlanta, GA',     'sector' => 'Healthcare',         'span' => ''],
        ['cat' => 'metal-framing', 'img' => 'framing-02.jpg',    'title' => 'Non-Structural Framing — In Progress',  'location' => 'Charlotte, NC',   'sector' => 'Retail TI',          'span' => ''],
        ['cat' => 'metal-framing', 'img' => 'framing-03.jpg',    'title' => 'Metal Framing — Healthcare Buildout',   'location' => 'Nashville, TN',   'sector' => 'Healthcare',         'span' => 'col-span-2'],
        ['cat' => 'metal-framing', 'img' => 'framing-04.jpg',    'title' => 'Completed Framing Before Drywall',      'location' => 'Duluth, GA',      'sector' => 'Corporate TI',       'span' => ''],
        ['cat' => 'metal-framing', 'img' => 'framing-05.jpg',    'title' => 'Interior Metal Framing',                'location' => 'Raleigh, NC',     'sector' => 'Retail TI',          'span' => ''],
        ['cat' => 'crew',          'img' => 'crew-01.jpg',        'title' => 'Imvera Group Crew',                    'location' => 'Atlanta, GA',     'sector' => 'Full PPE',           'span' => ''],
        ['cat' => 'crew',          'img' => 'crew-02.jpg',        'title' => 'Organized Jobsite',                    'location' => 'Charlotte, NC',   'sector' => 'Commercial TI',      'span' => ''],
        ['cat' => 'crew',          'img' => 'crew-03.jpg',        'title' => 'Imvera Crew — Uniforms & PPE',         'location' => 'Nashville, TN',   'sector' => 'Full PPE',           'span' => 'col-span-2'],
        ['cat' => 'crew',          'img' => 'crew-04.jpg',        'title' => 'Enclosed Trailer On Site',             'location' => 'Duluth, GA',      'sector' => 'Equipment',          'span' => ''],
        ['cat' => 'crew',          'img' => 'crew-05.jpg',        'title' => 'Team on Completed Project',            'location' => 'Raleigh, NC',     'sector' => 'Commercial TI',      'span' => ''],
      ];

      $cat_labels = [
        'eco-grip'      => 'ECO Grip Flooring',
        'cabinets'      => 'Cabinets & Countertops',
        'acoustical'    => 'Acoustical Ceilings',
        'frp'           => 'FRP Installation',
        'drywall'       => 'Drywall & Finishing',
        'metal-framing' => 'Metal Framing',
        'crew'          => 'Crew & Jobsite',
      ];

      foreach ($gallery_items as $item) :
        $col_span  = !empty($item['span']) ? $item['span'] : '';
        $cat_label = $cat_labels[$item['cat']] ?? '';
        $is_wide   = !empty($item['span']);
      ?>
        <div class="ig-card <?php echo esc_attr($col_span); ?> group relative overflow-hidden rounded-xl cursor-pointer"
             data-category="<?php echo esc_attr($item['cat']); ?>"
             style="aspect-ratio: <?php echo $is_wide ? '2/1' : '1/1'; ?>; background-color: #dde8e5;">

          <img src="<?php echo get_theme_file_uri('/images/gallery/' . $item['img']); ?>"
               alt="<?php echo esc_attr($item['title'] . ' — ' . $item['location']); ?>"
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out">

          <!-- Category badge — always visible -->
          <div class="absolute top-3 left-3">
            <span class="text-[10px] font-semibold tracking-wide uppercase px-2.5 py-1 rounded-full"
                  style="background: rgba(22,37,37,0.80); backdrop-filter: blur(4px); color: #2A9D93;">
              <?php echo esc_html($cat_label); ?>
            </span>
          </div>

          <!-- Hover overlay: Jet Black → Verdigris gradient tint -->
          <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5"
               style="background: linear-gradient(to top, rgba(22,37,37,0.92) 0%, rgba(42,157,147,0.35) 100%);">
            <!-- Gradient bar at top of overlay -->
            <div class="absolute top-0 left-0 right-0 h-0.5"
                 style="background: linear-gradient(to right, #6FC061, #2A9D93);"></div>
            <p class="text-white font-semibold text-sm leading-snug mb-1"><?php echo esc_html($item['title']); ?></p>
            <div class="flex items-center gap-2 flex-wrap">
              <span class="flex items-center gap-1 text-xs" style="color: #b8d4ce;">
                <svg class="w-3 h-3" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <?php echo esc_html($item['location']); ?>
              </span>
              <span style="color: rgba(241,246,242,0.2);">·</span>
              <span class="text-xs" style="color: #7fa89e;"><?php echo esc_html($item['sector']); ?></span>
            </div>
          </div>

        </div>
      <?php endforeach; ?>

    </div>

    <!-- Empty state -->
    <div id="ig-empty-state" class="hidden py-24 text-center">
      <svg class="w-12 h-12 mx-auto mb-4" style="color: #dde8e5;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
      </svg>
      <p class="text-sm" style="color: #7fa89e;">No projects found for this category.</p>
    </div>

  </div>
</section>


<!-- ============================================================
     BOTTOM CTA
     ============================================================ -->
<section class="py-16 lg:py-20 relative overflow-hidden" style="background-color: #162525;">
  <div class="absolute inset-0 pointer-events-none"
       style="background: radial-gradient(ellipse at 70% 50%, rgba(42,157,147,0.13) 0%, transparent 60%), radial-gradient(ellipse at 15% 75%, rgba(111,192,97,0.08) 0%, transparent 50%);"></div>
  <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <p class="text-xs font-semibold tracking-widest uppercase mb-4" style="color: #2A9D93;">Work With Us</p>
    <h2 class="text-3xl sm:text-4xl font-bold text-white leading-tight mb-4">
      Ready to See This Quality on Your Next Project?
    </h2>
    <p class="text-base leading-relaxed mb-8 max-w-xl mx-auto" style="color: #b8d4ce;">
      Every project in this gallery was executed by our own crews under the same operational standard. Reach out to discuss your scope.
    </p>
    <a href="/contact-us"
       class="inline-flex items-center gap-2 font-bold px-8 py-4 rounded transition-all duration-200 text-sm tracking-wide"
       style="background: linear-gradient(135deg, #6FC061, #2A9D93); color: #F1F6F2;"
       onmouseover="this.style.opacity='0.88'"
       onmouseout="this.style.opacity='1'">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
      </svg>
      Request a Scope Review
    </a>
  </div>
</section>


<!-- ============================================================
     FILTER JS
     ============================================================ -->
<script>
(function () {
  const filterBtns = document.querySelectorAll('.ig-filter');
  const cards      = document.querySelectorAll('.ig-card');
  const countEl    = document.getElementById('ig-visible-count');
  const emptyState = document.getElementById('ig-empty-state');

  function updateCount() {
    const visible = [...cards].filter(c => c.style.display !== 'none').length;
    countEl.textContent = visible;
    emptyState.classList.toggle('hidden', visible > 0);
  }

  function applyFilter(key) {
    cards.forEach(function (card) {
      card.style.display = (key === 'all' || card.dataset.category === key) ? '' : 'none';
    });
    updateCount();
  }

  updateCount();

  filterBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      filterBtns.forEach(function (b) {
        b.style.background = 'white';
        b.style.borderColor = '#dde8e5';
        b.style.color = '#585858';
      });
      btn.style.background = 'linear-gradient(135deg, #6FC061, #2A9D93)';
      btn.style.borderColor = 'transparent';
      btn.style.color = '#F1F6F2';
      applyFilter(btn.dataset.filter);
    });
  });
})();
</script>

<?php get_footer();