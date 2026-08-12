# Marwan Aljabali — Executive Chef Website

A multi-page personal website built with plain HTML, CSS and JavaScript so it deploys cleanly to **Vercel** and **GitHub Pages** without XAMPP, Node, npm, bundlers or a build step.

## Pages
- `index.html` — Home
- `about.html` — About and credentials
- `experience.html` — Complete career timeline
- `expertise.html` — Executive culinary toolkit
- `portfolio.html` — Filterable photo portfolio with lightbox
- `contact.html` — Contact details and deployment-safe email form
- `contact.php` — Optional PHP mail endpoint for PHP-capable hosting

## Deployment — Vercel
1. Upload/push the entire project folder to GitHub.
2. In Vercel choose **Add New → Project** and import the repository.
3. Framework preset: **Other** / no build command required.
4. Root directory: repository root.
5. Deploy.

All CSS, JS and images use relative paths, lowercase folder names and web-safe filenames, so assets load correctly on Vercel and case-sensitive Linux hosting.

## Deployment — GitHub Pages
1. Push all files to the repository root.
2. Open **Settings → Pages**.
3. Choose **Deploy from a branch**.
4. Select `main` and `/ (root)`.
5. Save.

GitHub Pages is static, so `contact.php` is not used there. `contact.html` works without PHP by opening the visitor's email app with the enquiry pre-filled.

## PHP
`contact.php` is included because the project request included PHP. It is optional and only runs on a server with PHP and mail configured. It is not required for Vercel or GitHub Pages.

## Asset rules used
- No absolute local file paths.
- No spaces in asset filenames.
- All images are optimized WebP.
- Stylesheet: `css/styles.css`
- JavaScript: `js/main.js`
- Images: `assets/images/`
