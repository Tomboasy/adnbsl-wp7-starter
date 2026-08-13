<?php
/**
 * ADNB SL WP7 Starter — bootstrap.
 *
 * Charge uniquement les modules de /inc/. Ne pas transformer ce fichier
 * en monolithe : toute logique appartient à un module dédié.
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;

define( 'ADNBSL_THEME_VERSION', '1.0.0' );
define( 'ADNBSL_THEME_DIR', get_template_directory() );
define( 'ADNBSL_THEME_URI', get_template_directory_uri() );

require_once ADNBSL_THEME_DIR . '/inc/helpers.php';
require_once ADNBSL_THEME_DIR . '/inc/setup.php';
require_once ADNBSL_THEME_DIR . '/inc/enqueue.php';
require_once ADNBSL_THEME_DIR . '/inc/blocks.php';
require_once ADNBSL_THEME_DIR . '/inc/patterns.php';
require_once ADNBSL_THEME_DIR . '/inc/editor.php';
require_once ADNBSL_THEME_DIR . '/inc/performance.php';
require_once ADNBSL_THEME_DIR . '/inc/security.php';
