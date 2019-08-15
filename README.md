# Test - Norte Digital

### Instalación

  - Clonar el proyecto.
```sh
    git clone https://github.com/jorgeperaza2000/test_nortedigital.git <proyecto>
 ```
 - Instalar las dependencias
```sh
    cd <proyecto>
    composer install
```
 - Crear una Base de datos
 - Editar archivo .env
```sh
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=<nombre de la DB>
    DB_USERNAME=<Usuario>
    DB_PASSWORD=<Password>
```
### Cargando datos de prueba
 - Correr las migraciones y seeders
```sh
    php artisan migrate
```
 - Adicionalmente puede ejecutar los seeder para generar datos de prueba
```sh
    php artisan db:seed
```
 - Correr el proyecto
```sh
    php artisan serve
```
 - Para probar nuestra API REST, puede dirigirse a
```sh
    http://localhost:8000/sale/{id}
```
Donde {id} sera el ID de la venta.

### Puede usar tinker para generar mas datos de prueba.