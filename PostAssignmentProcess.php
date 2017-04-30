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
    <nav id="mainav" class="clear">assignment posted</nav>
  </div>
</div>
</head>
<?php
// PostAssignments(my_username varchar(50), number int, post_date datetime, course_code varchar(20), due_date timestamp, content varchar(800))
	$u = $_SESSION['username'];
	$number = $_POST['number'];
	$post_date = date('20y/m/d');
	$course_code = $_POST['course_code'];
	$due_date = $_POST['due_date'];
	$content = $_POST['content'];

	// echo $u.'<br>';
	// echo $number.'<br>';
	// echo $post_date.'<br>';
	// echo $course_code.'<br>';
	// echo $due_date.'<br>';
	// echo $content.'<br>';

	$host='localhost';
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="SchoolNetwork";

	$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
		or die ('Could not connect to the database server' . mysqli_connect_error());

	// $qry = "call PostAssignments('sherif.hamdyy',3,'2016/12/02','Arabic3','2016/12/25 11:59:59','q1 q2 q3')";

	$qry = "call PostAssignments('$u','$number','$post_date','$course_code','$due_date','$content')" ;

	$result = $con->query($qry) or die("Failed to query database");

	if (is_object($result) && $result->num_rows == 1) {
		header("Location: PostAssignment.php");
	}

?>

	<div class="wrapper row3" style="display: inline-block;">
  		<div class="rounded">
  		  <main class="container clear"> 
    		  <div class="group btmspace-30"> 
    		  		<h> <?php echo "posted successfully"; ?> <h>
			</main>
		</div>
	</div>
</html>








