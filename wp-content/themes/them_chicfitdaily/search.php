<?php get_header(); ?>

			<section class="cont_post" role="main">
				<div class="reciente">

					<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

						<h2 class="archive-title"><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h2>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<!--article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

								<header class="article-header">

									<h3 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                  <p class="byline vcard">
                    <?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
                  </p>

								</header>

								<section class="entry-content">
										<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>

								</section>

								<footer class="article-footer">

                  <?php printf( __( 'Filed under: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer> 

							</article-->

							<div id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?> r>
						
								<a class="post-link" href="<?php the_permalink() ?>" rel="single" rel="bookmark" title="<?php the_title_attribute(); ?>">
									
									<div class="post_img" style="background-image:url('<?php the_field('imagen_post_normal'); ?>');">
										
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
											<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the search.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

							

					</div>

			</section>
<?php get_sidebar('index'); ?>
<?php get_footer(); ?>
