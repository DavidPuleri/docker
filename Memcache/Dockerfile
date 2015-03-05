FROM ubuntu

RUN apt-get update

RUN apt-get install -y memcached

RUN useradd memcached

EXPOSE 11211

USER memcached

ENTRYPOINT memcached

CMD service memcached start
