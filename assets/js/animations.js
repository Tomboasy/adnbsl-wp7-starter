/**
 * Animations d’apparition via IntersectionObserver.
 *
 * Attributs :
 *   data-animate="fade-up|fade-in|scale|parallax"
 *   data-delay="150"     (ms)
 *   data-duration="400"  (ms)
 *   data-speed="0.15"    (parallax, 0–1)
 */
(function () {
	'use strict';

	var reduce = window.matchMedia('(prefers-reduced-motion: reduce)');

	if (reduce.matches) {
		document.querySelectorAll('[data-animate]').forEach(function (el) {
			el.classList.add('is-inview');
		});
		return;
	}

	function reveal(el) {
		var delay = parseInt(el.getAttribute('data-delay') || '0', 10);
		var duration = el.getAttribute('data-duration');

		if (delay) {
			el.style.setProperty('--animate-delay', delay + 'ms');
		}
		if (duration) {
			el.style.setProperty('--animate-duration', duration + 'ms');
		}

		el.classList.add('is-inview');
	}

	var observer = new IntersectionObserver(
		function (entries) {
			entries.forEach(function (entry) {
				if (!entry.isIntersecting) {
					return;
				}
				reveal(entry.target);
				observer.unobserve(entry.target);
			});
		},
		{ rootMargin: '0px 0px -10% 0px', threshold: 0.15 }
	);

	document.querySelectorAll('[data-animate]').forEach(function (el) {
		if (el.getAttribute('data-animate') === 'parallax') {
			return;
		}
		observer.observe(el);
	});

	var parallaxNodes = document.querySelectorAll('[data-animate="parallax"]');

	if (!parallaxNodes.length) {
		return;
	}

	var ticking = false;

	function updateParallax() {
		ticking = false;
		var viewport = window.innerHeight;

		parallaxNodes.forEach(function (el) {
			var speed = parseFloat(el.getAttribute('data-speed') || '0.15');
			var rect = el.getBoundingClientRect();
			var offset = (rect.top - viewport / 2) * speed;
			el.style.transform = 'translate3d(0,' + offset.toFixed(2) + 'px,0)';
		});
	}

	function onScroll() {
		if (ticking) {
			return;
		}
		ticking = true;
		window.requestAnimationFrame(updateParallax);
	}

	window.addEventListener('scroll', onScroll, { passive: true });
	updateParallax();
})();
