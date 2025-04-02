#imagen de php
FROM php:8.1-apache

#instalar depedencias para postgreSql
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

#compiamos  al contenedor de php
COPY . /var/www/html/

#se expone el puerto 80
EXPOSE 80