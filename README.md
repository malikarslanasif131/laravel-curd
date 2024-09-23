<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Project

**Laravel CRUD** is a simple Laravel-based CRUD (Create, Read, Update, Delete) application, designed to demonstrate basic operations in Laravel. The project allows users to manage records in a database, showcasing essential functionality for managing data using Laravel.

### Features

- **Create**: Add new records with fields for `name`, `day`, and `description`.
- **Read**: View a list of all records stored in the database.
- **Update**: Modify existing records with validation.
- **Delete**: Remove records from the database.

The project is styled using Bootstrap to provide a clean, responsive interface.

### Technologies Used

- **Laravel 11.x** (Framework)
- **PHP 8.2.x**
- **MySQL** (or any database supported by Laravel)
- **Bootstrap 5** (for styling)
- **Git** (for version control)

### Prerequisites

Before running this project, make sure you have the following installed:

- PHP 8.2 or higher
- Composer
- MySQL or another database system
- Git

### Installation

To run this project locally, follow these steps:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/malikarslanasif131/laravel-curd.git
   cd laravel-curd
   ```

2. **Install dependencies**:
   Run the following command to install all required dependencies:
   ```bash
   composer install
   ```

3. **Environment setup**:
   Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```

   Open `.env` and update the database configuration to match your local setup:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```

4. **Generate the application key**:
   ```bash
   php artisan key:generate
   ```

5. **Run migrations**:
   Run the following command to create the necessary tables in the database:
   ```bash
   php artisan migrate
   ```

6. **Run the development server**:
   Start the application by running:
   ```bash
   php artisan serve
   ```

   Visit `http://127.0.0.1:8000` in your browser to access the application.

### Usage

Once the application is running, you can:

- Add new records by navigating to `/add`.
- View all records on the homepage.
- Edit records by clicking the "Edit" link next to each record.
- Delete records by clicking the "Delete" link next to each record.

### Validation

This application includes validation for input fields using Laravel’s built-in validation functionality. The form fields will display Bootstrap-styled validation error messages if the inputs are invalid.

### Contributing

If you'd like to contribute to this project:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -m 'Add some feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Open a pull request.

### License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
