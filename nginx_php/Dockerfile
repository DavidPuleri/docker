FROM nginx

ENV DEBIAN_FRONTEND noninteractive

#Setup Nginx Global Settings
COPY nginx.conf /etc/nginx/nginx.conf

RUN mkdir -p /workspace

VOLUME /workspace

CMD nginx
