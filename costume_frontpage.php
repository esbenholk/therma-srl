<?php /* Template Name: costume_frontpage */ ?>


<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package THERMASRL
 */

get_header();
?>

<main id="primary" class="site-main">

		<div id="news-modul" class="modul">
			<div id="news-rotation" class="rotator">
				<div class="lines justify-center">
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

        <div id="services-modul" class="modul">
            <div id="services-rotation" class="rotator">
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

            <?php
                while ( have_posts() ) :
                the_post();
            ?>

            <div id="service-area-link-modul">
            
                <h1 class="service-area-link-headline"> <?php the_field( 'headline_parapgraph' ); ?> </h1>
               
                <a class="alert-button" href="<?php echo esc_url( $button_url); ?>"> <?php the_field( 'button_text' ); ?></a>


            <?php
                endwhile; // End of the loop.
            ?>

            </div>

        </div>

        <div id="icon-modul">
                 <div class="lines">
					<div class="line red"></div>
					<div class="line purple"></div>
					<div class="line blue"></div>
                </div>
            <div>
            <img class="logo" src="../wp-content/themes/THERMA-theme/assets/logo.svg" />

            <p class="logo-text text-box"> <?php the_field( 'headline_parapgraph' ); ?> </p>
            </div>
            <div class="lines">
            </div>
          
        </div>

        <div id="red-news-modul" class="modul">
            <div id="red-news-rotation">
                <?php 
                        $args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
                        $the_query = new WP_Query( $args ); 
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            get_template_part( 'template-parts/red-teaser', get_post_type() );
                        endwhile;
                ?>
            </div>
            
            <div class="red-news-index-indicator buttons" ></div>
            
        </div>

        <div id="download-modul" class="modul">
            <?php
                while ( have_posts() ) :
                the_post();
            ?>
            <?php $dowloads = the_field( 'download_file' ); ?>
                      
            <?php
            
            endwhile; // End of the loop.
		?>

        </div>





</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
