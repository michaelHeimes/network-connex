<?php 
	$ctas = get_sub_field('ctas');
	$ctas_count = count($ctas);
	$background_color = get_sub_field('background_color');
?>
<section class="module ctas-with-background-images <?php echo $background_color;?>-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle small-up-1<?php if($ctas_count >= 2) { echo' medium-up-2';};?>">
			<?php foreach( $ctas as $cta ): 
				$background_image =  $cta['background_image'];
				$heading =  $cta['heading'];
				$text =  $cta['text'];
				$link =  $cta['link_button'];
			?>
			<div class="cell text-center">
				<div class="inner has-bg grid-x align-top align-center">
					<div class="bg" style="background-image: url('<?php echo $background_image['url'];?>');"></div>
					<div class="bg mask"></div>
					<div class="relative color-white text-center">
						<?php if( !empty($heading) ):?>
						<h2 class="color-white text-28"><?php echo $heading;?></h2>
						<?php endif;?>
						<?php if( !empty($text) ):?>
						<p class="color-white"><?php echo $text;?></p>
						<?php endif;?>
						<?php if( $link ): 
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
			<?php endforeach; wp_reset_postdata(); ?>
		</div>
	</div>
</section>