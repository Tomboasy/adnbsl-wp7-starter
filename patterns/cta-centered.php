<?php
/**
 * Title: CTA centré
 * Slug: adnbsl-wp7-starter/cta-centered
 * Categories: adnbsl-cta, call-to-action
 * Description: Appel à l’action centré.
 * Viewport Width: 1400
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|md","right":"var:preset|spacing|md"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"var:preset|color|surface"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--surface);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--md)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Prêt à commencer ?', 'adnbsl-wp7-starter' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'Phrase d’appui. Remplacer selon le projet.', 'adnbsl-wp7-starter' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Nous contacter', 'adnbsl-wp7-starter' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
