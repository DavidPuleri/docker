FROM alfonso/nginx-phalcon

ENV DEBIAN_FRONTEND noninteractive

#Setup PHP
RUN apt-get update --fix-missing
RUN apt-get install -y php5-intl php5-memcache php5-memcached php5-curl php-apc

#Setup Nginx Global Settings
ADD nginx.conf /etc/nginx/nginx.conf
ADD www.conf /etc/php5/fpm/pool.d/www.conf
RUN chown www-data /etc/php5/fpm/pool.d/www.conf
