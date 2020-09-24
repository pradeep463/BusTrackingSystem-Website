<?php
include "../mySQLConnection/conn.php";

$userName = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mob'];
$gender = $_POST['gender'];

$isValidEmail = filter_var($email,FILTER_VALIDATE_EMAIL);

if($con){
	if ($isValidEmail == false){
			echo '<script type="text/javascript">alert ("This Email-ID is not valid");</script>';
			header('refresh:0;url=login.html');
	}else{
		
		$sqlToCheckEmail = "select * from `user_table`  where `email-id` LIKE '$email'";
		$userEmailQuery = mysqli_query($con,$sqlToCheckEmail);
		
	if(mysqli_num_rows($userEmailQuery)>0){
		echo '<script type="text/javascript">alert ("The Email-id is alrady Registerd");</script>';
			header('refresh:0;url=login.html');
	}
		else{
			
			$sqlToRigi="INSERT INTO `user_table` (`id`, `user_Name`, `email-id`, `password`, `mobile`, `gender`) VALUES (NULL, '$userName', '$email', '$password', '$mobile', '$gender')";
		$result = mysqli_query($con,$sqlToRigi);
		
		/* if(mysqli_num_rows($result)>0){ */
			echo '<script type="text/javascript">alert ("Rigister Success");</script>';
			header('refresh:0;url=login.html');
		/* } */
			
		}
	}
}else{
	echo "Connection Error";
}

mysqli_close($con);

?>