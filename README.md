# SaaS Application

## Structure

```
.
├── application/
│   ├── api/          Laravel 11 API backend (api.****)
│   └── app/          Angular frontend (app.****)
├── .devcontainer/    Devcontainer config
├── .opencode/        opencode skills & agents
└── opencode.json     opencode project config
```

## Tech Stack

- **Backend:** Laravel 11 (PHP 8.3), Sanctum
- **Database:** PostgreSQL 16
- **Frontend:** Angular (standalone components)
- **Dev:** Devcontainer (Docker Compose)

## Getting Started

```bash
# API
cd application/api
composer install
cp .env.example .env
php artisan key:generate

# Frontend
cd application/app
npm install
```

## Subdomains

- `api.****` — Laravel JSON API
- `app.****` — Angular SPA
