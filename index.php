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

   <?php get_footer(); ?>