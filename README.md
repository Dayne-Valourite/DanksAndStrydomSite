<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Client Website Specifications Repository

## Overview

- This repository serves as the Laravel website for the domain danksandstrydom.co.za
- Currently this repository is being served under app.danksandstrydom.co.za
- Shell access has been provided to updated and install any required dependencies
- The current root document for this laravel project falls under home/app.danskandstrydom.co.za/
- Once in production, move the project over to /home/site

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Local Setup](#local-setup)
- [Deployment Process](#deployment-process)
- [Prerequisites](#prerequisites)
- [Contributing](#contributing)
- [License](#license)

## Features

- **To be updated**

## Local Setup

To get the project running locally, follow these steps:

### 1. Clone the Repository

```bash
git clone https://github.com/Dayne-Valourite/DanksAndStrydomSite.git
cd DanksAndStrydomSite
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Configure the Database

```bash
touch database/database.sqlite
```

### 4. Create `.env` File

Copy the example environment configuration:

```bash
cp .env.example .env
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Run Migrations

This will recreate the database - or create it - as well as populate it with any seeder classes

```bash
php artisan migrate:fresh --seed
```

### 7. Build the environment

Npm run build is required to make use of installed tailwind

```bash
npm install
npm run build
```

### 8. Serve project locally

The project will be served over localhost - 127.0.0.1:8000

```bash
php artisan serve
```

## Deployment Process

- Access the danksandstrydom cpanel
- Navigate to the git version control
- Click on the github repository DanksAndStrydomSite "manage" button
- Navigate to Pull or Deploy Tab
- Click "update from Remote"

## Prerequisites

Before setting up the project locally or configuring deployment hooks, ensure you have the following installed on your machine:

- [PHP](https://www.php.net/) (version 7.4 or higher)
- [Composer](https://getcomposer.org/)
- [Git](https://git-scm.com/)
- [Laravel](https://laravel.com/) (optional, as Laravel is a dependency managed via Composer)
- [Git Bash](https://gitforwindows.org/) (for Windows users to run Bash scripts and set executable permissions)

## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. **Clone the Repository**

   ```bash
   git clone https://github.com/Dayne-Valourite/Web.git
   cd Web
   ```

2. **Make Changes**

   Implement your feature or fix.

3. **Stage and Commit Your Changes**

   ```bash
   git add .
   git commit -m "Add some feature"
   ```

4. **Push to the Branch**

   ```bash
   git push origin main
   ```

**Note:** Ensure your code follows the project's coding standards and includes relevant tests where applicable.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).