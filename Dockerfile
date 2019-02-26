FROM php:apache

COPY . /var/www/html
WORKDIR /var/www/html

# noop for legacy migration
RUN mkdir app/
RUN echo "#!/bin/bash" > app/migrate.sh && \
    chmod +x app/migrate.sh

EXPOSE 80
