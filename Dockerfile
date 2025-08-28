# determinamos que estamos trabajando con una imagen de php

FROM php:8.1-apache

# Instala las dependencias necesarias para PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# copiamos el codigo de la aplicacion al contenedor 
COPY . /var/www/html/

# Exponer el puerto 80
EXPOSE 80
CMD [ "apache2-foreground" ]