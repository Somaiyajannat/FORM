<?php

    include_once "config.php";

    if (isset($_GET['user_id'])) {
        $id = $_GET['user_id'];
        // echo '<pre>';
        // // print_r($id);

        $sql = "delete from info where id ='" . $id . "';";
        // echo $sql;
        if ($conn->query($sql) == true) {
            $message = "delete successfully!";
        } else {
            $message = "sorry";
        }
        header("Location:index.php?message=".$message);
    }

?>