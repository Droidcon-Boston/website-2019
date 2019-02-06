<?php 
session_start();
//if(!isset($_SESSION['show'])){
//$_SESSION['show']='show';
//echo 'show';
//}	
//}else{
//echo 'hide';
//}

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php the_title(); ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
<link rel="shortcut icon" href="<?php bloginfo('template_url')?>/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_url')?>/images/favicon.png" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Rajdhani:400,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<script src="<?php bloginfo('template_url')?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/animate.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/style.css">
<script src='https://www.google.com/recaptcha/api.js'></script>	
<?php wp_head();?>
</head>
<body>

<!-----------The-Modal--------------->
<?php  
//if(!isset($_SESSION['success'])){
//$_SESSION['success']='';
?>

 
<!--<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        <div class="modal-body">
		<p><?php //echo $_SESSION['success']; ?></p>
		<h3>Already Have Questions?</h3>
        <p>We're happy to answers your queries, just fill out the form below and we'll be intouch. </p> 
		<?php //echo do_shortcode( '[contact-form-7 id="23" title="Contact form 1"]' ); ?>
		</div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(window).load(function () {
        $('#myModal').modal('hide');
    });
</script>-->

<?php //} ?>
<!-----------Back-to-Top-button---------------> 
<a href="#" id="scroll"><span></span></a> 

<!-----------------------------header---------------------------------------------------->
<header id="header" data-spy="affix" data-offset-top="100" class="affix-top">
<div class="container">

<div class="row">
<div class="col-sm-8">
<div class="header-lft">
      <div class="logo">
	  <?php dynamic_sidebar('logo');?>
	  </div>
	  <div class="desktop-menu">
	  <?php wp_nav_menu(array('menu'=>'header_menu','menu_class'=>'nav navbar-nav')); ?>
        <!--<ul class="nav navbar-nav">
          <li><a href="speak.html">Speak</a></li>
          <li><a href="code.html">Code of conduct</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>--->
      </div>
    </div>
</div>
<div class="col-sm-4">
<div class="header-ryt">
<!-- form class="form-content"> -->
<p>Stay Informed with our Newsletter</p>
<?php //dynamic_sidebar('newsletter'); ?>
<!-- <ul class="form-list"> -->

<?php echo do_shortcode( '[yikes-mailchimp form="1"]' );?>	
<!-- <ul class="form-list"> -->
<!--<div class="tnp tnp-subscription">
<form method="post" action="http://demotbs.com/dev/db/?na=s" onsubmit="return newsletter_check(this)">
<ul class="form-list">
<input type="hidden" name="nlang" value="">
<li><input class="form-control" type="email" name="ne" placeholder="Email" required ></li>
<li><input class="btn btn-primary" type="submit" value="SIGNUP">
</li>
	</ul>	
</form>
</div>-->	
	
<!--<ul class="form-list">
<li><input type="text" class="form-control" placeholder="Email"></li>
<li><input type="button" class="btn btn-primary" value="SignUp"></li>
</ul>-->
<!-- </form> -->
</div>
</div>
    <div class="button_container" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
    <div class="overlay" id="overlay">
      <nav class="overlay-menu">
	  <?php wp_nav_menu(array('menu'=>'header_menu','menu_class'=>'')); ?>
        <!--<ul>
          <li><a href="speak.html">Speak</a></li>
          <li><a href="code.html">Code of conduct</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>-->
      </nav>
    </div>
	</div>
<!--<div class="header-lft">
      <div class="logo">
	  < //dynamic_sidebar('logo');>
	  </div>
    </div>
    <div class="button_container" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
    <div class="overlay" id="overlay">
	<nav class="overlay-menu">
	< //wp_nav_menu(array('menu'=>'header_menu','menu_class'=>'')); >
	</nav>
      </div>--->
	</div>
</header>
<div class="clearfix"></div>

	
