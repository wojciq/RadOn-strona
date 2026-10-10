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
                <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            </div>
            <nav class="site-nav uppercase-nav">
                <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false)); ?>
            </nav>
        </header>

        <!-- Treść na środku zdjęcia -->
        <div class="hero-content">
            <h1>asdsadasdasd</h1>
            <p>dsadsadsadsa</p>
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

    <?php wp_footer(); ?>
</body>
</html>