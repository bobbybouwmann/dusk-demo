# Laravel Dusk Demo

This is a demo project for the Alpha version of [Laravel Dusk](https://github.com/laravel/dusk). It basically tests the register and login functionality from the default application scaffold from Laravel running `php artisan make:auth` using Dusk.

You can find the tests in the `tests/Browser` directory. For more information on the functions see the [Laravel Dusk documentation](https://github.com/laravel/dusk/blob/master/readme.md).

## Travis
This project is build on Travis and also runs the `php artisan dusk` command there which is really cool!

## Running Dusk!

- Clone or fork and clone the project
- Run `composer install`
- Create a database, default database name is set to `dusk_test`. So if you use a different database you need to update `.env.dusk.local`
- Make sure your application is accessible by the browser. I used [homestead](https://laravel.com/docs/5.3/homestead) to set everything up.
- Run `php artisan dusk` to run the tests

You might see some chrome windows popup! Dusk is doing that for you! How **awesome** is that? If you watch the windows carefully you can even see the fields being filled.

> Note: You don't have to migrate the database since it will migrate the database for each test. See `use DatabaseMigrations` in the test classes.