<!doctype html>
<html>
<?php
session_start();
$_SESSION['wrong'] = 0;
$_SESSION['username']= 0;

?>

<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="shortcut icon" type="image/png" href="images/mainicon.png">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<style>
		.text {
			position: absolute;
			top: 40%;
			left: 8%;
			color: white;


		}
	</style>
	<title>MIES</title>
</head>

<body>


	<div class="text">
		<b>
			<h1>Welcome to MIES</h1>
		</b><br><br>
		<h3>Have an Access to a Health Professional at any time.</h3>
		<b>
			<h3>Personal Care for your Healthy Living.</h3>
		</b><br><br>
		<a href="login_patient.php" class="btn btn-success">Make an Appointment</a>

	</div>




	<!--Bootstrap Navbar Start -->
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">MIES</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="doctor.php">Doctors</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Login
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="login_doctor.php">As Doctor</a></li>
							<li><a class="dropdown-item" href="login_patient.php">As Patient</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="login_admin.php">As Admin</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Sign Up
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="signup_patient.php">As Patient</a></li>
							<li><a class="dropdown-item" href="setup_doctor.php">As Doctor</a></li>

						</ul>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="about_us.php">About Us</a>
					</li>
					<!-- Remove Doctor Home & Admin Home From Above -->

				</ul>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Non functional" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
					<!--Search functionaliy is now optional we will think about it letter -->
				</form>
			</div>
		</div>
	</nav>


	<!--Bootstrap Navbar Done -->

	<center><img src="images/img_bg_6.jpg" alt=background" width="100%" height="90%"></center>
	<div class="alert alert-warning alert-dismissible fade show full-width-row" role="alert">
		<strong>Login to our system!</strong> And enjoy our services.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: 30rem;">

					<div class="card-body height-650">
						<h5 class="card-title">About Us</h5>
						<p class="card-text">A web application that will contain the medical history
							data of every patient for hospitals, doctors or patients can access data
							form anywhere-anytime. Easy and User-friendly data input methods for
							users will be available to help enrich the database as easily as possible.
							Making the process of reading medical reports and prescriptions and making
							the process if entering those data into the database.</p><br><br>

						<a href="#" class="btn btn-info full-width">Call: +8801718228277</a>
						<a href="about_us.php" class="btn btn-primary full-width">More About Us</a>
				
						<a href="ud.php" class="btn btn-dark full-width">Track Your Health</a>
						<a href="login_patient.php" class="btn btn-success full-width">Make an Appointment</a>
					
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card height-650" style="width: 25rem;">
					<img src="images/staff-1.jpg" class="card-img-top padding-10" alt="online doctor">
					<div class="card-body">
						<h5 class="card-title">Dr.Elizabed Olsen</h5>
						<p class="card-text">She is always available for our patients.<br>You can contact with her
							online.</p>
						<p>Call: +8801722882277</p>
						<a href="doctor.php" class="btn btn-primary">Contact Others</a>
					</div>
				</div>
			</div>

		</div>
	</div><br>
	<!-- About us section done -->
	<br>
	<center>
		<h2><b>Our Services</b></h2>
	</center>
	<br>
	<!-- Services  section here -->
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: 18rem;">
					<img src="images/blog-3.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Qualified Doctors</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of
							the card's content.</p>
						<a href="doctor.php" class="btn btn-primary">Open</a>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card" style="width: 18rem;">
					<img src="images/blog-2.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Smart Health Tracking</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of
							the card's content.</p>
						<a href="ud.php" class="btn btn-primary">Open</a>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card" style="width: 18rem;">
					<img src="images/blog-1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Blood Bank</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of
							the card's content.</p>
						<a href="ud.php" class="btn btn-primary">Open</a>
					</div>
				</div>
			</div>

		</div>
	</div><br><br>

	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: 18rem;">
					<img src="images/blog-4.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Artifical Recomendation</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of
							the card's content.</p>
						<a href="ud.php" class="btn btn-primary">Open</a>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card" style="width: 18rem;">
					<img src="images/blog-5.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Medical Consultatoin</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of
							the card's content.</p>
						<a href="ud.php" class="btn btn-primary">Open</a>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card" style="width: 18rem;">
					<img src="images/blog-6.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Digital Appointment</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of
							the card's content.</p>
						<a href="login_patient.php" class="btn btn-primary">Open</a>
					</div>
				</div>
			</div>

		</div><br><br>
	</div>


	<div class="footer"><br>
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<b>MIES</b> <br>A web application that will contain the medical history data of every patient for
					hospitals,
					doctors or patients can access data form anywhere-anytime
				</div>
				<div class="col-sm">
					<b>Navigation</b><br>
					<ul>
						<li>Doctors</li>
						<li>Appointments</li>
						<li>Contact</li>
						<li>Helth Blogs</li>
						<li>Logins</li>
					</ul>
				</div>
				<div class="col-sm">
					<b>Services</b><br>
					<ul>
						<li>Smart Health Tracking</li>
						<li>Medical Consultation</li>
						<li>Blood Bank</li>
						<li>Artifical Recomendation</li>
						<li>Digital Appointment</li>
					</ul>
				</div>
				<div class="col-sm">
					<b>Send Us Feedback</b><br>
					<form action="#">
						<div class="row mb-3">
							<label for="f_name" class="col-sm-2 col-form-label">Name</label>
							<div class="col-sm-10">
								<input type="text" name="f_name" class="form-control" id="f_name">
							</div>
						</div>
						<div class="row mb-3">
							<label for="f_email" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="f_email">
							</div>
						</div>
						<fieldset class="row mb-3">
							<legend class="col-form-label col-sm-2 pt-0">Rate</legend>
							<div class="col-sm-10">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
									<label class="form-check-label" for="gridRadios1">
										Satisfactory
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
									<label class="form-check-label" for="gridRadios2">
										Good / Excellent
									</label>
								</div>

							</div>
						</fieldset>

						<button type="submit" class="btn btn-primary">Send</button>
					</form>
				</div>
			</div>
		</div>
		<br>
		<div style="background-color: black;">
			<br>
			<center>
				<p><b>Last Modified Time: 10.00 PM, 27 March 2021</b></p>
			</center><br>
			<center>
				<p>All rights reserved to antFarm</p>
			</center><br>
		</div>

	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
	</script>


</body>

</html>