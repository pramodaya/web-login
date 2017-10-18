<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login page</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>asserts/css/bootstrap.min.css" rel="stylesheet">

    
  </head>
  <body>
   
    <div class="col-lg-5 col-lg-offset-2">

     <h1>profile Page</h1>

 
    <?php if(isset($_SESSION['success'])){ ?>
      <div class="alert alert-success">
        <?php echo $_SESSION['success']; ?>
      </div>
    <?php
    }?>


    Hello, <?php echo $_SESSION['username']; ?>
    <br><br>
    <a href="<?php echo base_url(); ?>auth/logout">Logout</a>
    
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>asserts/js/bootstrap.min.js"></script>
  </body>
</html>