<?php 
    session_start();
	require('../include/dbconn.php');

	if (!isset($_SESSION['uMail'])|| !isset($_SESSION['uPass'])) {
        header('location: ../index.php');
    }

    $name = $_SESSION['uName'];
	$email = $_SESSION['uMail'];
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
<html>

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
    <link rel="stylesheet" href="../assets/CSS/footer.css">
    <link rel="stylesheet" href="../assets/CSS/premium.css">
    <link rel="icon" href="../assets/Images/logo.ico" />
    <title>Get Premium Now - AlwaysAStudents! </title>
</head>

<body>
    <div class="containers">
        <?php include("student_sidebar.php")?>
        <div class="main active">
            <?php include "../topnav.php" ?>
            <br>
            <br>           
            <div class="container">
                <h2 style="text-align: center;"><b>Course Premium Subscription</b></h2>
                <hr>
                <div class="center_align"> 
                    <div class="column_postPlans">
                        <ul class="price_postpaid">
                        <li class="post_head1">Free Plan</li>
                        <li><b>Access basic function</b></li>
                        <li><button type="button" class="button_post" disabled>Selected Plan</button></li>
                        </ul>
                    </div>

                    <div class="column_postPlans">
                        <ul class="price_postpaid">
                        <li class="post_head2">Without Cert Premium</li>
                        <li><button type="button" class="button_post">Select</button></li>
                        </ul>
                    </div>

                    <div class="column_postPlans">
                        <ul class="price_postpaid">
                        <li class="post_head3">Certificate Premium</li>
                        <li><b>2 hours of one-on-one tutor</b></li>
                        <li><button type="button" class="button_post">Select</button></li>
                        </ul>
                    </div>
                </div>
            </div>

            <a class="scroll_to_top" href="#"><ion-icon name="caret-up-outline"></ion-icon></a>
            <?php include "../assistant.php"?>

            <!-- Footer -->
            <br>
            <br>
            <?php include "../footer.php" ?>
        </div>
    </div>

    <!-- Scripts should be included after the content -->
    <script src="../assets/js/main.js"></script>
</body>

</html>
