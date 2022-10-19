<?php 
	$projects = get_sub_field('projects');
?>
<section class="module featured-projects light-gray-bg">
	<div class="grid-container">
		<div class="header grid-x grid-padding-x">
			<div class="cell small-12 medium-auto">
				<h2>Featured Projects</h2>
			</div>
			<div class="cell small-12 medium-shrink">
				<a class="button" href="#">View All Projects</a>
			</div>
		</div>
		<div class="grid-x grid-padding-x grid-20 small-up-1 medium-up-2 tablet-up-3">
			<?php foreach( $projects as $post ): 
			setup_postdata($post); 
				$grid_image = get_field('grid_image');
				$grid_excerpt = get_field('grid_excerpt');
			?>
			<div class="cell text-center">
				<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">	
					<a  class="color-white"href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
						<div class="inner has-bg grid-x align-middle align-center">
							<div class="bg" style="background-image: url('<?php echo $grid_image['sizes']['post-thumb'];?>');"></div>
							<div class="relative color-white">
								<?php echo $grid_excerpt;?>
							</div>
						</div>
						<div class="inner title-wrap">
							<h4 class="color-black"><?php the_title();?></h4>
						</div>
					</a>
				</article>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>
		</div>
	</div>
</section>