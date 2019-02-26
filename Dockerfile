FROM php:apache

COPY . /var/www/html

# noop for legacy migration
RUN mkdir /app
RUN echo "#!/bin/bash" > /app/migrate.sh && \
    chmod +x /app/migrate.sh

WORKDIR /var/www/html

EXPOSE 80
