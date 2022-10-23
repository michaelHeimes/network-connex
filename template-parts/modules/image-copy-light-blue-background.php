<?php 
	$image = get_sub_field('image');
	$copy = get_sub_field('copy');
?>
<section class="module image-copy-light-blue-background">
	<div class="grid-container h-100">
		<div class="grid-x grid-padding-x h-100">
			<?php if( !empty($centered_heading) ):?>
			<div class="cell small-12">
				<h2 class="h3 text-center"><?php echo $centered_heading;?></h2>
			</div>
			<?php endif;?>
			<?php 
			if( !empty( $image ) ): ?>
			<div class="left cell small-12 tablet-7 grid-x">
				<div class="img-wrap grid-x">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</div>
			</div>
			<?php endif; ?>
			<div class="right cell small-12 tablet-5">
				<div class="sky-blue-bg h-100">
					<div class="grid-x align-middle h-100">
						<div><?php echo $copy;?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>