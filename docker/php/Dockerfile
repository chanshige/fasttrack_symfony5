FROM php:7.4.10-fpm-alpine3.12
COPY php.ini /usr/local/etc/php/

RUN apk upgrade --update && \
  apk --no-cache add --virtual build-dependencies \
  bash \
  icu-dev \
  autoconf \
  make \
  g++ \
  gcc \
  oniguruma-dev \
  curl-dev \
  libpng-dev \
  libzip-dev \
  libxml2-dev \
  nodejs \
  yarn \
  postgresql-dev \
  wget \
  unzip \
  git

RUN docker-php-ext-install -j$(nproc) \
  bcmath \
  ctype \
  curl \
  fileinfo \
  gd \
  iconv \
  json \
  mbstring \
  opcache \
  pdo_pgsql \
  tokenizer \
  xml \
  zip \
  intl

RUN docker-php-ext-configure \
  pgsql -with-pgsql=/usr/local/pgsql

RUN curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_NO_INTERACTION 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

RUN pecl install redis xdebug \
    && docker-php-ext-enable redis xdebug

RUN curl -sS https://get.symfony.com/cli/installer | bash \
  && mv /root/.symfony/bin/symfony /usr/local/bin/symfony

RUN rm -rf /var/cache/apk/*
RUN apk del autoconf make g++ gcc bash

WORKDIR /var/www