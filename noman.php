
<?php
    session_start();
    if ( isset($_POST['submit'])){
        include('config.php');
    $msg = "";
        if($link){
            $fname = $_POST['fname'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $nid = $_POST['nid'];
            $divition = $_POST['divition'];
            $district = $_POST['district'];
            $address = $_POST['address'];
            $about = $_POST['about'];
            $email = $_POST['email'];
            $ds1 = $_POST['ds1'];
            $ds2 = $_POST['ds2'];
            $ds3 = $_POST['ds3'];
            $id =  $_SESSION['id'];
            $target = "doctor_images/".basename($_FILES['image']['name']);
	        $image = $_FILES['image']['name'];
            $_SESSION['username']=$id;

		    $sql = "INSERT INTO doctordata(dName,dId,dImage, dPassword, dDivition, dDistrict, dAddress, dPhoneNo, dEmail, dNid, dSP1, dSP2, dSP3, dAbout) VALUES ('$fname','$id','$image','$password','$divition','$district','$address','$phone','$email','$nid','$ds1','$ds2','$ds3','$about')";
            $sql2 = "DELETE FROM tempdoctor WHERE tdId = '$id'";
		if(mysqli_query($link,$sql)){
			echo"Regestration Successfull";
            mysqli_query($link,$sql2);
            
            $_SESSION['name']= $fname;
			?><script> location.replace("doctor_home.php"); </script><?php
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