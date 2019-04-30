<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
* @package WordPress
 * @subpackage Accelerate_Theme_Child
 * @since Accelerate Theme
 */
get_header(); ?>

<section class="404-page">
  <div class="site-content">
    <div class="content-wrapper clearfix">
      <?php if ($image_1) { ?>
				<img src="<?php echo $image_1; ?>" />
			<?php } ?>

      <div class="404-image">
      Oh noooo!</div>
      <div class="404-title">
        <h2>Whoops!</h2>
        <p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
        <p>Feel free to take a look around our <span><a href="">blog</a></span> or some of our <span><a href="">featured work.</a></span></p>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>