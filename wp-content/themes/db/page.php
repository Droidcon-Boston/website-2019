<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="banner-section">
<?php if ( has_post_thumbnail() ) : ?>
<figure><img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></figure>
<?php endif; ?>
<div class="banner-text">
  <div class="container">
  <?php if(is_page(10)){ ?> 
  <h1>Call for papers</h1>
  <?php } ?>
  <?php if(is_page(12)) {?>
  <h1>Code of conduct </h1>
  <?php } ?>
  <?php if(is_page(93)) {?>
  <h1>Diversity at Droidcon Boston</h1>
  <?php } ?> 
</div>
  </div>
</div>

<?php //if(is_page(14)){?> 

<!-----------The-Modal--------------->
<?php //if (isset($_SESSION['success'])) 
//if(!isset($_SESSION['success'])){
//$_SESSION['success']='';
 ?>

 




<?php //} ?>





<?php //} ?>








		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		    the_content();	

			// Include the page content template.
			//get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
			//	comments_template();
			//endif;

		// End the loop.
		endwhile;
		?>
<!--<div class="form-section">
<div class="container">		
<p>Stay Informed with our Newsletter</p>
<?php //dynamic_sidebar('newsletter'); ?>
</div>
</div>-->		

<?php get_footer(); ?>
