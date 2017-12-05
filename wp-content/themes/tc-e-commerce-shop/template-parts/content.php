<?php
/**
 * The template part for displaying slider
 *
 * @package TC E-Commerce Shop
 * @subpackage tc_e_commerce_shop
 * @since TC E-Commerce Shop 1.0
 */
?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="postbox smallpostimage">
        <?php 
            if(has_post_thumbnail()) { ?>
        <div class="box-image col-md-5">
              <?php the_post_thumbnail();  ?>
        </div>
        <?php } ?>
        <div class="new-text <?php 
            if(has_post_thumbnail()) { ?>col-md-7"<?php } else { ?>col-md-12"<?php } ?>>
            <div class="wow bounceInUp box-content">
                <h4><?php the_title();?></h4>
                <div class="metabox">
                    <span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date(); ?></span>
                    <span class="entry-author"><i class="fa fa-user" aria-hidden="true"></i><?php the_author(); ?></span>
                    <span class="entry-comments"><i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( __('0 Comments','tc-e-commerce-shop'), __('0 Comments','tc-e-commerce-shop'), __('% Comments','tc-e-commerce-shop') ); ?></span>
                </div>
                <p><?php echo the_excerpt(); ?></p>
                <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right" title="<?php esc_attr_e( 'Read Full', 'tc-e-commerce-shop' ); ?>"><?php esc_html_e('Read Full','tc-e-commerce-shop'); ?></a>
            </div>
        </div>
        <div class="clearfix"></div> 
    </div> 
  </div>