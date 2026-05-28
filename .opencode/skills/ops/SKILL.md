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

## Deployment considerations
- API subdomain: `api.****` → Laravel
- App subdomain: `app.****` → Angular (static files or Node SSR)
- Database: PostgreSQL
