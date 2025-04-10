# Theme Documentation for Baizonn Learning Centre 

This guide is intended for developers continuing development of the custom WordPress theme built for Baizonn Learning Centre. It includes details specific to this theme's structure, files, features, styling, and recommendations for future work.

## Table of Contents

1. Theme Overview
2. Theme Features
3. Theme File Structure
4. Key Template Files and Usage
5. Styling and Design System
6. WordPress Integrations
7. Customization and Guidelines
8. Recommendations for Future Development

## 1. Theme Overview

This theme is based on the Underscores (_s) starter theme and has been customized for Baizonn Learning Centre to showcase programs, faculty, schedules, open house events, and allow registrations.

Theme Folder: `baizonn`  
GitHub Repository: [project-2025-tr1-jcua-team8](https://github.com/cp3402-students/project-2025-tr1-jcua-team8)

## 2. Theme Features

- Custom homepage layout (`front-page.php`)
- Custom page templates for About, Programs, Teachers, Contact, Schedule, Testimonials, Register, Open House
- Responsive layout (desktop and mobile-friendly)
- Media-rich galleries and banners
- Manual styling via CSS (no builder plugin)
- Integrated registration buttons across multiple pages
- Image assets structured in `Assets/` and `Baizonn Content/` folders
- Footer with dynamic links and contact/social sections

## 3. Theme File Structure

```
baizonn/
│
├── front-page.php               # Custom homepage
├── page-about.php              # About page template
├── page-programs.php           # Program listings
├── page-schedule.php           # Session schedules and pricing
├── page-faculty.php            # Teacher profiles
├── page-testimonials.php       # Testimonials layout
├── page-open-house.php         # Open house details
├── page-contact.php            # Contact info and directions
├── page-register.php           # Registration form (plugin or external)
│
├── header.php                  # Site header and navigation
├── footer.php                  # Footer layout and links
├── functions.php               # Theme setup and script/style enqueue
├── style.css                   # Global and page-specific styles
├── inc/                        # Includes for customizer and functions
├── Assets/                     # Logo and general assets
├── Baizonn Content/            # Uploaded images used in content
```

## 4. Key Template Files and Usage

### `front-page.php`

- Contains banner, welcome message, image, “Why Baizonn” section, gallery, and CTA button.
- Hardcoded with static content for layout consistency.

### `page-about.php`

- Includes teaching philosophy, FAST value system, awards, video embeds, and academic partner.

### `page-programs.php`

- Lists all levels and subjects (Primary, Secondary, JC).
- Displays subjects in styled grid with icons and descriptions.

### `page-schedule.php`

- Renders styled HTML tables grouped by level and subject.
- Includes prices and time slots.

### `page-faculty.php`

- Teacher profile blocks: photo, name, qualifications, experience.
- Images sourced from `Baizonn Content/`

### `page-contact.php`

- Contains contact address and gallery of transportation directions.
- CTA buttons at the bottom for Register Now.

## 5. Styling and Design System

### Colour Palette

| Color         | Hex       | Usage                   |
|---------------|-----------|--------------------------|
| Primary Green | `#007b5e` | Headings, buttons        |
| Light Green   | `#e7f6f2` | Section backgrounds      |
| Gray Text     | `#444`    | Body text                |
| White         | `#ffffff` | Background for cards     |

### Typography

- Font Stack: `"Segoe UI", Roboto, Arial, sans-serif`
- Sizes vary per section, with large headings (~2rem+) and body text (~1rem).

### Layout

- Flexbox and CSS grid used for responsive components.
- Media queries are embedded in `style.css`.
- Reusable classes: `.btn-primary`, `.home-welcome`, `.gallery-grid`, `.two-col`

## 6. WordPress Integrations

- **Custom Menus**: Registered in `functions.php` under `'menu-1'`
- **Custom Logo Support**: Enabled in `functions.php` using `add_theme_support('custom-logo')`
- **Widget Area**: Default sidebar registered but not used extensively
- **All-in-One WP Migration**: Used for import/export

## 7. Customization and Guidelines

### Adding New Pages

1. Duplicate an existing `page-*.php` template.
2. Add `/* Template Name: Page XYZ */` at the top.
3. Create a page in the WordPress dashboard and assign the new template.

### Adding New Styles

- Open `style.css`
- Scroll to the relevant section (e.g., `/* ========= CONTACT PAGE STYLES ========= */`)
- Add class-based or ID-based rules

### Escaping & Validation

- Use `esc_url()` and `esc_html()` for links and dynamic content.
- Theme Check plugin has been passed; maintain best practices.

## 8. Recommendations for Future Development

- Use **Advanced Custom Fields (ACF)** for dynamic content blocks
- Add **custom blocks or block patterns** for reusable layout components
- Integrate a **calendar/event plugin** for upcoming events
- Modularize styles into SCSS and compile for maintainability
- Use lazy loading and compressed formats for large images
- Improve accessibility with better contrast ratios and alt tags