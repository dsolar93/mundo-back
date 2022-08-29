Para ejecutar el backend primero debes tener instalado composer

luego utilizar el comando para clonar el proyecyo:

### `git clone https://github.com/dsolar93/mundo-back.git`

una ves clonado, por favor crear la DB en el mysql local "mundo-prueba" con usuario root y sin password y luego remplazar el .env.example por el .env de base, con esto ya tendras los pasos necesarios para utilizar las migraciones y seeders para poblar la DB.

primero ejecutamos las migraciones:

### `php artisan migrate`

luego ejecutamos los seeders:

### `php artisan db:seed`

si revisas el gestor de db local veras que ya estan todos los datos necesarios para el backend.

para ejecutar el backend se ingresa el comando:

### `php artisan serve`

con estos pasos ya podras consultar la api.
