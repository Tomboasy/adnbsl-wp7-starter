<?php
/**
 * Sécurité — uniquement des durcissements qui n’imitent pas le Core.
 *
 * L’escaping, la sanitization et les nonces restent la responsabilité
 * de chaque template / callback. Ce fichier n’invente pas une couche
 * parallèle à WordPress.
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;

/**
 * Message de connexion générique (évite d’indiquer si l’identifiant existe).
 *
 * @return string
 */
function adnbsl_generic_login_error(): string {
	return __( 'Identifiants incorrects.', 'adnbsl-wp7-starter' );
}
add_filter( 'login_errors', 'adnbsl_generic_login_error' );

/**
 * Ce thème n’enregistre aucun CPT ni taxonomie personnalisée.
 *
 * Si un projet client en a réellement besoin, la décision et le code
 * appartiennent à ce projet — jamais au starter générique.
 */
function adnbsl_assert_no_starter_cpt(): void {
	// Intentionnellement vide : documentation exécutable pour les agents.
}
add_action( 'init', 'adnbsl_assert_no_starter_cpt', 99 );
