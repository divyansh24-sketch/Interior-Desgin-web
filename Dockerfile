FROM php:8.1-apache

# Apache mod_rewrite enable karne ke liye
RUN a2enmod rewrite

# MySQL database driver install karne ke liye
RUN docker-php-ext-install pdo pdo_mysql

# Code ko server par copy karna
COPY . /var/www/html/

# Permissions set karna
RUN chown -R www-data:www-data /var/www/html