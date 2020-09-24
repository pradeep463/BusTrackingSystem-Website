<?php
include "../mySQLConnection/conn.php";
$responce = array();

$sql = "SELECT * FROM `working_driver_info` WHERE `rout` LIKE 'Karkala to Moodubidre' ";
$result = mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num> 0){
	$location = array();

	while($row=mysqli_fetch_assoc($result)){
		$driver_Name = $row['driver_email-id'];
		$latitude = $row['latitude'];
		$longitude = $row['longitude'];
	}
	$mapURL = "http://map.google.com/maps?q=loc:";
$a = ",";
$url = $mapURL.$latitude.$a.$longitude;
header("Location: $url");
}


else{
	echo '<script type="text/javascript">alert ("Database Has no record");</script>';
	echo "<script>window.close();</script>";
} 

mysqli_close($con);
?>