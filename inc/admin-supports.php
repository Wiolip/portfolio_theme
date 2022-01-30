<?php

/*
	========================
		add support to admin panel
	========================
*/



// add functionality to admin panel

function wiolip_theme_support(){

    add_theme_support('title-tag');    // add dynamic title tag support - custom panel

    add_theme_support( 'custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('post-formats', array('gallery'));


        // Custom Image Sizes
    add_image_size('blog-large', 1200, 600, false);
    add_image_size('blog-small', 300, 200, true);

    }
    add_action('after_setup_theme', 'wiolip_theme_support');




// Register menus

function wiolip_menus(){

     $locations = array(
            'main-menu' => 'Main Menu',
            'footer-menu' => 'Footer Menu'
        );
    register_nav_menus($locations);
    }

    add_action('init', 'wiolip_menus');



// Register Sidebars
function my_sidebars(){
	register_sidebar(
		array(
			'name' => 'Page Sidebar',
			'id' => 'page-sidebar',
            'before_widget' => '<div id="%1$s" class="%2$s">',
		    'after_widget'  => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
	));

	register_sidebar(
		array(
			'name' => 'Blog Sidebar',
			'id' => 'blog-sidebar',
            'before_widget' => '<div id="%1$s" class="%2$s">',
		    'after_widget'  => '</div>',
			'before_title' => '<h3 ',
			'after_title' => '</h3>'

	));
}
add_action('widgets_init','my_sidebars');



// excerpt lenght
function num_charest() {
    return 20;
}
add_filter('excerpt_length', 'num_charest');
