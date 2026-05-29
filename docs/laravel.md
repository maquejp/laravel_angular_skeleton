# Laravel Useful Commands

## Artisan Commands

### `php artisan make:model ModelName`
Creates a new Eloquent model class in `app/Models/`.

### `php artisan make:controller ControllerName`
Creates a new controller class in `app/Http/Controllers/`.

### `php artisan make:migration create_table_name`
Creates a new database migration file in `database/migrations/`.

### `php artisan make:resource ResourceName`
Creates a new API resource class in `app/Http/Resources/`.

### `php artisan make:request RequestName`
Creates a new form request class (for validation) in `app/Http/Requests/`.

### `php artisan migrate`
Runs all pending database migrations.

### `php artisan migrate:fresh`
Drops all tables and re-runs all migrations from scratch.

### `php artisan db:seed`
Runs the database seeder classes defined in `database/seeders/`.

### `php artisan route:list`
Displays all registered routes, their methods, URIs, and controllers.

### `php artisan serve`
Starts the Laravel development server on `http://localhost:8000`.

### `php artisan tinker`
Opens an interactive REPL shell to interact with your application.

### `php artisan cache:clear`
Clears the application cache.

### `php artisan config:cache`
Caches the configuration files for faster performance.

### `php artisan storage:link`
Creates a symbolic link from `public/storage` to `storage/app/public`.

### `php artisan make:factory FactoryName`
Creates a new model factory in `database/factories/`.

### `php artisan make:seeder SeederName`
Creates a new seeder class in `database/seeders/`.

### `php artisan key:generate`
Sets the `APP_KEY` environment variable in your `.env` file.

## Useful Flags

- `--resource` (e.g., `make:controller`): Generates a controller with CRUD methods.
- `--api` (e.g., `make:controller`): Generates a controller with API-only methods (index, show, store, update, destroy).
- `--migration` / `-m` (e.g., `make:model`): Creates a migration file alongside the model.
- `--factory` / `-f`: Creates a factory alongside the model.
- `--seed` / `-s`: Creates a seeder alongside the model.
- `--controller` / `-c`: Creates a controller alongside the model.
- `-mfsc` (e.g., `make:model ModelName -mfsc`): Shorthand to create model with **m**igration, **f**actory, **s**eeder, and **c**ontroller all at once.

## Tutorial

For a step-by-step guide on creating a complete API endpoint, see [laravel-api-tutorial.md](laravel-api-tutorial.md).

## Composer Commands

### `composer dump-autoload`
Regenerates the list of all classes that need to be autoloaded.

### `composer require package/name`
Installs a Composer package and adds it to `composer.json`.
