#Prepare image from Nginx Official
FROM alfonso/nginx-phalcon

ENV DEBIAN_FRONTEND noninteractive

#Setup PHP
RUN apt-get update
RUN apt-get install -y nano php5-intl php5-memcache php5-curl php-apc

#Setup Symfony
VOLUME ["/var/www/app/logs", "/var/www/app/cache","/var/www"]

#Setup Nginx
ADD symfony.conf /etc/nginx/sites-available/default
ADD www.conf /etc/php5/fpm/pool.d/www.conf
RUN chmod 666 /var/run/php5-fpm.sock



