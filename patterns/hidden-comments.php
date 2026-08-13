<?php
/**
 * Title: Commentaires
 * Slug: adnbsl-wp7-starter/hidden-comments
 * Inserter: no
 *
 * @package Adnbsl_Wp7_Starter
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:comments -->
<div class="wp-block-comments">
	<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading"><?php esc_html_e( 'Commentaires', 'adnbsl-wp7-starter' ); ?></h3>
	<!-- /wp:heading -->
	<!-- wp:comments-title /-->
	<!-- wp:comment-template -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|md"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--md)">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|sm"}}} -->
			<div class="wp-block-group">
				<!-- wp:avatar {"size":40} /-->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}}} -->
				<div class="wp-block-group">
					<!-- wp:comment-author-name /-->
					<!-- wp:comment-date /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:comment-content /-->
			<!-- wp:comment-reply-link /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:comment-template -->
	<!-- wp:comments-pagination -->
		<!-- wp:comments-pagination-previous /-->
		<!-- wp:comments-pagination-numbers /-->
		<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->
	<!-- wp:post-comments-form /-->
</div>
<!-- /wp:comments -->
