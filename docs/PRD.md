# Product Requirements Document — SaaS Application

## Overview
A multi-tenant SaaS platform with a Laravel JSON API backend and an Angular SPA frontend.

## Architecture
```
app.**** (Angular SPA) ──HTTP──► api.**** (Laravel API) ──SQL──► PostgreSQL
```

## Tech Stack
| Layer       | Technology                     |
|-------------|--------------------------------|
| Backend     | Laravel 11 (PHP 8.3)           |
| Frontend    | Angular (standalone components)|
| Database    | PostgreSQL 16                  |
| Auth        | Laravel Sanctum (SPA + tokens) |
| Dev         | Devcontainer (Docker Compose)  |

## Subdomains
- `api.****` — RESTful JSON API (no Blade views for the app)
- `app.****` — Angular single-page application

## High-Level Features (TBD)
- User authentication & registration
- Team/organization management
- Subscription & billing
- Core domain-specific functionality
- Admin dashboard

## Non-Goals (v1)
- No Blade-based admin panel
- No mobile apps
- No real-time features (WS/reverb)

## Constraints
- API-only Laravel (no Blade rendering for the SPA)
- PostgreSQL, not MySQL/SQLite
- Conventional commits throughout
