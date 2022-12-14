<?php 
	$logo = get_sub_field('logo');
	$copy = get_sub_field('copy');
	$button_link = get_sub_field('button_link');
	$second_button_link = get_sub_field('second_button_link');
?>
<section class="module blue-background-cta blue-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<?php 
			$image = $logo;
			if( !empty( $image ) ): ?>
			<div class="left cell small-12 tablet-6 text-center">
				<div class="img-wrap">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</div>
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
				<div class="btn-wrap grid-x grid-padding-x">
					<div class="cell shrink">
						<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					</div>
					<?php 
					if($second_button_link):
						$link2 = $second_button_link;
						$link_url = $link2['url'];
						$link_title = $link2['title'];
						$link_target = $link2['target'] ? $link2['target'] : '_self';
						?>
						<div class="cell shrink">
							<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
					<?php endif;?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>