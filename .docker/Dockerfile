FROM php:8.1.0-apache
USER root

COPY php.ini "$PHP_INI_DIR/php.ini"

#copiar vhost
COPY vhost.conf /etc/apache2/sites-available/000-default.conf



RUN apt-get update && apt-get install -y \
    libpng-dev \
    zlib1g-dev \
    libxml2-dev \
    libzip-dev \
    libonig-dev \
    zip \
    curl \
    unzip \
    openssl \
    git \
    nano \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql mysqli zip soap bcmath \
    && docker-php-source delete \
    && pecl install redis \  
    && docker-php-ext-enable \
    redis     

# Fixing images types when upload it
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# install imagick
RUN apt install -y libmagickwand-dev --no-install-recommends && \
    pecl install imagick && docker-php-ext-enable imagick 

#Instalar node
RUN apt-get install -y nodejs npm

#Instalar composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=1.10.17

RUN a2enmod rewrite
RUN service apache2 restart

WORKDIR /var/www/html


