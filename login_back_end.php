<?php
  session_start();
  include "connection.php";
  class LogMe extends Connecting
  {
  	var $emailt;
    var $pwp;
  	function __construct($al,$mal)
  	{
  		$this->emailt=$al;
  		$this->pwp=$mal;
  	}

  	function getConn($query){

	$con=$this->getConnection();
     $results=mysqli_query($con,$query);
     return  $results;
}


  	function login(){

 $sqls="SELECT first_name,user_email,P_password,user_type from user where user_email='$this->emailt' and P_password='$this->pwp'";

  $results=$this->getConn($sqls);

     // if results returns rows run this statement 
  if($results && mysqli_num_rows($results) > 0){
  $row = mysqli_fetch_assoc($results);


    
    $first_name=$_SESSION['first_name']=$row['first_name'];///my session
  if($row['user_type'] == 'student')
   {
   
  echo 'barter.php'; //display the page so that the ajax caout get
 }
  else if($row['user_type'] == 'employee')
  {
    echo "management.php";
  }
  
 }//end of statement of when we found rows
else
{
  echo "User Not Found"; //if we didn' find match we run this
}
 
 return $results;

 

 }
  }


if(isset($_POST['action']))
{
	$action=$_POST['action'];

 if($action == 'login')
  {

    $emailt=$_POST['emailt'];
    $pwp=$_POST['pwp'];
    $api_object=new LogMe($emailt,$pwp);
    $api_object->login();
  }
}


?>