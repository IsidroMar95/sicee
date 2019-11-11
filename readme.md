# SICEE - Sistema Integral EPCA

## Descripción

Sistema de calificaciones EPCA

## Autores

Isidro Martínez
[@IsidroMar95](https://github.com/IsidroMar95)

# Historial de versiones

Proyecto SICEE correspondiente a 12v0 cuatrimeste.

## Installation

Clone the repo locally:

```sh
git clone https://github.com/IsidroMar95/sicee.git
cd sicee
```

Install PHP dependencies:

```sh
composer install
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create an MySQL database.

```sh
sicee.sql
```

Run database migrations:

```sh
php artisan migrate
```

Run database seeder:

```sh
php artisan db:seed
```

You're ready to go! Visit sicee in your browser, and login with:

-   **Username:** mari6208
-   **Password:** epca123
