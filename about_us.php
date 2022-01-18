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

	<title>MIES/Admin</title>
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
						<a class="nav-link active" aria-current="page" href="#">About Us</a>
					</li>
					
     
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>

				
					

				</ul>
			<!--	<div class="d-flex">
                <li class="nav-item">
						<a  href="#" style="color: white; text-decoration:none;">Welcome
                        <?php
	                     	session_start();
							 $sid = $_SESSION['username'];
						 
							 $connection = mysqli_connect('localhost','root');
							 $db = mysqli_select_db($connection,'medicare');
						 
							 $query1 = mysqli_query($connection,"select aName from admindb where aId='$sid'");
							 $data = mysqli_fetch_array($query1);
	                    	 echo  $data['aName'];
	                    ?></a>
				</li> -->
				<!-- comment our above -->
    
					
					
				</div>
			</div>
		</div>
	</nav>


	<!--Bootstrap Navbar Done --><br><br>
    <div class="container">
		<div class="row">
	    <div class="col-sm">
				<div class="card" style="width: 30rem;">

					<div class="card-body">
						<h5 class="card-title">About Us</h5>
						<p class="card-text">A web application that will contain the medical history
							data of every patient for hospitals, doctors or patients can access data
							form anywhere-anytime. Easy and User-friendly data input methods for
							users will be available to help enrich the database as easily as possible.
							Making the process of reading medical reports and prescriptions and making
							the process if entering those data into the database.</p><br><br>

							<h5> Motivation</h5>
						      <p class="card-text">While some of the well-known Health institutions maintain a database to keep track of their patient information some follow the traditional ways. As each hospital maintains separate databases, we are aiming to combine them and bring them under one server for quick access. As patients often change doctors and Hospitals for their treatments the need for previous medical history never changes. So our centralized database can be accessed easily for retrieval of Patients medical history based on which patients and doctors can make accurate decisions.
                             We are motivated to solve the discrete and analog medical information collection system and make it fully digital and centralized with quick accessibility</p><br><br>
						
					</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="card" style="width: 40rem;">
					<img src="images/img_bg_2.jpg" class="card-img-top" alt="online doctor">
					<div class="card-body">
					  
						<p class="card-text"><h1><b>MIES:</b></h1>.<br><h2>Medical Information Extraction System</h2></p>
						<a href="https://sites.google.com/diu.edu.bd/antfarm/home" class="btn btn-primary">Follow Us</a>
					</div>
				</div>
			</div>

		</div>
		</div>	<br><br>
	<center><h1>Team antFarm</h1></center>

	<div class="container">
		<div class="row">
			
        <div class="col-sm">
				<div class="card" style="width: 25rem;">
					<img src="images/noman.jpeg" class="card-img-top" alt="online doctor">
					<div class="card-body">
						<a href="#" class="btn btn-primary">Sk Noman</a>
						<p class="card-text">Felling happy to be alive.<br>
						Try to become a man of Value.</p>
						<h6># Responsible for System Design</h6>
						
					</div>
				</div>
			</div>

            <div class="col-sm">
				<div class="card" style="width: 25rem;">
					<img src="images/jojo.jpg" class="card-img-top" alt="online doctor">
					<div class="card-body">
					    <a href="#" class="btn btn-primary">Ahmed Ragib Hassan</a>
						<p class="card-text">I'm the biggest meme maker.<br>.</p>
						<h6># Design and Database Implimenter</h6>
					</div>
				</div>
			</div>


			<div class="col-sm">
				<div class="card" style="width: 25rem;">
					<img src="images/nasim.jpg" class="card-img-top" alt="online doctor">
					<div class="card-body">
						<a href="#" class="btn btn-primary">Nasim Parvez</a>
						<p class="card-text">Also Known As Time Bug.<br>No magic can help you,
It's you who will help you.</p>
						<h6># Responsible for System Backend Operation</h6>
					</div>
				</div>
			</div>

		</div>
	</div>
    <br>
    <br>
	
	<!-- About us section done -->
	<br>

	


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