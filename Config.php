<?php
$servername = "admin.otlg.net";
$username = "ArkuDada";
$password = "helloworld";
$dbname = "upro";
// Create connection
$sqli = new mysqli($servername, $username, $password, $dbname);
$sqli->set_charset("utf8");

if($sqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
