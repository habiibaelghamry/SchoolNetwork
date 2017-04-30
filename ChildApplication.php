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
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <li><a href="ParentPage.php">Home</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="ParentPage.php">HNY School Network</a></h1>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<div class="wrapper row22">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<div class="wrapper row3" style="display: inline-block;">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <!-- ApplyFor(my_username varchar(50),s_email varchar(60),ssn bigint, name varchar(50),
            birth_date datetime, gender varchar(6),grade int)-->
      <div class="group btmspace-30"> 

  <form id="login" method="post" action="ConfirmApplication.php">
		Apply For Your Child: <br>
    *School Email: <input type = "text" name = "semail" ></input> <br>
		*SSN: <input type = "number" name = "ssn" ></input> <br>
		*Name: <input type = "text" name = "name" ></input> <br>
		Date of Birth: <input type = "date" name = "birthDate" ></input> <br>
		Gender: <input type = "text" name = "gender" ></input> <br>
    *Grade: <input type = "number" name = "grade" ></input> <br>
		<input type="submit" name="Apply" value="Apply"></input>

	</form>


      </div>
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->

      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
          </main>
            </div>

  </div>

</body>
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">HNY</a></p>
    <!-- ################################################################################################ --> 
  </div>
</div>
</html>