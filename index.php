<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package THERMASRL
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div id="news-rotation">
			<div class="lines">
				<div class="line red"></div>
				<div class="line purple"></div>
				<div class="line blue"></div>
			</div>
		
		<?php query_posts('posts_per_page=5'); ?>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
					<?php
				endif;
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					?>
		
						<?php get_template_part( 'template-parts/teaser', get_post_type() ); ?>
				
				<?php
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				

			endwhile;
			

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div>
	<div id="circle-buttons">
		<!-- <button id="dot0" type="button" class="circlebutton on" name="picpress"></button>
		<button id="dot1" type="button" class="circlebutton" name="picpress"></button>
		<button id="dot2" type="button" class="circlebutton" name="picpress"></button> -->
	</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
