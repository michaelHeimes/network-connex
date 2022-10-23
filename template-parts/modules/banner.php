<?php
	$alternative_title = get_sub_field('alternative_title');
	$background_image = get_sub_field('background_image');
	$color_theme = get_sub_field('color_theme');
?>
<header class="banner default-banner has-bg" color-theme="color-theme-<?php echo $color_theme;?>">
	<div class="bg" style="background-image: url('<?php echo $background_image['url'];?>');"></div>
	<div class="bg mask"></div>
	<div class="grid-container relative">
		<div class="inner grid-x grid-padding-x align-middle align-center">
			<div class="cell small-12 text-center">
				<?php if( !empty($alternative_title) ):?>
					<h1><?php echo $alternative_title;?></h1>
					
				<?php else:?>
					<h1><?php the_title();?></h1>
				<?php endif;?>
			</div>
		</div>
	</div>
	<?php get_template_part('template-parts/part', 'banner-border');?>
</header>