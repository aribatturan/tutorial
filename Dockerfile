FROM php:fpm
RUN apt-get update -y && apt-get upgrade -y && apt-get install -y netcat
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer