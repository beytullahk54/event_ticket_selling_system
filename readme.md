# Event Ticket Selling System

Bu bir etkinlik bilet satış sistemidir.

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

Bu projenin demo versiyonuna aşağıdaki adresten ulaşabilirsiniz:

https://event-ticket-selling-system.vercel.app/