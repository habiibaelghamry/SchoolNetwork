<?php
session_start();

session_destroy(); 
//echo 'You have been logged out. <a href="index.html">Home Page</a>';
header('Location: index.html');
?>
	
