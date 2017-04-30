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

		$host ='localhost';
        $port = 3306;
        $socket = "";
        $user = "root";
        $password = "";
        $dbname="SchoolNetwork";

        $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
          or die ('Could not connect to the database server' . mysqli_connect_error());

        $parent_username = $_SESSION["parent_username"];

		 
		$date =  $_SESSION["date"] ;
		$t_ssn = $_SESSION["t_ssn"];
		$s_ssn = $_SESSION["s_ssn"];
		$reply = $_POST['reply'];
		//Parents_viewAndReply_Report

	  $qry_pssn = "select ssn from Parents where username = '$parent_username'";
	  $result = $con->query($qry_pssn);
	  $p_ssn = $result->fetch_assoc();
	  $p_ssnakhiran = $p_ssn['ssn'];

	  $qry_validity = "select reply from  Parents_viewAndReply_Report where parent_ssn = '$p_ssnakhiran' and date = '$date' and ssn = $s_ssn and teacher_ssn = $t_ssn";
	  $res2 = $con->query($qry_validity);
	  $exists = $res2->fetch_assoc();
	  $exists_akhiran = $exists['reply'];
		

	if(!empty($exists_akhiran))
	  {
	  	echo "You can't reply more than once. "."<br>";
		?>
		<h><a href="ViewReports.php">Back </a></h>
		<?php
	  }
	  else{
				$qry = "call replyToReport('$parent_username','$date','$s_ssn','$t_ssn','$reply')";
	    		mysqli_query($con,$qry);
	    		header('Location: ParentPage.php');	  
	  	}    	


 ?>

				</div>
			</main>
		</div>
	</div>

</html>

































