<?php
include_once "edit.php";
$user_info = $result->fetch_assoc();
// echo $user_info['id'];


?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel = "stylesheet" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class = "full-body">
            <div class = "container">
                <div class = "row">
                    <div class = "col-md-12">
                        <form action=  "update.php" method = "POST" >
                            <div class = "header f-style">
                                <h2>Form</h2>
                            </div>
                            <input type="hidden"  name="id" value="<?php echo (!empty($user_info["id"])? $user_info['id'] :"")?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name = "name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value = <?php echo (!empty($user_info["name"])? $user_info["name"]: "") ?>>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" name = "email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value = "<?php echo (!empty($user_info["email"])? $user_info["email"]:"") ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="text" name = "password" class="form-control" id="exampleInputPassword1" placeholder="Password"value = "<?php echo (!empty($user_info['password'])? $user_info["password"]:"") ?>">
                            </div>
                        
                            <button type="submit"  name = "update" class=" f-stylebtn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    </body>
</html>