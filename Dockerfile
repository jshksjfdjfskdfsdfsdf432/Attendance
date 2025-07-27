FROM php:8.2-apache

# Install mysqli and dependencies
RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod rewrite

COPY . /var/www/html/
WORKDIR /var/www/html/
