<?php 
	$background_color = get_sub_field('background_color');
	$copy = get_sub_field('copy');
	$button_link = get_sub_field('button_link');
?>
<section class="module centered-copy <?php echo $background_color;?>-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 large-10 large-offset-1 text-center">
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