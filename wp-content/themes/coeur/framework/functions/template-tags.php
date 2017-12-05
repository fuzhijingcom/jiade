<?php
/**
 * Custom template tags.
 *
 * @package Coeur
 * @author Frenchtastic
 */

if ( ! function_exists( 'coeur_post_thumbnail' ) ) :
/**
 * Display an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 *
 * @since Coeur 2.0.7
 */
function coeur_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	} elseif(has_post_thumbnail()) { ?>
		<?php if(get_theme_mod('thumbnail_link', true ) != false && is_single() == '' ): ?>
        	<div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
      	<?php else: ?>
        	<div class="post-thumbnail"><?php the_post_thumbnail(); ?></div>
      	<?php endif; ?>
	<?php } else {
		return;
	}
}
endif;

if ( ! function_exists( 'coeur_get_link_url' ) ) :
/**
* Return the post URL.
* Falls back to the post permalink if no URL is found in the post.
* @since Coeur 2.0.7
* @see get_url_in_content()
* @return string The Link format URL.
*/
function coeur_get_link_url() {
  $has_url = get_url_in_content( get_the_content() );

  return $has_url ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}
endif;

/**
* Paging
*
* @author Frenchtastic.eu
*/
function coeur_paging( $query=null ) {

  global $wp_query;
  $query = $query ? $query : $wp_query;
  $big = 999999999;

  $paginate = paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'type' => 'array',
    'total' => $query->max_num_pages,
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'prev_text' => __('&laquo;', 'coeur'),
    'next_text' => __('&raquo;', 'coeur'),
    )
  );

  if ($query->max_num_pages > 1) :
    ?>
  <ul class="pagination">
    <?php
    foreach ( $paginate as $page ) {
      echo '<li>' . $page . '</li>';
    }
    ?>
  </ul>
  <?php
  endif;
}

// Extra Functions
add_filter('next_post_link', 'coeur_post_link_attributes');
add_filter('previous_post_link', 'coeur_post_link_attributes');

function coeur_post_link_attributes($output) {
  $injection = 'class="blog-nav-item"';
  return str_replace('<a href=', '<a '.$injection.' href=', $output);
}

function coeur_post_comments(){
  if(get_theme_mod( 'show_post_comments', false ) == true){
    echo comments_number(', 0 comments', ', 1 comment', ', % comments');
  }
}

function coeur_commentCount(){
  global $post;
  $coeur_the_id = $post->ID;
  $coeur_thepost= get_post($id= $coeur_the_id);
  $coeur_comment_count = $coeur_thepost->comment_count;

  echo '<li class="comment-count"><a href="#com_container" data-placement="bottom" rel="tooltip" title="' . __('Show Comments', 'coeur') . '"><i class="fa fa-comment"></i> ' .$coeur_comment_count.'</a></li>';
}

function coeur_previousPost() {
  $coeur_prev_post = get_previous_post();
  if(!empty($coeur_prev_post)){
    echo '<li class="previous-post"><a href="'.get_permalink( $coeur_prev_post->ID).'"><i class="fa fa-angle-down"></i> '. __('Previous Post', 'coeur') .'</a></li>';
  }
}

function coeur_nextPost() {
  $coeur_next_post = get_next_post();
  if(!empty($coeur_next_post)){
    echo '<li class="next-post"><a href="'.get_permalink( $coeur_next_post->ID).'">'. __('Next Post', 'coeur') .' <i class="fa fa-angle-up"></i></a></li>';
  }
}

function coeur_authorLink(){
  global $post;
  $coeur_author_id = $post->post_author;
  $coeur_author_name = get_the_author_meta( 'display_name', $coeur_author_id );
  $coeur_author_name = ucfirst($coeur_author_name);
  $coeur_author_url = get_author_posts_url( $post->post_author );

  echo '<li class="author-name"><a href="'.$coeur_author_url.'" data-placement="bottom" rel="tooltip" title="' . __('Author\'s profile', 'coeur') . '"><i class="fa fa-user" style="margin-right: 6px;"></i>'.$coeur_author_name.'</a></li>';
}

/**
* Displays search icon in navbar if set to true in Customizer
* @since Coeur 3.0.3
* @author Frenchtastic
*/ 
function coeur_display_search() {
  if( get_theme_mod( 'show_searchicon', true ) != false ) {
    echo '<ul id="menu-menu-1" class="nav navbar-nav">';
      echo '<li class="home-link menu-item menu-item-type-post_type menu-item-object-page">';
        echo '<a id="search_toggle" href="javascript:void(null)"><i class="fa fa-search"></i></a>';
      echo '</li>';
      echo '<div class="search-box">';
        echo get_search_form();
      echo '</div>';
    echo '</ul>';
  }
}

/**
* Display search icon if set to true in Customizer
* @since Coeur 3.0.3
* @author Frenchtastic
*/
function coeur_display_mobileSearch() {
  if( get_theme_mod( 'show_searchicon', true ) != false ) {
    echo '<div class="mobile-search">';
    echo get_search_form();;
    echo '</div>';
  }
}

/**
* Get current user firstname
* @since Coeur 3.0.3
* @author Frenchtastic
*/
function coeur_get_firstname() {
  if ( is_user_logged_in() ) {
    $coeur_current_user = wp_get_current_user();
    $coeur_current_firstname = $coeur_current_user->user_firstname;

    if ( $coeur_current_firstname != '' ) {
      return $coeur_current_firstname;
    }
  }
}

/**
* Get current user lastname
* @since Coeur 3.0.3
* @author Frenchtastic
*/
function coeur_get_lastname() {
  if ( is_user_logged_in() ) {
    $coeur_current_user = wp_get_current_user();
    $coeur_current_lastname = $coeur_current_user->user_lastname;

    if ( $coeur_current_lastname != '' ) {
      return $coeur_current_lastname;
    }
  }
}

/**
* Shows post author link if set to in settings
* @author Frenchtastic
* @since Coeur 1.7
*/
function coeur_author(){
  global $post;
  $coeur_author_id = $post->post_author;
  $coeur_author_name = get_the_author_meta( 'display_name', $coeur_author_id );
  $coeur_author_name = ucfirst($coeur_author_name);
  $coeur_author_url = get_author_posts_url( $post->post_author );

  if (get_theme_mod( 'show_author', false ) == true ){
    echo __('by', 'coeur'), '<a href="'.$coeur_author_url.'"> '.$coeur_author_name.'</a>';
  }
}

/**
* Changes text preceding the post date
* @author Frenchtastic
* @since Coeur 1.7
*/
function coeur_post_date(){
  $coeur_meta = get_theme_mod('meta_posted');

  if (empty($coeur_meta)){
    echo __('Posted on', 'coeur');
  } else {
    echo esc_html( $coeur_meta );
  }
}

/**
* Displays categories if set to do so in settings
* @author Frenchtastic
* @author Nickweb
* @since Coeur 1.7
*/
function coeur_cat(){
      global $post;
      $categories = get_the_category($post->ID);
      $separator = ', ';
      $output = 'in ';
      if($categories && get_theme_mod( 'show_cat', false ) == true){
        foreach($categories as $category) {
          $output .= ' <a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( 'View all posts in %s', 'coeur' ), $category->name ) ) . '"> '.$category->cat_name.'</a>'.$separator;
        }
        echo trim($output, $separator);
      }
}

/**
* Change the excerpt length
* 
* @since Coeur 3.0
* @author Frenchtastic
*/
function coeur_excerpt_length( $length ) {
  
  $excerpt = get_theme_mod('coeur_excerpt_lenght', '70');
  return $excerpt;

}
add_filter( 'excerpt_length', 'coeur_excerpt_length', 999 );

/**
* Read more link
* @since Coeur 1.0
* @author Frenchtastic
*/
function coeur_read_more( $more ) {
  return '.. <a href="'.get_permalink( get_the_ID() ).'">'.__('Read More', 'coeur').'</a>';
}
add_filter('excerpt_more', 'coeur_read_more');

add_filter('wp_list_categories', 'coeur_count_span');
function coeur_count_span($links) {
  $links = str_replace('</a> (', '</a> <span class="cat-count">', $links);
    $links = str_replace(')', '</span>', $links);
    return $links;
}