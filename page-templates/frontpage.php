<?php
/**
 * Template Name: frontpage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * 
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="hero-container">
	<!-- get the background image using the pages featured image-->
	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	 <div class="imageContainer" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size:cover; width: 100%;">
<!---------- Hero Image  ----------->			
			<?php // echo get_the_post_thumbnail( $post->ID); ?>
	</div> <!-- End Image Container -->
</div> <!-- End hero Container -->
<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
					
					<div class="container promise"> 
						<h1 class="website-title"><?php echo get_field('website_title');?></h1>
						<h2 class="what-we-do"><?php echo get_field('what_we_do');?></h2>
						<p class="description"><?php echo get_field('description');?></p>
					</div>
					<div class="container our-collection">
						<h2>Our Collection</h2>
						<div class="row">
							  <div class="col-sm-4 cat-box">
									<?php 
										$image1 = get_field('cat_image_1'); ?> 
									<a href="<?php echo the_field('cat_link_1');?>"><img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>"/></a>
									<h5><a href="<?php echo the_field('cat_link_1');?>"><?php echo the_field('cat_title_1');?></a></h5>	
								 </div>
							  <div class="col-sm-4 cat-box">
									<?php 
										$image2 = get_field('cat_image_2'); ?> 
									<a href="<?php echo the_field('cat_link_2');?>"><img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>"/></a>
									<h5><a href="<?php echo the_field('cat_link_2');?>"><?php echo get_field('cat_title_2');?></a></h5>	
								 </div>
							  <div class="col-sm-4 cat-box">
									<?php 
										$image3 = get_field('cat_image_3'); ?> 
									<a href="<?php echo the_field('cat_link_3');?>"><img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>"/></a>
									<h5><a href="<?php echo the_field('cat_link_3');?>"><?php echo get_field('cat_title_3');?></a></h5>	
								 </div>
									<div class="col-sm-4 cat-box">
									<?php 
										$image4 = get_field('cat_image_4'); ?> 
									<a href="<?php echo the_field('cat_link_4');?>"><img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>"/></a>
									<h5><a href="<?php echo the_field('cat_link_4');?>"><?php echo get_field('cat_title_4');?></a></h5>	
								 </div>
									<div class="col-sm-4 cat-box">
									<?php 
										$image5 = get_field('cat_image_5'); ?> 
										<a href="<?php echo the_field('cat_link_5');?>"><img src="<?php echo $image5['url']; ?>" alt="<?php echo $image5['alt']; ?>"/></a>
										<h5><a href="<?php echo the_field('cat_link_5');?>"><?php echo get_field('cat_title_5');?></a></h5>	
								 </div>
									<div class="col-sm-4 cat-box">
									<?php 
										$image6 = get_field('cat_image_6'); ?> 
										<a href="<?php echo the_field('cat_link_6');?>"><img src="<?php echo $image6['url']; ?>" alt="<?php echo $image6['alt']; ?>"/></a>
										<h5><a href="<?php echo the_field('cat_link_6');?>"><?php echo get_field('cat_title_6');?></a></h5>	
								 </div>
						</div>
					</div>


				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
