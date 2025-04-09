<?php
/* Template Name: Contact Page */
get_header();
?>

<div class="contact-container">
  
  <!-- Top Signboard Image -->
  <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Signboard 2.jpg" alt="Baizonn Signboard" class="contact-banner" />

  <h1>Contact Us</h1>
  <p>We’d love to hear from you! Reach out to us via phone, email, or visit our center directly.</p>

  <div class="contact-wrapper">
    <div class="contact-info">
      <h2>📍 Our Address</h2>
      <p>1007A Upper Serangoon Road, Singapore 534745</p>

      <h2>📞 Phone</h2>
      <p><a href="tel:+6592260780">+65 9226-0780</a>, <a href="tel:+6598792692">+65 9879-2692</a></p>

      <h2>📧 Email</h2>
      <p><a href="mailto:BaizonnLearning@gmail.com">BaizonnLearning@gmail.com</a></p>

      <h2>🌐 Website & Socials</h2>
      <p>
        <a href="http://baizonn.com">www.baizonn.com</a><br>
        <a href="https://www.facebook.com/BaizonnLearningCentre">Facebook Page</a>
      </p>
    </div>

    <div class="contact-form">
      <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Center 4.JPG" alt="Baizonn Center" class="contact-image" />
      <h2>Send Us a Message</h2>
      <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form"]'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
