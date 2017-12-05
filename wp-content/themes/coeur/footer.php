<!-- <button class="mobileCart">
	<i class="fa fa-shopping-cart"></i>
</button> -->

<footer>
	<?php if(is_active_sidebar('footer-1') or is_active_sidebar('footer-2') or is_active_sidebar('footer-3')): ?>
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
				<div class="col-sm-4 md-footer-cl">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
				<div class="col-sm-4">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="blog-footer blog-footer-widgets">
		<div class="container">
			<p class="site-credits">&copy; <?php echo date('Y'); ?> - <?php echo get_theme_mod('footer_copy', '<a href="'.esc_url('http://frenchtastic.eu').'">Design by Frenchtastic.eu</a>'); ?></p>
			<p class="back-to-top"><a href="#"><i class="fa fa-angle-up"></i> <?php echo __('Back to top', 'coeur'); ?><a></p>
		</div>
	</div>
	<?php else: ?>
	<div class="blog-footer">
		<div class="container">
			<p class="site-credits">&copy; <?php echo date('Y'); ?> - <?php echo get_theme_mod('footer_copy', '<a href="'.esc_url('http://frenchtastic.eu').'">Design by Frenchtastic.eu</a>'); ?></p>
			<p class="back-to-top"><a href="#"><i class="fa fa-angle-up"></i> <?php echo __('Back to top', 'coeur'); ?><a></p>
		</div>
	</div>
	<?php endif; ?>
</footer>

</div> <!-- end of wrap -->

<?php wp_footer(); ?>
</body>
</html>