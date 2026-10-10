<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <!-- Sekcja Hero (Zdjęcie w tle + Menu na wierzchu) -->
    <div class="hero-section">
        <header class="site-header transparent">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo Radon" class="site-logo">
            </div>
            <nav class="site-nav uppercase-nav">
                <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false)); ?>
            </nav>
        </header>

        <!-- Treść na środku zdjęcia -->
        <div class="hero-content">
            <h1>Koło Naukowe RadON</h1>
            <p>Promieniujemy pasją do nauki!</p>
        </div>
    </div>

    <!-- Główna treść strony (jeśli dodasz jakiś tekst w panelu) -->
    <main class="site-content">
        <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>
    </main>
    <footer class="site-footer">
    <nav class="footer-nav">
        <a href="#">Strona Główna</a>
        <a href="#">O nas</a>
        <a href="#">Projekty</a>
        <a href="#">Aktualności</a>
    </nav>
    
    <hr class="footer-divider">
    
    <div class="footer-main">
        <div class="footer-logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo Koła Naukowego RadON" class="footer-logo-img">
        </a>
        </div>
        <div class="footer-contact">
            <p>Napisz do nas maila!</p>
            <a href="mailto:kn.radon@pwr.edu.pl">kn.radon@pwr.edu.pl</a>
        </div>
    </div>
    
    <div class="footer-socials">
        <!-- Tymczasowe okrągłe przyciski tekstowe (można je potem zamienić na ikonki SVG) -->
        <a href="#" class="social-icon">FB</a>
        <a href="#" class="social-icon">IG</a>
    </div>
</footer>

    <?php wp_footer(); ?>
</body>
</html>