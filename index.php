<html>
 <head>
  <title>PHP Project</title>
 </head>
 <body>
    <h2>Database URL</h2>
    <?php echo getenv('DATABASE_URL'); ?>
    <hr>
<pre>
Database information:
    postgres://postgres@db:5432/db

<?php
    $env = getenv('DATABASE_URL');
    $split = explode('@', $env);
    $pg_credentials = explode('://', $split[0])[0];
    $pg_host = explode(':', $split[1])[0];
    $pg_port = explode('/', explode(':', $split[1])[1])[0];
    $pg_dbname = explode('/', explode(':', $split[1])[1])[1];

    echo 'Credentials: '.$pg_credentials."\n";
    echo 'Database: '.$pg_dbname."\n";
    echo 'Port: '.$pg_port."\n";
    echo 'Host: '.$pg_host."\n";
    echo 'Username: '.explode(':', $pg_credentials)[0]."\n";
    echo 'Password: '.explode(':', $pg_credentials)[1]."\n";

    $connection = pg_connect(
        "host=".$pg_host.
        " port=".$pg_port.
        " dbname=".$pg_dbname.
        " user=".explode(':', $pg_credentials)[0].
        " password=".explode(':', $pg_credentials)[1]);
    echo 'Connection successful'
?>
</pre>
    <hr>
  <?php phpinfo(); ?>
 </body>
</html>