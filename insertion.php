<?php
include_once "config.php";
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insertSql = "insert into info (name, email, password) values('". $name . "','". $email. "','". $password . "');";
    if($conn-> query($insertSql) == true) {
        echo "inserted success";
    } else {
        echo "not inserted";
    }
}

?>