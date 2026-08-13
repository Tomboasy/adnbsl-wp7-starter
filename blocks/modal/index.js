( function () {
	'use strict';

	var el = wp.element.createElement;
	var Fragment = wp.element.Fragment;
	var registerBlockType = wp.blocks.registerBlockType;
	var useBlockProps = wp.blockEditor.useBlockProps;
	var InnerBlocks = wp.blockEditor.InnerBlocks;
	var InspectorControls = wp.blockEditor.InspectorControls;
	var PanelBody = wp.components.PanelBody;
	var TextControl = wp.components.TextControl;
	var __ = wp.i18n.__;

	registerBlockType( 'adnbsl/modal', {
		edit: function ( props ) {
			var triggerLabel = props.attributes.triggerLabel;
			var blockProps = useBlockProps( { className: 'c-modal-editor' } );

			return el(
				Fragment,
				null,
				el(
					InspectorControls,
					null,
					el(
						PanelBody,
						{ title: __( 'Déclencheur', 'adnbsl-wp7-starter' ) },
						el( TextControl, {
							label: __( 'Libellé du bouton', 'adnbsl-wp7-starter' ),
							value: triggerLabel,
							onChange: function ( value ) {
								props.setAttributes( { triggerLabel: value } );
							},
						} )
					)
				),
				el(
					'div',
					blockProps,
					el( 'p', { className: 'c-modal-editor__label' }, triggerLabel || __( 'Ouvrir', 'adnbsl-wp7-starter' ) ),
					el( InnerBlocks, {
						template: [
							[ 'core/heading', { level: 2, placeholder: __( 'Titre', 'adnbsl-wp7-starter' ) } ],
							[ 'core/paragraph', { placeholder: __( 'Contenu de la fenêtre.', 'adnbsl-wp7-starter' ) } ],
						],
						templateLock: false,
					} )
				)
			);
		},
		save: function () {
			return el( InnerBlocks.Content );
		},
	} );
}() );
