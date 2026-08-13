import { store, getContext, getElement } from '@wordpress/interactivity';

store( 'adnbsl/modal', {
	actions: {
		open() {
			getContext().isOpen = true;
		},
		close() {
			getContext().isOpen = false;
		},
		onNativeClose() {
			getContext().isOpen = false;
		},
	},
	callbacks: {
		init() {
			const dialog = getElement().ref;
			if ( dialog && typeof dialog.close === 'function' && dialog.open ) {
				dialog.close();
			}
		},
		syncOpen() {
			const dialog = getElement().ref;
			const { isOpen } = getContext();

			if ( ! dialog || typeof dialog.showModal !== 'function' ) {
				return;
			}

			if ( isOpen && ! dialog.open ) {
				dialog.showModal();
			} else if ( ! isOpen && dialog.open ) {
				dialog.close();
			}
		},
	},
} );
