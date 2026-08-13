<?php
/**
 * Helpers génériques du thème.
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;

/**
 * Retourne l’URI d’un fichier du thème.
 *
 * @param string $relative_path Chemin relatif depuis la racine du thème.
 * @return string
 */
function adnbsl_asset_uri( string $relative_path ): string {
	return ADNBSL_THEME_URI . '/' . ltrim( $relative_path, '/' );
}

/**
 * Retourne le chemin disque d’un fichier du thème.
 *
 * @param string $relative_path Chemin relatif depuis la racine du thème.
 * @return string
 */
function adnbsl_asset_path( string $relative_path ): string {
	return ADNBSL_THEME_DIR . '/' . ltrim( $relative_path, '/' );
}

/**
 * Version d’asset : version du thème, ou filemtime en local.
 *
 * @param string $relative_path Chemin relatif depuis la racine du thème.
 * @return string
 */
function adnbsl_asset_version( string $relative_path ): string {
	$path = adnbsl_asset_path( $relative_path );

	if ( 'local' === wp_get_environment_type() && is_readable( $path ) ) {
		return (string) filemtime( $path );
	}

	return ADNBSL_THEME_VERSION;
}

/**
 * Indique si un bloc personnalisé du thème est présent dans le contenu rendu.
 *
 * Utile pour des enqueues manuels. Préférer block.json (viewScriptModule)
 * qui charge déjà les assets uniquement lorsque le bloc est utilisé.
 *
 * @param string $block_name Nom du bloc (ex. adnbsl/modal).
 * @return bool
 */
function adnbsl_has_block( string $block_name ): bool {
	if ( is_singular() && has_block( $block_name ) ) {
		return true;
	}

	if ( function_exists( 'has_block' ) && has_block( $block_name ) ) {
		return true;
	}

	return false;
}
