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
    <nav id="mainav" class="clear">Update Information</nav>
  </div>
</div>
</head>
<body>
<?php
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
            <form method="post" action="UpdateInformationProcess.php">
     
                My Profile <br>
                *Type in what you want to change <br>
                SSN: <input style="color: black" type = "number" name = "ssn" ></input> <br>
                Name: <input style="color: black" type = "text" name = "name" ></input> <br>
                Date Of Birth: <input  style="color: black" type = "date" name = "birthDate" ></input> <br>
                Gender: <input  style="color: black" type = "text" name = "gender" ></input> <br>
                Password: <input  style="color: black" type = "text" name = "password" ></input> <br>
                <input  type="submit" name="updateInfo" value="Update Information"></input>
            </form>
          </div>
        </main>
      </div>  
  </div>


</body>
</html>