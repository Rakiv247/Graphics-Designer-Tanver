<?php
$hostName = "localhost";
$userName = "id18515422_shopadmin";
$password = "Iamtanver247#2";
$databaseName = "id18515422_shopdb";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>