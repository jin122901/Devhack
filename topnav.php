<?php 
    session_start();

    if (isset($_SESSION['TcMail']) || isset($_SESSION['TcPass']) || isset($_SESSION['uMail']) || isset($_SESSION['uPass'])) {
        if (isset($_SESSION['TcMail']) && isset($_SESSION['TcPass'])) {
            $name = $_SESSION['TcName'];
            $email = $_SESSION['TcMail'];
        } elseif (isset($_SESSION['uMail']) && isset($_SESSION['uPass'])) {
            $name = $_SESSION['uName'];
            $email = $_SESSION['uMail'];
        }
    
        $sql_statement1 = "SELECT * FROM users WHERE UsrEmail='$email'";

        $execqry1 = mysqli_query($conn,$sql_statement1);
            
        while ($rowresult = mysqli_fetch_assoc($execqry1)){
            $photo=$rowresult['UsrImage'];
            $name2 = $rowresult['UsrName'];
        }

        if(empty($photo)){
            $image="assets/Images/user.png";
        }else{
            $image="data:image;base64,".$photo;
        }
    }   
?>

<div class="topbar">
    <ion-icon name="menu-outline" class="toggle"></ion-icon>
    <?php if (isset($_SESSION['TcMail']) && isset($_SESSION['TcPass']) || isset($_SESSION['uMail']) && isset($_SESSION['uPass'])) { ?>
        <img src="<?php echo $image ?>" alt="" class="user" id="user"/>
        <div class="user_submenu">
            <span class="submenu_item"><a href="../accPage.php"><ion-icon name="person-outline"></ion-icon> &emsp; Profile</a></span>
            <span class="submenu_item"><a href="../process_logout.php"><ion-icon name="log-out-outline"></ion-icon> &emsp; Logout</a></span>
        </div>
    <?php } else { ?>
        <img src="assets/Images/user.png" alt="" class="user" id="user"/>
        <div class="user_submenu">
            <a href="login.php"><span class="login_btn">Login with ID@AAS!</span></a>
        </div>
    <?php } ?>
</div>

