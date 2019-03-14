==================
Drupal Boilerplate
==================

`Divio Cloud <http://www.divio.com/>`_ based boilerplate to develop with Drupal.

Up to date with `Drupal <https://www.drupal.org/>`_ **8.6.10**.


Configuration
=============

This Drupal boilerplate ships with **drush** and **composer** using
`drupal-project <https://github.com/drupal-composer/drupal-project>`_ as template.

The setup was done using::

    composer create-project drupal-composer/drupal-project:8.x-dev . --stability dev --no-interaction
    mkdir -p config/sync

the following packages are additionally installed for S3::

    composer require drupal/s3fs

This installation provides a pre-defined ``default.settings.php`` file with the necessary database
connection settings for **Postgres**. Please review these for your own security.


Local development
=================

This boilerplate installs the Composer dependencies into the Docker container. To work locally you
need to run::

    docker-compose run --rm web composer update
