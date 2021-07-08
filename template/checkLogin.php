<?php	
	include("../DB/connection.php");
	
		if(isset($_POST['username'])) {
		$sql = "SELECT * FROM admin 
				WHERE username ='".$_POST['username']."' 
				AND password = '".$_POST['password']."'";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
		$num=$query -> num_rows;
		

			if($row['username'] == $_POST['username'] && $row['password'] == $_POST['password']){
					header("Location: home.php"); 
			} else {
				echo "<script>alert('You have entered a wrong password or username!');
				window.location='../index.php';</script>";
			}
		}
?>