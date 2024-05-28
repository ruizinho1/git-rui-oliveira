FROM ubuntu:22.04
MAINTAINER DEV <dev@ydeal.me>


ENV DEBIAN_FRONTEND="noninteractive" TZ="Europe/Lisbon"
RUN apt-get update && apt-get install -y --no-install-recommends \
    apache2 \
    software-properties-common \
    supervisor \
    && apt-get clean \
    && rm -fr /var/lib/apt/lists/*

RUN apt install 
RUN apt-get update && apt-get install -y \
    apache2 \
    curl \
    git \
    libapache2-mod-php8.1 \
    nano \
    vim \
    #yum \
    # mongodb \
    netcat \
    php8.1 \
    php8.1-common \
    php8.1-mysql \
    php8.1-zip \
    php8.1-gd \
    php8.1-mbstring \
    php8.1-curl \
    php8.1-xml \
    php8.1-bcmath \
    phpunit \
    s3cmd \
    composer \
    unzip \
    && phpenmod mcrypt \
    && apt-get clean

RUN a2enmod rewrite
RUN chown -R www-data:www-data /var/www

ENV code_root /code
ENV httpd_conf ${code_root}/httpd.conf
ENV code ${code_root}/public

# WORKDIR /code/public
# RUN composer require mongodb/mongodb

#RUN rm -rf /var/www/html/index.html
#ADD public /var/www/html

WORKDIR /

#Instalar Composer 2.0
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

ENV APACHE_RUN_USER  www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR   /var/log/apache2
ENV APACHE_PID_FILE  /var/run/apache2/apache2.pid
ENV APACHE_RUN_DIR   /var/run/apache2
ENV APACHE_LOCK_DIR  /var/lock/apache2


RUN mkdir -p $APACHE_RUN_DIR
RUN mkdir -p $APACHE_LOCK_DIR
RUN mkdir -p $APACHE_LOG_DIR

RUN rm -rf /etc/apache2/sites-available/000-default.conf
ADD httpd.conf /etc/apache2/sites-available/000-default.conf
RUN rm -rf /etc/apache2/apache2.conf
ADD apache2.conf /etc/apache2/

EXPOSE 8080
EXPOSE 3309
CMD ["/usr/sbin/apache2", "-D",  "FOREGROUND"]