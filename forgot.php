<?php require_once "process_control.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Forgot Form</title>
  <link rel="icon" href="images/iconInno.png">
  <meta charset="utf-8">
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
		    </div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Forgot Password
          </h4>
          
          <form class="form-box px-3" action="forgot.php" method="POST">
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
            <div class="form-input">
              <span><i class="fa fa-envelope-o"></i></span>
              <input type="email" name="email" placeholder="Enter Your Email Address" tabindex="10" required value="<?php echo $email ?>">
            </div>

            <div class="mb-3">
              <button type="submit" name="check-email" class="btn btn-block text-uppercase">
                CONTINUE
              </button>
            </div>

         
          </form>
          <div class="text-center">
              <a href="login.php" class="forget-link">
                Login to Account
              </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>