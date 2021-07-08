<?php include("dbase.php");
	
	if(!empty($_POST['search'])) { 
		$sql = "SELECT * FROM adlist WHERE id='".$_POST['search']."' AND (roomNo='A1001' OR roomNo='A1002' OR roomNo='A1003' OR roomNo='A1004' OR roomNo='A1005')";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
	} else {
		$sql = "SELECT * FROM adlist WHERE (roomNo='A1001' OR roomNo='A1002' OR roomNo='A1003' OR roomNo='A1004' OR roomNo='A1005')";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
	}
?>
<?php include("navbarBlockA.php"); ?>


	
<html>
<head>
	<link href="bootstrap/css/bootstrap.min.css" 
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<title>Home</title>
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
				<h2><center><font style="font-family:Trajan Pro;color:teal;"><b>Block A - Booking List</b></font></center></h2>
		<form method="post" action="Ahome.php">
		<center>
		<input type="text" name="search" placeholder="Enter ID">
		<input type="submit" value="search"></center>
		</form>
		<br><br>
		<table border="0">
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Date</th>
						<th>Time</th>
						<th>Room No</th>
						<th>Status</th>
					</tr>
					<?php $count=0; 
					do { 
								$count++;
					?>
					<tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['Tstart']; ?> - <?php echo $row['Tend'];?></td>
						<td><?php echo $row['roomNo']; ?></td>
						<td><?php echo $row['status']; ?></td>
					<?php } while($row = $query -> fetch_assoc()) ?>
		</table>
		</div>

</body>
</html>