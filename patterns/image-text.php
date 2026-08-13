<?php
/**
 * Title: Image + texte
 * Slug: adnbsl-wp7-starter/image-text
 * Categories: adnbsl-content
 * Description: Deux colonnes, image à gauche, texte à droite.
 * Viewport Width: 1400
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;

$placeholder = esc_url( get_template_directory_uri() . '/assets/images/placeholder.svg' );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|section","bottom":"var:preset|spacing|section","left":"var:preset|spacing|md","right":"var:preset|spacing|md"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--section);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--section);padding-left:var(--wp--preset--spacing--md)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|xl"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large","aspectRatio":"4/3","scale":"cover"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo $placeholder; ?>" alt="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Titre de section', 'adnbsl-wp7-starter' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Paragraphe. Adapter au contenu du projet.', 'adnbsl-wp7-starter' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
