<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vizfogyasztas";

// Create connection
$dbconn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($dbconn->connect_error) {
  die("Connection failed: " . $cdbonn->connect_error);
}

?> 