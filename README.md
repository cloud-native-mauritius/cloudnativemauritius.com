<p align="center"><a href="https://community.cncf.io/cloud-native-mauritius/" target="_blank"><img src="https://raw.githubusercontent.com/cncf/artwork/3f0fb8808bff60f0899233e5e49aa1af055bb6ab/other/cncg/icon/color/cncg-icon-color.svg" width="100" alt="Cloud Native Community Groups Logo"></a></p>

<!-- <p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p> -->

# Cloud Native Mauritius

## Prerequisites

Clone the repository and ensure the followings are installed:

- PHP Composer
- NPM
- SQLite

## Install Dependencies

1. Install all necessary PHP dependencies.

    ```bash
    composer install
    ```

2. Install all necessary Node.js dependencies.

    ```bash
    npm install
    ```

## Setting Up Laravel

1. Copy `.env.example` to `.env` in the project root.

    ```bash
    cp .env.example .env
    ```

2. Generate a unique application key.

    ```bash
    php artisan key:generate
    ```

## Setting Up SQLite for Development

1. Run the migration command

    ```bash
    php artisan migrate
    ```

2. When prompted to create a new SQLite database, type `yes`.

## Run the Frontend Stack for Development

Ensure you are in the root directory and run the following commands:

1. Start the Laravel development server.

    ```bash
    php artisan serve # or use Herd (https://herd.laravel.com/)
    ```

2. Generate ide helper.

    ```bash
    composer run ide
    ```

3. Start the frontend development server.

    ```bash
    npm run dev
    ```

4. The application should now be accessible on port `8000` (or `http://cloudnativemauritius.com.test` on herd)


5. Advanced dev tool available on `<host>/__clockwork`

<!-- ## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->
