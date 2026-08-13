<?php
/**
 * Performance — uniquement des réglages compatibles avec le Core.
 *
 * Pas de dequeue agressif (jQuery, embeds, emojis) : ces hacks cassent
 * souvent des plugins (WooCommerce, formulaires, cache, SEO).
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;

/**
 * N’affiche pas Dashicons sur le frontend public.
 *
 * Dashicons reste chargé dans l’admin et pour les utilisateurs connectés
 * qui voient la barre d’admin.
 */
function adnbsl_dequeue_dashicons(): void {
	if ( is_admin() || is_user_logged_in() ) {
		return;
	}

	wp_dequeue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'adnbsl_dequeue_dashicons', 100 );

/**
 * Attribut fetchpriority=high sur l’image mise en avant de l’entrée principale.
 *
 * WordPress gère déjà le lazy-load natif. On n’ajoute que le hint LCP
 * lorsque c’est clairement l’image principale.
 *
 * @param array<string, string> $attr       Attributs img.
 * @param WP_Post               $attachment Attachment.
 * @param string|int[]          $size       Taille.
 * @return array<string, string>
 */
function adnbsl_featured_image_priority( array $attr, $attachment, $size ): array {
	unset( $attachment, $size );

	if ( is_admin() || ! is_singular() ) {
		return $attr;
	}

	if ( empty( $attr['class'] ) || ! str_contains( $attr['class'], 'wp-post-image' ) ) {
		return $attr;
	}

	$attr['fetchpriority'] = 'high';
	$attr['loading']       = 'eager';

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'adnbsl_featured_image_priority', 10, 3 );
