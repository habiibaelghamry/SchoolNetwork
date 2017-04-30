<?php
	session_start();

	$idd = $_GET['idd'];
	$u = $_SESSION['username'];
	$host='localhost';
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="SchoolNetwork";

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	$qry = "call ApplyForActivities('$u','$idd')";

	$result = mysqli_query($con,$qry);
	if(!is_object($result)){
	header('Location: StudentPage.php');
	}
	else { ?>
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
		        <li><a href="http://localhost/SchoolNetwork/StudentPage.php">Home</a></li>
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
		    <nav id="mainav" class="clear">Activities </nav>
		  </div>
		</div>
		</head>
			<div class="wrapper row3" style="display: inline-block;" style="color: black">
  		<div class="rounded">
  		  <main class="container clear"> 
    		  <div class="group btmspace-30"> 
    		  		<h> <?php echo "Can not join two activities of the same type on the same day"; ?> <h>
			</main>
		</div>
	</div>
</html>
		</html>
		<?php	} ?>
	







