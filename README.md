## To create laravel app

composer create-project laravel/laravel crud-laravel

## To start development server

php artisan serve

## Setup database

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=port
DB_DATABASE=database_name
DB_USERNAME=root
DB_PASSWORD=

## To execute default migrations

php artisan migrate

## To create migraion file for a table - 'sample_data'

php artisan make:migration sample_data

## To execute migration after creating new table

php artisan migrate

## To create a new model

php artisan make:model model_name

## To create a new controller

php artisan make:controller controller_name

## Laravel MVC Architecture

[Laravel MVC](laravel-mvc.png)
