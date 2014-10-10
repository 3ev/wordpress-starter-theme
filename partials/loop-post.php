<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(has_post_thumbnail()): ?>
    <div class="post-image listing-thumbnail">
        <a href="<?php echo esc_url(get_permalink())?>" rel="bookmark"><?php the_post_thumbnail('listing'); ?></a>
    </div><!-- .listing-thumbnail -->
    <?php endif; ?>

	<header class="listing-header">
        
        <?php the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

		<div class="listing-meta">
		<?php if ( 'post' == get_post_type() ): ?>
            <a href="<?php echo get_month_link(get_the_date('Y'), get_the_date('m')) ?>"><?php echo get_the_date(); ?></a>
        <?php endif; ?>
		</div><!-- .listing-meta -->
		
	</header><!-- .listing-header -->

	<div class="listing-content">
		<?php the_excerpt(); ?>
	</div><!-- .listing-content -->

</article><!-- #post-## -->