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

<main class="site-content" style="max-width: 1200px; margin: 50px auto; padding: 20px;">
    <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); ?>
            <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; 
    endif; 
    ?>
</main>
<?php get_footer(); ?>