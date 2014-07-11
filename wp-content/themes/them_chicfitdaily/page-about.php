<?php
/*
 Template Name: About-page
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

	<section class="reciente">

		<?php $page_id = 84; $page_data = get_page( $page_id );echo '<h2>'. $page_data->post_title .'</h2>'; ?>
		<div class="post_pages">
			<?php echo apply_filters('the_content', $page_data->post_content); ?>

			<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<img src="<?php echo $feat_image;?>" alt="" width="100%">
		</div>

	</section>

</section>

<?php get_sidebar('index'); ?>

<?php get_footer(); ?>