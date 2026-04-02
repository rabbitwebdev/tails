<?php
/**
 * Fallback template.
 *
 * @package Tailwind_One_Page
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="mx-auto max-w-6xl px-6 py-20">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class('prose max-w-none'); ?>>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('No content found.', 'tailwind-one-page'); ?></p>
    <?php endif; ?>
</main>
<?php
get_footer();
