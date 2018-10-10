<?php
/*
 *  Author: Todd Motto | @toddmotto && Nick Bourne
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */


/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

}

/*------------------------------------*\
	Functions
\*------------------------------------*/

function nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load  scripts (header.php)
function header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr');

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr');
        //
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('jquery');

        wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/jquery.gsap.min.js' , array(), '1.0.0');
        wp_enqueue_script('gsap');

        wp_register_script('tween', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js' , array(), '1.0.0');
        wp_enqueue_script('tween');

        wp_register_script('scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js' , array(), '1.0.0');
        wp_enqueue_script('scrollmagic');

        wp_register_script('drawSVG',  get_template_directory_uri() . '/js/lib/DrawSVGPlugin.min.js' , array(), '1.0.0');
        wp_enqueue_script('drawSVG');

        wp_register_script('animationgsap', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js' , array(), '1.0.0');
        wp_enqueue_script('animationgsap');

        wp_register_script('indicatorsgsap', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js' , array(), '1.0.0');
        wp_enqueue_script('indicatorsgsap');

        wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0');
        wp_enqueue_script('scripts');
    }
}

// Load styles
function styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize');

    wp_register_style('bootgrid', get_template_directory_uri() . '/css/bootstrap-grid.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootgrid');

    wp_register_style('materialdesign', 'https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css', array(), '1.0', 'all');
    wp_enqueue_style('materialdesign');

    wp_register_style('custom', get_template_directory_uri() . '/css/custom.min.css', array(), '1.0', 'all');
    wp_enqueue_style('custom');

    wp_register_style('styles', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('styles');
}

// Register Blank Navigation
function register_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu' ), // Main Navigation
    ));
}

function svg($svg)
{
  $path = get_bloginfo('url') . get_template_directory_uri() . '/img/SVG/' . $svg;
  echo file_get_contents(  $path );
}

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_enqueue_scripts', 'styles'); // Add Theme Stylesheet
add_action('init', 'register_menu'); // Add Blank Menu
