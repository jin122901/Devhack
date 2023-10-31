<!doctype html>
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
    <link rel="stylesheet" href="assets/CSS/slideshow.css">
    <link rel="stylesheet" href="assets/CSS/footer.css">
<title>Communication</title>
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
            <h2 class="Pagetitle"><b>Communication</b></h2>
            <div class="container">
                <br>
                <hr>
                <br>
                <div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <table class="table table-bordered mx-auto">
                <thead>
                    <tr>
                        <th>Sender</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                        <tr>
                            <td>User <?php echo $i; ?></td>
                            <td>This is the content of the message from User <?php echo $i; ?></td>
                            <td>
                                <!-- Button to reply to the message -->
                                <button class="btn btn-primary" data-toggle="modal" data-target="#replyModal<?php echo $i; ?>">Reply</button>
                            </td>
                        </tr>

                        <!-- Modal for replying to the message -->
                        <div class="modal fade" id="replyModal<?php echo $i; ?>" tabindex="-1" aria-labelledby="replyModalLabel<?php echo $i; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="replyModalLabel<?php echo $i; ?>">Reply to Message from User <?php echo $i; ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Your reply form goes here -->
                                        <form>
                                            <div class="form-group">
                                                <label for="replyContent">Your Reply</label>
                                                <textarea class="form-control" id="replyContent" name="replyContent" rows="3" required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Send Reply</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
	<script src="assets/js/main.js"></script>
</body>
</html>