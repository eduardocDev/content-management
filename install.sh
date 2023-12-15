#!/bin/bash
chmod 777 -R .
mv .env.sample .env
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed