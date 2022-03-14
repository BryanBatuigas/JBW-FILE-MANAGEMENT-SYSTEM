<?php
include 'connect.php';
if(isset($_POST['submit'])){
$username = $_POST['username'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

$s = " select * from `registration` where username = '$username'";
$result = mysqli_query($con, $s); 
$num = mysqli_num_rows($result);

if($num == 1){
    echo "username is already taken";
}else{
    $reg= " insert into `registration`(username, email, password1, password2) value ('$username', '$email', '$password1', '$password2')";
    mysqli_query($con, $reg);
    echo "registration successful";
    header('location:LOGIN.php');
}
       
}



?>



<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Registration1.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity
        ="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <span class="border-bottom"></span>
    </head>

    <body>
        <div class="container-fluid"><br><br><br><br> 
            <div class="card mx-auto" style="padding-top: 12px; background: rgba(225,225,225,.4);">
                <div class="card-body">
                    <h1 class="card-title">JBW <br><br>FILE MANAGEMENT SYSTEM</h1>
                    <form method="POST">
                        <div class="container">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Enter Username" name="username" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Enter Email" name="email" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password1" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Enter Confirm Password" name="password2" autocomplete="off">
                        </div>
                        <button id="coord11"type="submit" name="submit" class="btn btn-lg btn-primary">Sign Up</button>
                        <div>
                            <h2 style="font-size: 15pt">Already have an account ?</h2>
                        </div>
                        <div class="coord11">
                            <a href="LOGIN.php"><b2 class="button2">Log in</b2></a>
                        </div>   
                    </form>
                </div>
            </div>    
        </div>
    </body>
</html>