#!/bin/sh

#Find configuration file
CONFIGFILE=$1/configuration/$2/application.yml

MYSQL_HOST=`docker inspect --format '{{ .NetworkSettings.IPAddress }}' mycoachfootball_db`
MYSQL_PASSWORD=`docker inspect --format '{{ json .Config.Env }}' mycoachfootball_db | python -mjson.tool | grep MYSQL_ROOT_PASSWORD | awk -F'[=|"]' '{print $3}'`

echo "Environment " $2 " -  MySQL server found on " ${MYSQL_HOST} ": Updating configuration"

sed -i  's/host.*/host: '${MYSQL_HOST}'/g' $CONFIGFILE
sed -i  's/password.*/password: '${MYSQL_PASSWORD}'/g' $CONFIGFILE

echo "Configuration changed"
cat ${CONFIGFILE}

