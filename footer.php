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
									<li><a href="<?php echo home_url(); ?>/about-us/introduction/">About us</a></li>
										<li><a href="<?php echo home_url(); ?>/about-us/our-investment-strategy/">Our investment strategy</a></li>
										<li><a href="<?php echo home_url(); ?>/our-business/real-estate-risk-strategies/">Risk strategies</a></li>
										<li><a href="<?php echo home_url(); ?>/about-us/contact-us/">Contact Us</a></li>
										<li><a href="#">Employees Login</a></li>
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
										<li>Phone : <span><a href="tel:+12345018607">+966 11 419 4499</a></span></li>
										<li>Email : <span><a href="mailto:info@intenax.net">info@awjholding.com</a></span></li>
										<li><a href="mailto:info@intenax.net">careers@awjholding.com</a></li>
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
		<!-- Footer Bottom Image -->
	</footer>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="flaticon-cancel-1"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="index.html">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            
            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Business</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">SEO</a></li>
            </ul>
        
        </div>
        
    </div>
</div>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.scrollTo.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/appear.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/owl.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/wow.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/paroller.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

<!-- Jquery JS Link -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-3.5.1.min.js"></script>

<!-- Bootstrap JS Link -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/popper.min.js"></script>

<!-- Font Awesome JS Link -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/font-awesome.min.js"></script>

<!-- Swiper Slider JS Link -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/swiper-bundle.min.js"></script>

<!-- Wow Animation JS Link -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/wow.min.js"></script>

<!-- Fancybox JS Link -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.fancybox.min.js"></script>

<!-- Counter JS Link -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/custom-scroll-count.js"></script>

<!-- Mixitup js Link -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.mixitup.min.js"></script>

<!-- Custom JS Link -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/custom.js"></script>

</body>
</html>