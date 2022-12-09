<?php 
	$projects = get_sub_field('projects');
?>
<section class="module featured-projects light-gray-bg">
	<div class="grid-container">
		<div class="header grid-x grid-padding-x">
			<div class="cell small-12 medium-auto">
				<h2>Featured Projects</h2>
			</div>
			<div class="cell small-12 medium-shrink show-for-medium">
				<a class="button" href="/resources/#featured-projects">View All Projects</a>
			</div>
		</div>
		<div class="grid-x grid-padding-x grid-20 small-up-1 medium-up-2 tablet-up-3">
			<?php foreach( $projects as $post ): 
			setup_postdata($post); 
				$grid_image = get_field('grid_image');
				$grid_excerpt = get_field('grid_excerpt');
			?>
			<div class="single-article cell text-center">
				<article id="post-<?php the_ID(); ?>" <?php post_class('h-100'); ?> role="article">	
					<a  class="color-white h-100 grid-x flex-dir-column align-justify" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
						<div class="inner has-bg grid-x align-center">
							<div class="bg" style="background-image: url('<?php echo $grid_image['sizes']['post-thumb'];?>');"></div>
							<div class="excerpt grid-x align-middle align-center relative color-white">
								<div>
									<p><?php echo $grid_excerpt;?></p>
									<span>Read More</span>
								</div>
							</div>
						</div>
						<div class="title-wrap">
							<h4 class="color-black"><?php the_title();?></h4>
						</div>
					</a>
				</article>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>
		</div>
		<div class="grid-x grid-padding-x hide-for-medium">
			<div class="cell small-12 text-center">
				<a class="button" href="/resources/#featured-projects">View All Projects</a>
			</div>
		</div>
	</div>
</section>