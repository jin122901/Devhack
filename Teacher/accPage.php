<?php 
    session_start();
	require('../include/dbconn.php');

	if (!isset($_SESSION['TcMail'])|| !isset($_SESSION['TcPass'])) {
        header('location: ../index.php');
    }

	$name = $_SESSION['TcName'];
	$email = $_SESSION['TcMail'];
		

	$sql_statement1 = "SELECT * FROM users WHERE UsrEmail='$email'";

    $execqry1 = mysqli_query($conn,$sql_statement1);
		
	while ($rowresult = mysqli_fetch_assoc($execqry1)){
		$photo=$rowresult['UsrImage'];
		$name2 = $rowresult['UsrName'];
    }

    if(empty($photo)){
		$image="../assets/Images/user.png.jpg";
	}else{
		$image="data:image;base64,".$photo;
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<link rel="stylesheet" href="../assets/CSS/sidebar.css">
	<link rel="stylesheet" href="../assets/CSS/index.css">
    <link rel="icon" href="../assets/Images/logo.ico" />
    <title>Profile - AlwaysAStudents! </title>
   </head>
<body>
	<div class="containers">
        <?php include("teacher_sidebar.php");?>
			
        <div class="main active">
			
            <?php include("teacher_topnav.php");?>
            <br>
			<br>
			<br>
            <div class="container">
				<h2><b>ID@AlwaysAStudents!</b></h2>
				<br>
				<br>
				<div class="modal fade" id="modalAddForm" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header text-center">
								<h4 class="modal-title w-100 font-weight-bold">Upload Photo</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body mx-3">
								<form action="../process_updateImage.php" enctype="multipart/form-data" method="post" id="edit-form">
									<div class="form-group">
										<input type="file" class="custom-file-input" name="image" id="image">
										<label class="custom-file-label" for="image">Choose file</label>
									</div>
									<button type="submit" class="btn btn-primary" id="btnUpdateSubmit" >Save</button>
									<button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
								</form>
							</div>
						</div>
					</div>

					<script>
					// Add the following code if you want the name of the file appear on select
					$(".custom-file-input").on("change", function() {
					var fileName = $(this).val().split("\\").pop();
					$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
					});
					</script>
				</div>
					
				<img src="<?php echo $image; ?>" class="rounded-circle mx-auto d-block" alt="photo" width="210" height="210"><br>
				<a href="" class="btn btn-info btn-sm col-md-1 mx-auto d-block text-center" data-toggle="modal" data-target="#modalAddForm"><i class="fa fa-edit"></i>&nbsp;Upload</a>
				<form action="../process_updateAcc.php" method="post">
					<div class="container mt-3"> 
						<div class="form-group ">
							<label for="email">Email</label>
							<input class="form-control" type="text" name="email" readonly value="<?php echo $_SESSION['TcMail'];?>">
						</div>

						<div class="form-group">
							<label for="name">Name</label>
							<input class="form-control" type="text" name="name" value="<?php echo $name2;?>">
						</div>

						<div class="form-group">
							<label for="pwd">Current Password</label>
							<input class="form-control" type="password" name="pwd">
						</div>

						<div class="form-group">
							<label for="pwd1">New Password</label>
							<input class="form-control" type="password" name="pwd1">
						</div>

						<div class="form-group">
							<label for="pwd2">Confirm Password</label>
							<input class="form-control" type="password" name="pwd2">
						</div>

							<button type="submit" class="col-md-1 mx-auto d-block text-center btn btn-primary text-center" id="btnUpdateSubmit" >Save</button><br>
					</div>
				</form>
			</div>



		</div>
	</div>

    <!-- Scripts should be included after the content -->
    <script src="../assets/js/main.js"></script>
</body>
</html>
