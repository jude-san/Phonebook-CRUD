<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>

</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Getting Started

-   Make sure you have `Composer` installed on your workstation.
-   Open your terminal.
-   Locate the directory containing this repo.
-   Run this code `composer update` to install and update dependencies for the app.
-   Change file named `.env.example` to `.env`.
-   Run this `php artisan key:generate`.
-   Update your database configurations in the environment file (`.env`).

```
{
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=phonebook_crud
DB_USERNAME=##########
DB_PASSWORD=##########
}
```

-   Run this `php artisan migrate` , choose `y` to create the app database if none existed.
-   **Optional**: To pre-load data into your database type run `php artisan db:seed`
-   Run `php artisan serve`.
-   Open your browser and paste this link `127.0.0.1:8000/views`.
-   Have fun :thumbsup:

## Contributing

## Code of Conduct

## Security Vulnerabilities

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
