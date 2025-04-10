<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package baizonn
 */
?>

<footer id="colophon" class="site-footer">
  <div class="footer-columns">
    <div class="footer-column">
      <h3>Contact Us</h3>
      <p>1007A Upper Serangoon Road<br>Singapore 534745</p>
      <p>(+65) 62811816</p>
      <p><a href="mailto:BaizonnLearning@gmail.com">BaizonnLearning@gmail.com</a></p>
    </div>
    <div class="footer-column">
      <h3>Quick Links</h3>
      <p><a href="<?php echo esc_url( home_url()); ?>">Home</a></p>
      <p><a href="<?php echo esc_url( home_url('/about')); ?>">About Us</a></p>
      <p><a href="<?php echo esc_url( home_url('/programs')); ?>">Programs</a></p>
      <p><a href="<?php echo esc_url( home_url('/faculty')); ?>">Faculty</a></p>
      <p><a href="<?php echo esc_url( home_url('/testimonials')); ?>">Testimonials</a></p>
      <p><a href="<?php echo esc_url( home_url('/schedule')); ?>">Fee & Schedule</a></p>
      <p><a href="<?php echo esc_url( home_url('/register')); ?>">Register</a></p>
      <p><a href="<?php echo esc_url( home_url('/open-house')); ?>">Announcements</a></p>
      <p><a href="<?php echo esc_url( home_url('/contact')); ?>">Contact Us</a></p>
      
    </div>
    <div class="footer-column">
      <h3>Follow Us</h3>
      <p><a href="#">Facebook</a></p>
      <p><a href="#">Website</a></p>
    </div>
  </div>

  <div class="footer-bottom">
    &copy; <?php echo date("Y"); ?> Baizonn Learning Centre. All rights reserved. <br>
    <a href="<?php echo esc_url( home_url('/privacy-policy')); ?>">Privacy Policy</a> |
    <a href="<?php echo esc_url( home_url('/terms-of-use')); ?>">Terms of Use</a>
  </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
