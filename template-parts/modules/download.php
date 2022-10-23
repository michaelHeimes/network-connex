<?php 
	$image = get_sub_field('image');
	$name = get_sub_field('name');
	$file = get_sub_field('file');
?>
<section class="module download">
	<div class="grid-container h-100">
		<div class="grid-x grid-padding-x h-100">
			<div class="cell small-12 medium-10 medium-offset-1 large-6 large-offset-3">
				<div class="grid-x grid-padding-x">					
					<?php 
					if( !empty( $image ) ): ?>
					<div class="left cell small-12 medium-4 grid-x">
						<div class="img-wrap">
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						</div>
					</div>
					<?php endif; ?>
					<div class="right cell small-12 medium-8 text-center">
						<div class="light-gray-bg h-100 grid-x align-middle align-center">
							<h3><?php echo $name;?></h3>
							<?php 
							if( $file ):?>
							<div class="btn-wrap">
								<a class="button" href="<?php echo esc_url( $file ); ?>" target="_blank">Download</a>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>