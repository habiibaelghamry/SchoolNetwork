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
    <nav id="mainav" class="clear">write report</nav>
  </div>
</div>
<div class="wrapper row3" style="display: inline-block;">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <div class="group btmspace-30"> 
       <form id="login" method="post" action="WriteReportProcess.php">
       <!-- create procedure WriteMonthlyReport(my_username varchar(50), student_username varchar(50), date datetime, comment varchar(150)) -->
       	Student username: <input type = "text" name = "student_username" required></input> <br>
		Comment: <textarea name = "comment" rows="10" cols="75" maxlength="150" required></textarea> <br>
		<input type="submit" name="post" value="Post"></input>
	</form>
      </div>
      <div class="clear"></div>
          </main>
            </div>
  </div>
</body>
</html>













