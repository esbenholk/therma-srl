<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package THERMASRL
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle"></span> <span class="nav-title">
					<img class="arrow left" src="../wp-content/themes/THERMA-theme/assets/left.svg" />
					</span>',
					'next_text' => '<span class="nav-subtitle"></span> <span class="nav-title">
					<img class="arrow left" src="../wp-content/themes/THERMA-theme/assets/right.svg" />

					</span>',
				)
			);



		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
