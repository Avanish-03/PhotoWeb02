<?php
$servername = "localhost";
$username = "id21848794_myphotoweb02";
$password = "@Photoweb02";

// Create connection
$con = new mysqli($servername, $username, $password);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

?>