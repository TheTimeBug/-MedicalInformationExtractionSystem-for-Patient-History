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
					<a class="nav-link active" href="doctor.php">Doctors</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="patientHome.php">Dashboard</a>
				</li>

				
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
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
					<h5 class="card-title">     <?php
                                session_start();
                                $sid = $_SESSION['username'];
                            
                                include('config.php');
                            
                                $query1 = mysqli_query($link,"select pLastName from patientdata where pId='$sid'");
                                $data = mysqli_fetch_array($query1);
                                echo  $data['pLastName'];
	                    ?></h5>
					<a href="my_appoinments.php" class="btn btn-info">Appointments Info</a><br><br>
				
					<a href="#" class="btn btn-danger">Cancle your Appointment</a><br><br>
					
					
				</div>
			</div>
			
		</div>

		
		<div class="col-sm">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong><h1>Welcome   <?php
                                //session_start();
                                $sid = $_SESSION['username'];
                            
                                $link = mysqli_connect('localhost','root');
                                $db = mysqli_select_db($link,'medicare');
                            
                                $query1 = mysqli_query($link,"select pLastName from patientdata where pId='$sid'");
                                $data = mysqli_fetch_array($query1);
                                echo  $data['pLastName'];
	                    ?><h1> 
                        
                
                        <?php

                       //session_start();
                        $sid = $_SESSION['username'];
                        $docid = $_SESSION['docid'];
                        $_SESSION['tb']= "admindb";

                            $f_time=$_SESSION['time'];
                            $f_date=$_SESSION['date'];
                            $f_day=$_SESSION['day'];
                            $f_place=$_SESSION['place'];
                            $f_district=$_SESSION['district'];
                            $f_timeEnd = $_SESSION['timeEnd'];
                            $f_disease = $_SESSION['disease'];
                            $f_diseaseDT=$_SESSION['diseaseDT'];

                        $link = mysqli_connect("localhost","root","","medicare");

                        $q1 = "SELECT * FROM `appoinment` WHERE dId = '$docid' AND aDate='$f_date' AND aTime='$f_time'";
                        $qu1 = mysqli_query($link,$q1);
                        $row = mysqli_num_rows($qu1);

                        $f_aSirial = $row+1;


                        $sentdata = "INSERT INTO `appoinment`( `dId`, `pId`, `aDate`, `aTime`, `aSirial`, `aPlace`, `aDeseaseType`, `aDetails`) 
                                                    VALUES ('$docid','$sid','$f_date','$f_time','$f_aSirial','$f_place','$f_disease','$f_diseaseDT')";

                        if(mysqli_query($link,$sentdata)){
                            //header('location:appointment_5.php');
                            echo" Your Appoinment Successfull<br>Appoinment Number : ".$f_aSirial. "<br>";

                            
                        }
                        else{
                            header('location:appointment_4.php');
                        }




                        ?>
                
                </strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>	

       


	</div>
    
    
    <br><br><br>
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