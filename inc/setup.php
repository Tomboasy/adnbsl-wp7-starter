<?php
/**
 * Configuration du thème.
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;

/**
 * Supports, i18n et réglages de base.
 *
 * Un block theme WordPress 7 active déjà une grande partie des supports
 * (align-wide, responsive embeds, etc.). On n’ajoute que ce qui est utile.
 */
function adnbsl_setup(): void {
	load_theme_textdomain( 'adnbsl-wp7-starter', ADNBSL_THEME_DIR . '/languages' );

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );

	/*
	 * Compatibilité WooCommerce optionnelle.
	 * N’enregistre aucun template métier. Le plugin n’est pas requis.
	 */
	add_theme_support( 'woocommerce' );

	register_nav_menus(
		array(
			'primary' => __( 'Navigation principale', 'adnbsl-wp7-starter' ),
			'footer'  => __( 'Navigation pied de page', 'adnbsl-wp7-starter' ),
		)
	);
}
add_action( 'after_setup_theme', 'adnbsl_setup' );
