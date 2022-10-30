<?php
	$heading = get_sub_field('heading');
	$background_image = get_sub_field('background_image');
	$color_theme = get_sub_field('color_theme');
	$button_link = get_sub_field('button_link');
	
	get_template_part('template-parts/part', 'banner', array( 
	'data'  => array(
		'color_theme' => $color_theme,
		'background_image' => $background_image,
		'heading' => $heading,
		'button_link' => $button_link,
	)) 
	);
?>