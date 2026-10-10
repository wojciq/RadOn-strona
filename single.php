<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
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

    <main class="site-content single-post">
        <?php
        while ( have_posts() ) : the_post(); ?>
            <article class="post-full">
                <h1><?php the_title(); ?></h1>
                
                <div class="post-meta">
                    <span class="author">Autor: <?php the_author(); ?></span> | 
                    <span class="date">Data: <?php the_date(); ?></span>
                    <!-- Tu w przyszlosci dodamy licznik wyswietlen -->
                </div>

                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </main>

    <?php wp_footer(); ?>
</body>
</html>