<?php
/** <?php the_field( 'post_summary' ); ?>
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package THERMASRL
 */

?>

<article class="red-news-container container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="red-news-item item">
    <img class="arrow left" src="../wp-content/themes/THERMA-theme/assets/left-white.svg" />
        
        <div class="text-box">
            <header class="entry-header">
                <?php
               therma_posted_on();
                if ( is_singular() ) :
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                else :
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;

                if ( 'post' === get_post_type() ) :
                    ?>
                    <div class="entry-meta">
                    </div><!-- .entry-meta -->
                <?php endif; ?>
            </header><!-- .entry-header -->
                    
            <?php therma_post_thumbnail();  ?>
            <?php the_excerpt(); ?>
       
        
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

        </div>
        
        <img class="arrow right" src="../wp-content/themes/THERMA-theme/assets/right-white.svg" />

    </div>
</article><!-- #post-<?php the_ID(); ?> -->



