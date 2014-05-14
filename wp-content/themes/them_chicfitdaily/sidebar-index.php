<div id="sidebar1" class="sidebar" role="complementary">

	<div class="zone_300x250"></div>
	
	<h2>DESTACADOS</h2>

	<?php 
		
	// the query
	$the_query = new WP_Query('showpost=1&category_name=destacado'); ?>
	
	<?php if ( $the_query->have_posts() ) : ?>

	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?> role="article">
			
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				
				<h2> <?php echo get_the_title(); ?> </h2>

				<?php the_excerpt(); ?>
			</a>

		</article>
			
	<?php endwhile; ?>
	  <!-- end of the loop -->
	  <!-- pagination here -->

	<?php wp_reset_postdata(); ?>

	<?php else:  ?>
	  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

</div>