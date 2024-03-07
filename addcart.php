<?php 

error_reporting(1);
$con=mysqli_connect("localhost","root","","phpojt");





session_start();

if (isset($_POST['add_cart'])) {

	if (isset($_SESSION['cart'])) {

		$session_array_id = array_column($_SESSION['cart'], "id");
		if (!in_array($_GET['id'], $session_array_id)) {
			$session_array = array(
				"id" => $_GET['id'],
				"name" => $_POST['pname'],
				"price" => $_POST['price'],
				"qty" => $_POST['qty'],

			);
			$_SESSION['cart'][]=$session_array;

		}
	}else{
		$session_array = array(
			"id" => $_GET['id'],
			"name" => $_POST['pname'],
			"price" => $_POST['price'],
			"qty" => $_POST['qty'],

		);
		$_SESSION['cart'][]=$session_array;
	}
	echo "<script>alert('Product has been successfully inserted into the cart.')</script>";
	echo "<script>window.open('index.php','_self')</script>";

}





 ?>