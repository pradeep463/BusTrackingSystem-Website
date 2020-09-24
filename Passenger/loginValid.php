<?php
session_start();
include "../mySQLConnection/conn.php";

$email = $_POST['email'];
$pass = $_POST['password']; 

$_SESSION['uname'] = $email ;

$isValidEmail = filter_var($email,FILTER_VALIDATE_EMAIL);

if($con){
	if ($isValidEmail == false){
			echo '<script type="text/javascript">alert ("This email is not valid");</script>';
			header('refresh:0;url=login.html');
	}else{
		$sqlToCheckEmail = "select * from `user_table`  where `email-id` LIKE '$email'";
		$userEmailQuery = mysqli_query($con,$sqlToCheckEmail);
	
	if(mysqli_num_rows($userEmailQuery)>0){
		$sqlToLogin = "select * from `user_table`  where `email-id` LIKE '$email' and `password` LIKE '$pass'";
		$result = mysqli_query($con,$sqlToLogin);
		
		if(mysqli_num_rows($result)>0){
			echo '<script type="text/javascript">alert ("Login Success");</script>';
			header('refresh:0;url=passangerpage.php');
		
		}else{
			
			echo '<script type="text/javascript">alert ("Wrong Password");</script>';
			header('refresh:0;url=login.html');
		}
			
		}else{
			
			echo '<script type="text/javascript">alert ("The Email-id is not Registerd");</script>';
			header('refresh:0;url=login.html');
			
		}
	}
	
}else{
	echo "Connection Error";
}

mysqli_close($con);

?>