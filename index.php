<?php
include_once "view.php";
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <div class ="">
            <div class ="container">
                <div class = "row">
                    <div class = "col-md-12">
                        <table>
                            <thead class ="thead-dark">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if($result->num_rows > 0) {
                                    while($row = $result ->fetch_assoc()){
                                            ?>
                                    <tr>
                                        <td><?php echo (!empty($row["name"])? $row["name"] :"" ) ?></td>
                                        <td><?php echo (!empty($row["email"])? $row["email"] :"" ) ?></td>
                                        <td><?php echo (!empty($row["password"])? $row["password"] :"" ) ?></td>
                                        <td><?php echo (!empty($row["id"])? $row["id"] :"" ) ?></td>
                                        <td>
                                            <a type = "submit" href = "edit_form.php?user_id=<?php echo $row["id"]?>">Edit</a>
                                            <a type = "submit" href = "delete.php?user_id=<?php echo $row["id"]?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php

                                    }

                                }
                                ?>
                                
                            </tbody>
                           
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>