FROM php:7.3.16-apache-stretch

# install apps and configure setup
RUN apt-get update && apt-get upgrade -yy \
    && apt-get install --no-install-recommends libjpeg-dev libpng-dev libwebp-dev \
    libzip-dev libfreetype6-dev supervisor zip \
    unzip software-properties-common -yy wget -y tar -y \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-install mbstring gd mysqli pdo pdo_mysql \
    && docker-php-ext-configure gd --with-freetype-dir=/usr --with-jpeg-dir=/usr --with-png-dir=/usr --with-webp-dir=/usr \
    && docker-php-ext-install -j "$(nproc)" gd \
    && a2enmod rewrite 

RUN apt-get install apt-utils -y && apt-get install wget -y && apt-get install tar -y

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
COPY ./my-config/wp-config.php /var/www/html/
COPY ./my-themes /var/www/html/wp-content/themes

# setup directory and permissions for uploads
RUN mkdir -p /var/www/html/wp-content/uploads \
    && chown -R www-data:www-data /var/www/html/wp-content/uploads \
    && chmod 755 /var/www/html/wp-content/uploads

# set working directory to serve wordpress files
WORKDIR /var/www/html
