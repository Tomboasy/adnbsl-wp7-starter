<?php
/**
 * Title: Statistiques
 * Slug: adnbsl-wp7-starter/statistics
 * Categories: adnbsl-content, adnbsl-social
 * Description: Quatre indicateurs. Peut être remplacé par le bloc Stats.
 * Viewport Width: 1400
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|md","right":"var:preset|spacing|md"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--md)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<?php
		$items = array( '01', '02', '03', '04' );
		foreach ( $items as $item ) :
			?>
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"3-xl","textAlign":"center"} -->
			<h3 class="wp-block-heading has-text-align-center has-3-xl-font-size"><?php echo esc_html( $item ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"sm"} -->
			<p class="has-text-align-center has-muted-color has-text-color has-sm-font-size"><?php esc_html_e( 'Indicateur', 'adnbsl-wp7-starter' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
