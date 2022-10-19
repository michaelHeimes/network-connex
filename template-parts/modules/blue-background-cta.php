<?php 
	$logo = get_sub_field('logo');
	$copy = get_sub_field('copy');
	$button_link = get_sub_field('button_link');
?>
<section class="module blue-background-cta blue-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<?php 
			$image = $logo;
			if( !empty( $image ) ): ?>
			<div class="left cell small-12 tablet-6 text-center">
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			</div>
			<?php endif; ?>
			<div class="cell small-12 tablet-6">
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