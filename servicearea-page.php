<?php /* Template Name: servicearea-page */ ?>


<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package THERMASRL
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
		?>
			<div id="">
                <?php 
                        $args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
                        $the_query = new WP_Query( $args ); 
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            get_template_part( 'template-parts/content.php', get_post_type() );
                        endwhile;
                ?>
            </div>


			<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
// get_footer();
