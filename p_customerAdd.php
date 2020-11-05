<?php
require('./sr/db_connect.php');
include("./sr/session.php");
$link = $conn;
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['customerName']);
$address = mysqli_real_escape_string($link, $_REQUEST['customerAddress']);
$gender = mysqli_real_escape_string($link, $_REQUEST['customerGender']);
$phone = mysqli_real_escape_string($link, $_REQUEST['customerPhone']);
$grahak_id = mysqli_real_escape_string($link, $_REQUEST['customerID']);
 
// Attempt insert query execution
$sql = "INSERT INTO grahak_details (name, address, gender, phone, g_id) VALUES ('$name', '$address', '$gender', '$phone', '$grahak_id')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("Location: addCustomer.php?created");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>