<?php 
session_start();
error_reporting(1);
$con=mysqli_connect("localhost","root","","phpojt");


if (isset($_POST['login'])) {
	// code...
	$name = $_POST['id'];
	$pass = $_POST['pwd'];

	$login_query = "SELECT * FROM user WHERE username='$name' AND password='$pass'";
	$login_query_run = mysqli_query($con,$login_query);

	if (mysqli_num_rows($login_query_run) > 0) {
		// code...
		$_SESSION['auth']=true;
		$userdata = mysqli_fetch_array($login_query_run);
		$authname = $userdata['username'];
		$authpass = $userdata['password'];

		$_SESSION['auth_user']=[
			'authname' => $authname,
			'authpass' => $authpass,

		];
		$_SESSION['message'] = "Login Success";
		$_SESSION['sid'] = $name;
		header('location: index.php');
	}else{
		$_SESSION['message'] = "Invalid Username";
		header('location: login.php');
	}
}

 ?>