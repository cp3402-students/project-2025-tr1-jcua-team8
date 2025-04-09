<?php
/* Template Name: Contact Page */
get_header(); ?>

<div class="contact-container">
  <h1>Contact Us</h1>
  <p>We’d love to hear from you. Whether you're looking for directions, program details, or registration info, we’re here to help!</p>

  <!-- Directions Section -->
  <section class="directions-section">
    <h2>How to Reach Us</h2>
    <p>Here’s how to reach Baizonn Learning Centre using various transport modes:</p>

    <div class="directions-gallery">
      <div class="transport-block">
        <h3>🚗 By Car</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Direction By Car 2.tif" alt="Direction by Car">
        <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Direction By Car 3.tif" alt="More Direction by Car">
      </div>
      <div class="transport-block">
        <h3>🚌 By Bus</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/Assets/images/Direction By Bus 2.jpg" alt="Direction by Bus">
        <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Direction By Bus 3.jpg" alt="More Direction by Bus">
      </div>
      <div class="transport-block">
        <h3>💆‍♂️ By MRT</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Direction By MRT 2.tif" alt="Direction by MRT">
        <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Direction By MRT 3.tif" alt="More Direction by MRT">
      </div>
      <div class="transport-block">
        <h3>📍 Centre Overview</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Direction to Center.tif" alt="Center Map">
      </div>
    </div>
  </section>

  <!-- Contact Details Section -->
  <section class="contact-details">
    <h2>Our Address & Contact</h2>
    <p><strong>Address:</strong> 1007A Upper Serangoon Road, Singapore 534745</p>
    <p><strong>Phone:</strong> (+65) 62811816  </p>
    <p><strong>Email:</strong> <a href="mailto:BaizonnLearning@gmail.com">BaizonnLearning@gmail.com</a></p>
    <p><strong>Facebook:</strong> <a href="https://www.facebook.com/BaizonnLearningCentre" target="_blank">BaizonnLearningCentre</a></p>
  </section>

  <!-- Call to Action -->
  <section class="contact-cta">
    <h2>Ready to Start Your Journey with Us?</h2>
    <a href="<?php echo home_url('/registration'); ?>" class="btn-primary">Register Now</a>
  </section>
</div>

<?php get_footer(); ?>
