<?php 

	$u = $_POST['username'];
	$p = $_POST['password'];

	$host='localhost';
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="SchoolNetwork";

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	$qry = "select * from Users u, Students s where u.username = '$u' and u.password = '$p' and s.username = '$u'";

	$result = $con->query($qry) or die("Failed to query database");

	if ($result->num_rows == 1) {

		session_start();
      	$_SESSION['username'] = $u;
      	header('Location: StudentPage.php');
		
	} else {
		header('Location: loginS.php');
	}
	
?>