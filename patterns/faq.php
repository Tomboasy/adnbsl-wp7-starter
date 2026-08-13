<?php
/**
 * Title: FAQ
 * Slug: adnbsl-wp7-starter/faq
 * Categories: adnbsl-content
 * Description: FAQ basée sur core/accordion (WordPress 7). Aucun CPT.
 * Viewport Width: 800
 * Block Types: core/accordion
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|md","right":"var:preset|spacing|md"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--md)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Questions fréquentes', 'adnbsl-wp7-starter' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:accordion {"autoclose":true} -->
	<div role="group" class="wp-block-accordion">
		<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
		<!-- wp:accordion-item -->
		<div class="wp-block-accordion-item">
			<!-- wp:accordion-heading -->
			<h3 class="wp-block-accordion-heading has-icon has-icon-right"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php echo esc_html( sprintf( /* translators: %d: question number */ __( 'Question %d', 'adnbsl-wp7-starter' ), $i ) ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
			<!-- /wp:accordion-heading -->
			<!-- wp:accordion-panel -->
			<div role="region" class="wp-block-accordion-panel">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Réponse.', 'adnbsl-wp7-starter' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:accordion-panel -->
		</div>
		<!-- /wp:accordion-item -->
		<?php endfor; ?>
	</div>
	<!-- /wp:accordion -->
</div>
<!-- /wp:group -->
