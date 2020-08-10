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
		<a class="limited-link"  href="/">
		
		<img class="style-svg logo" src="https://www.thermasrl.com/wp-content/uploads/2020/08/logo.svg"/>
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
			<button id="download-menu-button" >Downloads</button>
			</ul>
		
			<ul>
				<a class="alert-button" href="http://gestionale.thermasrl.com/therma/login">Area Utenti</a>
			</ul>
		
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
