<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1 class="h2">Variables</h1>
<hr />

<pre class="jumbotron pt-0 pb-0"><code>
DEFAULT_DATABASE_DSN
    <?php echo getenv('DEFAULT_DATABASE_DSN'); ?>

DEFAULT_STORAGE_DSN
    <?php echo getenv('DEFAULT_STORAGE_DSN'); ?>

MEDIA_URL
    <?php echo getenv('MEDIA_URL'); ?>

MEDIA_ROOT
    <?php echo getenv('MEDIA_ROOT'); ?>

BASE_DIR
    <?php echo getenv('BASE_DIR'); ?>

DATA_ROOT
    <?php echo getenv('DATA_ROOT'); ?>

STATIC_URL
    <?php echo getenv('STATIC_URL'); ?>

STATIC_ROOT
    <?php echo getenv('STATIC_ROOT'); ?>

STATICFILES_DIRS
    <?php echo getenv('STATICFILES_DIRS'); ?>

SECRET_KEY
    <?php echo getenv('SECRET_KEY'); ?>

TIME_ZONE
    <?php echo getenv('TIME_ZONE'); ?>

DEBUG
    <?php echo getenv('DEBUG'); ?>

ROOT_URLCONF
    <?php echo getenv('ROOT_URLCONF'); ?>

SENTRY_DSN
    <?php echo getenv('SENTRY_DSN'); ?>

DOMAIN
    <?php echo getenv('DOMAIN'); ?>

ALLOWED_HOSTS
    <?php echo getenv('ALLOWED_HOSTS'); ?>

DOMAIN_ALIASES
    <?php echo getenv('DOMAIN_ALIASES'); ?>

SITE_NAME
    <?php echo getenv('SITE_NAME'); ?>

DISABLE_S3_MEDIA_HEADERS_UPDATE
    <?php echo getenv('DISABLE_S3_MEDIA_HEADERS_UPDATE'); ?>

LANGUAGES
    <?php echo getenv('LANGUAGES'); ?>

LANGUAGE_CODES
    <?php echo getenv('LANGUAGE_CODES'); ?>

DISABLE_GZIP
    <?php echo getenv('DISABLE_GZIP'); ?>

ALDRYN_SITES_DOMAINS
    <?php echo getenv('ALDRYN_SITES_DOMAINS'); ?>

STAGE
    <?php echo getenv('STAGE'); ?> (or local)

</code></pre>
</div>

</body>
</html>
