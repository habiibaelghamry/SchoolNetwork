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
        <li><a href="http://localhost/SchoolNetwork/index.html">Home</a></li>
      </ul>
    </nav>
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="index.html">HNY School Network</a></h1>
    </div>
  </header>
</div>
<div class="wrapper row22">
  <div class="rounded">
    <nav id="mainav" class="clear">teacher signup</nav>
  </div>
</div>
</head>
<?php 
      // TeacherSignUp(ssn bigint,first_name varchar(50), middle_name varchar(50),last_name varchar(50),birth_date datetime, address varchar(70),email varchar (60),gender varchar(6),school_email varchar(60))
	$ssn = $_POST['ssn'];
	$fname = $_POST['first_name'];
	$mname = $_POST['middle_name'];
	$lname = $_POST['last_name'];
	$bdate = $_POST['birth_date'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$semail = $_POST['school_email'];

	$host='localhost';
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="SchoolNetwork";
?>
	<div class="wrapper row3" style="display: inline-block;">
  		<div class="rounded">
  		  <main class="container clear"> 
    		  <div class="group btmspace-30">
<?php
	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	$qry = "call TeacherSignUp('$ssn','$fname','$mname','$lname','$bdate','$address','$email','$gender','$semail')" ;

	$result = $con->query($qry) or die("Your data is incorrect");

?>

 
    		  		<h> <?php echo "You have signed up, wait for your school administrator to verify you :)" ?> <h>
				</div>
			</main>
		</div>
	</div>

</html>









