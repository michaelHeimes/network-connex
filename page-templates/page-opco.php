 <?php
/**
 * Template name: OpCo
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Network Connex
 */

get_header();
$fields = get_fields();
?>
	<div class="content">
		<div class="inner-content">

			<main id="primary" class="site-main">
		
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
					<?php get_template_part('template-parts/part', 'banner', array( 
						'data'  => array(
							'color_theme' => get_field('color_theme'),
							'background_image' => get_field('background_image'),
							'heading' => get_field('banner_heading'),
						)) 
					);?>
				
					<section class="entry-content" itemprop="text">
						<div class="templated-content grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12 large-10 large-offset-1">
									<?php if( $body_heading = $fields['body_heading'] ):?>
										<h2 class="text-center"><?php echo $body_heading;?></h2>
									<?php endif;?>
									<?php if( $logo = $fields['logo'] || $team_member_photo = $fields['team_member_photo'] || $team_member_name = $fields['team_member_name'] || $team_member_title = $fields['team_member_title'] ):?>
										<div class="logo-team-member grid-x grid-padding-x align-center align-middle">
											<?php if($logo = $fields['logo']):?>
											<div class="left cell small-12 medium-6">
												<?php 
												$image = $logo;
												if( !empty( $image ) ): ?>
													<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												<?php endif; ?>
											</div>
											<?php endif;?>
											<div class="right cell small-12 medium-6">
												<div class="grid-x grid-padding-x align-middle align-center">
													<?php if($team_member_photo = $fields['team_member_photo']):?>
													<div class="left-tm cell small-12 medium-shrink">
														<?php 
														$image = $team_member_photo;
														if( !empty( $image ) ): ?>
														<div class="img-wrap">
															<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
														</div>
														<?php endif; ?>
													</div>
													<?php endif;?>
													<?php if($team_member_name = $fields['team_member_name'] || $team_member_title = $fields['team_member_title'] ):?>
													<div class="right-tm cell shrink medium-auto">
														<p><?php echo $fields['team_member_name'];?><?php if($team_member_title = $fields['team_member_title']):?>,<br><?php echo $team_member_title;?><?php endif;?>
														</p>
													</div>
													<?php endif;?>
												</div>
											</div>
										</div>
									<?php endif;?>
									<?php if( $copy_1 = $fields['copy_1'] ):?>
										<div class="text-wrap copy-1"><?php echo $copy_1;?></div>
									<?php endif;?>
									
									<?php if( $segment_columns = $fields['segment_columns'] ):?>
										<div class="segment-columns grid-x grid-padding-x text-center">
											<?php foreach ($segment_columns as $segment_column):?>
												<div class="cell small-12 medium-6">
													<?php echo $segment_column['segment_column'];?>
												</div>
											<?php  endforeach;?>
										</div>
										
									<?php endif;?>
									
									<?php if( $copy_2 = $fields['copy_2'] ):?>
										<div class="text-wrap copy-2"><?php echo $copy_2;?></div>
									<?php endif;?>
								</div>
							</div>
						</div>

						<?php get_template_part('template-parts/loop-modules');?>
						
					</section> <!-- end article section -->

				</article><!-- #post-<?php the_ID(); ?> -->
		
			</main><!-- #main -->
				
		</div>
	</div>

<?php
get_footer();