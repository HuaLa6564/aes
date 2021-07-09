<?php
    include("../DB/connection.php");

    $sql = "SELECT * FROM department";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();

    include("../template/navbar.php");
?>


	
<html>
<head>
	<link href="bootstrap/css/bootstrap.min.css" 
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<title>Department Tab</title>
	<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>

	body {
		background-color: lavender;
	}
	</style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body {margin:0;}
	.main {
	  padding: 12px;
	  margin-top: 50px;
	  height: 900px; /* Used in this example to enable scrolling */
	  
	}
	
		table {
  border-collapse: collapse;
  width: 100%;
	 
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(odd){background-color: white}

th {
  background-color: seagreen;
  color: white;
}
	
	</style>
</head>

<body>
	<div class="main">
		
		<div class="container">
				<h2><center><font style="font-family:Trajan Pro;color:teal;"><b>Department List</b></font></center></h2>
		<br><br>
		<table border="0">
					<tr>
						<th>No</th>
						<th>Code</th>
						<th>Name</th>
					</tr>
					<?php $count=0; 
					do { 
						$count++;
					?>
					<tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $row['code']; ?></td>
						<td><?php echo $row['name']; ?></td>
					<?php } while($row = $query -> fetch_assoc()) ?>
		</table>
		</div>

</body>
</html>