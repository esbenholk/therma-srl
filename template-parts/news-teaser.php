

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package THERMASRL
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php 
		therma_posted_on();
                if ( is_singular() ) :
                    the_title( '<h2 class="entry-title left-align red-news-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                else :
                    the_title( '<h2 class="entry-title left-align red-news-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;
				?>
              
            
            <?php the_excerpt('<div class="excerpt"><p>', '</p></div>'); ?>
       
        
            <div class="entry-content">
                <?php
                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'therma' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->