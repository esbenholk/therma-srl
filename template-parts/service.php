<article class="services-container container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="service-item item">
    <!-- <img class="arrow left bigger-space-arrow-left" src="https://www.thermasrl.com/wp-content/uploads/2020/08/left-white.svg" /> -->

        <div class="service-text-box text-box">
            <header class="entry-header">
                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="service-title ">', '</h1>' );
                else :
                    the_title( '<h2 class="service-title "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;

                if ( 'post' === get_post_type() ) :
                    ?>
                <?php endif; ?>
            </header><!-- .entry-header -->
                    
            <?php therma_post_thumbnail(); ?>
       
        
            <div class="entry-content">
                <?php
                	the_content(
                        sprintf(
                           
                            wp_kses_post( get_the_title() )
                        )
                    );
                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'therma' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div><!-- .entry-content -->

        </div>
        <!-- <img class="arrow right bigger-space-arrow-right" src="https://www.thermasrl.com/wp-content/uploads/2020/08/right-white.svg" /> -->

    </div>

</article><!-- #post-<?php the_ID(); ?> -->



