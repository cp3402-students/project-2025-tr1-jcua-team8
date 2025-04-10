# Site Maintenance Guide for Baizonn Learning Centre (`site.md`)

This document is intended for the site administrator or content manager responsible for updating and maintaining the Baizonn Learning Centre website. It assumes basic familiarity with WordPress but explains how this site is structured and how to update its content properly.

## Table of Contents

1. Overview of the Site Structure
2. Adding and Editing Pages
3. Adding Testimonials
4. Managing the Open House and Registration Pages
5. Managing Images and Media
6. Menus and Navigation
7. Theme-Specific Customization Notes
8. Backup and Migration Plugins

## 1. Overview of the Site Structure

The site uses a custom WordPress theme designed specifically for Baizonn Learning Centre. Pages are mostly managed through custom templates and are assigned when a page is created or edited.

Pages on the site include:
- Home (custom front page with CTA, gallery, values)
- About (philosophy, values, partner)
- Programs (subject list and descriptions)
- Schedule (session times and fees)
- Faculty (teacher profiles)
- Testimonials (quotes from students and parents)
- Announcements (event information and CTA)
- Contact (location, directions, contact details)
- Register (connected to a form plugin)

## 2. Adding and Editing Pages

To add or edit content on a page:

1. Go to **Pages → All Pages**.
2. Click **Edit** on an existing page, or **Add New**.
3. Use the **Page Attributes → Template** dropdown on the right to select a custom layout.
   - For example: *About Page*, *Open House Page*, *Faculty Page*, etc.
4. Add content using the WordPress block editor. For structured layouts like the homepage, the layout is predefined in code.
5. Click **Update** or **Publish** to save changes.

> Note: Most homepage and schedule content is hardcoded. To update the layout or structure, a developer will need to modify `front-page.php` or `page-schedule.php`.

## 3. Adding Testimonials

The Testimonials page is managed manually using a custom template. To update it:

1. Go to **Pages → Testimonials**.
2. Open it in the editor.
3. Scroll to where testimonials are defined in the content area.
4. Edit or add quotes using the block editor or HTML as structured.

Alternatively, future versions could use a testimonial plugin or CPT (Custom Post Type) for easier editing.

## 4. Managing the Open House and Registration Pages

### Announcements

- Go to **Pages → Announcements**
- This page includes custom text, event highlights, and images such as the T-Shirt photo.
- Edit the text in the block editor or replace the media via the Media Library.

### Registration Page

- This page uses a plugin-based registration form.
- To manage or edit the form, go to:
  - **WPForms** (or whichever plugin was used) → Forms → Edit form.
  - To change confirmation emails, field options, or submission handling.

## 5. Managing Images and Media

To replace or add new images:

1. Go to **Media → Library**
2. Click **Add New** and upload the file.
3. Copy the image URL or use the **Add Media** button in page editors to insert it.

> Images in banners and galleries are referenced from `/Assets/images/` or `/Baizonn Content/`, and are used in PHP template files. These must be changed via FTP or file manager if replacements are needed.

Recommended image formats: `.jpg`, `.png`, max width 1400px.  
Use compressed images for faster load times.

## 6. Menus and Navigation

To modify the main menu:

1. Go to **Appearance → Menus**
2. Select the **Primary Menu**
3. Add or remove pages using the checkboxes and "Add to Menu" button.
4. Drag to reorder items.
5. Click **Save Menu**.

## 7. Theme-Specific Customization Notes

- Site content is mostly page-based.
- Header and Footer are shared across all pages. To edit footer links (e.g. privacy, contact), modify the `footer.php` file.
- Call-to-action buttons use the `.btn-primary` CSS class defined in `style.css`.

### Pages using Custom Templates

| Page         | Template File        |
|--------------|----------------------|
| Home         | `front-page.php`     |
| About Us     | `page-about.php`     |
| Programs     | `page-programs.php`  |
| Schedule     | `page-schedule.php`  |
| Faculty      | `page-faculty.php`   |
| Testimonials | `page-testimonials.php` |
| Announcements| `page-open-house.php`|
| Contact      | `page-contact.php`   |
| Register     | `page-register.php`  |

## 8. Backup and Migration Plugins

The site uses **All-in-One WP Migration** for backups and transfers.

To export a backup:

1. Go to **All-in-One WP Migration → Export**.
2. Choose "Export to File".
3. Download the `.wpress` backup.

To import on another WordPress instance:

1. Go to **All-in-One WP Migration → Import**.
2. Upload your `.wpress` file.
3. Follow the restore prompts.

---

For any structural or design changes, consult the `theme.md` for developer notes and file structure.