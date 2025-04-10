# Baizonn Learning Centre – Custom WordPress Theme

This repository contains the source code and documentation for the custom WordPress theme developed for Baizonn Learning Centre. The project was created as part of the CP3402 Web Design and Development subject and is tailored to represent the identity, programs, and educational philosophy of the centre through a modern, media-rich website.

The theme is based on the Underscores starter theme, but it has been heavily customized and structured to suit the needs of the client. The website includes custom styling, multiple content sections, static pages, and a clean layout that reflects the centre’s academic focus and vibrant learning environment.

---

## Project Overview

The website is built using WordPress with a fully custom theme. It was first developed locally using LocalWP and then deployed to staging and production environments hosted via CloudAccess and AWS Lightsail.

The website offers information on the learning centre’s programs, faculty, core values, open house events, and contact details. Images and content reflect the real-life environment of the learning centre to give users an authentic view of the institution.

---

## Key Features of the Theme

- Custom homepage with welcome section, program highlights, values, and gallery.
- Responsive layout suitable for desktop, tablet, and mobile devices.
- Custom template files for:
  - Home Page
  - About Page
  - Programs
  - Faculty
  - Contact
  - Announcements
  - Testimonials
  - Fee & Schedule
  - Register
- Image gallery showcasing the learning environment and achievements.
- Simple navigation through a structured menu system.
- Theme styling using custom CSS.
- Deployed on production and staging environments using AWS Lightsail.

---

## Getting Started

To set up this project on your local machine or deploy it to a server:

1. Clone the repository:
   ```
   git clone https://github.com/cp3402-students/project-2025-tr1-jcua-team8.git
   ```

2. Copy the theme folder into your local WordPress installation’s `wp-content/themes/` directory.

3. Start your WordPress server using LocalWP or your preferred setup.

4. Activate the Baizonn theme from the WordPress admin dashboard.

5. Follow the instructions in `deployment.md` to manage staging and production environments.

---

## Repository Structure

The following files and folders are important for development and theme maintenance:

- `/baizonn/` – The custom theme folder.
- `functions.php` – Registers theme features and enqueues styles/scripts.
- `style.css` – Contains the main theme styles and metadata.
- `front-page.php` – Template for the homepage layout and structure.
- `page-about.php`, `page-programs.php`, etc. – Custom page templates.
- `/Assets/` and `/Baizonn Content/` – Contains all media used in the site.
- `README.md` – This file.
- `site.md` – Instructions for maintaining and updating site content.
- `theme.md` – Information for developers to continue working on the theme.
- `deployment.md` – Full workflow for local development, testing, and deployment.

---

## Project Management Tools

The project was managed using the following tools:

- Trello Board: Used for checklist 
  https://trello.com/invite/b/67f51829eee03e00285192f4/ATTI64a7af6dc286401e9784c4b8153bbe7b577C229A/baizonn-project  

- GitHub Repository: https://github.com/cp3402-students/project-2025-tr1-jcua-team8.git  

- Slack: Was not used much for collaboration.
  https://itatjcu.slack.com/archives/G0PC1RR17

- AWS Lightsail: Used for hosting
  Staging site: http://3.106.131.93/wp-admin
  Production site: http://3.104.55.237/wp-admin

---

## Documentation

- `site.md`: Instructions for content editors or clients on how to manage and update content using WordPress admin tools.
- `theme.md`: Developer-focused documentation explaining the structure of the theme, design decisions, and how to extend or update it.
- `deployment.md`: Full description of how to set up a local environment, test changes, use Git version control, and deploy updates.

---

## Future Improvements

- Add block pattern support to embrace modern WordPress editor features.
- Optimize media assets further for performance.
- Add automated deployment using GitHub Actions or similar tools.
- Consider integrating form plugins or contact APIs for improved UX.

---

## License and Usage

This project is developed for academic and demonstration purposes. All media assets used belong to the Baizonn Learning Centre and are not to be used outside this context.

---

## Maintainers and Contributors

This project was developed by Team 8 as part of the CP3402 subject at James Cook University.

- Jeomin Gimmi (Theme Developer & WordPress Integration)
- Marys Vineeta Paul (Documentation & UX Design)
