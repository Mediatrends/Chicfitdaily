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

		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="<?php wp_title(''); ?>">
		<meta itemprop="description" content="<?php bloginfo('description'); ?>">
		<meta itemprop="image" content="">

		<!-- Twitter Card data -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@chicfitdaily">
		<meta name="twitter:title" content="<?php wp_title(''); ?>">
		<meta name="twitter:description" content="">
		<!--meta name="twitter:creator" content="@author_handle"-->
		<!-- Twitter summary card with large image must be at least 280x150px -->
		<meta name="twitter:image:src" content="">

		<!-- Open Graph data -->
		<meta property="og:title" content="<?php wp_title(''); ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="<?php the_permalink() ?>" />
		<meta property="og:image" content="" />
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />
		<meta property="og:site_name" content="Chc Fit Daily" />
		<meta property="article:published_time" content="<?php the_time('j F Y'); ?>" />
		<!--meta property="article:modified_time" content="" /-->
		<!--meta property="article:section" content="Article Section"/-->
		<meta property="article:tag" content="<?php $posttags = get_the_tags();if ($posttags) {foreach($posttags as $tag) {echo $tag->name . ','; }}?>" />
		<!--meta property="fb:admins" content="Facebook numberic ID" /--> 


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

		<?php //TAG DOUBLECLICK ?>
		<script type='text/javascript'>
(function() {
var useSSL = 'https:' == document.location.protocol;
var src = (useSSL ? 'https:' : 'http:') +
'//www.googletagservices.com/tag/js/gpt.js';
document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');
})();
</script>

<script type='text/javascript'>
googletag.defineOutOfPageSlot('/20099485/CFD_publipost_loop', 'div-gpt-ad-1409669056186-0-oop').addService(googletag.pubads());
googletag.defineOutOfPageSlot('/20099485/CFD_publipost', 'div-gpt-ad-1409669337649-0-oop').addService(googletag.pubads());
googletag.pubads().enableSyncRendering();
googletag.pubads().enableSingleRequest();
googletag.enableServices();
</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/dragend.js"></script>
<script>

	jQuery(document).ready(function($){
		$('.ad_mobile').dragend({
			onSwipeEnd: function(){
				$('.cont_ad').fadeIn();
			}
		});
		$('.cerrar').on('click', function(){
			$('.cont_ad').fadeOut();
		});
	});

</script>

<style>
	
	.cont_ad{
		display: none;
		width:95%;
		height:95%;
		top:2%;
		left:0;
		right:0;
		margin: 0 auto;
		position: fixed;
		background: #000;
		z-index:999;
	}

</style>
	</head>

	<body <?php body_class('fixed_ads'); ?>>
	
	<div class="cont_ad">
		ad content
		<div class="cerrar">close</div>
	</div>

	<div class="ad_mobile hide">
		
		<div class="dragend-page">swipe ad</div>

	</div>

	<?php include (TEMPLATEPATH . '/svg_cont.php'); ?>

	<a href="#" class="scrollToTop">
		<img src="<?php echo get_template_directory_uri(); ?>/img/top_fle.png" alt="">
		Subir
	</a>

		<!--div class="spinner">
		  <div class="double-bounce1"></div>
		  <div class="double-bounce2"></div>
		</div-->
	
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
							<div class="zone_728x90"></div>
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

					<div class="redes_top">
						
						<ul>
							<li>
								<a href="http://www.facebook.com/chicfitdaily" target="_blank">
									<svg viewBox="23.5 23.5 20 20">
										<use xlink:href="#svg_facebook"/>
									</svg>
								</a>
							</li>
							<li>
								<a href="http://www.twitter.com/chicfitdaily" target="_blank">
									<svg viewBox="23.5 23.5 20 20">
										<use xlink:href="#svg_twitter"/>
									</svg>
								</a>
							</li>
							<li>
								<a href="" target="_blank">
									<svg viewBox="23.5 23.5 20 20">
										<use xlink:href="#svg_pinterest"/>
									</svg>
								</a>
							</li>
							<li>
								<a href="http://instagram.com/chicfitdaily" target="_blank">
									<svg viewBox="23.5 23.5 20 20">
										<use xlink:href="#svg_instagram"/>
									</svg>
								</a>
							</li>
						</ul>

					</div>

			</header>
			
			<article class="content">