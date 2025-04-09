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
      <h4>Contact Us</h4>
      <p>1007A Upper Serangoon Road<br>Singapore 534745</p>
      <p>(+65) 62811816 </p>
      <p><a href="mailto:BaizonnLearning@gmail.com">BaizonnLearning@gmail.com</a></p>
    </div>

    <div class="footer-column">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
        <li><a href="<?php echo home_url('/programs'); ?>">Programs</a></li>
        <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
        <li><a href="<?php echo home_url('/open-house'); ?>">Open House</a></li>
      </ul>
    </div>

    <div class="footer-column">
      <h4>Follow Us</h4>
      <p><a href="https://www.facebook.com/BaizonnLearningCentre" target="_blank">Facebook</a></p>
      <p><a href="http://baizonn.com" target="_blank">Website</a></p>
    </div>
  </div>

  <div class="site-info">
    <p>&copy; <?php echo date('Y'); ?> Baizonn Learning Centre. All rights reserved.</p>
  </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
