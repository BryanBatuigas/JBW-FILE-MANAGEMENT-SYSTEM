<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$date=$row['date'];
$company_name = $row['company_name'];
$address = $row['address'];
$purchasing_officer = $row['purchasing_officer'];
$eic = $row['eic'];
$subject = $row['subject'];
$project_name = $row['project_name'];
$price = $row['price'];
$top = $row['top'];


if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $company_name = $_POST['company_name'];
    $address = $_POST['address'];
    $purchasing_officer = $_POST['purchasing_officer'];
    $eic = $_POST['eic'];
    $subject = $_POST['subject'];
    $project_name = $_POST['project_name'];
    $price = $_POST['price'];
    $top = $_POST['top'];

    $sql="update `crud` set id=$id,date=$date,company_name='$company_name',address='$address',purchasing_officer='$purchasing_officer',
    eic='$eic',subject='$subject',project_name='$project_name',price=$price,top='$top'
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:MAIN_WINDOW.php');
        
    }else{
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html>
    <title>REQUEST</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src ="JS_request.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            background-image: url(image.jpg);
            background-attachment: fixed;
            background-size: cover;
        }

        .navbar-nav{
            text-align: right;
            margin-right: 20;
            
        }
        .navbar .navbar-brand{
            color: rgb(0, 0, 0);
            font-size: 30px;
            -webkit-text-fill-color: rgb(255, 255, 255);
            -webkit-text-stroke-width:.5px;
        }
        .navbar .navbar-toggler{
            color:rgb(255, 255, 255);
        }
        .navbar-brand img{
            width: 80px;
            height: 70px;
            margin-top: 2px;
            margin-right: 20px;
            color: white;
            font-size: 20px;
        }
        .navbar{
            background-color: #0f617a! important;
            z-index: 2;
        }
        .navbar .navbar-nav li a{
            color: #fff;
        }
        .nav-link{
            font-size: 20px;
            margin: 3px;
            color: white;
            font-weight: 500;
            z-index: 1;

        }
        .van:hover{
            font-weight: 600;
            border: 1px solid #fff;
            border-width: auto;

            
        }
        .navbar .nav-item .dropdown-menu .dropdown-item:hover{
            color : rgb(0, 0, 0)! important;
            background-color: rgb(255, 255, 255);
            border: 1px solid #fff;
            opacity: 1;
            transition: .2s ease-in;
            
        }
        .navbar .nav-item .dropdown-menu {
            color : rgb(0, 0, 0)! important;
            background-color: rgb(0, 0, 0);
            border: 1px solid #fff;
            opacity: 1;
            transition: .2s ease-in;
        }

        .nav-item-dropdown{
            background-color: rgb(255, 255, 255);
            transition: .2s ease-in;
            

        }

        @media screen and (max-width: 1219px){
            .name{
            display: none!important;
        }
        }

    </style>

    <body>
        <div class="menu-bar">
            <nav class="navbar navbar-expand-lg navbar-dark stic">
                <a class="navbar-brand"><img src="LOGO.png"></a>
                <a class="navbar-brand custom-brand name" style="text-align: left;">JBW FILE MANAGEMENT SYSTEM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <li class="nav-item">
                            <a class="nav-link van" href="DELIVERY.html">Delivery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link van" href="TOOLS.html">Tools</a>
                        </li>
                    </li>      
                </div>
            </nav>
          </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1 ml-2 mt-2">
                    <a href="MAIN_WINDOW.php"><img src="21.png" style="height: 70px;"/></a>
                </div>
                <div class="card col-md-7 mt-3 mx-auto p-0" style="height: 900px; border-radius: 10px; box-shadow: 0px 0px 10px 0px #000; font-weight: bold;">
                    <div class="card-header">
                        <div class="text-center">
                            REQUEST QUOTATION
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="container">
                            <form>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" placeholder="Enter Date today" name="date" autocomplete="off" value=<?php echo $date;?>>
                            </div>
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Company Name" name="company_name" autocomplete="off" 
                                value=<?php echo $company_name;?>>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Enter Your Company Address" name="address"autocomplete="off" 
                                value=<?php echo $address;?>>
                            </div>
                            <div class="form-group">
                                <label>Purchasing Officer</label>
                                <input type="text" class="form-control" placeholder="Enter Purchasing Officer " name="purchasing_officer"autocomplete="off" 
                                value=<?php echo $purchasing_officer;?> >
                            </div>
                            <div class="form-group">
                                <label>Engineer In Charge</label>
                                <input type="text" class="form-control" placeholder="Enter Engineer In Charge" name="eic"autocomplete="off" 
                                value=<?php echo $eic;?>>
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" placeholder="Enter Subject" name="subject"autocomplete="off"
                                value=<?php echo $subject;?>>
                            </div>
                            <div class="form-group">
                                <label>Project Name</label>
                                <input type="text" class="form-control" placeholder="Enter Project Name" name="project_name"autocomplete="off"
                                value=<?php echo $project_name;?>>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" placeholder="Enter Price" name="price"autocomplete="off" 
                                value=<?php echo $price;?>>
                            </div>
                            <div class="form-group">
                                <label>Terms Of Payment</label>
                                <input type="text" class="form-control" placeholder="Enter Terms of Payment" name="top"autocomplete="off" 
                                value=<?php echo $top;?>>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
 
                           
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
