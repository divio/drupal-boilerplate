FROM drupal:8.6-apache

COPY . /var/www/html
WORKDIR /var/www/html

# install postgres driver
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pgsql pdo pdo_pgsql

# noop files for non python projects and local development
RUN mkdir /app
RUN echo "#!/bin/bash" > /app/migrate.sh && chmod +x /app/migrate.sh
RUN echo "#!/bin/bash" > /usr/local/bin/start && chmod +x /usr/local/bin/start

EXPOSE 80
