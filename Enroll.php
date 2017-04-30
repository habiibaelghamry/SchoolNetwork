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
    <nav id="mainav" class="clear">view information</nav>
  </div>
</div>
</head>
	<div class="wrapper row3" style="display: inline-block;">
  		<div class="rounded">
  		  <main class="container clear"> 
    		  <div class="group btmspace-30"> 
  <?php 
	$host='localhost';
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="SchoolNetwork";

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	$email = $_GET['email'];
	$ssn = $_GET['ssn'];
	$parent_username = $_SESSION["parent_username"];

	$qry = "call EnrollChild('$parent_username','$email','$ssn')";

	$valid_enroll = "select name from Students where ssn = '$ssn' and school_email is not null ";
 	$res = mysqli_query($con,$valid_enroll);
 	$row = mysqli_fetch_array($res);
	if(!empty($row))
	{
		echo "Already enrolled in a school "."<br>";
		?>
		<h><a href="SchoolsThatAccepted.php">Back </a></h>
		<?php
	}
	else
	{
		mysqli_query($con,$qry);
		echo "Enrolled Successfully"."<br>";
		?>
		<h><a href="SchoolsThatAccepted.php">Back </a></h>
		<?php
		
	}


 ?>
				</div>
			</main>
		</div>
	</div>

</html>
























