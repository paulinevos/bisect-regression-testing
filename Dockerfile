 FROM php:8.0.0
 WORKDIR /bisect-regression-testing
 COPY . .
 RUN composer install
 CMD ["php", "run.php"]
