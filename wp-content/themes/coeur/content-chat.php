<?php
/**
 * The template for displaying chat post formats
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Coeur
 * @since Coeur 2.0.7
 */
?>

<article <?php post_class(); ?>>
	<header>
		<?php the_title( sprintf( '<h2 class="blog-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<p class="blog-post-meta"><?php coeur_post_date(); ?> <a href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')); ?>" title="<?php the_title(); ?>"><?php echo get_the_date(); ?></a> <?php coeur_author(); ?> <?php coeur_cat(); ?><?php coeur_post_comments(); ?></p>

		<?php coeur_post_thumbnail(); ?>
</header>
<div class="post-content">
		<?php the_content(); ?>
</div>
</article>