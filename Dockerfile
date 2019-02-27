FROM php:7.3-apache

COPY . /var/www/html
WORKDIR /var/www/html

# noop files for non python projects and local development
RUN mkdir /app
RUN echo "#!/bin/bash" > /app/migrate.sh && chmod +x /app/migrate.sh
RUN echo "#!/bin/bash" > /usr/local/bin/start && chmod +x /usr/local/bin/start

EXPOSE 80
