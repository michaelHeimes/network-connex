<?php 
	$background_color = get_sub_field('background_color');
	$copy = get_sub_field('copy');
	$icons_labels = get_sub_field('icons_label');
	$button_link = get_sub_field('button_link');
	$rtp = get_sub_field('remove_top_padding');
	$rbp = get_sub_field('remove_bottom_padding');
?>
<section class="module centered-copy <?php echo $background_color;?>-bg <?php if($rtp) {echo ' ntp';} if($rtp) {echo ' nbp';};?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="copy-wrap cell small-12 large-10 large-offset-1 text-center">
				<?php echo $copy;?>
			</div>
			
			<?php if($icons_labels):?>
			<div class="cell small-12 large-10 large-offset-1">
				<div class="icons-labels grid-x grid-padding-x small-up-2 medium-up-3 large-up-5 align-center">
				<?php
					$i = 1;
					foreach( $icons_labels as $icons_label ):
					$icon = $icons_label['icon'];
					$label = $icons_label['label'];
				?>
					<div class="cell text-center">
						<?php 
						$image = $icon;
						if( !empty( $image ) ): ?>
						<div class="img-wrap">
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						</div>
						<?php endif; ?>
						<?php if($label):?>
						<h4><?php echo $label;?></h4>
						<?php endif;?>
					</div>
				<?php $i++; endforeach;?>
				</div>
			</div>
			<?php endif;?>
			<div class="cell small-up-2 mdium-up-3 large-up-5 xlarge-up-7 text-center">
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
</section>