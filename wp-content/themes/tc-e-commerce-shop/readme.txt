/*----------------------------------------------------------------------------*/
/* TC E-Commerce Shop Responsive WordPress Theme */
/*----------------------------------------------------------------------------*/

Theme Name      :   TC E-Commerce Shop
Theme URI       :   https://www.themescaliber.com/free/ecommerce-shop-wordpress-theme/
Version         :   0.3.2
Tested up to    :   WP 4.9
Author          :   ThemesCaliber
Author URI      :   https://www.themescaliber.com
license         :   GNU General Public License v3.0
License URI     :   http://www.gnu.org/licenses/gpl.html

/*----------------------------------------------------------------------------*/
/* About Author - Contact Details */
/*----------------------------------------------------------------------------*/

Email       	:   support@themescaliber.com

/*----------------------------------------------------------------------------*/
/* Features */
/*----------------------------------------------------------------------------*/

Manage Slider, services and footer from admin customizer theme setting section.

/*----------------------------------------------------------------------------*/
/* Home Page Setup Steps*/
/*----------------------------------------------------------------------------*/
Below are the steps to setup theme static page.
=========================================================

	Step 1. Create a page named as "home page" and select the template "Custom Home Page".

	Step 2. Go to customizer >> static front page >> check Static page, then select the page which you have added (for example "home page").

For Slider
==============

	Step 1. Create a page, add its title, content and featured image then publish it.

	Step 2. Go to customizer >> Theme Settings >> Slider settings >> here you can select the page which you have added.

For Featured Product
======================

	Step 1. Create a category in woocommerce products -> Category.

	Step 2. Add the product in this category.

	Step 3. Create a page, add the woocommerce category sortcode "[product_category category="category-name" columns="4"]" in the editor. Make sure it is in "Text" mode.

	Step 4. Go to customizer >> Theme Settings >> Featured Product >> here you can select the page which you have added. It will show that perticular categories products below the slider.


/*----------------------------------------------------------------------------*/
/* Theme Resources */
/*----------------------------------------------------------------------------*/

Theme is Built using the following resource bundles.

1 - All js that have been used are within folder /js of theme.
- jquery.nivo.slider.js, License: MIT, License Url: https://opensource.org/licenses/MIT
- Bootstrap.js => https://github.com/twbs/bootstrap/releases/download/v3.1.1/bootstrap-3.1.1-dist.zip
  Code and documentation copyright 2011-2016 Twitter, Inc. Code released under the MIT license. Docs released under Creative Commons.

2 - Open Sans font - https://www.google.com/fonts/specimen/Open+Sans
	PT Sans font - https://fonts.google.com/specimen/PT+Sans
	Roboto font - https://fonts.google.com/specimen/Roboto
	License: Distributed under the terms of the Apache License, version 2.0 http://www.apache.org/licenses/LICENSE-2.0.html

3 - Images used from Pixabay.
	Pixabay provides images under CC0 license (https://creativecommons.org/about/cc0)
	slider Image

	defaultbanner image
		https://www.pexels.com/photo/street-car-vehicle-blur-1459/		
		https://pixabay.com/en/fashion-woman-clothing-female-1623092/
		https://pixabay.com/en/sports-shoes-running-shoes-sneakers-115149/
		https://pixabay.com/en/goggles-black-white-background-1452181/
		https://pixabay.com/en/watch-corsair-vostok-europe-a7-1687073/

4	CSS bootstrap.css
	-- Code and documentation copyright 2011-2016 Twitter, Inc. Code released under the MIT license. Docs released under Creative Commons.
	CSS nivo-slider.css
	-- Copyright 2012, Dev7studios Free to use and abuse under the MIT license.
    -- http://www.opensource.org/licenses/mit-license.php
    Font-awesome.css
    --Font Awesome 4.3.0 by @davegandy - http://fontawesome.io - @fontawesome
 	License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)

5  Customizer Licence
	All code, unless otherwise noted, is licensed under the GNU GPL, version 2 or later.
	2016 © Justin Tadlock.

All the slider images taken from pixabay under Creative Commons Deed CC0 - https://pixabay.com/en/service/terms/

TC E-Commerce Shop Premium version
==========================================================
TC E-Commerce Shop Premium version is compatible with GPL licensed.

For any help you can mail us at support[at]themescaliber.com

Changelog
-----------

Version 0.1
	-- Initial Version Released
	
Version 0.2
	-- Styling Done

Version 0.3
	-- Error resolved.

Version 0.3.1
	Below are following resolved points:-
	-- On the all_the_cool_cats issue, the problem wasn't with the name of the variables, but with the name of the transient itself(sorry if I wasn't clear enough on it). Variables inside of your functions you can name however you like, but since the transient will be stored in the database, just like post meta, it needs to have a custom prefix. So the name of your transient(what you pass to get_transient() and set_transient()) should be tc_e_commerce_shop_all_the_cool_cats.

    --It seems like you accidentally removed the template-parts folder, so now I can't check the sticky post fix :)

    --The fix for the IE style is to simply remove the dependency(as that's what preventing the style from being enqueued). Here's the updated code: wp_enqueue_style('tc-e-commerce-shop-ie', get_template_directory_uri().'/css/ie.css');

    --On the screenshot and image licensing, you need to declare all images that are part of the screenshot. So not just the background image, but also the camera image, the woman, shoes, watch and sunglasses.

    --Also on the screenshot - I don't feel like it follows the requirement of being a reasonable representation of what the theme can look like. I'm going to highlight the specific issues that I'm seeing in terms of the screenshot vs the theme installed locally:

    --There's no way in the theme to hide the site title
    --There's no way to change any of the content over the slider background. The title and "Learn More" are automatically inserted over the featured image and centered.
    --The arrows are still not exactly like in the screenshot.
    --The styling of the products is not the same as in the screenshot
    --The red border(left, right and bottom), as well as the black bar on the bottom do not exist in the actual theme

Version 0.3.2
	Below are following resolved points:-
	-- In template-tags.php, you're still calling delete_transient( 'all_the_cool_cats' ); instead of delete_transient( 'tc_e_commerce_shop_all_the_cool_cats' );

	-- The instructions on how to setup the home page should be part of the readme, or otherwise implemented for the end-user to see(you can add descriptions to the Customizer sections for example). Adding the instructions to the readme will be enough in general.