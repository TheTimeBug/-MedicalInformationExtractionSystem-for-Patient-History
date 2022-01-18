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
					<a class="nav-link" aria-current="page" href="admin_home.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="doctor.php">Doctors</a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
					data-bs-toggle="dropdown" aria-expanded="false">
					Admin Panel
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="doctor_panel.php">Doctor Management</a></li>
					<li><a class="dropdown-item" href="overview.php">Over View</a></li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li><a class="dropdown-item" href="patients.php">All Patients</a></li>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout.php">Sign Out</a>
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

<br><br>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<div class="card" style="width: 25rem;">
				<img src="images/p1.jpg" class="card-img-top" alt="online doctor">
				<div class="card-body">
					<h5 class="card-title">Admin</h5>
					<a href="ad_patient_apoinment.php" class="btn btn-info">Patient Appointments</a>
					<a href="ud.php" class="btn btn-success">View Reports</a><br><br>
					<a href="ud.php" class="btn btn-danger">Delete Patient Info</a><br><br>
					
					
				</div>
			</div>
			
		</div>

		
		<div class="col-sm">
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Search Patient by Id!</strong>. Then View his/her info.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<div class="card" style="width: 45rem; background-color:#E5E4E2">
				<div class="card-body">
					<form class="d-flex" method="POST" action="#">
						<input class="form-control me-2" type="search" name="sid" placeholder="Enter Id" aria-label="Search">
						<button class="btn btn-outline-success" type="submit" name="search">Search</button>
						<!--Search functionaliy is now optional we will think about it letter -->
					</form>
				</div>
				<?php
				if(isset($_POST['search'])){
					include('config.php');
					$sid = $_POST['sid'];
					$sql = "select * from patientdata where pId = '$sid'";
					$query2 = mysqli_query($link,$sql);
					$row = mysqli_num_rows($query2);
					$data = mysqli_fetch_array($query2);
					if($row==1){
						?>
						<div class="card-body"><!-- main form-->
							<div class="card-body"><!-- main form-->
								<ul class="list-group">
									<li class="list-group-item disabled">Name: <?php echo $data['pLastName']; ?></li>
									<li class="list-group-item">Lived In : <?php echo $data['pDistrict']; ?></li>
									<li class="list-group-item">Common Desise: <?php echo $data['pCmDisease']; ?></li>
									<li class="list-group-item">Phone No: <?php echo $data['pPhoneNo']; ?></li>
									<li class="list-group-item">Email: <?php echo $data['pEmail']; ?></li>
									
								</ul>
								
							</div>
						</div>
						<?php 
					}
					else{
						?>
                          <div class="alert alert-warning alert-dismissible fade show" role="alert"
                                        style="background-color: #F4AA9A;  text-align: center; margin-top: 10px;"
                                    >
                                        <strong>Not Found </strong> Enter Valid Id
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         </div>						
						<?php
					}
				}
				?>
				
			</div><br>
			<div align="right">
				<a href="#" class="btn btn-primary">View All Patient</a>
			</div>
		</div>
	</div><br><br><br>
</div>

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
			<p>All rights reserved to <span><b>antFARM</b></span> </p>
		</center><br>
	</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
</body>
</html>
