FROM php:7.2.15-fpm

RUN apt-get update

# Install binaries
RUN apt-get install -y --no-install-recommends \
    gnupg \
    libmagickwand-dev \
    libmcrypt-dev \
    libpng-dev \
    libpq-dev \
    mysql-client \
    vim

# Install php extensions with pecl
RUN pecl install \
        imagick \
        mcrypt-1.0.2 \
        xdebug


# Enabling php extensions
RUN docker-php-ext-enable \
        imagick \
        mcrypt \
        xdebug

# Install php extensions
RUN docker-php-ext-configure pdo_mysql --with-pdo-mysql \
    && docker-php-ext-install \
        gd \
        mbstring \
        mysqli \
        pdo \
        pdo_mysql

# NodeJS 8 Installation
RUN curl -sL https://deb.nodesource.com/setup_8.x | bash -
RUN apt-get install -y nodejs

# Yarn installation
RUN npm install -g yarn

# Create Laravel directories with permissions
# Install yarn dependencies
# run php-fpm
CMD mkdir -p \
  bootstrap/cache \
  storage/app/public \
  storage/framework/cache \
  storage/framework/sessions \
  storage/framework/testing \
  storage/framework/views \
  storage/logs \
  && chown -R www-data:www-data storage bootstrap/cache \
  && chmod -R ug+rwx storage bootstrap/cache \
  && yarn install \
  && php-fpm
