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
    <nav id="mainav" class="clear">View Courses</nav>
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
	$qry = "call ViewCoursesToStudent('$u')";

	$result = $con->query($qry) or die('Failed to query');

	$r = "";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
				$var = $row['code'];
				?>
				<?php $r=$r.'<a href="http://localhost/SchoolNetwork/viewInformationCourses.php?code='.$var.'">'.$row['code'].": ".$row['name'].'</a>'.'<br>';?>

<?php		
			}
	} else {
		$r = $r."No Courses";
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













