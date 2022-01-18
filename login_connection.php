<?php

session_start();
include('config.php');
if($link){
	echo " connection successful";
	$username = $_POST['id'];
	$password = $_POST['password'];

	$tbName = $_SESSION['tb'];
	$location   = $_SESSION['location'];
	$id =  $_SESSION['id'];
	$pass= $_SESSION['pass'] ;
	$else = $_SESSION['else'];

	//echo $tbName;
}
else{
	echo " no connection";
	}

if ( isset($_POST['submit'])){
	
	$sql = "select * from $tbName where $id = '$username' and $pass='$password'";
	$query = mysqli_query($link,$sql);
	$row = mysqli_num_rows($query);
		
		if($row == 1){
			echo "";
			echo "\n\nlogin Successful";
			
			session_destroy();

			session_start();
			$_SESSION['username']= $username;
		
			header($location);
		}
		else{
			echo "";
			echo"\n\nlogin Faild";
			$_SESSION['wrong']= 11;
			header($else);
		}
	
}
?>
