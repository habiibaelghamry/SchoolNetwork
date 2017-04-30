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
        <li><a href="ParentPage.php">Home</a></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
    </nav>
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="ParentPage.php">HNY School Network</a></h1>
    </div>
  </header>
</div>
<div class="wrapper row22">
  <div class="rounded">
    <nav id="mainav" class="clear">Reports</nav>
  </div>
</div>
</head>
<?php
	$host='localhost';
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="SchoolNetwork";

	$parent_username = $_SESSION["parent_username"];

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	$qry = "call ViewReports('$parent_username')";

	$result = $con->query($qry) or die('UNAVAILABLE');

// S.name, concat(E.first_name,E.last_name) as 'Teacher', R.comment, S.ssn, R.date
// The report should display the issuing
// date, teacher’s name and comment. The parent can then reply to the report.
	$r = "";
	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc()) 
		{

			 $date = $row['date'];
			 $t_ssn = $row['t_ssn'];	
             $s_ssn = $row['ssn'];

             $r = $r. '<a href="http://localhost/SchoolNetwork/PostReply.php?date='.$date."&ssn=".$s_ssn."&t_ssn=".$t_ssn.'">'.'Click Here to reply'.'</a>'.'<br><br>';

			 $r = $r . "Student: ".$row['name'];
			 $r = $r . "<br>";
			 $r = $r . "Teacher: ".$row['Teacher'];
			 $r = $r . "<br>";
			 $r = $r . "Date: ".$row['date'];
			 $r = $r . "<br>";
			 $r = $r . "Teacher's Comment: ".$row['comment'];
			 $r = $r . "<br>";
			 ?>

      <?php

		}
	} else 
	{
		$r = $r . "0 results<br>";
	}


?>
	<div class="wrapper row3" style="display: inline-block;">
  		<div class="rounded">
  		  <main class="container clear"> 
    		  <div class="group btmspace-30"> 
    		  		<h> <?php echo $r ?> <h>
				</div>
			</main>
		</div>
	</div>

</html>







