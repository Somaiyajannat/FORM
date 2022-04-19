<?php 
include_once "config.php";
// $id = $_GET['id'];
// echo $id;
if(isset($_POST["update"])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $id = $_POST['id'];

    $sql = "update info set name ='" . $name . "',email='" . $email. "',password='". $password ."'" . "where id='" . $id . "';"; 
    // echo $sql;

    // exit;
    if($conn->query($sql)== true) {
        echo "Updated Successfully";
    }
    header("Location:index.php");
}
?>
