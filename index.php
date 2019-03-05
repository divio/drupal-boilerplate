<html>
 <head>
  <title>PHP Project</title>
 </head>
 <body>
    <h2>Database URL</h2>
    <?php echo getenv('DATABASE_URL'); ?>
    <h2>Database DSN</h2>
    <?php echo getenv('DEFAULT_DATABASE_DSN'); ?>
    <hr>
  <?php phpinfo(); ?>
 </body>
</html>