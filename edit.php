<?php
include_once "config.php";
$id = $_GET["user_id"];
// echo $id;
$sql = "select * from info where id ='" . $id . "';";
$result = $conn->query($sql);


?>