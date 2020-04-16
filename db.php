<?php

include('config.php');

// Create connection
$conn = new mysqli(DBHOST, DBUSER, DBPWD, DBNAME) or die();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";