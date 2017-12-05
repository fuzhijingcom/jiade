<?php
/**
 * The template for displaying video post formats
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Coeur
 * @since Coeur 2.0.7
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( sprintf( '<h2 class="blog-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<p class="blog-post-meta"><time class="post-meta-date"><?php coeur_post_date(); ?> <a href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')); ?>" title="<?php the_title(); ?>"><?php echo get_the_date(); ?></a></time> <?php coeur_author(); ?> <?php coeur_cat(); ?><?php coeur_post_comments(); ?></p>
	</header>
	<div id="video-frame">
		<?php the_content(); ?>
	</div>
	<?php if(is_single()): ?>
		<p class="post-tags"><?php the_tags(); ?></p>
		<?php  wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	<?php endif; ?>
</article>