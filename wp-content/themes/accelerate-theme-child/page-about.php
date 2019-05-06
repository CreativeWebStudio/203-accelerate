

<?php
/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0

 */
get_header(); ?>

<section class="about-page">

		<?php while ( have_posts() ) : the_post(); ?>
			<div class='home-page hero-content'>
				<h2><span>Accelerate</span> is a strategy and marketing agency <br>
				located in the heart of NYC. Our goal is to build <br>
				businesses by making our clients visible and <br>
				making their customers smile.</h2>
			</div>
		<?php endwhile; // end of the loop. ?>

</section><!-- .home-page -->


<!-- services (beneath hero image) -->


<section class="services">
	<div class="site-content">
		<h1>OUR SERVICES</h1>
		<h2>We take pride in our clients and the content we create for them.</h2>
		<h2>Here is a brief overview of our offered services.</h2>
		<div class='services-description'>
			<h2><?php the_content(); ?></h2>

				<ul class="about-services">
					<?php query_posts('posts_per_page=4&post_type=services'); ?>
		  				<?php while ( have_posts() ) : the_post();
		  						$service = get_field('service');
								$service_description = get_field('service_description');
								$image_1 = get_field('image_1');
								$image_1 = get_field("image_1");
								$size = "medium";?>

						<li class="individual-about-service clearfix">
						    <figure class="about-image">
						       <?php echo wp_get_attachment_image($image_1, $size); ?>
					    	</figure>
					    	<div class="about-description">
					    	  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					      	<?php the_content(); ?>
					    	</div>
							
							<div class="service-images">
							<?php if ($image_1) { ?>
							<img src="<?php echo $image_1; ?>" />
							<?php } ?>
							</div>
			</li>
	  					<?php endwhile; // end of loop. ?>
	  					<?php wp_reset_query(); ?>
				</ul>
<br>
<hr>

	<div class="site-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class='contact-button'>
					<h2>Interested in working with us?</h2>
						<a class="cbutton" href="<?php echo home_url('/contact-us/'); ?>">Contact Us</a>
				</div>
			<?php endwhile; // end of the loop. ?>
	</div>
</section>
		


<?php get_footer(); ?>


