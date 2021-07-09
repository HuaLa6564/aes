<?php
	session_start(); //Initialize the session
	session_unset(); //Unset all the session variables
	session_destroy(); // Finally, destroy the session
	header("location:index.php");
?>