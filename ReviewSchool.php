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
    <nav id="mainav" class="clear">Write Review</nav>
  </div>
</div>
</head>
<div class="wrapper row3" style="display: inline-block;">
  		<div class="rounded">
  		  <main class="container clear"> 
    		  <div class="group btmspace-30">
  <?php echo "".$_GET['sname'].":"."<br><br>" ?>
	<form class="clear" method="post" action="ReviewPosted.php">
    <textarea name="review"  rows = "15" cols="50" ></textarea> <br>
    <input type="submit" name = "btn"></input> <br>
    </form>
    <?php 	  
    $_SESSION['school_email'] = $_GET['email'];
 	  ?>
    		  		
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

