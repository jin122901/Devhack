<?php
    $servername = "localhost"; //localhost or livehost
    $dbusername = "root"; //username db
    $dbpwd = ""; //password db
    $dbname = "alwaysastudent"; //databases name

    //Create connection for new databases
    $connDB = mysqli_connect($servername,$dbusername,$dbpwd);

	//Check connection for new databases
    if($connDB === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
    }

	// If database is not exist create one
	if (!mysqli_select_db($connDB,$dbname)){
		$sql = "CREATE DATABASE ".$dbname;
		if ($connDB->query($sql) === TRUE) {
			//echo "Database created successfully";
		} else {
			echo "Error creating database: " . $connDB->error;
		}
	}

	//Create connection for databases eld_psp
    $conn = mysqli_connect($servername,$dbusername,$dbpwd,$dbname);

	//Check connection for databases eld_psp
    if($connDB === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
    }

    //If users table is not exist create one
	$queryCreateUsersTable = " CREATE TABLE IF NOT EXISTS users (
        UsrEmail VARCHAR(100) NOT NULL,
        UsrPassword VARCHAR(255) NOT NULL,
        UsrName VARCHAR(50) NOT NULL,
        UsrType VARCHAR(20),
        UsrImage LONGBLOB,
        UsrStatus INT(2) DEFAULT 1,
        code mediumint(50),
        confirm_password VARCHAR(255),
        PRIMARY KEY (UsrEmail)
        )";

    if(!$conn->query($queryCreateUsersTable)){
        echo "Table creation failed: (" . $conn->errno . ") " . $conn->error;
    }

    $password = "admin";
    $newhash = password_hash($password,PASSWORD_DEFAULT);

    // If ExampleTeacher data is not exist create one
	$queryAddExpTeacher = "INSERT IGNORE INTO users(UsrEmail, UsrPassword, UsrName, UsrType) VALUES
        ('admin@123', '$newhash' , 'Teacher01', '1')";

    

    if(!$conn->query($queryAddExpTeacher)){
        echo "Data Insert failed: (" . $conn->errno . ") " . $conn->error;
    }

    // Student
    $password = "123";
    $newhash = password_hash($password,PASSWORD_DEFAULT);

    // If ExampleTeacher data is not exist create one
	$queryAddExpStudent = "INSERT IGNORE INTO users(UsrEmail, UsrPassword, UsrName, UsrType) VALUES
        ('student@123', '$newhash' , 'Tan', '2')";

    

    if(!$conn->query($queryAddExpStudent)){
        echo "Data Insert failed: (" . $conn->errno . ") " . $conn->error;
    }


?>