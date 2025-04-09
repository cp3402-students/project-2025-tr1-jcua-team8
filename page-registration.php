<?php
/**
 * Template Name: Registration Page
 */
get_header();
?>

<div class="registration-container">
    <section class="registration-header">
        <h1>Register at Baizonn Learning Centre</h1>
        <p>We welcome you to join our academic programs and hands-on learning sessions.</p>
        <p>Fill out the form below and our team will get in touch with you shortly!</p>
    </section>

    <section class="registration-form">
        <?php echo do_shortcode('[wpforms id="123"]'); // Replace 123 with your actual form ID ?>
    </section>
</div>

<?php get_footer(); ?>
