<?php
/**
 * Frontend du bloc Slider.
 *
 * @package Adnbsl_Wp7_Starter
 *
 * @var string $content InnerBlocks.
 */

defined( 'ABSPATH' ) || exit;

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class'                => 'c-slider',
		'role'                 => 'region',
		'aria-roledescription' => 'carousel',
		'aria-label'           => __( 'Diaporama', 'adnbsl-wp7-starter' ),
	)
);
?>
<div
	<?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	data-wp-interactive="adnbsl/slider"
	<?php echo wp_interactivity_data_wp_context( array( 'index' => 0 ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
>
	<div class="c-slider__toolbar">
		<button type="button" class="c-slider__btn" data-wp-on--click="actions.prev">
			<?php esc_html_e( 'Précédent', 'adnbsl-wp7-starter' ); ?>
		</button>
		<button type="button" class="c-slider__btn" data-wp-on--click="actions.next">
			<?php esc_html_e( 'Suivant', 'adnbsl-wp7-starter' ); ?>
		</button>
	</div>
	<div
		class="c-slider__track"
		data-wp-init="callbacks.init"
		tabindex="0"
		data-wp-on--keydown="actions.onKey"
	>
		<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- InnerBlocks. ?>
	</div>
</div>
