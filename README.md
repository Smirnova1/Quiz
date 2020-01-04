# Quiz

The Quiz is realized on Laravel 6 and MySQL.
## Demo
[http://simple-quizzes.herokuapp.com/](http://simple-quizzes.herokuapp.com/)

## Official Documentation
Documentation for the framework can be found on the [Laravel documentation](https://laravel.com/)

## How to use:
###### For appropriate work of the program you need:

1. Create an empty Database `CREATE DATABASE yourdatabasename`
2. Run: `git clone https://github.com/Smirnova1/Quiz.git` 
    * Go to Quiz `cd Quiz`
3. Generate .env file `cp .env.example .env` (for Linux and MAC) `copy .env.example .env` (for Windows)
4. Run the commands `composer install`
5. Fill .env file:
    * `APP_KEY=` <p>for key generation `php artisan key:generate`</p>
    * Database:
     ```
        DB_DATABASE=yourdatabasename
        DB_USERNAME=yourusername
        DB_PASSWORD=yourpassword
      ```
6. Run the command  `php artisan migrate` to complete the database with tables. And also execute the command `php artisan db:seed` to autocomplete the database.

###### Use the command `php artisan serve` to start The Quiz on the local host.

