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
						<?php
							session_start();
							$sid = $_SESSION['username'];

							if($sid!=0){
								echo '<a class="nav-link active" aria-current="page" href="patientHome.php">Home</a>';
							}
							else{
								echo '<a class="nav-link active" aria-current="page" href="index.php">Home</a>';
								
							}
						?>
						
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="#">Doctors</a>
					</li>

					
				
					  <!-- Remove Doctor Home & Admin Home From Above -->

				</ul>
				<form class="d-flex" action="#">
					<input class="form-control me-2" type="search" placeholder="Search by speciality" aria-label="Search">
					<button class="btn btn-outline-success" name="search" type="submit">Search</button>
					<!--Search functionaliy is now optional we will think about it letter -->
				</form>
			</div>
		</div>
	</nav>


	<!--Bootstrap Navbar Done --><br><br>

    <!-- serch result -->
	

	<?php 
		$limit = 6;
		
		if(isset($_GET['page']))
		{
			$page = $_GET['page'];
		}
		else
		{
			$page = 1;
		}
		$offset = ($page - 1 )*$limit;
		$link = mysqli_connect("localhost","root","","medicare");
		$sql = "SELECT * FROM doctordata ORDER BY did ASC LIMIT {$offset},{$limit}";
		$query = mysqli_query($link,$sql);

		
	?>

	<div class="container">
		<div class="row">

			<?php 
		
				while($data = mysqli_fetch_array($query)){
			?>
			<div class="col-sm">
				<div class="card" style="width: 22rem;">
					<?php echo '<img src="doctor_images/'.$data['dImage'].'" width="350" height="300" />'; ?>
					<div class="card-body">
						<h5 class="card-title">Name    : <?php echo $data['dName'];?></h5>
						<h7 class="card-title">Doctor Id    : <?php echo $data['dId'];?></h7><br>
						<h7 class="card-title">Phone   : <?php echo $data['dPhoneNo'];?></h7><br>
						<h7 class="card-title">Email   : <?php echo $data['dEmail'];?></h7><br>
						<h7 class="card-title">District: <?php echo $data['dDistrict'];?></h7><br>
						<h7 class="card-title">Spcealist : <?php print " " . $data['dSP1']. " , ".$data['dSP2']. "  ";?></h7><br>
						<a href="doctor_view.php?did=<?php echo $data['dId'];?>" class="btn btn-primary">View</a>
					</div>
				</div><br>
			</div>
			<?php
				}
			?>
			
			<div>
				<?php
					$sql1 = "SELECT *FROM doctordata";
					$result1 = mysqli_query($link , $sql1) or die("Query Failed");
				
					if(mysqli_num_rows($result1)>0)
					{
						$total_records = mysqli_num_rows($result1);
						
						$total_page = ceil($total_records / $limit);

						echo ' <ul class="pagination">';
						if($page > 1)
						{
							
							echo'<li class="page-item"><a class="page-link" href="doctor.php?page='.($page-1).'">Previous</a></li>';
						}

						for($i = 1;$i<=$total_page;$i++)
						{
							if($i == $page)
							{
								$active = "page-item active";
							}
							else
							{
								$active = "";
							}
							echo ' <li  class="'.$active.'"><a class="page-link" href="doctor.php?page='.$i.'">'.$i.'</a></li>';
						}
						if($total_page > $page)
						{
							echo'<li class="page-item"><a class="page-link"href="doctor.php?page='.($page+1).'">Next</a></li>';
						}
						echo '</ul>';
					}

				
				?>
			</div>
		
			
		</div><br><br>
	
	</div><br><hr><br>



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
