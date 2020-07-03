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
		<div class="site-info">
		<nav id="footer-navigation" class="footer-navigation">
		
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			?>
			<ul id="download-menu-button-footer" > Download </ul>

			<ul>
				<a href="/area-utenti" class="alert-button">Area Utenti</a>
			</ul>
		</nav><!-- #site-navigation -->

		<?php
                while ( have_posts() ) :
                the_post();
            ?>
			<p class="logo-text text-box"> <?php the_field( 'headline_parapgraph' ); ?> </p>

        
            <?php
                endwhile; // End of the loop.
            ?>

			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
