<?php
	$slides = get_sub_field('slides');
	if( !empty($slides) ):
	$i = 0; foreach ($slides as $slide):		
		if($i == 0) {
			$color_theme = $slide['color_theme'];
		}		
	$i++; endforeach;
?>
<header class="banner banner-slider" color-theme="color-theme-<?php echo $color_theme;?>">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<?php foreach ($slides as $slide):
				$background_image = $slide['background_image'];
				$heading = $slide['heading'];
				$text = $slide['text'];
				$color_theme = $slide['color_theme'];
				$button_link = $slide['button_link'];
			?>
			<div class="swiper-slide has-bg" data-theme="color-theme-<?php echo $color_theme;?>">
				<div class="bg" style="background-image: url('<?php echo $background_image['url'];?>');"></div>
				<div class="bg mask"></div>
				<div class="grid-container relative">
					<div class="inner grid-x grid-margin-x align-middle">
						<div class="cell small-12 large-10 large-offset-1 text-center color-white">
							<?php if( !empty($heading) ):?>
								<h1><?php echo $heading;?></h1>
							<?php endif;?>
							<?php if( !empty($text) ):?>
								<p class="color-blue"><?php echo $text;?></p>
							<?php endif;?>
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
			</div>
			<?php endforeach;?>
		</div>
	</div>
	<?php get_template_part('template-parts/part', 'banner-border');?>
</header>
<?php endif;?>