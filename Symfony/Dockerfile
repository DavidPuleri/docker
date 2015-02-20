#Prepare image from Nginx Official
FROM global/nginx

#Setup Symfony
VOLUME ["/var/www/app/logs", "/var/www/app/cache","/var/www"]

#Setup Nginx
ADD symfony.conf /etc/nginx/sites-available/default

CMD service memcached start && service php5-fpm start && nginx


#base/symfony

