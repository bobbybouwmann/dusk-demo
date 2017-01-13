# Laravel Dusk Demo

This is a demo project for the Alpha version of [Laravel Dusk](https://github.com/laravel/dusk). This is still work in progress, so if you find issues just let me know.

## Reading the tests

You can find the tests in the `tests/Browser` directory. For more information on the functions see the [Laravel Dusk documentation](https://github.com/laravel/dusk/blob/master/readme.md).

## Running the tests!

- Clone or fork and clone the project
- Run `composer install`
- Create a database, default database name is set to `dusk_test`. So if you use a different database you need to update `.env.dusk.local`
- Make sure your application is accessible by the browser. I used [homestead](https://laravel.com/docs/5.3/homestead) to set everything up.
- Run `php artisan dusk` to run the tests

> Note: You don't have to migrate the database since it will migrate the database for each test. See `DatabaseMigrations`