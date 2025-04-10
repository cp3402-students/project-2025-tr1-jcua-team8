# Deployment Documentation for Baizonn Learning Centre

This document outlines the development and deployment workflow for the Baizonn Learning Centre website. It is intended for developers and maintainers who will continue working on the site. It includes details on local development, version control, staging, production, and automated testing procedures.

## Table of Contents


1. [Project Management](#project-management)
2. [Development Workflow](#development-workflow)
   - [Local Development with LocalWP](#local-development-with-localwp)
   - [Version Control with GitHub](#version-control-with-github)
3. [Testing Workflow](#testing-workflow)
4. [Deployment Workflow](#deployment-workflow)
   - [Staging Deployment on AWS Lightsail](#staging-deployment-on-aws-lightsail)
   - [Production Deployment on AWS Lightsail](#production-deployment-on-aws-lightsail)
5. [Tools & Platforms](#tools--platforms)

## Project Management

- **Trello Board**: [Trello - Baizonn Project](https://trello.com/invite/b/67f51829eee03e00285192f4/ATTI64a7af6dc286401e9784c4b8153bbe7b577C229A/baizonn-project)
  - Columns used: Backlog, To Do, In Progress, Review, Done
  

## Development Workflow

### Local Development with LocalWP

1. Install [LocalWP](https://localwp.com/).
2. Create a new local WordPress site named `baizonn.local`.
3. Clone the GitHub repository:
   ```bash
   git clone https://github.com/cp3402-students/project-2025-tr1-jcua-team8.git
   ```
4. Place the theme folder into:
   ```
   /app/public/wp-content/themes/
   ```
5. Activate the theme in WordPress Admin Panel.

### Version Control with GitHub

- Repository: [GitHub - Baizonn Project](https://github.com/cp3402-students/project-2025-tr1-jcua-team8.git)
- Branches:
  - `main`: Staging
  - `production`: Live site

#### Git Workflow

```bash
# Create and switch to a new branch
git checkout -b feature/new-header

# Stage and commit changes
git add .
git commit -m "Add new header layout"

# Push to GitHub
git push origin feature/new-header
```

## Testing Workflow

- All changes tested locally via LocalWP.
- Manual cross-browser and mobile responsiveness tests.
- Theme validated using **Theme Check** plugin.
- Checked escaping using `esc_url()`, `esc_html()` functions.
- Image compression done for files > 1MB.

## Deployment Workflow

### Staging Deployment on AWS Lightsail

1. Launch a WordPress instance on AWS Lightsail.
2. Use the **All-in-One WP Migration** plugin:
   - Export `.wpress` file from local.
   - Import on staging site via plugin.
3. Alternative: Use **FileZilla** with FTP credentials from Lightsail.
   - Upload to `/wp-content/themes/baizonn`.
   - Activate the theme from WordPress Admin.

### Production Deployment on AWS Lightsail

1. Create another Lightsail instance for production.
2. Export staging site using All-in-One WP Migration.
3. Import into production WordPress Admin.
4. Final push to production branch:
   ```bash
   git checkout production
   git merge main
   git push origin production
   ```

5. Pull latest theme on server via SSH or FileZilla.

## Tools & Platforms

| Tool                      | Purpose                                |
|---------------------------|----------------------------------------|
| LocalWP                   | Local development                      |
| GitHub                    | Version control                        |
| Trello                    | Task management                        |
| Slack                     | Team communication                     |
| AWS Lightsail             | Hosting for staging and production     |
| FileZilla                 | FTP file management                    |
| All-in-One WP Migration   | Site migration and backup              |
| Theme Check               | Theme validation and compliance        |

## Notes

- Do not expose credentials in public repositories.
- Perform updates in staging before merging into production.
- Ensure backups before major deployments.
- Theme check must pass before merging production.

## [Detailed Development and Deployment Practices](#detailed-development-and-deployment-practices)

### Local Development Guidelines

- Use a modern code editor such as Visual Studio Code with the following recommended extensions:
  - PHP Intelephense (for PHP IntelliSense support)
  - Prettier (for consistent code formatting)
  - GitLens (for Git insights)
  - WordPress Snippet Pack (for faster template creation)

- Each developer works on a feature branch using `git checkout -b feature-name` and pushes changes regularly.
- Pull Requests (PRs) are reviewed by at least one team member before merging to ensure code consistency and avoid regression.

### GitHub Repository Management

- Default branch is `main`. All final changes are merged here after testing.
- Feature branches must follow naming conventions like: `feature/homepage-layout` or `fix/footer-links`.
- PRs should follow this template:
  - **Description**: Brief about what’s implemented.
  - **Linked Trello Card**: Include the URL of the related card.
  - **Screenshots**: Optional screenshots for frontend changes.
  - **Testing**: Describe how to test the change locally.

### Staging Server (AWS Lightsail)

- IP: `<staging-ip-address>`
- Used for internal team reviews.
- Developers push to `main`, triggering GitHub Actions which SSH into the staging server, navigate to the theme folder and perform a `git pull`.

### Production Server (AWS Lightsail)

- IP: `<production-ip-address>`
- Used for client demo or final site review.
- Only stable releases are pushed to the `production` branch.

### GitHub Actions Setup

- Environment secrets include:
  - `SSH_PRIVATE_KEY_STAGING`
  - `STAGING_VM_IP`
  - `SSH_PRIVATE_KEY_PRODUCTION`
  - `PRODUCTION_VM_IP`
- Scripts execute securely without exposing private keys.

### Security Measures

- Do not store `.env` or secret config files in the GitHub repo.
- Do not expose database credentials or API keys in theme files.
- Regularly update plugins and WordPress core.

### Backup & Recovery

- Weekly backups taken via All-in-One WP Migration or via Lightsail snapshot.
- Before every deployment to production, a snapshot is recommended.