# Way of Working

## Requisitos tecnológicos

Para trabajar en este proyecto, solo necesitas tener **Docker** y **Docker Compose** instalados en tu máquina. Con estos dos componentes, podrás gestionar tanto la aplicación Laravel como la base de datos MariaDB sin necesidad de instalaciones locales adicionales.

## Pasos para preparar el proyecto

A continuación se detallan los pasos para configurar y poner en marcha la aplicación en tu entorno local usando Docker y Docker Compose.

### 1. Clonar el repositorio

Primero, clona el repositorio de GitHub en tu máquina local:

```bash
git clone https://github.com/marinolb/ud3.3_ejercicios.git  
``` 

### 2. Configuraciones Previas

El archivo `docker-compose.yml` ya está correctamente configurado y se encuentra en la raíz del proyecto. Dentro de **`laravel > laravel-project`** encontrarás el archivo **`.env`**, que también está ya configurado, especialmente la parte de la configuración de MariaDB, donde la base de datos por defecto será **`gestion_notas`**. Además, se especifican el puerto y las credenciales de la base de datos:

```bash
DB_CONNECTION=mariadb  
DB_HOST=mariadb  
DB_PORT=3306  
DB_DATABASE=gestion_notas  
DB_USERNAME=root  
DB_PASSWORD=m1_s3cr3t
```

### 3. Levantar los contenedores con Docker Compose

Ejecuta el siguiente comando para levantar tanto la base de datos como la aplicación Laravel en contenedores (asegurate de estar en el directorio ud3.3_ejercicios) :

```bash
docker-compose up --build
```

Esto iniciará los contenedores según la configuración en `docker-compose.yml`. La base de datos se levantará en un contenedor de **MariaDB**, y la aplicación Laravel en otro contenedor.

### 4. Realizar migraciones

Para crear las tablas en la base de datos, ejecuta las migraciones dentro del contenedor de Laravel:

```bash
docker exec -it laravel bash  
php artisan migrate
```

### 5. Cargar datos de prueba

Para insertar los datos de prueba configurados en los seeders, ejecuta el siguiente comando:

```bash
php artisan db:seed
```

### 6. Iniciar el servidor de desarrollo

Si el servidor no se ha iniciado automáticamente, puedes ejecutarlo manualmente:

```bash
php artisan serve --host=0.0.0.0
```

Esto iniciará el servidor de Laravel en `http://127.0.0.1:8000`.

### 7. Para acceder a MariaDB

Si necesitas acceder directamente a la base de datos MariaDB desde el contenedor, puedes usar el siguiente comando:

```bash
docker exec -it mariadb-server mariadb -u root -p
```

Y la contraseña, como aparece más arriba en el archivo `.env`:

```bash
m1_s3cr3t
```