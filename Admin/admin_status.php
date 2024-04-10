<?php

include "navbar.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Approve Request</title>
	<style type="text/css">
		.srch {
			padding-left: 850px;
		}

		body {
			font-family: "Lato", sans-serif;
			transition: background-color .5s;
		}

		
		
		

		.img-circle {
			margin-left: 20px;
		}

		.h:hover {
			color: white;
			width: 300px;
			height: 50px;
			background-color: #00544c;
		}
	</style>
</head>

<body>
	

		<!--__________________________search bar________________________-->
		<div class="container">
			<h2 style="float:left;">Search one username at a time to approve the request.</h2>
			<div style="float:right;" class="srch">
				<form class="navbar-form" method="post" name="form1">

					<input class="form-control" type="text" name="search" onkeydown="return /[a-zA-Z]/i.test(event.key)" placeholder="Student username.." required="">
					<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</form>
			</div>

			<br>
			<h2>New Requests</h2>
			<?php

			if (isset($_POST['submit'])) {
				$q = mysqli_query($db, "SELECT first,last,username,email,contact FROM `admin` where username like '%$_POST[search]%' OR first like '%$_POST[search]%' OR last like '%$_POST[search]%' and status='' ");

				if (mysqli_num_rows($q) == 0) {
					echo "Sorry! No new request found with that username. Try searching again.";
				} else {
					echo "<table class='table table-bordered table-hover' >";
					echo "<tr style='background-color: #6db6b9e6;'>";
					//Table header
					echo "<th>";
					echo "First Name";
					echo "</th>";
					echo "<th>";
					echo "Last Name";
					echo "</th>";
					echo "<th>";
					echo "Username";
					echo "</th>";

					echo "<th>";
					echo "Email";
					echo "</th>";
					echo "<th>";
					echo "Contact";
					echo "</th>";

					echo "</tr>";

					while ($row = mysqli_fetch_assoc($q)) {
						echo "<tr>";
						echo "<td>";
						echo $row['first'];
						echo "</td>";
						echo "<td>";
						echo $row['last'];
						echo "</td>";
						echo "<td>";
						echo $row['username'];
						echo "</td>";

						echo "<td>";
						echo $row['email'];
						echo "</td>";
						echo "<td>";
						echo $row['contact'];
						echo "</td>";

						echo "</tr>";
					}
					echo "</table>";
				
				
				?>
				<form method="post">
					<button type="submit" name="submit1" style="background-color: #101010ed; color:red; font-weight: 700; font-size: 18px;" class="btn btn-default"><span style="color:red" class="glyphicon glyphicon-remove-sign"></span>&nbsp Remove </button>
					<button type="submit" name="submit2" style="background-color: #101010ed; color:green; font-weight: 700; font-size: 18px;" class="btn btn-default"><span style="color:green" class="glyphicon glyphicon-ok-sign"></span>&nbsp Approve </button>
				</form>
			<?php
			
		}	
			}
			/*if button is not pressed.*/ else {
				$res = mysqli_query($db, "SELECT first,last,username,email,contact FROM `admin` where status='' ;");

				echo "<table class='table table-bordered table-hover' >";
				echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>";
				echo "First Name";
				echo "</th>";
				echo "<th>";
				echo "Last Name";
				echo "</th>";
				echo "<th>";
				echo "Username";
				echo "</th>";

				echo "<th>";
				echo "Email";
				echo "</th>";
				echo "<th>";
				echo "Contact";
				echo "</th>";
				echo "</tr>";

				while ($row = mysqli_fetch_assoc($res)) {
					$_SESSION['text_name'] = $row['username'];

					echo "<tr>";

					echo "<td>";
					echo $row['first'];
					echo "</td>";
					echo "<td>";
					echo $row['last'];
					echo "</td>";
					echo "<td>";
					echo $row['username'];
					echo "</td>";

					echo "<td>";
					echo $row['email'];
					echo "</td>";
					echo "<td>";
					echo $row['contact'];
					echo "</td>";

					echo "</tr>";
				}
				echo "</table>";
			
				
			}
			if (isset($_POST['submit1'])) {
				mysqli_query($db, "DELETE form admin where username='$_SESSION[text_name]' and status='';");
				unset($_SESSION['text_name']);
			}
			if (isset($_POST['submit2'])) {
				mysqli_query($db, "UPDATE admin set status='yes' where username='$_SESSION[text_name]';");
				unset($_SESSION['text_name']);
			}
			

			?>
			
			
		</div>

</body>

</html>