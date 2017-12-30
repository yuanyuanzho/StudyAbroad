<?php
                // session_start();
                // $db = mysqli_connect("localhost","root", "", "login");

                // if(isset($_POST['submitBtn'])){
                //     $username = mysql_real_escape_string($_POST['userAccount']);
                //     $password = mysql_real_escape_string($_POST['password']);

                //     $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                //     $result = mysqli_query($db, $sql);

                //     if(mysqli_num_rows($result) == 1){
                //         $_SESSION['message'] = "welcome";
                //         $_SESSION['username'] = $username;
                //         header("location: login.php");
                //     }else{
                //         $_SESSION['message'] = "failed";
                //     }

                // }

                $userName = $_POST['userAccount'];
                $password = $_POST['password'];

                $userName = stripcslashes($userName);
                $password = stripcslashes($password);
                $userName = mysql_real_escape_string($userName);
                $password = mysql_real_escape_string($password);

                mysql_connect("localhost","root", "", "login");
                mysql_select_db("login");

                $result = mysql_query("select * from users where userName = '$userName' and password = '$password' ");
                                        // or die("Failed to query databse".mysql_error());
                $row = mysql_fetch_array($result);

                if($row['userName'] == $userName && $row['password'] == $password){
                    echo '<img src="images/check.png">';
                    echo '<img src="images/congratulations.png">';
                    echo '<h4>Dear <span style="color: red">'. $row['userName'].'</span></h4>';
                    echo '<h4>Welcome back!</h4>';
                    echo '<h1>Begin enjoy your journey here!!!</h1>';
                    echo '<a href="index.html">Go to home page here >></a>';
                    
                }else{
                    echo 'Fail to log in';
                }
?>