<?php get_header(); ?>

        <h1>Your search for "<?php echo esc_html(get_search_query(false)); ?>"</h1>
        
        <form action="/">
            <input type="text" name="s" placeholder="Search our website" value="<?php echo esc_html(get_search_query(false)); ?>" />
            <input type="submit" value="Search" />
        </form>        
    
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
            <?php the_excerpt(); ?>
            
        <?php endwhile; ?>
        <?php else: ?>
        
            <h2>Sorry, no results found</h2>
        
        <?php endif; ?>
    
        <ul class="pagination">
        <?php foreach(tevPagination() as $paginationLink): ?>
            <li><?php echo $paginationLink; ?></li>
        <?php endforeach; ?>
        </ul>
        
    </div>
</div>

<?php get_footer(); ?>