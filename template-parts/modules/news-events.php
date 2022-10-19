<section class="module news-events">
	<div class="grid-container">
		<div class="header grid-x grid-padding-x">
			<div class="cell small-12 medium-auto">
				<h2 class="m-0">News & Events</h2>
			</div>
			<div class="cell small-12 medium-shrink">
				<a class="button" href="#">View All News</a>
			</div>
		</div>
		<div class="grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-3">
			
			<?php			
			$args = array(  
				'post_type' => 'resource',
				'post_status' => 'publish',
				'posts_per_page' => 3,
				'tax_query' => array(
					array(
						'taxonomy' => 'resource_type',
						'field'    => 'slug',
						'terms'    => 'news-events',
					),
				),
			);
			
			$loop = new WP_Query( $args ); 
			if ( $loop->have_posts() ) : 
				while ( $loop->have_posts() ) : $loop->the_post();
					$grid_image = get_field('grid_image');
				?>
				
				<div class="cell text-center color-white">
					<article id="post-<?php the_ID(); ?>" <?php post_class('has-bg grid-x align-middle align-bottom'); ?> role="article">	
						<a  class="color-white "href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<div class="bg" style="background-image: url('<?php echo $grid_image['url'];?>');"></div>
							<div class="text-wrap relative">
								<div class="date">
									<?php echo get_the_date(' F m, Y ');?>
								</div>
								<br>
								<h3 class="h5"><?php the_title();?></h3>
							</div>
						</a>
					</article>

				</div>
					
				<?php
				endwhile;
			endif;
			wp_reset_postdata(); 
			?>

		</div>
	</div>
</section>