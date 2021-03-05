FROM php:7-fpm
RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y install git libzip-dev zip
RUN docker-php-ext-configure zip
RUN docker-php-ext-install zip

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

ADD app/ /var/www/html

RUN composer install
CMD ["php-fpm"]
