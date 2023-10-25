<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SmartDesk_-_Recruitment_site
 */

?>

<footer id="colophon">

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<aside role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'smartdesk-by-futurelab' ); ?>">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside>
	<?php endif; ?>

	<div class="right-col">
		<?php if ( has_nav_menu( 'menu-2' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Footer Menu', 'smartdesk-by-futurelab' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_class'     => 'footer-menu',
						'depth'          => 1,
					)
				);
				?>
			</nav>
		<?php endif; ?>

			<div class="flex gap-[1em] mt-[2em] justify-end">
				<ul class="flex gap-[1em]">
					<li>Privacy Policy</li>
					<li>Terms and Conditions</li>
				</ul>

				<p class="copyright">&copy; Copyright 2023</p>
			</div>
	</div>



</footer><!-- #colophon -->
