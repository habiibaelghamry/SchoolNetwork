<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>HNY School Network</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <nav>
      <ul>
        <li><a href="StudentPage.php">Home</a></li>
      </ul>
    </nav>
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="StudentPage.php">HNY School Network</a></h1>
    </div>
  </header>
</div>
<div class="wrapper row22">
  <div class="rounded">
    <nav id="mainav" class="clear">view information</nav>
  </div>
</div>
</head>
	<div class="wrapper row3" style="display: inline-block;">
  		<div class="rounded">
  		  <main class="container clear"> 
    		  <div class="group btmspace-30"> 

<?php
	$code = $_SESSION['code'];
	$solution = $_POST['solution'];
	$number = $_POST['number'];
	$u=$_SESSION['username'];
	$date= $_POST['date'];
	$host='localhost';
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="SchoolNetwork";

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	$getssn = "select ssn from Students where username = '$u'";
	$ssn = $con->query($getssn);
	$row = $ssn->fetch_assoc();
	$akhiran = $row['ssn'];
	$checkqry = "select * from Assignments_Students_solveAndGrade_Teachers where ssn = '$akhiran' and number = '$number' and 
				post_date = '$date' and code = '$code'";
	 $res2 = $con->query($checkqry);
	  // $exists = $res2->fetch_assoc();
	 if($res2->num_rows > 0){
	 		echo "You can't solve more than once. "."<br>";
		?>
		<h><a href="ViewAssignments.php">Back </a></h>
		<?php

	 }
	 else{

	$qry = "call SolveAssignment('$u','$number','$date','$code','$solution')";

	mysqli_query($con,$qry) or die("Invalid input");
	header('Location: StudentPage.php');
	
}

?>

			</div>
			</main>
		</div>
	</div>

</html>