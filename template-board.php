<?php /* Template Name: Board */

get_header(); ?>

	<div class="content-area">

		<div class="main">
			<?php
			while (have_posts()) {
				the_post();
				get_template_part( 'content' );
			} ?>
		</div>

		<div class="leader">
<?php
			$leaderQuery = new WP_QUERY(array('post_type' => 'leadership', 'posts_per_page' => -1, 'meta_key' => 'leader-form-order', 'orderby' => 'meta_value', 'order' => 'ASC'));

			while ($leaderQuery->have_posts()) {

				$leaderQuery->the_post();
				$title = get_the_title();
				$position = get_post_meta($post->ID, 'leader-form-position', true);
				$content = get_the_content();
				$image = get_the_post_thumbnail($post->ID, 'small');
				$slug = $post->post_name;
?>
	 		<article id="<?php echo $slug; ?>" class="leader">
	 			<?php echo $image; ?>
	 			<div class="info">
	 				<h1><?php echo $title; ?></h1>
	 				<?php echo $content; ?>
	 			</div>
	 		</article>
<?php
 			}
?>
 		</div>

	</div>

<?php get_footer(); ?>