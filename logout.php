<?php
 //we always needs to start session on each pages
 session_start();
  unset($_SESSION['first_name']); 
  header('location:index.php');

?>