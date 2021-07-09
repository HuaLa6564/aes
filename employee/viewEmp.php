<?php
        include("../DB/connection.php");
    
        $no=$_GET['no'];
        $sql="SELECT * FROM employee WHERE no='$no'";
        $query=$conn->query($sql);
        $row=$query->fetch_assoc();
?>


<html>
<head>
	<link href="bootstrap/css/bootstrap.min.css" 
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<title>Generate Report</title>
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
  width: 50%;
	}

th, td {
  text-align: left;
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
		<h2><center><font style="font-family:Trajan Pro;color:teal;"><b><?php echo $row['name']?> Report</b></font></center></h2>
		<br><br>
        <center>
         <div class=="container">   
        <table border="0" width=80>
					<tr>
						<td><b>Emp ID : </b></td>
						<td><?php echo $row['emp_id']; ?></td>
                    </tr>
                    
                    <tr>
						<td><b>Name : </b></t>
						<td><?php echo $row['name']; ?></td>
                    </tr>
                    
                    <tr>
						<td><b>Identification Card : </b></td>
						<td><?php echo $row['ic']; ?></td>
                    </tr>
                    
                    <tr>
						<td><b>Gender : </b></td>
						<td><?php echo $row['gender']; ?></td>
                    </tr>
                    
                    <tr>
                        <td><b>Email : </b></td>
						<td><?php echo $row['email']; ?></td>
                    </tr>
                   
                    <tr>
                        <td><b>Phone No : </b></td>
						<td><?php echo $row['phoneNo']; ?></td>
                    </tr>
                    
                    <tr>
                        <td><b>KWSP : </b></td>
						<td><?php echo $row['kwsp']; ?></td>
                    </tr>
                    
                    <tr>
                        <td><b>Salary : </b></td>
						<td><?php echo $row['salary']; ?></td>
                    </tr>
                    
                    <tr>
                        <td><b>Dept : </b></td>
						<td><?php echo $row['dept']; ?></td>
                    </tr>
		</table>
</div>
            <button onclick="window.print()">Generate Report</button>
        </center>
		</div>

</body>
</html>