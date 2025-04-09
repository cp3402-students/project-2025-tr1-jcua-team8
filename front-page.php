<?php
/* Template Name: Home Page */
get_header(); ?>

<!-- Hero Banner Only -->
<div class="hero-banner no-overlay">
  <img src="<?php echo get_template_directory_uri(); ?>/Assets/images/Signboard 2.jpg" alt="Baizonn Signboard" class="hero-image">
</div>

<!-- Welcome Message & CTA -->
<section class="home-welcome" style="background-color: #e7f6f2; padding: 2rem; text-align: center;">
  <h1>Welcome to Baizonn Learning Centre</h1>
  <p>At Baizonn, we believe in nurturing young minds through Science, Math, and STEM-based learning. Our mission is to create confident, well-rounded learners through engaging lessons and hands-on activities.</p>
  <a href="<?php echo home_url('/register'); ?>" class="btn-primary">Register Now</a>
</section>

<!-- Welcome Image Section -->
<section class="home-image">
  <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Center 1.JPG" alt="Welcome to Baizonn" class="welcome-image">
</section>

<!-- Information Section -->
<section class="home-info">
  <h2>Why Choose Baizonn?</h2>
  <p>We follow the F.A.S.T. and S.T.E.M. framework that encourages critical thinking and real-world problem solving. From Primary to Junior College, our passionate educators are committed to excellence.</p>
</section>

<!-- Media Gallery -->
<section class="home-gallery">
  <h2>Inside Our Centre</h2>
  <div class="gallery-grid">
    <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Center 2.jpg" alt="Center Classroom">
    <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Teaching 3.JPG" alt="Teaching">
    <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Award 2.jpg" alt="Award">
  </div>
</section>

<!-- Additional Info -->
<section class="home-highlight">
  <h2>Our Programs Empower Every Learner</h2>
  <p>Whether preparing for PSLE or tackling advanced JC topics, our tailored programs meet every student where they are. Experience hands-on activities, concept-based learning, and real academic results.</p>
</section>

<!-- Additional Info -->
<section class="home-highlight">
  <h2>Our Programs Empower Every Learner</h2>
  <p>Whether preparing for PSLE or tackling advanced JC topics, our tailored programs meet every student where they are. Experience hands-on activities, concept-based learning, and real academic results.</p>
</section>

<!-- Our Values Preview Section -->
<section class="home-values-preview">
  <h2>Our Core Values</h2>
  <div class="values-grid">
    <div class="value-box">
      <h3>Nurturing a Love for Learning</h3>
      <p>For over 10 years, we have helped students achieve success in school and in life by nurturing a love for 
      learning.</p>
    </div>
    <div class="value-box">
      <h3>Preparing Students To Achieve Success </h3>
      <p>Developing Confident and Successful Learners</p>
    </div>
    
    <div class="value-box">
      <h3>Passionate Teachers That Make A Difference </h3>
      <p>At Baizonn Learning Center, our teachers motivate and nurture every student to achieve their best and 
      to build the right attitudes to ingrain a love for learning. </p>
    </div>
  </div>
  <a href="<?php echo home_url('/about'); ?>" class="learn-more">Learn more about our values →</a>
</section>


<!-- Final Call to Action -->
<section class="home-cta-final">
  <h2>Secure Your Spot Today!</h2>
  <a href="<?php echo home_url('/register'); ?>" class="btn-primary">Join Our 2025 Intake</a>
</section>

<?php get_footer(); ?>
