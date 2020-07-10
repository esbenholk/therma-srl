<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package THERMASRL
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header id="masthead" class="site-header">
		<a href="/">
			<img class="logo" src="../wp-content/themes/THERMA-theme/assets/logo.svg" />
		</a>


		<nav id="site-navigation" class="main-navigation row">
		
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			?>
			<ul>
			<button id="download-menu-button" >Download</button>
			</ul>
		
			<ul>
				<a class="alert-button" href="/area-utenti">Area Utenti</a>
			</ul>
		
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
