<?php require "process_login.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <meta charset="utf-8">
	<link rel="icon" href="images/iconInno.png">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="assets/CSS/login.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left"><img id="imglogo" src="assets/Images/logo.png" alt="Logo" width="110" height="110">
        <br>
        <p class="text-center">AlwaysAStudents! - ID@AAS!</p>
        <br><br>
				  <a href="index.php" class="text-left menulink" >
				  &emsp;&emsp;<i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back to Menu
				  </a>
		  </div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Login into account
          </h4>
          <?php
              if(count($errors) > 0){
                  ?>
                  <div class="alert alert-danger text-center">
                      <?php 
                          foreach($errors as $error){
                              echo $error;
                          }
                      ?>
                  </div>
                  <?php
              }
          ?>
          <form class="form-box px-3" action="login.php" method="post">
            <div class="form-input">
              <span><i class="fa fa-envelope-o"></i></span>
              <input type="email" name="email" placeholder="Email Address" tabindex="10" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input type="password" name="pass" placeholder="Password" required>
            </div>
            <div class="mb-3">
              <button type="submit" name="submit" class="btn btn-block text-uppercase">
                Login
              </button>
            </div>
            <div class="float-child-left">
              <a href="forgot.php" class="forget-link">
                Create a New Account
              </a>
            </div>
            <div class="float-child-right">
              <a href="forgot.php" class="forget-link">
                Forget Password?
              </a>
            </div>        
            
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>