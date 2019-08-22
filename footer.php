<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper call-2-action">
	<div class="container">
		<h3><span class="line">Call us at</span> <span class="line">+31 (0) 24 78 511 87</span> <span class="line">or write us an E-Mail</span> to <span class="line">info@gems-minerals.de</span></h3>
	</div>
</div>
<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
					
					<p>Content Copyright 2018 Gems & Minerals | </p><?php wp_nav_menu( array( 'theme_location' => 'GM-footer-menu', 'container_class' => 'footer-menu' ) ); ?>
						
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

