<?php
	$alternative_title = get_sub_field('alternative_title');
	$background_image = get_sub_field('background_image');
?>
<header class="banner has-bg">
	<div class="bg" style="background-image: url('<?php echo $background_image['url'];?>');"></div>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<?php if( !empty($alternative_title) ):?>
					<h1><?php echo $alternative_title;?></h1>
					
				<?php else:?>
					<h1><?php the_title();?></h1>
				<?php endif;?>
			</div>
		</div>
	</div>
</header>