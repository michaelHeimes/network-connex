<?php 
	$heading = get_sub_field('heading');
	$services = get_sub_field('services');
?>
<section class="module services">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<h2 class="text-center"><?php echo $heading;?></h2>
			</div>
		</div>
		<div class="services-wrap grid-x grid-padding-x small-up-1 medium-up-2 large-up-3">
			<div class="bg"></div>
			<?php foreach( $services as $service ):
				$icon = $service['icon'];
				$name = $service['name'];
				$text = $service['text'];
			?>
			<div class="cell text-center">
				<?php 
				$image = $icon;
				if( !empty( $image ) ): ?>
				<div class="icon-wrap">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</div>
				<?php endif; ?>
				<h4><?php echo $name;?></h4>
				<p><?php echo $text;?></p>
			</div>
			<?php endforeach;?>
		</div>
	</div>
</section>