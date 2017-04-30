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
    <nav id="mainav" class="clear">list students</nav>
  </div>
</div>

<?php
  
  $u = $_SESSION['username'];


  $host='localhost';
  $port=3306;
  $socket="";
  $user="root";
  $password="";
  $dbname="SchoolNetwork";

  $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());

  $qry = "call ListStudents('$u')";

  $result = $con->query($qry) or die('Failed to list students');

  $array = array(1,1,1,1,1,1,1,1,1,1,1,1,1);
  $prev = "";
  $r = "";
  if($result->num_rows > 0)
  {
    while($row = $result->fetch_assoc()) {

      if($array[$row['grade']]==1)
      {
        $r = $r.'<br>'.'Grade: '.$row['grade'].'<br>';
        $array[$row['grade']] = 2;
      }
      if($prev!=$row['course_code'])
      {
        $r = $r.'<br>'.'Course: '.$row['course_code'].'<br>';
        $prev=$row['course_code'];
      }
      $r=$r. $row['name']; 
      $r = $r."<br>";
    }
  }
  else
  {
    $r = $r."no students";
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


























