<?php get_header(); ?>

		<section class="cont_post" role="main">
			
			<div class="reciente">
				
				<?php if (is_category()) { ?>
						<h2 class="archive-title h2">
							<span><?php //_e( 'Posts Categorized:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?>
						</h2>

					<?php } elseif (is_tag()) { ?>
						<h2 class="archive-title h2">
							<span><?php //_e( 'Posts Tagged:', 'bonestheme' ); ?></span> <?php single_tag_title(); ?>
						</h2>

					<?php } elseif (is_author()) {
						global $post;
						$author_id = $post->post_author;
					?>
						<h2 class="archive-title h2">

							<span><?php _e( 'Posts By:', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>

						</h2>
					<?php } elseif (is_day()) { ?>
						<h2 class="archive-title h2">
							<span><?php _e( 'Daily Archives:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
						</h2>

					<?php } elseif (is_month()) { ?>
							<h2 class="archive-title h2">
								<span><?php _e( 'Monthly Archives:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?>
							</h2>

					<?php } elseif (is_year()) { ?>
							<h2 class="archive-title h2">
								<span><?php _e( 'Yearly Archives:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?>
							</h2>
					<?php } ?>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



					<!--article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?> role="article">

						<header class="article-header">

							<h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							<p class="byline vcard"><?php
								printf(__( 'Posted', 'bonestheme' ) . ' <time class="updated" datetime="%1$s" pubdate>%2$s</time> ' . __('by', 'bonestheme' ) . ' <span class="author">%3$s</span> <span class="amp">&</span> ' . __('filed under', 'bonestheme') .  ' %4$s.', get_the_time('Y-m-j'), get_the_time(__( 'F jS, Y', 'bonestheme' )), get_the_author_link( get_the_author_meta( 'ID' ) ), get_the_category_list(', '));
							?></p>

						</header>

						<section class="entry-content cf">

							<?php the_post_thumbnail( 'bones-thumb-300' ); ?>

							<?php the_excerpt(); ?>

						</section>

						<footer class="article-footer">

						</footer>

					</article-->

					<div id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?> r>
						
						<a class="post-link" href="<?php the_permalink() ?>" rel="single" rel="bookmark" title="<?php the_title_attribute(); ?>">
							
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

							<?php bones_page_navi(); ?>

					<?php else : ?>

							<article id="post-not-found" class="hentry cf">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article>

					<?php endif; ?>

			</div>
			
			<div class="ad_content">
				<div class="zone_728x90"></div>
			</div>

		</section>
		<?php get_sidebar('index'); ?>

<?php get_footer(); ?>
