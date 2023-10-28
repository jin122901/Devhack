<?php
	require('include/dbconn.php');
	session_start();
	if(isset($_SESSION['TcMail']) && isset($_SESSION['TcPass'])) {
		$email=$_SESSION['TcMail'];
	} elseif (isset($_SESSION['uMail']) && isset($_SESSION['uPass'])) {
		$email=$_SESSION['uMail'];
	}	

	
	if($_FILES['image']['size'] == 0){
		echo "<script>alert('Please select an image.');document.location='accPage.php'</script>";
		
	}else{
		$imageName = addslashes($_FILES["image"]["name"]);
		$imageData = addslashes($_FILES["image"]["tmp_name"]);
		$imageData = file_get_contents($imageData);
		$imageData = base64_encode($imageData);
		$sql="UPDATE users SET UsrImage ='$imageData' WHERE UsrEmail='$email'";
		$execqry = mysqli_query($conn, $sql);
		echo "<script>alert('Successful Updated.');document.location='accPage.php'</script>";
		
		
	}	
	
?>