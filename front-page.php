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

    <?php get_footer(); ?>