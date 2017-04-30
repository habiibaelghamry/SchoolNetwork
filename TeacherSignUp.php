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
    <nav id="mainav" class="clear"> teacher signup</nav>
  </div>
</div>
<div class="wrapper row3" style="display: inline-block;">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <!-- TeacherSignUp(ssn bigint,first_name varchar(50), middle_name varchar(50),last_name varchar(50),birth_date datetime, address varchar(70),email varchar (60),gender varchar(6),school_email varchar(60))-->
      <div class="group btmspace-30"> 

       <form id="signup" method="post" action="TeacherSignupProcess.php">
        		*SSN: <input type = "text" name = "ssn" required></input> <br>
        		*First Name: <input type = "text" name = "first_name" required></input> <br>
        		Middle Name: <input type = "text" name = "middle_name" ></input> <br>
        		*Last Name: <input type = "text" name = "last_name" required></input> <br>
        		Date of Birth: <input type = "date" name = "birth_date" ></input> <br>
        		Address: <input type = "text" name = "address" ></input> <br>
        		*Email: <input type = "text" name = "email" required></input> <br>
        		Gender: 
            <!-- <input type = "text" name = "gender" ></input> <br> -->
             <input type="radio" name="gender" value="male"> male <input type="radio" name="gender" value="female"> female <br><br>
            *School Email: <input type = "text" name = "school_email" required></input> <br>
            <input type="submit" name="SignUpT" value="Sign Up"></input>
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