<?php
/**
 * The template for displaying quote post formats
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Coeur
 * @since Coeur 2.0.7
 */
?>

<article <?php post_class(); ?>>
	<div class="quote-icon text-center">
		<a href="<?php the_permalink(); ?>"><i class="fa fa-quote-right fa-3x"></i></a>
	</div>
	<blockquote class="post-quote">
		<a href="<?php echo the_permalink(); ?>">&#8220;<?php echo strip_tags(get_the_content()); ?>&#8221;</a>
		<p class="quote-author"><?php the_title( '&#8211; ' ); ?></p>
	</blockquote>
</article>