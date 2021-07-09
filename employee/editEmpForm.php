<?php 
    include("../DB/connection.php");
    include("../template/navbar.php");

	$no=$_GET['no'];
	$sql="SELECT * FROM employee WHERE no='$no'";
	$query=$conn->query($sql);
	$row=$query->fetch_assoc();
?>
<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>

	body {
		background-color: lavender;
		margin:0;
	}
	
	body {margin:0;}
	.main {
	  padding: 12px;
	  margin-top: 50px;
	  height: 900px; /* Used in this example to enable scrolling */
	}
	input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
		padding: 50px 50px;
		background-color: white	;
		width: 800px;
		margin-top: 0px;
	}
	</style>
		
</head>

<body>
	<div class="main">
		<div class="container">
		<h2><center><font style="font-family:Trajan Pro;color:teal;">Edit Employee Details </font></center></h2>
		<br>
		
		<form name="form1" method="post" action="../employee/editEmp.php">

				<input type="hidden" name="no" value="<?php echo $row['no']; ?>">
				
				<div class="col-sm-13 form-group">
				<input type="text" name="emp_id" value="<?php echo $row['emp_id']?>">
				</div>

                <div class="col-sm-13 form-group">
				<input type="text" name="name" value="<?php echo $row['name']?>">
				</div>

                <div class="col-sm-13 form-group">
				<input type="text" name="ic" value="<?php echo $row['ic']?>">
				</div>

				<div class="col-sm-13 form-group">
				<select name="gender">
					<option value="<?php echo $row['gender']?>"><?php echo $row['gender']?></option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				</div>
				
                <div class="col-sm-13 form-group">
				<input type="email" name="email" value="<?php echo $row['email']?>">
				</div>

                <div class="col-sm-13 form-group">
				<input type="text" name="phoneNo" value="<?php echo $row['phoneNo']?>">
				</div>

                <div class="col-sm-13 form-group">
				<input type="text" name="kwsp" value="<?php echo $row['kwsp']?>">
				</div>

				<div class="col-sm-13 form-group">
                <input type="number" name="salary" value="<?php echo $row['salary']?>">
				</div>

				<div class="col-sm-13 form-group">
				<select name="dept" placeholder="Department">
					<option value="<?php echo $row['dept']?>"><?php echo $row['dept']?></option>
					<option value="IT">Information Technology</option>
					<option value="HR">Human Resource</option>
					<option value="OP">Operation</option>
					<option value="FN">Financial</option>
				</select>
				</div>
				
				<div class="col-sm-13 form-group">
                    <input type="submit" class="btn btn-lg btn-warning btn-block" name="submit" value="Submit">
                </div>
			</form>

		</div>
	</div>
</body>
</html>