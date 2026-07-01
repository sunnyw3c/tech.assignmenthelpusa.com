# AI Agent Instructions for `techsolution`

## Project Overview
- Laravel 12 application using PHP 8.2.
- Blade-based frontend with pages under `resources/views/pages` and layout in `resources/views/layouts/app.blade.php`.
- Uses Vite/Tailwind in `vite.config.js`, but the current blade layout also loads `public/css/styles.css` and `public/js/script.js` directly.
- Routes are defined in `routes/web.php` using closure-based page rendering.

## Primary workflows
- Install dependencies: `composer install` and `npm install`
- Run local dev server: `npm run dev` or `php artisan serve`
- Build frontend assets: `npm run build`
- Run automated tests: `npm run test` or `php artisan test`

## Key files and directories
- `routes/web.php` - main web route definitions
- `resources/views/layouts/app.blade.php` - base HTML structure, metadata, and asset includes
- `resources/views/pages/` - page templates, including service pages under `pages/services/`
- `resources/views/components/` - reusable Blade components such as navbar and footer
- `app/Http/Controllers/` - controllers for server-side logic if added later
- `public/css/styles.css` and `public/js/script.js` - custom frontend asset files currently referenced by Blade
- `vite.config.js` - Vite plugin config for frontend asset build

## Conventions
- Keep changes to Blade templates consistent with the existing `@extends`, `@section`, and `@push` structure.
- Service pages are expected to be standalone views rendered from `routes/web.php`.
- Preserve meta tags, Open Graph data, and JSON-LD schema patterns in `layouts/app.blade.php` and the home template.
- Avoid modifying the `vendor/` directory directly.

## Notes for AI coding agents
- This repo is primarily a static marketing-style site built on Laravel, not a large REST/API backend.
- Verify which asset pipeline is active before refactoring frontend build setup: the project currently mixes Tailwind CDN and direct asset links with a Vite configuration.
- There is no existing `README.md` or `.github/copilot-instructions.md` in the workspace; use this `AGENTS.md` as the top-level guide for project-specific behavior.
