#!/bin/bash

# Run migrations (ignore failure if DB not ready yet)
cd /workspace/application/api
php artisan migrate --force 2>/dev/null || true

# Start Laravel API dev server
php artisan serve --host=0.0.0.0 &

# Start Angular dev server
cd /workspace/application/app
npm start &

# Keep container alive
sleep infinity
