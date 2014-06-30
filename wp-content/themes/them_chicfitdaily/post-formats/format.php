              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>
              


              <section id="post-<?php the_ID(); ?>" <?php post_class('cont_post_single'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
                

                <header class="article-header">

                  <h2 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h2>

                </header> <?php // end article header ?>
                
                <div class="fecha"><?php echo get_the_date('j / m / Y'); ?></div>

                <nav>
                  <div class="post_nav">

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

                  </div>

                  <div class="cerrar" onclick="window.history.back();">
        
                  <div>x</div>

                  </div>
                  <div class="share">
                    
                    <?php do_action( 'addthis_widget', get_permalink(), get_the_title(), 'above'); ?>

                  </div>
                </nav>

                <section class="clear entry-content" itemprop="articleBody">
                  

                  <img src="<?php the_field('imagen_post_normal'); ?>" alt="" class="responsive-img">
                  

                  <div class="meta">
                    
                    <?php the_tags( '<ul class="tags"><li>',' ','</li></ul>' ); ?>

                    <?php //printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time> <!--by <span class="author">%3$s</span-->', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
                    
                    <div class="view_comments">
                      <div class="btn_comment">
                        Comentarios
                      </div>
                    </div>
                  </div>

                
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

                </section> <?php // end article section ?>

                <!--footer class="article-footer">

                  <?php printf( __( 'Filed under: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                </footer--> <?php // end article footer ?>
                <div class="coment_cont hide">
                  <?php comments_template(); ?>
                </div>
                
                <div class="ad_content">
                  <div class="zone_728x90">
                        
<!-- 728x90_CFD_cont -->
<div id='div-gpt-ad-1404152523663-5' style='width:728px; height:90px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1404152523663-5'); });
</script>
</div>

                        
                  </div>
                </div>

              </section> <?php // end article ?>