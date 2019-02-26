FROM php:apache

COPY . /var/www/html
WORKDIR /var/www/html

# noop for legacy migration
RUN echo "#!/bin/bash" > migrate.sh && \
    chmod +x migrate.sh

EXPOSE 80
