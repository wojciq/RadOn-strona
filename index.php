<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <nav class="site-nav">
            <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false)); ?>
        </nav>
    </header>

<main class="site-content">
        <h1 class="page-title">Aktualności</h1>
        <div class="posts-grid">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                    <article class="post-card">
                        <!-- Wyświetlanie obrazka, jeśli istnieje -->
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                                <?php the_post_thumbnail('medium_large'); ?>
                            </a>
                        <?php endif; ?>
                        
                        <div class="post-card-content">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="post-meta-small">
                                <span><?php echo get_the_date(); ?></span>
                            </div>
                            <div class="post-excerpt">
                                <?php the_excerpt(); // the_excerpt() pokazuje skrót tekstu, a nie całość! ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="read-more">Czytaj dalej &rarr;</a>
                        </div>
                    </article>
                <?php endwhile;
            else :
                echo '<p>Brak treści do wyświetlenia.</p>';
            endif;
            ?>
        </div>
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