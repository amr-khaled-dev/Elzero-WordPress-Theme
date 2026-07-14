# Elzero WordPress Theme

A modern and clean WordPress theme built for a content-focused website with a polished layout, custom widgets, and responsive design. This project is designed to be easy to understand, extend, and customize for personal or professional use.

## Overview

Elzero is a custom WordPress theme that includes:

- Responsive layout for desktop and mobile devices
- Bootstrap-based navigation and styling
- Custom widget areas for sidebar content
- Featured image support and post formats
- Custom theme helpers, hooks, and modular PHP structure
- Ready-to-use template files for posts, pages, categories, archives, and search results

## Features

- Custom header menu support
- Sidebar widgets including:
  - child categories
  - random posts
  - statistics
  - most-used tags
  - advertisements
  - latest users
  - latest posts
  - most viewed posts
- SEO-friendly structure with WordPress theme hooks
- Enqueued CSS and JavaScript assets for performance and organization
- Modular code organization under the inc directory

## Project Structure

```text
Elzero/
├── css/
├── imgs/
│   ├── Screenshots/
├── inc/
│   ├── classes/
│   ├── widgets/
│   ├── enqueue.php
│   ├── helpers.php
│   ├── hooks.php
│   └── setup.php
├── js/
├── template-parts/
├── webfonts/
├── category.php
├── comments.php
├── footer.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── search.php
├── searchform.php
├── sidebar.php
├── sidebar-ads.php
├── single.php
├── style.css
├── tag.php
└── wp-bootstrap-navwalker.php
```

## Technologies Used

- PHP
- HTML5
- CSS3
- JavaScript
- WordPress Theme Development
- Bootstrap
- Font Awesome
- Slick carousel

## Installation

1. Place this theme folder inside your WordPress installation at:
   ```text
   wp-content/themes/
   ```
2. Rename the folder to `elzero` if needed.
3. Activate the theme from the WordPress admin panel:
   - Go to Appearance > Themes
   - Select and activate Elzero
4. Make sure your WordPress site has the required theme support enabled automatically through the included setup files.

## Local Development Setup

If you are working locally with XAMPP or another local server:

1. Start Apache and MySQL
2. Place the WordPress files in your local server root
3. Copy this theme folder into the themes directory
4. Import or create a WordPress database
5. Visit your local site and activate the theme

## Customization

You can customize this theme by editing the following files:

- `style.css` for visual styling
- `header.php` for the site header layout
- `footer.php` for the footer content
- `sidebar.php` for widget placement
- `inc/setup.php` for theme support and menu registration
- `inc/enqueue.php` for CSS and JS asset loading
- `inc/helpers.php` for reusable theme helper functions

## Usage Notes

- The theme is intended for WordPress-based content websites.
- Sidebar widgets can be managed from the WordPress admin dashboard.
- The navigation menu is registered as a header menu and can be configured from Appearance > Menus.

## Screenshots

A screenshot is included in the project folder as `screenshot.png` for preview purposes.
All theme screenshots are in imgs/screenshots/

## Contributing

Contributions are welcome. If you'd like to improve the theme:

1. Fork the repository
2. Create a new branch
3. Make your changes
4. Submit a pull request

## License

This project is open for personal and educational use. Please review the licensing terms before using it in a commercial product.

## Author

Built as a WordPress theme project for modern web publishing and theme development practice.
