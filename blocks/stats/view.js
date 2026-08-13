import { store, getContext, getElement } from '@wordpress/interactivity';

store( 'adnbsl/stats', {
	callbacks: {
		init() {
			const context = getContext();
			const el = getElement().ref;

			if ( ! context.animate || ! el ) {
				context.display = context.value;
				return;
			}

			if ( window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches ) {
				context.display = context.value;
				return;
			}

			const observer = new IntersectionObserver(
				function ( entries ) {
					entries.forEach( function ( entry ) {
						if ( ! entry.isIntersecting ) {
							return;
						}
						observer.disconnect();
						const start = performance.now();
						const duration = 800;
						const target = Number( context.value ) || 0;

						function tick( now ) {
							const progress = Math.min( 1, ( now - start ) / duration );
							context.display = Math.round( target * progress );
							if ( progress < 1 ) {
								requestAnimationFrame( tick );
							}
						}

						requestAnimationFrame( tick );
					} );
				},
				{ threshold: 0.4 }
			);

			observer.observe( el );
		},
	},
} );
