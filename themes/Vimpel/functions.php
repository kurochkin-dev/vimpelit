<?php


//удаление тегов <br> в формах contacts form 7
add_filter('wpcf7_autop_or_not', '__return_false');

add_action('wp_enqueue_scripts', 'slick_slider_scripts');
function slick_slider_scripts()
{
    wp_enqueue_style('slick-style', get_template_directory_uri() . '/assets/css/slick.css', array(), null);
    wp_enqueue_script('slick-script', get_template_directory_uri() . '/assets/js/slick.min.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts()
{
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', array(), null);
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css');
    wp_enqueue_script('api-yandex', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=ac441832-f13a-4b1d-9214-122da571f681', array(), '2.1', false);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
}

add_theme_support('post-thumbnails');

//Walker для мобильного и десктопного меню
class the_god_of_walker extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='drop-down-menu'><ul class='drop-down-menu__background'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Общие настройки темы',
        'menu_title'	=> 'Настройки темы',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Настройки шапки сайта',
        'menu_title'	=> 'Шапка',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Настройки подвала сайта',
        'menu_title'	=> 'Подвал',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Настройки секции Stages',
        'menu_title'	=> 'Stages',
        'parent_slug'	=> 'theme-general-settings',
    ));
}

register_nav_menus(array(
    'top'    => 'Верхнее меню',
    'mobile' => 'Мобильное меню'
));