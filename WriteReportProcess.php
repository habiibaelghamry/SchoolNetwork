<?php session_start(); ?>
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
        <li><a href="TeacherPage.php">Home</a></li>
      </ul>
    </nav>
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="TeacherPage.php">HNY School Network</a></h1>
    </div>
  </header>
</div>
<div class="wrapper row22">
  <div class="rounded">
    <nav id="mainav" class="clear">assignment posted</nav>
  </div>
</div>
</head>
<?php
// create procedure WriteMonthlyReport(my_username varchar(50), student_username varchar(50), date datetime, comment varchar(150)) 
	$u = $_SESSION['username'];
	$student_username = $_POST['student_username'];
	$date = date('20y/m/d');
	$comment = $_POST['comment'];

	// echo $u;
	// echo "<br>";
	// echo $student_username;
	// echo "<br>";
	// echo $date;
	// echo "<br>";
	// echo $comment;
	// echo "<br>";

	$host='localhost';
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="SchoolNetwork";

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	$check = "call checkStudent('$u','$student_username')";
	$checkresult = $con->query($check) or die("Failed to query1 database");

	if($checkresult->num_rows > 0)
	{
		$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

		$qry = "call WriteMonthlyReport('$u','$student_username','$date','$comment')" ;
		$result = $con->query($qry) or die("Failed to query2 database");
	}
	else
	{
		header('Location: WriteReport.php');
	}

?>


	<div class="wrapper row3" style="display: inline-block;">
  		<div class="rounded">
  		  <main class="container clear"> 
    		  <div class="group btmspace-30"> 
    		  		<h> <?php echo "Report Written Successfully"; ?> <h>
			</main>
		</div>
	</div>
</html>
















