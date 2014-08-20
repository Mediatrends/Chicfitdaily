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
	<section id="slide">
		<ul>
			<?php 
				// the query
				$the_query = new WP_Query('category_name=slide&posts_per_page=-1'); ?>
				
				<?php if ( $the_query->have_posts() ) : ?>

					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				        <li id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> style="background-image:url('<?php the_field('imagen_post_banner'); ?>');">
								
							<a class="post-link" href="<?php the_permalink() ?>" rel="single" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<div class="category">
									
									<?php //$posttags = get_the_tags(); $count=0; if ($posttags) { foreach($posttags as $tag) { $count++; if (1 == $count) { echo $tag->name . ' '; } } }?>
									
									Lo último
								</div>
								
								<!--div class="fecha">
									
									<?php //echo get_the_date('j'); ?>
									<br>
									<span><?//php echo get_the_date('M'); ?></span>

								</div-->

								<div class="tit">
									<?php echo substr(the_title($before = '', $after = '', FALSE), 0, 140); ?><br>
									<!--?php echo get_the_date();?><br>
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
									?>-->
								</div>

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

	<div class="ad_content">
		<div class="zone_728x90">
			
<?php include (TEMPLATEPATH . '/ad_cont_all.php'); ?>
		</div>
	</div>

	<section class="reciente">

		<h2>LO MAS RECIENTE</h2>

		<?php
		    // paging variable
		    $paged = (get_query_var('page')) ? get_query_var('page') : 1;

		    // the arguments
		    $args = array(
		        'post_type'         =>  'post',
		        'category_name'     =>  'tonificacion,piernas,brazos,abs,espalda,pushup,squats,gluteos,hombros,musculo,rutina,workout,fuerza,circuito,maquinas,implementos,grasa,suplementos,proteinas,quemadores,pre-entrenamiento,verano,bikini,inspiracion,perdida-de-peso,vegetales,frutas,jugos,semillas,legumbres,carbohidratos,snacks,recetas,sano,look,prendas,esenciales,belleza,musica,tendencias,spotify,videos,accesorios,running,jogging,pilates,yoga,asanas,calentamiento,elongacion,flexibilidad,danza,rutina,recuperacion,acondicionamiento,trx,referentes,crossfit,sueno,descanso,nutricion,habitos,dietas,lesiones,imc,confianza',
		        'posts_per_page'    =>  5,
		        'paged'             =>  $paged,
		    ); 
		    // assign arguments to new WP_Query
		    $wp_query = new WP_Query( $args );
		    // start the loop
		    while( $wp_query->have_posts() ) :
		           $wp_query->the_post();
		?>
		    <div id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?> r>
						
				<a class="post-link" href="<?php the_permalink() ?>" rel="single" rel="bookmark" title="<?php the_title_attribute(); ?>">
					
					<div class="post_img" style="background-image:url('<?php the_field('imagen_post_normal'); ?>');">
						
						<!--div class="fecha">
							
							<?php echo get_the_date('j'); ?>
							<br>
							<span><?php echo get_the_date('M'); ?></span>

						</div-->

					</div>

					<h3><?php echo substr(the_title($before = '', $after = '', FALSE), 0, 42); ?></h3>
					<h4><?php echo get_the_date(''); ?></h4>
					<p><?php echo substr(get_the_excerpt(), 0,184); ?></p>
				</a>
				<?php the_tags( '<ul class="tags"><li>',' ','</li></ul>' ); ?>

				<div class="more">
					<a href="<?php the_permalink() ?>"></a>
				</div>
			</div>
		<?php endwhile; ?>

		<div class="post_nav">
		    <div class="nav_prev">
		    	<?php previous_posts_link('Anterior') ?>
		    </div>
		    <div class="nav_next">
		    	<?php next_posts_link('Siguiente') ?>
		    </div>
		</div>
		<?php wp_reset_postdata(); // fixes bug where below ACF fields wont display ?>

	</section>

</section>

<?php get_sidebar('index'); ?>

<?php get_footer(); ?>