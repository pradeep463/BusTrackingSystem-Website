<?php
include "../mySQLConnection/conn.php";
$name = $_POST['userName'];
$pass = $_POST['password'];
$sql = "INSERT INTO `admin` (`id`, `admin_Name`, `admin_Password`) VALUES (NULL, '$name', '$pass')";
mysqli_query($con,$sql);
header('refresh:0;url=login.html');
?>