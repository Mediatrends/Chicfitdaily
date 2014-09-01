			</article>
			<div id="push"></div>

			<div class="ad_lateral">
				
				<div class="zone_160x600 ad01 ad_fix">

					<!-- 160X600_CFD_left -->
<div id='div-gpt-ad-1409582659049-0'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1409582659049-0'); });
</script>
</div>
						
				</div>
				<div class="zone_160x600 ad02 ad_fix2">
					
<div id='div-gpt-ad-1409582659049-1'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1409582659049-1'); });
</script>
</div>

				</div>

			</div>

		</main>
		
		<footer id="footer" class="footer" role="contentinfo">

			<div class="content">
				
				<div class="us">
					
					<h4>CHIC FIT DAILY</h4>
					<!--p><?php echo bloginfo('description'); ?></p-->
					<nav role="navigation">

						<div class="cont_menu">

							<?php wp_nav_menu(array(
							'container' => '',                              // remove nav container
							'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
							'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
							'menu_class' => 'nav footer-nav cf',            // adding custom nav class
							'theme_location' => 'footer-links',             // where it's located in the theme
							'before' => '',                                 // before the menu
			    			'after' => '',                                  // after the menu
			    			'link_before' => '',                            // before each link
			    			'link_after' => '',                             // after each link
			    			'depth' => 0,                                   // limit the depth of the nav
							'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
							)); ?>
						</div>
					</nav>
				</div>

				<div class="contact">
					
					<h4>ABOUT US</h4>
					<nav>
						<ul class="about">
							<li><a href="/about-us">acerca de</a></li>
							<li><a href="mailto:chicfitdaily@gmail.com">contacto editorial</a></li>
							<li><a href="mailto:alvaro@mediatrends.cl">contacto publicitario</a></li>
						</ul>
					</nav>
					
				</div>
				
				<div class="share">
					
					<h4>SÍGUENOS:</h4>

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
				
				<div class="newsletter">
					
					<h4>NEWSLETTER</h4>
					<?php $widgetNL = new WYSIJA_NL_Widget(true);echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php')); ?>

				</div>

				<!--p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p-->

			</div>

		</footer>

		
		<?php // all js scripts are loaded in library/bones.php ?>
		<script src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/responsive-nav.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/fixto.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/instafeed.min.js"></script>
		<?php wp_footer(); ?>
		

	</body>

</html> <!-- end of site. what a ride! -->
