#!/bin/sh
    
    set -e
    
    phpenv local 7.1

    mysql -e 'create database ucss_tests;'

    cp .env.codeship .env
    
    composer install --prefer-dist --no-interaction -o --optimize-autoloader
    
    php artisan key:generate    
    php artisan migrate --force --env="ucss_tests"
    php artisan db:seed --env="ucss_tests"

    #cp phpunit.xml.ci phpunit.xml

    vendor/bin/phpunit