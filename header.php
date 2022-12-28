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

</head>

<body>

<div class="page-wrapper">
 	
  
 	
    <!-- Main Header-->
    <header class="main-header">
	<div class="header-top" style="background-color:#85744f;">
            <div class="auto-container clearfix">
			<!-- <script>
									let initialZoom = 1;
									let currentZoom = initialZoom;
									let maxZoom = 1.7;
									function inc_font(){
										currentZoom = currentZoom + .01
										if(currentZoom>=maxZoom) currentZoom = maxZoom;
										document.body.style.zoom = currentZoom
										document.body.style.transform = "scale("+currentZoom+")"
									}
									function dec_font(){
										currentZoom = currentZoom - .01
										if(currentZoom<=initialZoom) currentZoom = initialZoom;
										document.body.style.zoom = currentZoom
										document.body.style.transform = "scale("+currentZoom+")"
									}
								</script> -->
								<div id="1" class="widgets_on_page wop_tiny1  wop_small1  wop_medium1  wop_large1  wop_wide1">
			<ul><li id="accesstxt-3" class="widget widget_accesstxt" style="font-size: 90%;">    <script type="text/javascript">
		//Specify affected tags. Add or remove from list
		var tgs = new Array('body','p','li','td', 'a', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6');
		//Specify spectrum of different font sizes
		var szs = new Array('90%','100%','110%','120%');
		var startSz = 2;
		function ts( trgt,inc ) {
			if (!document.getElementById) return
			var d = document,cEl = null,sz = startSz,i,j,cTags;
			sz = inc;
			if ( sz < 0 ) sz = 0;
			if ( sz > 6 ) sz = 6;
			startSz = sz;
			if ( !( cEl = d.getElementById( trgt ) ) ) cEl = d.getElementsByTagName( trgt )[ 0 ];
			cEl.style.fontSize = szs[ sz ];
			for ( i = 0 ; i < tgs.length ; i++ ) {
				cTags = cEl.getElementsByTagName( tgs[ i ] );
				for ( j = 0 ; j < cTags.length ; j++ ) cTags[ j ].style.fontSize = szs[ sz ];
			}
		}
		</script>
    <ul style="z-index:99999">
      <li style="font-size: 90%;z-index:99999">
	  <a href="javascript:ts('body',0)" style="font-size:90%;z-index:99999" title="90%">
	  <i class="gg-arrow-down-o" style="color:#fff"></i></a>&nbsp;&nbsp;<a href="javascript:ts('body',1)" style="font-size:100%" title=" 100%">
	  <i class="gg-select-o" style="color:#fff"></i></a>&nbsp;&nbsp;<a href="javascript:ts('body',3)" style="font-size:120%" title=" 120%">
	  <i class="gg-arrow-up-o" style="color:#fff"></i></a>&nbsp;&nbsp;</li>
    </ul>
    </li>    </ul></div>
				<!-- Top Left -->
                <div class="top-left clearfix">
                    <!-- Info List -->
					<ul class="info-list clearfix">
                        <li class="gg-dark-mode"></li>
						<!-- <a id="f_inc" onclick="inc_font()">	<li class="gg-add"></li> </a>
						<a id="f_dec" onclick="dec_font()"><li class="gg-remove"></li> </a> -->
					
                        <span class="bi bi-badge-ar for-lang-int" style="color:#ffffff">Ar</span>
                    </ul>
                </div>
				<div class="top-right clearfix">
				<input type="checkbox" class="toggle-checkbox" id="toggle-checkbox">
					<!-- Social Links -->
					
                </div>
				
            </div>
        </div>
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
						<!-- Main Menu End-->
						<div class="search-box-btn"><span class="icon icon-magnifier"></span></div>
					</div>
					
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
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