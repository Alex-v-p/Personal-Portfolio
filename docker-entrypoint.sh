#!/bin/bash

echo "🚀 Running Laravel container setup..."

# Wait for DB if needed (adjust delay as necessary)
sleep 5

# Laravel setup
php artisan storage:link
php artisan migrate:fresh --seed --force
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ Laravel is ready."

# Start PHP-FPM
exec php-fpm
