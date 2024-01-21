# blog-en-CI4
Práctica de CI4

### Para crear el proyecto:
>composer create-project codeigniter4/appstarter blog

### Configuracion del variables de entorno
En primer lugar renombrar el archivo env y colocarle un . adelante quedaría asi: .env 

Para trabajar en local cambiar a development la variable: CI_ENVIRONMENT. 

Indicar la url en este caso: app.baseURL = 'http://blog.test'

---
Para crear tablas en la base de datos se usan las migraciones, por linea de comando dentro del proyecto
>php spark migrate:create nombreTabla

Para crear la tabla en la base de datos el comando es:
>php spark migrate

**Atención**
Verificar que las variables de entorno estén bien configuradas, este es un ejemplo

```env
database.default.hostname = localhost
database.default.database = appblog
database.default.username = root
database.default.password = ''
database.default.DBDriver = MySQLi
# database.default.DBPrefix =
database.default.port = 3306
```