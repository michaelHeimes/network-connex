<?php 
	$centered_heading = get_sub_field('centered_heading');
	$layout = get_sub_field('layout');
	$image = get_sub_field('image');
	$copy = get_sub_field('copy');
	$button_link = get_sub_field('button_link');
?>
<section class="module centered-copy image-left-copy-right <?php echo $background_color;?>-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<?php if( !empty($centered_heading) ):?>
			<div class="cell small-12">
				<h2 class="h3 text-center"><?php echo $centered_heading;?></h2>
			</div>
			<?php endif;?>
			<?php 
			if( !empty( $image ) ): ?>
			<div class="left cell small-12 <?php if($layout == '7/5') { echo 'tablet-7';} elseif($layout == '6/6') { echo 'tablet-6'; } elseif($layout == '5/7') { echo 'tablet-5'; };?>">
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			</div>
			<?php endif; ?>
			<div class="right cell small-12 <?php if($layout == '7/5') { echo 'tablet-5';} elseif($layout == '6/6') { echo 'tablet-6'; } elseif($layout == '5/7') { echo 'tablet-7'; };?>">
				<?php echo $copy;?>
				<?php 
				$link = $button_link;
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
				<div class="btn-wrap">
					<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>