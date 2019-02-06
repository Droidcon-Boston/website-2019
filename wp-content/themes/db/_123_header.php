<?php
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
<title>Home Page</title>
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
<?php wp_head();?>
</head>
<body>

<!-----------The-Modal---------------> 
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        <div class="modal-body">
		<h3>Already Have Questions?</h3>
        <p>We're happy to answers your queries, just fill out the form below and we'll be intouch. </p> 
		<?php echo do_shortcode( '[contact-form-7 id="23" title="Contact form 1"]' ); ?>
		
     <!-- <form>
        <div class="form-group">
          <input type="text" class="form-control name" placeholder="Name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control email" placeholder="Email">
        </div>
        <div class="form-group">
          <textarea type="text" class="form-control msg" placeholder="Message" value rows="9"></textarea>
        </div>
        <div class="recaptcha"><img src="<?php //bloginfo('template_url')?>/images/recaptcha.jpg" alt=""></div>
        <div class="send-btn">
          <input type="button" class="btn btn-default" value="Send">
        </div>
      </form>--->
	  </div>
        </div>
    </div>
</div>
<!-----------Back-to-Top-button---------------> 
<a href="#" id="scroll"><span></span></a> 

<!-----------------------------header---------------------------------------------------->
<header id="header" data-spy="affix" data-offset-top="100" class="affix-top">
<div class="container">
<div class="header-lft">
      <div class="logo">
	  <?php dynamic_sidebar('logo');?>
	  </div>
    </div>
    <div class="button_container" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
    <div class="overlay" id="overlay">
	<nav class="overlay-menu">
	<?php wp_nav_menu(array('menu'=>'header_menu','menu_class'=>'')); ?>
	</nav>
      <!--<nav class="overlay-menu">
        <ul>
          <li><a href="speak.html">Speak</a></li>
          <li><a href="code.html">Code of conduct</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>--->
    </div>
	</div>
</header>
<div class="clearfix"></div>
	
