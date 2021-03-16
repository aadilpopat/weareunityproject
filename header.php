<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

<nav id="site-navigation" class="primary-navigation navbar" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
	
	
	<div class="hamburger-menu">
		<div class="line line-1"></div>
		<div class="line line-2"></div>
		<div class="line line-3"></div>
	</div>
	<p class="hamburger-menu-text">MENU</p>	

	<?php
	wp_nav_menu(
		array(
			'theme_location'  => 'primary',
			'menu_class'      => 'menu-wrapper',
			'items_wrap'      => '<ul id="primary-menu-list" class="%2$s nav-list">%3$s </ul>',
			'fallback_cb'     => false,
		)
	);
	?>
		</nav><!-- #site-navigation -->


<div class="site-branding">
	<img class="site-logo" src="http://localhost/unity-task/wp-content/uploads/logo-placeholder-png.png">
</div>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
