# 📘 Baizonn Learning Centre — Website Maintenance Guide (`site.md`)

Welcome to the Baizonn Learning Centre website maintenance documentation. This guide is for a **client or future site maintainer** who is already familiar with the WordPress Dashboard. It provides a clear overview of **how the site is structured** and **how to add/update content** based on the site’s layout and customizations.

---

## Table of Contents
1. [Website Structure Overview](#website-structure-overview)  
2. [Adding and Managing Pages](#adding-and-managing-pages)  
3. [Adding and Managing Blog Posts](#adding-and-managing-blog-posts)  
4. [Updating Specific Pages](#updating-specific-pages)  
5. [Media Library Tips](#media-library-tips)  
6. [Using Menus](#using-menus)  
7. [Calendar/Event Functionality (If Used)](#calendarevent-functionality-if-used)  
8. [Recommended Plugins Overview](#recommended-plugins-overview)  
9. [Final Notes](#final-notes)

---

## Website Structure Overview

The site is a **custom WordPress theme** built using the **Underscores (_s)** starter framework and customized for Baizonn. It includes the following page types:

- **Static Pages**:
  - Home
  - About Us
  - Programs
  - Faculty
  - Testimonials
  - Fee & Schedule
  - Register
  - Announcements
  - Contact Us
  - Announcements

- **Custom Sections** (inside pages):
  - Hero banners (images at the top)
  - Our Values (About/Home)
  - Awards & Recognitions (About)
  - Media Gallery (Home)
  - Embedded YouTube Videos (About)

---

## Adding and Managing Pages

To add a new page:

1. Go to `Pages → Add New`
2. Give your page a title (e.g., "FAQ", "Holiday Schedule")
3. Add your content in the block editor.
4. You can add:
   - Paragraphs, Headings
   - Images, Galleries
   - Buttons, YouTube Embeds
5. To match current layout styles:
   - Use the block editor or **copy layout blocks from an existing page**.
6. Hit **Publish** (or **Update** if editing).

To organize a new page into the menu:

1. Go to `Appearance → Menus`
2. Select “Main Menu” (usually Primary or Header Menu)
3. Add your page from the left panel.
4. Drag and drop to reorder.

---

## Adding and Managing Blog Posts (If Used)

This theme does not focus on blog content, but if needed:

1. Go to `Posts → Add New`
2. Add a **Title**, **Content**, and **Featured Image**
3. Assign a **Category** (or create one like “Updates” or “Events”)
4. Hit **Publish**

To show a blog section on the frontend, set a page template as the Posts Page in:
`Settings → Reading → Posts page`.

---

## Updating Specific Pages

### Home Page (`front-page.php`)
- Sections like **Welcome**, **Why Choose Baizonn**, **Programs**, and **Gallery** are hardcoded into a template.
- To edit them:
  - Go to `Appearance → Theme File Editor → front-page.php`
  - Or update content directly if integrated with **custom blocks** or ACF (Advanced Custom Fields), if installed.

> **Note**: If you're not a developer, avoid editing theme files directly. Ask a developer to handle structural changes.

---

### About Page (`page-about.php`)
Contains:
- Teaching Philosophy
- F.A.S.T. Value Proposition
- Our Values (4 Core Values)
- Academic Partner Banner
- Awards & YouTube Videos

All sections are manually coded. Content updates are possible through:
- Theme File Editor (for HTML structure), or
- **Create reusable blocks/pages and use shortcodes** if you'd prefer no-code solutions.

---

## 🖼 Media Library Tips

1. Go to `Media → Library`
2. You can upload:
   - JPEGs, PNGs, PDFs
   - Videos (prefer embedding via YouTube)
3. Try to keep image size under **1 MB** for performance
   - Use **TinyPNG** or **Squoosh** to compress

**Avoid deleting images** unless you're sure they are unused on pages.

---

## Using Menus

1. Go to `Appearance → Menus`
2. Select “Primary” (Header) menu
3. Drag pages into position (e.g., move “Register” to the end)
4. To create dropdowns:
   - Nest one menu item slightly to the right under a parent item

---

## Calendar/Event Functionality (If Used)

> **Currently not used**, but if added later:

- Plugin suggestion: **The Events Calendar**
- After installing:
  - Create events via `Events → Add New`
  - They can display in calendar or list view
  - Categories help group events (e.g., “Workshops”, “Exams”)

Let a developer integrate this into the homepage if needed.

---

## 🔌 Recommended Plugins Overview

| Plugin | Purpose |
|--------|---------|
| **All-in-One WP Migration** | Import/export full website |
| **Classic Editor** *(optional)* | Use old WP editor for simpler editing |
| **Yoast SEO** *(optional)* | SEO optimization |
| **Contact Form 7** *(if forms are used)* | Custom forms |

---

## Final Notes

- All edits are done via the WordPress dashboard.
- Always **preview changes** before publishing.
- Avoid editing theme files directly unless you’re confident.
- Ask a developer for structural changes or theme updates.

---

📬 **Need Help?**  
If Baizonn team expands or transfers maintenance to a new developer, refer them to the project’s GitHub repository and `deployment.md` for local development workflow.

