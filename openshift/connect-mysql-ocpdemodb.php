<?php
$username = "ocpdemodbuser";
$password = "ocpdemodbpass";
$hostname = "192.168.42.1"; 

//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysqli_select_db("ocpdemodb", $dbhandle)
  or die("Could not select ocpdemodb");

//execute the SQL query and return records
$result = mysqli_query("SELECT id, model,year FROM cars");

//fetch tha data from the database
while ($row = mysqli_fetch_array($result)) {
   echo "ID:".$row{'id'}." Name:".$row{'model'}."Year: ". //display the results
   $row{'year'}."<br>";
}
//close the connection
mysqli_close($dbhandle);
?>
