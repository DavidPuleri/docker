FROM ubuntu:14.04

ENV DEBIAN_FRONTEND noninteractive

#Setup PHP
RUN apt-get update --fix-missing &&  apt-get install -y php5-fpm php5-memcache php5 php5-mcrypt php5-cli php5-curl php5-gd php5-imagick php5-mcrypt php5-mysql php5-sqlite php5-xmlrpc php5-xsl php-pear php5-intl php-apc libssh2-1-dev libssh2-php

RUN php5enmod mcrypt


COPY php-fpm.conf /etc/php5/fpm/php-fpm.conf
COPY www.conf /etc/php5/fpm/pool.d/www.conf
COPY php.ini  /etc/php5/fpm/php.ini

RUN mkdir -p /php-fpm/www/log


CMD ["php5-fpm"]

EXPOSE 9000