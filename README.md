# Tailwind One Page Theme

A minimal one-page WordPress theme that uses **Tailwind CSS** (via CDN) and **ACF Pro**.

## Setup

1. Copy this theme folder into `wp-content/themes/tailwind-one-page`.
2. Activate **Tailwind One Page** in Appearance → Themes.
3. Make sure **ACF Pro** is installed and activated.
4. Set a static homepage under Settings → Reading.
5. Edit your homepage and fill in the generated ACF fields:
   - Hero
   - Page Sections (repeater)
   - Contact

## Notes

- Tailwind is loaded from `https://cdn.tailwindcss.com` for quick setup.
- For production, replace CDN usage with a compiled Tailwind stylesheet and purge unused classes.
