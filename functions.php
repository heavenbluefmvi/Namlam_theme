<?php
/**
 * Nam Lam Environment Theme Functions
 * Package: Môi Trường Nam Lâm WordPress Theme
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * 1. Khởi tạo tính năng hỗ trợ của Theme
 */
function namlam_theme_setup() {
    // Tự động thêm thẻ <title> chuẩn SEO WordPress
    add_theme_support('title-tag');

    // Kích hoạt tính năng Ảnh đại diện (Featured Image) cho bài viết
    add_theme_support('post-thumbnails');
    add_image_size('namlam-thumb-card', 420, 260, true);
    add_image_size('namlam-thumb-wide', 800, 450, true);

    // Kích hoạt Logo tùy biến trong Tùy biến (Customizer)
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Hỗ trợ chuẩn HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Đăng ký vị trí Menu điều hướng
    register_nav_menus(array(
        'primary-menu' => __('Menu Chính (Header Navbar)', 'namlam'),
        'mobile-menu'  => __('Menu Di Động (Mobile Drawer)', 'namlam'),
    ));
}
add_action('after_setup_theme', 'namlam_theme_setup');

/**
 * 2. Nạp toàn bộ CSS và JavaScript đồng bộ
 */
function namlam_enqueue_scripts() {
    $theme_version = wp_get_theme()->get('Version');
    $theme_uri     = get_template_directory_uri();

    // Nạp toàn bộ CSS module hóa
    wp_enqueue_style('namlam-variables', $theme_uri . '/css/variables.css', array(), $theme_version);
    wp_enqueue_style('namlam-base', $theme_uri . '/css/base.css', array('namlam-variables'), $theme_version);
    wp_enqueue_style('namlam-header-footer', $theme_uri . '/css/header-footer.css', array('namlam-base'), $theme_version);
    wp_enqueue_style('namlam-components', $theme_uri . '/css/components.css', array('namlam-base'), $theme_version);
    wp_enqueue_style('namlam-pages', $theme_uri . '/css/pages.css', array('namlam-components'), $theme_version);
    wp_enqueue_style('namlam-responsive', $theme_uri . '/css/responsive.css', array('namlam-pages'), $theme_version);
    wp_enqueue_style('namlam-style', get_stylesheet_uri(), array('namlam-responsive'), $theme_version);

    // Nạp Vanilla JavaScript thuần
    wp_enqueue_script('namlam-main', $theme_uri . '/js/main.js', array(), $theme_version, true);
    wp_enqueue_script('namlam-tabs', $theme_uri . '/js/tabs.js', array(), $theme_version, true);
    wp_enqueue_script('namlam-form', $theme_uri . '/js/form.js', array(), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'namlam_enqueue_scripts');

/**
 * 3. Tự động thêm class CSS chuẩn cho Menu WordPress
 */
function namlam_nav_item_classes($classes, $item, $args) {
    if (isset($args->theme_location) && in_array($args->theme_location, array('primary-menu', 'mobile-menu'))) {
        $classes[] = ($args->theme_location === 'primary-menu') ? 'nav-item' : 'mobile-nav-item';
        if (in_array('current-menu-item', $classes) || in_array('current-page-ancestor', $classes)) {
            $classes[] = 'active';
        }
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'namlam_nav_item_classes', 10, 3);

function namlam_nav_link_classes($atts, $item, $args) {
    if (isset($args->theme_location) && in_array($args->theme_location, array('primary-menu', 'mobile-menu'))) {
        $class = ($args->theme_location === 'primary-menu') ? 'nav-link' : 'mobile-nav-link';
        $atts['class'] = isset($atts['class']) ? $atts['class'] . ' ' . $class : $class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'namlam_nav_link_classes', 10, 3);

/**
 * 4. Helper hiển thị Breadcrumb chuẩn B2B
 */
function namlam_render_breadcrumbs() {
    if (is_front_page()) {
        return;
    }
    echo '<div class="breadcrumb-wrapper"><div class="container"><ul class="breadcrumb-list">';
    echo '<li class="breadcrumb-item"><a href="' . esc_url(home_url('/')) . '">Trang chủ</a></li>';
    echo '<li class="breadcrumb-separator">/</li>';

    if (is_category() || is_single()) {
        $category = get_the_category();
        if (!empty($category)) {
            echo '<li class="breadcrumb-item"><a href="' . esc_url(get_category_link($category[0]->term_id)) . '">' . esc_html($category[0]->name) . '</a></li>';
            echo '<li class="breadcrumb-separator">/</li>';
        }
        if (is_single()) {
            echo '<li class="breadcrumb-item active">' . wp_trim_words(get_the_title(), 8, '...') . '</li>';
        }
    } elseif (is_page()) {
        global $post;
        if ($post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<li class="breadcrumb-item"><a href="' . esc_url(get_permalink($page->ID)) . '">' . get_the_title($page->ID) . '</a></li>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) {
                echo $crumb . '<li class="breadcrumb-separator">/</li>';
            }
        }
        echo '<li class="breadcrumb-item active">' . get_the_title() . '</li>';
    } elseif (is_archive()) {
        echo '<li class="breadcrumb-item active">' . get_the_archive_title() . '</li>';
    } elseif (is_search()) {
        echo '<li class="breadcrumb-item active">Tìm kiếm: ' . esc_html(get_search_query()) . '</li>';
    }
    echo '</ul></div></div>';
}

/**
 * 5. Tự động rút gọn độ dài Excerpt mô tả bài viết
 */
function namlam_custom_excerpt_length($length) {
    return 28;
}
add_filter('excerpt_length', 'namlam_custom_excerpt_length', 999);

function namlam_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'namlam_excerpt_more');
