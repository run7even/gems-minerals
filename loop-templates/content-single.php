<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->
<div class="row">
	<div class="col-md-6">
	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	</div>
	<div class="col-md-6">
	<div class="entry-content">
		<?php the_content(); ?>
</div>
	</div>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

				
	</footer><!-- .entry-footer -->
	


</article><!-- #post-## -->
