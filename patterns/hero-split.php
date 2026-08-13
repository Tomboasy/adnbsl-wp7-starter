<?php
/**
 * Title: Hero split
 * Slug: adnbsl-wp7-starter/hero-split
 * Categories: adnbsl-hero, banner
 * Description: Introduction en deux colonnes, texte et média.
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
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"level":1,"fontSize":"3-xl"} -->
			<h1 class="wp-block-heading has-3-xl-font-size"><?php esc_html_e( 'Titre principal', 'adnbsl-wp7-starter' ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Texte d’introduction. Remplacer par le contenu du projet.', 'adnbsl-wp7-starter' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'En savoir plus', 'adnbsl-wp7-starter' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large","aspectRatio":"4/3","scale":"cover"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo $placeholder; ?>" alt="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
