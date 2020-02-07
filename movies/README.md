# Ejercicio arquitectura

Arquitectura a aplicar 
##[Arquitectura por Capas]
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
	
	
# Cambios Release 2.0
* Se añade servicio para consumir api de themoviesdb.org
* se añade nuevo repositorio para consumir nuevo servicio
* se cambia el bind del repositorio para que apunte a la nueva base de datos 

