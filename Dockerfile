FROM php:8.2-apache

# Install MySQLi and PDO extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy all files to Apache root
COPY src/ /var/www/html/

EXPOSE 80
