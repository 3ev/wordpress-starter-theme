<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="article-header">
        
        <?php the_title( '<h1 class="article-title">', '</h1>' ); ?>

		<div class="article-meta">
		<?php if ( 'post' == get_post_type() ): ?>
            Posted on <a href="<?php echo get_month_link(get_the_date('Y'), get_the_date('m')) ?>"><?php echo get_the_date(); ?></a>
        <?php endif; ?>
		</div><!-- .article-meta -->
		
	</header><!-- .article-header -->
	<?php if(has_post_thumbnail() && get_post_meta(get_the_ID(), 'Is Video', true) != "true" ): ?>
    <div class="post-image article-thumbnail">
        <?php the_post_thumbnail('post'); ?>
    </div><!-- .article-thumbnail -->
    <?php endif; ?>

	<div class="article-content">
		<?php the_content(); ?>
	</div><!-- .article-content -->	
    
</article><!-- #post-## -->