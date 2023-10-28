<?php require "process_control.php";?>

<!DOCTYPE html>
<html>
  
<head>
  <title>Reset Form</title>
  <meta charset="utf-8">
	<link rel="icon" href="images/iconInno.png">
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
		  <p class="text-center">Lunch Ordering System</p>
		  </div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Code Verification
          </h4>
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
          <form class="form-box px-3" action="reset.php" method="POST">
            <div class="form-input">
              <span><i class="fa fa-sort-numeric-asc"></i></span>
              <input type="text" name="otp" placeholder="Enter Code" tabindex="10" required>
            </div>
           
            <div class="mb-3">
              <button type="submit" name="check-reset-otp" class="btn btn-block text-uppercase">
                SUBMIT
              </button>
            </div>
            
          </form>
          <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
        </div>
      </div>
    </div>
  </div>
  
</body>

</html>