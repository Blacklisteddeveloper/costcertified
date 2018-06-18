<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package costcertified
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/assets/image/favicon.png">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<div class="logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php bloginfo('template_url'); ?>/assets/image/logo.png" title="" />
		</a>
	</div>
	<div class="nav-right">
		<div class="selectboox">
			<label>I‘M A : </label>
			<select>
				<option value="Subcontractors">Subcontractors</option>
				<option value="Contractors">Contractors</option>
				<option value="Customer">Customer</option>
			</select>
		</div>
		<nav>
			<?php wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) ); ?>
		</nav>
	</div>
</header>
<section class="content">