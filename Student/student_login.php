<?php
    include "navbar.php";
?>    

<!DOCTYPE html>
<html lang="en">

<head>

    <title>student login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

     <style type="text/css">
        section
        {
            margin-top: -30px;
        }
        .log_img
        {
	         height: 725px;
	         margin-top: 0px;
	         background-image: url("images/90.jpg");
        }
     </style>

</head>


<body>
<!--
    <nav class="navbar navbar-inverse">
       <div class="container-fluid">
        <div class="navbar-header">

            <h1 class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
        </div><br>

        <ul class="nav navbar-nav">
            <li>
                <a href="index.php"> HOME </a>
            </li>
            <li>
                <a href="book.php"> BOOKS </a>
            </li>
            
            <li>
                <a href="feedback.php"> FEEDBACK </a>
            </li>
        </ul>
        <ul class="nav navbar-nav nav-right">
               <li> <a href="student_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a>
            </li>
            <li> <a href="student_login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a>
            </li>
            <li>
                <a href="registration.php"><span class="glyphicon glyphicon-log-user"> SIGN UP</span></a>
            </li></ul>
    </div>
    </nav>
-->
    <section>
        <div class="log_img">
            <br>
            <div class="box1">

                <h1 style="text-align: center; font-size: 35px;">Library Management System</h1>
                <h1 style="text-align: center;font-size: 25px;">Student Login Form</h1><br>
                <form name="login" action="" method="">

                    <div class="login">
                        <input class="form-control" type="text" onkeydown="return /[a-zA-Z]/i.test(event.key)" name="username" placeholder="Username" required=""><br>
                        <input class="form-control" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" placeholder="Password"
                            required=""><br>
                        <input class="btn-default" type="submit" name="submit" value="Login"
                            style="color: rgb(19, 18, 18); width:70px; height: 30px;">
                    </div>

                    <p style="color: rgb(252, 250, 250); padding-left: 15px;">
                        <br><br>
                        <a style="color: rgb(250, 248, 248);" href="">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp
                        &nbsp
                        New to this website?<a style="color: rgb(244, 239, 239);" href="registration.html">Sign Up</a>
                    </p>
                </form>
            </div>
        </div>
    </section>
</body>

</html>