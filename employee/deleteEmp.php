<?php
	include('../DB/connection.php');
 	$no = $_GET['no'];
	$sql = "DELETE FROM employee WHERE no ='$no'";
	
	if(mysqli_query($conn, $sql)){
        echo "<script>alert('Employee Deleted !');
            window.location='../employee/homeEmp.php';</script>";
    }
	else 
		echo "<b>Delete is not successful!</b><br><br>";
?>