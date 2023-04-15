FROM php:8.2-fpm

RUN apt-get update \
    && docker-php-ext-install pdo_mysql

ADD ./php.ini /usr/local/etc/php/php.ini

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html