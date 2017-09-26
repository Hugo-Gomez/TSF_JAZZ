FROM php:7.0-apache

RUN apt-get update && apt-get install -y php5-mysql
RUN docker-php-ext-install mysql
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get install -y openssl
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install tokenizer
