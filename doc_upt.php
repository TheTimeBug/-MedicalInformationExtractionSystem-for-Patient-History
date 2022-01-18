<!doctype html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="shortcut icon" type="image/png" href="images/favicon.jpg">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script type="text/javascript" src="js/divition.js">
	</script>
	<title>MIES/Doctor</title>
</head>

<body>
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
						<a class="nav-link" aria-current="page" href="doctor_home.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="doctor.php">Doctors</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="#">Profile Update</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
					<!-- Remove Doctor Home & Admin Home From Above -->




				</ul>
				<form class="d-flex">
					<li class="nav-item">
						<a href="#" style="color: white; text-decoration:none;">Welcome
							<?php
							session_start();
							$sid = $_SESSION['username'];

							$link = mysqli_connect('localhost', 'root');
							$db = mysqli_select_db($link, 'medicare');

							$query1 = mysqli_query($link, "select dName from doctordata where dId='$sid'");
							$data = mysqli_fetch_array($query1);
							echo  $data['dName'];
							?></a>
					</li>



				</form>
			</div>
		</div>
	</nav>
	<?php
if ( isset($_POST['submit'])){
	include('config.php');
	$db = mysqli_select_db($link,'medicare');
	if($link){
		$fname = $_POST['fname'];
		$phone = $_POST['phone'];
		$nid = $_POST['nid'];
		$divition = $_POST['divition'];
		$district = $_POST['district'];
		$address = $_POST['address'];
		$about = $_POST['about'];
		$email = $_POST['email'];
		$ds1 = $_POST['ds1'];
		$ds2 = $_POST['ds2'];
		$ds3 = $_POST['ds3'];
		$id = $_SESSION['sid'];
		$sql = "UPDATE doctordata SET dName='$fname',dDivition='$divition',dDistrict='$district',
										dAddress='$address',dPhoneNo='$phone',dEmail='$email',
										dNid='$nid',dSP1='$ds1',dSP2='$ds2',dSP3='$ds3',
										dAbout='$about' WHERE dId='$id'";
		if(mysqli_query($link,$sql)){
			?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert"
                    style="background-color: #58D68D;  text-align: center; margin-top: 10px;">
                    <strong>update Sucessful </strong> 
                   	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        	<?php
		}
		else{
			?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert"
                    style="background-color: #F4AA9A;  text-align: center; margin-top: 10px;">
                    <strong>update failed </strong> <?php echo"error".mysqli_error($link); ?>
                    button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        	<?php
			
		}


		mysqli_close($link);

	}
}
?>

	<!--Bootstrap Navbar Done -->
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: 20rem;">
					<img src="images/signup_girl.jpg" class="card-img-top" alt="online doctor">
					<div class="card-body">
						<h5 class="card-title">Set Your Schedule</h5>
						<p class="card-text">You can change your time letter.
							.</p>
						<a href="doc_time.php" class="btn btn-success">Edit Schedule</a>
					</div>
				</div>
			</div>

			<div class="col-sm">
			<div class="card" style="width: 45rem; background-color: #E5E4E2;">
				<div class="card-body">
					<?php
						if (1){
							include('config.php');
							$sql = "select * from doctordata where dId = '$sid'";
							$query2 = mysqli_query($link,$sql);
							$row = mysqli_num_rows($query2);
							$data = mysqli_fetch_array($query2);
							if($row == 1){
								?>
									<form class="row g-3" action="#" method="POST">
										
										<div class="col-12">
											<label for="did" class="form-label">Doctor Id</label>
											<text type="text" class="form-control" id="did" name="did"><?php echo $data['dId']; $_SESSION['sid'] =$data['dId']; ?></text>
										</div>

										<div class="col-12">
											<label for="fname" class="form-label">Full Name</label>
											<input type="text" class="form-control" id="fname" name="fname" value="<?php echo $data['dName'];?>">
										</div>
										
										<div class="col-md-6">
											<label for="divition" class="form-label">Division</label>
											<select class="form-select" name="divition" id="divition" onchange="trigger('divition','district')">
												<option selected value="<?php echo $data['dDivition'];?>"><?php echo $data['dDivition'];?></option>
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
												<option selected value="<?php echo $data['dDistrict'];?>"><?php echo $data['dDistrict'];?></option>
												<option>...</option>
											</select>
										</div>
										
										<div class="col-12">
											<label for="address" class="form-label">Address</label>
											<input type="text" class="form-control" id="address"name="address" value="<?php echo $data['dAddress'];?>">
										</div>
										<div class="col-md-6">
											<label for="email" class="form-label">Email</label>
											<input type="email" class="form-control" id="email" name="email" value="<?php echo $data['dEmail'];?>">
										</div>
										<div class="col-md-6">
											<label for="phone" class="form-label">Phone</label>
											<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $data['dPhoneNo'];?>"">
										</div>
										
										
											<div class="col-md-12">
			
												<label for="nid" class="form-label">National Id</label>
												<input type="text" class="form-control" id="nid" name="nid" value="<?php echo $data['dNid'];?>">
											</div>
										

										<div class="col-md-4">
											<label for="ds1" class="form-label">Doctor Specialist 1</label>
											<select id="ds1" name="ds1" class="form-select">
												<option selected><?php echo $data['dSP1'];?></option>
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
										<div class="col-md-4">
											<label for="ds2" class="form-label">Doctor Specialist 2</label>
											<select id="ds2" name="ds2" class="form-select">
												<option selected><?php echo $data['dSP2'];?></option>
												
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
										<div class="col-md-4">
											<label for="ds3" class="form-label">Doctor Specialist 3</label>
											<select id="ds3" name="ds3" class="form-select">
												<option selected><?php echo $data['dSP3'];?></option>
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
										<div class="col-md-12">
											<label for="about" class="form-label">About Doctor</label>
											<input type="text" class="form-control" id="about" name="about" value = "<?php echo $data['dAbout'];?>">
										</div>
										
										
										<div  align="right"class="col-12">
											<button type="submit" class="btn btn-success" name="submit">Update</button>
										</div>
									</form>
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
									<form class="d-flex" method="POST" action="#">
										<input class="form-control me-2" type="search" placeholder="Enter Id" name="sid" aria-label="Search">
										<button class="btn btn-outline-success" type="submit" name="search">Search</button>
										<!--Search functionaliy is now optional we will think about it letter -->
									</form>
                                    <?php

							}	
						}
						else {
							?>
							<form class="d-flex" method="POST" action="#">
								<input class="form-control me-2" type="search" placeholder="Enter Id" name="sid" aria-label="Search">
								<button class="btn btn-outline-success" type="submit" name="search">Search</button>
								<!--Search functionaliy is now optional we will think about it letter -->
							</form>
							<?php
						}
					?>
				</div>
			</div><br>
			
			
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