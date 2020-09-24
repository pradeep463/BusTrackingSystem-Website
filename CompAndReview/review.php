<?php
include "../mySQLConnection/conn.php";
 
$review = $_POST['review'];

			$sql_review = "INSERT INTO `user_reviews` (`id`, `feed_Backs`, `complaints`) VALUES ('', '$review', '')";
			$result = mysqli_query($con,$sql_review);
			
			
mysqli_close($con);
?>