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
    <link rel="stylesheet" href="../assets/CSS/courseView.css">
    <link rel="icon" href="../assets/Images/logo.ico" />
    <title>courseView - AlwaysAStudents! </title>
</head>

<body>
    <div class="containers">
        <?php include("student_sidebar.php")?>
        <div class="main active">
            <?php include "../topnav.php" ?>
            <br>
            <br>           
            <div class="container">
                <div class="course_background">
                    <img src="../assets/Images/courseViewbg.jpg" alt="">
                    <h2><b>Course Name - courseView</b> <button class="btn btn-primary vrStyle" onclick="window.location.href='vr.php'">VR</button></h2>
                    
                </div>
                <hr>
                <div class="course_outline">
                    <?php for ($i=0; $i<15; $i++) { ?>
                        <h5>Chapter <?php echo $i+1 ?></h5>
                        <div class="course_item"></div>
                        <br>
                    <?php } ?>
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
