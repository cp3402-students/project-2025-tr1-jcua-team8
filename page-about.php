
<?php
/**
 * Template Name: About Page
 * Description: Custom About page template for Baizonn Learning Centre
 */
get_header(); ?>

<main id="primary" class="site-main about-page">
    <section class="about-hero">
        <div class="container">
            <h1>Welcome to Baizonn Learning Centre</h1>
            <p>Founded in 2013, Baizonn believes in establishing a strong foundation built on grasping Maths and Science principles. Students apply understanding through customized worksheets and assessments to gain confidence and surpass their current abilities.</p>
            <p><strong>F.A.S.T.</strong> = Firm Foundation, Apply, Surpass, Top</p>
            <p><strong>S.T.E.M.</strong> = Science, Technology, Engineering, Mathematics</p>
        </div>
    </section>

    <section class="about-philosophy">
        <div class="container two-col">
            <div class="text">
                <h2>Our Teaching Philosophy</h2>
                <p>We nurture a love for learning and develop confident, successful learners. Baizonn empowers students to think beyond the classroom while instilling the knowledge, skills, and attitudes needed to thrive.</p>
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/Assets/images/Info 1 -Teaching Philosophy.jpg" alt="Teaching Philosophy">
            </div>
        </div>
    </section>

    <section class="about-values">
        <div class="container two-col">
            <div class="text">
                <h2>F.A.S.T. Value Proposition</h2>
                <p>We support every child’s journey with our unique value system focused on:</p>
                <ul>
                    <li><strong>F</strong>irm Foundation</li>
                    <li><strong>A</strong>pply Knowledge</li>
                    <li><strong>S</strong>urpass Abilities</li>
                    <li><strong>T</strong>op Performance</li>
                </ul>
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/Assets/images/Info 3 -F.A.S.T Value Proposition.jpg" alt="FAST Value Proposition">
            </div>
        </div>
    </section>

    <section class="about-achievements">
        <div class="container">
            <h2>Awards & Recognitions</h2>
            <p>Baizonn received the National Instruments Engineering Impact Award ASEAN/ANZ Regional Contest in 2016 for their innovative project on “A Smart Recirculating Aquaculture System with NI CompactRIO and WSN”.</p>
            <div class="awards-gallery">
                <img src="<?php echo get_template_directory_uri(); ?>/Assets/images/Award 1.jpg" alt="Award 1">
                <img src="<?php echo get_template_directory_uri(); ?>/Assets/images/Award 2.jpg" alt="Award 2">
                <img src="<?php echo get_template_directory_uri(); ?>/Assets/images/Award 3.jpg" alt="Award 3">
                <img src="<?php echo get_template_directory_uri(); ?>/Assets/images/Award 4.jpg" alt="Award 4">
            </div>
        </div>
    </section>

    <section class="about-videos">
        <div class="container">
            <h2>Learning In Action</h2>
            <p>Watch how we inspire learning beyond textbooks:</p>
            <div class="video-embed">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/igcoDFokKzU" frameborder="0" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/wHpqlBWtnPc" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

