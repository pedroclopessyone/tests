<?php
$username = "teste";
$password = "teste";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysqli_select_db("examples",$dbhandle)
  or die("Could not select examples");

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
