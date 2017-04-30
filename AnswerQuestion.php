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
    <nav id="mainav" class="clear">answer question</nav>
  </div>
</div>

<?php
	$u = $_SESSION['username'];
	$timestamp = $_GET['timestamp'];
	$code = $_GET['code'];
	$student_ssn = $_GET['ssn'];

	// echo $u;
	// echo "<br>";
	// echo $timestamp;
	// echo "<br>";
	// echo $code;
	// echo "<br>";
	// echo $student_ssn;
?>

<div class="wrapper row3" style="display: inline-block;">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <div class="group btmspace-30"> 
      <?php $_SESSION['timestamp'] = $timestamp; $_SESSION['code'] = $code; $_SESSION['ssn'] = $student_ssn; ?>
       <form id="login" method="post" action="AnswerQuestionProcess.php">
		Solution: <textarea name = "solution" rows="10" cols="75" maxlength="150" required></textarea> <br>
		<input type="submit" name="post" value="Enter"></input>
	</form>
      </div>
      <div class="clear"></div>
          </main>
            </div>
  </div>
</body>
</html>














