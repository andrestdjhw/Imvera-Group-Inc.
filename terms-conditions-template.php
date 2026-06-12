<?php
/*
  Template Name: Terms and Conditions
*/

get_header(); ?>


<!-- ============================================================
     HERO
     ============================================================ -->
<section class="relative overflow-hidden" style="background-color: #162525;">

  <!-- Background image -->
  <div class="absolute inset-0 z-0">
    <div class="w-full h-full"
         style="background-image: url('/wp-content/uploads/2026/04/ImveraHero2-scaled.jpg'); background-size: cover; background-position: center;">
    </div>
    <!-- Directional overlay -->
    <div class="absolute inset-0"
         style="background: linear-gradient(to right, rgba(22,37,37,0.97) 0%, rgba(22,37,37,0.88) 55%, rgba(22,37,37,0.6) 100%);"></div>
    <!-- Left accent strip -->
    <div class="absolute inset-y-0 left-0 w-1.5"
         style="background: linear-gradient(to bottom, #6FC061, #2A9D93);"></div>
    <!-- Subtle radial orb -->
    <div class="absolute inset-0 pointer-events-none"
         style="background: radial-gradient(ellipse at 80% 50%, rgba(42,157,147,0.08) 0%, transparent 60%);"></div>
  </div>

  <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-16">
    <div class="inline-flex items-center gap-2 rounded-full px-4 py-1.5 mb-5"
         style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15)); border: 1px solid rgba(42,157,147,0.35);">
      <span class="w-1.5 h-1.5 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
      <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Legal</span>
    </div>
    <h1 class="text-4xl sm:text-5xl font-bold text-white leading-tight mb-4">
      Terms &amp; Conditions
    </h1>
    <p class="text-sm" style="color: #7fa89e;">
      Last updated: <?php echo date('F j, Y'); ?> &nbsp;·&nbsp; Imvera Group Inc.
    </p>
  </div>
</section>


<!-- ============================================================
     CONTENT
     ============================================================ -->
<section class="py-16 lg:py-20" style="background-color: #F1F6F2;">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-2xl p-8 lg:p-12" style="border: 1px solid #dde8e5;">

      <!-- Intro -->
      <p class="text-base leading-relaxed mb-10" style="color: #585858;">
        Please read these Terms and Conditions ("Terms") carefully before using the website located at <strong style="color: #162525;">imveragroupinc.com</strong> (the "Site"), operated by Imvera Group Inc. ("Imvera Group," "we," "us," or "our"). By accessing or using this Site, you agree to be bound by these Terms. If you do not agree, please do not use the Site.
      </p>

      <?php
      $sections = [

        [
          'title' => '1. Use of This Site',
          'body'  => '
            <p>This Site is provided for informational and business inquiry purposes only. You agree to use the Site only for lawful purposes and in a manner that does not infringe the rights of others or restrict or inhibit anyone else\'s use of the Site.</p>
            <p>You may not:</p>
            <ul>
              <li>Use the Site in any way that violates applicable federal, state, or local laws or regulations</li>
              <li>Attempt to gain unauthorized access to any part of the Site or its related systems</li>
              <li>Transmit any unsolicited or unauthorized advertising or promotional material</li>
              <li>Engage in any conduct that could damage, disable, or impair the Site</li>
            </ul>
          ',
        ],

        [
          'title' => '2. Informational Purpose Only',
          'body'  => '
            <p>The content on this Site — including service descriptions, operational capacity figures, sector information, and geographic coverage — is provided for general informational purposes. Nothing on this Site constitutes a binding quote, contract, or guarantee of service availability, pricing, or timeline.</p>
            <p>All project engagements are subject to separate written agreements between Imvera Group Inc. and the engaging party.</p>
          ',
        ],

        [
          'title' => '3. Contact Form Submissions',
          'body'  => '
            <p>When you submit a project inquiry through the contact forms on this Site, your submission is transmitted via <strong>EmailJS</strong>, a third-party email delivery service. Submitting a form does not create a contractual obligation on the part of Imvera Group Inc. to provide services, respond within any specific timeframe, or enter into any agreement.</p>
            <p>We aim to respond to all project inquiries within one business day, but this is a general target and not a guaranteed commitment.</p>
            <p>By submitting a form, you represent that the information you provide is accurate and that you are authorized to make inquiries on behalf of any company you identify in your submission.</p>
          ',
        ],

        [
          'title' => '4. Intellectual Property',
          'body'  => '
            <p>All content on this Site — including but not limited to text, graphics, logos, images, and the overall design and layout — is the property of Imvera Group Inc. or its content suppliers and is protected by applicable intellectual property laws.</p>
            <p>You may not reproduce, distribute, modify, create derivative works from, publicly display, or otherwise exploit any content from this Site without the prior written consent of Imvera Group Inc.</p>
          ',
        ],

        [
          'title' => '5. Disclaimer of Warranties',
          'body'  => '
            <p>This Site is provided on an "as is" and "as available" basis without warranties of any kind, either express or implied. Imvera Group Inc. does not warrant that:</p>
            <ul>
              <li>The Site will be uninterrupted, error-free, or free of viruses or other harmful components</li>
              <li>The information on the Site is complete, accurate, or current</li>
              <li>The Site will meet your specific requirements</li>
            </ul>
            <p>To the fullest extent permitted by law, Imvera Group Inc. disclaims all warranties, express or implied, including but not limited to implied warranties of merchantability, fitness for a particular purpose, and non-infringement.</p>
          ',
        ],

        [
          'title' => '6. Limitation of Liability',
          'body'  => '
            <p>To the fullest extent permitted by applicable law, Imvera Group Inc. shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising out of or related to your use of, or inability to use, this Site — including but not limited to damages for loss of profits, data, goodwill, or other intangible losses — even if Imvera Group Inc. has been advised of the possibility of such damages.</p>
            <p>In no event shall Imvera Group Inc.\'s total liability to you for all claims arising from or related to your use of the Site exceed one hundred dollars ($100.00 USD).</p>
          ',
        ],

        [
          'title' => '7. Third-Party Links and Services',
          'body'  => '
            <p>This Site may contain links to third-party websites or use third-party services (including EmailJS for form delivery). These links and services are provided for convenience only. Imvera Group Inc. has no control over the content, privacy practices, or terms of third-party sites and services, and accepts no responsibility for them.</p>
            <p>Your use of third-party services is governed by their respective terms and privacy policies.</p>
          ',
        ],

        [
          'title' => '8. Governing Law',
          'body'  => '
            <p>These Terms shall be governed by and construed in accordance with the laws of the State of Georgia, without regard to its conflict of law provisions. Any dispute arising under or related to these Terms shall be subject to the exclusive jurisdiction of the state and federal courts located in Gwinnett County, Georgia.</p>
          ',
        ],

        [
          'title' => '9. Changes to These Terms',
          'body'  => '
            <p>We reserve the right to modify these Terms at any time. When we do, we will update the "Last updated" date at the top of this page. Your continued use of the Site following any changes constitutes your acceptance of the revised Terms. We encourage you to review these Terms periodically.</p>
          ',
        ],

        [
          'title' => '10. Contact Us',
          'body'  => '
            <p>If you have any questions about these Terms and Conditions, please contact us:</p>
            <p>
              <strong style="color: #162525;">Imvera Group Inc.</strong><br>
              2975 Breckinridge Blvd, Suite 11<br>
              Duluth, GA 30096<br>
              Phone: <a href="tel:6788363266">678-836-3266</a><br>
              Email: <a href="mailto:info@imveragroupinc.com">info@imveragroupinc.com</a>
            </p>
          ',
        ],

      ];

      foreach ($sections as $i => $section) : ?>

        <div class="<?php echo $i < count($sections) - 1 ? 'mb-10 pb-10' : 'mb-0'; ?>"
             style="<?php echo $i < count($sections) - 1 ? 'border-bottom: 1px solid #e8efed;' : ''; ?>">

          <div class="flex items-center gap-3 mb-4">
            <div class="w-1 h-5 rounded-full flex-shrink-0"
                 style="background: linear-gradient(to bottom, #6FC061, #2A9D93);"></div>
            <h2 class="text-lg font-bold" style="color: #162525;"><?php echo esc_html($section['title']); ?></h2>
          </div>

          <div class="legal-content text-sm leading-relaxed" style="color: #585858;">
            <?php echo $section['body']; ?>
          </div>

        </div>

      <?php endforeach; ?>

    </div>
  </div>
</section>


<!-- ============================================================
     LEGAL CONTENT STYLES
     ============================================================ -->
<style>
  .legal-content p { margin-bottom: 0.875rem; }
  .legal-content p:last-child { margin-bottom: 0; }
  .legal-content ul { margin: 0.5rem 0 0.875rem 1.25rem; display: flex; flex-direction: column; gap: 0.375rem; list-style: disc; }
  .legal-content a { color: #2A9D93; text-decoration: none; }
  .legal-content a:hover { text-decoration: underline; }
  .legal-content strong { color: #162525; }
</style>

<?php get_footer();