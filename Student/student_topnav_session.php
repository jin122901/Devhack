<?php 
	require('include/dbconn.php');

	if (!isset($_SESSION['uMail']) || !isset($_SESSION['uPass'])) {
        header('location: ../index.php');
    }

    $name = $_SESSION['uMail'];
	$email = $_SESSION['uPass'];
	$sql_statement1 = "SELECT * FROM users WHERE UsrEmail='$email'";

    $execqry1 = mysqli_query($conn,$sql_statement1);
		
	while ($rowresult = mysqli_fetch_assoc($execqry1)){
		$photo=$rowresult['UsrImage'];
		$name2 = $rowresult['UsrName'];
    }

    if(empty($photo)){
		$image="../assets/Images/user.png";
	}else{
		$image="data:image;base64,".$photo;
	}
?>

<div class="topbar">
    <ion-icon name="menu-outline" class="toggle"></ion-icon>
    <div>
        <img src="<?php echo $image ?>" alt="" class="user" id="user"/>
    </div>
    <div class="user_submenu">
        <span class="submenu_item"><a href="accPage.php"><ion-icon name="person-outline"></ion-icon> &emsp; Profile</a></span>
        <span class="submenu_item"><a href="process_logout.php"><ion-icon name="log-out-outline"></ion-icon> &emsp; Logout</a></span>
    </div>
</div>

