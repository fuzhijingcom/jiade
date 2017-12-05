<?php get_header(); 
if(get_theme_mod('bloglayout') == 'left'):
  $coeur_sidebar_float = 'style="float:left"';
  $coeur_content_float = 'style="float:right"';
  $coeur_md = 9;
  $coeur_sm = 8;
elseif(get_theme_mod('bloglayout') == 'full_width'):
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

    <main class="col-md-<?php echo $coeur_md; ?> col-sm-<?php echo $coeur_sm; ?> col-xs-12 blog" <?php echo $coeur_content_float; ?>>

      <?php if ( have_posts() ) : ?>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php
          /* Include the Post-Format-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
           */
          get_template_part( 'content', 'category' );
        ?>

      <?php endwhile; ?>

      <?php coeur_paging(); ?>

    <?php else : ?>

      <article class="post">
          <div class="notfound">
            <h1><?php echo __('404', 'coeur'); ?></h1>
            <p><?php echo __('Nothing\'s here.', 'coeur'); ?></p>
            <?php get_search_form(); ?>
          </div>
      </article>

    <?php endif; ?>

  </main><!-- /.blog-main -->


<aside class="sidebar col-md-3 col-sm-4 col-xs-12" <?php echo $coeur_sidebar_float; ?>>
  <?php dynamic_sidebar('sidebar-1'); ?>
</aside><!-- /.blog-sidebar -->


</div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>