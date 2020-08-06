FROM php:7.4.8-fpm
COPY php.ini /usr/local/etc/php/

RUN apt-get update && apt-get install -y \
  libonig-dev \
  libicu-dev \
  libpng-dev \
  libzip-dev \
  zlib1g-dev \
  libpq-dev \
  curl \
  gnupg \
  wget \
  zip \
  unzip \
  git

RUN docker-php-ext-install \
  zip \
  intl \
  gd \
  pgsql \
  pdo_pgsql \
  mbstring \
  xsl

RUN docker-php-ext-configure \
  pgsql -with-pgsql=/usr/local/pgsql

RUN curl -sL https://deb.nodesource.com/setup_11.x | bash -
RUN apt-get install -y nodejs
RUN npm install npm@latest yarn@latest -g

RUN curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_NO_INTERACTION 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

RUN pecl install redis xdebug \
    && docker-php-ext-enable redis xdebug

WORKDIR /var/www

RUN curl -sS https://get.symfony.com/cli/installer | bash \
  && mv /root/.symfony/bin/symfony /usr/local/bin/symfony
