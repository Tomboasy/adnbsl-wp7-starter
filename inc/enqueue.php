<?php
/**
 * Chargement des assets frontend.
 *
 * Les assets des custom blocks sont déclarés dans leur block.json
 * et ne sont chargés que lorsque le bloc est rendu.
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;

/**
 * Styles et scripts du frontend.
 */
function adnbsl_enqueue_frontend(): void {
	$css_files = array(
		'adnbsl-base'       => 'assets/css/base.css',
		'adnbsl-utilities'  => 'assets/css/utilities.css',
		'adnbsl-animations' => 'assets/css/animations.css',
		'adnbsl-frontend'   => 'assets/css/frontend.css',
	);

	$previous = array();

	foreach ( $css_files as $handle => $relative_path ) {
		wp_enqueue_style(
			$handle,
			adnbsl_asset_uri( $relative_path ),
			$previous,
			adnbsl_asset_version( $relative_path )
		);

		wp_style_add_data( $handle, 'path', adnbsl_asset_path( $relative_path ) );
		$previous = array( $handle );
	}

	wp_enqueue_script(
		'adnbsl-navigation',
		adnbsl_asset_uri( 'assets/js/navigation.js' ),
		array(),
		adnbsl_asset_version( 'assets/js/navigation.js' ),
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);

	wp_enqueue_script(
		'adnbsl-animations',
		adnbsl_asset_uri( 'assets/js/animations.js' ),
		array(),
		adnbsl_asset_version( 'assets/js/animations.js' ),
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);

	wp_enqueue_script(
		'adnbsl-main',
		adnbsl_asset_uri( 'assets/js/main.js' ),
		array( 'adnbsl-navigation', 'adnbsl-animations' ),
		adnbsl_asset_version( 'assets/js/main.js' ),
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'adnbsl_enqueue_frontend' );
