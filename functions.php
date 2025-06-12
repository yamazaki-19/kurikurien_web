<?php
// CSSとJSファイルを読み込む
function my_theme_enqueue_assets()
{
    // ----- CSS -----
    wp_enqueue_style('destyle', 'https://cdn.jsdelivr.net/npm/destyle.css@4.0.1/destyle.css', array(), null);
    wp_enqueue_style('base-style', get_template_directory_uri() . '/_css/base.css', array(), filemtime(get_template_directory() . '/_css/base.css'));
    wp_enqueue_style('top-style', get_template_directory_uri() . '/dist/css/style.css', array(), filemtime(get_template_directory() . '/dist/css/style.css'));


    // ----- JavaScript -----
    // ハンバーガーメニュー用のJS（テーマ内に custom.js を設置する想定）
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array(), filemtime(get_template_directory() . '/js/script.js'), true);

    // Instagram埋め込み用スクリプト
    wp_enqueue_script('instagram-embed', '//www.instagram.com/embed.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');
