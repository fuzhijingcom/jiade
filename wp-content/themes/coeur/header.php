<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php if(  get_theme_mod( 'favicon_option' ) != '' ): ?>
    <link rel="shortcut icon" href="<?php echo esc_url( get_theme_mod( 'favicon_option' ) ); ?>" type="image/png" />
  <?php endif; ?>

  <?php if(  get_theme_mod( 'bookmark_other' ) != '' ): ?>
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_theme_mod( 'bookmark_other' ) ); ?>">
  <?php endif; ?>

  <?php if(  get_theme_mod( 'bookmark_iphone' ) != '' ): ?>
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( get_theme_mod( 'bookmark_iphone' ) ); ?>">
  <?php endif; ?>

  <?php if(  get_theme_mod( 'bookmark_ipad' ) != '' ): ?>
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( get_theme_mod( 'bookmark_ipad' ) ); ?>">
  <?php endif; ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div id="wrap">

  <div class="blog-header" style="background-image:url('<?php header_image(); ?>');background-size: cover;background-repeat: no-repeat;background-position: center;">

    <div class="container">
      <div class="site-meta">
        <?php if ( get_theme_mod( 'coeur_logo' ) ) : ?>
        <div class='site-logo'>
          <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'coeur_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
        </div>
      <?php else : ?>
      <h1 id="site-title" class="blog-title"><a href="<?php echo esc_url( home_url() ) ?>"><?php bloginfo('name'); ?></a></h1>
    <?php endif; ?>
    <?php if ( display_header_text() ) : ?>
    <p class="site-description"><?php echo get_bloginfo( 'description', 'raw' ); ?></p>
  <?php endif; ?>
</div>
</div>

<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <?php if(is_single() && get_theme_mod('single_menu_header', false) != true && coeur_is_product() != true ): ?>
    <div id="bs-example-navbar-collapse-2" class="collapse navbar-collapse">
      <ul id="menu-menu-1" class="nav navbar-nav">
       <li class="menu-item">
        <a class="home-post-link" href="<?php echo get_site_url(); ?>"><i class="fa fa-home"></i></a>
      </li>
      <?php coeur_previousPost(); ?>
      <?php coeur_nextPost(); ?>
    </ul>
    <ul id="menu-menu-1" class="nav navbar-nav pull-right">
      <?php if(get_comments_number() != 0): 
      coeur_commentCount();
      endif;
      ?>
      <?php coeur_authorLink(); ?>
    </ul>
  </div>
<?php else: ?>


  <?php 
    // Display search icon if set to true in Customizer
  coeur_display_search();
    // Display link to account & cart if WooCommerce is activated
  coeur_woocommerce_links();
  ?>

  <?php // The menu
  wp_nav_menu( array(
    'theme_location'    => 'primary',
    'depth'             => 2,
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse',
    'container_id'      => 'bs-example-navbar-collapse-1',
    'menu_class'        => 'nav navbar-nav navbar-primary',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker())
  );
  ?>

<?php endif; ?>
</div>
</nav>

<!-- Mobile Menu -->
<nav class="navbar navbar-default mobile-menu" role="navigation">
  <div class="container">
    <button class="mobile-search-icon" type="button" data-toggle="modal" data-target="#myModal">
      <i class="fa fa-search"></i>
    </button>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="mobile-toggle navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-navbar-collapse">
        <span class="sr-only"><?php echo __('Toggle navigation', 'coeur'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <?php
    wp_nav_menu( array(
      'theme_location'    => 'mobile',
      'depth'             => 2,
      'container'         => 'div',
      'container_class'   => 'collapse navbar-collapse',
      'container_id'      => 'mobile-navbar-collapse',
      'menu_class'        => 'nav navbar-nav',
      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
      'walker'            => new wp_bootstrap_navwalker())
    );
    ?>
  </div>

  <!-- Mobile Search -->
  <?php coeur_display_mobileSearch(); ?>

</nav>
</div>