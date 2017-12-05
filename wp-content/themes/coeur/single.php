<?php 
/**
* Single Posts
* @package Coeur
* @author Titouanc
* @since 1.0
*/
get_header(); 
if(get_theme_mod('postlayout') == 'left'):
  $coeur_sidebar_float = 'style="float:left"';
  $coeur_content_float = 'style="float:right"';
  $coeur_md = 9;
  $coeur_sm = 8;
elseif(get_theme_mod('postlayout') == 'full_width'):
  $coeur_sidebar_float = 'style="display:none;"';
  $coeur_content_float = '';
  $coeur_md = 12;
  $coeur_sm = 12;
else:
  $coeur_sidebar_float = 'style="float:right"';
  $coeur_content_float = 'style="float:left"';
  $coeur_md = 9;
  $coeur_sm = 8;
endif; ?>

<div class="container">
	<div class="row">
		<main class="col-md-<?php echo $coeur_md; ?> col-sm-<?php echo $coeur_sm; ?> col-xs-12 single-content blog" <?php echo $coeur_content_float; ?>>

			<?php while ( have_posts() ) : the_post(); ?>

			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
			?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) : ?>
					<div id="com_container" class="comment-container">
						<?php comments_template('/framework/comments.php'); ?>
					</div>
				<?php endif;
			?>

			<?php endwhile; // end of the loop. ?>

		</main> <!-- blog-main -->

		<aside class="sidebar col-md-3 col-sm-4 col-xs-12" <?php echo $coeur_sidebar_float; ?>>
			<?php dynamic_sidebar('sidebar-1'); ?>
		</aside><!-- /.blog-sidebar -->
	</div> <!-- row -->
</div> <!-- container -->

<?php get_footer(); ?>