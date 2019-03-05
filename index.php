<html>
 <head>
  <title>PHP Project</title>
 </head>
 <body>
 <?php echo $_SERVER['DEFAULT_DATABASE_DSN']; ?>
 <?php echo $_SERVER['DATABASE_URL']; ?>
 <?php echo getenv('DATABASE_URL'); ?>
 <?php echo getenv('DEFAULT_DATABASE_DSN'); ?>
  <?php echo $argv; ?>
  <?php phpinfo(); ?>
 </body>
</html>