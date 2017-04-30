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
<?php
	$email = $_GET['email'];
	$host='localhost';
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="SchoolNetwork";

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	$qry1 = "select * from Schools where email = '$email'";
	$qry2 = "call ViewReviews('$email')";
	$qry3 = "call ViewAnnouncements('$email')";

	$result = $con->query($qry1) or die("Failed to query1 database");
	$rev = $con->query($qry2) or die("Failed to query2 database");

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());
	$ann = $con->query($qry3) or die("Failed to query3 database");

	$r = "";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$r = $r . "Email: ".$row['email'];
			$r = $r . "<br>";
			$r = $r . "Name: ".$row['name'];
			$r = $r . "<br>"; 
			$r = $r . "Type: ".$row['type']; 
			$r = $r . "<br>";
			$r = $r . "Language: ".$row['language']; 
			$r = $r . "<br>";
			$r = $r . "Address: ".$row['address']; 
			$r = $r . "<br>";
			$r = $r . "Phone Number: ".$row['phone_number']; 
			$r = $r . "<br>";
			$r = $r . "General Information: ".$row['general_information']; 
			$r = $r . "<br>";
			$r = $r . "Mission: ".$row['mission']; 
			$r = $r . "<br>";
			$r = $r . "Vision: ".$row['vision']; 
			$r = $r . "<br>";
			$r = $r . "Fees: ".$row['fees']." LE"; 
			$r = $r . "<br>";
		}
	} else {
		$r = $r . "0 result<br>";
	}

	if ($rev->num_rows > 0) {
		$r = $r . "<br>Reviews:<br>";
		while($row = $rev->fetch_assoc()) {
			$r = $r . $row['review'];
			$r = $r . "<br>";

		}
	} else {
		$r = $r . "<br>No reviews<br>";
	}

	if ($ann->num_rows > 0) {
		$r = $r . "<br>Announcements:<br>";
		while($row = $ann->fetch_assoc()) {
			$r = $r . "Email: ".$row['number'];
			$r = $r . "<br>";
			$r = $r . "Name: ".$row['date'];
			$r = $r . "<br>"; 
			$r = $r . "Type: ".$row['title']; 
			$r = $r . "<br>";
			$r = $r . "Language: ".$row['type']; 
			$r = $r . "<br>";
			$r = $r . "Address: ".$row['description']; 
			$r = $r . "<br>";
		}
	} else {
		$r = $r . "<br>No Announcements<br>";
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







