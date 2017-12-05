<?php
/**
 * The template for displaying home page.
 *
 * Template Name: Custom Home Page
 *
 * @package TC E-Commerce Shop
 */

get_header(); ?>

<?php /** slider section **/ ?>
<?php
	// Get pages set in the customizer (if any)
	$pages = array();
	for ( $count = 1; $count <= 5; $count++ ) {
		$mod = intval( get_theme_mod( 'tc_e_commerce_shop_slidersettings-page-' . $count ) );
		if ( 'page-none-selected' != $mod ) {
			$pages[] = $mod;
		}
	}
	if( !empty($pages) ) :
		$args = array(
			'posts_per_page' => 5,
			'post_type' => 'page',
			'post__in' => $pages,
			'orderby' => 'post__in'
		);
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) :
			$count = 1;
			?>
			<div class="slider-main">
				<div id="slider" class="nivoSlider">
					<?php
						$tc_e_commerce_shop_n = 0;
					while ( $query->have_posts() ) : $query->the_post();
							
							$tc_e_commerce_shop_n++;
							$tc_e_commerce_shop_slideno[] = $tc_e_commerce_shop_n;
							$tc_e_commerce_shop_slidetitle[] = get_the_title();
							$tc_e_commerce_shop_slidelink[] = esc_url(get_permalink());
							?>
								<img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $tc_e_commerce_shop_n ); ?>" />
							<?php
						$count++;
					endwhile;
						wp_reset_postdata();
					?>
				</div>

				<?php
				$tc_e_commerce_shop_k = 0;
			    foreach( $tc_e_commerce_shop_slideno as $tc_e_commerce_shop_sln ){ ?>
					<div id="slidecaption<?php echo esc_attr( $tc_e_commerce_shop_sln ); ?>" class="nivo-html-caption">
						<div class="slide-cap  ">
							<div class="container">
								<h2><?php echo esc_html( $tc_e_commerce_shop_slidetitle[$tc_e_commerce_shop_k] ); ?></h2>
								<a class="read-more" href="<?php echo esc_url( $tc_e_commerce_shop_slidelink[$tc_e_commerce_shop_k] ); ?>"><?php  esc_html_e( 'Learn More','tc-e-commerce-shop' ); ?></a>
							</div>
						</div>
					</div>
		    	<?php $tc_e_commerce_shop_k++;
				} ?>
			</div>
		<?php else : ?>
				<div class="header-no-slider"></div>
			<?php
		endif;
	else : ?>
			<div class="header-no-slider"></div>
		<?php
	endif;
?>

<section id="our-products">
	<div class="container">
        <?php if( get_theme_mod('tc_e_commerce_shop_sec1_title') != ''){ ?>     
            <h3><?php echo esc_html(get_theme_mod('tc_e_commerce_shop_sec1_title',__('Men Products','tc-e-commerce-shop'))); ?></h3>
        <?php }?>
		<div class="col-md-12">
			<?php $pages = array();
			for ( $count = 0; $count <= 0; $count++ ) {
				$mod = intval( get_theme_mod( 'tc_e_commerce_shop_servicesettings-page-' . $count ));
				if ( 'page-none-selected' != $mod ) {
				  $pages[] = $mod;
				}
			}
			if( !empty($pages) ) :
			  $args = array(
			    'post_type' => 'page',
			    'post__in' => $pages,
			    'orderby' => 'post__in'
			  );
			  $query = new WP_Query( $args );
			  if ( $query->have_posts() ) :
			    $count = 0;
					while ( $query->have_posts() ) : $query->the_post(); ?>
					    <div class="box-image">
					        <p><?php the_content(); ?></p>
					        <div class="clearfix"></div>
					    </div>
					<?php $count++; endwhile; ?>
			  <?php else : ?>
			      <div class="no-postfound"></div>
			  <?php endif;
			endif;?>
		    <div class="clearfix"></div>
		</div>
	</div>
</section>

<?php get_footer(); ?>