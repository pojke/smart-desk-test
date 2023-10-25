<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SmartDesk_-_Recruitment_site
 */

?>

<header id="masthead" class="">
	<div class="custom-logo">
		<?php if (function_exists('the_custom_logo')) {
			the_custom_logo();
		}	
		?>
	</div>

	<nav id="site-navigation" class="text-[#4839D7] flex justify-between" aria-label="<?php esc_attr_e( 'Main Navigation', 'smartdesk-by-futurelab' ); ?>">
		<button class="md:hidden z-20 absolute right-0 p-4" aria-controls="primary-menu" aria-expanded="false">
			menu
		</button>

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->

	<button class="head-cta">Get Started</button>

</header><!-- #masthead -->
