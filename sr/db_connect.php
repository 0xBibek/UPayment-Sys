<?php
require_once('./usr/inc_data.php');
// FOR THIS SCRIPT TO WORK PLEASE ADD THE CREDITATIONS OF THE REQUIRED DATAS

// DB HOST IS THE HOST NAME OF THE MYSQL
$db_host = "localhost";

// DB USER IS THE REQUIRED USER TO EXECUTE MYSQL COMMANDS
$db_user = "root";
$db_name = "b.DB";
$db_pass = "";


$conn = mysqli_connect("".$db_host."", "".$db_user."", "".$db_pass."", "".$db_name."");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed MySQL: " . mysqli_connect_error();
  	header("Location: connectionFailed.php");

  exit();
}

// ONCE IT'S SAVED AND FIXED THEN CLICK CONTINUE ON THE INSTALLATION PAGE FOR IT TO WORK.
// IF THE DATAS ARE NOT CORRECT THEN ASK YOUR HOST PROVIDER SQL USER PASS OR FIX THE INCORRECT DETAILS

?>