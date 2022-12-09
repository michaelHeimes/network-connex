<section class="module news-events">
	<div class="grid-container">
		<div class="header grid-x grid-padding-x">
			<div class="cell small-12 medium-auto">
				<h2>News & Events</h2>
			</div>
			<div class="cell small-12 medium-shrink show-for-medium">
				<a class="button" href="/resources/#news-events">View All News</a>
			</div>
		</div>
	</div>
	<div class="grid-container">
		<div class="grid-x grid-padding-x grid-20 small-up-1 medium-up-2 tablet-up-3">
				
			<?php
			$featured_posts = get_sub_field('news_posts');
			if( $featured_posts ): ?>
				<?php foreach( $featured_posts as $post ): 
			
					// Setup this post for WP functions (variable must be named $post).
					setup_postdata($post); 
					$grid_image = get_field('grid_image');
					?>
					<div class="cell text-center color-white">
						<article id="post-<?php the_ID(); ?>" <?php post_class('h-100'); ?> role="article">	
							<?php if( get_field('outside_article_url') ):?>
							<a class="h-100 color-white grid-x flex-dir-column align-justify" href="<?php the_field('outside_article_url');?>" rel="bookmark" title="<?php the_title_attribute(); ?>" target="_blank">
							<?php else:?>
							<a class="h-100 color-white grid-x flex-dir-column align-justify" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<?php endif;?>
								<div class="img-wrap">
									<img src="<?php echo $grid_image['sizes']['post-thumb'];?>">
								</div>
								<div class="text-wrap h-100 relative">
									<div class="inner h-100 white-bg">
										<div class="date font-brandon">
											<?php echo get_the_date(' F j, Y ');?>
										</div>
										<hr>
										<h3 class="h5 color-black"><?php the_title();?></h3>
									</div>
								</div>
							</a>
						</article>
					</div>
				<?php endforeach; ?>
				<?php 
				// Reset the global post object so that the rest of the page works correctly.
				wp_reset_postdata(); ?>
			<?php endif; ?>

		</div>
		<div class="grid-x grid-padding-x hide-for-medium">
			<div class="cell small-12 text-center">
				<a class="button" href="/resources/#news-events">View All News</a>
			</div>
		</div>
	</div>
</section>