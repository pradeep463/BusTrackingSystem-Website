<html>
<head>
<title> Track Me </title>
<script src="../Javascripts/searchRoute.js"></script>
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/passPage.css">
<link rel="stylesheet" href="../css/driverTabele.css">
<link rel="stylesheet" href="../css/bodybackground.css">
</head>
<body>

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
		<li><a href="#">About</a></li>
    </ul>
	
	<div class="searchBox">
<center><h2>Routes</h2></center>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Places.." title="Type place name">
<div class="routs">
<ol id="myUL">
  <li><a href="../mapRouts/karkalatoudupi.php" target="_blank">Karkala To Udupi</a></li>
  <li><a href="../mapRouts/KarkalatoBeltangadi.php" target="_blank">Karkala To Beltangadi</a></li>
  <li><a href="../mapRouts/KarkalatoChhikMangalore.php" target="_blank">Karkala To Chikmangalore</a></li>
  <li><a href="../mapRouts/KarkalatoDharmastala.php" target="_blank">Karkala To Dharmastala</a></li>
  <li><a href="../mapRouts/Karkalatohebri.php" target="_blank">Karkala To Hebri</a></li>
  <li><a href="../mapRouts/KarkalatoKalasa.php" target="_blank">Karkala To Kalasa</a></li>
  <li><a href="../mapRouts/KarkalatoKundapura.php" target="_blank">Karkala To Kunadapura</a></li>
  <li><a href="../mapRouts/KarkalatoMadikeri.php" target="_blank">Karkala To Madikeri</a></li>
  <li><a href="../mapRouts/KarkalatoMangaloreviaMoodubidre.php" target="_blank">Karkala To Mangalore (via Moodubidri)</a></li>
  <li><a href="../mapRouts/karkalatomangaloreviapadubidri.php" target="_blank">Karkala To Mangalore (via Padubidri)</a></li>
  <li><a href="../mapRouts/KarkalatoMoodubidre.php" target="_blank">Karkala To Moodubidri</a></li>
  <li><a href="../mapRouts/karkalatonakre.php" target="_blank">Karkala To Nakre</a></li>
  <li><a href="../mapRouts/KarkalatoSHiivmogga.php" target="_blank">Karkala To Shivmogga </a></li>

</ol>
</div>
</div>


</body>
</html>

<?php
echo "<center>";
echo "<div class='Drivertable'>";
include "../mySQLConnection/conn.php";
$sql = "SELECT * FROM `working_driver_info`";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='2'>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Driver Email-ID</th>";
                echo "<th>Latitude</th>";
                echo "<th>Longitude</th>";
                echo "<th>Rout</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['driver_email-id'] . "</td>";
                echo "<td>" . $latitude = $row['latitude'] . "</td>";
                echo "<td>" . $longitude = $row['longitude'] . "</td>";
                echo "<td>" . $rout = $row['rout'] . "</td>";
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






