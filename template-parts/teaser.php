<?php
/** <?php the_field( 'post_summary' ); ?>
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package THERMASRL
 */

?>

<article class="teasers-container container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="teaser-item item">
    <img class="arrow left" src="https://www.thermasrl.com/wp-content/uploads/2020/08/left.svg" />
        
        <div class="news-box">
            <header class="news-entry-header">
                
                <?php
                therma_posted_on();
                if ( is_singular() ) :
                    the_title( '<h2 class="news-entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                else :
                    the_title( '<h2 class="news-entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;

                
                ?>
                  
             
            </header><!-- .entry-header -->
                    
            <?php the_excerpt('<p class="excerpt">', '</p>'); 
            ?>

            <a class="readmore" href="<?php the_permalink(); ?>">Leggi di più</a>
  

            <div class="news-entry-content">
                <?php
                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'therma' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div><!-- .entry-content -->

        </div>
        
        <img class="arrow right" src="https://www.thermasrl.com/wp-content/uploads/2020/08/right.svg" />

    </div>
</article><!-- #post-<?php the_ID(); ?> -->



