<?php
$servername = "admin.otlg.net";
$username = "ArkuDada";
$password = "helloworld";
$dbname = "upro";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$ID=$_GET["ID"];
// sql to delete a record
$sql = "DELETE FROM CarOwner WHERE id='$ID'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
header( 'refresh: 2; url=/M6_project_CarOwner' );
exit(0);
$conn->close();
?>