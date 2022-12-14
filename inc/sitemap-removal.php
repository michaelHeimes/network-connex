<?php
// set post to noindex if external link
// https://wordpress.stackexchange.com/questions/192872/yoast-seo-plugin-set-no-index-to-a-post-automatically-when-a-post-is-set-to-st

function mh_update_external_link_investments($post_id, $post, $update) {
	if ( wp_is_post_revision( $post_id ) ) return;

	if (empty($post_id)) return;

	if ($_POST['_wp_http_referer'] == '/wp-admin/post-new.php') {
		$remove_from_sitemap = (isset($_POST['acf']['field_6388ebbe3a2fb']) ? $_POST['acf']['field_6388ebbe3a2fb'] : false );
	} else {
		$remove_from_sitemap = get_post_meta($post_id, 'outside_article_url', true);
	}
	
	if ($remove_from_sitemap) {
		add_action( 'wpseo_saved_postdata', function() use ( $post_id ) { 
			update_post_meta( $post_id, '_yoast_wpseo_meta-robots-noindex', '1' );
		}, 999 );
	} else {
		add_action( 'wpseo_saved_postdata', function() use ( $post_id ) { 
			delete_post_meta( $post_id, '_yoast_wpseo_meta-robots-noindex' );
		}, 999 );
	}	
}
add_action('save_post_resource', 'mh_update_external_link_investments', 100, 3);

function my_redirect_function() {
	if( has_term( 'collateral', 'resource_type' ) ){
		$resources = esc_url( home_url( '/resources/' ));
		wp_redirect( $resources, 301 ); exit;
	}
	if( get_field('outside_article_url') ){
		$resources = esc_url( home_url( '/resources/' ));
		wp_redirect( $resources, 301 ); exit;
	}
}

add_action( 'template_redirect', 'my_redirect_function');