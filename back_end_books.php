<?php
include "connection.php";
 class ApiBoks extends Connecting{

function getConn($query){

	$con=$this->getConnection();
     $results=mysqli_query($con,$query);
     return  $results;
}
 
 /*function insertBooks(){

 $image_file=$_FILES["file"]["name"];

$dir="upload/".basename($_FILES["file"]["name"]);
 $location='http://localhost/BAXTERBATER2/'.$dir;
 move_uploaded_file($_FILES["file"]["tmp_name"], $dir);//here we move file to a new location

 	$sql="INSERT INTO user(first_name,last_name,user_email,p_password,home_address,cellphone,postal_address,locations,user_type,gender,user_picture)
           VALUES('$this->first_name','$this->last_name','$this->user_email','$this->p_password','$this->home_address','$this->cellphone','$this->postal_address','$this->locations','$this->user_type','$this->gender','$location')";

     $results=$this->getConn($sql);
     if($results){
     	echo "one recor has been uploaded";
     }

     echo "ooops";

 }*/

 function myresult(){
 	$myuniversity=$this->universities();
 	$myBooksCategory=$this->barter_bookCategory();
 	$qualification=$this->qualificationType();
 	$arr=array("Unive"=>$myuniversity,"BookCategory"=>$myBooksCategory,"Qualification"=>$qualification);
    echo json_encode($arr);
    return $arr;
 }

 function barter_bookCategory(){
 	//$valuesd=5;
 	$sql="SELECT b_cat_id,category_name from book_category";
 	$results=$this->getConn($sql);
 	$display=array();
 	while($row=mysqli_fetch_assoc($results)){
         $display[]=$row;
 	}
 	//echo json_encode($display);
 	return $display;
 }

 function universities(){
 	
 	$sql="SELECT university_id,university_name from universities";
 	$results=$this->getConn($sql);
 	$display=array();
 	while($row=mysqli_fetch_assoc($results)){
         $display[]=$row;
 	}
 	return $display;
 }
 function qualificationType(){
 	
 	$sql="SELECT qualification_id,qualification_type from qualification_category";
 	$results=$this->getConn($sql);
 	$display=array();
 	while($row=mysqli_fetch_assoc($results)){
         $display[]=$row;
 	}
 	return $display;
 }

 function uploading(){

 	$image_file=$_FILES["file"]["name"];

$dir="upload/".basename($_FILES["file"]["name"]);
 $location='http://localhost/BAXTERBATER2/'.$dir;
 move_uploaded_file($_FILES["file"]["tmp_name"], $dir);//here we move file to a new location

 	$sql="INSERT INTO user(b_cat_id,user_id,qualification_id,iesb,tittle,author,publisher,years,book_image)
           VALUES('$this->first_name','$this->last_name','$this->user_email','$this->p_password','$this->home_address','$this->cellphone','$this->postal_address','$this->locations','$this->user_type','$this->gender','$location')";

     $results=$this->getConn($sql);
 }
}


if(isset($_GET['action'])){
	$action=$_GET['action'];

	 if($action == 'myresult')
	{
		$api_object=new ApiBoks();
		$api_object->myresult();
	}

	
}




?>