<?php
require('./sr/db_connect.php');
include("./sr/session.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $hometitle; ?></title>
    <?php echo $metaCSS; ?>  </head>
  <body>
<?php require_once('./nav/g_nav.php')?>
<?php require_once('./nav/g_section.php')?>


  <section class="section">
  </section>


<?php require_once('./nav/g_footer.php')?>

  </body>
</html>