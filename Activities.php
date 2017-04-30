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
    <nav id="mainav" class="clear">view Activities</nav>
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
	$u = $_SESSION['username'];
	$qry = "call ViewActivities('$u')";

	$result = $con->query($qry) or die('Failed to query');

	$r = "*To join an activity click on its name";
	$r=$r."<br>";
	$r=$r."<br>";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
				$var = $row['id'];
				$r=$r.'<a href="http://localhost/SchoolNetwork/JoinActivities.php?idd='.$var.'">'.$row['id']." ".$row['name'].'</a>'.'<br>';
				$r = $r . "Date: ".$row['date'];
				$r = $r . "<br>";
				$r = $r . "Location: ".$row['location'];
				$r = $r . "<br>";
				$r = $r . "Type: ".$row['type'];
				$r = $r . "<br>";
				$r = $r . "Description: ".$row['description'];
				$r = $r . "<br>";
				$r = $r . "Equipment: ".$row['equipment'];
				$r = $r . "<br>";
				$r = $r . "Teacher's Name: ".$row['first_name']." ".$row['last_name'];
				$r = $r . "<br>";
				$r = $r . "<br>";
			}
	} else {
		$r = $r."No Activities";
	}

	// echo $r;
//$con->close();
?>

	<div class="wrapper row3" style="display: inline-block;">
  		<div class="rounded">
  		  <main class="container clear"> 
    		  <div class="group btmspace-30"> 
    		  		<h> <?php echo $r; ?> <h>
			</main>
		</div>
	</div>
</html>













