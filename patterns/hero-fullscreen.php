<?php
/**
 * Title: Hero plein écran
 * Slug: adnbsl-wp7-starter/hero-fullscreen
 * Categories: adnbsl-hero, banner
 * Description: Couverture pleine hauteur avec titre et bouton.
 * Viewport Width: 1400
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;

$placeholder = esc_url( get_template_directory_uri() . '/assets/images/placeholder.svg' );
?>
<!-- wp:cover {"url":"<?php echo $placeholder; ?>","dimRatio":50,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":85,"minHeightUnit":"vh","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:85vh">
	<span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo $placeholder; ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"display","textColor":"background"} -->
		<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color has-display-font-size"><?php esc_html_e( 'Titre principal', 'adnbsl-wp7-starter' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","textColor":"background"} -->
		<p class="has-text-align-center has-background-color has-text-color"><?php esc_html_e( 'Accroche courte.', 'adnbsl-wp7-starter' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"background","textColor":"foreground"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Découvrir', 'adnbsl-wp7-starter' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
</div>
<!-- /wp:cover -->
