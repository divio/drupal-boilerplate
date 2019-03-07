# FROM php:7.3-apache
FROM drupal:8.6.10-apache

# install postgres driver
RUN apt-get update && apt-get install -y wget git
# database setup
RUN apt-get install -y libpq-dev && docker-php-ext-install pgsql pdo pdo_pgsql
# install php package manager
# based on https://github.com/drupal-composer/drupal-project
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
	php composer-setup.php && \
	mv composer.phar /usr/local/bin/composer && \
	php -r "unlink('composer-setup.php');"
RUN wget -O drush.phar https://github.com/drush-ops/drush-launcher/releases/download/0.6.0/drush.phar && \
	chmod +x drush.phar && \
	mv drush.phar /usr/local/bin/drush

# We will use the Drupal version from Composer rather than the version that ships with Docker
RUN rm -rf /var/www/html/*

COPY apache-drupal.conf /etc/apache2/sites-enabled/000-default.conf

COPY . /app
WORKDIR /app

# setup Drupal
RUN composer install
RUN chown -R www-data:www-data /app/web

# required permissions for installation
# RUN chmod -R 777 sites/
# enable this after the installation and disable the line above
# RUN chmod 755 sites/default
# RUN chmod 755 sites/default/settings.php
# RUN chmod -R 777 sites/default/files/

# noop files for non python projects and local development
RUN echo "#!/bin/bash" > /app/migrate.sh && chmod +x /app/migrate.sh
RUN echo "#!/bin/bash" > /usr/local/bin/start && chmod +x /usr/local/bin/start

EXPOSE 80
