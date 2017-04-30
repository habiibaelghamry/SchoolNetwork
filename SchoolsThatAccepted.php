<?php session_start() ?>
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
        <li><a href="http://localhost/SchoolNetwork/ParentPage.php">Home</a></li>
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
    <nav id="mainav" class="clear">Schools That Accepted Your Children</nav>
  </div>
</div>
</head>
<?php
 // before any html file include php include 'database.php' 
	$host='localhost';
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="SchoolNetwork";

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	$parent_username = $_SESSION["parent_username"];

	$qry = "call  ViewSchoolsThatAccepted('$parent_username')";

	$result = $con->query($qry) or die('FAILED TO QUERY');

	$r = "";
	if ($result->num_rows > 0) 
	{
		$r = $r. "*Click to enroll child"."<br>"."<br>";
		    
		    while($row = $result->fetch_assoc()) 
            {
            	 
            	 $se = $row['email'];
                 $s_ssn = $row['ssn'];
            	 $r = $r.'<a href="http://localhost/SchoolNetwork/Enroll.php?email='.$se."&ssn=".$s_ssn.'">'.$row['name'].'</a>'.'<br>';

                  $r = $r . "School Name: ".$row['name'];
                  $r = $r . "<br>";
                  $r = $r . "School Email: ".$row['email'];
                  $r = $r . "<br>"; 
                  $r = $r . "Student: ".$row['Student Name']; 
                  $r = $r . "<br>";
                  $r = $r . "SSN: ".$row['ssn']; 
                  $r = $r . "<br>";
                   
                  $r = $r . "<br>";
                  $r = $r . "<br>";

                  

            }

			
	} 
	else 
	{
		$r = $r."0 results";
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
	<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left"> Copyright &copy; 2016 - All Rights Reserved - <a href="#">HNY</a></p>
    <!-- ################################################################################################ --> 
  </div>
</div>

</html>













