<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Network Connex
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://use.typekit.net/zdj3xfv.css">
	
	<!-- icons -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'network-connex' ); ?></a>
		
				<header class="site-header white-bg" role="banner" data-sticky data-margin-top="0" data-sticky-on="small">
					<?php get_template_part( 'template-parts/nav', 'offcanvas-topbar' ); ?>
				</header><!-- #masthead -->
				
				<div class="off-canvas-wrapper">
				
				<!-- Load off-canvas container. Feel free to remove if not using. -->			
				<?php get_template_part( 'template-parts/content', 'offcanvas' ); ?>
				
					<div class="off-canvas-content" data-off-canvas-content>
						<div id="page" class="site">
	