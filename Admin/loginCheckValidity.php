<?php
session_start();
include "../mySQLConnection/conn.php";
$name = $_POST['uname'];
$pwd = $_POST['password']; 
if($con){
		$sqlToCheckEmail = "select * from admin where admin_Name = '$name'";
		$userEmailQuery = mysqli_query($con,$sqlToCheckEmail);
	if(mysqli_num_rows($userEmailQuery)>0){
		$sqlToLogin = "select * from admin where admin_Name = '$name' && admin_Password = '$pwd'";
		$result = mysqli_query($con,$sqlToLogin);
		if(mysqli_num_rows($result)>0){
			header('location:admin_page.html');
		}else{
			echo '<script type="text/javascript">alert ("Wrong Password");</script>';
			header('refresh:0;url=login.html');
		}
		}else{
			echo '<script type="text/javascript">alert ("The Admin is not Registerd");</script>';	
			header('refresh:0;url=login.html');
		}
}else{
	echo "Connection Error";
}
mysqli_close($con);
?>