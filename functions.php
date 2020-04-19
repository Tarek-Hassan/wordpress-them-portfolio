<?php
function addAsset(){
    wp_enqueue_style("bootstrap",get_theme_file_uri()."/asset/css/bootstrap.min.css");
    wp_enqueue_style("resume",get_theme_file_uri()."/asset/css/resume.min.css");
    wp_enqueue_style("all",get_theme_file_uri()."/asset/css/all.min.css");
    wp_enqueue_style("bootstrap",get_theme_file_uri()."/asset/js/bootstrap.min.js",['jquery']);
    wp_enqueue_script("jquery",get_theme_file_uri()."/asset/js/jquery.min.js");
    wp_enqueue_script("easing",get_theme_file_uri()."/asset/js/jquery.easing.min.js");
    wp_enqueue_style("resume",get_theme_file_uri()."/asset/js/resume.min.js");
}
add_action("wp_enqueue_scripts",'addAsset');

add_theme_support('post-thumbnails' );
add_theme_support('menus');

register_nav_menus(
    array(
        'main-menu'=>'Main Menu',
        'footer-menu'=>'Footer Menu'
        )
    );
?>