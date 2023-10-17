<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
	<link rel="stylesheet" href="assets/CSS/sidebar.css">
	<link rel="stylesheet" href="assets/CSS/index.css">
<title>Home</title>
</head>

<body>
	<!-- =============== Navigation ================ -->
    <div class="containers">
        <?php include("sidebar.php")?>
        <!-- ========================= Main ==================== -->
        <div class="main">
			<div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>
			<br>
			<h2 class="Pagetitle"><b>Sales</b></h2>
			
			<div class="container">
				<br>
			<hr>
			<br>
			<table class="table">
			<thead>
			  <tr>
				<th>No</th>
				<th>Customer ID</th>
				<th>Payment ID</th>
				<th>Amount</th>
				<th>Date/Time</th>
				<th>Tools</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				
			  </tr>
			</tbody>
		  </table>
				</div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
