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
    <nav id="mainav" class="clear">view students</nav>
  </div>
</div>

<?php

	$u = $_SESSION['username'];
	$code = $_GET['code'];
	$number = $_GET['number'];
	$postdate = $_GET['postdate'];

	$host='localhost';
  	$port=3306;
  	$socket="";
  	$user="root";
  	$password="";
  	$dbname="SchoolNetwork";

  	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
  	  or die ('Could not connect to the database server' . mysqli_connect_error());

	$qry = "select a.solution, s.name, a.ssn, a.grade from Assignments_Students_solveAndGrade_Teachers a, Students s, Employees e where a.ssn = s.ssn and e.ssn = a.teacher_ssn and e.username = '$u' and a.code = '$code' and a.number = '$number' and a.post_date = '$postdate' order by s.ssn";

  	$result = $con->query($qry) or die('Failed to view students');

	$r = "";
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc()) {
			$_SESSION['solution'] = $row['solution'];
			$r=$r.'<a href="GradeAssignments.php?code='.$code.'&number='.$number.'&postdate='.$postdate.'&ssn='.$row['ssn'].'">'.'Name: '.$row['name'].'</a>'.'<br>';
      $r = $r . 'Grade: '.$row['grade'].'<br>';
			$r = $r."<br>";
		}
		//.'$solution='.$row['solution']
	}
	else
	{
		$r = $r."no assignments";
	}

?>

  <div class="wrapper row3" style="display: inline-block;">
      <div class="rounded">
        <main class="container clear"> 
          <div class="group btmspace-30"> 
              <h> <?php echo $r; ?> <h>
            </div>
      </main>
    </div>
  </div>
</html>



















