# RESTAURANTE QUEEN BURGER (Laravel y Vue)
# CLIENTE SERVIDOR (UNIVERSIDAD NACIONAL DE PIURA)

![restaurante-img](https://images.pexels.com/photos/4450334/pexels-photo-4450334.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260)

**Descripcion**:

El siguiente sistema de restaurante a sido desarrollado con [Laravel](https://laravel.com/docs/8.x/installation) y [vue.js](https://vuejs.org/), a sido pensado con fines educativos, prohibida su venta.

**Uusarios por defecto**
1. Admin
* Uusario: frank
* password: password

2. Mesero
* Uusario: carlos
* password: password

3. Almacenero
* Uusario: edwin
* password: password

4. Cajero
* Uusario: jorge
* password: password

**Requesitos para iniciar el proyecto**:

1. Haber instalado [composer](https://getcomposer.org/) version 2.0.6
2. Haber instalado [node](https://nodejs.org/es/) version 15.5.1
3. Una vez descargado el codigo, ubicarse en la raiz del proyecto y ejecutar "npm install"
4. Modicicar el archivo ".env" con las credenciales de configuracion para la base de datos
5. Ejectutar [xampp](https://www.apachefriends.org/es/index.html) version 3.2.4, levantar Apache y mysql
5. Abrir una terminal en la raiz del proyecto ejecutar "php artisan migrate --seed"
6. Ejecutar "php artisan serve"
7. (Opcional) Si se quiere hacer modicifacion al fronent de Vue una vez editado todos los archivos de vue ejecutar "npm run watch" y recargar la pagina

**Exepciones**:

Si se producen errores puede ser por las versiones de composer, php y node que se tenga instalado en el ordenador, para mas informacion consulte la compatibilidad de versiones,
el proyecto esta funcionando con las versiones señaladas al costado de los requisitos para inciar el proyecto 

## ESTRUCTURA DE LOS FOLDER

### Base folder: ./:

*   **/app**:
    Se encuentran Controladores, modelos entre otros archivos, los archivos que estan sueltos dentro de esta carpeta son los models  

    *   **/http/controllers**: Contiene todos los controladores que manejan los disntos modelos.

*   **/database**:
    Se encuentran tablas, archivos de llenado de tablas por defecto (seeder) entre otros archivos
    
    *   **/migrations**: Contiene archivos que mas tarde se convierten en las tablas de la bd
    
    *   **/seeds**: Contiene los seeder o archivos con datos por default para el llenado de las tablas

*   **/public**:
    Se encuentra el index, imagenes, css, plugin js fuentes, entre otros

*   **/routes**:
    Contiene archivos de ruteo que renderizan una u otra vista segun sea el caso.

*   **/resources**:
    Se encuentran vistas, configuracion de lenguaje, archivos sass para estilos
    
    *   **/assets/js**: Componentes de vue 
    
    *   **/lang**: Archivos de lenguaje de configuracion global y por vistas
    
    *   **/views**: Vistas php donde se enlazan los componentes de vue

## DEPENDENCIAS USADAS

*   [axios](): v0.17
*   [bootstrap-sass](): v3.3.7
*   [jquery](): v3.2
*   [laravel-echo](): v1.4.0
*   [pusher-js](): v4.3.1
*   [vue-barcode](): v1.1.0
*   [vue-select](): v2.5.0

## LICENCIA

Este software esta desarrollado bajo la licencia [Licence]().

## AUTHOR

![me](https://avatars.githubusercontent.com/u/55063875?v=4)

[Darkustep](https://github.com/darkus1999)
