<?php

    // Creating a database connection

    $connection = mysqli_connect("192.168.42.1", "ocpdemodbuser", "ocpdemodbpass", "ocpdemodb");
    if (!$connection) {
	    die("Database connection failed: " . mysqli_connect_error());
	    echo "Connected to MYSQL<br>";
    }


    // Selecting a database 

    $db_select = mysqli_select_db($connection, "ocpdemodb");
    if (!$db_select) {
        die("Database selection failed: " . mysqli_connect_error());
    }

?>
