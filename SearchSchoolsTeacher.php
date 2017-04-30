<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>HNY School Network </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <li><a href="http://localhost/SchoolNetwork/TeacherPage.php">Home</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="TeacherPage.php">HNY School Network</a></h1>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div> 
<div class="wrapper row22">
  <div class="rounded">
  <nav id="mainav" class="clear">Search Results</nav>
  </div> 
</div>
</head>

<?php 

        $host ='localhost';
        $port = 3306;
        $socket = "";
        $user = "root";
        $password = "";
        $dbname="SchoolNetwork";

        $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
          or die ('Could not connect to the database server' . mysqli_connect_error());

          $keyword = $_POST["searchTeacher"];

          $qry = "call SearchSchools('$keyword')";

          $result = $con->query($qry) or die('failed to search schools');
          $r = "";
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                   $var = $row['email'];
  
              $r=$r.'<a href="http://localhost/SchoolNetwork/viewInformationTeacher.php?email='.$var.'">'.$row['name'].'</a>'.'<br>';
            }
        } 
        else 
        {
          $r = $r."0 results";
        }

//$con->close();
?>

<div class="wrapper row3" style="display: inline-block;">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <div class="group btmspace-30">
       <h> <?php echo $r; ?> <h>
      </div>
    
      <div class="clear"></div>
          </main>
            </div>

  </div>

</body>
</html>