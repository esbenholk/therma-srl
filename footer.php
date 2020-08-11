<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package THERMASRL
 */

?>

	<footer id="footer-modul" class="site-footer modul">
	
			<nav id="footer-navigation" class="footer-navigation">
				<a href="http://gestionale.thermasrl.com/therma/login" class="footer-alert-button mobile-only">Accedi all’ Area utenti</a>
				<a id="download-menu-button-footer" class="mobile-only" > Downloads </a>
				<?php
					get_sidebar("",'');
				?>
			</nav><!-- #site-navigation -->

			<img class="arrow to-top" id="to-top" src="https://www.thermasrl.com/wp-content/uploads/2020/08/left-white.svg" />

		
		
			
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
