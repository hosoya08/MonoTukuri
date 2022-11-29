<?php
function add_my_files(){
    wp_deregister_script('jquery');
    // wp_enqueue_style('reset.css', get_template_directory_uri() . '/css/reset.css', array());
    // wp_enqueue_style('style.css', get_template_directory_uri() . '/css/style.css', array());
    wp_enqueue_script('jquery-script', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '3.5.1', true);
    wp_enqueue_script('primary_script', get_template_directory_uri() . '/js/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'add_my_files');

// カスタム投稿追加
add_action('init', function () {
    register_post_type('number1', [
      'label' => '1-当選番号',
      'public' => true,
      'menu_icon' => 'dashicons-format-aside',
      'has_archive' => true,
      'supports' => ['title', 'editor'],
      'show_in_rest' => true,
    ]);
    register_post_type('number2', [
      'label' => '2-当選番号',
      'public' => true,
      'menu_icon' => 'dashicons-format-aside',
      'has_archive' => true,
      'supports' => ['title', 'editor'],
      'show_in_rest' => true,
    ]);
    register_post_type('number3', [
      'label' => '3-当選番号',
      'public' => true,
      'menu_icon' => 'dashicons-format-aside',
      'has_archive' => true,
      'supports' => ['title', 'editor'],
      'show_in_rest' => true,
    ]);
    register_post_type('number4', [
      'label' => '4-当選番号',
      'public' => true,
      'menu_icon' => 'dashicons-format-aside',
      'has_archive' => true,
      'supports' => ['title', 'editor'],
      'show_in_rest' => true,
    ]);
    register_post_type('number5', [
      'label' => '5-当選番号',
      'public' => true,
      'menu_icon' => 'dashicons-format-aside',
      'has_archive' => true,
      'supports' => ['title', 'editor'],
      'show_in_rest' => true,
    ]);
    register_post_type('number6', [
      'label' => '6-当選番号',
      'public' => true,
      'menu_icon' => 'dashicons-format-aside',
      'has_archive' => true,
      'supports' => ['title', 'editor'],
      'show_in_rest' => true,
    ]);
});

function flaming_csv( $input ) {
    return mb_convert_encoding( $input, "SJIS", "UTF-8" );
    }
    add_filter( 'flamingo_csv_quotation', 'flaming_csv', 11 );
