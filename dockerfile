FROM php:8.1-apache

# Устанавливаем MySQLi, PDO и MySQL-клиент
RUN apt-get update && apt-get install -y default-mysql-client && docker-php-ext-install mysqli pdo pdo_mysql

# Включаем mod_rewrite для Apache (опционально)
RUN a2enmod rewrite