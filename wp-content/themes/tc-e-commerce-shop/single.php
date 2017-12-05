<?php
/**
 * The Template for displaying all single posts.
 *
 * @package TC E-Commerce Shop
 */

get_header(); ?>
<div class="middle-align">
	<div class="container">
		<?php
            $left_right = get_theme_mod( 'tc_e_commerce_shop_theme_options','One Column');
            if($left_right == 'Left Sidebar'){ ?>
			<div class="col-md-4 col-sm-4"><?php get_sidebar();?></div>
			<div class="col-md-8 col-sm-8" id="content-aa">
				<?php while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<div class="metabox">
						<span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date(); ?><?php echo esc_html(get_the_date() ); ?></span>
						<span class="entry-author"><i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
						<span class="entry-comments"><i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( __('0 Comments','tc-e-commerce-shop'), __('0 Comments','tc-e-commerce-shop'), __('% Comments','tc-e-commerce-shop') ); ?> </span>
					</div><!-- metabox -->
					<?php if(has_post_thumbnail()) { ?>
						<hr>
						<div class="feature-box">	
							<img src="<?php the_post_thumbnail_url('full'); ?>"  width="100%">
						</div>
						<hr>					
					<?php } the_content();
					the_tags(); ?>
	                <div class="clearfix"></div> 
	             
	                <?php
	                 wp_link_pages( array(
	                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tc-e-commerce-shop' ) . '</span>',
	                    'after'       => '</div>',
	                    'link_before' => '<span>',
	                    'link_after'  => '</span>',
	                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tc-e-commerce-shop' ) . ' </span>%',
	                    'separator'   => '<span class="screen-reader-text">, </span>',
	                ) );
	                // If comments are open or we have at least one comment, load up the comment template
	                if ( comments_open() || '0' != get_comments_number() )
	                    comments_template();
	                
	                if ( is_singular( 'attachment' ) ) {
						// Parent post navigation.
						the_post_navigation( array(
							'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'tc-e-commerce-shop' ),
						) );
					} elseif ( is_singular( 'post' ) ) {
						// Previous/next post navigation.
						the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="post-title">%title</span>',
						) );
					}
				endwhile; // end of the loop. ?>
	       	</div>
	    <?php }else if($left_right == 'Right Sidebar'){ ?>
	       	<div class="col-md-8 col-sm-8" id="content-aa">
				<?php while ( have_posts() ) : the_post(); ?>
					<h3><?php the_title(); ?></h3>
					<div class="metabox">
						<span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date(); ?><?php echo esc_html(get_the_date() ); ?></span>
						<span class="entry-author"><i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
						<span class="entry-comments"><i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( __('0 Comments','tc-e-commerce-shop'), __('0 Comments','tc-e-commerce-shop'), __('% Comments','tc-e-commerce-shop') ); ?> </span>
					</div><!-- metabox -->
					<?php if(has_post_thumbnail()) { ?>
						<hr>
						<div class="feature-box">	
							<img src="<?php the_post_thumbnail_url('full'); ?>"  width="100%">
						</div>
						<hr>					
					<?php } the_content();
					the_tags(); ?>
	                <div class="clearfix"></div> 	             
	                <?php
	                 wp_link_pages( array(
	                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tc-e-commerce-shop' ) . '</span>',
	                    'after'       => '</div>',
	                    'link_before' => '<span>',
	                    'link_after'  => '</span>',
	                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tc-e-commerce-shop' ) . ' </span>%',
	                    'separator'   => '<span class="screen-reader-text">, </span>',
	                ) );
	                // If comments are open or we have at least one comment, load up the comment template
	                if ( comments_open() || '0' != get_comments_number() )
	                    comments_template();
	                
	                if ( is_singular( 'attachment' ) ) {
						// Parent post navigation.
						the_post_navigation( array(
							'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'tc-e-commerce-shop' ),
						) );
					} elseif ( is_singular( 'post' ) ) {
						// Previous/next post navigation.
						the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="post-title">%title</span>',
						) );
					}
				endwhile; // end of the loop. ?>
	       	</div>
			<div class="col-md-4 col-sm-4"><?php get_sidebar();?></div>
		<?php }else if($left_right == 'One Column'){ ?>
			<div class="col-md-12" id="content-aa">
				<?php while ( have_posts() ) : the_post(); ?>
					<h3><?php the_title(); ?></h3>
					<div class="metabox">
						<span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date(); ?><?php echo esc_html(get_the_date() ); ?></span>
						<span class="entry-author"><i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
						<span class="entry-comments"><i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( __('0 Comments','tc-e-commerce-shop'), __('0 Comments','tc-e-commerce-shop'), __('% Comments','tc-e-commerce-shop') ); ?> </span>
					</div><!-- metabox -->
					<?php if(has_post_thumbnail()) { ?>
						<hr>
						<div class="feature-box">	
							<img src="<?php the_post_thumbnail_url('full'); ?>"  width="100%">
						</div>
						<hr>					
					<?php } the_content();
					the_tags(); ?>
	                <div class="clearfix"></div> 
	             
	                <?php
	                 wp_link_pages( array(
	                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tc-e-commerce-shop' ) . '</span>',
	                    'after'       => '</div>',
	                    'link_before' => '<span>',
	                    'link_after'  => '</span>',
	                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tc-e-commerce-shop' ) . ' </span>%',
	                    'separator'   => '<span class="screen-reader-text">, </span>',
	                ) );
	                // If comments are open or we have at least one comment, load up the comment template
	                if ( comments_open() || '0' != get_comments_number() )
	                    comments_template();
	                
	                if ( is_singular( 'attachment' ) ) {
						// Parent post navigation.
						the_post_navigation( array(
							'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'tc-e-commerce-shop' ),
						) );
					} elseif ( is_singular( 'post' ) ) {
						// Previous/next post navigation.
						the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="post-title">%title</span>',
						) );
					}
				endwhile; // end of the loop. ?>
	       	</div>
	    <?php }else if($left_right == 'Three Columns'){ ?>
	       	<div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
	       	<div class="col-md-6 col-sm-6" id="content-aa">
				<?php while ( have_posts() ) : the_post(); ?>
					<h3><?php the_title(); ?></h3>
					<div class="metabox">
						<span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date(); ?><?php echo esc_html(get_the_date() ); ?></span>
						<span class="entry-author"><i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
						<span class="entry-comments"><i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( __('0 Comments','tc-e-commerce-shop'), __('0 Comments','tc-e-commerce-shop'), __('% Comments','tc-e-commerce-shop') ); ?> </span>
					</div><!-- metabox -->
					<?php if(has_post_thumbnail()) { ?>
						<hr>
						<div class="feature-box">	
							<img src="<?php the_post_thumbnail_url('full'); ?>"  width="100%">
						</div>
						<hr>					
					<?php } the_content();
					the_tags(); ?>
	                <div class="clearfix"></div> 
	             
	                <?php
	                 wp_link_pages( array(
	                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tc-e-commerce-shop' ) . '</span>',
	                    'after'       => '</div>',
	                    'link_before' => '<span>',
	                    'link_after'  => '</span>',
	                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tc-e-commerce-shop' ) . ' </span>%',
	                    'separator'   => '<span class="screen-reader-text">, </span>',
	                ) );
	                // If comments are open or we have at least one comment, load up the comment template
	                if ( comments_open() || '0' != get_comments_number() )
	                    comments_template();
	                
	                if ( is_singular( 'attachment' ) ) {
						// Parent post navigation.
						the_post_navigation( array(
							'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'tc-e-commerce-shop' ),
						) );
					} elseif ( is_singular( 'post' ) ) {
						// Previous/next post navigation.
						the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="post-title">%title</span>',
						) );
					}
				endwhile; // end of the loop. ?>
	       	</div>
			<div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
		<?php }else if($left_right == 'Four Columns'){ ?>
			<div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
	       	<div class="col-md-3 col-sm-3" id="content-aa">
				<?php while ( have_posts() ) : the_post(); ?>
					<h3><?php the_title(); ?></h3>
					<div class="metabox">
						<span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date(); ?><?php echo esc_html(get_the_date() ); ?></span>
						<span class="entry-author"><i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
						<span class="entry-comments"><i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( __('0 Comments','tc-e-commerce-shop'), __('0 Comments','tc-e-commerce-shop'), __('% Comments','tc-e-commerce-shop') ); ?> </span>
					</div><!-- metabox -->
					<?php if(has_post_thumbnail()) { ?>
						<hr>
						<div class="feature-box">	
							<img src="<?php the_post_thumbnail_url('full'); ?>"  width="100%">
						</div>
						<hr>					
					<?php } the_content();
					the_tags(); ?>
	                <div class="clearfix"></div>	             
	                <?php
	                 wp_link_pages( array(
	                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tc-e-commerce-shop' ) . '</span>',
	                    'after'       => '</div>',
	                    'link_before' => '<span>',
	                    'link_after'  => '</span>',
	                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tc-e-commerce-shop' ) . ' </span>%',
	                    'separator'   => '<span class="screen-reader-text">, </span>',
	                ) );
	                // If comments are open or we have at least one comment, load up the comment template
	                if ( comments_open() || '0' != get_comments_number() )
	                    comments_template();
	                
	                if ( is_singular( 'attachment' ) ) {
						// Parent post navigation.
						the_post_navigation( array(
							'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'tc-e-commerce-shop' ),
						) );
					} elseif ( is_singular( 'post' ) ) {
						// Previous/next post navigation.
						the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="post-title">%title</span>',
						) );
					}
				endwhile; // end of the loop. ?>
	       	</div>
			<div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
			<div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-3' ); ?></div>
        <?php }else if($left_right == 'Grid Layout'){ ?>
			<div class="col-md-8 col-sm-8" id="content-aa">
				<?php while ( have_posts() ) : the_post(); ?>
					<h3><?php the_title(); ?></h3>
					<div class="metabox">
						<span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date(); ?><?php echo esc_html(get_the_date() ); ?></span>
						<span class="entry-author"><i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
						<span class="entry-comments"><i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( __('0 Comments','tc-e-commerce-shop'), __('0 Comments','tc-e-commerce-shop'), __('% Comments','tc-e-commerce-shop') ); ?> </span>
					</div><!-- metabox -->
					<?php if(has_post_thumbnail()) { ?>
						<hr>
						<div class="feature-box">	
							<img src="<?php the_post_thumbnail_url('full'); ?>"  width="100%">
						</div>
						<hr>					
					<?php } the_content();
					the_tags(); ?>
	                <div class="clearfix"></div>	             
	                <?php
	                 wp_link_pages( array(
	                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tc-e-commerce-shop' ) . '</span>',
	                    'after'       => '</div>',
	                    'link_before' => '<span>',
	                    'link_after'  => '</span>',
	                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tc-e-commerce-shop' ) . ' </span>%',
	                    'separator'   => '<span class="screen-reader-text">, </span>',
	                ) );
	                // If comments are open or we have at least one comment, load up the comment template
	                if ( comments_open() || '0' != get_comments_number() )
	                    comments_template();
	                
	                if ( is_singular( 'attachment' ) ) {
						// Parent post navigation.
						the_post_navigation( array(
							'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'tc-e-commerce-shop' ),
						) );
					} elseif ( is_singular( 'post' ) ) {
						// Previous/next post navigation.
						the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'tc-e-commerce-shop' ) . '</span> ' .
								'<span class="post-title">%title</span>',
						) );
					}
				endwhile; // end of the loop. ?>
	       	</div>
			<div class="col-md-4 col-sm-4"><?php get_sidebar();?></div>
        <?php } ?>
        <div class="clearfix"></div>
    </div>
</div>
<?php get_footer(); ?>