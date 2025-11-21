#!/bin/bash

echo "installing dependency files"
composer install

echo "copying .env file"
cp .env.example .env

echo "generating app key"
php artisan key:generate

echo "running migrations"
php artisan migrate --seed


echo "start server"
php artisan serve
