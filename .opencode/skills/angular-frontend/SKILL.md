---
name: angular-frontend
description: Angular frontend SPA for SaaS. Use when working on components, services, routing, HTTP interceptors, auth guards, forms, or Angular CLI commands. Subdomain: app.****
---

# Angular Frontend (app.****)

## Stack
- **Angular** standalone components (no NgModules)
- Consumes Laravel API at `api.****`
- SPA with routing

## Conventions
- Standalone components with `OnPush` change detection
- Lazy-loaded feature routes
- Core module for singleton services (auth, API client)
- Environment files for API base URLs

## Key paths
- `frontend/src/app/` — application code
- `frontend/src/app/core/` — singleton services, guards, interceptors
- `frontend/src/app/features/` — lazy-loaded feature modules
- `frontend/src/app/shared/` — shared components, directives, pipes
- `frontend/src/environments/` — environment config

## API communication
- `HttpClient` with interceptors for auth token injection
- API base URL from environment config pointing to `api.****`
- `@angular/common/http` for all HTTP calls

## Auth
- Laravel Sanctum SPA authentication (cookie-based) or token-based
- Auth guard on protected routes
- HTTP interceptor for Authorization header

## Testing
- Jasmine + Karma for unit tests
- Use `HttpTestingController` for API mocking
