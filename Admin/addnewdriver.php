<?php
include "../mySQLConnection/conn.php";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$mob = $_POST['mob'];
$address = $_POST['add'];
$sql = "INSERT INTO `driver_info` (`id`, `driver_Name`, `driver_email`, `password`, `driver_mob_num`, `driver_Address`) VALUES (NULL, '$name', '$email', '$password`', '$mob', '$address')";
mysqli_query($con,$sql);
header('refresh:0;url=admin_page.html');
?>