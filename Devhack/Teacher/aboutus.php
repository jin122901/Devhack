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
    <link rel="stylesheet" href="assets/CSS/aboutus.css">
    <link rel="stylesheet" href="assets/CSS/slideshow.css">
    <title>About Us - AlwaysAStudent!</title>
</head>

<body>
    <div class="containers">
        <?php include("sidebar.php")?>
        <div class="main active">
            <?php include "topnav.php" ?>
            
            <div class="slideshow">
                <div class="mySlides">
                    <p class="slidetitle">About Us</p>
                    <p class="slidedesc">Who we are and what motivates us</p>
                    <img src="assets/Images/aboutusbg.jpg" alt="">
                </div>
            </div>
            <br>
            <div class="container">
                <br>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="assets/Images/ourstory.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Our Story</h5>
                                        <p class="card-text">
                                            <br>
                                            <br>
                                        </p>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <p>Our journey began with a simple belief: Learning should be an adventure, not a chore. We wanted to bridge the gap between traditional education 
                                    and the limitless possibilities of the digital age. So, we set out to create a platform that's as engaging as your favorite video game, as 
                                    informative as your favorite book, and as interactive as your best classroom experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">    
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                <img src="assets/Images/ourvision.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Our Vision</h5>
                                        <p class="card-text">
                                            <br>
                                        </p>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <p>We envision a world where learning is not confined to four walls, where anyone, anywhere can unlock their full potential. Our vision is to 
                                    make education accessible, fun, and tailored to each learner's unique style. We're here to revolutionize the way you think about learning.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                <img src="assets/Images/meetourteam.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Meet Our Team </h5>
                                        <p class="card-text">
                                            <br>
                                        </p>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <p>We're a quirky mix of educators, tech geeks, designers, and storytellers. Our team is passionate about empowering you to thrive in the digital age. 
                                        We work tirelessly to create, innovate, and support your educational journey every step of the way.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                <img src="assets/Images/ourpromise.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Our Promise</h5>
                                        <p class="card-text">
                                            <br>
                                        </p>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <p>At AlwaysAStudent, we promise to always put your learning experience first. We promise to provide you with the most up-to-date, engaging, and inspiring educational resources. 
                                    And we promise to be your partners in the quest for knowledge.</p>
                                    
                                    <p>Join us in this exciting journey, where textbooks are replaced with interactive lessons, where curiosity is celebrated, and where your dreams are the only limit.
                                    Let's revolutionize learning together. Welcome to the future of education!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <br>
                <br>
            </div>
            <br>
            
            <!-- Goal Section -->
            <div class="hidden">
                <div class="container">
                    <hr>
                    <br>
                    <h2 class="Pagetitle"><b>Our Goal</b></h2>
                    <div class="column_goal">  
                        <div class="goal-col">
                            <div class="goal_col1">
                                <br>
                                <img src="assets/Images/goal1.png" class="card-img-top" alt="...">
                                <br>
                                <br>
                                <h4>Lifelong Learning</h4>
                                <p>Support continuous learning throughout one's life.</p>
                            </div>

                            <div class="goal_col2">
                                <br>
                                <img src="assets/Images/goal2.png" class="card-img-top" alt="...">
                                <br>
                                <br>
                                <h4>Personalized Learning</h4>
                                <p>Tailor educational experiences to individual student needs and preferences</p>
                            </div>

                            <div class="goal_col3">
                                <br>
                                <img src="assets/Images/goal3.png" class="card-img-top" alt="...">
                                <br>
                                <br>
                                <h4>Accessible Education</h4>
                                <p>Make education more accessible to learners, regardless of location or background</p>
                            </div>
                        </div>
                        
                    </div>
            </div>
        </div>
    </div>

    <!-- Scripts should be included after the content -->
    <script src="assets/js/main.js"></script>
</body>

</html>
