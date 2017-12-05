<?php
/**
 * The template for displaying author's bio
 *
 * @package WordPress
 * @subpackage Coeur
 * @since Coeur 2.0.7
 */
?>

<article <?php post_class(); ?>>
		<header>
			<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="blog-post-meta"><?php coeur_post_date(); ?> <a href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')); ?>" title="<?php the_title(); ?>"><?php echo get_the_date(); ?></a> <?php coeur_author(); ?> <?php coeur_cat(); ?><?php coeur_post_comments(); ?></p>
		</header>
		<div class="post-content">
			<?php the_excerpt(); ?>
		</div>
</article>