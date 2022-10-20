<?php
	$slides = get_sub_field('slides');
	if( !empty($slides) ):
?>
<header class="banner banner-slider">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<?php foreach ($slides as $slide):
				$background_image = $slide['background_image'];
				$heading = $slide['heading'];
				$text = $slide['text'];
			?>
			<div class="swiper-slide has-bg">
				<div class="bg" style="background-image: url('<?php echo $background_image['url'];?>');"></div>
				<div class="grid-container relative">
					<div class="inner grid-x grid-margin-x align-middle">
						<div class="cell small-12 large-10 large-offset-1 text-center color-white">
							<?php if( !empty($heading) ):?>
								<h1 class="color-white"><?php echo $heading;?></h1>
							<?php endif;?>
							<?php if( !empty($text) ):?>
								<p class="color-white"><?php echo $text;?></p>
							<?php endif;?>
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