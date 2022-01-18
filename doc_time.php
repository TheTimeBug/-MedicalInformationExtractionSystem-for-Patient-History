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
						<a class="nav-link" aria-current="page" href="doctor_home.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="doctor.php">Doctors</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="#">Set Time</a>
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
					 
						 $query1 = mysqli_query($link,"select dName from doctordata where dId='$sid'");
						 $data = mysqli_fetch_array($query1);
						 echo  $data['dName'];
	                    ?></a>
				</li>
    
					
					
				</form>
			</div>
		</div>
	</nav>


	<!--Bootstrap Navbar Done --><br><br>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
            <div class="card" style="width: 20rem;">
					<img src="images/signup_girl.jpg" class="card-img-top" alt="online doctor">
					<div class="card-body">
						<h5 class="card-title">Update your profile</h5>
						<p class="card-text">You can change your time letter.
							.</p>
						<a href="doc_upt.php" class="btn btn-success full-width">update Profile</a>
					</div>
				</div>
            </div>

            <div class="col-sm">
            <?php 
            if(isset($_POST['submit'])){
                $con = mysqli_connect('localhost','root');
                $db = mysqli_select_db($con,'medicare');
                
                $sid = $_SESSION['username'];
                $day = $_POST['day'];
                $times=$_POST['timeS'];
                $timee=$_POST['timeE'];
                $divition= $_POST['divition'];
                $district  = $_POST['district'];
                $place = $_POST['place'];

                $sql = "INSERT INTO doctime (dId, day, times, timee, divition, district, place) 
                                    VALUES ('$sid','$day','$times','$timee','$divition','$district','$place')";

                if(mysqli_query($con,$sql)){
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert"
                                        style="background-color: #58D68D;  text-align: center; margin-top: 10px;"
                                    >
                                        <strong>Time Saved </strong> You can add more time Slot
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                    <?php
                }
                else{
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert"
                                        style="background-color: #F4AA9A;  text-align: center; margin-top: 10px;"
                                    >
                                        <strong>Time added faild </strong> Try again leter.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                    <?php 
                }
            }
            
            ?>
            
            <div class="card" style="width: 45rem; background-color: #11C8EF;">
                <div class="card-body"><!-- main form-->
                   <form class="row g-3" method="POST" action="">
                        <div class="col-12">
                            <label for="divition" class="form-label">Select Day</label>
                            <select class="form-select" name="day" id="day">
                                <option disabled selected >Choose...</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="timeS" class="form-label">Start Time</label>
                            <input type="time" class="form-control" id="timeS" name="timeS">
                        </div>
                        <div class="col-md-6">
                            <label for="timeE" class="form-label">End Time</label>
                            <input type="time" class="form-control" id="timeE" name="timeE">
                        </div>

                        <div class="col-md-6">
                            <label for="divition" class="form-label">Division</label>
                            <select class="form-select" name="divition" id="divition" onchange="trigger('divition','district')">
                                <option disabled selected>Choose...</option>
                                
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
                            <option selected>Choose...</option>
                            <option>...</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="place" class="form-label">Enter Place</label>
                            <input type="text" class="form-control" id="place" name="place" placeholder="17/7 Middle paike para , Mirpur 1 , Dhaka 1216">
                        </div>
                        <div class="col-12" >
                            <button type="submit" id="submit" name="submit" class="btn btn-primary">Set Time</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            
        </div>
    </div><br><br><br>
	

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