<?php

    // este script apenas testa a ligação á BASE DE DADOS e caso ocorra um erro de ligação, surge mensagem de erro. Em caso de sucesso, aparece ecrã branco.

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
