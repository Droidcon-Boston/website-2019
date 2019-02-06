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
</div>
  </div>
</div>

<?php //if(is_page(14)){?> 

<!-----------The-Modal--------------->
<?php //if (isset($_SESSION['success'])) 
//if(!isset($_SESSION['success'])){
//$_SESSION['success']='';
 ?>

 
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        <div class="modal-body">
		<p><?php //echo $_SESSION['success']; ?></p>
		<h3>Already Have Questions?</h3>
        <p>We're happy to answers your queries, just fill out the form below and we'll be intouch. </p> 
		<?php echo do_shortcode( '[contact-form-7 id="23" title="Contact form 1"]' ); ?>
		</div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(window).load(function () {
        $('#myModal').modal('hide');
    });
</script>



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
