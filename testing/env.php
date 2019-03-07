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
    <?php echo getenv('DEFAULT_DATABASE_DSN') or ''; ?>
    <?php
        // https://docs.divio.com/en/latest/how-to/interact-database.html?highlight=database
        // postgres://postgres@db:5432/db
        $DEFAULT_DATABASE_DSN = getenv('DEFAULT_DATABASE_DSN') ?: 'postgres://postgres@db:5432/db';
        // split $DEFAULT_DATABASE_DSN by "://", /", "@" and the last matching ":" and assign to variables
        list($pg_protocoll, $pg_credentials, $pg_host, $pg_port, $pg_dbname) = preg_split('/(:\/\/)|(\/)|(@)|(:(?!.*:))/', $DEFAULT_DATABASE_DSN);

        echo $pg_protocoll.'://'.$pg_credentials.'@'.$pg_host.':'.$pg_port.'/'.$pg_dbname;
    ?>

DEFAULT_STORAGE_DSN
    <?php echo getenv('DEFAULT_STORAGE_DSN'); ?>
    <?php
        // http://docs.divio.com/en/latest/how-to/interact-storage.html#obtain-your-storage-access-details
        // s3://key:secret@bucket/?params
        $DEFAULT_STORAGE_DSN = str_replace('s3://', '', getenv('DEFAULT_STORAGE_DSN'));
        list($s3_key, $s3_secret, $s3_bucket, $s3_params) = preg_split('/(:)|(@)|(\/\?)/', $DEFAULT_STORAGE_DSN);

        echo 's3://'.$s3_key.':'.$s3_secret.'@'.$s3_bucket.'/?'.$s3_params;
    ?>

SECRET_KEY
    <?php echo getenv('SECRET_KEY'); ?>

DEBUG
    <?php echo getenv('DEBUG'); ?>

SENTRY_DSN
    <?php echo getenv('SENTRY_DSN'); ?>

DOMAIN
    <?php echo getenv('DOMAIN'); ?>
    php-stage.us.aldryn.io

DOMAIN_ALIASES
    <?php echo getenv('DOMAIN_ALIASES'); ?>
    .*

SITE_NAME
    <?php echo getenv('SITE_NAME'); ?>
    PHP

LANGUAGES
    <?php echo getenv('LANGUAGES'); ?>

LANGUAGE_CODES
    <?php echo getenv('LANGUAGE_CODES'); ?>

STAGE
    <?php echo getenv('STAGE'); ?> (or local)
    test / live

<hr />

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

TIME_ZONE
    <?php echo getenv('TIME_ZONE'); ?>

ROOT_URLCONF
    <?php echo getenv('ROOT_URLCONF'); ?>

ALLOWED_HOSTS
    <?php echo getenv('ALLOWED_HOSTS'); ?>

DISABLE_S3_MEDIA_HEADERS_UPDATE
    <?php echo getenv('DISABLE_S3_MEDIA_HEADERS_UPDATE'); ?>

DISABLE_GZIP
    <?php echo getenv('DISABLE_GZIP'); ?>

ALDRYN_SITES_DOMAINS
    <?php echo getenv('ALDRYN_SITES_DOMAINS'); ?>






</code></pre>
</div>

</body>
</html>
