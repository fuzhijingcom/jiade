<?php
/**
 * The template for displaying search forms in TC E-Commerce Shop
 *
 * @package TC E-Commerce Shop
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder', 'tc-e-commerce-shop' ); ?>" value="<?php echo  get_search_query(); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'tc-e-commerce-shop' ); ?>">
</form>
