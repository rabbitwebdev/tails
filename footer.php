<?php
/**
 * Theme footer.
 *
 * @package Tailwind_One_Page
 */

if (! defined('ABSPATH')) {
    exit;
}
?>
<footer class="border-t border-slate-200 bg-white">
    <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-2 px-6 py-8 text-sm text-slate-500 md:flex-row">
        <p>&copy; <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?></p>
        <p><?php esc_html_e('Built with WordPress, Tailwind CSS, and ACF Pro.', 'tailwind-one-page'); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
