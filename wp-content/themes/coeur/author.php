<?php 
/**
* Author Page
* @package Coeur
* @author Titouanc
* @since 1.0
*/

get_header(); ?>

<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>

<div class="container">

  <div class="row">

    <div class="col-sm-12 blog-main">
      <?php $user_id = the_author_meta('ID', true); ?>
      <div class="post" style="overflow: hidden;">
        <?php $author_name = get_the_author(); ?>
        <?php $author_name = ucfirst($author_name); ?>
        <h2 class="h-header"><?php echo $author_name; ?></h2>
        <?php $vbio = get_the_author_meta('description'); ?>
        <?php if(empty($vbio)): ?>
        <p class="bio"><?php echo __('This author hasn\'t added his/her bio.', 'coeur'); ?></p>
      <?php else: ?>
      <p class="bio"><?php echo get_the_author_meta( 'description' ); ?></p>
    <?php endif; ?>
  </div>
  
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('content', 'author'); ?>
  <?php endwhile; ?>

  <?php coeur_paging(); ?>

</div> <!-- blog-main -->
</div> <!-- row -->
</div> <!-- container -->

<?php get_footer(); ?>