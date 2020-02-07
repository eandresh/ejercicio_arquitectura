# Ejercicio arquitectura

Arquitectura a aplicar [Arquitectura por Capas]
- Se decide aplicar esta arquitectura debido a que es la mas sencilla de usar y el tamaño del proyecto

# Estructura Proyecto Landing Page

Front - Capa de presentación - Síncrona / Asíncrona (ajax)
    - Listado de películas.
    - Detalle de película.
PHP(servicios) - Capa de lógica
    - Controladores
        - Obtener el listado de películas.
        - Obtener el detalle de una película.
    - Casos de uso
        - Listar películas.
        - Obtener una película.
    - Repositorios
        - Películas
            - Obtener todas las películas.
            - Obtener una película.
Base de datos - Capa de negocio
RDB
    - Movies

# Integrantes 
	- Julio de Hoyos
	- Miguel Castañeda
	- Elvis Heredia


# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
