<?php 
	$left_image = get_sub_field('left_image');
	$right_image = get_sub_field('right_image');
?>
<section class="module two-image-set">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 large-10 large-offset-1">
				<div class="grid-x grid-padding-x grid-20">
					<div class="left cell small-12 medium-6">
						<?php 
						$image = $left_image;
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					</div>
					<div class="left cell small-12 medium-6">
						<?php 
						$image = $right_image;
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>