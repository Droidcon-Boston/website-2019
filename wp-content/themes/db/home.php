<?php

/* Template Name: Home */

get_header(); ?>

<!-----------------------------content-section--------------------------------------------->
<div class="content-section text-center">
  <div class="container">
  <?php if ( has_post_thumbnail() ) : ?>
  <figure><img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></figure>
  <?php endif; ?>
  <?php while ( have_posts() ) : the_post();
		the_content();	
		endwhile;?>
    
  </div>
</div>
<!-----------------------------content-section-ends---------------------------------------> 

<!-----------------------------tickets-section--------------------------------------------->
<div class="tickets text-center">
  <div class="container">
	  <h1><a href="#">Tickets</a></h1>
	<div class="list">
	<?php
$params = array('posts_per_page' => 2, 'post_type' => 'product', 'order' => 'ASC');
$wc_query = new WP_Query($params);
?>
<?php if ($wc_query->have_posts()) : ?>
<?php while ($wc_query->have_posts()) :
                $wc_query->the_post(); ?>
	<!---<div class="list">--->
      <ul class="early-bird">
        <li class="title"><h2><?php the_title(); ?></h2></li>
		<li class="price"><h3><?php echo $product->get_regular_price();?></h3></li>
        <li>
          <ul class="inner-list">
		  <?php the_content(); ?>
          </ul>
        </li>
        <li class="buy-now"><!--<a class="btn btn-primary" href="<?php //echo get_permalink( $wc_query->post->ID ) ?>">Buy</a>-->
		<a class="btn btn-primary" href="<?php echo esc_url( $product->get_product_url() ) ?>" target="_blank">Buy</a>
		</li>
      </ul>
    <!--</div>-->
	<?php endwhile; ?>

<?php endif; ?>
	  </div>	
  </div>
</div>
<!-----------------------------tickets-section-ends---------------------------------------> 

<!--------------------------------form-section-------------------------------------------->

<!-------------------------------form-section-ends----------------------------------------> 

<?php 
get_footer(); 
?>