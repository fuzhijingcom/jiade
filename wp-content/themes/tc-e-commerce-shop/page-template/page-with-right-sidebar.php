<?php
/**
 * Template Name:Page with Right Sidebar
 */

get_header(); ?>

<div class="container">
    <div class="middle-align">       
		<div class="col-md-8" id="content-aa" >
			<?php while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title();?></h1>
                <?php the_content();
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'tc-e-commerce-shop' ),
                    'after'  => '</div>',
                ) );
                
                //If comments are open or we have at least one comment, load up the comment template
                	if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>
             
        </div>

        <div class="col-md-4" id="sidebar">
			<?php dynamic_sidebar('sidebar-2'); ?>
		</div>        
        <div class="clearfix"></div>        
    </div>
</div>
<?php get_footer(); ?>