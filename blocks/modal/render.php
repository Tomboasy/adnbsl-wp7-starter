<?php
/**
 * Frontend du bloc Modal.
 *
 * @package Adnbsl_Wp7_Starter
 *
 * @var array    $attributes Attributs.
 * @var string   $content    InnerBlocks.
 * @var WP_Block $block      Instance.
 */

defined( 'ABSPATH' ) || exit;

$label = isset( $attributes['triggerLabel'] ) && $attributes['triggerLabel']
	? $attributes['triggerLabel']
	: __( 'Ouvrir', 'adnbsl-wp7-starter' );

$uid = wp_unique_id( 'adnbsl-modal-' );

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'c-modal',
	)
);
?>
<div
	<?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	data-wp-interactive="adnbsl/modal"
	<?php echo wp_interactivity_data_wp_context( array( 'isOpen' => false ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
>
	<button
		type="button"
		class="c-modal__trigger wp-element-button"
		data-wp-on--click="actions.open"
		aria-haspopup="dialog"
		aria-controls="<?php echo esc_attr( $uid ); ?>"
	>
		<?php echo esc_html( $label ); ?>
	</button>

	<dialog
		id="<?php echo esc_attr( $uid ); ?>"
		class="c-modal__dialog"
		data-wp-init="callbacks.init"
		data-wp-watch="callbacks.syncOpen"
		data-wp-on--close="actions.onNativeClose"
		aria-labelledby="<?php echo esc_attr( $uid ); ?>-title"
	>
		<button
			type="button"
			class="c-modal__close"
			data-wp-on--click="actions.close"
		>
			<span class="u-visually-hidden"><?php esc_html_e( 'Fermer', 'adnbsl-wp7-starter' ); ?></span>
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="c-modal__content" id="<?php echo esc_attr( $uid ); ?>-title">
			<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- InnerBlocks déjà échappés par le Core. ?>
		</div>
	</dialog>
</div>
