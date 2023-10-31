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
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="assets/CSS/sidebar.css">
    <link rel="stylesheet" href="assets/CSS/index.css">
    <link rel="stylesheet" href="assets/CSS/slideshow.css">
    <link rel="stylesheet" href="assets/CSS/footer.css">
    <title>Performance</title>
</head>

<body>
    <div class="containers">
        <?php include("teacher_sidebar.php") ?>
        <div class="main active">
            <?php include "topnav.php" ?>

            <div class="slideshow">
                <div class="mySlides">
                    <img src="assets/Images/mainbg.png" alt="">
                </div>
            </div>

            <br>
            <h2 class="Pagetitle"><b>Performance</b></h2>
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
                                        <br>
                                        <br>
                                        <!-- Add a button to open the modal with data-toggle and data-target attributes -->
                                        <button class="btn btn-primary mx-auto d-block" type="button" data-toggle="modal" data-target="#courseUploadModal">Statistics</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="courseUploadModal" tabindex="-1" aria-labelledby="courseUploadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="courseUploadModalLabel">Course Data</h5>
                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="">
                        <div class="col-md-4">
                            <h4>Donut Chart: Students' Progress</h4>
							
                            <div class="mx-auto d-block" > <!-- Add this container -->
                                <canvas id="donutChart"></canvas>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script>
	// Chart data
var donutData = {
    labels: ["Passed", "In Progress", "Inactive"],
    datasets: [
        {
            data: [40, 30, 30],
            backgroundColor: ["#36A2EB", "#FFCE56", "#FF6384"],
        },
    ],
};

var donutOptions = {
    responsive: true,
    legend: {
        display: true,
        position: 'right', // You can adjust the position as needed
    },
};

// Create the donut chart
var donutChart = new Chart(document.getElementById("donutChart"), {
    type: "doughnut",
    data: donutData,
    options: donutOptions,
});
	</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



    <!-- Scripts should be included after the content -->
    <script src="assets/js/main.js"></script>
</body>

</html>