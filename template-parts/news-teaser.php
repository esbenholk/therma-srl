

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
	<header class="entry-header">
		<?php
		therma_posted_on();
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

	
			?>
		
	</header><!-- .entry-header -->

	<?php therma_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_excerpt(
		);


		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->