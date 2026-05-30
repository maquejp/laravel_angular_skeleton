# Skeleton Setup Steps

> Commands to reproduce this project from scratch.

## Prerequisites

- PHP 8.3+
- Composer
- Node 22+
- Docker (for devcontainer, optional)

## Steps

### 1. Create project directory & init git

```bash
mkdir my-saas && cd my-saas
git init
git add -A && git commit -m "chore: initial commit"
```

### 2. Install Laravel 11

```bash
composer create-project laravel/laravel:^11.0 .
cp .env.example .env
php artisan key:generate
```

### 3. Install and configure Sanctum

```bash
composer require laravel/sanctum
php artisan install:api
```

### 4. Configure PostgreSQL

Edit `config/database.php` → set `'default' => env('DB_CONNECTION', 'pgsql')`.
Update `.env`:

```text
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=saas_api
DB_USERNAME=postgres
DB_PASSWORD=postgres
```

### 5. Create Angular app

```bash
npx @angular/cli@latest new frontend --directory frontend --routing --style scss --standalone
cd frontend && npm install
```

### 6. Restructure directories

```bash
mkdir -p application/api application/app
# Move all Laravel files → application/api/
# Move all Angular files  → application/app/
```

### 7. Add root .gitignore

```gitignore
/vendor
/.env
/application/api/vendor
/application/api/.env
/application/app/node_modules
/application/app/.angular
```

### 8. Create devcontainer

Create `.devcontainer/` with:

- `devcontainer.json`
- `Dockerfile` (PHP 8.3 + Node 22 + pdo_pgsql)
- `docker-compose.yml` (app + PostgreSQL 16)
- `postCreateCommand` installs Composer deps, sets `.env`, generates `APP_KEY`, and installs opencode

### 9. Create opencode skills & agents

```bash
mkdir -p .opencode/skills/laravel-api .opencode/skills/angular-frontend .opencode/skills/ops .opencode/agents
```

Add `opencode.json` with skills path registration.

### 10. Final commit

```bash
git add -A
git commit -m "feat: scaffold Laravel API + Angular app with devcontainer"
```
