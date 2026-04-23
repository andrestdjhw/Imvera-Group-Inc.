<?php
/*
  Template Name: Contact Us
*/

get_header(); ?>


<!-- ============================================================
     HERO
     ============================================================ -->
<section class="relative overflow-hidden" style="background-color: #162525;">
  <!-- Left accent strip -->
  <div class="absolute inset-y-0 left-0 w-1.5"
       style="background: linear-gradient(to bottom, #6FC061, #2A9D93);"></div>
  <!-- Subtle radial orb -->
  <div class="absolute inset-0 pointer-events-none"
       style="background: radial-gradient(ellipse at 80% 40%, rgba(42,157,147,0.1) 0%, transparent 55%);"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
    <div class="max-w-2xl">
      <div class="inline-flex items-center gap-2 rounded-full px-4 py-1.5 mb-6"
           style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15)); border: 1px solid rgba(42,157,147,0.35);">
        <span class="w-2 h-2 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
        <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Contact Imvera Group</span>
      </div>
      <h1 class="text-4xl sm:text-5xl font-bold text-white leading-[1.05] tracking-tight mb-5">
        Let's Talk About Your Next
        <span style="background: linear-gradient(135deg, #6FC061, #2A9D93); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"> Interior Project.</span>
      </h1>
      <p class="text-base leading-relaxed mb-3" style="color: #b8d4ce;">
        Imvera Group works with general contractors, franchise rollout contractors, and commercial developers across the Southeast who need multi trade interior execution that protects schedules, passes inspections, and eliminates operational risk.
      </p>
      <p class="text-sm leading-relaxed" style="color: #7fa89e;">
        Fill out the form or reach out directly. All project inquiries receive a response within one business day.
      </p>
    </div>
  </div>
</section>


<!-- ============================================================
     FORM + DIRECT CONTACT
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #F1F6F2;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 xl:gap-16">


      <!-- ── LEFT: Contact Form (60%) ── -->
      <div id="render-contact-form-light"
          class="lg:col-span-3"
          data-variant="light"
          data-title="Request a Scope Review"
          data-subtitle="We Respond Within 1 Business Day">
      </div>


      <!-- ── RIGHT: Direct Contact (40%) ── -->
      <div class="lg:col-span-2">
        <div class="lg:sticky lg:top-24 flex flex-col gap-5">

          <!-- Response time callout -->
          <div class="rounded-xl px-5 py-4 flex items-start gap-3"
               style="background: linear-gradient(135deg, rgba(111,192,97,0.1), rgba(42,157,147,0.1)); border: 1px solid rgba(42,157,147,0.25);">
            <svg class="w-5 h-5 flex-shrink-0 mt-0.5" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <div>
              <p class="font-bold text-sm" style="color: #162525;">Response Within 1 Business Day</p>
              <p class="text-xs mt-0.5 leading-relaxed" style="color: #585858;">All project inquiries receive a direct response. No auto replies, no delays.</p>
            </div>
          </div>

          <!-- Contact details card -->
          <div class="rounded-xl p-6 flex flex-col gap-5 relative overflow-hidden"
               style="background-color: #162525;">
            <!-- Subtle orb -->
            <div class="absolute inset-0 pointer-events-none"
                 style="background: radial-gradient(ellipse at 90% 10%, rgba(111,192,97,0.1) 0%, transparent 55%);"></div>

            <h3 class="relative text-white font-bold text-base pb-4" style="border-bottom: 1px solid rgba(241,246,242,0.08);">Direct Contact</h3>

            <!-- Phone -->
            <a href="tel:6788363266" class="relative flex items-start gap-3 group">
              <div class="w-9 h-9 rounded-lg flex items-center justify-center flex-shrink-0 transition-all duration-200"
                   style="background: rgba(42,157,147,0.12);"
                   onmouseover="this.style.background='rgba(42,157,147,0.22)'"
                   onmouseout="this.style.background='rgba(42,157,147,0.12)'">
                <svg class="w-4 h-4" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
              </div>
              <div>
                <p class="text-xs mb-0.5" style="color: #7fa89e;">Phone</p>
                <p class="font-semibold text-sm transition-colors duration-200 text-white"
                   onmouseover="this.style.color='#2A9D93'"
                   onmouseout="this.style.color='white'">678-836-3266</p>
              </div>
            </a>

            <!-- Email -->
            <a href="mailto:info@imveragroupinc.com" class="relative flex items-start gap-3 group">
              <div class="w-9 h-9 rounded-lg flex items-center justify-center flex-shrink-0"
                   style="background: rgba(42,157,147,0.12);">
                <svg class="w-4 h-4" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
              </div>
              <div>
                <p class="text-xs mb-0.5" style="color: #7fa89e;">Email</p>
                <p class="font-semibold text-sm transition-colors duration-200 text-white"
                   onmouseover="this.style.color='#2A9D93'"
                   onmouseout="this.style.color='white'">info@imveragroup.com</p>
              </div>
            </a>

            <!-- Address -->
            <div class="relative flex items-start gap-3">
              <div class="w-9 h-9 rounded-lg flex items-center justify-center flex-shrink-0"
                   style="background: rgba(42,157,147,0.12);">
                <svg class="w-4 h-4" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
              </div>
              <div>
                <p class="text-xs mb-0.5" style="color: #7fa89e;">Mailing Address</p>
                <p class="font-semibold text-sm text-white leading-snug">2975 Breckinridge Blvd</p>
                <p class="text-xs mt-0.5" style="color: #7fa89e;">Suite 11, Duluth, GA 30096</p>
              </div>
            </div>

            <!-- Divider -->
            <div style="border-top: 1px solid rgba(241,246,242,0.08);"></div>

            <!-- Active States -->
            <div class="relative flex items-start gap-3">
              <div class="w-9 h-9 rounded-lg flex items-center justify-center flex-shrink-0"
                   style="background: rgba(42,157,147,0.12);">
                <svg class="w-4 h-4" style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                </svg>
              </div>
              <div>
                <p class="text-xs mb-2" style="color: #7fa89e;">Active States</p>
                <div class="flex flex-wrap gap-1.5">
                  <?php foreach (['GA', 'NC', 'SC', 'TN', 'TX', 'KY', 'FL'] as $st) : ?>
                    <span class="text-xs font-semibold px-2.5 py-1 rounded"
                          style="background: rgba(241,246,242,0.07); color: #b8d4ce;"><?php echo $st; ?></span>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>

          <!-- What happens next -->
          <div class="bg-white rounded-xl p-6" style="border: 1px solid #dde8e5;">
            <h3 class="font-bold text-sm mb-4" style="color: #162525;">What Happens After You Submit</h3>
            <ol class="flex flex-col gap-4">
              <?php
              $steps = [
                ['step' => '01', 'text' => 'We review your inquiry and scope details within one business day.'],
                ['step' => '02', 'text' => 'A member of our team contacts you directly by phone or email.'],
                ['step' => '03', 'text' => 'We discuss your project scope, timeline, and requirements.'],
              ];
              foreach ($steps as $s) : ?>
                <li class="flex items-start gap-3">
                  <span class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5 text-white text-[10px] font-bold"
                        style="background: linear-gradient(135deg, #6FC061, #2A9D93);">
                    <?php echo $s['step']; ?>
                  </span>
                  <p class="text-xs leading-relaxed" style="color: #585858;"><?php echo esc_html($s['text']); ?></p>
                </li>
              <?php endforeach; ?>
            </ol>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     FAQ
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #fff;">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 xl:gap-16">

      <div>
        <p class="text-xs font-semibold tracking-widest uppercase mb-3" style="color: #2A9D93;">FAQ</p>
        <h2 class="text-2xl sm:text-3xl font-bold leading-tight mb-4" style="color: #162525;">
          Frequently Asked Questions.
        </h2>
        <p class="text-sm leading-relaxed mb-6" style="color: #585858;">
          Common questions from GC partners before reaching out.
        </p>
        <a href="#"
           onclick="document.querySelector('form').scrollIntoView({behavior:'smooth'}); return false;"
           class="inline-flex items-center gap-2 font-semibold px-6 py-3.5 rounded transition-all duration-200 text-sm text-white"
           style="background-color: #162525;"
           onmouseover="this.style.backgroundColor='#2A9D93'"
           onmouseout="this.style.backgroundColor='#162525'">
          Send Project Inquiry
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
          </svg>
        </a>
      </div>

      <div class="lg:col-span-2" style="border-top: 1px solid #e8efed;">
        <?php
        $faqs = [
          ['q' => 'Do you work as a subcontractor or general contractor?',          'a' => 'Imvera Group operates exclusively as a specialty subcontractor. We partner with general contractors, franchise rollout contractors, and commercial developers. We do not self-perform general contracting work.'],
          ['q' => 'Which trades do you self-perform?',                              'a' => 'All six: ECO Grip commercial flooring, cabinet and countertop installation, acoustical ceilings, FRP installation, drywall and finishing, and metal framing. Every scope is performed by our own dedicated crews — no brokered labor.'],
          ['q' => 'Can you handle multiple trades on the same project under one contract?', 'a' => 'Yes. Multi-trade execution under one contract is one of Imvera\'s core advantages. We coordinate all interior scopes internally, eliminating the overhead of managing multiple single-trade subcontractors.'],
          ['q' => 'Are you a certified ECO Grip installer?',                         'a' => 'Yes. Imvera Group holds certified installer status for ECO Grip commercial flooring systems — one of the credentials required by leading national food service operators.'],
          ['q' => 'What is your communication standard during active projects?',     'a' => 'Daily progress updates with photo documentation are sent to GC project contacts throughout every active project. Issues are reported immediately before they affect schedule. You receive information without having to ask for it.'],
          ['q' => 'Do you operate outside the Southeast?',                          'a' => 'Our current active operations span Georgia, North Carolina, South Carolina, Tennessee, Texas, Kentucky, and Florida. Contact us directly for projects in adjacent states.'],
          ['q' => 'What warranty do you offer?',                                    'a' => 'All completed installations are backed by a 1-year workmanship warranty.'],
        ];
        foreach ($faqs as $i => $faq) : ?>
          <details class="group py-5 cursor-pointer" style="border-bottom: 1px solid #e8efed;" <?php echo $i === 0 ? 'open' : ''; ?>>
            <summary class="flex items-center justify-between gap-4 list-none marker:hidden [&::-webkit-details-marker]:hidden">
              <h3 class="font-semibold text-sm leading-snug pr-2" style="color: #162525;"><?php echo esc_html($faq['q']); ?></h3>
              <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 transition-all duration-200"
                   style="border: 1px solid #dde8e5; background: #F1F6F2;">
                <svg class="w-3 h-3 group-open:rotate-45 transition-transform duration-200"
                     style="color: #2A9D93;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
                </svg>
              </div>
            </summary>
            <p class="mt-3 text-sm leading-relaxed max-w-2xl" style="color: #585858;"><?php echo esc_html($faq['a']); ?></p>
          </details>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     CHECKBOX JS
     ============================================================ -->
<script>
(function () {
  document.querySelectorAll('.ig-checkbox').forEach(function (cb) {
    cb.addEventListener('change', function () {
      const label = cb.closest('.ig-checkbox-label');
      if (cb.checked) {
        label.style.borderColor = '#2A9D93';
        label.style.background  = 'rgba(42,157,147,0.06)';
      } else {
        label.style.borderColor = '#dde8e5';
        label.style.background  = '#F1F6F2';
      }
    });
  });
})();
</script>

<?php get_footer();