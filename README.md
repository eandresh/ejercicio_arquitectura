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


Eligiendo una de las estrategias descritas anteriormente (Clean, Capas, Hexagonal, DDD) elaborar el landing page
 de una pagina que debe mostrar reseñas de películas.

```
Requisitos:
- Equipos maximo de 3 personas.
- Deben hacer fork a este repositorio.
- Deben incluir en el md la descripción y justificación de las decisiones de arquitectura que tomaron junto a la lista de los integrantes.
- La fuente de datos debe ser derivada del dump adjunto en este repositorio.
- El front debe ser simple (No se va a tomar en cuenta el diseño mas allá de que sea legible).
- Tiempo límite: 3 horas.
- PHP, con libertad de elección del framework.
- Deben simplificar su diseño de tal forma que pueda ser realizado en el tiempo estipulado.
```
