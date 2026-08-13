( function () {
	'use strict';

	var el = wp.element.createElement;
	var Fragment = wp.element.Fragment;
	var registerBlockType = wp.blocks.registerBlockType;
	var useBlockProps = wp.blockEditor.useBlockProps;
	var InspectorControls = wp.blockEditor.InspectorControls;
	var PanelBody = wp.components.PanelBody;
	var TextControl = wp.components.TextControl;
	var NumberControl = wp.components.__experimentalNumberControl || wp.components.TextControl;
	var ToggleControl = wp.components.ToggleControl;
	var __ = wp.i18n.__;

	registerBlockType( 'adnbsl/stats', {
		edit: function ( props ) {
			var a = props.attributes;
			var blockProps = useBlockProps( { className: 'c-stat' } );

			return el(
				Fragment,
				null,
				el(
					InspectorControls,
					null,
					el(
						PanelBody,
						{ title: __( 'Indicateur', 'adnbsl-wp7-starter' ) },
						el( NumberControl, {
							label: __( 'Valeur', 'adnbsl-wp7-starter' ),
							value: a.value,
							onChange: function ( value ) {
								props.setAttributes( { value: parseFloat( value ) || 0 } );
							},
						} ),
						el( TextControl, {
							label: __( 'Préfixe', 'adnbsl-wp7-starter' ),
							value: a.prefix,
							onChange: function ( value ) {
								props.setAttributes( { prefix: value } );
							},
						} ),
						el( TextControl, {
							label: __( 'Suffixe', 'adnbsl-wp7-starter' ),
							value: a.suffix,
							onChange: function ( value ) {
								props.setAttributes( { suffix: value } );
							},
						} ),
						el( TextControl, {
							label: __( 'Libellé', 'adnbsl-wp7-starter' ),
							value: a.label,
							onChange: function ( value ) {
								props.setAttributes( { label: value } );
							},
						} ),
						el( ToggleControl, {
							label: __( 'Animer le compteur', 'adnbsl-wp7-starter' ),
							checked: a.animate,
							onChange: function ( value ) {
								props.setAttributes( { animate: value } );
							},
						} )
					)
				),
				el(
					'div',
					blockProps,
					el( 'p', { className: 'c-stat__value' }, ( a.prefix || '' ) + a.value + ( a.suffix || '' ) ),
					a.label ? el( 'p', { className: 'c-stat__label' }, a.label ) : null
				)
			);
		},
		save: function () {
			return null;
		},
	} );
}() );
