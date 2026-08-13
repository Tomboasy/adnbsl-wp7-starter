import { store, getElement } from '@wordpress/interactivity';

function slides( track ) {
	return track ? Array.from( track.children ) : [];
}

function go( track, direction ) {
	if ( ! track ) {
		return;
	}
	const items = slides( track );
	if ( ! items.length ) {
		return;
	}
	const width = track.clientWidth || 1;
	const current = Math.round( track.scrollLeft / width );
	const next = Math.min( items.length - 1, Math.max( 0, current + direction ) );
	items[ next ].scrollIntoView( { behavior: 'smooth', inline: 'start', block: 'nearest' } );
}

store( 'adnbsl/slider', {
	actions: {
		prev( event ) {
			const root = event.target.closest( '.c-slider' );
			go( root ? root.querySelector( '.c-slider__track' ) : null, -1 );
		},
		next( event ) {
			const root = event.target.closest( '.c-slider' );
			go( root ? root.querySelector( '.c-slider__track' ) : null, 1 );
		},
		onKey( event ) {
			if ( event.key === 'ArrowLeft' ) {
				event.preventDefault();
				go( event.currentTarget, -1 );
			}
			if ( event.key === 'ArrowRight' ) {
				event.preventDefault();
				go( event.currentTarget, 1 );
			}
		},
	},
	callbacks: {
		init() {
			const track = getElement().ref;
			if ( ! track ) {
				return;
			}
			slides( track ).forEach( function ( child ) {
				child.classList.add( 'c-slider__slide' );
			} );
		},
	},
} );
