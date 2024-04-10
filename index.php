<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
	header
{
	height: 130px;
	width: 1240px;
	background-color: black;
	padding: 10px;
}
.box
{
	height: 392px;
	width: 450px;
	background-color: #030002;
	margin: 0px ;
	opacity: .8;
	color: white;
}
section .sec_img
{
	
	background-image: url("images/100.jpg");
	background-position: center;
   background-repeat: no-repeat;
   background-size: 100%;
    height: 636px;
    width: 1260px;
}

</style>
</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="images/9.png">
			<h1 style="color: white;">LIBRARY MANAGEMENT SYSTEM</h1>
		</div>

		<?php
		if(isset($_SESSION['login_user']))
		{
			?>
				<nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="books.php">BOOKS</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
						<li><a href="feedback.php">FEEDBACK</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
						<nav>
							<ul>
								<li><a href="index.php">HOME</a></li>
								<li><a href="books.php">BOOKS</a></li>
								<li><a href="login.php">LOGIN</a></li>
								<li><a href="registration.php">SIGN-UP</a></li>
								<li><a href="feedback.php">FEEDBACK</a></li>
							</ul>
						</nav>
		<?php
		}
			
		?>

			
		</header>
		<section>
		<div class="sec_img">
			<br><br>
			<div class="box">
				<br>
				<h1 style="text-align: center; font-size: 35px;">Welcome to library</h1><hr>
				<h1 style="text-align: center;font-size: 25px;"> Opens at: 08:00 AM</h1><br>
				<h1 style="text-align: center;font-size: 25px;"> Closes at: 05:00 PM</h1><br>
				<h1 style="text-align: center;font-size: 25px;"> Full Furnitured</h1><br>
				<h1 style="text-align: center;font-size: 25px;"> Peaceful Environment</h1><br>
				<h1 style="text-align: center;font-size: 25px;"> Free WiFi</h1><br>
				<h1 style="text-align: center;font-size: 25px;"> Air Conditioned</h1><br>
				<h1 style="text-align: center;font-size: 25px;"> RO Water</h1><br>
			</div>
		</div>
		</section>
		

	</div>
	<?php  

		include "footer.php";
	?>
</body>
</html>