( function () {
	'use strict';

	var el = wp.element.createElement;
	var registerBlockType = wp.blocks.registerBlockType;
	var useBlockProps = wp.blockEditor.useBlockProps;
	var InnerBlocks = wp.blockEditor.InnerBlocks;
	var __ = wp.i18n.__;

	registerBlockType( 'adnbsl/slider', {
		edit: function () {
			var blockProps = useBlockProps( { className: 'c-slider-editor' } );

			return el(
				'div',
				blockProps,
				el( InnerBlocks, {
					allowedBlocks: [ 'core/group', 'core/cover', 'core/image', 'core/quote' ],
					template: [
						[ 'core/image', {} ],
						[ 'core/image', {} ],
					],
					orientation: 'horizontal',
				} )
			);
		},
		save: function () {
			return el( InnerBlocks.Content );
		},
	} );
}() );
