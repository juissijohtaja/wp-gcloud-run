FROM php:8-apache

# install php modules and configure setup
RUN apt-get update && apt-get upgrade -yy \
    && apt-get install --no-install-recommends libjpeg-dev libpng-dev libwebp-dev \
    libzip-dev libfreetype6-dev supervisor zip \
    unzip software-properties-common -yy wget -y tar -y exif libmagickwand-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# install imagick
# Version is not officially released https://pecl.php.net/get/imagick but following works for PHP 8
RUN mkdir -p /usr/src/php/ext/imagick; \
    curl -fsSL https://github.com/Imagick/imagick/archive/06116aa24b76edaf6b1693198f79e6c295eda8a9.tar.gz | tar xvz -C "/usr/src/php/ext/imagick" --strip 1; \
    docker-php-ext-install imagick;

# install more php modules and configure setup
RUN docker-php-ext-install gd mysqli pdo pdo_mysql \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j "$(nproc)" gd \
    && a2enmod rewrite

# create downloads folder
RUN mkdir /downloads

# download wordpress
RUN cd /downloads \
    && wget https://wordpress.org/latest.tar.gz \
    && tar zxvf latest.tar.gz \
    && mv wordpress/* /var/www/html

# download plugins
RUN cd /downloads \
    && wget https://downloads.wordpress.org/plugin/amazon-s3-and-cloudfront.2.5.3.zip \
    && unzip amazon-s3-and-cloudfront.2.5.3.zip -d /var/www/html/wp-content/plugins

# remove downloads folder 
RUN rm -rf /downloads

# remove config sample
RUN rm /var/www/html/wp-config-sample.php

# copy wp-config and themes
COPY ./my-config/* /var/www/html/
COPY ./my-themes /var/www/html/wp-content/themes

# setup directory and permissions for uploads
RUN mkdir -p /var/www/html/wp-content/uploads \
    && chown -R www-data:www-data /var/www/html/wp-content/uploads \
    && chmod 755 /var/www/html/wp-content/uploads

# set working directory to serve wordpress files
WORKDIR /var/www/html
