<?php
	$type = get_sub_field('type');
	$heading = get_sub_field('heading'); 
	$quote_text = get_sub_field('quote_text');
	$authors_photo = get_sub_field('authors_photo');
	$author = get_sub_field('author');
	$title = get_sub_field('title');
	$button_link = get_sub_field('button_link');
?>
<section class="module quote<?php if($type == 'external') { echo ' blue-bg';} else { echo ' sky-blue-bg';};?> type-<?php echo $type;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 medium-10 medium-offset-1 large-8 large-offset-2 text-center">
				<?php if($type == 'internal' && !empty($heading)):?>
				<h2><?php echo $heading;?></h2>
				<?php endif;?>
				<p class="quote-text"><?php echo $quote_text;?></p>
				<div class="grid-x grid-padding-x align-center">
					<div class="cell shrink">
						<div class="author-info<?php if($type == 'internal'){ echo ' text-left grid-x align-middle'; };?>">
							<?php 
							$image = $authors_photo;
							if( $type == 'internal' && !empty( $image ) ): ?>
							<div class="photo-wrap">
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</div>
							<?php endif; ?>
							<div>
								<p class="author"><?php echo $author;?></p>
								<p class="title m-0"><?php echo $title;?></p>	
							</div>		
						</div>	
					</div>
				</div>
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