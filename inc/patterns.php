<?php
/**
 * Catégories de patterns.
 *
 * Les fichiers PHP de /patterns/ sont auto-découverts par WordPress.
 * Ce module n’enregistre que les catégories, pas de contenu métier.
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enregistre les catégories de patterns du starter.
 */
function adnbsl_register_pattern_categories(): void {
	$categories = array(
		'adnbsl-hero'    => __( 'Hero', 'adnbsl-wp7-starter' ),
		'adnbsl-content' => __( 'Contenu', 'adnbsl-wp7-starter' ),
		'adnbsl-grid'    => __( 'Grilles', 'adnbsl-wp7-starter' ),
		'adnbsl-social'  => __( 'Preuve sociale', 'adnbsl-wp7-starter' ),
		'adnbsl-cta'     => __( 'Appels à l’action', 'adnbsl-wp7-starter' ),
		'adnbsl-pages'   => __( 'Pages', 'adnbsl-wp7-starter' ),
	);

	foreach ( $categories as $slug => $label ) {
		register_block_pattern_category(
			$slug,
			array(
				'label' => $label,
			)
		);
	}
}
add_action( 'init', 'adnbsl_register_pattern_categories' );
