# GMG Luxury Fashion

Proyecto web desarrollado con Laravel para una tienda de ropa de lujo llamada GMG Luxury Fashion.

## Autor

Gabriel Méndez

## Nombre del negocio

GMG Luxury Fashion

## Descripción

GMG Luxury Fashion es un proyecto de comercio electrónico enfocado en la venta de ropa y productos de moda de lujo. El sitio cuenta con catálogo de productos, registro e inicio de sesión y funciones orientadas a una tienda en línea.

## Requisitos

Para ejecutar el proyecto se necesita:

- PHP 8.3 o superior
- Composer
- Laravel
- MySQL
- Node.js y npm
- Git

## Instalación desde cero

1. Clonar el repositorio:

   `git clone https://github.com/gm038478-debug/GMG-Luxury-Fashion.git`

2. Entrar a la carpeta del proyecto:

   `cd GMG-Luxury-Fashion`

3. Instalar las dependencias de PHP:

   `composer install`

4. Instalar las dependencias de Node.js:

   `npm install`

5. Crear el archivo `.env` a partir del archivo de ejemplo:

   `copy .env.example .env`

6. Generar la clave de Laravel:

   `php artisan key:generate`

7. Crear una base de datos MySQL y configurar sus datos en el archivo `.env`.

8. Ejecutar las migraciones:

   `php artisan migrate`

9. Compilar los recursos del proyecto:

   `npm run build`

10. Iniciar el servidor:

   `php artisan serve`

11. Abrir en el navegador:

   `http://127.0.0.1:8000`

## Seguridad

El archivo `.env` se encuentra excluido mediante `.gitignore` para evitar publicar información sensible del proyecto.
