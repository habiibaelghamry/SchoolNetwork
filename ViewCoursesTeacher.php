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
        <li><a href="TeacherPage.php">Home</a></li>
      </ul>
    </nav>
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="TeacherPage.php">HNY School Network</a></h1>
    </div>
  </header>
</div>
<div class="wrapper row22">
  <div class="rounded">
    <nav id="mainav" class="clear">view courses</nav>
  </div>
</div>
</head>

<?php
	
   // if (isset($_SESSION['username']))
      // echo $_SESSION['username'];

	$u = $_SESSION['username'];

	$host='localhost';
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="SchoolNetwork";

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	$qry = "call ViewCoursesToTeacher('$u')";

	$result = $con->query($qry) or die("Failed to query database");

	$r = "";
	$e = 1;
	$m = 1;
	$h = 1;
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {

			if($row['grade']>=1 && $row['grade']<=6 && $e==1)
			{
				$r = $r . 'Elementary:<br>';
				$e = $e+1;
			}
			if($row['grade']>=7 && $row['grade']<=9 && $m==1)
			{
				$r = $r."<br>";
				$r = $r . 'Middle:<br>';
				$m = $m+1;
			}
			if($row['grade']>=10 && $row['grade']<=12 && $h==1)
			{
				$r = $r."<br>";
				$r = $r . 'High:<br>';
				$h = $h+1;
			}

			$r = $r . $row['grade'].': '.$row['name'].'<br>';
		
		}
	} else {
		$r = $r . "No Courses<br>";
	}
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














