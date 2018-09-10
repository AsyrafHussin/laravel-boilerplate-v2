#!/bin/bash

rm -rf ./.git && rm -rf ./README.md
composer install -vvv
cp .env.example .env
php artisan key:generate
php artisan config:cache
php artisan config:clear
npm install
npm run dev
echo "Successfully setup!"
rm -rf ./setup.sh
