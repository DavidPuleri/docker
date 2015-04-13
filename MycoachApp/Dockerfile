FROM alfonso/nginx-phalcon

RUN apt-get install -y  nano php5-intl php5-memcache php5-curl php-apc

ADD app.conf /etc/nginx/sites-available/default

CMD service php5-fpm start && nginx

