<?php
/**
 * Theme functions.
 *
 * @package Tailwind_One_Page
 */

if (! defined('ABSPATH')) {
    exit;
}

const TAILWIND_ONE_PAGE_VERSION = '1.0.0';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function tailwind_one_page_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'tailwind-one-page'),
    ]);
}
add_action('after_setup_theme', 'tailwind_one_page_setup');

/**
 * Enqueue theme assets.
 */
function tailwind_one_page_enqueue_assets(): void
{
    wp_enqueue_style('tailwind-one-page-style', get_stylesheet_uri(), [], TAILWIND_ONE_PAGE_VERSION);

    // Tailwind CDN is ideal for rapid prototyping; compile locally for production use.
    wp_enqueue_script('tailwindcss-cdn', 'https://cdn.tailwindcss.com', [], null, false);

    wp_enqueue_script(
        'tailwind-one-page-app',
        get_template_directory_uri() . '/assets/js/app.js',
        [],
        TAILWIND_ONE_PAGE_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'tailwind_one_page_enqueue_assets');

/**
 * Register ACF options page when ACF Pro is active.
 */
function tailwind_one_page_register_acf_options_page(): void
{
    if (! function_exists('acf_add_options_page')) {
        return;
    }

    acf_add_options_page([
        'page_title' => __('Theme Settings', 'tailwind-one-page'),
        'menu_title' => __('Theme Settings', 'tailwind-one-page'),
        'menu_slug'  => 'tailwind-one-page-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
    ]);
}
add_action('acf/init', 'tailwind_one_page_register_acf_options_page');

require_once get_template_directory() . '/inc/acf-fields.php';
