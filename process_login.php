<?php
    session_start();
    require('include/dbconn.php');
    
    $errors = array();

    if(isset($_POST['submit'])) {
        $email= htmlentities($_POST['email']);
        $pass= htmlentities($_POST['pass']);

        $sql_statement_retval = "SELECT * FROM users WHERE UsrEmail='$email'";
    
        $execqry_retval = mysqli_query($conn,$sql_statement_retval);//execute query statement
        $countrow = mysqli_num_rows($execqry_retval); //result total row after query
        
        if($execqry_retval){
            if (!empty($countrow)) {
                while ($rowresult = mysqli_fetch_assoc($execqry_retval)){
                    $retval_usermail = $rowresult['UsrEmail'];              
                    $retval_pass = $rowresult['UsrPassword'];
                    $retval_username = $rowresult['UsrName'];
                    $retval_userstatus = $rowresult['UsrStatus'];
                    $retval_usertype = $rowresult['UsrType'];       
                }

                $compare_pwd = password_verify($pass,$retval_pass);
                // If verified usrtype is Teacher
                if ($retval_usertype == "1" && $compare_pwd) {
                    // echo "<br>Login successfull";
                    $_SESSION['TcMail'] = $retval_usermail;//declare variable for session                
                    $_SESSION['TcName'] = $retval_username;
                    $_SESSION['TcPass'] = $retval_pass;
                    echo "<script>document.location='Teacher/dashboard.php'</script>";
                }
                
                // If verified usrtype is Student
                else if ($retval_usertype == "2" && $compare_pwd && $retval_userstatus == "1") {
                    // echo "<br>Login successfull";
                    $_SESSION['uMail'] = $retval_usermail;//declare variable for session                
                    $_SESSION['uName'] = $retval_username;
                    $_SESSION['uPass'] = $compare_pwd;
                    echo "<script>document.location='Student/dashboard.php'</script>";
                }
                
                else if ($retval_usertype == "1" && $compare_pwd && $retval_userstatus == "0") { 
                    $errors['no-data'] = "NO DATA FOUND!";
                    // echo "<script>alert('');document.location='index.php'</script>";
                }
                
                else {
                    $errors['wrong-pass-n-username'] = "WRONG PASSWORD OR USERNAME";
                    // echo "<script>alert('WRONG PASSWORD OR USERNAME');document.location='login.php'</script>";
                }
                
            } else {
                $errors['no-data'] = "NO DATA FOUND";
                // echo "<script>alert('NO DATA FOUND');document.location='login.php'</script>";
            }
            
            
        } else {
            echo "<script>alert('QUERY ERROR');document.location='login.php'</script>";
            
        }
    } 
?>