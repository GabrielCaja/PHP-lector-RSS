FROM php:8.1-apache

# Instala extensiones necesarias
RUN apt-get update && apt-get install -y \
    libpq-dev && docker-php-ext-install pgsql

# Copia los archivos de tu aplicación
COPY . /var/www/html

# Expon el puerto 80
EXPOSE 80
