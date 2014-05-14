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

<div class="cont_post">
	
	<div class="slide">
		<ul class="rslides" id="slide">
		<?php 

			// the query
			$the_query = new WP_Query('category_name=slide'); ?>
			
			<?php if ( $the_query->have_posts() ) : ?>

			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		        <li id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" style="background-image:url('<?php the_field('img_post'); ?>');">
		          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
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

						<div class="tit"><span><?php echo get_the_title(); ?></span></div>

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
		
	</div>
	<?php 
		
	// the query
	$the_query = new WP_Query('category_name=fitness,wellness,tips,moda,comida-sana'); ?>
	
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

<?php get_sidebar('index'); ?>

<?php get_footer(); ?>