<?php

require_once('./sr/db_connect.php');



//$q="DROP TABLE IF EXISTS `grahak_details`;";
//$q1="DROP TABLE IF EXISTS `grahak_payments`;";
//$q2="DROP TABLE IF EXISTS `users`;";
//mysqli_query($link,$q);
//mysqli_query($link,$q1);
//mysqli_query($link,$q2);


$q="CREATE TABLE `grahak_details` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `g_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";           
mysqli_query($conn,$q);

$q1="CREATE TABLE `grahak_payments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `g_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `month_date` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `rakam` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `paid` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bill_no` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";           
mysqli_query($conn,$q1);

$q2="CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";           
mysqli_query($conn,$q2);

$qq="INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, 'admin', 'admin');";
mysqli_query($conn,$qq);
// Close connection
mysqli_close($conn);

	header("Location: index.php");

?>