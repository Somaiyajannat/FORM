<?php
$servername = "localhost";
$username = "root";
$dbname = "crud";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo "Sorry";
} else {
   // echo "Successfull";
}

?>