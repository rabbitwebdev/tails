<?php
/**
 * ACF field registrations.
 *
 * @package Tailwind_One_Page
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Register local field group for one-page content.
 */
function tailwind_one_page_register_fields(): void
{
    if (! function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key' => 'group_tailwind_one_page_content',
        'title' => 'One Page Content',
        'fields' => [
            [
                'key' => 'field_hero_tab',
                'label' => 'Hero',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            [
                'key' => 'field_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'default_value' => 'Build your one-page site with WordPress + Tailwind',
                'required' => 1,
            ],
            [
                'key' => 'field_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'rows' => 3,
            ],
            [
                'key' => 'field_hero_cta_text',
                'label' => 'Hero CTA Text',
                'name' => 'hero_cta_text',
                'type' => 'text',
                'default_value' => 'Get Started',
            ],
            [
                'key' => 'field_hero_cta_url',
                'label' => 'Hero CTA URL',
                'name' => 'hero_cta_url',
                'type' => 'url',
            ],
            [
                'key' => 'field_sections_tab',
                'label' => 'Sections',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            [
                'key' => 'field_page_sections',
                'label' => 'Page Sections',
                'name' => 'page_sections',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Section',
                'sub_fields' => [
                    [
                        'key' => 'field_section_id',
                        'label' => 'Section ID',
                        'name' => 'section_id',
                        'type' => 'text',
                        'instructions' => 'Used for anchor links (e.g. services, about, contact).',
                    ],
                    [
                        'key' => 'field_section_title',
                        'label' => 'Section Title',
                        'name' => 'section_title',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'key' => 'field_section_content',
                        'label' => 'Section Content',
                        'name' => 'section_content',
                        'type' => 'wysiwyg',
                        'tabs' => 'all',
                        'toolbar' => 'basic',
                        'media_upload' => 0,
                    ],
                    [
                        'key' => 'field_section_image',
                        'label' => 'Section Image',
                        'name' => 'section_image',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ],
                ],
            ],
            [
                'key' => 'field_contact_tab',
                'label' => 'Contact',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            [
                'key' => 'field_contact_heading',
                'label' => 'Contact Heading',
                'name' => 'contact_heading',
                'type' => 'text',
                'default_value' => 'Let\'s work together',
            ],
            [
                'key' => 'field_contact_email',
                'label' => 'Contact Email',
                'name' => 'contact_email',
                'type' => 'email',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ],
            ],
        ],
        'position' => 'normal',
        'style' => 'default',
    ]);
}
add_action('acf/init', 'tailwind_one_page_register_fields');
