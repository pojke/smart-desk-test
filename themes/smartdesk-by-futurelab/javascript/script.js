/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

const navElement = document.querySelector('.menu-primary-container');
const toggleButton = document.querySelector('#site-navigation button');

function toggleNavVisibility() {
	navElement.classList.toggle('visible');
}

if (window.innerWidth <= 768) {
	toggleButton.addEventListener('click', toggleNavVisibility);
}

window.addEventListener('resize', function () {
	if (window.innerWidth <= 768) {
		toggleButton.addEventListener('click', toggleNavVisibility);
	} else {
		toggleButton.removeEventListener('click', toggleNavVisibility);
		navElement.classList.remove('visible');
	}
});
