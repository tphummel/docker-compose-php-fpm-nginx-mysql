FROM php:5-fpm
RUN apt-get update && apt-get install -y php5-mysqlnd \
  && docker-php-ext-install -j$(nproc) mysql mysqli
