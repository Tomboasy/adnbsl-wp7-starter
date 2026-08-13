<?php
/**
 * Title: Hero vidéo
 * Slug: adnbsl-wp7-starter/hero-video
 * Categories: adnbsl-hero, banner
 * Description: Couverture pleine hauteur prête à recevoir une vidéo de fond depuis l’éditeur.
 * Viewport Width: 1400
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:cover {"dimRatio":60,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":85,"minHeightUnit":"vh","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:85vh">
	<span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-60 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:paragraph {"align":"center","fontSize":"sm","textColor":"background"} -->
		<p class="has-text-align-center has-background-color has-text-color has-sm-font-size"><?php esc_html_e( 'Ajouter une vidéo de fond dans les réglages du bloc Cover.', 'adnbsl-wp7-starter' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"display","textColor":"background"} -->
		<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color has-display-font-size"><?php esc_html_e( 'Titre principal', 'adnbsl-wp7-starter' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"background","textColor":"foreground"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Lire', 'adnbsl-wp7-starter' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
</div>
<!-- /wp:cover -->
