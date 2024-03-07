<?php 

error_reporting(1);
$con=mysqli_connect("localhost","root","","phpojt");
// include("dashbordfun.php");


function getTotalOrder(){
	global $con;
	// SQL query to display row count 
    // in building table 
    $sql = "SELECT * from sorder"; 
  
    if ($result = mysqli_query($con, $sql)) { 
  
    // Return the number of rows in result set 
    $rowcount = mysqli_num_rows( $result ); 
      
    // Display result 
    printf($rowcount); 
} 
  
// Close the connection 
// mysqli_close($con); 
  
}

function getTotalProduct(){
	global $con;
	// SQL query to display row count 
    // in building table 
    $sql = "SELECT * from tblitem"; 
  
    if ($result = mysqli_query($con, $sql)) { 
  
    // Return the number of rows in result set 
    $rowcount = mysqli_num_rows( $result ); 
      
    // Display result 
    printf($rowcount); 
} 
  
// Close the connection 
// mysqli_close($con); 
  
}

function getTotalUser(){
	global $con;
	// SQL query to display row count 
    // in building table 
    $sql = "SELECT * from user"; 
  
    if ($result = mysqli_query($con, $sql)) { 
  
    // Return the number of rows in result set 
    $rowcount = mysqli_num_rows( $result ); 
      
    // Display result 
    printf($rowcount); 
} 
  
// Close the connection 
// mysqli_close($con); 
  
}


 ?>