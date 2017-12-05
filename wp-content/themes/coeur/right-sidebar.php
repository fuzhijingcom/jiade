<?php
/*
Template Name: Right Sidebar
*/
get_header(); ?>

<div class="container">
	<div class="row">

		<main class="col-md-9 col-sm-8 col-xs-12" style="float:left">
			
			<?php while ( have_posts() ) : the_post();	?>

			<?php get_template_part('content', 'page'); ?>
			
			<?php if ( comments_open() || get_comments_number() ) { ?>
			<div id="com_container" class="comment-container">
				<?php comments_template('/framework/comments.php'); ?>
			</div>
			<?php } ?>

		<?php endwhile; ?>

		</main> <!-- blog-main -->

		<aside class="sidebar col-md-3 col-sm-4 col-xs-12" style="float:right">
			<?php dynamic_sidebar('sidebar-1'); ?>
		</aside><!-- /.blog-sidebar -->
	</div> <!-- row -->
</div> <!-- container -->

<?php get_footer(); ?>