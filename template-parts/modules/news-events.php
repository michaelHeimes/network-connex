<section class="module news-events">
	<div class="grid-container">
		<div class="header grid-x grid-padding-x">
			<div class="cell small-12 medium-auto">
				<h2>News & Events</h2>
			</div>
			<div class="cell small-12 medium-shrink show-for-medium">
				<a class="button" href="#">View All News</a>
			</div>
		</div>
		<div class="grid-x grid-padding-x grid-20 small-up-1 medium-up-2 tablet-up-3">
			
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
					<article id="post-<?php the_ID(); ?>" <?php post_class('h-100'); ?> role="article">	
						<a class="h-100 color-white grid-x flex-dir-column align-justify" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<div class="img-wrap">
								<img src="<?php echo $grid_image['sizes']['post-thumb'];?>">
							</div>
							<div class="text-wrap h-100 relative">
								<div class="inner h-100 white-bg">
									<div class="date font-brandon">
										<?php echo get_the_date(' F m, Y ');?>
									</div>
									<hr>
									<h3 class="h5 color-black"><?php the_title();?></h3>
								</div>
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
		<div class="grid-x grid-padding-x hide-for-medium">
			<div class="cell small-12 text-center">
				<a class="button" href="#">View All News</a>
			</div>
		</div>
	</div>
</section>