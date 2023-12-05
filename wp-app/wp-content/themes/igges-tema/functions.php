<?php
//enqueue styles och scripts - öka versionen för att undvika cache när du gör ändringar
function iggeakanacho_styles()
{
    // versionen specifieras i style.css
    $version = wp_get_theme()->get('Version');

    // enqueue styles
    wp_enqueue_style('iggeakanacho-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css", array(), '4.6.3', 'all');
    wp_enqueue_style('iggeakanacho-bootstrap3.3.7', "https://cdn.usebootstrap.com/bootstrap/3.3.7/css/bootstrap.min.css", array(), '3.3.7', 'all');
    wp_enqueue_style('iggeakanacho-style', get_template_directory_uri() . "/style.css", array('iggeakanacho-fontawesome', 'iggeakanacho-bootstrap3.3.7'), $version, 'all');


}


function iggeakanacho_scripts()
{

    // versionen specifieras i style.css
    $version = wp_get_theme()->get('Version');

    // enqueue scripts
    wp_enqueue_script('iggeakanacho-jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js", array(), '3.1.0', false);
    wp_enqueue_script('iggeakanacho-custom_script', get_template_directory_uri() . "/assets/js/script.js", array(), $version, true);

}

add_action('wp_enqueue_scripts', 'iggeakanacho_scripts');


add_action('wp_enqueue_scripts', 'iggeakanacho_styles');
function iggeakanacho_menus()
{
    $locations = array(
        'primary' => 'Primary menu',
        'sidemenu' => 'Side menu'
    );
    register_nav_menus($locations);
}
add_action('init', 'iggeakanacho_menus');


function iggeakanacho_theme_handling()
{
    //add_theme_support("title-tag");
    add_theme_support('post-thumbnails');
    add_image_size("medium", 700, false);
}
add_action('after_setup_theme', 'iggeakanacho_theme_handling');


?>
