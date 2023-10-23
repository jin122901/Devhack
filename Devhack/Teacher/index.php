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
	<link rel="stylesheet" href="assets/CSS/sidebar.css">
	<link rel="stylesheet" href="assets/CSS/index.css">
    <title>Home</title>
</head>

<body>
    <div class="containers">
        <?php include("sidebar.php")?>
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="user">
                    <img src="assets/Images/user.png" alt="" />
                </div>
            </div>
            <br>
            <h2 class="Pagetitle"><b>Welcome To AlwaysAStudents!</b></h2>
            <div class="container">
                <br>
                <hr>
                <br>
                <div class="row">
                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="assets/Images/courseimgae.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Course Name <?php echo $i; ?></h5>
                                    <p class="card-text">
                                        <i class="fa fa-star checked">Description..</i>
                                        <br>
                                        <br>
                                        <!-- Add a button to open the modal with data-toggle and data-target attributes -->
                                        <button class="btn btn-primary mx-auto d-block" type="button" data-toggle="modal" data-target="#enrolModal">Enrol</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="enrolModal" tabindex="-1" aria-labelledby="enrolModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enrolModalLabel">Enrolment Form</h5>
                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close"><i class='bx bx-x'></i></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <img src="assets/Images/courseimgae.png" class="card-img-top" alt="...">
							<br><br>
							<h5>Title</h5>
                        </div>
                        <div class="mb-3">
                            <p>Description....</p>
                        </div>
                        <div class="mb-3">
                            <p>Price</p>
                        </div>
                        <div style="text-align:center" >
                            <button type="submit" class="btn btn-primary">Buy Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts should be included after the content -->
    <script src="assets/js/main.js"></script>
</body>

</html>
