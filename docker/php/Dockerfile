FROM php:7.4-fpm

ENV TZ=Europe/Moscow
ENV UID=1000

RUN usermod -u ${UID? invalid argument} www-data
RUN groupmod -g ${UID? invalid argument} www-data

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    supervisor

RUN docker-php-ext-install mbstring tokenizer pdo pdo_pgsql pgsql zip xml

RUN pecl install -o -f redis
RUN docker-php-ext-enable redis

COPY ./php.ini /usr/local/etc/php/php.ini

COPY ./supervisor/conf.d /etc/supervisor/conf.d
COPY ./supervisor/supervisord.conf /etc/supervisord.conf

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

CMD [ "supervisord", "--nodaemon", "--configuration", "/etc/supervisord.conf" ]

EXPOSE 9000