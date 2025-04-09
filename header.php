<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package baizonn
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="header-top">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link">
				<img src="<?php echo get_template_directory_uri(); ?>/Assets/images/Centre Logo 1.png" alt="Baizonn Learning Centre Logo" class="site-logo">
			</a>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			?>
		</nav>
	</header>




<div id="content" class="site-content">
