<?php

add_action('carbon_register_fields', 'crb_register_custom_fields');
function crb_register_custom_fields() {
    include_once __DIR__ . '/theme_helpers/custom_fields/page_meta.php';
    include_once __DIR__ . '/theme_helpers/custom_fields/post_meta.php';
}
require_once __DIR__ . '/theme_helpers/carbon-fields/carbon-fields-plugin.php';

function deregister_cf7_styles() {
    wp_deregister_style('contact-form-7');
}
add_action('wp_print_styles', 'deregister_cf7_styles', 100);

define('STATIC_FILES_BUILD_VERSION', '6.3');

// deregister unnessosary scripts
if(!is_admin()){
    function my_dequeue_scripts() {
        wp_dequeue_script( 'jquery-ui-core' );
        wp_dequeue_script( 'jquery-ui-sortable' );
    }
}


 // поддержка SVG
function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

//remove smthng
add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head','adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_shortlink_wp_head');


// remove "text\javascript" from all "script" tags
add_filter('script_loader_tag', 'clean_script_tag');
function clean_script_tag($input) {
  $input = str_replace("type='text/javascript' ", '', $input);
  return str_replace("'", '"', $input);
}


// remove hAtom micromarkup
function remove_hentry( $classes ) {
    $classes = array_diff($classes, array('hentry'));
    return $classes;
}
add_filter( 'post_class', 'remove_hentry' );


 // remove Emojii
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
add_filter( 'tiny_mce_plugins', 'disable_wp_emojis_in_tinymce' );
function disable_wp_emojis_in_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return [];
    }
}

if (!is_admin()){
    // start
    function theme_styles()
    {
        wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css',[], STATIC_FILES_BUILD_VERSION);
        wp_enqueue_style('fancy-style', get_template_directory_uri() . '/css/jquery.fancybox.min.css',[], STATIC_FILES_BUILD_VERSION);
        wp_enqueue_style('master-style', get_template_directory_uri() . '/css/main.css',[], STATIC_FILES_BUILD_VERSION);
    }

    function theme_scripts()
    {
        wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/core/bootstrap.min.js',['popper-script'], STATIC_FILES_BUILD_VERSION, true);
        wp_enqueue_script('popper-script', get_template_directory_uri() . '/js/core/popper.min.js',['jquery'], STATIC_FILES_BUILD_VERSION, true);

        wp_enqueue_script('moment-script', get_template_directory_uri() . '/js/plugins/moment.min.js',['bootstrap-script'], STATIC_FILES_BUILD_VERSION, true);
        wp_enqueue_script('nouislider-script', get_template_directory_uri() . '/js/plugins/nouislider.min.js',['moment-script'], STATIC_FILES_BUILD_VERSION, true);
        wp_enqueue_script('datetimepicker-script', get_template_directory_uri() . '/js/plugins/bootstrap-datetimepicker.js',['moment-script'], STATIC_FILES_BUILD_VERSION, true);
        wp_enqueue_script('selectpicker-script', get_template_directory_uri() . '/js/plugins/bootstrap-selectpicker.js',['popper-script'], STATIC_FILES_BUILD_VERSION, true);
        wp_enqueue_script('masked-input', get_template_directory_uri() . '/js/plugins/jquery.maskedinput.min.js',['bootstrap-script'], STATIC_FILES_BUILD_VERSION, true);

        wp_enqueue_script('master-script', get_template_directory_uri() . '/js/paper-kit.js',['bootstrap-script'], STATIC_FILES_BUILD_VERSION, true);

        wp_enqueue_script('fancy-script', get_template_directory_uri() . '/js/plugins/jquery.fancybox.min.js',['bootstrap-script'], STATIC_FILES_BUILD_VERSION, true);



    }
    add_action('wp_print_styles', 'theme_styles');
    add_action('wp_print_scripts', 'theme_scripts');
}
