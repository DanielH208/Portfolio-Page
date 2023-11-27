<?php 
    
    try {

        $env = parse_ini_file('dbDetails.env');
        $host = $env["MySQL_DB_HOST"];
        $dbname = $env["MySQL_DB_NAME"];
        $username = $env["MySQL_DB_USER_NAME"];
        $password = $env["MySQL_DB_PASSWORD"];

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            //echo "Connected to $dbname at $host successfully.";
            }
        catch (PDOException $pe) {
            die ("Could not connect to the database $dbname :" . $pe->getMessage());
        }

    }
    catch (PDOException $pe) {
        die ("Error retrieving details from .env file:" . $pe->getMessage());
    }
?>