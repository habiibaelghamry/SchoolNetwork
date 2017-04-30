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

	
	$name = $_POST["name"];
	$school_email = $_POST["semail"];
	$student_ssn = $_POST["ssn"];
	$birthDate = $_POST["birthDate"];
	$gender = $_POST["gender"];
	$grade = $_POST["grade"];
	$parent_username = $_SESSION["parent_username"];

	$qry = "call ApplyFor('$parent_username','$school_email','$student_ssn','$name','$birthDate','$gender','$grade')";

	// $result = $con->query($qry) or die("Failed to query database");

	if (empty($name) || empty($school_email) || empty($student_ssn) || empty($grade))
	{ 
		?>
       <h> <?php echo "Incomplete Input"."<br>";?>  </h>
		<h><a href="ChildApplication.php">Back </a></h>
		<?php
		
	}
	else
	{	
		
			mysqli_query($con,$qry); ?>
			<h> <?php echo "Applied Successfully"."<br>"; ?> <h> 
			<h><a href="ParentPage.php">Back </a></h>
		<?php
		
		
	}

	
?>

				</div>
			</main>
		</div>
	</div>

</html>



























