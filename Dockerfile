# Imagen oficial de PHP con Apache
FROM php:8.1-apache

# Instalar extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar módulos de Apache si hiciera falta (ej: rewrite)
RUN a2enmod rewrite

# Carpeta de trabajo
WORKDIR /var/www/html

# Copiar todo tu proyecto al contenedor
COPY . .

# Puerto expuesto
EXPOSE 80
