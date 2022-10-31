<?php
	$color_theme = $args['data']['color_theme'];
	$background_image = $args['data']['background_image'];
	$heading = $args['data']['heading'];
	$button_link = $args['data']['button_link'];
?>
<header class="banner default-banner has-bg" color-theme="color-theme-<?php echo $color_theme;?>">
	<div class="bg" style="background-image: url('<?php echo $background_image['url'];?>');"></div>
	<div class="bg mask"></div>
	<div class="grid-container relative">
		<div class="inner grid-x grid-padding-x align-middle">
			<div class="cell small-12 large-10 large-offset-1 text-center">
				<?php if( !empty($heading) ):?>
					<h1><?php echo $heading?></h1>
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
	<?php get_template_part('template-parts/part', 'banner-border');?>
</header>