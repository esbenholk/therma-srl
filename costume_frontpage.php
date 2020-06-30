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

    
        <?php
		while ( have_posts() ) :
		the_post();
        ?>
        <div id="service-area-link-modul">
         
            <h1 class="service-area-link-headline"> <?php the_field( 'headline_parapgraph' ); ?> </h1>
            <?php $button_url = get_field( 'button_url' ); ?>
            <?php if ( $button_url ) : ?>
                    <a class="alert-button" href="<?php echo esc_url( $button_url); ?>"> <?php the_field( 'button_text' ); ?></a>
            <?php endif; ?>
    
        </div>

        <?php
			// get_template_part( 'template-parts/content', 'page' );

			// // If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>
    

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
