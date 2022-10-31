<section class="module resources">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
	<?php
	$taxonomy = 'resource_type';
	
	$args = array(
		'taxonomy' => $taxonomy,
	);
	$terms = get_terms($args);
	?>
	
	<?php if ($terms):?>
	<div class="left cell small-12 tablet-shrink">
		<div class="filter-taxonomy grid-x flex-dir-column light-gray-bg">
			<div class="filter-label font-brandon color-blue">Filter</div>
			<?php foreach ($terms as $term): ?>					
			<button class="text-left align-middle" data-term="<?php echo $term->slug; ?>" data-tax="type" data-hash="<?php echo $term->slug; ?>" type="button">
				<span class="checkbox"></span>
				<span><?php echo $term->name; ?></span>
			</button>
			<?php endforeach;?>
		</div>
	</div>
	<?php endif; ?>
	
	<?php
	$args = array(
		'orderby' => 'id',
		'orderby'        => 'title',
		'order'          => 'ASC'
	);
	$taxonomy_terms = get_terms($taxonomy, $args);
	
	// if there are some taxonomy terms, loop through each one and get the posts in that term
	if($taxonomy_terms):?>
	<div class="right cell small-12 tablet-auto">
		<div class="filter-grid">
		<?php
		foreach($taxonomy_terms as $taxonomy_term):
	
			$args = array(
				'post_type' => 'resource',
				'taxonomy' => $taxonomy_term->slug,
				'post_status' => 'publish',
				'posts_per_page' => -1,
				'tax_query' => array(
					array (
						'taxonomy' => 'resource_type',
						'field' => 'slug',
						'terms' => $taxonomy_term->slug,
					)
				),
			);
	
			$query = new WP_Query( $args );
	
			if ( $query->have_posts() ) :
				$postsCount = $query->found_posts;
			?>
			
				<div class="resource-group cell" data-type=".<?php echo $taxonomy_term->slug; ?>.">
	
					<div class="resource-group-header grid-x grid-padding-x">
						<div class="cell auto">
							<h2><?php echo $taxonomy_term->name; ?></h2>
						</div>
						<?php if( $postsCount >= 7 ):?>
						<div class="show-all-wrap cell shrink">
							<a class="link-14" href="#">View All</a>
						</div>
						<?php endif;?>
					</div>
		
					<div class="cpts-wrap grid-x grid-padding-x small-up-2 large-up-3 grid-20">
		
					<?php $i = 1; while ( $query->have_posts() ) : $query->the_post(); ?>

						<article class="resource-card <?php if($i >= 7){echo ' hidden';};?> cell" role="article">
							<?php 
							$grid_image = get_field('grid_image');
							if( $taxonomy_term->slug == 'brochures'):?>
							<a class="color-white" href="<?php the_field('brochure');?>" target="_blank">
							<?php else:?>
							<a class="color-white" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<?php endif;?>	
								<div class="inner has-bg grid-x align-center">
								<img src="<?php echo $grid_image['sizes']['post-thumb'];?>">
								
									<div class="bg mask grid-x align-middle align-center">
										<span class="link-14 color-white">
											<?php if( $taxonomy_term->slug == 'brochures') {
												echo 'Download';
											} elseif($taxonomy_term->slug == 'videos') {
												echo 'Watch';
											} else {
												echo 'Read More';
											};?>
										</span>
									</div>
								
								</div>
					 
								<h3 class="h4 text-center"><?php the_title(); ?></h3>
							</a>
						</article>
					<?php $i++; endwhile; ?>
		
					</div><!-- .cpts-wrap -->
						
				</div>
	
			<?php wp_reset_postdata(); // so nothin' weird happens to other loops
			endif;?>
	
		<?php endforeach;?>
		</div>
	</div>
	<?php endif;?>
	
</section>