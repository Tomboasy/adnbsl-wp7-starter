<?php
/**
 * Enregistrement des custom blocks du thème.
 *
 * Politique : un custom block n’existe que s’il apporte une vraie valeur
 * (interaction, accessibilité, structure) qu’un Core Block ou un Pattern
 * ne peut pas fournir proprement.
 *
 * WordPress 7.0.4 fournit déjà core/accordion. Le dossier
 * blocks/accordion/ documente ce choix et n’enregistre pas de doublon.
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;

/**
 * Catégorie Gutenberg du starter.
 *
 * @param array[] $categories Catégories existantes.
 * @return array[]
 */
function adnbsl_block_categories( array $categories ): array {
	array_unshift(
		$categories,
		array(
			'slug'  => 'adnbsl',
			'title' => __( 'ADNB SL Starter', 'adnbsl-wp7-starter' ),
			'icon'  => null,
		)
	);

	return $categories;
}
add_filter( 'block_categories_all', 'adnbsl_block_categories' );

/**
 * Enregistre chaque dossier de /blocks contenant un block.json.
 */
function adnbsl_register_blocks(): void {
	$blocks_dir = ADNBSL_THEME_DIR . '/blocks';

	if ( ! is_dir( $blocks_dir ) ) {
		return;
	}

	$directories = glob( $blocks_dir . '/*', GLOB_ONLYDIR );

	if ( ! $directories ) {
		return;
	}

	foreach ( $directories as $directory ) {
		$block_json = $directory . '/block.json';

		if ( ! is_readable( $block_json ) ) {
			continue;
		}

		register_block_type( $directory );
	}
}
add_action( 'init', 'adnbsl_register_blocks' );
