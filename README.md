# Portfolio

![CI](https://github.com/eojeel/portfolio/actions/workflows/tests.yml/badge.svg)

This is my portfolio, built with the [Laravel Starter Kit](https://github.com/nunomaduro/laravel-starter-kit).

## About The Project

This project is a showcase of my work and skills. It is built with the Laravel framework and prioritizes code quality, type safety, and modern development practices.

This project uses the following key technologies and tools:

*   **Backend:** [Laravel](https://laravel.com/)
*   **Frontend:** [Vite](https://vitejs.dev/), [Tailwind CSS](https://tailwindcss.com/)
*   **Testing:** [Pest](https://pestphp.com/)
*   **Code Quality:** [Laravel Pint](https://github.com/laravel/pint), [Larastan](https://github.com/larastan/larastan), [Rector](https://getrector.com/)
*   **Development Environment:** [Laravel Sail](https://laravel.com/docs/sail) (optional)

## Getting Started

To get started, you will need to have the following installed:

*   PHP >= 8.4.0
*   Composer
*   Node.js
*   NPM

Once you have everything installed, you can clone the repository and install the dependencies:

```bash
git clone https://github.com/eojeel/portfolio.git
cd portfolio
composer install
npm install
```

Next, you will need to create a `.env` file and generate a new application key:

```bash
cp .env.example .env
php artisan key:generate
```

Finally, you can run the migrations and seed the database:

```bash
php artisan migrate --seed
```

## Usage

To start the development server, you can use the `dev` script:

```bash
composer dev
```

This will start the Laravel server, queue worker, log monitoring, and Vite dev server concurrently.

You can also use the following commands:

*   `php artisan serve`: Starts the Laravel development server.
*   `npm run dev`: Starts the Vite development server.
*   `composer test`: Runs the test suite.
*   `composer lint`: Lints the codebase.

## Contributing

Contributions are welcome! Please feel free to submit a pull request.

## License

This project is licensed under the MIT License.
