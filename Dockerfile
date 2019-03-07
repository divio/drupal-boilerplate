# FROM php:7.3-apache
FROM drupal:8.6.10-apache

COPY . /var/www/html
WORKDIR /var/www/html

# install postgres driver
RUN apt-get update && apt-get install -y libpq-dev git && docker-php-ext-install pgsql pdo pdo_pgsql
# install php package manager
# based on https://github.com/drupal-composer/drupal-project
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install

# required permissions for installation
# RUN chmod -R 777 sites/
# enable this after the installation and disable the line above
# RUN chmod 755 sites/default
# RUN chmod 755 sites/default/settings.php
# RUN chmod -R 777 sites/default/files/

# noop files for non python projects and local development
RUN mkdir /app
RUN echo "#!/bin/bash" > /app/migrate.sh && chmod +x /app/migrate.sh
RUN echo "#!/bin/bash" > /usr/local/bin/start && chmod +x /usr/local/bin/start

EXPOSE 80
