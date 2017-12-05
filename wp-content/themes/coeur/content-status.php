<?php
/**
 * The template for displaying status post formats
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Coeur
 * @since Coeur 2.0.7
 */
?>

<article <?php echo post_class(); ?>>
	<p class="blog-post-meta"><?php coeur_post_date(); ?> <a href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')); ?>" title="<?php the_title(); ?>"><?php echo get_the_date(); ?></a> <?php coeur_author(); ?> <?php coeur_cat(); ?><?php coeur_post_comments(); ?></p>
	<div class="post-content">
			<?php the_content(); ?>
	</div>
</article>