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
	
	<div id="news-header">
		<div id="news-headline" class="page-modul"></div>
		<img class="news-background-cover" src="../wp-content/themes/THERMA-theme/assets/anistontarotpic.jpg" >
	</div>

	<div id="news-page" class="page-modul">
				<?php 
                        $args = array( 'post_type' => 'post', 'orderby' => 'date', 'posts_per_page' => 10 );
                        $the_query = new WP_Query( $args ); 
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
                            get_template_part( 'template-parts/news-teaser', get_post_type() );
                        endwhile;
                ?>
		</div>
	</div>

	
	
	

		
	</main><!-- #main -->

<?php

get_footer();
