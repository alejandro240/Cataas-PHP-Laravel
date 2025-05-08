# Cataas-PHP-Laravel

## ¿Qué hace?
Esta app consume la API de CATAAS para mostrar gatos e imágenes GIF en una galería.

## Cómo instalar

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
