<?php

/*
	========================
		ADD STYLE AND SCRIPTS
	========================
*/







// add styles in head
function load_css(){

    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css' , array(), false, 'all' );

    wp_enqueue_style('googlefonts', "https://fonts.googleapis.com/css2?family=Dancing+Script&family=Inter:wght@400;500;600;700&display=swap", array(), false, 'all' );

    wp_enqueue_style('fontawesome', "https://use.fontawesome.com/releases/v5.15.4/css/all.css" , array(), false, 'all' );

    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', array(), false, 'all' );
}
add_action('wp_enqueue_scripts','load_css');




// adds script before body
function load_js(){

    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/script.js', array(), false, true );
}
add_action('wp_enqueue_scripts','load_js');