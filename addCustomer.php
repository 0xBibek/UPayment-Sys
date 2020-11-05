<?php
require('./sr/db_connect.php');
include("./sr/session.php");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $addtitle; ?></title>
    <?php echo $metaCSS; ?>
  </head>
  <body>
<?php require_once('./nav/g_nav.php')?>
<?php require_once('./nav/g_section.php')?>

<div class="content column is-half is-offset-one-quarter" style="margin-top: 30px">
<?php 
  if(isset($_GET['created']))
      {
        ?>
<div class="notification is-link">
Successfully Added
</div>
<?php
      }
      ?>
    <div class="control has-icons-left">
<form action="p_customerAdd.php" method="post">
<div class="field">
  <label class="label">Customer ID</label>
  <div class="control">
    <input class="input" type="text" name="customerID" placeholder="e.g 123" required />
  </div>
</div>

<div class="field">
  <label class="label">Full Name</label>
  <div class="control">
    <input class="input" type="text" name="customerName" placeholder="Full Name" required />
  </div>
</div>

<div class="field">
  <label class="label">Address</label>
  <div class="control">
    <input class="input" type="text" name="customerAddress" required />
  </div>
</div>

<div class="field">
  <label class="label">Gender</label>
  <div class="control">
    <input class="input" type="text" name="customerGender" required />
  </div>
</div>

<div class="field">
  <label class="label">Phone Number</label>
  <div class="control">
    <input class="input" type="text" name="customerPhone" placeholder="e.g. 9801234567" required />
  </div>
</div>

<div class="control">
  <input class="button is-info" type="Submit" value="Submit">
</div>
</form>
    </div>
</div>

<?php require_once('./nav/g_footer.php')?>

  </body>
</html>