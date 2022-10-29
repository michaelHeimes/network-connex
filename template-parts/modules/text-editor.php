<?php 
	$text_editor = get_sub_field('text_editor');
?>
<section class="module text-editor <?php echo $background_color;?>-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 large-10 large-offset-1">
				<?php echo $text_editor;?>
			</div>
		</div>
	</div>
</section>