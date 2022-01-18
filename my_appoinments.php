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

	<title>MIES/Patient</title>
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
						<a class="nav-link active" aria-current="page" href="patientHome.php">Home</a>
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
						<a href="#" style="color: white; text-decoration:none;">Welcome
							<?php
							session_start();
							$sid = $_SESSION['username'];

							include('config.php');

							$query1 = mysqli_query($link, "select pLastName from patientdata where pId='$sid'");
							$data = mysqli_fetch_array($query1);
							echo  $data['pLastName'];
							?></a>
					</li>
				</form>
			</div>
		</div>
	</nav>

	<br>

	<div class="alert header-line " role="alert" style="  text-align: center; margin-top: 10px;">
		<strong>User Appoinment List </strong>
	</div>

	<!--Bootstrap Navbar Done --><br><br>

	<center>
		<!-- <button class="button button4">My Appointments</button> -->
	</center>
	<!-- add your php down here nasim -->
	<?php
	$limit = 3;

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 1;
	}
	$offset = ($page - 1) * $limit;
	$sid = $_SESSION['username'];
	$date = date("d-m-Y", strtotime("+0 day"));
	$link = mysqli_connect("localhost", "root", "", "medicare");
	$sql = "SELECT * FROM `appoinment` WHERE pId='$sid' ORDER BY aId DESC LIMIT {$offset},{$limit}";
	$query = mysqli_query($link, $sql);

	$row = mysqli_num_rows($query);
	if ($row > 0) {
		while ($data = mysqli_fetch_array($query)) {
			$did0 = $data['dId'];
			$sql2 = "SELECT `dName`,`dImage`,dSP1,dSP2,dSP3 FROM `doctordata` WHERE did='$did0'";
			$query2 = mysqli_query($link, $sql2);
			$data2 = mysqli_fetch_array($query2);

			$dname = $data2['dName'];
			$dimage = $data2['dImage'];
			$dsp = " " . $data2['dSP1'] . " , " . $data2['dSP2'] . " , " . $data2['dSP3'];

	?>
			<center>
				<div class="container">
					<div class="row custom-card padding-10-px full-margin-15px">
						<div class="col-md-4">
							<img src="doctor_images/<?php echo $dimage; ?>" class="custom-card-non" alt="..." height="300px">
						</div>
						<div class="col-md-8">
							<div class="margin-left-40px">
								<!-- add your data here nasim -->
								<h5 class="card-title margin-top-20px">Date : <?php echo $data['aDate']; ?></h5>
								<h7 class="card-title">Doctor Name : <?php echo $dname; ?></h7><br>
								<h7 class="card-title">Specialist : <?php echo $dsp; ?></h7><br>
								<h7 class="card-title">Appoinment Time : <?php echo $data['aTime']; ?></h7><br>
								<h7 class="card-title">Appoinment Serial : <?php echo $data['aSirial']; ?></h7><br>
								<h7 class="card-title">Appoinment Details : <?php echo $data['aDetails']; ?></h7><br>
								<h7 class="card-title">Place: : <?php echo $data['aPlace']; ?></h7><br>
								<!--<a href="#" class="btn btn-danger">View Appointment</a> -->
							</div>
						</div>
					</div>
				</div>
					<br>
					<?php
						}
					} else {
					?>
						<div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color: #F4AA9A;  text-align: center; margin-top: 10px;"><strong>No appoinment found </strong>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					<?php
						}
					?>
			</center>
			<div class="float-end">
				<?php
					$sql1 = "SELECT * FROM `appoinment` WHERE pId='$sid'";
					$result1 = mysqli_query($link, $sql1) or die("Query Failed");

					if (mysqli_num_rows($result1) > 0) {
						$total_records = mysqli_num_rows($result1);

						$total_page = ceil($total_records / $limit);

						echo ' <ul class="pagination">';
						if ($page > 1) {

							echo '<li class="page-item"><a class="page-link" href="my_appoinments.php?page=' . ($page - 1) . '">Previous</a></li>';
						}

						for ($i = 1; $i <= $total_page; $i++) {
							if ($i == $page) {
								$active = "page-item active";
							} else {
								$active = "";
							}
							echo ' <li  class="' . $active . '"><a class="page-link" href="my_appoinments.php?page=' . $i . '">' . $i . '</a></li>';
						}
						if ($total_page > $page) {
							echo '<li class="page-item"><a class="page-link"href="my_appoinments.php?page=' . ($page + 1) . '">Next</a></li>';
						}
						echo '</ul>';
					}
					?>
			</div>

			<br><br>

			<div class="footer"><br>
				<div class="container ">
					<div class="row width-100x">
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

								<button type="submit" name="feedback" class="btn btn-primary">Send</button>
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