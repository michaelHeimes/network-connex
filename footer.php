<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Network Connex
 */

?>

				<footer id="colophon" class="site-footer">
					<div class="site-info">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12 tablet-3">
									<?php 
									$image = get_field('footer_logo', 'option');
									if( !empty( $image ) ): ?>
									<div class="logo-wrap">
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									</div>
									<?php endif; ?>
									<?php if( $address = get_field('address', 'option') ):
										$directions = get_field('directions_url', 'option');
									?>
									<div class="address-wrap show-for-tablet">
										<h3 class="h4">Headquarters</h3>
										<?php if( !empty($directions) ):?>
											<a href="<?php echo $directions;?>" target="_blank">
										<?php endif;?>
										<p><?php echo $address;?></p>
										<?php if( !empty($directions) ):?>
											</a>
										<?php endif;?>
									</div>
									<?php endif;?>
									<div class="footer-contact-link">
										<a href="<?php echo home_url();?>/contact/">Contact Us</a>
									</div>
								</div>
								<div class="cell small-12 tablet-9">
									<?php network_connex_footer_links();?>
									<?php if( $address = get_field('address', 'option') ):
										$directions = get_field('directions_url', 'option');
									?>
									<div class="address-wrap hide-for-tablet">
										<h3 class="h4">Headquarters</h3>
										<?php if( !empty($directions) ):?>
											<a href="<?php echo $directions;?>" target="_blank">
										<?php endif;?>
										<p><?php echo $address;?></p>
										<?php if( !empty($directions) ):?>
											</a>
										<?php endif;?>
									</div>
									<?php endif;?>
								</div>
							</div>
						</div>
					</div><!-- .site-info -->
					<div class="copyright light-gray-bg">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">
									<p class="source-org copyright small text-center">&copy; <?php echo date('Y'); ?>, <?php bloginfo('name'); ?> | All Rights Reserved</p>
								</div>
							</div>
						</div>
					</div>
				</footer><!-- #colophon -->
					
			</div><!-- #page -->
			
		</div>  <!-- end .off-canvas-content -->
							
	</div> <!-- end .off-canvas-wrapper -->
					
<?php wp_footer(); ?>

</body>
</html>
