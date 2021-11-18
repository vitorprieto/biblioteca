# Laravel Library

This repository represents my implementation for the Technical Test applied by Maniak.

## Installation

Clone the repository

    git clone git@github.com:2Fac3R/laravel-library.git

Switch to the repo folder

    cd laravel-library

Install all the dependencies using composer

    composer install

For this specific test project I decided to delete '.gitignore' file to upload all the files, so you don't have to change config files.

You can use the database.sqlite file I uploaded or migrate and seed the database with new data.

Run the database migrations

    php artisan migrate

Run the database seeders (run them all or individually)

    php artisan db:seed
	or...
    php artisan db:seed --class=DatabaseSeeder
    php artisan db:seed --class=CategorySeeder
    php artisan db:seed --class=BookSeeder
    php artisan db:seed --class=BookInstanceSeeder

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

## Usage

Log in or create a new user

    http://localhost:8000/dashboard
    http://localhost:8000/register
    http://localhost:8000/login
    
You can access to the following resources routes

    http://localhost:8000/categories
    http://localhost:8000/books
    http://localhost:8000/bookinstances

Create a new Book

    http://localhost:8000/books/create
Get a resource

    http://localhost:8000/books/{id}
 Edit a resource
 
    http://localhost:8000/books/{id}/edit

All resources work the same, you can try using categories for example.
## Description

I decided to use the following dependencies:

* [ Jetstream](https://jetstream.laravel.com/2.x/introduction.html) It's a beautifully designed application starter kit for Laravel.
* [Livewire](https://laravel-livewire.com/) It's a full-stack framework for Laravel that makes building dynamic interfaces simple, without leaving the comfort of Laravel.

You can see all dependencies in the "composer.json" file.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Any feedback is appreciated.