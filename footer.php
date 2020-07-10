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

				<a href="/area-utenti" class="alert-button mobile-only">Area Utenti</a>
				<?php
					get_sidebar();
				?>
				<!-- <a id="download-menu-button-footer" > Download </a> -->

			
				
			</nav><!-- #site-navigation -->

		

			
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
