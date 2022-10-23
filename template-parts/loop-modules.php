<?php
/**
 * Template part for displaying page content in page.php
 */
?>
	
	<?php 
		if( have_rows('modules') ):
			while ( have_rows('modules') ) : the_row();

				if( get_row_layout() == 'banner' ):
					get_template_part('template-parts/modules/banner');
				elseif( get_row_layout() == 'banner_slider' ):
					get_template_part('template-parts/modules/banner-slider');
				elseif( get_row_layout() == 'blue_background_cta' ):
					get_template_part('template-parts/modules/blue-background-cta');
				elseif( get_row_layout() == 'ctas_with_background_images' ):
					get_template_part('template-parts/modules/ctas-with-background-images');
				elseif( get_row_layout() == 'centered_copy' ):
					get_template_part('template-parts/modules/centered-copy');
				elseif( get_row_layout() == 'ctas_with_background_images' ):
					get_template_part('template-parts/modules/ctas-with-background-images');
				elseif( get_row_layout() == 'facts_figures' ):
					get_template_part('template-parts/modules/facts-figures');
				elseif( get_row_layout() == 'featured_projects' ):
					get_template_part('template-parts/modules/featured-projects');
				elseif( get_row_layout() == 'image_left_copy_right' ):
					get_template_part('template-parts/modules/image-left-copy-right');
				elseif( get_row_layout() == 'news_events' ):
					get_template_part('template-parts/modules/news-events');
				elseif( get_row_layout() == 'services' ):
					get_template_part('template-parts/modules/services');
				elseif( get_row_layout() == 'team' ):
					get_template_part('template-parts/modules/team');
				endif;
	
			endwhile;
		endif;
	?>
