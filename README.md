# Prueba sgfglobal para Laika

#### se realiza un proyecto el cual cuenta con 2 tablas categorias y articulos la cual, poseen un proyecto echo en laravel con su respectiva base de datos, procedimientos almacenados, metodos de logueos, endpoint de consumo para los articulos y un frond el cual permite una interaccion. 


# Contenidos
---------------
* Base de datos
  * Tablas de categorias y tabla de articulos.
  * stored procedure.
* Aplicativo laravel
  * Fuentes del aplicativo.
  * Login y Registros -> usuario/password ("ricardoandresbonilla@gmail.com"/"Control123").
  * frond de categorias con su respectivo crud. 
  * frond de articulos con su respectivo crud. 
  * Endpoint referentes en las rutas "api/endpointArticles" donde permite hacer un crud completo por los metodos get, post, put y delete.
  * creacion de middleware "dataAllArticles" el cual recibe un parametro llamado header el cual valida si es un string con el dato "api-key-laika", si es lo redirecciona a un metodo get el cual muestra los articulos, pero si no este retorna un mensaje de error.

