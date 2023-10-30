<?php
	session_start();
    require('include/dbconn.php');
    $name = $_POST['name'];
    $email=$_POST['email'];
	$current=$_POST['pwd'];
	$newPwd=$_POST['pwd1'];
	$conPwd=$_POST['pwd2'];
	$sql_statement_retval = "SELECT * FROM users WHERE UsrEmail='$email'";
    
    $execqry_retval = mysqli_query($conn,$sql_statement_retval);//execute query statement
	while ($rowresult = mysqli_fetch_assoc($execqry_retval)){                            
                $retval_pass = $rowresult['UsrPassword'];       
            }
	$compare_pwd = password_verify($current,$retval_pass);

	if($compare_pwd){
		if($newPwd==$conPwd){
			$new_hashpwd = password_hash($conPwd,PASSWORD_DEFAULT);
			$sqlstatement = "UPDATE users SET UsrName = '$name',UsrPassword ='$new_hashpwd' WHERE UsrEmail='$email'";
			$execqry = mysqli_query($conn, $sqlstatement);
			if(isset($_SESSION['TcMail']) && isset($_SESSION['TcPass'])) {
				echo "<script>alert('Successful Updated');document.location='accPage.php'</script>";
			} elseif (isset($_SESSION['uMail']) && isset($_SESSION['uPass'])) {
				echo "<script>alert('Successful Updated');document.location='accPage.php'</script>";
			}
			
		}
		else{
			if(isset($_SESSION['TcMail']) && isset($_SESSION['TcPass'])) {
				echo "<script>alert('New password and confirm password no same!');document.location='accPage.php'</script>";
			} elseif (isset($_SESSION['uMail']) && isset($_SESSION['uPass'])) {
				echo "<script>alert('New password and confirm password no same!');document.location='accPage.php'</script>";
			}
			
		}
	}else{
		if(isset($_SESSION['TcMail']) && isset($_SESSION['TcPass'])) {
			echo "<script>alert('Wrong currect password!');document.location='accPage.php'</script>";
		} elseif (isset($_SESSION['uMail']) && isset($_SESSION['uPass'])) {
			echo "<script>alert('Wrong currect password!');document.location='accPage.php'</script>";
		}
		
	}

    

?>