<?php
/*
 * CUSTOM POST TYPE TEMPLATE
 *
 * This is the custom post type post template. If you edit the post type name, you've got
 * to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is "register_post_type( 'bookmarks')",
 * then your single template should be single-bookmarks.php
 *
 * Be aware that you should rename 'custom_cat' and 'custom_tag' to the appropiate custom
 * category and taxonomy slugs, or this template will not finish to load properly.
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header('basic'); ?>

			<section class="cont_single">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cont_post_single'); ?> role="article">

								<header class="article-header">

									<h2 class="single-title single-title"><?php the_title(); ?></h2>

								</header>

								<div class="fecha"><?php echo get_the_date('j / m / Y'); ?></div>

				                <nav>
				                  <!--div class="post_nav">

				                      <?php
				                        $prev_post = get_previous_post();
				                        if($prev_post) {
				                           $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
				                           echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="nav_prev"></a>' . "\n";
				                                        }

				                        $next_post = get_next_post();
				                        if($next_post) {
				                           $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
				                           echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="nav_next"></a>' . "\n";
				                                        }
				                      ?>

				                      <div class="nextxt">
				                        <p>Ver mas post</p>
				                      </div>

				                  </div-->

				                  <div class="cerrar" onclick="window.history.back();">
				        
				                  <div>x</div>

				                  </div>
				                  <div class="share">
				                    
				                    <?php do_action( 'addthis_widget', get_permalink(), get_the_title(), 'above'); ?>

				                  </div>
				                </nav>

								<section class="clear entry-content" itemprop="articleBody">

									
									<div class="content_posts">

										<script>
										  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
										  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
										  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
										  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

										  ga('create', 'UA-51156134-3', 'auto');
										  ga('send', 'pageview');

										</script>
										<?php the_field('tag_dfp'); ?>
											<?php
												// the content (pretty self explanatory huh)
												the_content();

												/*
												 * Link Pages is used in case you have posts that are set to break into
												 * multiple pages. You can remove this if you don't plan on doing that.
												 *
												 * Also, breaking content up into multiple pages is a horrible experience,
												 * so don't do it. While there are SOME edge cases where this is useful, it's
												 * mostly used for people to get more ad views. It's up to you but if you want
												 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
												 *
												 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
												 *
												*/
												wp_link_pages( array(
													'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
													'after'       => '</div>',
													'link_before' => '<span>',
													'link_after'  => '</span>',
												) );
											?>
									</div>

									<div class="meta">

										<?php //the_tags( '<ul class="tags"><li>',' ','</li></ul>' ); ?>

										<?php //printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time> <!--by <span class="author">%3$s</span-->', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>

										<div class="view_comments">
										  <div class="btn_comment">
										    Comentarios
										  </div>
										</div>
									</div>
									
									<div class="comments hide">

				                          <div id="disqus_thread"></div>
				                          <script type="text/javascript">
				                              /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
				                              var disqus_shortname = 'chicfitdaily'; // required: replace example with your forum shortname

				                              /* * * DON'T EDIT BELOW THIS LINE * * */
				                              (function() {
				                                  var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				                                  dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
				                                  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				                              })();
				                          </script>
				                          <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				                          <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
				    
				                      
				                  </div>

								</section>

							</article>
							
							<?php endwhile; ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
<?php get_sidebar('index'); ?>
                
<div class="salto"></div>
</section>

<?php get_footer(); ?>
