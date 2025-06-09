<?php
// CSSとJSファイルを読み込む
function my_theme_enqueue_assets()
{
    // ----- CSS -----
    wp_enqueue_style('destyle', 'https://cdn.jsdelivr.net/npm/destyle.css@4.0.1/destyle.css', array(), null);
    wp_enqueue_style('base-style', get_template_directory_uri() . '/css/base.css', array(), filemtime(get_template_directory() . '/css/base.css'));
    wp_enqueue_style('top-style', get_template_directory_uri() . '/css/top.css', array(), filemtime(get_template_directory() . '/css/top.css'));

    // ----- JavaScript -----
    // ハンバーガーメニュー用のJS（テーマ内に custom.js を設置する想定）
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom.js', array(), filemtime(get_template_directory() . '/js/custom.js'), true);

    // Instagram埋め込み用スクリプト
    wp_enqueue_script('instagram-embed', '//www.instagram.com/embed.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');
wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom.js', array(), filemtime(get_template_directory() . '/js/custom.js'), true);
