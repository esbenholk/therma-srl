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

	<div id="news-modul">
			<div id="news-rotation">
				<div class="lines">
					<div class="line red"></div>
					<div class="line purple"></div>
					<div class="line blue"></div>
				</div>
			
				<?php 
                        $args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
                        $the_query = new WP_Query( $args ); 
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            get_template_part( 'template-parts/teaser', get_post_type() );
                        endwhile;
                    ?>
		</div>
		<div class="news-index-indicator buttons" ></div>
	</div>

	<div id="services-modul">
		<div id="services-rotation">
				<?php 
					$args = array( 'post_type' => 'services', 'posts_per_page' => 10 );
					$the_query = new WP_Query( $args ); 
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						get_template_part( 'template-parts/service', get_post_type() );
					endwhile;
				?>
		</div>
		<div class="services-index-indicator buttons" ></div>
	</div>

	
	

		
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
