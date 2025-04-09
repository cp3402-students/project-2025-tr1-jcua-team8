
<?php
/**
 * Template Name: About Page
 * Description: Custom About page template for Baizonn Learning Centre
 */
get_header(); ?>

<main id="primary" class="site-main about-page">
    <!-- About Page Top Banner -->
    <div class="about-banner">
    <img src="<?php echo esc_url( get_template_directory_uri()); ?>/Baizonn Content/Centre Logo 9.jpg" alt="About Us Banner" class="about-banner-image">
    </div>

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
                <img src="<?php echo esc_url( get_template_directory_uri()); ?>/Assets/images/Info 1 -Teaching Philosophy.jpg" alt="Teaching Philosophy">
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
                <img src="<?php echo esc_url( get_template_directory_uri()); ?>/Assets/images/Info 3 -F.A.S.T Value Proposition.jpg" alt="FAST Value Proposition">
            </div>
        </div>
    </section>

    <!-- Full Our Values Section -->
    <section class="about-values-full">
        <div class="container">
            <h2>Our Values</h2>

            <div class="value-section">
                <strong>Nurturing a Love For Learning</strong>
                <p>For over 10 years, we have helped students achieve success in school and in life by nurturing a love for learning. From primary school to junior college, our students enjoy fun, interactive and relevant lessons and are empowered to think beyond the confines of the classroom.</p>
            </div>

            <div class="value-section">
                <strong>Building a Strong Foundation</strong>
                <p>At Baizonn Learning Centre, we strongly believe in building a strong foundation by helping students grasp fundamental Maths and Science principles before advancing to complex topics.</p>
            </div>

            <div class="value-section">
                <strong>Preparing Students To Achieve Success</strong>
                <p>Our students are at the centre of everything we do and their well-being and success in learning matter to us. While we educate our students, we also equip them with the right knowledge, skills and attitudes that help them solve problems, think big and seek excellence.</p>
            </div>

            <div class="value-section">
                <strong>Passionate Teachers That Make A Difference</strong>
                <p>Our teachers motivate and nurture every student to achieve their best and to build the right attitudes to ingrain a love for learning. We hire teachers with the right passion and qualifications and equip them to create amazing classroom experiences for their students. We’re committed to bringing out the best in every student.</p>
            </div>
        </div>
    </section>

    <section class="about-achievements">
        <div class="container">
            <h2>Awards & Recognitions</h2>
            <p>Baizonn received the National Instruments Engineering Impact Award ASEAN/ANZ Regional Contest in 2016 for their innovative project on “A Smart Recirculating Aquaculture System with NI CompactRIO and WSN”.</p>
<p class="academic-partner"><strong>Academic Partner:</strong> NATIONAL INSTRUMENTS – Academic Channel Partner for S.T.E.M.</p>
            <div class="awards-gallery">
                <img src="<?php echo esc_url( get_template_directory_uri()); ?>/Assets/images/Award 1.jpg" alt="Award 1">
                <img src="<?php echo esc_url( get_template_directory_uri()); ?>/Assets/images/Award 2.jpg" alt="Award 2">
                <img src="<?php echo esc_url( get_template_directory_uri()); ?>/Assets/images/Award 3.jpg" alt="Award 3">
                <img src="<?php echo esc_url( get_template_directory_uri()); ?>/Assets/images/Award 4.jpg" alt="Award 4">
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
