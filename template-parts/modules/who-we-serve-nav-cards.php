<?php 
	$nav_cards = get_sub_field('nav_cards');
?>
<section class="module who-we-serve-nav-cards">
	<div class="grid-container">
		<div class="nav-cards grid-x grid-padding-x grid-16 small-up-1 medium-up-2 large-up-3 align-center">
			<?php foreach( $nav_cards as $nav_card ):
				$image = $nav_card['image'];
				$page = $nav_card['page'];
				$permalink = get_permalink( $page->ID );
				$title = get_the_title( $page->ID );
				
				$searchMNOs = "MNOs";
				$searchMSOs = "MSOs";
				
				if(preg_match("/{$searchMNOs}/i", $title)) {
					$title = preg_replace('/(.)$/', '<span style="text-transform: lowercase;">\1</span>', $title);
				}

				if(preg_match("/{$searchMSOs}/i", $title)) {
					$title = preg_replace('/(.)$/', '<span style="text-transform: lowercase;">\1</span>', $title);
				}
				
			?>
			<div class="cell text-center">
				<a href="<?php echo esc_url( $permalink ); ?>" class="inner">
					<?php 
					if( !empty( $image ) ): ?>
					<div class="img-wrap has-bg">
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<div class="bg mask"></div>
						<div class="bg button-wrap grid-x align-middle align-center">
							<div class="button white-outline">Learn More</div>
						</div>
					</div>
					<?php endif; ?>
					<h4><?php echo $title ; ?></h4>
				</a>
			</div>
			<?php endforeach; wp_reset_postdata();?>
		</div>
	</div>
</section>