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
    <link rel="stylesheet" href="../assets/CSS/studentIndex.css">
    <link rel="icon" href="../assets/Images/logo.ico" />
    <title>Dashboard - AlwaysAStudents! </title>
</head>

<body>
    <div class="containers">
        <?php include("student_sidebar.php")?>
        <div class="main active">
            <?php include "../topnav.php" ?>
            <br>
            <div class="container">
                <br>
                <h4>Hello, <?php echo $name2 ?></h4>
                <hr>
                
                <div class="announcement">
                    <h4>Announcement:</h4>
                    <div class="announcement_desc">
                        <marquee>Welcome to AlwaysAStudents learning portal</marquee>
                    </div>
                </div>

                <h4>My Enrolled Classes</h4>
                <div class="button_course_parent">
                        <button class="btn_course; activebtn" onclick="document.location=''">All</button>
                        <button class="btn_course" onclick="document.location=''">Current Taken</button>
                        <button class="btn_course" onclick="document.location=''">Passed</button>
                </div>
                <br>
                <div class="row">
                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="../assets/Images/courseimgae.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Course Name <?php echo $i; ?></h5>
                                    <p class="card-text">
                                        <i class="fa fa-star checked">Description..</i>
                                        <br>
                                        <br>
                                        <!-- Add a button to open the modal with data-toggle and data-target attributes -->
                                        <button class="btn btn-primary mx-auto d-block" type="button">Enrol</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <br>
                <br>
                <h4>Timeline</h4>
                <div class="activity_due">
                    <h6>No upcoming activities due</h6>
                </div>
            </div>
            <a class="scroll_to_top" href="#"><ion-icon name="caret-up-outline"></ion-icon></a>
            <?php include "../assistant.php" ?>
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
