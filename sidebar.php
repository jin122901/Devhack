<div class="navigation active">
    <ul>
        <?php if (isset($_SESSION['TcMail']) && isset($_SESSION['TcPass']) || isset($_SESSION['uMail']) && isset($_SESSION['uPass'])) { ?>
            <li>
                <a href="">
                    <span class="icon">
                        <img src="../assets/Images/logo.png" alt="Logo" width="50" height="50">
                    </span>
                    <h4 class="navigation_title">AlwaysAStudent!</h4>
                </a>
                <hr>
            </li>
            <li>
            <a href="../index.php" >
                <span class="icon" >
                    <i class='bx bx-home-alt-2'></i>
                </span>
                <span class="title">Home</span>
            </a>
        </li>

        <li>
            <a href="dashboard.php" >
                <span class="icon" >
                    <i class='bx bx-grid-alt'></i>
                </span>
                <span class="title">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="course.php">
                <span class="icon">
                    <ion-icon name="cube-outline" ></ion-icon>
                </span>
                <span class="title">Course</span>
            </a>
        </li>
        <?php } else { ?>
        <li>
            <a href="">
                <span class="icon">
                    <img src="assets/Images/logo.png" alt="Logo" width="50" height="50">
                </span>
                <h4 class="navigation_title">AlwaysAStudent!</h4>
            </a>
            <hr>
        </li>
        <?php } ?>
    </ul>
</div>

