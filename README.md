# Laravel + React + Supabase Starter Kit

This project is a scaffolding for building Laravel applications with Socialite authentication, Supabase as the database, React/Inertia for the frontend, and various development tools pre-configured.

## Features

- **Socialite Authentication**: Pre-configured Google OAuth login.
- **Supabase Integration**: Ready for Supabase database configuration.
- **React/Inertia**: Modern frontend with React and Inertia.js.
- **Development Tools**:
    - Laravel Debugbar
    - Laravel IDE Helper
    - Laravel Pint for code formatting

## Getting Started

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js and npm
- Supabase account (or any other database)
- Google OAuth credentials

### Installation

1. Clone the repository:

    ```bash
    git clone <repository-url>
    cd supa-lara
    ```

2. Install PHP dependencies:

    ```bash
    composer install
    ```

3. Install JavaScript dependencies:

    ```bash
    npm install
    ```

4. Build frontend assets:

    ```bash
    npm run dev
    ```

5. Generate application key:

    ```bash
    php artisan key:generate
    ```

6. Configure your `.env` file:

    - Copy the example file:
        ```bash
        cp .env.example .env
        ```
    - Update the following variables in `.env`:

        #### Google OAuth

        ```
        GOOGLE_CLIENT_ID=your-google-client-id
        GOOGLE_CLIENT_SECRET=your-google-client-secret
        GOOGLE_REDIRECT_URI=http://your-app-url/auth/google/callback
        ```

        #### Supabase Database

        ```
        DB_CONNECTION=pgsql
        DB_HOST=your-supabase-host
        DB_PORT=5432
        DB_DATABASE=your-database-name
        DB_USERNAME=your-database-username
        DB_PASSWORD=your-database-password
        ```

        #### Other

        ```
        APP_URL=http://your-app-url
        ```

7. Run migrations:
    ```bash
    php artisan migrate
    ```

### Development Tools

- **Laravel Debugbar**: Debugging tool for Laravel.
- **Laravel IDE Helper**: Provides IDE autocompletion for Laravel.
- **Laravel Pint**: Run code formatting with:
    ```bash
    vendor/bin/pint
    ```

### Usage

- Start the development server:
    ```bash
    php artisan serve
    ```
- Access the application at `http://localhost:8000`.

### Authentication

- Google OAuth is pre-configured. Users can log in using their Google accounts.
- Ensure the `GOOGLE_CLIENT_ID`, `GOOGLE_CLIENT_SECRET`, and `GOOGLE_REDIRECT_URI` are correctly set in `.env`.

### License

This project is licensed under the MIT License.
