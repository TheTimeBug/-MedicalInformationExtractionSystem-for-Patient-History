<?php
    session_start();
    if ( isset($_POST['submit'])){
    $con= mysqli_connect('localhost','root');
    $link = mysqli_connect("localhost","root","","medicare");
    $db = mysqli_select_db($con,'medicare');
    $msg = "";
        if($con){
            $prname = $_POST['prname'];
			$date1 = $_POST['date'];
			$docid = $_POST['did'];
            $id =  $_SESSION['username'];
            $target = "doctor_images/".basename($_FILES['image']['name']);
	        $image = $_FILES['image']['name'];
      

		    $sql = "INSERT INTO reports(report_patient_id,report_name,report_images,report_date,report_doctor) VALUES ('$id','$prname','$image','$date1','$docid')";
       
		if(mysqli_query($link,$sql)){
			echo"Prescription Added";
			?><script> location.replace("patientHome.php"); </script><?php
		}
		else{
			echo"error".mysqli_error($link);
		}
        
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
		{
			$msg = "image Uploaded";
		}
		else{
			$msg = "Error to upload to image";
		}


		mysqli_close($link);

    }
}
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
			
			</div>
		</div>
	</nav>
<br><br>

    <div class="container">
        <div class="row">
            <div class="col-sm">
            <div class="card" style="width: 30rem;">
					<img src="images/d1.jpg" class="card-img-top" alt="online doctor">
					<div class="card-body">
                        <a href="#" class="btn btn-info">Dr Noman</a>
						<a href="#" class="btn btn-success">Contact with him</a><br><br>
						<h5 class="card-title">Information</h5>
						<p class="card-text">Please give us with correct information.<br>Your reports important for better treatment
							.</p>
                       
					</div>
				</div>
            </div>

           
            <div class="col-sm">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Set your information!</strong>Please Enter right information as you work for mankind.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	        </div>
            <div class="card" style="width: 45rem; background-color: #11C8EF;">
            
			<?php
	                    
						$sid = $_SESSION['username'];
					
						include('config.php');
					
						$query1 = mysqli_query($link,"select pId from patientdata where pId='$sid'");
						$data = mysqli_fetch_array($query1);
					
	                    ?>
				
                <div class="card-body"><!-- main form-->
                   <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                        
                        <div class="col-12">
                            <label for="did" class="form-label">Ptient Id</label>
                            <text type="text" class="form-control" id="pid" name="id"><?php echo $data['pId'];?></text>
                        </div>

                       
                  
                
                       
                        <div class="col-md-6">
                            <label for="dnmae" class="form-label">Dcotor ID</label>
                            <input type="text" class="form-control" id="did" name="did" placeholder="Doctor Id:">
                        </div>

               
                        <div class="col-md-6">
                            <label for="image" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date">
                            <small></small>
                        </div>
                        <div class="col-md-6">
                            <label for="nid" class="form-label">Prescription Name</label>
                            <input type="text" class="form-control" id="pname" name="prname" placeholder="Name of Prescription:">
                        </div>

               
                        <div class="col-md-6">
                            <label for="image" class="form-label">Add Image</label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="Add your prescriptoin">
                            <small></small>
                        </div>
                       
                        <div  align="right"class="col-12">
                            <button type="submit" class="btn btn-primary" name="submit">Add</button>
                        </div>
                    </form>
                </div>
            </div><br>
          
               
            </div>
            
        </div>
    </div><br><br><br>




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