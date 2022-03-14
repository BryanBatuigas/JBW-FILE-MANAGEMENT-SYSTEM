<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESPOND QUOTATION</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    
  </head>
  <body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->
    <nav class="navbar navbar-expand-lg navbar-dark stic">
        <a class="navbar-brand"><img src="LOGO.png"></a>
        <a class="navbar-brand custom-brand name" style="text-align: left;">JBW FILE MANAGEMENT SYSTEM</a>
    </nav>
    <!--contact section start-->
    <div class="col-md-1 ml-2">
        <a href="MAIN_WINDOW.php"><img src="21.png" style="height: 70px; padding-top: 10px;"/></a>
    </div>
    <div class="text-center">
        <h1>RESPOND QUOTATION</h1>
    </div>
    <div class="card col-md-4 mt-5 ml-2 p-5 mx-auto" style="width: 600px; height: 500px; border-radius: 10px; box-shadow: 0px 0px 10px 0px #000;">
    <div class="contact-section">
      <div class="contact-form">
        <form class="contact" action="" method="post" enctype="multipart/form-data">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <input type="text" name="subject" class="text-box" placeholder="Your Subject" required>
          <textarea name="message" rows="3" placeholder="Your Message" required></textarea>
          <input type="file" name="attachments" id="attachments" placeholder="attachment" required>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02
  </body>
</html>