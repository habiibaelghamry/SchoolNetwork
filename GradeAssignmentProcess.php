<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>HNY School Network</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
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
    <nav id="mainav" class="clear">grade assignment</nav>
  </div>
</div>
<?php
	$u = $_SESSION['username'];
	$number = $_SESSION['number'];
	$postdate = $_SESSION['postdate']; 
	$code = $_SESSION['code']; 
	$ssn = $_SESSION['ssn'];
	$grade = $_POST['grade'];

	// echo $u;
	// echo "<br>";
	// echo $number;
	// echo "<br>";
	// echo $postdate;
	// echo "<br>";
	// echo $code;
	// echo "<br>";
	// echo $ssn;
	// echo "<br>";
	// echo $grade;
	// echo "<br>";


	$host='localhost';
  	$port=3306;
  	$socket="";
  	$user="root";
  	$password="";
  	$dbname="SchoolNetwork";

  	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
  	  or die ('Could not connect to the database server' . mysqli_connect_error());

  	$qry = "call GradeAssignments('$u', '$ssn', '$grade', '$code', '$number', '$postdate')";

  	$result = $con->query($qry) or die('Failed to grade assignment');

?>

  <div class="wrapper row3" style="display: inline-block;">
      <div class="rounded">
        <main class="container clear"> 
          <div class="group btmspace-30"> 
              <h> <?php echo "grade posted"; ?> <h>
      </main>
    </div>
  </div>
</html>


















