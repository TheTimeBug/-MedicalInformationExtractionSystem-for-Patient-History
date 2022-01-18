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

	<title>MIES/Patient</title>
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
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="doctor.php">Doctors</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="appointment.php">Appointments</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>

				
					

				</ul>
				<form class="d-flex">
                <li class="nav-item">
						<a  href="#" style="color: white; text-decoration:none;">Welcome
                        <?php
	                    session_start();
						$sid = $_SESSION['username'];
					
						$link = mysqli_connect('localhost','root');
						$db = mysqli_select_db($link,'medicare');
					
						$query1 = mysqli_query($link,"select pLastName from patientdata where pId='$sid'");
						$data = mysqli_fetch_array($query1);
						echo  $data['pLastName'];
	                    ?></a>
				</li>
    
					
					
				</form>
			</div>
		</div>
	</nav>

<br>
	<!--Bootstrap Navbar Done --><br><br>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card height-450 div-center padding-10-px" style="width: 30rem;">
					<div class="card-body div-center">
						<center><h5 class="card-title">My Menu</h5></center><br><br><br>
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>All Menu Won't Work!</strong>If You New Here.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						<a href="patient_documents.php" class="btn btn-info width-45">My Documents</a>
						<a href="ud.php" class="btn btn-primary width-45">My Follow Up</a>
						<a href="my_appoinments.php" class="btn btn-dark width-45">My Appointments</a>
						<a href="upcomeing_ap.php" class="btn btn-primary width-45">Upcoming Appointment</a>
						<a href="appointment.php" class="btn btn-success width-45">Make an Appointment</a>
						<a href="reports.php" class="btn btn-success width-45">Add Reports</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card div-center height-450 padding-10-px" style="width: 26rem;">
					<img src="images/person1.png" class="card-img-top padding-40-px" alt="online doctor">
					<div class="card-body div-center">
						<h5 class="card-title"><?php
	                  
						$sid = $_SESSION['username'];
					
						include('config.php');;
					
						$query1 = mysqli_query($link,"select pLastName,pDOB from patientdata where pId='$sid'");
						$data = mysqli_fetch_array($query1);
						echo  $data['pLastName'];
						$dob =substr($data['pDOB'],0,4);
						$today = substr(date("Y-m-d"),0,4);

	                    ?></a></h5>
						<p class="card-text"><?php echo $today-$dob." Years old";?>
					
					
					
					</div>
				</div>
			</div>

		</div>
	</div><br><br>
	<div class="alert alert-warning alert-dismissible fade show full-width" role="alert">
		<strong>You are loged in !</strong> Now enjoy our services.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	<!-- About us section done -->
	<br>
	<center>
		<h2><b>Our Services</b></h2>
	</center>
	<br>
	<!-- Services  section here -->
	<div class="container">
		<div class="row">
			<div class="col-md-4">
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
			<div class="col-md-4">
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
			<div class="col-md-4">
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
			<div class="col-md-4">
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
			<div class="col-md-4">
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
			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
					<img src="images/blog-6.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Digital Appointment</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of
							the card's content.</p>
						<a href="appointment.php" class="btn btn-primary">Open</a>
					</div>
				</div>
			</div>

		</div><br><br>
	</div>

	<div class="footer">
		<br>
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
					<form action="#" method="POST">
						<div class="row mb-3">
							<label for="f_name" class="col-sm-2 col-form-label">Name</label>
							<div class="col-sm-10">
								<input type="text" name="name" class="form-control" id="f_name">
							</div>
						</div>
						<div class="row mb-3">
							<label for="f_email" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="email" name="email"class="form-control" id="f_email">
							</div>
						</div>
						<div class="row mb-3">
							<label for="f_email" class="col-sm-2 col-form-label">Mssg</label>
							<div class="col-sm-10">
								<input type="text" name="feedback"class="form-control" id="feedback">
							</div>
						</div>

						<button type="submit" name='fback' class="btn btn-primary">Send</button>
					</form>
				</div>
			</div>
		</div>

		<?php
			if(isset($_POST['fback'])){
				$con= mysqli_connect('localhost','root','','medicare');
				$name = $_POST['name'];
				$email=$_POST['email'];
				$time= date("d-m-Y",strtotime("+0 day"));
				$fb=$_POST['feedback'];
				$sql = "INSERT INTO `feedback`(`name`, `email`, `rate`, `time`, `pId`) VALUES ('$name','$email','$fb','$time','$sid')";
                if(mysqli_query($con,$sql)){
					?>
										<div class="alert alert-warning alert-dismissible fade show" role="alert"
											style="background-color: #58D68D;  text-align: center; margin-top: 10px;"
										>
											<strong>Feedback sent</strong> Thankyou
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<?php
				}
			}
		?>
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