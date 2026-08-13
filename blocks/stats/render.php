<?php
/**
 * Frontend du bloc Stats.
 *
 * @package Adnbsl_Wp7_Starter
 *
 * @var array $attributes Attributs.
 */

defined( 'ABSPATH' ) || exit;

$value   = isset( $attributes['value'] ) ? (float) $attributes['value'] : 0;
$prefix  = isset( $attributes['prefix'] ) ? $attributes['prefix'] : '';
$suffix  = isset( $attributes['suffix'] ) ? $attributes['suffix'] : '';
$label   = isset( $attributes['label'] ) ? $attributes['label'] : '';
$animate = ! empty( $attributes['animate'] );

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => 'c-stat',
	)
);
?>
<div
	<?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	data-wp-interactive="adnbsl/stats"
	data-wp-init="callbacks.init"
	<?php
	echo wp_interactivity_data_wp_context( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		array(
			'value'   => $value,
			'display' => $animate ? 0 : $value,
			'prefix'  => $prefix,
			'suffix'  => $suffix,
			'animate' => $animate,
		)
	);
	?>
>
	<p class="c-stat__value">
		<span><?php echo esc_html( $prefix ); ?></span><span data-wp-text="context.display"><?php echo esc_html( $animate ? '0' : (string) $value ); ?></span><span><?php echo esc_html( $suffix ); ?></span>
	</p>
	<?php if ( $label ) : ?>
		<p class="c-stat__label"><?php echo esc_html( $label ); ?></p>
	<?php endif; ?>
</div>
