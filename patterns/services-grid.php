<?php
/**
 * Title: Grille de services
 * Slug: adnbsl-wp7-starter/services-grid
 * Categories: adnbsl-grid, adnbsl-content
 * Description: Composition visuelle générique. Aucun CPT. Contenu statique ou Query Loop plus tard.
 * Viewport Width: 1400
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|md","right":"var:preset|spacing|md"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"var:preset|color|surface"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--surface);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--md)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Services', 'adnbsl-wp7-starter' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|md"},"margin":{"top":"var:preset|spacing|xl"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--xl)">
		<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md","right":"var:preset|spacing|md"}},"color":{"background":"var:preset|color|background"},"border":{"radius":"var:preset|border-radius|md"}}} -->
		<div class="wp-block-column has-background" style="border-radius:var(--wp--preset--border-radius--md);background-color:var(--wp--preset--color--background);padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">
			<!-- wp:heading {"level":3,"fontSize":"lg"} -->
			<h3 class="wp-block-heading has-lg-font-size"><?php echo esc_html( sprintf( /* translators: %d: item number */ __( 'Service %d', 'adnbsl-wp7-starter' ), $i ) ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Description du service.', 'adnbsl-wp7-starter' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endfor; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
