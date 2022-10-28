<?php 
	$rows = get_sub_field('rows');
?>
<section class="module logos-and-text-rows">
	<div class="grid-container">
		<?php foreach( $rows as $row ):?>
			<div class="grid-x grid-padding-x align-middle">
				<div class="left cell small-12 medium-2">
					<?php 
					$image = $row['logo'];
					if( !empty( $image ) ): ?>
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
				<div class="right cell small-12 medium-10">
					<div class="text-wrap">
						<?php echo $row['text'];?>
					</div>
				</div>
				<div class="cell small-12">
					<hr>
				</div>
			</div>
		<?php endforeach;?>
		</div>
	</div>
</section>