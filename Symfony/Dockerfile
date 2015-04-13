#Prepare image from Nginx Official
FROM docker-registry.mycoachfootball.com:5000/global/nginx

#Setup Symfony
VOLUME ["/var/www"]

#Setup Nginx
ADD symfony.conf /etc/nginx/sites-available/default

