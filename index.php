<?php get_header(); ?>
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <header><h1><?php the_title(); ?></h1></header>
        <h4>Aangemaak op<?php the_time('F jS, Y') ?></h4>
        <p><?php the_content(); ?></p>
<?php endwhile;
    else:
        echo"Geen data Gevonden";
    endif;

        get_sidebar();
        get_footer();
?>
