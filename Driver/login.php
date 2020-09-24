<?php
include ("../mySQLConnection/conn.php");

$email = $_POST['email'];
$pass = $_POST['password']; 

/* $email = "pradeep@gmail.com";
$pass = "12356";  */

$isValidEmail = filter_var($email,FILTER_VALIDATE_EMAIL);

if($con){
	if ($isValidEmail == false){
		echo "This email is not valid";
	}else{
		$sqlToCheckEmail = "select * from `driver_info`  where `driver_email` LIKE '$email'";
		$userEmailQuery = mysqli_query($con,$sqlToCheckEmail);
	
	if(mysqli_num_rows($userEmailQuery)>0){
		$sqlToLogin = "select * from `driver_info`  where `driver_email` LIKE '$email' and password LIKE '$pass'";
		$result = mysqli_query($con,$sqlToLogin);
		
		if(mysqli_num_rows($result)>0){
			echo "Login Success";
		}else{
			echo "Wrong Password";
		}
			
		}else{
			echo "The Email-id is not Registerd";
			
			
		}
	
	
	}
}else{
	echo "Connection Error";
}






/* $sql = "select name from login_info where user_name = '$user_name' and user_password = '$user_password'";
$result = mysqli_query($con,$sql);

$num =  mysqli_num_rows($result);
if($num != 0)
{
$row = mysqli_fetch_assoc($result);
	$name = $row['name'];
	$stutus = "ok";
	echo json_encode(array("responce"=>$stutus,"name"=>$name));
}
else{
		$stutus = "failed";
		echo json_encode(array("responce"=>$stutus));
} */
mysqli_close($con);

?>