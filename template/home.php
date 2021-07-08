<?php include("../DB/connection.php"); ?>
<?php include("../template/navbar.php"); ?>

<!DOCTYPE html>
<html>
</head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	<style>

		body {
			background-color: white;
		}
	
		.img {
			border-radius: 50%;
		}
	
		* {box-sizing: border-box;}

		.container {
			position: relative;
			width: 50%;
			max-width: 200px;
			background-color: white;
		}

		.image {
			display: block;
			width: 150%;
			height: auto;
			color: black;
		}

		.overlay {
			position: absolute; 
			bottom: 0; 
			background: rgb(0, 0, 0);
			background:teal; 
			color: teal; 
			width: 115%;
			transition: .5s ease;
			opacity:0;
			color: white;
			font-size: 20px;
			padding: 10px;
			text-align: center;
		}

		.container:hover .overlay {
			opacity: 1;
		}
		
		.mySlides {display:none;}
		
		
	</style>
	
</head>	
<body>
	<br>
	<h2><center><font style="font-family:Trajan Pro;color:teal;">HRIS - Human Resource</center></h2>
	<br><Br><Br><bR>
	
		<table border="0" width="70%" align="center">
		<tr>
		
			<td>
				<div class="container">
                <center><p>Employee Tab</p></center>
				<a href="../employee/homeEmp.php">
				<img src="../assets/employee.png" alt="Avatar" class="image" width="200" height="200"  style="border-radius:15%">
				<div class="overlay">Employee Tab</div>
				</div>
			</td>
			
			<td>
				<div class="container">
                <center><p>Department Tab</p></center>
				<a href="../department/homeDept.php">
				<img src="../assets/dept.png" alt="Avatar" class="image" width="200" height="200"  style="border-radius:15%">
				<div class="overlay">Department Tab</div>
				</div>
			</td>
			
		</table>
</body>
</html>
