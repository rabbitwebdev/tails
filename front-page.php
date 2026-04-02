<?php
/**
 * Front page template.
 *
 * @package Tailwind_One_Page
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();

$hero_title    = get_field('hero_title') ?: get_bloginfo('name');
$hero_subtitle = get_field('hero_subtitle');
$hero_cta_text = get_field('hero_cta_text') ?: __('Get Started', 'tailwind-one-page');
$hero_cta_url  = get_field('hero_cta_url') ?: '#sections';
$sections      = get_field('page_sections');
$contact_title = get_field('contact_heading') ?: __('Contact', 'tailwind-one-page');
$contact_email = get_field('contact_email');
?>
<main id="top">
    <section class="bg-gradient-to-b from-indigo-50 to-transparent">
        <div class="mx-auto max-w-6xl px-6 py-24 md:py-32">
            <p class="mb-4 inline-flex rounded-full bg-indigo-100 px-3 py-1 text-sm font-semibold text-indigo-700">
                <?php esc_html_e('One-page theme', 'tailwind-one-page'); ?>
            </p>
            <h1 class="max-w-3xl text-4xl font-extrabold tracking-tight text-slate-900 md:text-6xl">
                <?php echo esc_html($hero_title); ?>
            </h1>
            <?php if (! empty($hero_subtitle)) : ?>
                <p class="mt-6 max-w-2xl text-lg text-slate-600">
                    <?php echo esc_html($hero_subtitle); ?>
                </p>
            <?php endif; ?>
            <div class="mt-10">
                <a href="<?php echo esc_url($hero_cta_url); ?>" class="inline-flex items-center rounded-lg bg-indigo-600 px-6 py-3 text-base font-semibold text-white shadow transition hover:bg-indigo-500">
                    <?php echo esc_html($hero_cta_text); ?>
                </a>
            </div>
        </div>
    </section>

    <section id="sections" class="mx-auto max-w-6xl space-y-12 px-6 py-16 md:py-24">
        <?php if (! empty($sections) && is_array($sections)) : ?>
            <?php foreach ($sections as $index => $section) :
                $section_id      = sanitize_title($section['section_id'] ?: 'section-' . ($index + 1));
                $section_title   = $section['section_title'] ?? '';
                $section_content = $section['section_content'] ?? '';
                $section_image   = $section['section_image'] ?? null;
                ?>
                <article id="<?php echo esc_attr($section_id); ?>" class="grid gap-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm md:grid-cols-2 md:p-10">
                    <div>
                        <h2 class="text-2xl font-bold tracking-tight text-slate-900 md:text-3xl"><?php echo esc_html($section_title); ?></h2>
                        <div class="prose mt-4 max-w-none prose-slate">
                            <?php echo wp_kses_post($section_content); ?>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-xl bg-slate-100">
                        <?php if (is_array($section_image) && ! empty($section_image['url'])) : ?>
                            <img class="h-full w-full object-cover" src="<?php echo esc_url($section_image['url']); ?>" alt="<?php echo esc_attr($section_image['alt'] ?? $section_title); ?>">
                        <?php else : ?>
                            <div class="flex h-full min-h-56 items-center justify-center text-sm text-slate-500">
                                <?php esc_html_e('Add a section image in ACF.', 'tailwind-one-page'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        <?php else : ?>
            <article class="rounded-2xl border border-dashed border-slate-300 bg-white p-8 text-center text-slate-600">
                <?php esc_html_e('Add sections from the Front Page editor using the “Page Sections” repeater in ACF.', 'tailwind-one-page'); ?>
            </article>
        <?php endif; ?>
    </section>

    <section id="contact" class="border-t border-slate-200 bg-white">
        <div class="mx-auto max-w-6xl px-6 py-16 text-center md:py-24">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900 md:text-4xl"><?php echo esc_html($contact_title); ?></h2>
            <?php if ($contact_email) : ?>
                <p class="mt-6 text-lg text-slate-600">
                    <a class="font-medium text-indigo-600 hover:text-indigo-500" href="mailto:<?php echo esc_attr($contact_email); ?>"><?php echo esc_html($contact_email); ?></a>
                </p>
            <?php else : ?>
                <p class="mt-6 text-slate-500">
                    <?php esc_html_e('Add your contact email in ACF to display it here.', 'tailwind-one-page'); ?>
                </p>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php
get_footer();
