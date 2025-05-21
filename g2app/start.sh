#!/bin/bash

echo "Starting Laravel on port ${PORT:-10000}"

php artisan migrate --force

php artisan db:seed --class=Database\\Seeders\\MunicipiProvinciaSeeder

php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
