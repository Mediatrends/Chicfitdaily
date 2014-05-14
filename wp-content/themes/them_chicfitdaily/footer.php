			</div>
			<div id="push"></div>
		</div>
		
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

						<div class="search">
							 <?php get_search_form(); ?> 
						</div>

					</div>
				</nav>

				<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

		</footer>
		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

		<script src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>

	</body>

</html> <!-- end of site. what a ride! -->
