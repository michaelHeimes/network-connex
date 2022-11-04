<?php 
	$heading = get_sub_field('heading');
?>
<section class="module location-cards light-gray-bg" data-equalizer data-equalize-on="small">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<?php if( !empty($heading) ):?>
			<div class="cell small-12 text-center">
				<h2><?php echo $heading;?></h2>
			</div>
			<?php endif;?>
		</div>
	</div>
	
	<div class="grid-container grid-16-container">
		<?php			
		$args = array(  
			'post_type' => 'location',
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'orderby' => 'title',
			'order' => 'ASC'
		);
		
		$loop = new WP_Query( $args ); 
		
		if ( $loop->have_posts() ) : ?>
			<div class="location-grid grid-x grid-16 grid-padding-x small-up-2 medium-up-3 tablet-up-4">
			
			<?php while ( $loop->have_posts() ) : $loop->the_post();?>
			
				<div class="cell location-card">
					<div class="inner text-center white-bg grid-x flex-dir-column align-middle align-center" data-equalizer-watch>
						<p class="name"><strong><?php the_field('name');?></strong></p>
						<p class="m-0"><?php the_field('address');?></p>
					</div>
				</div>
				
			<?php
			endwhile;?>
			</div>
			
		<?php endif;
		wp_reset_postdata(); 
		?>
	</div>
	
	<div class="grid-container grid-16-container">
		<?php			
		$args = array(  
			'post_type' => 'nti_location',
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'orderby' => 'title',
			'order' => 'ASC'
		);
		
		$loop = new WP_Query( $args ); 
		
		if ( $loop->have_posts() ) : ?>
			<div class="location-grid nti-location-grid grid-x grid-16 grid-padding-x small-up-2 medium-up-3 tablet-up-4">
			
			<?php while ( $loop->have_posts() ) : $loop->the_post();?>
			
				<div class="cell location-card nti-location-card">
					<div class="inner text-center white-bg grid-x flex-dir-column align-middle align-center" data-equalizer-watch>
						<p class="name"><strong><?php the_field('name');?></strong></p>
						<p class="m-0"><?php the_field('address');?></p>
					</div>
				</div>
				
			<?php
			endwhile;?>
			</div>
			
		<?php endif;
		wp_reset_postdata(); 
		?>
	</div>
</section>