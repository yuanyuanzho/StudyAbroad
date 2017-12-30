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
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "studyabroad";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $fname = $_POST['firstName'];
                $lname = $_POST['lastName'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$fname', '$lname','$email','$password')";
                $sql2 = "SELECT email FROM users WHERE email = '$email' ";
                $result = $conn -> query($sql2);

            

                if ($conn->query($sql) === TRUE) {
                    echo '<img src="images/check.png">';
                    echo '<img src="images/congratulations.png">';
                    echo '<h4>Dear <span style="color: red">'. $fname.' '.$lname.'</span>, you sign up successfully!</h4>';
                    echo '<h4>Welcome to study abroad website!</h4>';
                    echo '<h4>Your user account is  <span style="color: red">'.$email.'</span>.</h4>';
                    echo '<h1>Begin enjoy your journey here!!!</h1>';
                    echo '<a href="index.html">Go to home page here >></a>';
                } else if($result > 0){
                    echo '<img src="images/sorry.png">';
                    echo "<h4 style='color : red'><b>User already exist! </b></h4>";
                    echo '<h4>If not a member, please <a href="signup.html"><i><samll>sign up here >> </small></i></a></h4>';
                
                }

                $conn->close();
            ?>



      
    </body>


    
</BODY>
</HTML>