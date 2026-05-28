---
name: ops
description: DevOps and infrastructure for this project. Use when working on Docker, Devcontainer, deployment, CI/CD, environment config, or any ops/infra tasks.
---

# Ops / Infrastructure

## Devcontainer
- `.devcontainer/devcontainer.json` — primary config
- `.devcontainer/Dockerfile` — custom Docker image
- Services: PHP 8.3-FPM, Node 22, PostgreSQL 16, Nginx (or Caddy)

## Local development
- `composer install` for PHP dependencies
- `npm install` for frontend (Angular) dependencies
- `.env` — copy from `.env.example`, configure PostgreSQL connection
- `php artisan serve` for Laravel
- `ng serve` for Angular dev server

## Markdown
All `.md` files must follow the **markdownlint** specification (v0.40.0):
https://github.com/DavidAnson/markdownlint/blob/v0.40.0/doc/Rules.md

Key rules:
- MD001 — heading increments exactly one level
- MD003 — ATX headings (`# ` style)
- MD012 — no multiple consecutive blank lines
- MD022 — blanks around headings
- MD031 — blanks around fenced code blocks
- MD032 — blanks around lists
- MD047 — single trailing newline
- Use `---` for horizontal rules (not `***`)

## Deployment considerations
- API subdomain: `api.****` → Laravel
- App subdomain: `app.****` → Angular (static files or Node SSR)
- Database: PostgreSQL
