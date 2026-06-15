# Curso Interactivo de capacitacion
Este proyecto presenta el contenido de un curso proporcionado por [Capacitate para el empleo](https://capacitateparaelempleo.org/), con un esquema SPA donde todo el contenido de la pagina se actualiza de forma dinamica sin que se cambie o refresque la pagina en si.

## Como funciona?

Cuando se selecciona un nivel en la barra de navegación superior, aparecen los temas y lecciones de dicho nivel en la barra de navegacion lateral (izquierda), y una vez que se selecciona una lección, su contenido se plasma en la caja de contenido (derecha), donde podras leer el texto que conforma dicha lección, asi como su material audiovisual (videos o documentos).
El contenido es dinamico y la presentación es responsiva, compatible con multiples dispositivos moviles.

## Que hay detras?

El proyecto esta montado con el Framework de PHP CodeIgniter, usando la liberia JQuery para actualizar el contenido en sus respectivos div, segun ciertos criterios en la URL.

## Resumen del modelo de negocio
El controlador principal (Home) a la hora de inicializarse, usa un helper para obtener todos los datos del curso (almacenados en un archivo JSON), cuando el usuario busque el contenido del Nivel 1, una funcion de Javascript realizara una petición a la ruta interna que buscara el contenido de este nivel, tomando como base los datos obtenidos del controlador principal, y lo devolvera como response en formato HTML, misma response se plasmara en el div correspondiente a la barra de navegación lateral usando JQuery, sucediendo lo mismo a la hora de buscar material especifico de este nivel, que se plasmara en la caja de contenido (Con su respectivo enfoque automatico al div).
Adicionalmente, una vez que se cumplen estas peticiones, la URL actualiza sus parametros sin recargar la página, para que, en caso de que esta se recargue, automaticamente se cargue en el ultimo material y nivel visitado.
