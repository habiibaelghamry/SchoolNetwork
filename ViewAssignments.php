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
    <nav id="mainav" class="clear">Assignments</nav>
  </div>
</div>
</head>
<?php
	$code = $_SESSION['code'];
	$u=$_SESSION['username'];
	$host='localhost';
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="SchoolNetwork";

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	$qry1 = "call ViewAssignments('$u','$code')";

	$result = $con->query($qry1) or die("Failed to query1 database");

	$r = "";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$r = $r . "Number: ".$row['number'];
			$r = $r . "<br>";
			$r = $r . "Date: ".$row['date'];
			$r = $r . "<br>"; 
			$r = $r . "Course Code: ".$row['course_code'];
			$r = $r . "<br>";
			$r = $r . "Due Date: ".$row['due_date'];
			$r = $r . "<br>"; 
			$r = $r . "Content: ".$row['content'];
			$r = $r . "<br>"; 
			$r = $r . "<br>"; 

		}
	
	} else {
		$r = $r . "0 result<br>";
	}



?>
	<div class="wrapper row3" style="display: inline-block;">
  		<div class="rounded">
  		  <main class="container clear"> 
    		  <div class="group btmspace-30"> 
    		  		<h> <?php echo $r ?> <h>
    		  		<form method="post" action="http://localhost/SchoolNetwork/SolveAssignments.php">
    		  		 <input type="submit" name="view" value="Solve"></input>
    		  		 </form>
				</div>
			</main>
		</div>
	</div>

</html>







