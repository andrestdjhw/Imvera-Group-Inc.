<?php
/*
  Template Name: Gallery
*/

get_header(); ?>

<?php
/* ── Gallery — IMAGE URLS ─────────────────────────────────────────────────────
 * Paste URLs from: WP Admin → Media → click image → Copy URL to clipboard
 * ─────────────────────────────────────────────────────────────────────────── */

// Hero background image
$ig_hero_img = '/wp-content/uploads/2026/04/ImveraHero2-scaled.jpg'; // e.g. /wp-content/uploads/2026/05/gallery-hero.jpg

// ── PROJECT IMAGES (MAIN / "AFTER") — one URL per project ID ─────────────────
$ig_project_imgs = [
  1  => '/wp-content/uploads/2026/06/EcoGripAfter.jpg', // ECO Grip — Food Service Kitchen
  2  => '/wp-content/uploads/2026/06/EcoGripAfter2.jpg', // ECO Grip — Quick Service Restaurant
  3  => '/wp-content/uploads/2026/06/AcousticalCeilingAfter.png', // Acoustical Ceilings — Medical Office
  4  => '/wp-content/uploads/2026/06/AcousticalCeiling2After-.jpeg', // Acoustical Ceilings — Retail TI
  5  => '/wp-content/uploads/2026/06/DrywallServiceAfter.png', // Drywall & Finishing — Commercial TI
  6  => '/wp-content/uploads/2026/06/DrywallService2After.jpg', // Drywall & Finishing — Fire-Rated Assembly
  7  => '/wp-content/uploads/2026/06/MetalFramingAfter2.png', // Metal Framing — Healthcare Buildout
  8  => '/wp-content/uploads/2026/06/MetalFraming2After.jpg', // Metal Framing — Office Partition
  9  => '/wp-content/uploads/2026/06/FRPInstallationAfter.jpeg', // FRP Installation — Commercial Kitchen
  10 => '/wp-content/uploads/2026/06/FRPInstallation2After.jpeg', // FRP Installation — Restroom
  11 => '/wp-content/uploads/2026/06/CabinetCountertopAfter-scaled.jpg', // Cabinets & Countertops — Break Room
  12 => '/wp-content/uploads/2026/06/PostConstructionAfter-scaled.jpg',
];

// ── POPUP "BEFORE" IMAGES ─────────────────────────────────────────────────────
$ig_before_imgs = [
  1  => '/wp-content/uploads/2026/06/EcoGripBefore.jpg',
  2  => '/wp-content/uploads/2026/06/EcoGripBefore2.jpg',
  3  => '/wp-content/uploads/2026/06/AcousticalCeilingBefore.jpeg',
  4  => '/wp-content/uploads/2026/06/AcousticalCeiling2Before.png',
  5  => '/wp-content/uploads/2026/06/DrywallServiceBefore.jpeg',
  6  => '/wp-content/uploads/2026/06/DrywallService2Before.png',
  7  => '/wp-content/uploads/2026/06/MetalFramingBefore.jpeg',
  8  => '/wp-content/uploads/2026/06/MetalFraming2Before.jpg',
  9  => '/wp-content/uploads/2026/06/FRPInstallationBeforeRemoved.png',
  10 => '/wp-content/uploads/2026/06/FRPInstallation2Before.png',
  11 => '/wp-content/uploads/2026/06/CabinetCountertopBefore-scaled.jpg',
  12 => '/wp-content/uploads/2026/06/PostConstructionBefore-scaled.jpg',
];

// ── POPUP "DETAIL" IMAGES ─────────────────────────────────────────────────────
$ig_detail_imgs = [
  1  => '/wp-content/uploads/2026/06/EcoGripAfter.jpg',
  2  => '/wp-content/uploads/2026/06/EcoGripAfter2.jpg',
  3  => '/wp-content/uploads/2026/06/AcousticalCeilingAfter.png',
  4  => '/wp-content/uploads/2026/06/AcousticalCeiling2After-.jpeg',
  5  => '/wp-content/uploads/2026/06/DrywallServiceAfter.png',
  6  => '/wp-content/uploads/2026/06/DrywallService2After.jpg',
  7  => '/wp-content/uploads/2026/06/MetalFramingAfter2.png',
  8  => '/wp-content/uploads/2026/06/MetalFraming2After.jpg',
  9  => '/wp-content/uploads/2026/06/FRPInstallationAfter.jpeg',
  10 => '/wp-content/uploads/2026/06/FRPInstallation2After.jpeg',
  11 => '/wp-content/uploads/2026/06/CabinetCountertopAfter-scaled.jpg',
  12 => '/wp-content/uploads/2026/06/PostConstructionBefore-scaled.jpg',
];
?>

<?php
/* ── Project data ─────────────────────────────────────────────────────────── */
$projects = [
  [
    'id'        => 1,
    'category'  => 'eco-grip',
    'cat_label' => 'ECO Grip Flooring',
    'title'     => 'Food Service Kitchen — Atlanta',
    'city'      => 'Atlanta, GA',
    'desc'      => 'Full ECO Grip commercial flooring installation for a national food service operator. Scope included demolition of existing flooring, substrate prep, certified ECO Grip installation, seam sealing, and drain integration.',
    'scope'     => 'ECO Grip certified install · Demolition · Drain integration · Seam sealing',
    'has_ba'    => true,
    'size'      => 'tall',
    'ph_before' => 'Before — existing commercial kitchen floor',
    'ph_after'  => 'After — ECO Grip certified installation complete',
    'ph_detail' => 'Detail — seam sealing and drain integration',
  ],
  [
    'id'        => 2,
    'category'  => 'eco-grip',
    'cat_label' => 'ECO Grip Flooring',
    'title'     => 'Quick Service Restaurant — Charlotte',
    'city'      => 'Charlotte, NC',
    'desc'      => 'ECO Grip installation for a franchise QSR rollout program. 480 sq ft completed with a 3-person crew. Full equipment reinstallation and final compliance check before handoff.',
    'scope'     => 'ECO Grip certified install · Equipment reinstallation · Compliance verification',
    'has_ba'    => false,
    'size'      => 'wide',
    'ph_before' => 'Before — bare substrate',
    'ph_after'  => 'After — ECO Grip QSR installation complete',
    'ph_detail' => 'Detail — ECO Grip surface finish close-up',
  ],
  [
    'id'        => 3,
    'category'  => 'ceilings',
    'cat_label' => 'Acoustical Ceilings',
    'title'     => 'Medical Office Buildout — Nashville',
    'city'      => 'Nashville, TN',
    'desc'      => 'Armstrong healthcare ceiling system installation across a multi-suite medical office buildout. 1,400 sq ft per day with a 2-person crew. Grid leveled and inspected before tile placement.',
    'scope'     => 'Armstrong healthcare system · Grid leveling · MEP coordination · 1,400 sq ft/day',
    'has_ba'    => true,
    'size'      => 'wide',
    'ph_before' => 'Before — open deck, MEP rough-in complete',
    'ph_after'  => 'After — Armstrong ceiling system installed',
    'ph_detail' => 'Detail — grid alignment and tile seating',
  ],
  [
    'id'        => 4,
    'category'  => 'ceilings',
    'cat_label' => 'Acoustical Ceilings',
    'title'     => 'Retail TI — Raleigh',
    'city'      => 'Raleigh, NC',
    'desc'      => 'USG acoustical ceiling installation for a national retail tenant improvement. Imvera re-leveled an existing grid left by a prior subcontractor and brought the scope to inspection-ready in two days.',
    'scope'     => 'USG system · Grid re-leveling · Inspection-ready handoff',
    'has_ba'    => false,
    'size'      => 'normal',
    'ph_before' => 'Before — out-of-level grid from prior sub',
    'ph_after'  => 'After — USG ceiling system leveled and complete',
    'ph_detail' => 'Detail — tile reveal and perimeter trim',
  ],
  [
    'id'        => 5,
    'category'  => 'drywall',
    'cat_label' => 'Drywall & Finishing',
    'title'     => 'Commercial TI — Atlanta',
    'city'      => 'Atlanta, GA',
    'desc'      => 'Full drywall and finishing scope for a commercial tenant improvement. All phases self-performed — hanging, taping, mudding, patching. Smooth Level 5 finish throughout.',
    'scope'     => 'Hang · Tape · Mud · Patch · Level 5 smooth finish',
    'has_ba'    => true,
    'size'      => 'normal',
    'ph_before' => 'Before — framed walls, no board',
    'ph_after'  => 'After — Level 5 smooth finish complete',
    'ph_detail' => 'Detail — corner bead and finish quality',
  ],
  [
    'id'        => 6,
    'category'  => 'drywall',
    'cat_label' => 'Drywall & Finishing',
    'title'     => 'Fire-Rated Assembly — Charlotte',
    'city'      => 'Charlotte, NC',
    'desc'      => 'Fire-rated drywall assembly for a multi-tenant commercial buildout. UL-listed assemblies installed per drawings with full inspection documentation. Passed first submission.',
    'scope'     => 'UL-listed fire-rated assembly · Inspection documentation · First-pass approval',
    'has_ba'    => false,
    'size'      => 'tall',
    'ph_before' => 'Before — framing complete, no board',
    'ph_after'  => 'After — fire-rated assembly installed and inspected',
    'ph_detail' => 'Detail — joint tape and fire caulk at penetrations',
  ],
  [
    'id'        => 7,
    'category'  => 'framing',
    'cat_label' => 'Metal Framing',
    'title'     => 'Healthcare Buildout — Nashville',
    'city'      => 'Nashville, TN',
    'desc'      => '20-gauge non-structural interior metal framing for a healthcare facility buildout. English-speaking foreman on site. Full PPE. Layout verified from structural drawings before framing started.',
    'scope'     => '20ga non-structural framing · Drawing execution · Full PPE · Inspection-ready',
    'has_ba'    => false,
    'size'      => 'wide',
    'ph_before' => 'Before — slab, no framing',
    'ph_after'  => 'After — interior framing complete, inspection-ready',
    'ph_detail' => 'Detail — header installation and track alignment',
  ],
  [
    'id'        => 8,
    'category'  => 'framing',
    'cat_label' => 'Metal Framing',
    'title'     => 'Office Partition Build — Atlanta',
    'city'      => 'Atlanta, GA',
    'desc'      => '16-gauge metal framing for a corporate office partition system. Executed from architectural drawings with full dimensional verification before any board was hung.',
    'scope'     => '16ga metal framing · Architectural drawing execution · Dimensional verification',
    'has_ba'    => false,
    'size'      => 'normal',
    'ph_before' => 'Before — open floor plate',
    'ph_after'  => 'After — partition system framed and plumb',
    'ph_detail' => 'Detail — stud spacing and track fastening',
  ],
  [
    'id'        => 9,
    'category'  => 'frp',
    'cat_label' => 'FRP Installation',
    'title'     => 'Commercial Kitchen — Atlanta',
    'city'      => 'Atlanta, GA',
    'desc'      => 'Southern Building Products FRP installation for a national food service kitchen. Fast Grab adhesive applied per manufacturer specs. 480 sq ft with a 3-person crew. No trim moldings per scope.',
    'scope'     => 'SBP FRP · Fast Grab adhesive · 480 sq ft/3-person crew · No trim moldings',
    'has_ba'    => true,
    'size'      => 'normal',
    'ph_before' => 'Before — bare CMU wall',
    'ph_after'  => 'After — FRP installed, seams sealed',
    'ph_detail' => 'Detail — FRP seam and cove base transition',
  ],
  [
    'id'        => 10,
    'category'  => 'frp',
    'cat_label' => 'FRP Installation',
    'title'     => 'Restroom Package — Charlotte',
    'city'      => 'Charlotte, NC',
    'desc'      => 'Full FRP wall panel installation for a commercial restroom package. Adhesive and cove base applied throughout. Passed health department inspection first submission.',
    'scope'     => 'SBP FRP · Cove base · Health dept. inspection pass — first submission',
    'has_ba'    => false,
    'size'      => 'normal',
    'ph_before' => 'Before — bare drywall, no panels',
    'ph_after'  => 'After — FRP restroom package complete',
    'ph_detail' => 'Detail — cove base and panel seam',
  ],
  [
    'id'        => 11,
    'category'  => 'cabinets',
    'cat_label' => 'Cabinets & Countertops',
    'title'     => 'Break Room Casework — Raleigh',
    'city'      => 'Raleigh, NC',
    'desc'      => 'Commercial casework and Corian countertop installation for a corporate break room buildout. Zero-defect finishing standard. Dedicated installation crew, not shared with other trades.',
    'scope'     => 'Commercial casework · Corian countertop · Zero-defect standard · Dedicated crew',
    'has_ba'    => false,
    'size'      => 'wide',
    'ph_before' => 'Before — framed and drywalled shell',
    'ph_after'  => 'After — casework and Corian countertop installed',
    'ph_detail' => 'Detail — Corian seam and edge profile',
  ],
  [
    'id'        => 12,
    'category'  => 'post-construction',
    'cat_label' => 'Post Construction',
    'title'     => 'Post-Construction Clean & Punch — Nashville',
    'city'      => 'Nashville, TN',
    'desc'      => 'Full post-construction service for a multi-suite commercial buildout. Scope included punch list execution, joint touch-ups, surface cleaning, screw dimple repair, and final finish coat across all trade scopes — delivered inspection-ready.',
    'scope'     => 'Punch list execution · Joint touch-ups · Surface cleaning · Final finish coat · Inspection-ready handoff',
    'has_ba'    => true,
    'size'      => 'wide',
    'ph_before' => 'Before — construction debris, unfinished joints, screw pops',
    'ph_after'  => 'After — punch complete, surfaces clean, inspection-ready',
    'ph_detail' => 'Detail — finish coat quality and joint tape close-up',
  ],
];

$categories = [
  'all'              => 'All Projects',
  'eco-grip'         => 'ECO Grip Flooring',
  'ceilings'         => 'Acoustical Ceilings',
  'drywall'          => 'Drywall & Finishing',
  'framing'          => 'Metal Framing',
  'frp'              => 'FRP Installation',
  'cabinets'         => 'Cabinets & Countertops',
  'multi'            => 'Multi-Trade',
  'post-construction'=> 'Post Construction',
];
?>


<!-- ════════════════════════════════════════════════
     HERO
     ════════════════════════════════════════════════ -->
<section class="relative overflow-hidden" style="min-height: 44vh; background-color: #162525;">

  <?php if ($ig_hero_img) : ?>
  <div class="absolute inset-0">
    <img src="<?php echo esc_url($ig_hero_img); ?>" alt="" aria-hidden="true" class="w-full h-full object-cover">
    <div class="absolute inset-0" style="background: linear-gradient(to right, rgba(22,37,37,0.96) 0%, rgba(22,37,37,0.82) 60%, rgba(22,37,37,0.6) 100%);"></div>
  </div>
  <?php else : ?>
  <div class="absolute inset-0 pointer-events-none" style="background: radial-gradient(ellipse at 75% 50%, rgba(42,157,147,0.1) 0%, transparent 60%);"></div>
  <?php endif; ?>

  <!-- Left accent strip -->
  <div class="absolute inset-y-0 left-0 w-1.5" style="background: linear-gradient(to bottom, #6FC061, #2A9D93);"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-end pb-14 lg:pb-20" style="min-height: 44vh; padding-top: 7rem;">
    <div class="flex items-center gap-3 mb-4">
      <span class="block w-8 h-px" style="background: linear-gradient(to right, #6FC061, #2A9D93);"></span>
      <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Portfolio</span>
    </div>
    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-[1.05] tracking-tight max-w-2xl mb-4">
      Work That Speaks<br>
      <span style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">for Itself.</span>
    </h1>
    <p class="text-base leading-relaxed max-w-lg" style="color: #b8d4ce;">
      Commercial interior execution across all six trade disciplines — self-performed by dedicated Imvera crews throughout the Southeast.
    </p>
  </div>
</section>


<!-- ════════════════════════════════════════════════
     FILTER BAR
     ════════════════════════════════════════════════ -->
<div class="bg-white sticky top-0 z-40" id="ig-filter-bar" style="border-bottom: 1px solid #dde8e5;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center gap-2 overflow-x-auto py-4" id="ig-filters" style="scrollbar-width: none; -webkit-overflow-scrolling: touch;">
      <?php foreach ($categories as $key => $label) : ?>
      <button
        class="ig-filter-btn flex-shrink-0 text-xs font-semibold tracking-wide uppercase px-4 py-2 rounded-full border transition-all duration-200 whitespace-nowrap"
        style="<?php echo $key === 'all'
          ? 'background-color: #162525; color: #F1F6F2; border-color: #162525;'
          : 'background: white; color: #585858; border-color: #dde8e5;'; ?>"
        data-filter="<?php echo $key; ?>">
        <?php echo $label; ?>
        <span class="ml-1 opacity-50">
          (<?php echo $key === 'all' ? count($projects) : count(array_filter($projects, fn($p) => $p['category'] === $key)); ?>)
        </span>
      </button>
      <?php endforeach; ?>
    </div>
  </div>
</div>


<!-- ════════════════════════════════════════════════
     MASONRY GRID
     ════════════════════════════════════════════════ -->
<section class="py-12 lg:py-16" style="background-color: #F1F6F2;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Results count -->
    <div class="flex items-center justify-between mb-8">
      <p style="font-size: 0.8125rem; color: #7fa89e;">
        Showing <span id="ig-count" class="font-semibold" style="color: #162525;"><?php echo count($projects); ?></span> projects
      </p>
      <a href="/contact-us"
         class="hidden md:inline-flex items-center gap-2 text-xs font-bold tracking-wide uppercase text-white px-5 py-2.5 rounded-lg transition-all duration-200"
         style="background: linear-gradient(135deg, #6FC061, #2A9D93);"
         onmouseover="this.style.opacity='0.88'"
         onmouseout="this.style.opacity='1'">
        Request a Scope Review
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
        </svg>
      </a>
    </div>

    <!-- Grid -->
    <div id="ig-grid" class="columns-1 sm:columns-2 lg:columns-3 gap-5 space-y-5">
      <?php foreach ($projects as $p) : ?>
      <div class="ig-project-card break-inside-avoid bg-white rounded-2xl overflow-hidden cursor-pointer group transition-all duration-300"
           style="border: 1px solid #dde8e5;"
           onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 36px rgba(22,37,37,0.1)'; this.style.borderColor='rgba(42,157,147,0.3)'"
           onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='#dde8e5'"
           data-category="<?php echo $p['category']; ?>"
           data-id="<?php echo $p['id']; ?>">

        <!-- Image -->
        <div class="relative overflow-hidden bg-gray-200 <?php echo $p['size'] === 'tall' ? 'aspect-[3/4]' : ($p['size'] === 'wide' ? 'aspect-[16/9]' : 'aspect-[4/3]'); ?>">

          <?php if (!empty($ig_project_imgs[$p['id']])) : ?>
          <img src="<?php echo esc_url($ig_project_imgs[$p['id']]); ?>"
               class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
               loading="lazy"
               alt="<?php echo esc_attr($p['title']); ?> — <?php echo esc_attr($p['city']); ?>">
          <?php else : ?>
          <div class="absolute inset-0 flex items-end justify-center pb-4 text-xs text-center px-4 transition-transform duration-500 group-hover:scale-105" style="color: #7fa89e; background-color: #e8efed;">
            <?php echo esc_html($p['ph_after']); ?>
          </div>
          <?php endif; ?>

          <!-- Category badge -->
          <div class="absolute top-3 left-3 z-10">
            <span class="text-xs font-bold tracking-wide uppercase px-2.5 py-1 rounded-full text-white"
                  style="background: linear-gradient(135deg, #162525, #2A9D93); font-size: 0.65rem;">
              <?php echo esc_html($p['cat_label']); ?>
            </span>
          </div>

          <!-- B&A badge -->
          <?php if ($p['has_ba']) : ?>
          <div class="absolute top-3 right-3 z-10 flex items-center gap-1.5 rounded-full px-2.5 py-1" style="background: rgba(22,37,37,0.6); backdrop-filter: blur(4px);">
            <svg class="w-3 h-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>
            </svg>
            <span style="font-size: 0.6rem; font-weight: 600; color: #F1F6F2; letter-spacing: 0.05em;">Before & After</span>
          </div>
          <?php endif; ?>

          <!-- Hover overlay -->
          <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300"
               style="background: rgba(22,37,37,0.3);">
            <div class="bg-white rounded-full p-3 shadow-lg">
              <svg class="w-5 h-5" style="color: #162525;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6"/>
              </svg>
            </div>
          </div>
        </div>

        <!-- Card body -->
        <div class="p-5">
          <h3 class="font-bold text-base leading-snug mb-2" style="color: #162525;"><?php echo esc_html($p['title']); ?></h3>
          <div class="flex items-center gap-1.5 mb-3">
            <svg class="w-3 h-3 flex-shrink-0" style="color: #2A9D93;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
            </svg>
            <span style="font-size: 0.6875rem; color: #7fa89e;"><?php echo esc_html($p['city']); ?></span>
          </div>
          <p class="text-xs leading-relaxed line-clamp-2" style="color: #585858;"><?php echo esc_html($p['desc']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Empty state -->
    <div id="ig-empty" class="hidden text-center py-24">
      <svg class="w-10 h-10 mx-auto mb-4" style="color: #dde8e5;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5z"/>
      </svg>
      <p style="font-size: 0.875rem; color: #7fa89e;">No projects in this category yet.</p>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════
     LIGHTBOX
     ════════════════════════════════════════════════ -->
<div id="ig-lightbox" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 md:p-8"
     style="background: rgba(10,16,16,0.94); backdrop-filter: blur(8px);">

  <!-- Close -->
  <button id="ig-lb-close"
          class="absolute top-5 right-5 w-10 h-10 rounded-full flex items-center justify-center text-white transition-colors z-10"
          style="background: rgba(241,246,242,0.1); border: 1px solid rgba(241,246,242,0.15);"
          onmouseover="this.style.background='rgba(241,246,242,0.2)'"
          onmouseout="this.style.background='rgba(241,246,242,0.1)'">
    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
    </svg>
  </button>

  <!-- Prev -->
  <button id="ig-lb-prev"
          class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full flex items-center justify-center text-white transition-colors z-10"
          style="background: rgba(241,246,242,0.1); border: 1px solid rgba(241,246,242,0.12);"
          onmouseover="this.style.background='rgba(42,157,147,0.3)'"
          onmouseout="this.style.background='rgba(241,246,242,0.1)'">
    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
    </svg>
  </button>

  <!-- Next -->
  <button id="ig-lb-next"
          class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full flex items-center justify-center text-white transition-colors z-10"
          style="background: rgba(241,246,242,0.1); border: 1px solid rgba(241,246,242,0.12);"
          onmouseover="this.style.background='rgba(42,157,147,0.3)'"
          onmouseout="this.style.background='rgba(241,246,242,0.1)'">
    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
    </svg>
  </button>

  <!-- Content panel -->
  <div class="relative w-full max-w-5xl bg-white rounded-2xl shadow-2xl overflow-hidden grid grid-cols-1 md:grid-cols-[1fr_360px]"
       style="max-height: 90vh; overflow-y: auto; min-height: 480px;">

    <!-- Left — image area -->
    <div class="relative" style="background: #dde8e5; min-height: 320px; height: 100%;">

      <!-- Tabs -->
      <div class="absolute top-3 left-3 z-10 flex gap-1.5" id="ig-lb-tabs">
        <button class="ig-lb-tab text-xs font-bold tracking-wide uppercase px-3 py-1.5 rounded-full transition-colors"
                style="font-size: 0.6875rem; background: #162525; color: #F1F6F2;" data-tab="after">After</button>
        <button class="ig-lb-tab text-xs font-bold tracking-wide uppercase px-3 py-1.5 rounded-full transition-colors"
                style="font-size: 0.6875rem; background: rgba(22,37,37,0.4); color: white;" data-tab="before">Before</button>
      </div>

      <!-- Image display — absolute fill so it always covers the full left panel -->
      <div id="ig-lb-img"
           class="absolute inset-0 flex items-center justify-center text-xs text-center px-8"
           style="background: #dde8e5; background-size: cover; background-position: center; color: #7fa89e;">
      </div>

      <!-- B&A drag slider -->
      <div id="ig-lb-ba-wrap" class="hidden absolute inset-0 cursor-col-resize select-none">
        <div id="ig-lb-ba-before" class="absolute inset-0" style="background: #c8d4d0; background-size: cover; background-position: center;"></div>
        <div id="ig-lb-ba-after"  class="absolute inset-0" style="clip-path: inset(0 50% 0 0); background: #dde8e5; background-size: cover; background-position: center;"></div>
        <div id="ig-lb-ba-handle" class="absolute top-0 bottom-0 flex items-center justify-center" style="width: 2px; background: white; left: 50%; transform: translateX(-50%);">
          <div class="w-9 h-9 rounded-full bg-white shadow-lg flex items-center justify-center pointer-events-none">
            <svg class="w-4 h-4" style="color: #162525;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15M15.75 9L12 5.25 8.25 9"/>
            </svg>
          </div>
        </div>
        <span class="absolute top-3 left-3 text-xs font-bold uppercase tracking-widest" style="color: rgba(241,246,242,0.7); font-size: 0.6rem;">Before</span>
        <span class="absolute top-3 right-3 text-xs font-bold uppercase tracking-widest" style="color: rgba(241,246,242,0.7); font-size: 0.6rem;">After</span>
        <button id="ig-lb-ba-exit"
                class="absolute bottom-3 right-3 text-xs font-bold tracking-wide uppercase bg-white rounded-full px-3 py-1.5 shadow transition-colors"
                style="font-size: 0.6875rem; color: #162525;"
                onmouseover="this.style.color='#2A9D93'"
                onmouseout="this.style.color='#162525'">
          View Photos
        </button>
      </div>
    </div>

    <!-- Right — project details -->
    <div class="p-7 md:p-8 overflow-y-auto">

      <!-- Category + city -->
      <div class="flex items-center gap-2 mb-3 flex-wrap">
        <span id="ig-lb-cat"
              class="text-xs font-bold tracking-wide uppercase text-white px-2.5 py-1 rounded-full"
              style="font-size: 0.65rem; background: linear-gradient(135deg, #162525, #2A9D93);"></span>
        <div class="flex items-center gap-1.5" style="font-size: 0.6875rem; color: #7fa89e;">
          <svg class="w-3 h-3" style="color: #2A9D93;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
          </svg>
          <span id="ig-lb-city"></span>
        </div>
      </div>

      <h2 id="ig-lb-title" class="font-bold leading-snug mb-4" style="font-size: 1.25rem; color: #162525;"></h2>
      <p id="ig-lb-desc" class="leading-relaxed mb-5" style="font-size: 0.8125rem; color: #585858; line-height: 1.75;"></p>

      <!-- Scope -->
      <div class="rounded-xl p-4 mb-5" style="background: #F1F6F2; border: 1px solid #dde8e5;">
        <div class="font-semibold tracking-wide uppercase mb-2" style="font-size: 0.6875rem; color: #7fa89e;">Scope Executed</div>
        <p id="ig-lb-scope" style="font-size: 0.75rem; color: #162525; line-height: 1.6;"></p>
      </div>

      <!-- B&A toggle -->
      <div id="ig-lb-ba-toggle-wrap" class="hidden mb-5">
        <button id="ig-lb-ba-toggle"
                class="w-full flex items-center justify-center gap-2 font-bold tracking-wide uppercase rounded-xl py-3 transition-colors"
                style="font-size: 0.6875rem; border: 1px solid #dde8e5; color: #162525; background: white;"
                onmouseover="this.style.borderColor='#2A9D93'; this.style.color='#2A9D93'; this.style.background='rgba(42,157,147,0.04)'"
                onmouseout="this.style.borderColor='#dde8e5'; this.style.color='#162525'; this.style.background='white'">
          <svg class="w-4 h-4" style="color: #2A9D93;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>
          </svg>
          Drag Before &amp; After
        </button>
      </div>

      <!-- CTA -->
      <a href="/contact-us"
         class="flex items-center justify-center gap-2 font-bold tracking-wide uppercase text-white rounded-xl py-3.5 transition-all duration-200"
         style="font-size: 0.6875rem; background: linear-gradient(135deg, #6FC061, #2A9D93);"
         onmouseover="this.style.opacity='0.88'"
         onmouseout="this.style.opacity='1'">
        Request a Scope Review
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
        </svg>
      </a>

      <!-- Nav counter -->
      <p class="text-center mt-4" style="font-size: 0.6875rem; color: #7fa89e;">
        <span id="ig-lb-pos"></span>
      </p>
    </div>
  </div>
</div>


<!-- ════════════════════════════════════════════════
     PROJECT DATA FOR JS
     ════════════════════════════════════════════════ -->
<script>
const IG_PROJECTS = <?php echo json_encode(array_map(function($p) use ($ig_project_imgs, $ig_before_imgs, $ig_detail_imgs) {
  return [
    'id'        => $p['id'],
    'category'  => $p['category'],
    'cat_label' => $p['cat_label'],
    'title'     => $p['title'],
    'city'      => $p['city'],
    'desc'      => $p['desc'],
    'scope'     => $p['scope'],
    'has_ba'    => $p['has_ba'],
    'ph_before' => $p['ph_before'],
    'ph_after'  => $p['ph_after'],
    'ph_detail' => $p['ph_detail'],
    'img_after'  => !empty($ig_project_imgs[$p['id']]) ? esc_url($ig_project_imgs[$p['id']]) : '',
    'img_before' => !empty($ig_before_imgs[$p['id']])  ? esc_url($ig_before_imgs[$p['id']])  : '',
    'img_detail' => !empty($ig_detail_imgs[$p['id']])  ? esc_url($ig_detail_imgs[$p['id']])  : '',
  ];
}, $projects)); ?>;
</script>


<!-- ════════════════════════════════════════════════
     JAVASCRIPT
     ════════════════════════════════════════════════ -->
<script>
(function () {

  /* ── FILTER ───────────────────────────────────── */
  const cards   = document.querySelectorAll('.ig-project-card');
  const btns    = document.querySelectorAll('.ig-filter-btn');
  const countEl = document.getElementById('ig-count');
  const empty   = document.getElementById('ig-empty');
  let activeFilter = 'all';
  let visibleIds = IG_PROJECTS.map(p => p.id);

  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      const f = btn.dataset.filter;
      activeFilter = f;

      btns.forEach(b => {
        const isActive = b.dataset.filter === f;
        b.style.backgroundColor = isActive ? '#162525' : 'white';
        b.style.color            = isActive ? '#F1F6F2' : '#585858';
        b.style.borderColor      = isActive ? '#162525' : '#dde8e5';
      });

      let shown = 0;
      visibleIds = [];
      cards.forEach(card => {
        const match = f === 'all' || card.dataset.category === f;
        card.style.display = match ? '' : 'none';
        if (match) { shown++; visibleIds.push(parseInt(card.dataset.id)); }
      });

      countEl.textContent = shown;
      empty.classList.toggle('hidden', shown > 0);
    });
  });


  /* ── LIGHTBOX ──────────────────────────────────── */
  const lb        = document.getElementById('ig-lightbox');
  const lbImg     = document.getElementById('ig-lb-img');
  const lbTitle   = document.getElementById('ig-lb-title');
  const lbCat     = document.getElementById('ig-lb-cat');
  const lbCity    = document.getElementById('ig-lb-city');
  const lbDesc    = document.getElementById('ig-lb-desc');
  const lbScope   = document.getElementById('ig-lb-scope');
  const lbPos     = document.getElementById('ig-lb-pos');
  const lbBaWrap  = document.getElementById('ig-lb-ba-wrap');
  const lbBaTog   = document.getElementById('ig-lb-ba-toggle');
  const lbBaTWrap = document.getElementById('ig-lb-ba-toggle-wrap');
  const lbBaExit  = document.getElementById('ig-lb-ba-exit');
  const lbTabs    = document.querySelectorAll('.ig-lb-tab');
  let currentId   = null;
  let activeTab   = 'after';
  let baActive    = false;

  function getProject(id) { return IG_PROJECTS.find(p => p.id === id); }

  function paint(el, url, placeholder) {
    if (url) {
      el.style.backgroundImage = `url("${url}")`;
      el.textContent = '';
    } else {
      el.style.backgroundImage = '';
      el.textContent = placeholder || '';
    }
  }

  function openLightbox(id) {
    currentId = id;
    activeTab = 'after';
    baActive  = false;
    renderLightbox();
    lb.classList.remove('hidden');
    lb.classList.add('flex');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    lb.classList.add('hidden');
    lb.classList.remove('flex');
    document.body.style.overflow = '';
    currentId = null;
  }

  function renderLightbox() {
    const p = getProject(currentId);
    if (!p) return;

    lbTitle.textContent = p.title;
    lbCat.textContent   = p.cat_label;
    lbCity.textContent  = p.city;
    lbDesc.textContent  = p.desc;
    lbScope.textContent = p.scope;

    const idx = visibleIds.indexOf(p.id);
    lbPos.textContent = `Project ${idx + 1} of ${visibleIds.length}`;

    // Tabs
    lbTabs.forEach(t => {
      const isActive = t.dataset.tab === activeTab;
      t.style.background = isActive ? '#162525' : 'rgba(22,37,37,0.4)';
      t.style.color      = '#F1F6F2';
    });

    // Image
    const imgMap = { after: p.img_after, before: p.img_before, detail: p.img_detail };
    const phMap  = { after: p.ph_after,  before: p.ph_before,  detail: p.ph_detail  };
    paint(lbImg, imgMap[activeTab], phMap[activeTab] || p.ph_after);

    // B&A
    lbBaTWrap.classList.toggle('hidden', !p.has_ba);
    lbBaWrap.classList.add('hidden');
    document.getElementById('ig-lb-tabs').style.display = '';

    if (baActive && p.has_ba) {
      paint(document.getElementById('ig-lb-ba-before'), p.img_before, p.ph_before);
      paint(document.getElementById('ig-lb-ba-after'),  p.img_after,  p.ph_after);
      document.getElementById('ig-lb-ba-after').style.clipPath  = 'inset(0 50% 0 0)';
      document.getElementById('ig-lb-ba-handle').style.left     = '50%';
      lbBaWrap.classList.remove('hidden');
      document.getElementById('ig-lb-tabs').style.display = 'none';
    }
  }

  // Tab clicks
  lbTabs.forEach(t => {
    t.addEventListener('click', () => { activeTab = t.dataset.tab; renderLightbox(); });
  });

  // B&A toggle
  lbBaTog?.addEventListener('click',  () => { baActive = true;  renderLightbox(); });
  lbBaExit?.addEventListener('click', () => { baActive = false; renderLightbox(); });

  // B&A drag
  let lbDrag = false;
  lbBaWrap.addEventListener('mousedown',  e => { lbDrag = true; lbSetBA(e.clientX); });
  lbBaWrap.addEventListener('touchstart', e => { lbDrag = true; lbSetBA(e.touches[0].clientX); }, { passive: true });
  window.addEventListener('mousemove',    e => { if (lbDrag) lbSetBA(e.clientX); });
  window.addEventListener('touchmove',    e => { if (lbDrag) lbSetBA(e.touches[0].clientX); }, { passive: true });
  window.addEventListener('mouseup',      () => lbDrag = false);
  window.addEventListener('touchend',     () => lbDrag = false);

  function lbSetBA(x) {
    const r   = lbBaWrap.getBoundingClientRect();
    const pct = Math.min(Math.max((x - r.left) / r.width, 0), 1) * 100;
    document.getElementById('ig-lb-ba-after').style.clipPath = `inset(0 ${100 - pct}% 0 0)`;
    document.getElementById('ig-lb-ba-handle').style.left    = pct + '%';
  }

  // Open on card click
  cards.forEach(card => {
    card.addEventListener('click', () => openLightbox(parseInt(card.dataset.id)));
  });

  // Close
  document.getElementById('ig-lb-close').addEventListener('click', closeLightbox);
  lb.addEventListener('click', e => { if (e.target === lb) closeLightbox(); });

  // Prev / Next
  document.getElementById('ig-lb-prev').addEventListener('click', e => {
    e.stopPropagation();
    const idx = visibleIds.indexOf(currentId);
    currentId = visibleIds[(idx - 1 + visibleIds.length) % visibleIds.length];
    activeTab = 'after'; baActive = false;
    renderLightbox();
  });
  document.getElementById('ig-lb-next').addEventListener('click', e => {
    e.stopPropagation();
    const idx = visibleIds.indexOf(currentId);
    currentId = visibleIds[(idx + 1) % visibleIds.length];
    activeTab = 'after'; baActive = false;
    renderLightbox();
  });

  // Keyboard
  document.addEventListener('keydown', e => {
    if (!currentId) return;
    if (e.key === 'Escape')     closeLightbox();
    if (e.key === 'ArrowLeft')  document.getElementById('ig-lb-prev').click();
    if (e.key === 'ArrowRight') document.getElementById('ig-lb-next').click();
  });

  // Touch swipe
  let lbTX = 0;
  lb.addEventListener('touchstart', e => lbTX = e.touches[0].clientX, { passive: true });
  lb.addEventListener('touchend',   e => {
    const dx = e.changedTouches[0].clientX - lbTX;
    if (Math.abs(dx) > 50) {
      dx < 0
        ? document.getElementById('ig-lb-next').click()
        : document.getElementById('ig-lb-prev').click();
    }
  });

  /* ── SCROLL REVEAL ─────────────────────────────── */
  const ro = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.style.opacity   = '1';
        e.target.style.transform = 'translateY(0)';
        ro.unobserve(e.target);
      }
    });
  }, { threshold: 0.08 });

  cards.forEach((c, i) => {
    c.style.opacity    = '0';
    c.style.transform  = 'translateY(20px)';
    c.style.transition = `opacity .5s ease ${(i % 6) * 60}ms, transform .5s ease ${(i % 6) * 60}ms`;
    ro.observe(c);
  });

})();
</script>

<?php get_footer(); ?>