<?php
    session_start();
    session_destroy();
	echo "<script>alert('Successfully Logout...');document.location='index.php'</script>";
?>