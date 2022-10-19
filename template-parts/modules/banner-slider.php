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
	<div class="banner-border grid-x align-bottom align-center">
		<span>
			<svg width="129" height="131" viewBox="0 0 129 131" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M64.5 130.696C81.0498 130.673 96.9594 124.247 108.946 112.746C120.932 101.244 128.081 85.5444 128.917 68.8852C129.754 52.2261 124.213 35.879 113.439 23.2171C102.666 10.5552 87.4806 2.54458 71.0177 0.838191L71.0177 35.8776C78.2885 37.4965 84.7102 41.7642 89.0508 47.8621C93.3914 53.9599 95.3452 61.4585 94.5374 68.9191C93.7295 76.3796 90.2169 83.2769 84.6735 88.2875C79.13 93.2981 71.9461 96.0693 64.5 96.0693C57.0539 96.0693 49.87 93.2981 44.3265 88.2875C38.783 83.2769 35.2705 76.3796 34.4626 68.919C33.6548 61.4584 35.6086 53.9599 39.9492 47.8621C44.2898 41.7642 50.7116 37.4965 57.9824 35.8776L57.9824 0.838189C41.5194 2.54458 26.3343 10.5552 15.5606 23.2171C4.7868 35.879 -0.753594 52.2261 0.0825401 68.8852C0.918675 85.5444 8.06756 101.244 20.0541 112.746C32.0406 124.247 47.9502 130.673 64.5 130.696Z" fill="#6BBE4A"/>
			</svg>
		</span>
	</div>
</header>
<?php endif;?>