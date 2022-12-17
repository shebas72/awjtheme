<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

	<!-- Main Footer -->
	<footer class="main-footer">
    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
						
                        	<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
									<ul class="social-links">
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
									</ul>
									<div class="copyright"><span>AWJ Holding Company</span> <br> &copy; All rights reserved.</div>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h2>Links</h2>
									<ul class="footer-list">
										<li><a href="#">About us</a></li>
										<li><a href="#"> Our investment strategy</a></li>
										<li><a href="#">Risk strategies</a></li>
										<li><a href="#">Contact Us</a></li>
										<li><a style="color:#e9c37a" href="#">Employees Login</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							
                        	<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<h2>Contact</h2>
									<ul class="contact-list">
										<li>Phone: <a href="tel:+12345018607">+966 11 419 4499</a></li>
										<li>Email: <span><a href="mailto:info@awjholding.com">info@awjholding.com</a></li>
										<li><a href="mailto:careers@awjholding.com">careers@awjholding.com</a></li>
									</ul>
								</div>
							</div>


                        	<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<h2>VISIT</h2>
									<ul class="contact-list">
										<li>7586 King Fahd Branch Road</li>
										<li>–ArRahmaniyah Unit No.</li>
										<li>6743 ArRiyadh 12341 -4119</li>
									</ul>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<!--End pagewrapper-->
<script>
const checkbox = document.getElementById('toggle-checkbox');

checkbox.addEventListener('change', ()=>{
  document.body.classList.toggle('dark');

})
</script>



<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

<!--Revolution Slider-->
<script src="<?php bloginfo('template_url'); ?>/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main-slider-script.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.scrollTo.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/appear.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/owl.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/wow.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/paroller.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/inc-dec.js"></script>

<!-- <script src="<?php bloginfo('template_url'); ?>/js-2/jquery-3.6.0.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/jquery-migrate-3.0.0.min.js"></script> -->
    <script src="<?php bloginfo('template_url'); ?>/js-2/modernizr-2.6.2.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/imagesloaded.pkgd.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/jquery.isotope.v3.0.2.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/pace.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/popper.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/scrollIt.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/jquery.waypoints.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/jquery.stellar.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/jquery.magnific-popup.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/YouTubePopUp.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/select2.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/datepicker.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/smooth-scroll.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/custom.js"></script>

</body>
</html>