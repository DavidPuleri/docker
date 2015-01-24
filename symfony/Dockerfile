FROM alfonso/nginx-phalcon

RUN apt-get install -y nano memcached php5-intl php5-memcache php5-curl php-apc


ADD symfony.conf /etc/nginx/sites-available/default


CMD service memcached start && service php5-fpm start && nginx

