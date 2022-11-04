<?php 
	$team_name = get_sub_field('name');
	$team_members = get_sub_field('team_members');
?>
<section class="module team">
	<div class="grid-container grid-16-container">
		<div class="grid-x grid-padding-x">
			<div class="team-wrap cell small-12 large-10 large-offset-1">
				<h2 class="text-center"><?php echo $team_name;?></h2>
				<div class="card-grid grid-x grid-padding-x grid-16">
					<?php foreach( $team_members as $post ):
						setup_postdata($post);
					?>
					<div class="single-tm relative cell small-6 medium-4">
						<div class="inner relative">
							<a href="#">
								<?php 
								$image = get_field('photo');
								if( !empty( $image ) ): ?>
								<div class="img-wrap has-bg">
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<div class="bg"></div>
									<div class="title">
										<div class="grid-x align-middle">
											<div class="cell shrink">
												<div class="toggle">
													<span></span>
													<span></span>
												</div>
											</div>
											<div class="cell auto">
												<h3 class="p"><?php the_title();?></h3>
												<h4 class="p m-0"><?php the_field('title');?></h4>
											</div>
										</div>
									</div>
								</div>
								<?php endif; ?>
							</a>
							<div class="tm-bio">
								<h3><?php the_title();?>, <?php the_field('title');?></h3>
								<?php the_content();?>
							</div>
						</div>
					</div>
					<?php endforeach; wp_reset_postdata();?>
				</div>
			</div>
		</div>
	</div>
</section>