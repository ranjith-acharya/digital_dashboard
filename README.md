# Digital Dashboard

A web-based digital dashboard built with Laravel, providing a comprehensive view of your data.
<p align="left">
  <img src="https://img.shields.io/github/languages/count/ranjith-acharya/digital_dashboard?style=for-the-badge">
  <img src="https://img.shields.io/github/languages/top/ranjith-acharya/digital_dashboard?style=for-the-badge">
  <img src="https://img.shields.io/github/last-commit/ranjith-acharya/digital_dashboard?style=for-the-badge">
</p>

## Table of Contents
- [About](#about)
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)

## About

Digital Dashboard is a Laravel-based project that offers a customizable digital dashboard to visualize and monitor data effectively.

## Features

- **Customizable Widgets:** Arrange and configure widgets according to your preferences.
- **Real-time Updates:** Receive live updates on your dashboard.
- **User Authentication:** Secure your dashboard with user authentication.

## Requirements

- PHP 8.1.25
- Composer 2.6.6
- Laravel 10.39.0
- MySQL Database

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/digital-dashboard.git
   cd digital-dashboard
   ```
2. Install dependencies:
    ```bash
    composer install
    ```
3. Copy the .env.example file to .env and update the database configuration.
4. Generate the application key:
    ```bash
    php artisan key:generate
    ```
5. Migrate the database:
    ``` bash
    php artisan migrate
    ```

## Usage
1. Start the development server:
    ```bash
    php artisan serve
    ```
2. Visit http://localhost:8000 in your browser to access the Digital Dashboard.

## Contributing
##### We welcome contributions! Follow these steps to contribute to the project:
1. Fork the repository.
2. Create a new branch: git checkout -b feature-branch
3. Make your changes and commit them: git commit -am 'Add new feature'
4. Push to the branch: git push origin feature-branch
5. Submit a pull request.