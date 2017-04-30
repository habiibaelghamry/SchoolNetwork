<?php 
        
      session_start();

      $u= $_SESSION['username'];

      $host='localhost';
	  $port=3306;
	  $socket="";
	  $user="root";
	  $password="";
      $dbname="SchoolNetwork";

	  $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		   or die ('Could not connect to the database server' . mysqli_connect_error());
		if(!(empty($_POST['ssn'])))
		{
			$ssn = $_POST['ssn'];
			$qry = "call UpdateSsn('$u','$ssn')";
			mysqli_query($con,$qry);
		}
		if(!(empty($_POST['name'])))
		{
			$name = $_POST['name'];
			echo $name;
			$qry = "call UpdateName('$u','$name')";
			mysqli_query($con,$qry);

		}
		if(!(empty($_POST['birthDate'])))
		{
			$birthDate = $_POST['birthDate'];
			$qry = "call UpdateBirthDate('$u','$birthDate')";
			mysqli_query($con,$qry);
		}
		if(!(empty($_POST['gender'])))
		{
			$gender = $_POST['gender'];
			$qry = "call UpdateGender('$u','$gender')";
			mysqli_query($con,$qry);
		}
		if(!(empty($_POST['password'])))
		{
			$password = $_POST['password'];
			$qry = "call UpdatePassword('$u','password')";
			mysqli_query($con,$qry);
		}
		 header('Location: StudentPage.php');

?>
