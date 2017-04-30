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
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="http://localhost/SchoolNetwork/Logout.php">Log Out</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="#">HNY School Network</a></h1>
    </div>
    <div class="fl_right">
      <form class="clear" method="post" action="http://localhost/SchoolNetwork/SearchSchoolsStudent.php">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" name="searchStudent" placeholder="Search Here">
          <button class="fa fa-search" type="submit" name="searchBtn" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
           <?php echo "welcome ".$_SESSION['username'];?>
          
      <!-- ################################################################################################ -->
      
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 
      <!-- ################################################################################################ -->
      <figure id="slide-1"><a class="view" href="#"><img src="images/demo/cover1.png" alt=""></a>
        <figcaption>
          <h2>The Website</h2>
          <p>HNY is the first ever website in the region sewing the gaps, connecting schools,staff, students and
parents all in the same platform. We offer a wide variety of services for registered accounts. Sign up and become a part of the network!</p>
        </figcaption>
      </figure>
      <figure id="slide-2"><a class="view" href="#"><img src="images/demo/parents3.png" alt=""></a>
        <figcaption>
          <h2>For Parents</h2>
          <p>Parents, we decided to offer you the luxury of online applications, unlimited access to keep track of your childrens' performance, giving feedback on teachers and so much more.</p>

        </figcaption>
      </figure>
      <figure id="slide-3"><a class="view" href="#"><img src="images/demo/students3.png" alt=""></a>
        <figcaption>
          <h2>For Students</h2>
          <p>Students, you were not forgotten. We have granted you special features as well. You have direct access to all your posted assignments (YAY), you can bore your teacher with questions, view/join activities and much more in store.</p>
        </figcaption>
      </figure>
      <figure id="slide-4"><a class="view" href="#"><img src="images/demo/teachers3.png" alt=""></a>
        <figcaption>
          <h2>For Teachers</h2>
          <p>Teachers, the moulders of generations. We have bestowed upon you direct access to view the courses you teach, instantly grade assignments on the click of a button, answering questions asked by confused studnets and much more.</p>
        </figcaption>
      </figure>
      <figure id="slide-5"><a class="view" href="#"><img src="images/demo/halawa1.png" alt=""></a>
        <figcaption>
          <h2>For Administrators</h2>
          <p>Administrators, the wizards behind the scenes. You have been granted full and total power over the affairs of your schools.
You can manage students' applications, post announcements, create activities and so many more powers granted just for you.</p>
        </figcaption>
      </figure>
      <!-- ################################################################################################ -->
      <ul id="slide-tabs">
        <li><a href="#slide-1">About The  <br>Website</a></li>
        <li><a href="#slide-2">Parents'  <br> Features</a></li>
        <li><a href="#slide-3">Students' <br> Features</a></li>
        <li><a href="#slide-4">Teachers'  <br> Features</a></li>
        <li><a href="#slide-5">Administrators' Features</a></li>
      </ul>
      <!-- ################################################################################################ --> 
    </div>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3" style="display: inline-block; position:absolute; margin-top: -10px;">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-30"> 
            <?php
        $host='localhost';
        $port=3306;
        $socket="";
        $user="root";
        $password="";
        $dbname="SchoolNetwork";

        $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
          or die ('Could not connect to the database server' . mysqli_connect_error());

        $qry = "select * from Students where username = \"$_SESSION[username]\"";

        $result = $con->query($qry) or die("Failed to query database");

        if ($result->num_rows ==1) {
          $row = $result->fetch_assoc();
          if($row['grade']>9){
  ?>
          <p id="v" ><a href="http://localhost/SchoolNetwork/viewSchoolsS.php">View Schools &raquo;</a></p>
          <p id="v" ><a href="http://localhost/SchoolNetwork/ViewCourses.php">My Courses &raquo;</a></p>
          <p id="v" ><a href="http://localhost/SchoolNetwork/Activities.php">School's Activities &raquo;</a></p>
           <p id="v" ><a href="http://localhost/SchoolNetwork/Clubs.php">Clubs &raquo;</a></p>
            <?php 
            $_SESSION['semail'] = $row['school_email'];
          }
  else { ?>
           <p id="v" ><a href="http://localhost/SchoolNetwork/viewSchoolsS.php">View Schools &raquo;</a></p>
          <p id="v" ><a href="http://localhost/SchoolNetwork/ViewCourses.php">My Courses &raquo;</a></p>
          <p id="v" ><a href="http://localhost/SchoolNetwork/Activities.php">School's Activities &raquo;</a></p>

  <?php } ?>
      </div>
      <!-- / main body -->
      <div class="clear"></div>
          </main>
            </div>
  </div>
  <div id="myprofile" style="display: inline-block; position:absolute; right:130px;">
    <form method="post" action="UpdateInformation.php">

      My Profile <br>
      <p> SSN: <?php echo $row['ssn']?> </p>
      <p> Name: <?php echo $row['name']?> </p>
      <p> Date Of Birth: <?php echo $row['birth_date']?> </p>
      <p>Age: <?php echo $row['age']?> </p>
      <p>Gender: <?php echo $row['gender']?> </p>
      <p>Grade: <?php echo $row['grade']; ?> </p>
      <p>School Email: <?php echo $row['school_email']?> </p>
      <p>Username: <?php echo $row['username']?> </p>
      <input type="submit" name="updateInfo" value="Update Information"></input>
      <?php } ?>
    </form>
  </div>


<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">HNY</a></p>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>

</body>
</html>
