<?php
	session_start();
	include('../config/koneksidb.php');
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysqli_query($conn,"select * from `tbl_login` where username='$username' and password='$password'");
	
	if (mysqli_num_rows($query)<1){
		$_SESSION['message']="Login Gagal, Silahkan coba!";
		header('location:index.php');
	}
	else{
		$row=mysqli_fetch_array($query);
		$_SESSION['username']=$row['username'];
		$_SESSION['password']=$row['password'];
		header('location:../dashboard/apps.php');
	}
    ?>
