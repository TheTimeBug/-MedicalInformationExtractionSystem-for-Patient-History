<?php
	session_start();
	$sid = $_SESSION['username'];
					
	include('config.php');
					
	$query1 = mysqli_query($link,"select * from patientdata where pId='$sid'");
	$data = mysqli_fetch_array($query1);
?>



<!doctype html>
<html>

<head>

	<link rel="stylesheet" type="text/css" href="main.css">  
	<link rel="shortcut icon" type="image/png" href="images/favicon.jpg">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<script type="text/javascript" src="js/divition.js">
	</script>

	<title>MIES</title>
</head>

<body>
	<!--Bootstrap Navbar Start -->
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">MIES</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
			data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="patientHome.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="doctor.php">Doctors</a>
				</li>

				
				
			</li>
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
			</li>
			<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Appointment</a>
					</li>

		</ul>
		<form class="d-flex">
			<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success" type="submit">Search</button>
			<!--Search functionaliy is now optional we will think about it letter -->
		</form>
	</div>
</div>
</nav>

<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<div class="card" style="width: 20rem;">
				<img src="images/unnamed.jpg" class="card-img-top" alt="online doctor">
				<div class="card-body">
					<h5 class="card-title">Make your Appointment</h5>
					<p class="card-text">Check your infromation if right then.<br>Click Next Page
					.</p>
					<a href="appointment.php" class="btn btn-success">Make an Appointment</a>
				</div>
			</div>
		</div>
		<div class="col-sm">
			<div class="card" style="width: 45rem; background-color: #11C8EF;">
				
				<div class="card-body"><!-- main form-->
					<form class="row g-3" method="POST" action="appointment_2.php">
						<div class="col-md-12">
							<label for="id" class="form-label">Patient Id</label>
							<text style="background: #E5E8E8;" type="text" class="form-control" id="id" name="id"><?php echo  $data['pId']; ?></text>
						</div>
						<div class="col-md-6">
							<label for="fname" class="form-label">First Name</label>
							<text style="background: #E5E8E8;" type="text" class="form-control" id="fname" name="fname" ><?php echo  $data['pFirstName']; ?></text>
						</div>
						<div class="col-md-6">
							<label for="lname" class="form-label">Last Name</label>
							<text style="background: #E5E8E8;" type="text" class="form-control" id="lname" name="lname"><?php echo  $data['pLastName']; ?></text>
						</div>

						<div class="col-md-6">
							<label for="divition" class="form-label">Division</label>
							<select class="form-select" name="divition" id="divition" onchange="trigger('divition','district')">
								<option selected disabled>Choose...</option>
								
								<option value="Dhaka">Dhaka</option>
								<option value="Khulna">Khulna</option>
								<option value="Barishal">Barishal</option>
								<option value="Mymensingh">Mymensingh</option>
								<option value="Rajshahi">Rajshahi</option>
								<option value="Rangpur">Rangpur</option>
								<option value="Sylhet">Sylhet</option>
								<option value="Chittagong">Chittagong</option>
							</select>
						</div>
						<div class="col-md-6">
							
							<label for="district" class="form-label">District</label>
							<select id="district" name="district" class="form-select">
								<option selected disabled>Choose...</option>
							</select>
						</div>
						
						
						<div class="col-md-6">
							<label for="email" class="form-label">Email</label>
							<text style="background: #E5E8E8;" type="email" class="form-control" id="email" name="email" ><?php echo  $data['pEmail']; ?></text>
						</div>
						<div class="col-md-6">
							<label for="phone" class="form-label">Phone</label>
							<text style="background: #E5E8E8;" type="text" class="form-control" id="phone" name="phone"> <?php echo  $data['pPhoneNo']; ?></text>
						</div>
						
						<div class="col-md-12">
							<label for="desise" class="form-label">Common Desise</label>
							<text style="background: #E5E8E8;" type="text" class="form-control" id="desise" name="desise"><?php echo  $data['pCmDisease']; ?></text>
						</div>
						<div class="col-md-12">
						<label for="ds1" class="form-label">Disease</label>
											<select id="ds1" name="disease" class="form-select">
												<option selected disabled>Chose . . </option>
												<option>General</option>
												<option>Woman</option>
												<option>Child</option>
												<option>Dental</option>
												<option>Nuroscience</option>
												<option>Sexologiest</option>
												<option>Arthopedix</option>
												<option>Sycratist</option>
												<option>Gynocologiest</option>
											</select>
						</div>
						<div class="col-12" align="right">
							<button type="submit" class="btn btn-primary">Next</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
	</div>
</div><br><br><br>


<!-- footer -->
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
								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
								value="option1" checked>
								<label class="form-check-label" for="gridRadios1">
									Satisfactory
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
								value="option2">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>

</body>
</html>