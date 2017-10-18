<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register page</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>asserts/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="col-lg-5 col-lg-offset-2">

     <h1>Register page</h1>

    <p>Fill in details to Register </p>

    <?php if(isset($_SESSION['success'])){ ?>
      <div class="alert alert-success">
        <?php echo $_SESSION['success']; ?>
      </div>
    <?php
    }?>


    <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

    <form action="<?php echo base_url()?>Auth/register" method="POST">
      <div class="form-group">
        <label >Username</label>
        <input class="form-control" name="username" id="username" type="text">
      </div>

      <div class="form-group">
        <label >Email</label>
        <input class="form-control" name="email" id="email">
      </div>

      <div class="form-group">
        <label >Password</label>
        <input class="form-control" name="password" id="password" type="password">
      </div>

      <div class="form-group">
        <label >Confirm Password</label>
        <input class="form-control" name="password2" id="password" type="password">
      </div>

      
      <div class="form-group">
        <label >Gender</label>
        <select class="form-control" id="gender" name="gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>

        
      <div class="form-group">
        <label for="phone">Phone</label>
        <input class="form-control" name="phone" id="phone" type="text">
     </div>


     <div >
       <button class="btn btn-primary" name="register">Register</button>
     </div>

     </form>

     <div>
       <a href="<?php echo base_url(); ?>auth/login">Login</a>
     </div>
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>asserts/js/bootstrap.min.js"></script>
  </body>
</html>