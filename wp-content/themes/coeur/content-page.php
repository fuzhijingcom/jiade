<article class="page">
	<header>
		<h1 class="h-header"><?php the_title(); ?></h1>

		<?php coeur_post_thumbnail(); ?>
	</header>
	<div class="bio post-content">
		<?php the_content(); ?>
	</div>

	<?php if(is_page()): ?>
		<?php  wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	<?php endif; ?>
</article>