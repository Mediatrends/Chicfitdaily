<section id="sidebar1" class="sidebar" role="complementary">

	<section class="zone_300x250">
		
<!-- Chic_INX_sidebar -->
<div id='div-gpt-ad-1400804065659-2' style='width:300px; height:250px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1400804065659-2'); });
</script>
</div>

	</section>
	
	<section class="descatado">

		<h2>DESTACADOS</h2>

		<?php
		// the query
		$the_query = new WP_Query('posts_per_page=1&category_name=destacado&order=DESC'); ?>
		
		<?php if ( $the_query->have_posts() ) : ?>

			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					
				<section id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?> role="article">
					
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="sidebar_a">
						
						<div class="post_img" style="background-image:url('<?php the_field('img_post'); ?>');"></div>

						<h3><?php echo get_the_title(); ?></h3>

						<?php the_excerpt(); ?>
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

</section>