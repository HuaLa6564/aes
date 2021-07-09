<?php
    include("../DB/connection.php");

	if(isset($_POST['emp_id'])){
		if(empty($_POST['emp_id'])|| empty($_POST['name'])||empty($_POST['ic']) ||empty($_POST['gender']) ||empty($_POST['email']) ||empty($_POST['phoneNo'])||empty($_POST['kwsp'])||empty($_POST['salary'])||empty($_POST['dept']))
			echo "<script>alert('Please Do It Again!'); window.location='../employee/addEmp.php'</script>";
		else {
		   $emp_id = $_POST['emp_id'];
		   $name = $_POST['name'];
		   $ic = $_POST['ic'];
		   $gender = $_POST['gender'];
		   $email = $_POST['email'];
		   $phoneNo = $_POST['phoneNo'];
		   $kwsp = $_POST['kwsp'];
		   $salary = $_POST['salary'];
		   $dept = $_POST['dept'];
		   //image upload
		//    $img_name = $_FILES['my_image']['name'];
		//    $img_size = $_FILES['my_image']['size'];
		//    $tmp_name = $_FILES['my_image']['tmp_name'];
		//    $error = $_FILES['my_image']['error'];	
		   
		//    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
		//    $img_ex_lc = strtolower($img_ex);
		//    $allowed_exs = array("jpg", "jpeg", "png"); 

		//    $new_img_name = uniqid(true).'.'.$img_ex_lc;
		//    $img_upload_path = 'uploads/'.$new_img_name;
		//    move_uploaded_file($tmp_name, $img_upload_path);


			$sql="INSERT INTO employee (emp_id, name, ic, gender, email, phoneNo, kwsp, salary,dept) 
				  VALUES ('$emp_id', '$name', '$ic', '$gender', '$email', '$phoneNo', '$kwsp', '$salary', '$dept')";
			$query=$conn->query($sql);
			echo "<script>alert('Thank you your data has been saved !'); window.location='../employee/homeEmp.php'</script>";
			
		}
		
	}
         
    include("../template/navbar.php");
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
		<h2><center><font style="font-family:Trajan Pro;color:teal;">Add Employee</font></center></h2>
		<br>
		
			<form name="form1" method="post" action="addEmp.php">
				
				<div class="col-sm-13 form-group">
				<input type="text" name="emp_id" placeholder="Employee ID">
				</div>

                <div class="col-sm-13 form-group">
				<input type="text" name="name" placeholder="Name">
				</div>

                <div class="col-sm-13 form-group">
				<input type="text" name="ic" placeholder="Identification Card No.">
				</div>

				<div class="col-sm-13 form-group">
				<select name="gender" placeholder="Department">
					<option value="">Select Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				</div>
				
                <div class="col-sm-13 form-group">
				<input type="email" name="email" placeholder="Email">
				</div>

                <div class="col-sm-13 form-group">
				<input type="text" name="phoneNo" placeholder="Phone Number">
				</div>

                <div class="col-sm-13 form-group">
				<input type="text" name="kwsp" placeholder="KWSP">
				</div>

				<div class="col-sm-13 form-group">
                <input type="number" name="salary" placeholder="Salary">
				</div>

				<div class="col-sm-13 form-group">
				<select name="dept" placeholder="Department">
					<option>Select Department</option>
					<option value="IT">Information Technology</option>
					<option value="HR">Human Resource</option>
					<option value="OP">Operation</option>
					<option value="FN">Financial</option>
				</select>
				</div>

				<!-- <div class="col-sm-13 form-group"> -->
					<!-- <input type="text" name="fname" placeholder="Enter File Name " Required> -->
					<!-- <input type="file" id="my_image" name="my_image" accept="image/*"> -->
				<!-- </div> -->

				<div class="col-sm-13 form-group">
                    <input type="submit" class="btn btn-lg btn-warning btn-block" name="submit" value="Submit">
                </div>
			</form>

		</div>
	</div>
</body>
</html>