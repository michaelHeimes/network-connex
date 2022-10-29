<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Network Connex
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header blue-bg">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-12 large-10 large-offset-1">
					<div class="byline-wrap text-center"><?php get_template_part( 'template-parts/content', 'byline' ); ?></div>
					<h1 class="h2 entry-title single-title text-center" itemprop="headline"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</header><!-- .entry-header -->

	<?php network_connex_post_thumbnail(); ?>

	<div class="entry-content">
		<?php get_template_part('template-parts/loop', 'modules');?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->