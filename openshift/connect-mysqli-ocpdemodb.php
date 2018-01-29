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

$sql = "SELECT id, model,year FROM cars";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Model: " . $row["model"]. " " . $row["year"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
