<!DOCTYPE html>
<html>

<head>
    <?php require('include/dbconn.php'); ?>
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
    <link rel="stylesheet" href="assets/CSS/aboutus.css">
    <title>AlwaysAStudents! - Your Learning Partner</title>
    <link rel="icon" href="assets/Images/logo.ico" />
</head>

<body>
    <div class="containers">
        <?php 
            session_start();
            if (isset($_SESSION['TcMail']) && isset($_SESSION['TcPass'])) {
                include("Teacher/teacher_sidebar_session.php");
            } elseif (isset($_SESSION['uMail']) && isset($_SESSION['uPass'])) {
                include("Student/student_sidebar_session.php");
            } else {
                include("sidebar.php");
            }

        ?>
        <div class="main active">
            
            <?php 
                if (isset($_SESSION['TcMail']) && isset($_SESSION['TcPass'])) {
                    include("Teacher/teacher_topnav_session.php");
                } elseif (isset($_SESSION['uMail']) && isset($_SESSION['uPass'])) {
                    include("Student/student_topnav_session.php");
                } else {
                    include ("topnav.php");
                }
                
             ?>

            <div class="slideshow">
                <div class="mySlides">
                    <p class="slidetitle">AlwaysAStudents!</p>
                    <p class="slidedesc">Your Learning Partner</p>
                    <img src="assets/Images/mainbg.png" alt="">
                </div>
            </div>

            <br>
            <h2 class="Pagetitle zoomeffect"><b>About Us</b></h2>       
            <br>
            <!-- <div class="container"> -->
                <div class="aboutus zoomeffect">
                    <div class="row">
                        <div class="col-md-3">
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
                        
                        <div class="col-md-3">    
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

                        <div class="col-md-3">
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
                        
                        <div class="col-md-3">
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
                    </div>
                    <br>
                </div>  
            <!-- </div> -->
            <br>
            
            <!-- Goal Section -->
            <div class="goal zoomeffect">
                <div class="container">
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

            <!-- Student Suggestion Section -->
            <div class="container zoomeffect">
                <br>
                <h2 class="Pagetitle"><b>Student Recommendation</b></h2>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <!-- <img src="assets/Images/courseimgae.png" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title">#Person 1</h5>
                                <p class="card-text">
                                    <p>This course is a gem! Engaging content and fantastic support from the instructor.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">    
                        <div class="card">
                            <!-- <img src="assets/Images/courseimgae.png" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title">#Person 2</h5>
                                <p class="card-text">
                                    <p>Loved the interactive lessons and real-world applications. Highly recommended.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card">
                            <!-- <img src="assets/Images/courseimgae.png" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title">#Person 3</h5>
                                <p class="card-text">
                                    <p>Impressive. I gained skills that immediately boosted my career.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <a class="scroll_to_top" href="#"><ion-icon name="caret-up-outline"></ion-icon></a>

            <!-- Footer Area -->
            <br>
            <br>
            <?php include "footer.php" ?>
    </div>

    <!-- Scripts should be included after the content -->
    <script src="assets/js/main.js"></script>
</body>

</html>