<html>

<head>

<title>Syone Openshift Demo</title>

<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/OpenShift-LogoType.svg/1200px-OpenShift-LogoType.svg.png">

</head>

<body>
<img src="syone-logo.png" alt="Openshift Demo" width="400" height="250">
<br>

<?php
$servername = "192.168.42.1";
$username = "ocpdemodbuser";
$password = "ocpdemodbpass";
$dbname = "ocpdemodb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, model,year,submission_date FROM cars";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<i style="color:red;font-size:20px;font-family:calibri ;"> ID: </i> '. $row["id"]. '<i style="color:red;font-size:20px;font-family:calibri ;"> MODEL: </i> '. $row["model"]. " | " . $row["year"]. '<i style="color:red;font-size:20px;font-family:calibri ;"> | Import Date: </i> '. $row["submission_date"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
</body>
</html>
