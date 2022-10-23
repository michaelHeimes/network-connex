<?php 
	$background_image = get_sub_field('background_image');
	$facts_figures = get_sub_field('facts_figures');
?>
<section class="module facts-figures has-bg">
	<div class="bg" style="background-image: url(<?php echo $background_image['url'];?>)"></div>
	<div class="bg mask"></div>
	<div class="grid-container fluid relative">
		<div class="has-bg grid-x grid-padding-x align-spaced">
			<div class="bg"></div>
			<?php foreach( $facts_figures as $facts_figure ):?>
			<div class="cell shrink text-center color-white relative">
				<div class="h1 color-white"><?php echo $facts_figure['number'];?></div>
				<p class="text-22"><?php echo $facts_figure['text'];?></p>
				
			</div>
			<?php endforeach;?>
		</div>
	</div>
</section>