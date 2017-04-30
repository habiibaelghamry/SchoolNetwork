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
    <nav id="mainav" class="clear">Solve Assignments</nav>
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


?>
	<div class="wrapper row3" style="display: inline-block;">
  		<div class="rounded">
  		  <main class="container clear"> 
    		  <div class="group btmspace-30"> 
    		  		
    		  		<form method="post" action="http://localhost/SchoolNetwork/SolveAssignmentProcess.php">
    		  		 Number: <input type="number" name="number" required></input>
    		  		 Post Date: <input type="date" name="date" required></input>
    		  		 Solution:  <textarea name="solution"  rows = "15" cols="50" required></textarea> 
    		  		 <input type="submit" name="solve" value="Solve"></input>
    		  		 </form>
				</div>
			</main>
		</div>
	</div>

</html>







