<?php
    include("../DB/connection.php");
    include("../template/navbar.php");

	if(isset($_POST['submit'])){
        $no=$_POST['no'];
	    $emp_id = $_POST['emp_id'];
        $name = $_POST['name'];
        $ic = $_POST['ic'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phoneNo = $_POST['phoneNo'];
        $kwsp = $_POST['kwsp'];
        $salary = $_POST['salary'];
        $dept = $_POST['dept'];
	   
		$sql="UPDATE employee 
            SET 
                emp_id ='$emp_id', 
                name='$name',
                ic = '$ic',
                gender = '$gender',
                email = '$email',
                phoneNo = '$phoneNo',
                kwsp = '$kwsp',
                salary = '$salary',
                dept = '$dept'
            WHERE no='$no'";
		$query=$conn->query($sql);
        // echo $no;
        if($conn -> query($sql) === true) {
            echo "<script>alert('You have succesfully updated a data!');
            window.location='../employee/homeEmp.php';</script>";
        }
        else { 
            echo "<b>Update is not successful!</b><br><br>";
        }
	}
?>