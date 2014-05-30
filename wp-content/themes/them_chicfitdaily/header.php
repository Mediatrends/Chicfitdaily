<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		
		<meta name="google-site-verification" content="iEPo54RBFRELTuh7yNFJjmaZ-CF9BgzE7ZsnZjGvs-k" />
		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
		
		<?php //MAIN HEAD ?>

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-nav.css">

		<?php // drop Google Analytics Here ?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-51156134-1', 'chicfitdaily.com');
		  ga('require', 'displayfeatures');
		  ga('require', 'linkid', 'linkid.js');
		  ga('send', 'pageview');

		</script>
		<?php // end analytics ?>

		<?php //TAG DOUBLECLICK ?>

		<script type='text/javascript'>
		var googletag = googletag || {};
		googletag.cmd = googletag.cmd || [];
		(function() {
		var gads = document.createElement('script');
		gads.async = true;
		gads.type = 'text/javascript';
		var useSSL = 'https:' == document.location.protocol;
		gads.src = (useSSL ? 'https:' : 'http:') + 
		'//www.googletagservices.com/tag/js/gpt.js';
		var node = document.getElementsByTagName('script')[0];
		node.parentNode.insertBefore(gads, node);
		})();
		</script>

		<script type='text/javascript'>
			googletag.cmd.push(function() {
				googletag.defineSlot('/20099485/Chic_INX_content', [728, 90], 'div-gpt-ad-1400804065659-0').addService(googletag.pubads());
				googletag.defineSlot('/20099485/Chic_INX_header', [728, 90], 'div-gpt-ad-1400804065659-1').addService(googletag.pubads());
				googletag.defineSlot('/20099485/Chic_INX_sidebar', [300, 250], 'div-gpt-ad-1400804065659-2').addService(googletag.pubads());
				googletag.defineSlot('/20099485/Chic_SNG_content', [728, 90], 'div-gpt-ad-1400804065659-3').addService(googletag.pubads());
				googletag.enableServices();
			});
		</script>

	</head>

	<body <?php body_class(); ?>>
	<?php include (TEMPLATEPATH . '/svg_cont.php'); ?>
		<main id="container">

			<header class="header" role="banner">

					<div class="cont_subt_top">
						
						<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
						<div class="logo">
							<a href="<?php echo home_url(); ?>" rel="nofollow">
								<svg viewBox="0 0 655.586 172.639">
									<use xlink:href="#svg_logo"/>
								</svg>
							</a>
						</div>
						<div class="ad_header">
							<div class="zone_728x90">
								
								<!-- Chic_INX_header -->
								<div id='div-gpt-ad-1400804065659-1' style='width:728px; height:90px;'>
								<script type='text/javascript'>
								googletag.cmd.push(function() { googletag.display('div-gpt-ad-1400804065659-1'); });
								</script>
								</div>

							</div>
						</div>
						
						<?php // if you'd like to use the site description you can un-comment it below ?>
						<?php // bloginfo('description'); ?>

					</div>

					<nav role="navigation">

						<div class="cont_menu">
							
							<?php wp_nav_menu(array(
	    					'container' => false,                           // remove nav container
	    					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
	    					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
	    					'menu_class' => 'nav top-nav cf',               // adding custom nav class
	    					'theme_location' => 'main-nav',                 // where it's located in the theme
	    					'before' => '',                                 // before the menu
		        			'after' => '',                                  // after the menu
		        			'link_before' => '',                            // before each link
		        			'link_after' => '',                             // after each link
		        			'depth' => 0,                                   // limit the depth of the nav
	    					'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>
							
							<div class="search">
								 <?php get_search_form(); ?> 
							</div>

						</div>
						
					</nav>

			</header>
			<article class="content">