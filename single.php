<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('partials/single-post'); ?>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>