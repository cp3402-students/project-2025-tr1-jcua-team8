<?php
/* Template Name: Home Page */
get_header(); ?>

<!-- HERO BANNER -->
<section class="hero-banner no-overlay">
  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/Assets/images/Signboard 2.jpg" alt="Baizonn Signboard" class="hero-image">
</section>

<!-- Welcome Message Below Banner -->
<section class="home-welcome">
  <h1>Welcome to Baizonn Learning Centre</h1>
  <p>At Baizonn, we believe in nurturing young minds through Science, Math, and STEM-based learning. Our mission is to create confident, well-rounded learners through engaging lessons and hands-on activities.</p>
  <a href="<?php echo esc_url( home_url('/register')); ?>" class="btn-primary">Register Now</a>
</section>

<!-- ABOUT THE CENTRE -->
<section class="home-about" style="background-color:#f9f9f9; padding:3rem 2rem; text-align:center;">
  <div class="container">
    <h2>About Baizonn</h2>
    <p>Baizonn Learning Centre is a nurturing ground for young learners from primary to junior college levels. Our focus is on empowering students through concept-based learning, small group sessions, and real-world application of knowledge.</p>
    <p>We blend traditional values with modern educational practices to help every child succeed.</p>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/Baizonn Content/Center 1.JPG" alt="Learning Environment" style="width:80%; max-width:700px; margin-top:1.5rem; border-radius:10px;">
  </div>
</section>

<!-- OUR PROGRAMS -->
<section class="home-programs" style="padding:3rem 2rem; text-align:center;">
  <h2>Our Signature Programs</h2>
  <p>We offer enrichment and tuition programs tailored for each academic level:</p>
  <div class="program-cards">
    <div class="program-card">
      <h3>Primary School (P1-P6)</h3>
      <p>Building foundational skills in Math and Science with interactive activities and visual aids.</p>
    </div>
    <div class="program-card">
      <h3>Secondary School (Sec 1-4)</h3>
      <p>Enhancing analytical thinking through advanced STEM-focused curriculum and concept mastery.</p>
    </div>
    <div class="program-card">
      <h3>Junior College</h3>
      <p>Supporting academic excellence with targeted content delivery for A-level readiness.</p>
    </div>
  </div>
</section>

<!-- GALLERY -->
<section class="home-gallery" style="background-color:#eef7f3; padding:3rem 2rem;">
  <h2>Inside Our Learning Centre</h2>
  <div class="gallery-grid">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/Baizonn Content/Center 2.jpg" alt="Classroom">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/Baizonn Content/Teaching 3.JPG" alt="Teaching in Action">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/Baizonn Content/Award 2.jpg" alt="Student Award">
  </div>
</section>

<!-- CORE VALUES -->
<section class="home-values" style="padding:3rem 2rem; text-align:center;">
  <h2>Our Core Values</h2>
  <div class="values-grid">
    <div class="value-box">
      <h3>Nurturing a Love for Learning</h3>
      <p>Over a decade of inspiring students through personalized education and compassion.</p>
    </div>
    <div class="value-box">
      <h3>Student-Centered Teaching</h3>
      <p>Every lesson is crafted around student needs to encourage deeper understanding and confidence.</p>
    </div>
    <div class="value-box">
      <h3>Results That Matter</h3>
      <p>We focus on academic growth, discipline, and lifelong curiosity for knowledge.</p>
    </div>
  </div>
  <a href="<?php echo esc_url(home_url('/about')); ?>" class="learn-more">Learn more about our values →</a>
</section>

<!-- TESTIMONIALS -->
<section class="home-testimonials" style="background-color:#f0f0f0; padding:3rem 2rem; text-align:center;">
  <h2>What Parents Say</h2>
  <blockquote>"Baizonn has helped my child build confidence in Math. The caring teachers and effective methods are truly impressive!" - Parent of Sec 2 Student</blockquote>
</section>

<!-- FINAL CTA -->
<section class="home-cta-final" style="text-align:center; padding:3rem 2rem; background-color: #e7f6f2;">
  <h2>Ready to Join Us?</h2>
  <p>Let us be a part of your child’s learning journey. Enroll today and experience the Baizonn difference.</p>
  <a href="<?php echo esc_url(home_url('/register')); ?>" class="btn-primary">Join Our 2025 Intake</a>
</section>

<?php get_footer(); ?>
