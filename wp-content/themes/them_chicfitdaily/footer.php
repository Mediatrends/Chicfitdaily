			</article>
			<div id="push"></div>
		</main>
		
		<footer id="footer" class="footer" role="contentinfo">

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
				
				<div class="us">
					
					<h4>nosotros</h4>
					<p><?php echo bloginfo('description'); ?></p>
				</div>

				<div class="contact">
					
					<h4>contacto</h4>

					<ul class="redes">
						<li><span>Ubicacion:</span><br>V. Mackenna #9910 , Santiago.</li>
						<li><span>e-Mail:</span><br>info@chicfitdaily.com</li>
						<li><span>Twitter:</span><br>@chicfitdaily_scl</li>
						<li><span>Facebook:</span><br>/chicfitdaily_scl</li>
					</ul>
				</div>
				
				<div class="share">
					
					<h4>comparte:</h4>

					<ul>
						<li>
							<a href="" target="_blank">
								<svg viewBox="3 4 60 60">
									<use xlink:href="#svg_facebook"/>
								</svg>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<svg viewBox="3 4 60 60">
									<use xlink:href="#svg_twitter"/>
								</svg>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<svg viewBox="0 0 128 128">
									<use xlink:href="#svg_pinterest"/>
								</svg>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<svg viewBox="3 4 60 60">
									<use xlink:href="#svg_instagram"/>
								</svg>
							</a>
						</li>
					</ul>
				</div>
				
				<div class="newsletter">
					
					<h4>NEWSLETTER</h4>

				</div>

				<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

		</footer>

		
		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>
	</body>

</html> <!-- end of site. what a ride! -->
