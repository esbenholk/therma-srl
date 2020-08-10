<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package THERMASRL
 */

?>

<article class="page-modul-news" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header news-headline">
		<?php
		therma_posted_on( '<p class="left-align">', '</p>' );?>
		
		<p class="news-tag">NEWS:</p>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title left-align">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title left-align"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		
		?>
		

	</header><!-- .entry-header -->

	<?php therma_post_thumbnail(); ?>

	<div class="content left-align">
		<?php
		the_content(
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
