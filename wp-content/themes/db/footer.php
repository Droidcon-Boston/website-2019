<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<!--------------------------------form-section-------------------------------------------->
<div class="form-section footer">
  <div class="container">
<div class="form-content">
<p>Stay Informed with our Newsletter</p>
<?php echo do_shortcode( '[yikes-mailchimp form="1"]' );?>	
</div>
  </div>
</div>
<!-------------------------------form-section-ends----------------------------------------> 

<!--
<form class="form-content">
<p>Stay Informed with our Newsletter</p>
<div class="tnp tnp-subscription">

<form method="post" action="http://demotbs.com/dev/db/?na=s" onsubmit="return newsletter_check(this)">
<ul class="form-list">
<input type="hidden" name="nlang" value="">
<li><input class="form-control" type="email" name="ne" placeholder="Email" required ></li>
<li><input class="btn btn-primary" type="submit" value="SIGNUP">
</li>
	</ul>	
</form>
</div>
</form>
-->

	<!-------------------------------------footer-section------------------------------------------>
<footer id="footer">
  <div class="container">
  <?php dynamic_sidebar('link_icons'); ?>
  </div>
</footer><!---------------------------------footer-section-ends-----------------------------------------> 


<!----------------------------script-section--------------------------------------------------> 

<!-----------overlay---------------> 
<script>
$('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');  
   $('body').css("overflow-y", function(_,val){ 
           return val == "hidden" ? "scroll" : "hidden";
      });
  });
</script>

<!-----------Back-to-Top-button-----------------> 
<script> 
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
</script> 

<!-----------Modal-box---------------> 
<!--<script type="text/javascript">
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>-->
<script>$("ul.nav li.current-menu-item").addClass("active");
//$("li.menu-item-81 a").attr("data-toggle","modal" "data-target","#myModal");
$("li.menu-item-81 a").attr({
        "data-toggle" : "modal",
        "data-target" : "#myModal"
    });	
</script>

<script type="text/javascript">
$(document).ready(function() {
			$(window).scroll(function() {
				if ($(this).scrollTop() > 800) {
					$('#back-to-top').fadeIn(800);
				} else {
					$('#back-to-top').fadeOut(800);
				}
			});
			
			$('#back-to-top').click(function(event) {
				event.preventDefault();
				
				$('html, body').animate({scrollTop: 0}, 800);
			})
		});
		
		
		 $("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
</script> 
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        <div class="modal-body">
    <p><?php //echo $_SESSION['success']; ?></p>
    <h3>Already Have Questions?</h3>
        <p>We're happy to answers your queries, just fill out the form below and we'll be in touch. </p> 
    <?php echo do_shortcode( '[contact-form-7 id="23" title="Contact form 1"]' ); ?>
    </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(".open_model").on("click", function(){
  $('#myModal').modal('show');
});
</script>
<?php wp_footer(); ?>
</body>
</html>

