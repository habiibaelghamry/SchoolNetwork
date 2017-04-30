
<?php

      // <!-- ssn, first name, last name, email, address, home no, username, password mobile numbersssss-->
	ini_set('memory_limit', '-1');
	$ssn = $_POST['ssn'];
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$homeno = $_POST['home_number'];
	$mobileno1 = $_POST['mobile_number1'];
	$mobileno2 = $_POST['mobile_number2'];
	$mobileno3 = $_POST['mobile_number3'];
	$username = $_POST['username'];
	$p = $_POST['password'];

	$host='localhost';
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="SchoolNetwork";
	
	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	$check = "select * from Users where username = '$username'";
	$checkresult = $con->query($check) or die("Failed to query database");

	if ($checkresult->num_rows == 0) {

		$qry1 = "call SignUp('$ssn','$fname','$lname','$email','$address','$homeno','$username','$p')";
		$result1 = $con->query($qry1) or die("Failed to query1 database");

		$qry2 = "call AddMobileNumbers('$ssn','$mobileno1')";
		$result2 = $con->query($qry2) or die("Failed to query2 database");

		if(!empty($mobileno2))
		{
			$qry3 = "call AddMobileNumbers('$ssn','$mobileno2')";
			$result3 = $con->query($qry3) or die("Failed to query3 database");
		}	

		if(!empty($mobileno3))
		{
			$qry4 = "call AddMobileNumbers('$ssn','$mobileno3')";
			$result4 = $con->query($qry4) or die("Failed to query4 database");
		}

		session_start();
		$_SESSION["parent_username"] = $username;
		header('Location: ParentPage.php');

	} else {
		header('Location: ParentSignUp.php');
	}
?>

