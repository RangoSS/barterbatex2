<?php
 include "connection.php";
 class Api extends Connecting{

 var    $first_name;
 var    $last_name;
 var    $user_email;
 var    $p_password;
 var    $home_address;
 var    $cellphone;
 var    $postal_address;
 var    $locations;
 var   $user_type;
 var    $gender;
 var    $files;


 function __construct(){
    $this->first_name=$_POST['first_name'];
    $this->last_name=$_POST['last_name'];
    $this->user_email=$_POST['user_email'];
    $this->p_password=$_POST['p_password'];
    $this->home_address=$_POST['home_address'];
    $this->cellphone=$_POST['cellphone'];
    $this->postal_address=$_POST['postal_address'];
    $this->locations=$_POST['locations'];
    $this->user_type=$_POST['user_type'];
    $this->gender=$_POST['gender'];
    $this->files=$_POST['files'];///////get back to this ?*/
    $this->emailt=$_POST['emailt'];
    $this->pwp=$_POST['pwp'];
    
 }
 function getConn($query){

	$con=$this->getConnection();
     $results=mysqli_query($con,$query);
     return  $results;
}
 
 function insertuser(){

 $image_file=$_FILES["file"]["name"];

$dir="upload/".basename($_FILES["file"]["name"]);
 $location='http://localhost/BAXTERBATER2/'.$dir;
 move_uploaded_file($_FILES["file"]["tmp_name"], $dir);//here we move file to a new location

 	$sql="INSERT INTO user(first_name,last_name,user_email,p_password,home_address,cellphone,postal_address,locations,user_type,gender,user_picture)
           VALUES('$this->first_name','$this->last_name','$this->user_email','$this->p_password','$this->home_address','$this->cellphone','$this->postal_address','$this->locations','$this->user_type','$this->gender','$location')";

     $results=$this->getConn($sql);
     if($results){
     	echo "location:login.php";
     }

     echo "ooops";

 }

 function displayAll(){
 	$sql="SELECT * from user";
 	    $results=$this->getConn($sql);
 	   $info=array();
 	    while($row=mysqli_fetch_assoc($results))
 	    {
          $info[]=$row;
 	    }
 	   echo json_encode($info);
 	    return $info;
 }

 
 ////////////////////////////////////////////
}


if(isset($_POST['action'])){
	$action=$_POST['action'];

	 if($action == 'insertuser')
	{
	  $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $user_email=$_POST['user_email'];
    $p_password=$_POST['p_password'];
    $home_address=$_POST['home_address'];
    $cellphone=$_POST['cellphone'];
    $postal_address=$_POST['postal_address'];
    $locations=$_POST['locations'];
    $user_type=$_POST['user_type'];
    $gender=$_POST['gender'];
    $files=$_POST['file'];
		$api_object=new Api();
		$api_object->insertuser();
	}

}

if(isset($_GET['action'])){
	$action=$_GET['action'];

	 if($action == 'displayAll')
	{
		$api_object=new Api();
		$api_object->displayAll();
	}
}

     


?>