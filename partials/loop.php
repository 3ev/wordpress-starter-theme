<?php if(is_category()): ?>
    <h1><?php single_cat_title('', true) ?></h1>

<?php elseif(is_tag()): ?>
    <h1><?php single_tag_title('', true) ?></h1>

<?php elseif(is_home()): ?>
    <h1><?php wp_title(''); ?></h1>

<?php elseif(is_month()): ?>
    <h1><?php echo single_month_title(' '); ?></h1>

<?php elseif(is_year()): ?>
    <h1><?php echo wp_title(''); ?></h1>

<?php else: ?>
    <h1><?php bloginfo('name'); ?> Blog</h1>
<?php endif; ?>   


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('partials/loop-post'); ?>
<?php endwhile; endif; ?>
    
<ul class="pagination">
<?php foreach(tevPagination() as $paginationLink): ?>
    <li><?php echo $paginationLink; ?></li>
<?php endforeach; ?>
</ul>