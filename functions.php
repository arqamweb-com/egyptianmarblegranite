<?php

/**
 * ArqamWeb Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ArqamWeb
 * @since 1.0.1
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ARQAMWEB_VERSION', '1.1.5');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{
    wp_enqueue_style(
        'arqamweb-theme-css',
        get_stylesheet_directory_uri() . '/style.css',
        ['astra-theme-css'],
        CHILD_THEME_ARQAMWEB_VERSION,
        'all'
    );

    wp_enqueue_style(
        'blaze-slider-css',
        get_stylesheet_directory_uri() . '/frontend/public/css/blaze.css',
        ['astra-theme-css'],
        CHILD_THEME_ARQAMWEB_VERSION,
        'all'
    );

    wp_enqueue_style(
        'style-css',
        get_stylesheet_directory_uri() . '/frontend/public/style.min.css',
        array('arqamweb-theme-css'),
        CHILD_THEME_ARQAMWEB_VERSION,
        'all'
    );
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);



/**

 * Enqueue script

 */

function my_custom_scripts()
{

    wp_enqueue_script(

        'blaze-slider-js',

        get_stylesheet_directory_uri() . '/frontend/public/js/blaze-slider.min.js',

        array(),

        CHILD_THEME_ARQAMWEB_VERSION,

        array(
            'strategy' => 'defer',
            'in_footer' => 'false',
        )
    );


    wp_enqueue_script(

        'flowbite-js',

        get_stylesheet_directory_uri() . '/frontend/public/js/flowbite.min.js',

        array(),

        CHILD_THEME_ARQAMWEB_VERSION,

        array(
            'strategy' => 'defer',
            'in_footer' => 'false',
        )
    );

    wp_enqueue_script(

        'main-js',

        get_stylesheet_directory_uri() . '/frontend/public/js/main.js',

        array(),

        CHILD_THEME_ARQAMWEB_VERSION,

        array(
            'strategy' => 'defer',
            'in_footer' => 'true',
        )
    );
}

add_action('wp_enqueue_scripts', 'my_custom_scripts');


require_once(get_stylesheet_directory() . '/inc/features.php');


// AWB: hide the users list from the REST API for visitors who are not logged in
add_filter( 'rest_endpoints', function ( $endpoints ) {
	if ( is_user_logged_in() ) {
		return $endpoints;
	}
	foreach ( array_keys( $endpoints ) as $route ) {
		if ( 0 === strpos( $route, '/wp/v2/users' ) ) {
			unset( $endpoints[ $route ] );
		}
	}
	return $endpoints;
} );

// AWB 2026-10-12: clean product name for image alt text (drops " l ..." / " | ..." / ": ..." tails from product titles)
function emg_product_name( $post_id = null ) {
	$title = html_entity_decode( wp_strip_all_tags( get_the_title( $post_id ) ), ENT_QUOTES, 'UTF-8' );
	$title = preg_replace( '/\s+-(?=\S)|(?<=\S)-\s+/u', ' - ', $title );
	$parts = preg_split( '/\s+(?:l|\||\x{2013}|-)\s+|:\s+|\s+\(/u', $title );
	$parts = array_values( array_filter( array_map( 'trim', $parts ) ) );
	if ( empty( $parts ) ) {
		return $title;
	}
	if ( ! preg_match( '/marble|granite|limestone|stone|quartz|basalt|alabaster|paving/i', $parts[0] ) ) {
		return end( $parts );
	}
	return $parts[0];
}

// AWB 2026-10-12: blog post H1 without the " | EMG" suffix (the SEO title keeps it)
add_filter( 'the_title', function ( $title, $post_id = 0 ) {
	if ( is_admin() || ! is_singular( 'post' ) || ! in_the_loop() || (int) $post_id !== (int) get_queried_object_id() ) {
		return $title;
	}
	return preg_replace( '/\s*\|\s*EMG\s*$/u', '', $title );
}, 10, 2 );

// AWB 2026-10-12: H1 on the blog index (/blog/)
add_action( 'astra_primary_content_top', function () {
	if ( is_home() ) {
		echo '<h1 class="emg-blog-title" style="text-align:center;margin:0 0 32px;">Natural Stone Blog</h1>';
	}
} );

/* AWB 2026-10-12: FAQPage schema for products, built from the same faqs_product field the page shows. */
function awb_emg_product_faq_schema( $data, $jsonld ) {
	if ( ! is_singular( 'emg-product' ) || ! function_exists( 'get_field' ) ) {
		return $data;
	}
	$faqs = get_field( 'faqs_product', get_queried_object_id() );
	if ( empty( $faqs ) ) {
		return $data;
	}
	$items = array();
	foreach ( (array) $faqs as $faq ) {
		$faq_id = is_object( $faq ) ? $faq->ID : (int) $faq;
		if ( 'publish' !== get_post_status( $faq_id ) ) {
			continue;
		}
		$q = trim( wp_strip_all_tags( get_the_title( $faq_id ) ) );
		$a = trim( wp_strip_all_tags( apply_filters( 'the_content', get_post_field( 'post_content', $faq_id ) ) ) );
		if ( $q && $a ) {
			$items[] = array(
				'@type'          => 'Question',
				'name'           => html_entity_decode( $q, ENT_QUOTES, 'UTF-8' ),
				'acceptedAnswer' => array( '@type' => 'Answer', 'text' => html_entity_decode( $a, ENT_QUOTES, 'UTF-8' ) ),
			);
		}
	}
	if ( $items ) {
		$data['awbProductFAQ'] = array(
			'@type'      => 'FAQPage',
			'@id'        => get_permalink( get_queried_object_id() ) . '#faq',
			'mainEntity' => $items,
		);
	}
	return $data;
}
add_filter( 'rank_math/json_ld', 'awb_emg_product_faq_schema', 99, 2 );
