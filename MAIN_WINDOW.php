<?php

include 'connect.php';?>

<html lang="en">
<head>
    <title>Main Window</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="design-MW.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url('kamoterss.png');">   
    <!-----------------------NAV-------------------------->
    <div class="menu-bar">
        <nav class="navbar navbar-expand-lg navbar-dark stic">
            <a class="navbar-brand"><img src="LOGO.png"></a>
            <a class="navbar-brand custom-brand name" style="text-align: left;">JBW FILE MANAGEMENT SYSTEM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                </li>
                <li class="nav-item">
                    <a class="nav-link van" href="REQUEST.php">REQUEST</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link van" href="RESPOND.php">RESPOND</a>
                  </li>
              <li class="nav-item">
                  <a class="nav-link van" href="#" data-toggle="modal" data-target="#exampleModalCenter3">LOGOUT</a>
                </li>
              </ul>
            </div>
        </nav>
      </div>
    <!----------------------------TABLE--------------------------------------->
    <div class="table-responsive">
        <div>
          <br>
        </div>
      <div class="container table">
        <table id="customers">
            <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Date</th>
                    <th>Company Name</th>
                    <th>Company Address</th>
                    <th>Purchasing Officer</th>
                    <th>Engineer In-Charge</th>
                    <th>Subject</th>
                    <th>Unit Price</th>
                    <th>Project Name</th>
                    <th>Terms of Project</th>
                    <th>Operations</th>
                    
                </tr>
            </thead>
            <tbody>

            <?php

$sql="select * from `crud`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $date=$row['date'];
        $company_name=$row['company_name'];
        $address=$row['address'];
        $purchasing_officer=$row['purchasing_officer'];
        $eic=$row['eic'];
        $subject=$row['subject'];
        $project_name=$row['project_name'];
        $price=$row['price'];
        $top=$row['top'];
        echo '<tr>
        <td>'.$id.'</td>
        <td>'.$date.'</td>
        <td>'.$company_name.'</td>
        <td>'.$address.'</td>
        <td>'.$purchasing_officer.'</td>
        <td>'.$eic.'</td>
        <td>'.$subject.'</td>
        <td>'.$project_name.'</td>
        <td>'.$price.'</td>
        <td>'.$top.'</td>
        <td>
        <a href="UPDATE.php?updateid='.$id.'" class="btn btn-primary" role="button">Update</a>
        <a href="DELETE.php?deleteid='.$id.'" class="btn btn-danger" role="button">Delete</a>
        </td>
    </tr>';
  
  }
        
}


?>
                <!-- <tr>
                    <td contenteditable="true">0000001</td>
                    <td contenteditable="true">01/05/22</td>
                    <td contenteditable="true">One Time HVAC</td>
                    <td contenteditable="true">126 Don Placido Campos Avenue, Barangay San Agustin III, Dasmariñas, Cavite</td>
                    <td contenteditable="true">Juan Dela Cruz</td>
                    <td contenteditable="true">Juana Dela Cruz</td>
                    <td contenteditable="true">Aircon Repair</td>
                    <td contenteditable="true">3,550</td>
                    <td contenteditable="true">Aircon Repair</td>
                    <td contenteditable="true">Half Payment</td>
                    <td contenteditable="true">Remove</td>
                </tr> -->
            </tbody>
        </table>
      </div>
    </div>
    <div class="text-center">
      <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Logout</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                Are You Sure You Want To Logout Your Account?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="LOGIN.php" class="btn btn-primary" role="button">Logout</a>
            </div>
        </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                Are You Sure You Want To Delete?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="DELETE.php?deleteid='.$id.'" class="btn btn-primary" role="button">Delete</a>
            </div>
        </div>
        </div>
      </div>
    </div>
      
    <!-------------------------------------------------------------->
    <footer class="site-footer">
      <div class="container col-md-12 mt-5 p-lg-5">
        <div class="row">
          <div class="col-sm-12">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-1 mb-4">
            <a class="custom-brand foot"><img src="LOGO.png" alt="JBW" class="responsive"></a>
          </div>
          <div class="col-sm-11 mb-5" style="text-align: center;">
            <b>JBW FILE MANAGEMENT SYSTEM</b><br>
          Dasmariñas City, Cavite,
          Philippines<br>
          CONTACTS: <a class="fa fa-facebook" href="https://www.facebook.com/jatsen.gesta"></a> │
          <a class="fa fa-google" href="https://mail.google.com/mail/u/0/#search/gestajatsen%40gmail.com"></a> <br>
          </div>
          </div>
        </div>
      </div>
    </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

</body>
</html>