<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<div class="container">
	<div class="row">

		<main class="col-md-12 col-sm-12 col-xs-12">
			
			<?php while ( have_posts() ) : the_post();	?>

			<?php get_template_part('content', 'page'); ?>
			
			<?php if ( comments_open() || get_comments_number() ) { ?>
			<div id="com_container" class="comment-container">
				<?php comments_template('/framework/comments.php'); ?>
			</div>
			<?php } ?>

		<?php endwhile; ?>

		</main> <!-- blog-main -->

	</div> <!-- row -->
</div> <!-- container -->

<?php get_footer(); ?>