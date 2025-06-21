<?php
// CSSとJSファイルを読み込む
function my_theme_enqueue_assets()
{
    wp_enqueue_style('splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css');
    // ----- CSS -----
    wp_enqueue_style('top-style', get_template_directory_uri() . '/css/style.css', array(), filemtime(get_template_directory() . '/css/style.css'));

    // ----- JavaScript -----
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array(), filemtime(get_template_directory() . '/js/script.js'), true);

    // Instagram埋め込み用スクリプト
    wp_enqueue_script('instagram-embed', '//www.instagram.com/embed.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');


// ===== スライダー（Splide）読み込み =====
function enqueue_splide_scripts()
{

    wp_enqueue_script('splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', [], null, true);
    wp_enqueue_script('slider-js', get_template_directory_uri() . '/js/slider.js', ['splide-js'], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_splide_scripts');
