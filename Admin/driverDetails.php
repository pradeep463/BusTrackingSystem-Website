<html>
<head>
<title> Track Me </title>
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/driverTabele.css">
<link rel="stylesheet" href="../css/bodybackground.css">
</head>
<body>
<div class="logoImg">
<a href="../index.php"><img src="../images/trackmelogo.jpg" alt="logo" height="65" width="65"></a>
</div>
<div class="logotext">
TrackMe
</div>
<hr class="hr">
 <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../Download/TrackMe.apk">Download</a></li>
        <li>
            <a href="#">Login/Rigister &#9662;</a>
            <ul class="dropdown">
                <li><a href="../admin/login.html">Admin</a></li>
                <li><a href="../Passenger/login.html">Passanger</a></li>
            </ul>
        </li>
		<li><a href="../InstallationGuid/InstallationGuide.pdf">Instalation Guide</a></li>
		<li><a href="#">Features</a></li>
        <li><a href="#">Contact Us</a></li>
		<li><a href="../About/about.html">About</a></li>
    </ul>


</body>
</html>


<?php
echo "<center>";
echo "<div class='Drivertable'>";
include "../mySQLConnection/conn.php";
$sql = "SELECT * FROM `driver_info`";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='2'>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Driver Name</th>";
                echo "<th>Driver Email-ID</th>";
                echo "<th>Password</th>";
                echo "<th>Driver Mobile Number</th>";
                echo "<th>Driver Address</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['driver_Name'] . "</td>";
                echo "<td>" . $row['driver_email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['driver_mob_num'] . "</td>";
                echo "<td>" . $row['driver_Address'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No Data in Database.";
    }
} 

mysqli_close($con);

echo "</center>";
echo "</div>";
?>