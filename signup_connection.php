<?php
session_start();
include('config.php');
if($link){
	echo " connection successful";
	$db = mysqli_select_db($link,'medicare');
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$nid = $_POST['nid'];
	$divition = $_POST['divition'];
	$district = $_POST['district'];
	$address = $_POST['address'];
	$desise = $_POST['desise'];
	$about = $_POST['about'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$blood = $_POST['blood'];

		$sql = "INSERT INTO patientdata(pId,pPassword, pFirstName, pLastName, pDivition, pDistrict, pAddress, pPhoneNo, pEmail, pGender,pDOB,pBlood,pNationalId, pAbout, pCmDisease, pTotalRepoart, pTotalPrescription, pTotalSucessfulVisit, pTotalUnsucessfulVisit, pTotalAppointment) VALUES ('$phone','$password', '$fname', '$lname', '$divition', '$district', '$address', '$phone', '$email','$gender','$dob','$blood','$nid', '$about', '$desise', 0, 0, 0, 0, 0)";

		if(mysqli_query($link,$sql)){
			echo"Regestration Successfull";
			$_SESSION['name']= $lname;
			$_SESSION['id']= $phone;
			
			$_SESSION['username'] = $phone;
			header('location:patientHome.php');
		}
		else{
			echo"error".mysqli_error($link);
		}
		mysqli_close($link);

	}
	else{
		echo " no connection";
	}


?>
