<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>AWJ <?php wp_title( '|', true, 'left' ); ?></title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- Stylesheets -->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon">


<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Bootstrap CSS Link -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">

<!-- Swiper Slider CSS Link -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/swiper-bundle.min.css" />

<!-- Wow Animation CSS Link -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/animate.min.css">

<!-- Fancybox CSS Link -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/jquery.fancybox.min.css">

<!-- Main Style CSS Link -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">

<!-- Responsive -->

<!-- Plugins -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css-3/plugins.css" />

<!-- Core Style Css -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css-3/style.css" />
<?php wp_head(); ?>
</head>

<body>

<div class="page-wrapper">
 	
  
 	
    <!-- Main Header-->
    <header class="main-header">
	
           
				<!-- Top Left -->
               
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="outer-container">
            	<div class="clearfix">
                	<div class="pull-left logo-box">
                    	<div class="logo fordark"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/Logo-02.png" alt="" title=""></a></div>
                    </div>
					<div class="nav-outer clearfix">
                    
						<!--Mobile Navigation Toggler For Mobile-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-4"></span></div>

						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse scroll-nav clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="dropdown"><a href="<?php echo home_url(); ?>/about-us/introduction/">ABOUT US</a>
										<ul>
											<li><a href="<?php echo home_url(); ?>/about-us/introduction/">Introduction</a></li>
											<li><a href="<?php echo home_url(); ?>/about-us/our-ethos/">Our ethos</a></li>
											<li><a href="<?php echo home_url(); ?>/about-us/our-investment-strategy/">Our investment strategy</a></li>
											<li><a href="<?php echo home_url(); ?>/about-us/our-impact/">Our impact</a></li>
											<li><a href="<?php echo home_url(); ?>/about-us/contact-us/">Contact us</a></li>
										</ul>
									</li>
									<li><a href="<?php echo home_url(); ?>/our-governance/">OUR GOVERNANCE</a></li>

									<li class="dropdown"><a href="<?php echo home_url(); ?>/our-people/leadership/">OUR PEOPLE</a>
										<ul>
											<li><a href="<?php echo home_url(); ?>/our-people/leadership/">Leadership</a></li>
											<li><a href="<?php echo home_url(); ?>/our-people/board-of-directors/">Board of Directors</a></li>
											<li><a href="<?php echo home_url(); ?>/our-people/investment-committee/">Investment Committee</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="<?php echo home_url(); ?>/our-business/introduction/">OUR BUSINESS</a>
										<ul>
											<li><a href="<?php echo home_url(); ?>/our-business/introduction/">Introduction</a></li>
											<li><a href="<?php echo home_url(); ?>/our-business/our-investment-platforms/">Investment platforms </a></li>
											<li><a href="<?php echo home_url(); ?>/our-business/real-estate-risk-strategies/">Risk strategies</a></li>
                                            <li><a href="<?php echo home_url(); ?>/our-business/our-portfolio/">Our portfolio</a></li>
										</ul>
									</li>
									<li><a href="<?php echo home_url(); ?>/careers/">CAREERS</a></li>
								</ul>
							</div>
							
						</nav>
					
						<div class="outer-box" style="background-color: none;">
                            <li class="fa fa-search" style="margin-top:43px; margin-right:15px; margin-left:15px; color:#b99e6d; font-size:20px;"></li>
						</div>
                        <div class="outer-box">
						<input type="checkbox" class="toggle-checkbox switch-trigger">
                            <li class="gg-dark-mode" style="margin-top:45px; margin-right:15px; margin-left:15px; color:#b99e6d; font-size:20px;"></li>
                        </div>
                        <div class="outer-box">
							<li class="fa fa-language" style="margin-top:45px; margin-right:15px; margin-left:15px; color:#b99e6d; font-size:20px;"></li>
						</div>
                        <div class="outer-box">
						<button style="background:none" id="btn-increase_wp_font_rp" type="button"><li class="fa fa-font" style="margin-top:45px; margin-left:40px; color:#b99e6d; font-size:20px;"></li></button>
						
	<button style="background:none" id="btn-decrease_wp_font_rp" type="button"><li class="fa fa-font" style="margin-top:45px; color:#b99e6d; font-size:12px; margin-right:15px;"></li></button>
						</div>
						<div class="search-box-btn"><span class="icon icon-magnifier"></span></div>
					</div>
					
                </div>
            </div>
        </div>
        <!--End Header Upper-->
		<style>
			.gg-search {
    box-sizing: border-box;
    position: relative;
    display: block;
    transform: scale(var(--ggs,1));
    width: 16px;
    height: 16px;
    border: 2px solid;
    border-radius: 100%;
    margin-right: -24px !important;
    float: right;
	color: #fff;
}
		</style>
		<!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="<?php echo home_url(); ?>" class="img-responsive"><img src="<?php bloginfo('template_url'); ?>/images/Logo-04.png" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
					<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                        </div>
						<div class="search-box-btn">	<li class="gg-search" style="margin-top:-45px"></li>
						</div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
		
    <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
            
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
            	<div class="nav-logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/nav-logo.png" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->