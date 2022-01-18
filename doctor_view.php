<?php
    $docid = $_GET['did'];
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
        <link rel="stylesheet" href="css/bootstrap.min.css"> 
				<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
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
						<a class="nav-link active" aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="#">Doctors</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

    <?php
        include('config.php');
        $sql = "SELECT * FROM doctordata where did='$docid'";
		$query = mysqli_query($link,$sql);
        $data = mysqli_fetch_array($query);
        $d_name=$data['dName'];
        $d_id=$data['dId'];
        $d_image=$data['dImage'];
        $image = "doctor_images/$d_image";
        $phone=$data['dPhoneNo'];
        $emal=$data['dEmail'];;
        $district=$data['dDistrict'];
        $dsp = " " . $data['dSP1'] . " , " . $data['dSP2'] . " , " . $data['dSP3'];

    ?>

    <div class="main padding-side-10">
			<div class="section">
				<div class="row">
					<div class="col-md-4">
						<div class="sidebar">
							<div class="doctor-photo padding-10">
							  <img src="<?php echo $image;?>" alt="...">
							  <div class="inner-sidebar doctor-schedule">
								<div class="inner-time-info">
									<div class="clock"><img src="img/images/clock.png" alt=""></div>
									<h6>Working hours</h6>
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
								</div>

                                <?php
                                    $sql = "SELECT * FROM `doctime` WHERE `dId`='$docid' ORDER BY day ASC;";
                                    $query = mysqli_query($link,$sql);
                                    while($data = mysqli_fetch_array($query)){
                                        $d_day = $data['day'];
                                        $d_s=$data['times'];
                                        $d_e=$data['timee'];
                                ?>
								<div class="span-schedule">
									<ul class="list-group">
										<li class="list-group-item">
										<span class="badge"><?php echo $d_s?> - <?php echo $d_e?></span>
										<?php echo $d_day;?>
										</li>
										
									</ul>
								</div>
                                <?php } ?>
							</div>
							</div>
					   </div>
					</div>
					<div class="col-md-8">
						<div class="doctor-information">
						  <h4><?php echo $d_name;?></h4>
						  <h6><?php echo $dsp;?></h6>
						  <hr>
						  
						  <hr>
						  
						 
						  <div class="specialities">
						  	<h6>Doctor Conatact</h6>
							<p>Phone: <?php echo $phone;?><p>
							<p>Email: <?php echo $emal;?><p>
							<p>District: <?php echo $district;?><p>
							
						  </div>
						  <div class="col-sm">
									<div class="">
										<h5 class="card-title">About Me</h5>
										<p class="">A web application that will contain the medical history
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
					      
						</div>	
				  	</div>
				</div>
			</div>
		</div>





<!-- foofter ber-->
<br>
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
