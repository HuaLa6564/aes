<?php
    include("../DB/connection.php");

    $sql = "SELECT * FROM employee";
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
	  padding: 20px;
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
		<h2><center><font style="font-family:Trajan Pro;color:teal;"><b>Employee List</b></font></center></h2>
		<br><br>
        Click to add new employee :
        <a href="../employee/addEmp.php"><button style="font-size:16px">Add Employee <i class="fa fa-plus"></i></button></a>
		<p></p>
        <table border="0">
					<tr>
						<th>No</th>
						<th>Emp ID</th>
						<th>Name</th>
						<th>IC</th>
						<th>Gender</th>
						<!-- <th>Email</th>
						<th>Phone No</th> -->
						<th>KWSP</th>
						<th>Salary</th>
						<th>Dept</th>
						<th colspan=3>Action</th>
					</tr>
					<?php $count=0; 
					do { 
						$count++;
					?>
					<tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $row['emp_id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['ic']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<!-- <td><?php //echo $row['email']; ?></td>
						<td><?php //echo $row['phoneNo']; ?></td> -->
						<td><?php echo $row['kwsp']; ?></td>
						<td><?php echo $row['salary']; ?></td>
						<td><?php echo $row['dept']; ?></td>
						<td>
							<a href="../employee/editEmpForm.php?no=<?php echo $row['no']; ?>"><i class="fa fa-edit" style="font-size:36px"></i></a>  
						</td>
						<td>
							<a href="../employee/deleteEmp.php?no=<?php echo $row['no']; ?>" onclick="return check()"><i class="fa fa-trash-o" style="font-size:36px"></i></a>
						</td>		
						<td>
							<a href="../employee/viewEmp.php?no=<?php echo $row['no']; ?>"><i class="fa fa-eye" style="font-size:36px"></i></a>  
						</td>
					<?php } while($row = $query -> fetch_assoc()) ?>
		</table>
		</div>

</body>
</html>