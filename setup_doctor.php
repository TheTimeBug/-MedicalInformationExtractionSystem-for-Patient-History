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
						<a class="nav-link" aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="doctors.php">Doctors</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-bs-toggle="dropdown" aria-expanded="false">
							Login
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="login_doctor.php">As Doctor</a></li>
							<li><a class="dropdown-item" href="login_patient.php">As Patient</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="login_admin.php">As Admin</a></li>
						</ul>
					</li>
                    <li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Sign Up</a>
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
					<img src="images/doctor_l.png" class="card-img-top" alt="online doctor">
					<div class="card-body">
                        <a href="#" class="btn btn-info">Dr Unknown</a>
						<a href="#" class="btn btn-success">Contact with him</a><br><br>
						<h5 class="card-title">Sing Up</h5>
						<p class="card-text">Please Sign_up with correct information.<br>As you work for mankind
							.</p>
                       
					</div>
				</div>
            </div>
            <div class="col-sm">

            <div class="alert alert-warning alert-dismissible fade show" role="alert"
           	 style="text-align: center;">
                <strong>Setting Doctor Credentials!</strong> Enter Id and Key Provided by Admin
	        </div>
            <?php
                        if ( isset($_POST['submit'])){
							include('config.php');
                            $username = $_POST['id'];
                            $password = $_POST['key'];

                            $sql = "select * from tempdoctor where tdId = '$username' and tdKey='$password'";
                            $query = mysqli_query($link,$sql);
                            $row = mysqli_num_rows($query);
                                
                                if($row == 1){
                                    session_start();
                                    $_SESSION['id']=$username;
                                    ?><script> location.replace("fillup_doctor_info.php"); </script><?php
                                }
                                else{
                                    ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert"
                                        style="background-color: #F4AA9A;  text-align: center; margin-top: 10px;"
                                    >
                                        <strong>Login Faild </strong> Enter Valid Id and key
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <?php
                                }
                            
                        }
            ?>


            <div class="card" style="width: 45rem; background-color: #11C8EF;">
				
                <div class="card-body">
                   <form class="row g-3" action="" method="POST">
                        <div class="col-md-6">
                            <label for="d_id" class="form-label">Id</label>
                            <input type="text" class="form-control" id="id" name="id" placeholder="10461">
                        </div>
                        <div class="col-md-6" >
                            <label for="d_password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="key" name="key" >
                        </div>
                        <center><div class="col-12" align="center">
                            <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
                        </div></center>
                    </form>

                </div>
            </div>
            </div>
            
        </div>
    </div><br><br><br>


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
