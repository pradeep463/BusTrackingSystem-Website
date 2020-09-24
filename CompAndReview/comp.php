<?php
include "../mySQLConnection/conn.php";
$comp = $_POST['comp'];


			$sql_review = "INSERT INTO `user_reviews` (`id`, `feed_Backs`, `complaints`) VALUES ('', '', '$comp')";
			$result = mysqli_query($con,$sql_review);
			
			
mysqli_close($con);
?>