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

	<main id="primary" class="site-main news-article">
		<?php
		while ( have_posts() ) :
			the_post();
			the_post_navigation(
				array(
					'next_text' => '
					<img class="arrow left" src="https://www.thermasrl.com/wp-content/uploads/2020/08/left.svg" />
					',
					'prev_text' => '
					<img class="arrow right" src="https://www.thermasrl.com/wp-content/uploads/2020/08/right.svg" />
				'					
				)
			);

			get_template_part( 'template-parts/content', get_post_type() );

			



		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
