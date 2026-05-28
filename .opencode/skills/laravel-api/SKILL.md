---
name: laravel-api
description: Laravel API backend for SaaS. Use when working on routes, controllers, models, migrations, Eloquent, validation, API resources, Sanctum auth, or any backend logic. Subdomain: api.****
---

# Laravel API (api.****)

## Stack
- **Laravel 11** with PHP 8.3
- **PostgreSQL** database
- **Laravel Sanctum** for API token/SPA authentication
- API-only — no Blade views for app UI

## Conventions
- All routes in `routes/api.php` (prefix `api/`)
- Use API resource controllers (`php artisan make:controller --api --resource`)
- Form requests for validation (`php artisan make:request StoreXRequest`)
- Eloquent API resources for JSON responses
- Convention: `ModelNameController` → `ModelNameResource` → `StoreModelNameRequest`

## Key paths
- `application/api/app/Http/Controllers/Api/` — API controllers
- `application/api/app/Http/Requests/` — form requests
- `application/api/app/Http/Resources/` — API resources
- `application/api/app/Models/` — Eloquent models
- `application/api/database/migrations/` — DB migrations
- `application/api/routes/api.php` — API routes

## Database
- PostgreSQL, not SQLite/MySQL
- Use `pgsql` driver in `.env`
- Migrations should be reversible (use `up`/`down`)
- Use foreign key constraints

## Testing
- Pest for feature/unit tests
- Test API endpoints with `actingAs()` for auth
- Use `RefreshDatabase` trait
