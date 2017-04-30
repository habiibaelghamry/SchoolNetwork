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
    <nav id="mainav" class="clear">grade assignment</nav>
  </div>
</div>

<?php
	$u = $_SESSION['username'];
	$code = $_GET['code'];
	$number = $_GET['number'];
	$postdate = $_GET['postdate'];
	$ssn = $_GET['ssn'];
	$solution = $_SESSION['solution'];



?>

<div class="wrapper row3" style="display: inline-block;">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <div class="group btmspace-30"> 
       <h> <?php echo $solution; ?> <h>
      <?php $_SESSION['number'] = $number; $_SESSION['postdate'] = $postdate; $_SESSION['code'] = $code; $_SESSION['ssn'] = $ssn; ?>

       <form id="login" method="post" action="GradeAssignmentProcess.php">
		Grade: <textarea name = "grade" rows="3" cols="7" maxlength="7" required></textarea> <br>
		<input type="submit" name="post" value="Enter"></input>
	</form>
      </div>
      <div class="clear"></div>
          </main>
            </div>
  </div>
</body>
</html>




































