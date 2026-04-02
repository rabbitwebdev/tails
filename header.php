<?php
/**
 * Theme header.
 *
 * @package Tailwind_One_Page
 */

if (! defined('ABSPATH')) {
    exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-slate-50 text-slate-900'); ?>>
<?php wp_body_open(); ?>
<header class="sticky top-0 z-50 border-b border-slate-200 bg-white/90 backdrop-blur">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
        <a class="text-lg font-bold tracking-tight" href="<?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
        </a>
        <nav class="hidden gap-6 text-sm font-medium md:flex">
            <a class="transition hover:text-indigo-600" href="#top"><?php esc_html_e('Home', 'tailwind-one-page'); ?></a>
            <a class="transition hover:text-indigo-600" href="#sections"><?php esc_html_e('Sections', 'tailwind-one-page'); ?></a>
            <a class="transition hover:text-indigo-600" href="#contact"><?php esc_html_e('Contact', 'tailwind-one-page'); ?></a>
        </nav>
    </div>
</header>
