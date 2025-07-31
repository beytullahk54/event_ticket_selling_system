# Event Ticket Selling System

Bu bir event ticket selling system'dir.

## Teknolojiler

- **Frontend:** Nuxt.js
- **Backend:** Laravel 12

## Frontend Kurulumu

```bash
cd frontend
yarn install
yarn dev
```

Frontend sayfaya http://localhost:3000 adresinden erişebilirsiniz.

## Backend Kurulumu

```bash
cd backend
composer install
php artisan migrate
php artisan db:seed
php artisan serve
```