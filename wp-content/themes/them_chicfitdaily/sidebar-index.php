<aside id="sidebar1" class="sidebar" role="complementary">

	<section class="zone_300x250">
	
<!-- 300X250_CFD -->
<div id='div-gpt-ad-1409601580575-2'>
<script type='text/javascript'>
googletag.display('div-gpt-ad-1409601580575-2');
</script>
</div>

	</section>

	<section class="zone_300x250">
<!-- 300X250_CFD_sidebar_2 -->
<div id='div-gpt-ad-1409601580575-3'>
<script type='text/javascript'>
googletag.display('div-gpt-ad-1409601580575-3');
</script>
</div>

	</section>

	<h2>instagram</h2>

	<!--div id="instafeed"></div-->

<script src="http://snapwidget.com/js/snapwidget.js"></script>
<iframe src="http://snapwidget.com/in/?u=Y2hpY2ZpdGNoaWxlfGlufDEyNXwyfDN8fG5vfDV8ZmFkZU91dHxvblN0YXJ0fHllc3x5ZXM=&ve=220914" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>

	<h2>facebook</h2>

	<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fchicfitdaily&amp;width=300px&amp;height=200&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=true&amp;appId=266876090132202" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300pxpx; height:200px;margin:0 auto;display:block;" allowTransparency="true"></iframe>
	
	<h2>DESTACADOS</h2>

	<section class="descatado">

		<?php
		// the query
		$the_query = new WP_Query('posts_per_page=2&category_name=destacado&order=DESC'); ?>
		
		<?php if ( $the_query->have_posts() ) : ?>

			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					
				<section id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?> role="article">
					
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="sidebar_a">
						
						<div class="post_img" style="background-image:url('<?php the_field('imagen_post_normal'); ?>');"></div>

						<h3><?php echo get_the_title(); ?></h3>

						<p><?php echo substr(get_the_excerpt(), 0,184); ?></p>
					</a>
					<?php the_tags( '<ul class="tags"><li>',' ','</li></ul>' ); ?>

					<div class="more">
						<a href="<?php the_permalink() ?>"></a>
					</div>
					
					
				</section>
				
		<?php endwhile; ?>
		  <!-- end of the loop -->
		  <!-- pagination here -->

			<?php wp_reset_postdata(); ?>

			<?php else:  ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</section>

</aside>