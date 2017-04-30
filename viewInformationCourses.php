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
    <nav id="mainav" class="clear">Information About A Course</nav>
  </div>
</div>
</head>
<?php
	$code = $_GET['code'];
	$host='localhost';
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="SchoolNetwork";

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	$qry1 = "select * from Courses where code = '$code'";

	$result = $con->query($qry1) or die("Failed to query1 database");
	

	// $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		// or die ('Could not connect to the database server' . mysqli_connect_error());
	

	$r = "";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$r = $r . "Code: ".$row['code'];
			$r = $r . "<br>";
			$r = $r . "Name: ".$row['name'];
			$r = $r . "<br>"; 
			$r = $r . "Grade: ".$row['grade']; 
			$r = $r . "<br>";
			$r = $r . "Description: ".$row['description']; 
			$r = $r . "<br>";
			$r = $r . "Level Name: ".$row['level_name']; 
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
    		  				<?php $_SESSION['code'] = $code; ?>
    		  				<form method="post" action="http://localhost/SchoolNetwork/AskQuestion.php">
    		  				<input style="color: black" type="text" name="question" placeholder="Type Your Question Here" size="35" required></input>

    		  				 <input type="submit" name="view" value="Ask"></input>

							 </form>
							 <br>
							 <form method="post" action="ViewQuestions.php">
							 <input type="submit" name="view" value="View Questions"></input>
							 </form>
							 <br>
							 <form method="post" action="ViewAssignments.php">
							 <input type="submit" name="viewA" value="View Assignments"></input>
							 </form>
							 <br>
							 <form method="post" action="CheckGrades.php">
							 <input type="submit" name="checkG" value="Check My Grades"></input>
							 </form>
				</div>
			</main>
		</div>
	</div>

</html>







