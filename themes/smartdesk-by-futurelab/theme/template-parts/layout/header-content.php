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
		<button class="menu-button md:hidden z-20 absolute right-0 p-4" aria-controls="primary-menu" aria-expanded="false">
			<svg height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
					viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
				<path fill="#231F20" d="M8.667,15h30c0.552,0,1-0.447,1-1s-0.448-1-1-1h-30c-0.552,0-1,0.447-1,1S8.114,15,8.667,15z"/>
				<path fill="#231F20" d="M8.667,37h30c0.552,0,1-0.447,1-1s-0.448-1-1-1h-30c-0.552,0-1,0.447-1,1S8.114,37,8.667,37z"/>
				<path fill="#231F20" d="M8.667,26h30c0.552,0,1-0.447,1-1s-0.448-1-1-1h-30c-0.552,0-1,0.447-1,1S8.114,26,8.667,26z"/>
			</svg>
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
