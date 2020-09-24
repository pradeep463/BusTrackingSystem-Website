<html>
<head>
<title>Track Me </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/adminloginindex.css">
<link rel="stylesheet" href="css/bodybackground.css">
<link rel="stylesheet" href="css/indeximg.css">
<script src="Javascripts/pswHorV.js"></script>
</head>
<body class="body">
<div class="logoImg">
<a href="index.php"><img src="images/trackmelogo.jpg" alt="logo" height="65" width="65"></a>
</div>
<div class="logotext">
TrackMe
</div>
<hr class="hr">
 <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Download/TrackMe.apk">Download</a></li>
        <li>
            <a href="#">Login/Rigister &#9662;</a>
            <ul class="dropdown">
                <li><a href="admin/login.html">Admin</a></li>
                <li><a href="Passenger/login.html">Passanger</a></li>
            </ul>
        </li>
		<li><a href="InstallationGuid/InstallationGuide.pdf">Instalation Guide</a></li>
		<li><a href="#feature">Features</a></li>
        <li><a href="#contactUs">Contact Us</a></li>
		<li><a href="#about">About</a></li>
    </ul>

	<div class="adminpannel">
<form method="POST" action="Admin/loginCheckValidity.php">
<center><h2>Admin Panel</h2>
<h3>ADMIN LOGIN</h3></center>
User Name or Email-id : <input type="textbox" size="20" name="uname" required /> <br>
Password : <input type="password" size="20" id="psw" name="password" required /><br>
<input type="checkbox" onclick="myFunction()">Show Password
<input type="submit" value="Login">
</form>
</div>
<div class="indeximg">
<img src="images/trackmelogo.jpg">
</div><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<body>
</html>
<?php
include "footer/footer.html";
?>
