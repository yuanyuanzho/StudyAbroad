<!DOCTYPE html public "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
    <head>
        <title>Study Abroad</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link href="main.css" rel="stylesheet">
    </head>        
        
    <body id="myPage">
        <nav class="navbar navbar-inverse navbar-fixed-top" id="nav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbra">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#myPage">Study Abroad</a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbra">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="leaderboard.html">Leaderboard</a></li>
                        <li><a href="course.html">Course</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user" ></span> SignUp</a></li>
                        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">   
            <?php
                $host = "localhost";
                $user = "root";
                $pass = "root";
                $db = "studyabroad";

                // Create connection
                $conn = new mysqli($host, $user, $pass, $db);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $username = $_POST['username'];
                $password = $_POST['password'];
                                
                $sql = "SELECT * FROM users WHERE email = '$username' AND password = '$password' LIMIT 1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<img src="images/check.png">';
                        echo '<img src="images/congratulations.png">';
                        echo '<h4>Welcome to study abroad website!</h4>';
                        echo '<h4>Dear <span style="color: red">'. $username.'</span></h4>';
                        echo '<h4>Welcome back!</h4>';
                        echo '<h1>Begin enjoy your journey here!!!</h1>';
                        echo '<a href="index.html">Go to home page here >></a>';
                    }
                } else {        
                    echo '<img src="images/sorry.png">';
                    echo "<h4 style='color : red'><b>User name and password didn't match! </b></h4>";
                    echo '<h4>If not a member, please <a href="signup.html"><i>sign up here >></i></a></h4>';
                }
                $conn->close();
                
            ?>
        </div>
    </body>
    <footer class="text-center"> 
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <div class="row">
            <div class="col-md-4">
                <h4>ABOUT US</h4>
                <P style="text-align:left; color:#437772">Our purpose is to help everyone who want to study abroad! Contant us now!</P>
                
                <div class="contact-info">
                    <ul>
                        <li><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Huntington Avenue, Boston, MA, USA </li>
                        <li><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;&nbsp;+1(800)-129-9003</li>
                        <li><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;study@abroad.com</li>
                    </ul>
                </div>
            </div>
            

            <div class="col-md-4">
                <h4>PHOTO GALLERY</h4>
                <ul class="sidebar-gallery">
                    <li><a href="#"><img src="images/gallery1.png" alt="gallery1" /></a></li>
                    <li><a href="#"><img src="images/gallery2.png" alt="gallery2" /></a></li>
                    <li><a href="#"><img src="images/gallery3.png" alt="gallery3" /></a></li>
                    <li><a href="#"><img src="images/gallery4.png" alt="gallery4" /></a></li>
                    <li><a href="#"><img src="images/gallery5.png" alt="gallery5" /></a></li>
                    <li><a href="#"><img src="images/gallery6.png" alt="gallery6" /></a></li>					
                </ul>
            </div>

            <div class="col-md-4">
                <h4>NEWSLETTER REGISTRATION</h4>
                <p style="text-align: left; color:#437772">Subscribe today to receive the latest news via email. 
                You may unsubscribe from this service at any time.</p>
                <form class="form-inline">
                    <div class="form-group">		
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter your Email...">
                    </div>
                    <button type="submit" class="btn btn-default">Subscribe</button>
                </form>
            </div>
        </div>
        
        <p>&copy;StudyAbroad</p>    
        <nav class="socialmediaicons">
            <p id="icons" class="socialmediaicons"></p>
	    </nav>
    </footer>
</html>