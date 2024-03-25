# Laravel Livewire Project

This is a Laravel project that utilizes the Livewire package for building reactive, dynamic interfaces.

## Getting Started

Follow these instructions to get the project up and running on your local machine for development and testing purposes.

### Prerequisites

Before you begin, ensure you have the following installed on your system:

- [PHP](https://www.php.net/) (>= 7.4)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (>= 14.x)
- [NPM](https://www.npmjs.com/) or [Yarn](https://yarnpkg.com/)

### Installing

1. Clone the repository to your local machine:

   ```bash
   git clone https://github.com/sarmadkamal464/books-management-laravel.git
   cd books-management-laravel
   
    Composer:

   
    composer install
    ```
    ```sh
    Env setup:

    cp .env.example .env
    ```

    ```sh
    Key generate:

    php artisan key:generate
    ```

    ```sh
    Config cache:

    php artisan config:cache
    ```

 ```sh
    Run the migration:

    php artisan migrate
    ```

    ```sh
    Run the server:

    php artisan serve
    ```
  ```sh
    Run the livewire client:

    npm run dev
    ```

