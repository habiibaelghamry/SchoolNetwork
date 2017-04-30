<?php session_start(); ?>
<?php 
		$host ='localhost';
        $port = 3306;
        $socket = "";
        $user = "root";
        $password = "";
        $dbname="SchoolNetwork";

        $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
          or die ('Could not connect to the database server' . mysqli_connect_error());


		$_SESSION["date"] =  $_GET['date'];
		$_SESSION["t_ssn"] = $_GET['t_ssn'];
		$_SESSION["s_ssn"] = $_GET['ssn'];

		//echo $_SESSION["s_ssn"];

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
    <nav id="mainav" class="clear">Reply to report</nav>
  </div>
</div>
</head>

 	<div class="wrapper row3" style="display: inline-block;">
  		<div class="rounded">
  		  <main class="container clear"> 
    		  <div class="group btmspace-30"> 
    		  		<form class="clear" method="post" action="ReplyPosted.php">
                <textarea name="reply"  rows = "15" cols="50" ></textarea> <br>
    		  			<input type="submit" name = "btn"></input> <br>
    		  		</form>
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
