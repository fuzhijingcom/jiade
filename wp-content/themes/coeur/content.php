<article <?php post_class(); ?>>
	<header>
		<?php the_title( sprintf( '<h2 class="blog-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<p class="blog-post-meta"><time class="post-meta-date"><?php coeur_post_date(); ?> <a href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')); ?>" title="<?php the_title(); ?>"><?php echo get_the_date(); ?></a></time> <?php coeur_author(); ?> <?php coeur_cat(); ?><?php coeur_post_comments(); ?></p>

		<?php coeur_post_thumbnail(); ?>
	</header>
	<div class="post-content">
		<?php if(get_theme_mod('post_content') == 'content' && !is_search() && !is_archive() && !is_single() ):
			/* translators: %s: Name of current post */
			the_content();
		elseif(is_single()):
			the_content();
		else: 
			the_excerpt();
		endif; ?>
	</div>
	<?php if(is_single()): ?>
		<p class="post-tags"><?php the_tags(); ?></p>
		<?php  wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	<?php endif; ?>
</article>