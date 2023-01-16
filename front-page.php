<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>AWJ | Home Page</title>
<!--By: MADA Aljuaid-->
<!-- Stylesheets -->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="<?php bloginfo('template_url'); ?>/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="<?php bloginfo('template_url'); ?>/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css-2/plugins.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css-2/style.css" />

<script src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/jquery.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/../HTWF/scripts/bootstrap/css/bootstrap.css">
<script src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/script.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/../HTWF/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/../HTWF/css/content-box.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/../HTWF/css/image-box.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/../HTWF/css/animations.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/../HTWF/css/components.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/../HTWF/scripts/flexslider/flexslider.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/../HTWF/scripts/magnific-popup.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/../HTWF/scripts/php/contact-form.css">
<link rel="icon" href="<?php bloginfo('template_url'); ?>/../images/favicon.png">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/../skin.css">

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<?php wp_head(); ?>
</head>

<!---------------------------- Start Main Header ------------------------------->

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header / Header Style Three-->
    <header class="main-header header-style-three">
    	
		<div class="header-top">
            <div class="auto-container clearfix">
			<div id="1" class="widgets_on_page wop_tiny1  wop_small1  wop_medium1  wop_large1  wop_wide1">
			<ul><li id="accesstxt-3" class="widget widget_accesstxt" style="font-size: 90%;">    <script type="text/javascript">
		//Specify affected tags. Add or remove from list
		var tgs = new Array('body','p','li','td', 'a', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6');
		//Specify spectrum of different font sizes
		var szs = new Array('90%','100%','110%','105%');
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
								<div class="font_toggle" style="z-index:9999">
									<!-- <button id="f_dec" onclick="dec_font()">-</button>
									<button id="f_inc" onclick="inc_font()">+</button> -->
								</div>

					<ul class="info-list clearfix">
                        <li class="gg-dark-mode"></li>
						
						<!-- <a id="f_inc" onclick="inc_font()"> -->
						<!-- <li class="gg-insert-after"></li> -->
						<!-- <a id="f_inc" onclick="inc_font()">	<li class="gg-add"></li> </a>
						<a id="f_dec" onclick="dec_font()"><li class="gg-remove"></li> </a> -->

					
						
					<!-- </a> -->
                    </ul>
                </div>
				
				<!-- Top Right -->
                <div class="top-right clearfix">
				<input type="checkbox" class="toggle-checkbox switch-trigger">
					<!-- Social Links -->
					
                </div>
            </div>
        </div>


    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
                	<div class="pull-left logo-box">
                    	<div class="logo fordark"><a href="index.php"><img class="for-dark" src="<?php bloginfo('template_url'); ?>/images/Logo-02.png" alt="" title=""></a></div>
						
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
									<li><a href="#" class="lang_new_color">AR</a></li>
                                </ul>
                            </div>
						</nav>
						<!-- Main Menu End-->

						<!--<div class="font_toggle">
							<button id="f_dec" onclick="dec_font()">a</button>
							<button id="f_inc" onclick="inc_font()">A</button>
						</div>-->
						<div class="outer-box">
                            <li class="fa fa-search" style="margin-top:43px; margin-right:15px; margin-left:15px; color:#b99e6d; font-size:20px;"></li>
						</div>
                        <div class="outer-box">
                            <li class="gg-dark-mode" style="margin-top:45px; margin-right:15px; margin-left:15px; color:#b99e6d; font-size:20px;"></li>
                        </div>
                        <div class="outer-box">
							<li class="fa fa-language" style="margin-top:45px; margin-right:15px; margin-left:15px; color:#b99e6d; font-size:20px;"></li>
						</div>
						<div class="outer-box">
							<div class="search-box-btn"><li class="gg-search" style="margin-top:0px"></li></div>
						</div>
						<!-- <div class="outer-box">
							<div class="lang-box-btn">Ar</div>
						</div> -->
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
                            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript-->
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
    <section class="main-slider home-three">
        
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_two_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_two" data-version="5.4.1">
                <ul>
                    
                    <li data-transition="slidingoverlayvertical" data-description="Slide Description"  data-index="rs-1688" data-slotamount="default" data-thumb="<?php bloginfo('template_url'); ?>/images/main-slider/3-3.jpg" data-title="Slide Title">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php bloginfo('template_url'); ?>/images/main-slider/3-3.jpg">
                    
					<div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['650','650','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-70','-120','-110','-80']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":500,"speed":500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="title text-center" style="font-size:30px; font-family:'El Messiri', sans-serif;">Welcome to AHC</div>
                    </div>
					
                    <div class="tp-caption "
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['880','700','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['50','-10','5','10']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h2 class="text-center">Where we invest in sustainable real assets</h2>
                    </div>
					
					<div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="normal"
                    data-width="['600','650','650','450']"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['190','110','130','110']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
						<!-- Link Box -->
                        <div class="link-box text-center">
                            <a href="#" class="theme-btn btn-style-one">Read more</a>
                        </div>
                    </div>
					
					</li>
                    
                    <li data-transition="slidingoverlayvertical" data-description="Slide Description"  data-index="rs-1689" data-slotamount="default" data-thumb="<?php bloginfo('template_url'); ?>/images/main-slider/4-4.jpg" data-title="Slide Title">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php bloginfo('template_url'); ?>/images/main-slider/4-4.jpg">
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['650','650','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-70','-120','-110','-80']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":500,"speed":500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="title text-center" style="font-size:30px; font-family:'El Messiri', sans-serif;">BEST-IN-CLASS</div>
                    </div>
					
                    <div class="tp-caption "
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['880','700','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['50','-10','5','10']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h2 class="text-center">Farsighted perspective</h2>
                    </div>
					
					<div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="normal"
                    data-width="['600','650','650','450']"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['190','110','130','110']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
						<!-- Link Box -->
                        <div class="link-box text-center">
                            <a href="#" class="theme-btn btn-style-one">Read more</a>
                        </div>
                    </div>
					
					</li>
					
					<li data-transition="slidingoverlayvertical" data-description="Slide Description"  data-index="rs-1690" data-slotamount="default" data-thumb="<?php bloginfo('template_url'); ?>/images/main-slider/1-1.jpg" data-title="Slide Title">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php bloginfo('template_url'); ?>/images/main-slider/1-1.jpg">
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['650','650','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-70','-120','-110','-80']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":500,"speed":500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="title text-center" style="font-size:30px; font-family:'El Messiri', sans-serif;">MULTI-GENERATIONAL VALUE</div>
                    </div>
					
                    <div class="tp-caption "
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['880','700','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['50','-10','5','10']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h2 class="text-center">Sustainable impact to deliver commercial and social value</h2>
                    </div>
					
					<div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="normal"
                    data-width="['600','650','650','450']"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['190','110','130','110']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
						<!-- Link Box -->
                        <div class="link-box text-center">
                            <a href="#" class="theme-btn btn-style-one">Read more</a>
                        </div>
                    </div>
					
					</li>
					
                </ul>
            </div>
        </div>
		
    </section>

    <!----------------------------End Main Slider---------------------------------->

	<!--------------------------- Start About Section ----------------------------->

	<section class="story-section">
		<div class="auto-container">
						<!-- Story Block -->
						<div class="story-block">
							<!--<div class="pattern-layer" style="background-image:url(images/background/pattern-3.png)"></div>-->
							<div class="inner-box">
								<div class="clearfix">
									
									<!-- Image Column -->
									<div class="image-column col-lg-6 col-md-12 col-sm-12">
										<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
											<div class="image">
												<img src="<?php bloginfo('template_url'); ?>/images/resource/story-1.png" alt="" />
											</div>
										</div>
									</div>
									
									<!-- Content Column -->
									<div class="content-column col-lg-6 col-md-12 col-sm-12">
										<!-- Sec Title -->
										<div class="sec-title">
											<div class="inner-title">
												<div class="title">ABOUT US</div>
												<h2>A Holistic Approach In <br>Real Estate Value Creation</h2>
											</div>
										</div>
										<div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
											<div class="text">
										
								

												<p style="font-size:16px; text-align:justify;">AHC is a diversified Saudi real assets investment group with a firm foothold across the Kingdom’s real estate landscape. Established 6 years ago in Riyadh, our heritage dates back to 40 years.</p>
												<p style="font-size:16px; text-align:justify;">With a vision for impactful sustainable growth, we leverage opportunities in real estate, infrastructure and corporate venture capital focused on PropTech.</p>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
			<!-- Story Block Two -->
			<div class="story-block-two">
				<!--<div class="pattern-layer" style="background-image:url(images/background/pattern-1.png)"></div>-->
				<div class="inner-box">
					<div class="clearfix">
						
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="image">
									<img src="<?php bloginfo('template_url'); ?>/images/resource/story-5.png" alt="" />
								</div>
							</div>
						</div>
						
						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<!-- Sec Title -->
							<div class="sec-title">
								<div class="inner-title">
									<div class="title">OUR GOVERNANCE</div>
									<h2>Chairman’s message</h2>
								</div>
							</div>
							<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="text">
									<p style="font-size:16px; text-align:justify;">AHC has robust governance standards with clearly defined roles and responsibilities to ensure accountability at every level of the firm. </p>
									<p style="font-size:16px; text-align:justify;">AHC’s Board of Directors is accountable for AHC’s performance to ensure creation of shareholder value. The primary responsibility of the Board 
										is set out in our Corporate Governance Manual, but substantially it is the responsibility of the Board to formulate policy, 
										and not the intent of the Board to become involved in either the active implementation of that policy or in the daily operations of AHC.</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</section>

	<!--------------------------- End About Section ---------------------------->

	<!------------------------- Start services Section ------------------------->

	<section class="services-section-four rooms1">
		<div class="title-box" style="background-image:url(<?php bloginfo('template_url'); ?>/images/background/13-1-1.jpg)">
			<div class="auto-container">
				<div class="sec-title light">
					<div class="clearfix">
						<div class="pull-left">
							<div class="title">OUR BUSINESS </div>
							<h2>Our investment platforms</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="lower-content">
			<div class="auto-container">
				<div class="row clearfix">
					 <div class="col-md-4">
						<div class="item">
							<div class="position-re o-hidden"> <img src="<?php bloginfo('template_url'); ?>/img/rooms/1.jpg" alt=""> </div> <span class="category"><a>AHC</a></span>
							<div class="con">
								<h5><a href="#">Direct Real Estate</a> </h5>
								<div class="line"></div>
								<div class="row facilities">
									<div class="col col-md-7">
									</div>
									<div class="col col-md-5 text-right">
										<div class="permalink"><a href="#">Details</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<div class="position-re o-hidden"> <img src="<?php bloginfo('template_url'); ?>/img/rooms/21.jpg" alt=""> </div> <span class="category"><a>AHC</a></span>
							<div class="con">
								<h5><a href="#">Real Estate Private Equity
								</a> </h5>
								<div class="line"></div>
								<div class="row facilities">
									<div class="col col-md-7">
									  <p></p>
									</div>
                                    <div class="col col-md-5 text-right">
										<div class="permalink"><a href="#">Details</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<div class="position-re o-hidden"> <img src="<?php bloginfo('template_url'); ?>/img/rooms/3.jpg" alt=""> </div> <span class="category"><a>AHC</a></span>
							<div class="con">
								<h5><a href="#">Real Estate Securities
								</a> </h5>
								<div class="line"></div>
								<div class="row facilities">
									<div class="col col-md-7">
									  
									</div>
									<div class="col col-md-5 text-right">
										<div class="permalink"><a href="#">Details</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
	<!--------------------------- End Services Section ------------------------->

	<!--------------------------- Start 2030 vision ----------------------------->
			
	<section class="product-tab-section" style="background-image:url(<?php bloginfo('template_url'); ?>/images/background/2.png)">
		<div class="auto-container">
			<!-- Content Box -->
			<div class="content-box">
				<div class="inner-content">
					<!-- Sec Title -->
					<div class="sec-title">
						<div class="inner-title">
							<div class="title">Our impact</div>
							<h2>Saudi Vision 2030</h2>
							<div class="text">We believe Saudi Vision 2030 is a pathway to the future to unlock the Kingdom’s vast potential by creating a diversified, innovative, and world-leading nation for the benefit of future generations.</div>
							<p>Our ethos and strategy embody the core principles of Saudi Vision 2030, and we intend to bring about transformative progress by creating innovative and lasting value across the Kingdom.</p>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section>

	<!--------------------------- End 2030 vision ----------------------------->
	<section class="product-tab-section"></section>
	<!--------------------------- Sponsors Section ---------------------------->

		<section class="sponsors-section">
			<div class="container">
				
				<div class="sponsors-outer">
					<!--Sponsors Carousel-->
					<ul class="sponsors-carousel owl-carousel owl-theme">
						<li class="slide-item"><figure class="image-box"><a href="#"><img class="change_logo_color" src="<?php bloginfo('template_url'); ?>/img/c1.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img class="change_logo_color" src="<?php bloginfo('template_url'); ?>/img/c5.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img class="change_logo_color" src="<?php bloginfo('template_url'); ?>/img/c6.png" alt=""></a></figure></li>
					</ul>
				</div>
				
			</div>
		</section>
		
	<!--------------------------- Sponsors Section ---------------------------->

	<!----------------------------- Start Footer ------------------------------>
	
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
<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="flaticon-cancel-1"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	
			<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(); ?>">
            	<div class="form-group">
                	<fieldset>
				
                        <input type="search" class="form-control" name="s" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>


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

<script src="<?php bloginfo('template_url'); ?>/js-2/jquery-3.6.0.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/jquery-migrate-3.0.0.min.js"></script>
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

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/../HTWF/scripts/font-awesome/css/font-awesome.css">
        <script async src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/imagesloaded.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/parallax.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/flexslider/jquery.flexslider-min.js"></script>
        <script async src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/isotope.min.js"></script>
        <script async src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/php/contact-form.js"></script>
        <script async src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/jquery.progress-counter.js"></script>
        <script async src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/jquery.tab-accordion.js"></script>
        <script async src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/bootstrap/js/bootstrap.popover.min.js"></script>
        <script async src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/jquery.magnific-popup.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/social.stream.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/jquery.slimscroll.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/google.maps.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="<?php bloginfo('template_url'); ?>/../HTWF/scripts/smooth.scroll.min.js"></script>
		<?php wp_footer(); ?>
</body>
</html>