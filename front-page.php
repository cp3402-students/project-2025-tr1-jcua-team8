<?php
/* Template Name: Home Page */
get_header(); ?>

<!-- Hero Section -->
<div class="hero-banner no-overlay">
  <img src="<?php echo get_template_directory_uri(); ?>/Assets/images/Signboard 2.jpg" alt="Baizonn Signboard" class="hero-image">
</div>

<!-- About Section -->
<section class="home-section about">
  <div class="content-wrapper">
    <div class="text-block">
      <h2>About Baizonn</h2>
      <p>Founded in 2013, Baizonn Learning Centre offers a holistic education journey in Science, Math, and STEM. We focus on helping every student discover their unique learning style through a hands-on approach, tailored feedback, and passionate mentorship.</p>
    </div>
    <div class="image-block">
      <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Center 6.JPG" alt="Baizonn Centre Entrance">
    </div>
  </div>
</section>

<!-- Values Section -->
<section class="home-section values">
  <h2 class="section-heading">Our Core Values</h2>
  <div class="values-grid">
    <div class="value-box">
      <h3>F.A.S.T.</h3>
      <ul>
        <li>Firm Foundation</li>
        <li>Apply Knowledge</li>
        <li>Surpass Abilities</li>
        <li>Top Performance</li>
      </ul>
    </div>
    <div class="value-box">
      <h3>S.T.E.M.</h3>
      <ul>
        <li>Science</li>
        <li>Technology</li>
        <li>Engineering</li>
        <li>Mathematics</li>
      </ul>
    </div>
    <div class="image-box">
      <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Info 3 -F.A.S.T Value Proposition.jpg" alt="FAST Value Image">
    </div>
  </div>
</section>

<!-- Gallery Section (Reduced Images) -->
<section class="home-section gallery">
  <h2 class="section-heading">Inside Baizonn</h2>
  <div class="gallery-grid">
    <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Center 5.JPG" alt="Classroom">
    <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Award 3.jpg" alt="Award Presentation">
  </div>
</section>

<!-- Call to Action -->
<section class="home-section cta">
  <div class="cta-content">
    <h2>Ready to Join the Baizonn Family?</h2>
    <p>Book your seat now for the 2025 intake and claim your FREE Baizonn T-Shirt at the Open House!</p>
    <a href="<?php echo home_url('/open-house'); ?>" class="btn-primary">Register for Open House</a>
  </div>
  <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Centre Logo 9.jpg" alt="Baizonn Visual" class="cta-image">
</section>

<?php get_footer(); ?>

