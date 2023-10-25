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

toggleButton.addEventListener('click', function () {
	navElement.classList.toggle('visible');
});
