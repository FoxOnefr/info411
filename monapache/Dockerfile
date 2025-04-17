FROM php:8.3-apache

RUN apt update && apt upgrade -y &&  apt install -y git vim nano curl wget telnet links

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

WORKDIR /var/www/html

COPY . .

RUN git clone https://github.com/FoxOnefr/info411.git html

WORKDIR /var/www/html

RUN cp ./include/db_connect.php.docker ./include/db_connect.php

EXPOSE 80