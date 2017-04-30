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
    <nav id="mainav" class="clear">Teachers</nav>
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
	
	$getPssn = "select P.ssn from Parents P where P.username = '$parent_username'";
	$qry1 = $con->query($getPssn) or die("Failed to query1 database");
	$ssn_row = $qry1->fetch_assoc();
	$parent_ssn = $ssn_row['ssn'];

	$getTeachers = "select distinct E.username, concat(E.first_name,' ',E.last_name)as 'name', E2.teacher_ssn from Courses_Students_taughtBy_Teachers E2, Students S,Employees E where S.parent_ssn = '$parent_ssn' and E2.teacher_ssn = E.ssn and S.ssn = E2.student_ssn;"
;
	$result = $con->query($getTeachers) or die("Failed to query2 database");
     $r = "";
  if ($result->num_rows > 0) 
  {

    $r = "Teacher"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rating";
    $r = $r. "<br>";

    while($row = $result->fetch_assoc()) 
    {
      $r = $r.$row['name'];
      $var = $row['username'];
      //create procedure RateTeacher(my_username varchar(50),teacher_username varchar(50), rating int)
      
      
  $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());
      $qry3 = "call ViewOverAllRating('$var')";
      $res = $con->query($qry3) or die("Failed to query3 database");
      $ress= $res->fetch_assoc();
      $rating = $ress['rating'];
      $r = $r."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rating;
      $r = $r. "<br>";
      $r = $r. '<a href="http://localhost/SchoolNetwork/Rate.php?p_username='.$parent_username."&t_ssn=".$row['teacher_ssn'].'">'.'Rate This Teacher &raquo'.'</a>'.'<br><br>';

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

</html>









