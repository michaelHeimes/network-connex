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
				elseif( get_row_layout() == 'download' ):
					get_template_part('template-parts/modules/download');
				elseif( get_row_layout() == 'facts_figures' ):
					get_template_part('template-parts/modules/facts-figures');
				elseif( get_row_layout() == 'featured_projects' ):
					get_template_part('template-parts/modules/featured-projects');
				elseif( get_row_layout() == 'image_left_copy_right' ):
					get_template_part('template-parts/modules/image-left-copy-right');
				elseif( get_row_layout() == 'image_copy_light-blue_background' ):
					get_template_part('template-parts/modules/image-copy-light-blue-background');
				elseif( get_row_layout() == 'logos_and_text_rows' ):
					get_template_part('template-parts/modules/logos-and-text-rows');
				elseif( get_row_layout() == 'news_events' ):
					get_template_part('template-parts/modules/news-events');
				elseif( get_row_layout() == 'quote' ):
					get_template_part('template-parts/modules/quote');
				elseif( get_row_layout() == 'resources' ):
					get_template_part('template-parts/modules/resources');
				elseif( get_row_layout() == 'services' ):
					get_template_part('template-parts/modules/services');
				elseif( get_row_layout() == 'team' ):
					get_template_part('template-parts/modules/team');
				elseif( get_row_layout() == 'text_editor' ):
					get_template_part('template-parts/modules/text-editor');
				elseif( get_row_layout() == 'two-image_set' ):
					get_template_part('template-parts/modules/two-image-set');
				elseif( get_row_layout() == 'who_we_serve_nav_cards' ):
					get_template_part('template-parts/modules/who-we-serve-nav-cards');
				endif;
	
			endwhile;
		endif;
	?>
