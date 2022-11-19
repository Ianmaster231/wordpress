<?php 

    function ian_files(){
        wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array ('jquery'),'1.0', true);
        wp_enqueue_style('ian_main_styles', get_theme_file_uri('/build/style-index.css'));
        wp_enqueue_style('ian_extra_styles', get_theme_file_uri('/build/index.css'));
        wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('font_custom', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    }

add_action('wp_enqueue_scripts','ian_files');

function ian_features(){
    register_nav_menu('headerMenuLocation','Header Menu Location');
    register_nav_menu('FooterMenuLocation1','Footer Location 1');
    register_nav_menu('FooterMenuLocation2','Footer Location 2');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'ian_features');
?>