<?php
/**
 * Title: Témoignages
 * Slug: adnbsl-wp7-starter/testimonials
 * Categories: adnbsl-social
 * Description: Deux citations. Aucun CPT.
 * Viewport Width: 1400
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|md","right":"var:preset|spacing|md"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--md)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Témoignages', 'adnbsl-wp7-starter' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|xl"},"blockGap":{"left":"var:preset|spacing|lg"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--xl)">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md","right":"var:preset|spacing|md"}},"border":{"width":"1px","color":"var:preset|color|border","radius":"var:preset|border-radius|md"}}} -->
		<div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:var(--wp--preset--border-radius--md);padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
			<!-- wp:quote -->
			<blockquote class="wp-block-quote">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Citation courte.', 'adnbsl-wp7-starter' ); ?></p>
				<!-- /wp:paragraph -->
				<cite><?php esc_html_e( 'Nom, rôle', 'adnbsl-wp7-starter' ); ?></cite>
			</blockquote>
			<!-- /wp:quote -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md","right":"var:preset|spacing|md"}},"border":{"width":"1px","color":"var:preset|color|border","radius":"var:preset|border-radius|md"}}} -->
		<div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--border);border-width:1px;border-radius:var(--wp--preset--border-radius--md);padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
			<!-- wp:quote -->
			<blockquote class="wp-block-quote">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Citation courte.', 'adnbsl-wp7-starter' ); ?></p>
				<!-- /wp:paragraph -->
				<cite><?php esc_html_e( 'Nom, rôle', 'adnbsl-wp7-starter' ); ?></cite>
			</blockquote>
			<!-- /wp:quote -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
