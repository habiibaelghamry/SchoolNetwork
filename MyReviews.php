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
    <nav id="mainav" class="clear">My Reviews</nav>
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

	$parent_username = $_SESSION["parent_username"];

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());
	//create procedure ViewChildrensSchools(my_username varchar(50))

	$getPssn = "select P.ssn from Parents P where P.username = '$parent_username'";
	$qry1 = $con->query($getPssn) or die("Failed to query1 database");
	$ssn_row = $qry1->fetch_assoc();
	$parent_ssn = $ssn_row['ssn'];

	$qry2 = "select R.review,R.email,R.ssn, S.name from parents_writereviews_schools R, Schools S where ssn = '$parent_ssn' and S.email = R.email";	
	$result = $con->query($qry2) or die("Failed to query database");

	$r = "";
	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc()) 
		{
			$se = $row['email'];
			$r = $r.$row['name'].":"."<br>";
			$r = $r.$row['review']."<br>";
			$r=$r.'<a href="http://localhost/SchoolNetwork/DeleteReview.php?email='.$se."&ssn=".$row['ssn'].'">'."Delete".'</a>'.'<br>';
			$r = $r."<br>";
		}
	} 
	else 
	{
		$r = $r . "0 results<br>";
	}


?>
	 
    <h> <?php echo $r ?> <h>
    		  		
	</div>
	</main>
	</div>

	</div>
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">HNY</a></p>
    <!-- ################################################################################################ --> 
  </div>
</div>
</body>
</html>







