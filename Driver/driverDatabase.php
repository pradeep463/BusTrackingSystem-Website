<?php
include "../mySQLConnection/conn.php";

$driver = $_POST['driver'];
$latitude = $_POST['alatitude'];
$longitude = $_POST['alongitude']; 
$rout = $_POST['aRout'];
/* $driver = "pradee";
$latitude = "12.";
$longitude = "75.";
$rout = "dndjk";  */
$sql = "SELECT * FROM `working_driver_info` WHERE `driver_email-id` LIKE '$driver' ";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
if($num != 0)
{
	$update = "UPDATE `working_driver_info` SET `latitude` = '$latitude' , `longitude` = '$longitude' , `rout` = '$rout' WHERE `working_driver_info`.`driver_email-id` = '$driver'";
	mysqli_query($con,$update);
	echo "Updated";
}
else
{
	$reg = "INSERT INTO `working_driver_info` (`id`, `driver_email-id`, `latitude`, `longitude`, `rout`) VALUES  (NULL, '$driver', '$latitude', '$longitude','$rout');";
	mysqli_query($con, $reg);
    echo "Successfully Updated";
	
}

?>