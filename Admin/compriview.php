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
echo "<div class='feedtable'>";
include "../mySQLConnection/conn.php";
$sql = "SELECT `feed_Backs`,`id` FROM `user_reviews`";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='2'>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Feed Backs</th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['feed_Backs'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "No Data in Database.";
    }
} 

echo "</center>";
echo "</div>";
?>

<?php
echo "<center>";
echo "<div class='compTable'>";

$sqli = "SELECT `complaints`,`id` FROM `user_reviews`";
if($res = mysqli_query($con, $sqli)){
    if(mysqli_num_rows($res) > 0){
        echo "<table border='2'>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Complaints</th>";
               
            echo "</tr>";
        while($rows = mysqli_fetch_array($res)){
            echo "<tr>";
                echo "<td>" . $rows['id'] . "</td>";
                echo "<td>" . $rows['complaints'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($res);
    } else{
        echo "No Data in Database.";
    }
} 
echo "</center>";
echo "</div>";
mysqli_close($con);
?>