<?php
/**
 * Alignement éditeur ≈ frontend.
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;

/**
 * Charge les mêmes feuilles que le frontend dans le canvas Gutenberg.
 */
function adnbsl_editor_styles(): void {
	add_editor_style(
		array(
			'assets/css/base.css',
			'assets/css/utilities.css',
			'assets/css/animations.css',
			'assets/css/frontend.css',
			'assets/css/editor.css',
		)
	);
}
add_action( 'after_setup_theme', 'adnbsl_editor_styles' );

/**
 * Désactive les patterns distants du répertoire WordPress.org.
 *
 * Évite d’importer des compositions hors design system.
 *
 * @return bool
 */
function adnbsl_disable_remote_patterns(): bool {
	return false;
}
add_filter( 'should_load_remote_block_patterns', 'adnbsl_disable_remote_patterns' );

/**
 * Retire les patterns Core de l’inséreur.
 *
 * Les Core Blocks restent disponibles. Seuls les patterns du thème
 * (et ceux ajoutés par un projet client) doivent apparaître.
 */
function adnbsl_unregister_core_patterns(): void {
	if ( ! class_exists( 'WP_Block_Patterns_Registry' ) ) {
		return;
	}

	$registry = WP_Block_Patterns_Registry::get_instance();

	foreach ( $registry->get_all_registered() as $pattern ) {
		$name = $pattern['name'] ?? '';

		if ( $name && str_starts_with( $name, 'core/' ) ) {
			unregister_block_pattern( $name );
		}
	}
}
add_action( 'init', 'adnbsl_unregister_core_patterns', 20 );
