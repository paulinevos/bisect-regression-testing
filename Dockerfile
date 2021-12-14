FROM php:7-fpm

RUN apt-get update && apt-get install -y git zip unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD . /var/www/

WORKDIR /var/www/

RUN composer install

CMD ["php-fpm"]

