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

     <h1>Login Page</h1>

    <p>Fill in details to log in </p>
    <!-- if register success -->
    <?php if(isset($_SESSION['success'])){ ?>
      <div class="alert alert-success">
        <?php echo $_SESSION['success']; ?>
      </div>
    <?php
    }?>
    <!-- if  error message-->
    <?php if(isset($_SESSION['error'])){ ?>
      <div class="alert alert-danger">
        <?php echo $_SESSION['error']; ?>
      </div>
    <?php
    }?>

    <!-- echo form errors -->
    <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

    <form action="<?php echo base_url()?>Auth/login" method="POST">
      <div class="form-group">
        <label >Username</label>
        <input class="form-control" name="username" id="username" type="text">  
      </div>
     
      <div class="form-group">
        <label >password</label>
        <input class="form-control" name="password" id="password" type="password">
      </div>

     <div >
       <button class="btn btn-primary" name="login">Login</button>
     </div>

     </form>
     <div>
       <a href="<?php echo base_url(); ?>auth/register">Register</a>
     </div>
     
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>asserts/js/bootstrap.min.js"></script>
  </body>
</html>