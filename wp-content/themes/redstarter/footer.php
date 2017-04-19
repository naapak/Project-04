<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>



			 <footer class="footerImage">
  	<section class="divider flex">
    <style>i:link {color: #FF0000}</style>
  		<div class="flex info">
        	<div class="contactInfo">
        				<h5 class="caps"> contact Info </h5>
        				<p><i class="material-icons" style="font-size:15px">&#xe0e1;</i><a href="">info@inhabitant.com</a></p>
        				<p ><i class="material-icons" style="font-size:15px;color:white;">call</i>778-456-7891</p>
        				<div class="flex icons" >
        					<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.plus.google.com"><i class="fa fa-google-plus" id="google"></i></a>
        				</div>
  		    </div>
  		    <div class="operatingHours">
    				<h5 class="caps">Business Hours</h5>
    				<p class="bold">Monday-Friday: <span class="lighter">9am to 5pm</span> </p>
    				<p class="bold">Saturday: <span class="lighter">10am to 2pm</span> </p>
    				<p class="bold">Sunday: <span class="lighter">closed</span> </p>
  			  </div>
  		</div>
  		<div class="footerlogoFull">
  			<img  src="<?php echo get_bloginfo('stylesheet_directory')?>/assets/images/logos/inhabitent-logo-text.svg">
  		</div>
  	</section>
  		<p class="textCenter copyright">COPYRIGHT &copy; 2016 INHABITENT</p>
  </footer>
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
