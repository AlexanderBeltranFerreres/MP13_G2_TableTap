#!/bin/bash

echo "Starting Laravel on port ${PORT:-10000}"

# MIGRACIONS
php artisan migrate --force

# SEEDERS (refresca i re-seedeja la base de dades)
php artisan migrate:refresh --seed --seeder=Database\\Seeders\\MunicipiProvinciaSeeder --force

# CREA L'ENLLAÇ SIMBÒLIC PER /storage
php artisan storage:link

# SERVEIX L'APP
php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
