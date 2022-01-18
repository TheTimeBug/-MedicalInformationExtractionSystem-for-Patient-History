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

	<title>MIES/Doctor</title>
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
						<a class="nav-link" aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="doctor.php">Doctors</a>
					</li>
					
                   
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
                    <!-- Remove Doctor Home & Admin Home From Above -->

				
					

				</ul>
				<form class="d-flex">
                <li class="nav-item">
						<a  href="#" style="color: white; text-decoration:none;">Welcome
                        <?php
	                     session_start();
						 $sid = $_SESSION['username'];
					 
						 include('config.php');
					 
						 $query1 = mysqli_query($link,"select dName,dImage from doctordata where dId='$sid'");
						 $data = mysqli_fetch_array($query1);
						 echo  $data['dName'];
						 //echo $data['dImage'];
						 
	                    ?></a>
				</li>
    
					
					
				</form>
			</div>
		</div>
	</nav>


	<!--Bootstrap Navbar Done --><br><br>

	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: 30rem;">

					<div class="card-body">
						<h5 class="card-title">Doctor Portal</h5>
						<p class="card-text">"[Being a doctor] offers the most complete and constant union of those three qualities which
							 have the greatest charm for pure and active minds – novelty, utility, and charity."
						,     "[As a doctor] people will trust you, confide in you, and appreciate your efforts.  You can do amazing things for people if you don’t 
						let the system get you down."</p><br><br>

						<a href="view_all_apoinment.php" class="btn btn-info width-45">All Appointments</a>
						<a href="view_doctor_appointment.php" class="btn btn-success width-45">Todays Appointments</a>
						<a href="doc_time.php" class="btn btn-success width-45">Edit My Schedule</a>
						<a href="about_us.php" class="btn btn-info width-45">Contact With Admin</a>
						<a href="doctor_view.php?did=<?php echo $sid; ?>" class="btn btn-info width-45">Profile</a>
						<a href="doc_upt.php" class="btn btn-success width-45">Edit Profile</a>
						
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card" style="width: 25rem;">
					<img src="doctor_images/<?php echo $data['dImage'];?>" class="card-img-top" alt="online doctor">
					<div class="card-body">
						<h5 class="card-title"><?php echo $data['dName']; ?></h5>
						<p class="card-text">You meant to serve people do your best.<br> Be kind to the patients.</p>
						<a href="doctor.php" class="btn btn-primary">Others</a>
					</div>
				</div>
			</div>

		</div>
	</div>
	
	
	
	<br><br>
	


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