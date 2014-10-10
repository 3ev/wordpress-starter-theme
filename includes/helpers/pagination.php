<?php
/*
 *  Returns an array of links like so  
 *  << first 1 2 3 last >>
 *   
*/
function tevPagination() {
	
	$prevArrow = is_rtl() ? '&gt;' : '&lt;';
	$nextArrow = is_rtl() ? '&lt;' : '&gt;';
	
	global $wp_query;
	$total = $wp_query->max_num_pages;
	$big = 999999999; // need an unlikely integer
	
	if( $total > 1 )  {
		 if( !$currentPage = get_query_var('paged') ) {
			 $currentPage = 1;
         }
		 
		 if( get_option('permalink_structure') ) {
			 $format = 'page/%#%/';
		 } else {
			 $format = '&paged=%#%';
		 }
		
		$links = paginate_links(array(
			'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format'		=> $format,
			'current'		=> max( 1, get_query_var('paged') ),
			'total' 		=> $total,
			'mid_size'		=> 9,
			'type' 			=> 'array',
			'prev_next'     => false
		 ));
		 		 
		 if ($currentPage > 1) {
    		 array_unshift($links, '<a class="first" href="' . get_pagenum_link(1) . '">First</a>');
    		 array_unshift($links, get_previous_posts_link($prevArrow . " Newer"));
		 }
		 
		 if ($currentPage < $total) {
    		 $links[] = '<a class="last" href="' . get_pagenum_link($total) . '">Last</a>'; 
    		 $links[] = get_next_posts_link("Older " . $nextArrow);
		 }

		 return $links;
	}
}