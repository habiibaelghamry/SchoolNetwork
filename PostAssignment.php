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
    <nav id="mainav" class="clear">post assignment</nav>
  </div>
</div>
<div class="wrapper row3" style="display: inline-block;">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <div class="group btmspace-30"> 
<!-- PostAssignments(my_username varchar(50), number int, post_date datetime, course_code varchar(20), due_date timestamp, content varchar(800)) -->
       <form id="login" method="post" action="PostAssignmentProcess.php">
       	Course Code: <input type = "text" name = "course_code" required></input> <br>
		Assignment Number: <input type = "text" name = "number" required></input> <br>
		Due Date: <input type = "text" name = "due_date" required></input> <br>
		Content: <textarea name="content" cols="75" rows="50" maxlength="800" required></textarea> <br>
		<input type="submit" name="post" value="Post"></input>

	</form>


      </div>
      <div class="clear"></div>
          </main>
            </div>

  </div>

</body>
</html>













