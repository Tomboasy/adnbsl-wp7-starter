/**
 * Compléments de navigation.
 *
 * Le menu overlay mobile est géré par core/navigation (Interactivity API).
 * Ce script n’ajoute que le sticky header optionnel et un état .is-scrolled.
 */
(function () {
	'use strict';

	var header = document.querySelector('.site-header, header.wp-block-template-part, .wp-block-template-part[class*="header"]');

	if (!header) {
		return;
	}

	var last = 0;
	var ticking = false;

	function onScroll() {
		if (ticking) {
			return;
		}
		ticking = true;
		window.requestAnimationFrame(function () {
			var y = window.scrollY || 0;
			header.classList.toggle('is-scrolled', y > 8);
			last = y;
			ticking = false;
		});
	}

	window.addEventListener('scroll', onScroll, { passive: true });
	onScroll();
})();
