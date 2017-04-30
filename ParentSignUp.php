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
        <li><a href="http://localhost/SchoolNetwork/index.html">Home</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">HNY School Network</a></h1>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<div class="wrapper row22">
  <div class="rounded">
    <nav id="mainav" class="clear"> parent signup</nav>
  </div>
</div>
<div class="wrapper row3" style="display: inline-block;">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <!-- ssn, first name, last name, email, address, home no, username, password mobile numbersssss-->
      <div class="group btmspace-30"> 

       <form id="login" method="post" action="ParentSignupProcess.php">
		*SSN: <input type = "text" name = "ssn" required></input> <br>
		*First Name: <input type = "text" name = "first_name" required></input> <br>
		*Last Name: <input type = "text" name = "last_name" required></input> <br>
    Email: <input type = "text" name = "email" ></input> <br>
		Address: <input type = "text" name = "address" ></input> <br>
    Home Number: <input type = "text" name = "home_number" ></input> <br>
    *Mobile Number 1: <input type = "text" name = "mobile_number1" required></input> <br>
    Mobile Number 2: <input type = "text" name = "mobile_number2" ></input> <br>
    Mobile Number 3: <input type = "text" name = "mobile_number3" ></input> <br>
    *Username: <input type = "text" name = "username" required></input> <br>
    *Password: <input type = "password" name = "password" required></input> <br>
		<input type="submit" name="SignUpP" value="Sign Up"></input>

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
</html>