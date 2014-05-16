<?php
/*
 Template Name: Index-page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<section class="cont_post">
	
	<section class="slide">

		<ul class="rslides" id="slide">
		
			<?php 
				// the query
				$the_query = new WP_Query('category_name=slide'); ?>
				
				<?php if ( $the_query->have_posts() ) : ?>

					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				        <li id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> style="background-image:url('<?php the_field('img_post'); ?>');">
				          <a class="post-link" href="<?php the_permalink() ?>" rel="<?php the_ID(); ?>" title="<?php the_title_attribute(); ?>">
								<div class="category">
									
									<?php
										$posttags = get_the_tags();
										$count=0;
										if ($posttags) {
										  foreach($posttags as $tag) {
										    $count++;
										    if (1 == $count) {
										      echo $tag->name . ' ';
										    }
										  }
										}
									?>

								</div>
								
								<div class="fecha">
									
									<?php echo get_the_date('j'); ?>
									<br>
									<span><?php echo get_the_date('M'); ?></span>

								</div>

								<div class="tit"><span><?php echo substr(the_title($before = '', $after = '', FALSE), 0, 40); ?></span></div>

							</a>
				        </li>

				    <?php endwhile; ?>
				  <!-- end of the loop -->
				  <!-- pagination here -->

					<?php wp_reset_postdata(); ?>

				<?php else:  ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
      	</ul>
		
	</section>
	
	<section class="reciente">
		
		<div class="ad_content">
			<div class="zone_728x90"></div>
		</div>

		<h2>LO MAS RECIENTE</h2>
		<?php
			// the query
			$the_query = new WP_Query('category_name=fitness,wellness,tips,moda,comida-sana'); ?>
			
			<?php if ( $the_query->have_posts() ) : ?>

				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						
					<div id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?> r>
						
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							
							<div class="post_img" style="background-image:url('<?php the_field('img_post'); ?>');">
								
								<div class="fecha">
									
									<?php echo get_the_date('j'); ?>
									<br>
									<span><?php echo get_the_date('M'); ?></span>

								</div>

							</div>

							<h3><?php echo substr(the_title($before = '', $after = '', FALSE), 0, 42); ?></h3>

							<p><?php echo substr(get_the_excerpt(), 0,184); ?></p>
						</a>
						<?php the_tags( '<ul class="tags"><li>',' ','</li></ul>' ); ?>

						<div class="more">
							<a href="<?php the_permalink() ?>"></a>
						</div>
					</div>
						
				<?php endwhile; ?>
			  <!-- end of the loop -->
			  <!-- pagination here -->

			<?php wp_reset_postdata(); ?>

			<?php else:  ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

	</section>

</section>

<?php get_sidebar('index'); ?>

<?php get_footer(); ?>

<div id="single_post"></div>