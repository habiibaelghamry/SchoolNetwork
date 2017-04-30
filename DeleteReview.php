<?php session_start(); 
 
	   $host ='localhost';
       $port = 3306;
       $socket = "";
       $user = "root";
       $password = "";
       $dbname="SchoolNetwork";

       $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
          or die ('Could not connect to the database server' . mysqli_connect_error());
       
       $parent_username = $_SESSION['parent_username'];
       $email = $_GET['email'];
      // $ssn = $_GET['ssn'];
       //deleteReview(my_username varchar(50),school_email varchar(60))
       $qry = "call deleteReview('$parent_username','$email')";
       mysqli_query($con,$qry);
       //echo $email;
       header('Location: MyReviews.php');


?>
