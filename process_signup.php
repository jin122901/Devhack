<?php
    session_start();
    require('include/dbconn.php');
    
    $errors = array();

    if(isset($_POST['createnewacc'])) {
        $email= htmlentities($_POST['email']);
        $pass= htmlentities($_POST['pass']);
        $name = htmlentities($_POST['name']);
        $type = htmlentities($_POST['type']);

        $newhash = password_hash($pass,PASSWORD_DEFAULT);

        // Check email exists or not
        $sql_statement_retval = "SELECT * FROM users WHERE UsrEmail='$email'";
        $execqry_retval = mysqli_query($conn,$sql_statement_retval);//execute query statement
        $countrow = mysqli_num_rows($execqry_retval); //result total row after query
        
        if($execqry_retval){
            if (!empty($countrow)) {
                $errors['exists'] = "Email already exists on our system, please try another email.";
            } else {
                $sql_statement_insert = "INSERT INTO users (UsrEmail, UsrPassword, UsrName, UsrType) VALUES
                ('$email', '$newhash' , '$name', '$type')";

                if(!$conn->query($sql_statement_insert)){
                    echo "Data Insert failed: (" . $conn->errno . ") " . $conn->error;
                }

                echo "<script>alert('Sign up successfully, please proceed to log in.');document.location='login.php'</script>";
            }
            
            
        } else {
            echo "<script>alert('QUERY ERROR');document.location='newaccount.php'</script>";
            
        }
    } 
?>