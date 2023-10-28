<?php require "process_control.php";?>
<!DOCTYPE html>
<html>
<head>
  <title>NewPass Form</title>
<link rel="icon" href="images/iconInno.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="CSS/login.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left"><img id="imglogo" src="images/logo.png" alt="Logo" width="190" height="60"><br><br>
		  <P class="text-center">Lunch Ordering System</P>
		  </div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            New Password
          </h4>
          <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
          <form class="form-box px-3" action="newpass.php" method="POST">
            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input type="password" name="password" placeholder="Create New Password" tabindex="10" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input type="password" name="confirm" placeholder="Confirm Your Password" required>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-block text-uppercase" name="change-password">
                CHANGE
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>