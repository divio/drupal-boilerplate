==================
Drupal Boilerplate
==================

`Divio Cloud <http://www.divio.com/>`_ based boilerplate to develop with Drupal.

Up to date with `Drupal <https://www.drupal.org/>`_ **8.6.10**.

.. WARNING:

    This is experimental, additional adaptions may need to be required.


Configuration
=============

Project setup using https://github.com/drupal-composer/drupal-project

installed via
composer create-project drupal-composer/drupal-project:8.x-dev . --stability dev --no-interaction
mkdir -p /config/sync
chown -R www-data:www-data /web
mkdir -p /config/sync

the following packages are additionally installed for S3:
composer require drupal/s3fs


This installation provides a pre-defined settings.php file with the necessary database
connection settings. Please review these for your own security.

Once the project has been installed (dev and live) commet line 10 in ``Dockerfile`` and
uncomment lines 12-14.


Divio Cloud
===========

The following features are not yet compatible with this boilerplate

* Copy database between environments
* 
