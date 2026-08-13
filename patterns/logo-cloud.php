<?php
/**
 * Title: Logo cloud
 * Slug: adnbsl-wp7-starter/logo-cloud
 * Categories: adnbsl-social
 * Description: Rangée de logos partenaires. Remplacer les placeholders.
 * Viewport Width: 1400
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;

$placeholder = esc_url( get_template_directory_uri() . '/assets/images/placeholder.svg' );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|md","right":"var:preset|spacing|md"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--md)">
	<!-- wp:paragraph {"align":"center","fontSize":"sm","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color has-sm-font-size"><?php esc_html_e( 'Ils nous font confiance', 'adnbsl-wp7-starter' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:gallery {"columns":5,"linkTo":"none","sizeSlug":"medium","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|md"}}}} -->
	<figure class="wp-block-gallery alignwide has-nested-images columns-5 is-cropped">
		<?php for ( $i = 0; $i < 5; $i++ ) : ?>
		<!-- wp:image {"sizeSlug":"medium"} -->
		<figure class="wp-block-image size-medium"><img src="<?php echo $placeholder; ?>" alt=""/></figure>
		<!-- /wp:image -->
		<?php endfor; ?>
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
