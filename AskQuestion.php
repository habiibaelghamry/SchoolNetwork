<?php
	session_start();
?>

<?php
	$code = $_SESSION['code'];
	$question = $_POST['question'];
	$u=$_SESSION['username'];
	$date= date("Y-m-d h:i:sa");
	$host='localhost';
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="SchoolNetwork";

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	$qry = "call PostQuestions('$u','$code','$question','$date')";

	mysqli_query($con,$qry);
	header('Location: StudentPage.php');
	?>








