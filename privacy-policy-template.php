<?php
/*
  Template Name: Privacy Policy
*/

get_header(); ?>


<!-- ============================================================
     HERO
     ============================================================ -->
<section class="relative overflow-hidden" style="background-color: #162525;">
  <div class="absolute inset-y-0 left-0 w-1.5"
       style="background: linear-gradient(to bottom, #6FC061, #2A9D93);"></div>
  <div class="absolute inset-0 pointer-events-none"
       style="background: radial-gradient(ellipse at 80% 50%, rgba(42,157,147,0.08) 0%, transparent 60%);"></div>

  <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-16">
    <div class="inline-flex items-center gap-2 rounded-full px-4 py-1.5 mb-5"
         style="background: linear-gradient(135deg, rgba(111,192,97,0.15), rgba(42,157,147,0.15)); border: 1px solid rgba(42,157,147,0.35);">
      <span class="w-1.5 h-1.5 rounded-full" style="background: linear-gradient(135deg, #6FC061, #2A9D93);"></span>
      <span class="text-xs font-semibold tracking-widest uppercase" style="color: #2A9D93;">Legal</span>
    </div>
    <h1 class="text-4xl sm:text-5xl font-bold text-white leading-tight mb-4">
      Privacy Policy
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
        Imvera Group Inc. ("Imvera Group," "we," "us," or "our") operates the website located at <strong style="color: #162525;">imveragroupinc.com</strong> (the "Site"). This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our Site or submit an inquiry through our contact forms.
      </p>

      <?php
      $sections = [

        [
          'title' => '1. Information We Collect',
          'body'  => '
            <p>We collect information you voluntarily provide when you submit a project inquiry or contact form on our Site. This information may include:</p>
            <ul>
              <li>Full name</li>
              <li>Company name</li>
              <li>Phone number</li>
              <li>Email address</li>
              <li>Project type, state, and timeline</li>
              <li>Trade scope details and any additional information you include in your message</li>
            </ul>
            <p>We do not collect any information automatically beyond standard web server logs (IP address, browser type, pages visited, referral source). We do not use cookies for tracking or advertising purposes.</p>
          ',
        ],

        [
          'title' => '2. How We Use Your Information',
          'body'  => '
            <p>We use the information you provide solely to:</p>
            <ul>
              <li>Respond to your project inquiry or contact request</li>
              <li>Communicate with you regarding your project scope, timeline, and requirements</li>
              <li>Follow up on prior correspondence if you have engaged with us previously</li>
            </ul>
            <p>We do not use your information for marketing campaigns, third-party advertising, or any purpose unrelated to responding to your direct inquiry.</p>
          ',
        ],

        [
          'title' => '3. How Your Inquiry Is Transmitted — EmailJS',
          'body'  => '
            <p>Contact form submissions on this Site are transmitted using <strong>EmailJS</strong>, a third-party email delivery service. When you submit a form, your information is sent directly from your browser to EmailJS servers, which then deliver your message to our team\'s email inbox.</p>
            <p>EmailJS processes your submission data solely for the purpose of delivering your message. We do not store form submission data on our own servers. For information on how EmailJS handles data, please refer to the <a href="https://www.emailjs.com/legal/privacy-policy/" target="_blank" rel="noopener noreferrer">EmailJS Privacy Policy</a>.</p>
            <p>By submitting a contact form on this Site, you acknowledge that your information will be processed by EmailJS as described above.</p>
          ',
        ],

        [
          'title' => '4. Information Sharing and Disclosure',
          'body'  => '
            <p>Imvera Group does not sell, rent, trade, or otherwise transfer your personal information to third parties, except in the following limited circumstances:</p>
            <ul>
              <li><strong>Service providers:</strong> EmailJS, as described in Section 3, processes form submission data for delivery purposes only.</li>
              <li><strong>Legal requirements:</strong> We may disclose your information if required to do so by law or in response to valid legal process.</li>
              <li><strong>Business transfers:</strong> In the event of a merger, acquisition, or sale of assets, your information may be transferred as part of that transaction.</li>
            </ul>
          ',
        ],

        [
          'title' => '5. Data Retention',
          'body'  => '
            <p>We retain your contact information in our email inbox for as long as necessary to respond to your inquiry and maintain a reasonable record of our correspondence. If you would like your information removed from our records, please contact us directly at the address below and we will honor your request promptly.</p>
          ',
        ],

        [
          'title' => '6. Security',
          'body'  => '
            <p>We take reasonable precautions to protect your information. Form submissions are transmitted via HTTPS and processed by EmailJS using industry-standard security practices. However, no method of transmission over the internet is 100% secure, and we cannot guarantee absolute security.</p>
          ',
        ],

        [
          'title' => '7. Children\'s Privacy',
          'body'  => '
            <p>This Site is intended for business-to-business use and is not directed at individuals under the age of 18. We do not knowingly collect personal information from minors. If you believe a minor has submitted information through our Site, please contact us and we will remove it promptly.</p>
          ',
        ],

        [
          'title' => '8. Third-Party Links',
          'body'  => '
            <p>Our Site may contain links to third-party websites. We are not responsible for the privacy practices or content of those sites. We encourage you to review the privacy policies of any third-party sites you visit.</p>
          ',
        ],

        [
          'title' => '9. Changes to This Privacy Policy',
          'body'  => '
            <p>We may update this Privacy Policy from time to time. When we do, we will update the "Last updated" date at the top of this page. Your continued use of the Site following any changes constitutes your acceptance of the updated policy.</p>
          ',
        ],

        [
          'title' => '10. Contact Us',
          'body'  => '
            <p>If you have any questions about this Privacy Policy or how we handle your information, please contact us:</p>
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