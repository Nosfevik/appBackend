<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



## Instalacion

Descargar el repositorio.zip y descomprimir
- Abrir una consola dentro de la carpeta "api"
- Ejecutar el comando "composer install"
- Ejecutar comando "code ." para abrir el proyecto con visual studio code
- Buscar el archivo ".env.example" y renombrarlo por ".env" verificar que la conexión "DB_CONNECTION" a la base de datos corresponda a su servidor de mysql
- En la consola ejecutar el comando "php artisan migrate"
- Una vez que termine de ejecutar, ir a verificar que la base de datos se haya creado
- Ejecutar el comando "php artisan key:generate"
- Ejecutar el comando "php artisan storage:link"
- Ejecutar el comando "php artisan serve"
- El proyecto ya debe estar ejecutandose.

## Importar datos DB
- Importar el archivo "api_crud" que se encuentra en la carpeta "Base de datos" dentro del proyecto para poblar con datos.




