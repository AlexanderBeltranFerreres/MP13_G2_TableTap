#!/bin/bash

echo "Starting Laravel on port ${PORT:-10000}"

php artisan migrate --force

php artisan migrate:refresh --seed --seeder=Database\\Seeders\\MunicipiProvinciaSeeder

php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
