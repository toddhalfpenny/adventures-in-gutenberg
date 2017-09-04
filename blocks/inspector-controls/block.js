var el 								= wp.element.createElement,
		registerBlockType = wp.blocks.registerBlockType,
		inspectorControls = wp.blocks.InspectorControls,
		blockDescription 	= wp.blocks.BlockDescription,
		__                = wp.i18n.__;

registerBlockType( 'adventures-in-gutenberg/inspector-controls', {
	title:  __( 'AIG InspectorControls', 'adventures-in-gutenberg' ),

	icon: 'welcome-learn-more', // Our block icon, in the popup

	category: 'common',

	edit: function ( props ) {
		return [
			el(
				inspectorControls,
				{
					key: 'inspector'
				},
				el(
					blockDescription,
					null,
					el( 'p', null, __( 'Description of our lovely block.', 'adventures-in-gutenberg' ) )
				)
			),
			el(
				'p',
				null,
				'Adventures in Gutenberg'
			)
		];
	},

	save( props ) {
		return el(
			'p',
			null,
			'Adventures in Gutenberg'
		);
	},

} );