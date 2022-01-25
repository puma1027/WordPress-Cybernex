<?php
if(function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(array(
        'page_title' => 'テーマオプション', // 設定ページで表示される名前
        'menu_title' => 'テーマオプション', // ナビに表示される名前
        'menu_slug' => 'top_setting',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );


function polylang_flags_shortcode() {
    ob_start();
    pll_the_languages(array('show_flags'=>1,'show_names'=>0));
    $flags = ob_get_clean();
    return '<ul class="language-btn">' . $flags . '</ul>';
}
add_shortcode('POLYLANG', 'polylang_flags_shortcode');

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function custom_theme_settings() {
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'news_thumb', 160, 120, true );
}

add_action('after_setup_theme', 'custom_theme_settings');

function add_custom_query_var( $vars ){
	$vars[] = "category_id";
	$vars[] = "news_year";
	$vars[] = "type_id";
	return $vars;
}
add_filter( 'query_vars', 'add_custom_query_var' );

function theme_disable_visual_editor( $can ) {
	global $post;
	return false;
}
add_filter( 'user_can_richedit', 'theme_disable_visual_editor' );

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function getCurrentUrl() {
    $protocol = is_ssl() ? 'https://' : 'http://';
    return ($protocol) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

// function add_my_media_controls($wp_customize) {
//   $wp_customize->add_section('video', array(
//     'title' => 'Video',
//     'description' => 'Add Video',
//     'capability' => 'edit_theme_options'
// ));
// $wp_customize->add_setting('add_video', array(
//     'type' => 'theme_mod',
//     'capability' => 'edit_theme_options',
//     'sanitize_callback' => 'absint'
// ));
// $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'add_video', array(
//     'section' => 'video',
//     'label' => 'Video',
// )));
// }
// add_action('customize_register', 'add_my_media_controls');


function isJA(){
    $url = $_SERVER["REQUEST_URI"];
    $isJA = false;
    if(strstr($url, '/ja/')==true){
      $isJA = true;
    }
    return $isJA;
}
