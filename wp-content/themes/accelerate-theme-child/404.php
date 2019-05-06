<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
* @package WordPress
 * @subpackage Accelerate_Theme_Child
 * @since Accelerate Theme
 */
get_header(); ?>

  <section id="error-page" class="content-404">
    <div class="site-content">
      <!-- <div class="main-content"> -->
        
        <header class="page-header">
          <h1 class="page-title"><?php _e( '<em>Whoops</em> ... Nothing Found Here', 'twentythirteen' ); ?></h1>

 
 <?php echo $image;
'<img src="404-image.png"/>';
?>

        </header>

      <!-- </div> main content -->
      
    </div>
  </section>
    
  <section>
    
    <div class="site-content">
      <!-- <div class="main-content"> -->
        <div class="page-wrapper">
          <div class="page-content">
            <h2><?php _e( 'We have been looking everywhere in the map, but could not find the page you requested. We promise to do better next time.', 'twentythirteen' ); ?></h2>
            <h3><?php _e( 'Please check out our <a href="http://localhost:8888/accelerate/blog/">blog</a> or some of our <a href="http://localhost:8888/accelerate/case-studies/">featured work</a>.', 'twentythirteen' ); ?></h3>
           
            
            <p>Or feel free to email us at <a href="mailto:someone@example.com" title="Email Us" >someone@example.com</a>, so we can help you find the information you were looking for.</p>
          </div><!-- .page-content -->
        </div><!-- .page-wrapper -->
      <!-- </div> main content -->
    </div>
    
  </section>  
        <div class="clearfix"></div>
 
<?php get_footer(); ?>