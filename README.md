# User Interface with Laravel + Inertia + Vue

A dashboard UI built from a Figma design, using **Laravel 12**, **Vue 3**, **Inertia.js 2**, **TypeScript** and **Tailwind CSS 4**.
The goal was to turn the design into a real, working, responsive front end backed by Laravel.

## Features

- **Dashboard** made of reusable Vue components:
  - customers, orders and monthly target cards
  - monthly sales chart and statistics line chart (ApexCharts)
  - customer demographics
  - recent orders table
- **Customers**: paginated list and a create form with validation (name, unique email, phone)
- **Authentication** (login, register, email verification, password reset)
- **Settings** pages for profile, password and appearance (light / dark mode)
- Poppins font, self-hosted

## Status

Orders have a database table and model, but the order pages (`OrderController`) are not built yet. Editing and deleting customers are also still to do.

## Tech stack

- PHP 8.2+, Laravel 12, Inertia.js, Ziggy
- Vue 3, TypeScript, Vite
- Tailwind CSS 4, reka-ui, lucide icons
- ApexCharts (vue3-apexcharts)
- SQLite

## Getting started

```bash
git clone https://github.com/xSAMRATx/User_Interface_Laravel_Inertia_Vue.git
cd User_Interface_Laravel_Inertia_Vue

composer install
npm install

cp .env.example .env
php artisan key:generate
php artisan migrate

php artisan serve   # terminal 1
npm run dev         # terminal 2
```

Or start both with `composer run dev`. Then open http://localhost:8000.

## Project structure

- `resources/js/pages/DashboardMain.vue` — the dashboard built from the design
- `resources/js/pages/Customers` — customer list and create form
- `app/Http/Controllers/CustomerController.php` — customer list and store
- `database/migrations` — customers and orders tables

## Author

**Md. Abdul Aziz Samrat** — [GitHub](https://github.com/xSAMRATx) · [LinkedIn](https://www.linkedin.com/in/md-abdul-aziz-samrat-797738206/)
