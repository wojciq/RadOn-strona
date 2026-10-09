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
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <article class="post-card">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-excerpt"><?php the_content(); ?></div>
                </article>
            <?php endwhile;
        else :
            echo '<p>Brak treści do wyświetlenia.</p>';
        endif;
        ?>
    </main>

    <?php wp_footer(); ?>
</body>
</html>