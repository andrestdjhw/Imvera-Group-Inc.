<?php
/*
  Template Name: Contact Us
*/

get_header(); ?>


<!-- ============================================================
     HERO
     ============================================================ -->
<section class="bg-[#0f1c2e] py-16 lg:py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl">
      <div class="inline-flex items-center gap-2 bg-[#d4a843]/15 border border-[#d4a843]/30 rounded-full px-4 py-1.5 mb-6">
        <span class="w-2 h-2 rounded-full bg-[#d4a843]"></span>
        <span class="text-[#d4a843] text-xs font-semibold tracking-widest uppercase">Contact Imvera Group</span>
      </div>
      <h1 class="text-4xl sm:text-5xl font-bold text-white leading-[1.05] tracking-tight mb-5">
        Let's Talk About Your Next
        <span class="text-[#d4a843]"> Interior Project.</span>
      </h1>
      <p class="text-gray-300 text-base leading-relaxed mb-3">
        Imvera Group works with general contractors, franchise rollout contractors, and commercial developers across the Southeast who need multi-trade interior execution that protects schedules, passes inspections, and eliminates operational risk.
      </p>
      <p class="text-gray-400 text-sm leading-relaxed">
        Fill out the form or reach out directly. All project inquiries receive a response within one business day.
      </p>
    </div>
  </div>
</section>


<!-- ============================================================
     FORM + DIRECT CONTACT — TWO COLUMN
     ============================================================ -->
<section class="bg-white py-16 lg:py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 xl:gap-16">


      <!-- ── LEFT: Contact Form (60%) ── -->
      <div class="lg:col-span-3">
        <h2 class="text-xl font-bold text-[#0f1c2e] mb-1">Send a Project Inquiry</h2>
        <p class="text-sm text-gray-500 mb-7">All fields marked * are required.</p>

        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" class="flex flex-col gap-5">
          <?php wp_nonce_field('imvera_contact', 'imvera_contact_nonce'); ?>
          <input type="hidden" name="action" value="imvera_contact">

          <!-- Row 1: Name + Company -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-semibold text-[#0f1c2e] mb-1.5">Full Name *</label>
              <input type="text" name="full_name" required
                     class="w-full border border-gray-200 focus:border-[#d4a843] bg-white rounded-lg px-4 py-3 text-[#0f1c2e] text-sm placeholder-gray-400 outline-none transition-colors duration-200"
                     placeholder="John Smith">
            </div>
            <div>
              <label class="block text-xs font-semibold text-[#0f1c2e] mb-1.5">Company Name *</label>
              <input type="text" name="company" required
                     class="w-full border border-gray-200 focus:border-[#d4a843] bg-white rounded-lg px-4 py-3 text-[#0f1c2e] text-sm placeholder-gray-400 outline-none transition-colors duration-200"
                     placeholder="ABC General Contractors">
            </div>
          </div>

          <!-- Row 2: Phone + Email -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-semibold text-[#0f1c2e] mb-1.5">Phone Number *</label>
              <input type="tel" name="phone" required
                     class="w-full border border-gray-200 focus:border-[#d4a843] bg-white rounded-lg px-4 py-3 text-[#0f1c2e] text-sm placeholder-gray-400 outline-none transition-colors duration-200"
                     placeholder="(678) 000-0000">
            </div>
            <div>
              <label class="block text-xs font-semibold text-[#0f1c2e] mb-1.5">Email Address *</label>
              <input type="email" name="email" required
                     class="w-full border border-gray-200 focus:border-[#d4a843] bg-white rounded-lg px-4 py-3 text-[#0f1c2e] text-sm placeholder-gray-400 outline-none transition-colors duration-200"
                     placeholder="john@company.com">
            </div>
          </div>

          <!-- Row 3: Project Type + State -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-semibold text-[#0f1c2e] mb-1.5">Project Type *</label>
              <div class="relative">
                <select name="project_type" required
                        class="w-full border border-gray-200 focus:border-[#d4a843] bg-white rounded-lg px-4 py-3 text-[#0f1c2e] text-sm outline-none transition-colors duration-200 appearance-none cursor-pointer">
                  <option value="" disabled selected>Select project type…</option>
                  <option value="retail-ti">Retail TI</option>
                  <option value="healthcare">Healthcare / Medical</option>
                  <option value="industrial">Industrial / Warehouse</option>
                  <option value="franchise">Franchise Rollout</option>
                  <option value="commercial-dev">Commercial Development</option>
                  <option value="other">Other</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                  <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                  </svg>
                </div>
              </div>
            </div>
            <div>
              <label class="block text-xs font-semibold text-[#0f1c2e] mb-1.5">Project State *</label>
              <div class="relative">
                <select name="project_state" required
                        class="w-full border border-gray-200 focus:border-[#d4a843] bg-white rounded-lg px-4 py-3 text-[#0f1c2e] text-sm outline-none transition-colors duration-200 appearance-none cursor-pointer">
                  <option value="" disabled selected>Select a state…</option>
                  <option value="GA">Georgia (GA)</option>
                  <option value="NC">North Carolina (NC)</option>
                  <option value="SC">South Carolina (SC)</option>
                  <option value="TN">Tennessee (TN)</option>
                  <option value="TX">Texas (TX)</option>
                  <option value="KY">Kentucky (KY)</option>
                  <option value="FL">Florida (FL)</option>
                  <option value="other">Other</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                  <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                  </svg>
                </div>
              </div>
            </div>
          </div>

          <!-- Row 4: Timeline -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-semibold text-[#0f1c2e] mb-1.5">Project Timeline</label>
              <div class="relative">
                <select name="timeline"
                        class="w-full border border-gray-200 focus:border-[#d4a843] bg-white rounded-lg px-4 py-3 text-[#0f1c2e] text-sm outline-none transition-colors duration-200 appearance-none cursor-pointer">
                  <option value="" disabled selected>Select timeline…</option>
                  <option value="immediate">Immediate</option>
                  <option value="1-3-months">1–3 Months</option>
                  <option value="3-6-months">3–6 Months</option>
                  <option value="planning">Planning Stage</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                  <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                  </svg>
                </div>
              </div>
            </div>
          </div>

          <!-- Row 5: Trade Scope Checkboxes -->
          <div>
            <label class="block text-xs font-semibold text-[#0f1c2e] mb-3">Trade Scope Needed</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
              <?php
              $trades = [
                ['value' => 'eco-grip',       'label' => 'ECO Grip Flooring'],
                ['value' => 'cabinets',        'label' => 'Cabinets &amp; Countertops'],
                ['value' => 'acoustical',      'label' => 'Acoustical Ceilings'],
                ['value' => 'frp',             'label' => 'FRP Installation'],
                ['value' => 'drywall',         'label' => 'Drywall &amp; Finishing'],
                ['value' => 'metal-framing',   'label' => 'Metal Framing'],
              ];
              foreach ($trades as $trade) : ?>
                <label class="ig-checkbox-label flex items-center gap-3 border border-gray-200 rounded-lg px-4 py-3 cursor-pointer hover:border-[#d4a843]/50 transition-colors duration-150 group">
                  <input type="checkbox" name="trades[]" value="<?php echo esc_attr($trade['value']); ?>"
                         class="ig-checkbox w-4 h-4 rounded border-gray-300 accent-[#d4a843] cursor-pointer flex-shrink-0">
                  <span class="text-sm text-gray-600 group-hover:text-[#0f1c2e] transition-colors duration-150"><?php echo $trade['label']; ?></span>
                </label>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Row 6: Additional Info -->
          <div>
            <label class="block text-xs font-semibold text-[#0f1c2e] mb-1.5">Additional Information</label>
            <textarea name="message" rows="4"
                      class="w-full border border-gray-200 focus:border-[#d4a843] bg-white rounded-lg px-4 py-3 text-[#0f1c2e] text-sm placeholder-gray-400 outline-none transition-colors duration-200 resize-none"
                      placeholder="Briefly describe your project scope, timeline, or any other details that will help us prepare for our conversation…"></textarea>
          </div>

          <!-- Submit -->
          <div>
            <button type="submit"
                    class="w-full bg-[#d4a843] hover:bg-[#c49a38] text-[#0f1c2e] font-bold py-4 rounded-lg transition-colors duration-200 text-sm tracking-wide flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
              </svg>
              Send Project Inquiry
            </button>
            <p class="text-center text-xs text-gray-400 mt-3">
              <svg class="w-3.5 h-3.5 inline-block mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
              </svg>
              Your information is confidential and will only be used to respond to your inquiry.
            </p>
          </div>

        </form>
      </div>


      <!-- ── RIGHT: Direct Contact Info (40%) ── -->
      <div class="lg:col-span-2">

        <div class="lg:sticky lg:top-24 flex flex-col gap-5">

          <!-- Response time callout -->
          <div class="bg-[#d4a843]/10 border border-[#d4a843]/30 rounded-xl px-5 py-4 flex items-start gap-3">
            <svg class="w-5 h-5 text-[#d4a843] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <div>
              <p class="text-[#0f1c2e] font-bold text-sm">Response Within 1 Business Day</p>
              <p class="text-gray-500 text-xs mt-0.5 leading-relaxed">All project inquiries receive a direct response from our team. No auto-replies, no delays.</p>
            </div>
          </div>

          <!-- Contact details card -->
          <div class="bg-[#0f1c2e] rounded-xl p-6 flex flex-col gap-5">

            <h3 class="text-white font-bold text-base border-b border-white/10 pb-4">Direct Contact</h3>

            <!-- Phone -->
            <a href="tel:6788363266" class="flex items-start gap-3 group">
              <div class="w-9 h-9 bg-[#d4a843]/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-[#d4a843]/20 transition-colors duration-200">
                <svg class="w-4 h-4 text-[#d4a843]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
              </div>
              <div>
                <p class="text-gray-500 text-xs mb-0.5">Phone</p>
                <p class="text-white font-semibold text-sm group-hover:text-[#d4a843] transition-colors duration-200">678-836-3266</p>
              </div>
            </a>

            <!-- Email -->
            <a href="mailto:info@imveragroupinc.com" class="flex items-start gap-3 group">
              <div class="w-9 h-9 bg-[#d4a843]/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-[#d4a843]/20 transition-colors duration-200">
                <svg class="w-4 h-4 text-[#d4a843]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
              </div>
              <div>
                <p class="text-gray-500 text-xs mb-0.5">Email</p>
                <p class="text-white font-semibold text-sm group-hover:text-[#d4a843] transition-colors duration-200">info@imveragroupinc.com</p>
              </div>
            </a>

            <!-- Mailing Address -->
            <div class="flex items-start gap-3">
              <div class="w-9 h-9 bg-[#d4a843]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-4 h-4 text-[#d4a843]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
              </div>
              <div>
                <p class="text-gray-500 text-xs mb-0.5">Mailing Address</p>
                <p class="text-white font-semibold text-sm leading-snug">2975 Breckinridge Blvd</p>
                <p class="text-gray-400 text-xs">Suite 11, Duluth, GA 30096</p>
              </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-white/10"></div>

            <!-- Active States -->
            <div class="flex items-start gap-3">
              <div class="w-9 h-9 bg-[#d4a843]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-4 h-4 text-[#d4a843]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                </svg>
              </div>
              <div>
                <p class="text-gray-500 text-xs mb-1.5">Active States</p>
                <div class="flex flex-wrap gap-1.5">
                  <?php foreach (['GA', 'NC', 'SC', 'TN', 'TX', 'KY', 'FL'] as $st) : ?>
                    <span class="bg-white/8 text-gray-300 text-xs font-semibold px-2.5 py-1 rounded"><?php echo $st; ?></span>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>

          </div>

          <!-- What to Expect card -->
          <div class="bg-[#f7f5f0] border border-gray-100 rounded-xl p-6">
            <h3 class="text-[#0f1c2e] font-bold text-sm mb-4">What Happens After You Submit</h3>
            <ol class="flex flex-col gap-4">
              <?php
              $steps = [
                ['step' => '01', 'text' => 'We review your inquiry and scope details within one business day.'],
                ['step' => '02', 'text' => 'A member of our team contacts you directly by phone or email.'],
                ['step' => '03', 'text' => 'We discuss your project scope, timeline, and requirements.'],
              ];
              foreach ($steps as $s) : ?>
                <li class="flex items-start gap-3">
                  <span class="w-6 h-6 rounded-full bg-[#0f1c2e] text-[#d4a843] text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5"><?php echo $s['step']; ?></span>
                  <p class="text-gray-600 text-xs leading-relaxed"><?php echo esc_html($s['text']); ?></p>
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
<section class="bg-[#f7f5f0] py-16 lg:py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 xl:gap-16">

      <!-- Sidebar -->
      <div>
        <p class="text-xs font-semibold tracking-widest text-[#d4a843] uppercase mb-3">FAQ</p>
        <h2 class="text-2xl sm:text-3xl font-bold text-[#0f1c2e] leading-tight mb-4">
          Frequently Asked Questions.
        </h2>
        <p class="text-gray-500 text-sm leading-relaxed mb-6">
          Common questions from GC partners before reaching out.
        </p>
        <a href="#"
           onclick="document.querySelector('form').scrollIntoView({behavior:'smooth'}); return false;"
           class="inline-flex items-center gap-2 bg-[#0f1c2e] hover:bg-[#1a2f4a] text-white font-semibold px-6 py-3.5 rounded transition-colors duration-200 text-sm">
          Send Project Inquiry
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
          </svg>
        </a>
      </div>

      <!-- FAQ Accordion -->
      <div class="lg:col-span-2 divide-y divide-gray-200">

        <?php
        $faqs = [
          [
            'q' => 'Do you work as a subcontractor or general contractor?',
            'a' => 'Imvera Group operates exclusively as a specialty subcontractor. We partner with general contractors, franchise rollout contractors, and commercial developers. We do not self-perform general contracting work.',
          ],
          [
            'q' => 'Which trades do you self-perform?',
            'a' => 'All six: ECO Grip commercial flooring, cabinet and countertop installation, acoustical ceilings, FRP installation, drywall and finishing, and metal framing. Every scope is performed by our own dedicated crews — no brokered labor.',
          ],
          [
            'q' => 'Can you handle multiple trades on the same project under one contract?',
            'a' => 'Yes. Multi-trade execution under one contract is one of Imvera\'s core advantages. We coordinate all interior scopes internally, eliminating the overhead of managing multiple single-trade subcontractors.',
          ],
          [
            'q' => 'Are you a certified ECO Grip installer?',
            'a' => 'Yes. Imvera Group holds certified installer status for ECO Grip commercial flooring systems — one of the credentials required by leading national food service operators.',
          ],
          [
            'q' => 'What is your communication standard during active projects?',
            'a' => 'Daily progress updates with photo documentation are sent to GC project contacts throughout every active project. Issues are reported immediately before they affect schedule. You receive information without having to ask for it.',
          ],
          [
            'q' => 'Do you operate outside the Southeast?',
            'a' => 'Our current active operations span Georgia, North Carolina, South Carolina, Tennessee, Texas, Kentucky, and Florida. Contact us directly for projects in adjacent states.',
          ],
          [
            'q' => 'What warranty do you offer?',
            'a' => 'All completed installations are backed by a 1-year workmanship warranty.',
          ],
        ];

        foreach ($faqs as $i => $faq) : ?>
          <details class="group py-5 cursor-pointer" <?php echo $i === 0 ? 'open' : ''; ?>>
            <summary class="flex items-center justify-between gap-4 list-none marker:hidden [&::-webkit-details-marker]:hidden">
              <h3 class="font-semibold text-[#0f1c2e] text-sm leading-snug pr-2"><?php echo esc_html($faq['q']); ?></h3>
              <div class="w-6 h-6 rounded-full border border-gray-300 group-open:border-[#d4a843] group-open:bg-[#d4a843] flex items-center justify-center flex-shrink-0 transition-colors duration-200">
                <svg class="w-3 h-3 text-gray-400 group-open:text-[#0f1c2e] group-open:rotate-45 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
                </svg>
              </div>
            </summary>
            <p class="mt-3 text-gray-500 text-sm leading-relaxed max-w-2xl"><?php echo esc_html($faq['a']); ?></p>
          </details>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     CHECKBOX HIGHLIGHT SCRIPT
     ============================================================ -->
<script>
(function () {
  document.querySelectorAll('.ig-checkbox').forEach(function (cb) {
    cb.addEventListener('change', function () {
      const label = cb.closest('.ig-checkbox-label');
      if (cb.checked) {
        label.classList.add('border-[#d4a843]', 'bg-[#d4a843]/5');
        label.classList.remove('border-gray-200');
      } else {
        label.classList.remove('border-[#d4a843]', 'bg-[#d4a843]/5');
        label.classList.add('border-gray-200');
      }
    });
  });
})();
</script>

<?php get_footer();