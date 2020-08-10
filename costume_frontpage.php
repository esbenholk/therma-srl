<?php /* Template Name: costume_frontpage */ ?>


<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package THERMASRL
 * 
 */



// Echo out a sample image

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
            <div id="services-rotation">
                    <?php 
                        $args = array( 'post_type' => 'services', 'posts_per_page' => 10 );
                        $the_query = new WP_Query( $args ); 
                        $loop = new WP_Query( $args );
                        $post_idx = 0;
                        while ( $loop->have_posts() ) : $loop->the_post(); $count++;
                        $post_idx++;
                        ?>
                        <div id="service_<?php echo $post_idx ?>">
                        <?php
                            get_template_part( 'template-parts/service', get_post_type() );
                        ?>
                        </div>
                            <?php
                        endwhile;

        
                    ?>
                    
            </div>
            <div class="services-index-indicator buttons" ></div>

            <?php
                while ( have_posts() ) :
                the_post();
            ?>

            <div id="service-area-link-modul">
            
                <h1 class="service-title thin-headline button-title"> <?php the_field( 'headline_parapgraph' ); ?> </h1>
               
                <a class="alert-button" href="<?php echo esc_url( $button_url); ?>"> <?php the_field( 'button_text' ); ?></a>


            <?php
                endwhile; // End of the loop.
            ?>
            <p class="note mobile-only"> text that indicates the link leads to site best for desktop</p>

            </div>

        </div>

        <div id="icon-modul-container" class="modul">
            
            <div id="icon-modul">
                <div class="lines" style="padding-right:2px;">
                    <div class="line red"></div>
                    <div class="line purple"></div>
                    <div class="line blue"></div>
                </div>

                
                <img class="style-svg logo" src="https://www.thermasrl.com/wp-content/uploads/2020/08/logo.svg"/>
        
                <div class="lines">
                </div>
            
            </div>

            <div class="centering item">
                <h1 clasS="about-headline"><?php the_title(); ?></h1>
                <?php the_content('<p class="about>', '</p>'); ?>
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
        <div id="downloads" class="modul">

        <?php
            while ( have_posts() ) :    
            the_post(); 
            ?>
            <h1 class="download-headline">   <?php
            the_field( 'download_headline' );
            ?>
            </h1>



         <div id="download-row">
                <?php
                    $dowloads = the_field( 'download_file');
                    endwhile; // End of the loop.
            
                ?>
           </div>
        </div>





</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
?>
