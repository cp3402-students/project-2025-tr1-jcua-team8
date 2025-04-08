
<?php
/**
 * Template Name: Programs Page
 * Description: Custom Programs page template for Baizonn Learning Centre
 */

get_header(); ?>

<main id="primary" class="site-main programs-page">
    <section class="programs-intro">
        <div class="container">
            <h1>Our Programs</h1>
            <p>At Baizonn Learning Centre, our programs are tailored to develop students’ critical thinking and mastery in Mathematics and Science through MOE-aligned enrichment for all levels.</p>
        </div>
    </section>

    <section class="programs-primary">
        <div class="container">
            <h2>Primary School</h2>
            <ul>
                <li>Primary School Mathematics</li>
                <li>Primary School Science</li>
                <li>PSLE Mathematics</li>
                <li>PSLE Science</li>
            </ul>
            <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Teaching 1.JPG" alt="Primary Teaching" class="program-image">
        </div>
    </section>

    <section class="programs-secondary">
        <div class="container">
            <h2>Secondary School</h2>
            <ul>
                <li>Secondary 1-4 Mathematics</li>
                <li>Secondary 1-4 Science</li>
                <li>GCE 'O' Level Mathematics</li>
                <li>GCE 'O' Level Science</li>
            </ul>
            <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Teaching 2.JPG" alt="Secondary STEM Class" class="program-image">
        </div>
    </section>

    <section class="programs-jc">
        <div class="container">
            <h2>Junior College</h2>
            <ul>
                <li>GCE 'A' Levels Mathematics</li>
                <li>GCE 'A' Levels Science</li>
            </ul>
            <img src="<?php echo get_template_directory_uri(); ?>/Baizonn Content/Teaching 3.JPG" alt="Junior College Class" class="program-image">
        </div>
    </section>
</main>

<?php get_footer(); ?>
