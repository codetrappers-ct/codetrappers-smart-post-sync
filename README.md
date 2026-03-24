# Coetrappers Smart Post Sync

`coetrappers-smart-post-sync` is a wordpress plugin for the Coetrappers project set.
Starter plugin for syncing remote records into WordPress posts.
The codebase is scaffolded to be a clean starting point, not a complete production feature.

## Project Summary

- Slug: `coetrappers-smart-post-sync`
- Type: WordPress plugin
- Focus: content, sync, api

## What This Repository Includes

- Plugin bootstrap file with WordPress headers
- Main PHP class under `includes/`
- Starter settings registration and admin notice flow
- Composer metadata for future autoloading improvements

## Recommended Project Structure

- `<slug>.php`: plugin bootstrap and constants
- `includes/class-<slug>.php`: starter runtime logic
- `composer.json`: package metadata
- `README.md`: project documentation

## Setup

- Copy the folder into `wp-content/plugins`.
- Activate the plugin from wp-admin.
- Extend the main class in `includes/` with project-specific logic.

## How To Extend It

- Activate `coetrappers-smart-post-sync` from the Plugins screen.
- Use `coetrappers-smart-post-sync.php` as the primary bootstrap file for extension work.
- Keep feature logic inside dedicated classes rather than expanding the root file.

## Development Notes

- The generated code favors readability and a low-friction starting structure.
- Credentials, provider integrations, persistence rules, and deployment concerns still need to be implemented for real use.
- Review capability checks, sanitization, and data storage choices before using any starter in production.

## Roadmap

- Add proper admin pages, capability checks, and persistence rules.
- Introduce automated tests and coding standards.
- Document release and deployment steps.

## WordPress Usage

- Copy the folder into `wp-content/plugins`.
- Activate the plugin from wp-admin.
- Extend the main class under `includes/` or split logic into additional classes as the plugin grows.

## Production Hardening Checklist

- Add nonce handling and permission checks for every form or action.
- Add automated tests and linting before release.
- Validate plugin behavior against the target WordPress and PHP versions.
